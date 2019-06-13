$(document).ready(function () {
  console.log(api_vars);

  (function ($) {
    $('.buttonmania').on('click', function (event) {
      event.preventDefault();
      $.ajax({
        method: 'GET',
        url: api_vars.root_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
      }).done(function (response) {
        console.log(response)
        $('.quote').html(response[0].content.rendered);
        $('.author').html(response[0].title.rendered);
        if (response[0]._qod_quote_source.length !== 0 && response[0]._qod_quote_source_url.length !== 0) {
          let source = response[0]._qod_quote_source
          let sourceURL = response[0]._qod_quote_source_url

          $('.source').html('<p><a href="' + sourceURL + '">' + source + '</a></p>');
        }
      });
    });
  })(jQuery);

  (function ($) {
    $('.submitAQuote').on('click', function (event) {
      event.preventDefault();
      console.log("Quote Submitted")
      console.log(api_vars.root_url)
      const author = $('.author').val()
      const quote = $('.quote').val()
      const source = $('.source').val()
      const URL = $('.URL').val()
      $.ajax({
        method: 'POST',
        url: api_vars.root_url + 'wp/v2/posts',
        data: {
          content: quote,
          title: author,
          _qod_quote_source: source,
          _qod_quote_source_url: URL,
        },
        beforeSend: function(xhr) {
          xhr.setRequestHeader( 'X-WP-Nonce', api_vars.wpapi_nonce );
       }
      }).done(function (response) {
        // console.log(response)
       
      });
    });
  })(jQuery);
 });