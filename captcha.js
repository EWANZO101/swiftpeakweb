// Generate a random CAPTCHA code
function generateCaptcha() {
    const captchaCode = Math.random().toString(36).slice(2, 8).toUpperCase();
    document.getElementById('captcha').textContent = `CAPTCHA: ${captchaCode}`;
    return captchaCode;
  }
  
  // Validate the entered CAPTCHA code
  function validateCaptcha(inputValue, captchaCode) {
    return inputValue.toUpperCase() === captchaCode;
  }
  
  document.addEventListener('DOMContentLoaded', function () {
    const captchaCode = generateCaptcha();
  
    const form = document.getElementById('authForm');
    form.addEventListener('submit', function (event) {
      event.preventDefault();
      
      const enteredCaptcha = document.getElementById('captchaInput').value;
      if (validateCaptcha(enteredCaptcha, captchaCode)) {
        alert('CAPTCHA verification successful!');
        // You can add your authentication logic here
        // For example, redirect to another page or perform authentication checks
      } else {
        alert('CAPTCHA verification failed. Please try again.');
        // Regenerate CAPTCHA to prevent spam
        generateCaptcha();
      }
    });
  });
  