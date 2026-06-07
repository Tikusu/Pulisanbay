/**
   * careers.js — Careers Page Form & Interactivity
   * 
   * Handles smooth scrolling, custom file upload drag-and-drop,
   * client-side validation, and asynchronous form submission.
   */

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("applicationForm");
  const fileInput = document.getElementById("cvUpload");
  const uploadZone = document.getElementById("uploadZone");
  const filenameDisplay = document.getElementById("filenameDisplay");
  const selectedNameSpan = document.getElementById("selectedName");
  const submitBtn = document.getElementById("submitBtn");
  const btnText = document.getElementById("btnText");

  // Helper strings
  const STRINGS = {
    DEFAULT: "Submit Application",
    SUBMITTING: "Submitting application...",
    SIZE_ERROR: "File size exceeds the 3MB limit.",
    TYPE_ERROR: "Only PDF files are allowed.",
    GENERIC_ERROR: "An error occurred. Please try again.",
    SUCCESS: "Application submitted successfully! Thank you for applying.",
    FILL_ALL: "Please fill out all required fields."
  };

  // --- Smooth Scroll to Form ---
  window.scrollToForm = function() {
    const formSection = document.getElementById("applicationFormSection");
    if (formSection) {
      formSection.scrollIntoView({ behavior: "smooth" });
    }
  };

  // --- Interactive Drag & Drop File Upload ---
  if (uploadZone && fileInput) {
    // Prevent defaults for drag events
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
      uploadZone.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
      e.preventDefault();
      e.stopPropagation();
    }

    // Highlighting drop zone on dragover
    ['dragenter', 'dragover'].forEach(eventName => {
      uploadZone.addEventListener(eventName, () => {
        uploadZone.classList.add('dragover');
      }, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
      uploadZone.addEventListener(eventName, () => {
        uploadZone.classList.remove('dragover');
      }, false);
    });

    // Handle dropped files
    uploadZone.addEventListener('drop', (e) => {
      const dt = e.dataTransfer;
      const files = dt.files;

      if (files.length > 0) {
        fileInput.files = files;
        handleFileSelection(files[0]);
      }
    });

    // Handle normal file input selection
    fileInput.addEventListener('change', () => {
      if (fileInput.files.length > 0) {
        handleFileSelection(fileInput.files[0]);
      }
    });
  }

  // Validate and display file name
  function handleFileSelection(file) {
    // Check file type (PDF)
    if (file.type !== "application/pdf" && !file.name.toLowerCase().endsWith(".pdf")) {
      showToast(STRINGS.TYPE_ERROR, "error");
      resetFileInput();
      return;
    }

    // Check file size (3MB = 3,145,728 bytes)
    const maxSize = 3 * 1024 * 1024;
    if (file.size > maxSize) {
      showToast(STRINGS.SIZE_ERROR, "error");
      resetFileInput();
      return;
    }

    // Display filename
    selectedNameSpan.textContent = file.name;
    filenameDisplay.style.display = "inline-flex";
  }

  function resetFileInput() {
    fileInput.value = "";
    filenameDisplay.style.display = "none";
    selectedNameSpan.textContent = "";
  }

  // --- AJAX Form Submission ---
  if (form) {
    form.addEventListener("submit", async (e) => {
      e.preventDefault();

      // Check fields client-side
      const name = form.name.value.trim();
      const email = form.email.value.trim();
      const phone = form.phone.value.trim();
      const prevPosition = form.prev_position.value.trim();
      const division = form.division.value.trim();
      const expectedSalary = form.expected_salary.value.trim();
      const cvFile = fileInput.files[0];

      if (!name || !email || !phone || !prevPosition || !division || !expectedSalary || !cvFile) {
        showToast(STRINGS.FILL_ALL, "error");
        return;
      }

      // Check Email
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        showToast("Please enter a valid email address.", "error");
        return;
      }

      // Prepare FormData (for file uploads, we do NOT use JSON stringify)
      const formData = new FormData(form);

      // Disable button
      submitBtn.disabled = true;
      btnText.textContent = STRINGS.SUBMITTING;

      try {
        const response = await fetch("/api/submit-application", {
          method: "POST",
          body: formData // Fetch sets content-type header automatically for FormData
        });

        const data = await response.json();

        if (data.success) {
          showToast(STRINGS.SUCCESS, "success");
          form.reset();
          resetFileInput();
        } else {
          showToast(data.error || STRINGS.GENERIC_ERROR, "error");
        }
      } catch (err) {
        console.error("Submission error:", err);
        showToast(STRINGS.GENERIC_ERROR, "error");
      } finally {
        // Re-enable button
        submitBtn.disabled = false;
        btnText.textContent = STRINGS.DEFAULT;
      }
    });
  }
});
