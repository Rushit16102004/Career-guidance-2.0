// JS/login.js

$(document).ready(function() {
  // Toggle between login and signup forms
  $('#signup').click(function(e) {
      e.preventDefault();
      $('#first').hide();
      $('#second').show();
  });

  $('#signin').click(function(e) {
      e.preventDefault();
      $('#second').hide();
      $('#first').show();
  });
  // Form validation
  $('form').submit(function(e) {
      e.preventDefault();

      let isValid = true;
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  

      // Validate email and password for login
      if ($(this).find('#email').length) {
        const email = $('#email').val();
        const password = $('#password').val();
        const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;

        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address.');
            isValid = false;
        }
        if (!passwordPattern.test(password)) {
            alert('Password must contain at least one uppercase letter, one lowercase letter, and one number.');
            isValid = false;
        }
    }

      // Validate signup fields
      if ($(this).find('#firstname').length) {
          const firstname = $('#firstname').val();
          const lastname = $('#lastname').val();
          const email = $('#email').val();
          const password = $('#password').val();
          const confirmPassword = $('#Cpassword').val();

          if (firstname === '' || lastname === '') {
              alert('First Name and Last Name are required.');
              isValid = false;
          }
          if (!emailPattern.test(email)) {
              alert('Please enter a valid email address.');
              isValid = false;
          }
          if (password.length < 6) {
              alert('Password must be at least 6 characters long.');
              isValid = false;
          }
          if (password !== confirmPassword) {
              alert('Passwords do not match.');
              isValid = false;
          }
      }

      if (isValid) {
        alert('Form submitted successfully!');
        window.location.href = 'RateSelf.html';
      }
  });
});