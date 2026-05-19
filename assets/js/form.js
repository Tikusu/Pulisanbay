// =============================================
// FORM VALIDATION & SUBMISSION
// =============================================
// Handles the contact inquiry form: client-side validation
// and async submission to the PHP API endpoint.
// Depends on showToast() from main.js being loaded first.
// =============================================

/** UI string constants */
const FORM_STRINGS = {
  SENDING: "Sending...", // submit button
  DEFAULT: "Send Inquiry", // submit button
  SUCCESS: "Thank you! Your inquiry has been submitted successfully.", // toast
  CONNECT_ERROR: "Unable to connect. Please try again later.", // toast
  FIELDS_REQUIRED: "Please fill in all fields.", // toast
  INVALID_EMAIL: "Please enter a valid email address.", // toast
  GENERIC_ERROR: "Something went wrong. Please try again.", // toast
};

/** Email validation regex */
const EMAIL_REGEX = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

/**
 * Validates inquiry form fields.
 * @param {{ name: string, email: string, whatsapp: string, message: string }} fields
 * @returns {string|null} Error message string, or null if valid.
 */
function validateInquiryForm({ name, email, whatsapp, message }) {
  if (!name || !email || !whatsapp || !message) {
    return FORM_STRINGS.FIELDS_REQUIRED;
  }
  if (!EMAIL_REGEX.test(email)) {
    return FORM_STRINGS.INVALID_EMAIL;
  }
  return null;
}

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("inquiryForm");
  if (!form) return;

  form.addEventListener("submit", async (e) => {
    e.preventDefault();
    const btn = document.getElementById("submitBtn");
    const btnText = document.getElementById("btnText");

    const fields = {
      name: form.name.value.trim(),
      email: form.email.value.trim(),
      whatsapp: form.whatsapp.value.trim(),
      message: form.message.value.trim(),
    };

    // Client-side validation
    const validationError = validateInquiryForm(fields);
    if (validationError) {
      showToast(validationError, "error");
      return;
    }

    // Submit to API — path is relative to /public/ directory
    btn.disabled = true;
    btnText.textContent = FORM_STRINGS.SENDING;

    try {
      const res = await fetch("../api/submit-inquiry.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(fields),
      });
      const data = await res.json();

      if (data.success) {
        showToast(FORM_STRINGS.SUCCESS, "success");
        form.reset();
      } else {
        showToast(data.error || FORM_STRINGS.GENERIC_ERROR, "error");
      }
    } catch (err) {
      showToast(FORM_STRINGS.CONNECT_ERROR, "error");
    } finally {
      btn.disabled = false;
      btnText.textContent = FORM_STRINGS.DEFAULT;
    }
  });
});
