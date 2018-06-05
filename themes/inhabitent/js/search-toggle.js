/*below jquery for search toggle */

(function ($) {
  'use strict';

  $( '.search-submit' ).click(function( event ) {
    event.preventDefault();
  });

  $('.search-field').hide();

$('.search-submit').click(function(e){ 
    e.stopPropagation();
    $('.search-field').slideToggle();
});

$('.search-field').blur(function(){
  $('.search-field').css({'display':'none'});
});

$('.search-field').click(function(e){
    e.stopPropagation();
});

$('.search-submit').click(function(){
  $('.search-field').focus();
})

$('.search-field').on('submit',function(event){
  event.preventDefault();
  window.location.href('?s=' + $('.search-field').val());
});

}(jQuery));


