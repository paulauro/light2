/**
 * @file
 * Change node create page elements color.
 */

(function ($, Drupal) {
  
    // This only works after ajax call.
    $(document).ajaxComplete(function() {
        $(".ui-dialog-titlebar").css("background-color", "yellow");
    });
})(jQuery);

// Change the node create page breadcrumb backgorund color. 
(function($) {
    $(document).ready(function() {
        $(".breadcrumb").css("background-color", "red");
    });
})(jQuery, Drupal);

// Change the node create page header background color. 
(function($) {
    $(document).ready(function() {
        $(".region-header").css("background-color", "blue");
        $(".region-header").css("color", "yellow");
    });
})(jQuery, Drupal);
