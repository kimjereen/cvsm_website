
$(document).ready(function() {
    // Get the current URL path and split it to get the filename
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/') + 1);
  
    // Loop through each nav item and add 'active' class if its href matches the current filename
    $('.nav-link').each(function () {
      var href = $(this).attr('href');
      if (href === filename) {
        $(this).addClass('active');
      }
    });
  });
  