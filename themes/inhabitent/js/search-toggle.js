/*below jquery for search toggle */

(function ($) {
  'use strict';

  $( '#site-navigation .search-submit' ).click(function( event ) {
    event.preventDefault();
  });

  $('#site-navigation .search-field').hide();

$('#site-navigation .search-submit').click(function(e){ 
    e.stopPropagation();
    $('#site-navigation .search-field').slideToggle();
});

$('#site-navigation .search-field').blur(function(){
  $('#site-navigation .search-field').css({'display':'none'});
});

$('#site-navigation .search-field').click(function(e){
    e.stopPropagation();
});

$('#site-navigation .search-submit').click(function(){
  $('#site-navigation .search-field').focus();
})

$('#site-navigation .search-field').on('submit',function(event){
  event.preventDefault();
  window.location.href('?s=' + $('#site-navigation .search-field').val());
});

}(jQuery));


