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
         if(response[0]._qod_quote_source.length !== 0 && response[0]._qod_quote_source_url.length !== 0){
            let source = response[0]._qod_quote_source
            let sourceURL = response[0]._qod_quote_source_url
            
             $('.source').html('<p><a href="' + sourceURL + '">' + source + '</a></p>'); 

         
         
           // $('.source').html(response[0]._qod_quote_source ); 
          

         }
       });
      
         
     
         // $('.source')( response [0]._qod_quote_source) 
         // // echo " (response [0]._qod_quote_source) "
      
    });
 })( jQuery );


 });