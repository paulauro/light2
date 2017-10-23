/**
 * @file
 * Change node create page elements color.
 */

(function ($, Drupal) {
  
    // This only works after ajax call.
    $(document).ajaxComplete(function() {
        $(".ui-dialog-titlebar").css("background-color", "red");
    });
})(jQuery);

// Change the node create page breadcrumb backgorund color. 
(function ($, Drupal) {
    $(document).ready(function() {
        $(".ui-dialog-titlebar").css("background-color", "green");
    });
})(jQuery, Drupal);



(function ($, Drupal) {
  
    // This only works after ajax call.
    $(document).ajaxComplete(function() {
        //$(".form-item-attributes-data-entity-embed-display").hide();
        $('button span:contains("Back")').parent().hide();

    });
})(jQuery);






