$(document).ready(function(x) {
  x.preventDefault();
})
  function toggleContent(postId) {
    const content = document.getElementById(postId);
    if (content.style.display === "none") {
      content.style.display = "block";
    } else {
      content.style.display = "none";
    }$(document).ready(function() {
      // Prevent default action for form submission
      $('form').on('submit', function(e) {
        e.preventDefault();
        // Add form validation logic here
        alert("Form submitted successfully!");
      });
    
      // Smooth scrolling for navigation links
      $('a[href^="#"]').on('click', function(event) {
        event.preventDefault();
        const target = this.hash;
        $('html, body').animate({
          scrollTop: $(target).offset().top
        }, 800);
      });
    });
    
    // Toggle content for blog posts
    function toggleContent(postId) {
      const content = document.getElementById(postId);
      if (content.style.display === "none") {
        content.style.display = "block";
      } else {
        content.style.display = "none";
      }
    }
  }

    function submitForm() {
    if (!document.getElementById('successMessage')) {
      const messageDiv = document.createElement('div');
      messageDiv.id = 'successMessage';
      messageDiv.innerText = "🚀 Your message has been sent successfully! We'll get back to you as soon as possible. Thank you for reaching out!";
      document.body.appendChild(messageDiv);
    }
    const messageDiv = document.getElementById('successMessage');
    messageDiv.style.display = 'block';
    setTimeout(() => {
      messageDiv.style.opacity = 1;
    }, 10);
    setTimeout(() => {
      messageDiv.style.opacity = 0;
    }, 3000);
  }