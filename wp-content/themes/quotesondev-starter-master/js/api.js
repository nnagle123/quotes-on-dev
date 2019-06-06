$(document).ready(function(){
    console.log(api_vars);

(function( $ ) {
    $('.buttonmania').on('click', function(event) {
       event.preventDefault();
       $.ajax({
          method: 'GET',
          url: api_vars.root_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
       }).done( function(response) {
         $('.quote').html(response[0].content.rendered);
         $('.author').html(response[0].title.rendered);
       });
         $('.source')( response [0]._qod_quote_source) 
         // echo " (response [0]._qod_quote_source) "
      
    });
 })( jQuery );


 });