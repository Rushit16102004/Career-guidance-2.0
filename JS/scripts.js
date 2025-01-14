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