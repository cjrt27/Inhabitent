/*below jquery for blur */

(function ($) {
  'use strict';

  $( ".search-submit" ).click(function( event ) {
    event.preventDefault();
  });
$('.search-field').hide();
$('.search-submit').click(function(e){ 
    e.stopPropagation();
    $('.search-field').slideToggle();
});
$('.search-field').click(function(e){
    e.stopPropagation();
});

$(document).click(function(){
     $('.search-field').slideRight();
});


}(jQuery));