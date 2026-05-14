// =============================================
// FORM VALIDATION & SUBMISSION
// =============================================
// Handles the contact inquiry form: client-side validation
// and async submission to the PHP API endpoint.
// Depends on showToast() from main.js being loaded first.
// =============================================

document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('inquiryForm');
  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const btn = document.getElementById('submitBtn');
    const btnText = document.getElementById('btnText');
    
    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const whatsapp = form.whatsapp.value.trim();
    const message = form.message.value.trim();

    // Client-side validation
    if (!name || !email || !whatsapp || !message) {
      showToast('Please fill in all fields.', 'error');
      return;
    }
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      showToast('Please enter a valid email address.', 'error');
      return;
    }

    // Submit to API — path is relative to /public/ directory
    btn.disabled = true;
    btnText.textContent = 'Sending...';

    try {
      const res = await fetch('../api/submit-inquiry.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ name, email, whatsapp, message })
      });
      const data = await res.json();
      
      if (data.success) {
        showToast('Thank you! Your inquiry has been submitted successfully.', 'success');
        form.reset();
      } else {
        showToast(data.error || 'Something went wrong. Please try again.', 'error');
      }
    } catch (err) {
      showToast('Unable to connect. Please try again later.', 'error');
    } finally {
      btn.disabled = false;
      btnText.textContent = 'Send Inquiry';
    }
  });
});
