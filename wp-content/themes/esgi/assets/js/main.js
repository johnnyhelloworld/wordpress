jQuery(document).ready(function($) {
  
  // Toggle menu on button click
  $('.menu-button').on('click', function() {
      $('.main-menu').slideToggle();
  });
  
  // Close menu on closeElement click
    $('.close-element').on('click', function() {
      $('.main-menu').hide();
  });
});