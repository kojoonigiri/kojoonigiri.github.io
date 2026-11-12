// Formspree Contact Form Handler
// Shows success message after successful submission
document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('form.inline-form');
  const formMessage = document.querySelector('.form-message');

  if (!form || !formMessage) return;

  form.addEventListener('submit', function (e) {
    // Prevent default submit behavior to control the flow
    e.preventDefault();

    // Submit form to Formspree using traditional POST
    // This will redirect to Formspree's confirmation page
    form.submit();

    // Show our success message for user feedback
    // Note: Formspree will also show its own confirmation page
    formMessage.classList.add('show');
  });
});
