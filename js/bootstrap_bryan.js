(function ($) {
  Drupal.behaviors.stickyHeader = {
    attach: function (context, settings) {
      var stickyTop;
      var headerWidth;
      var headerHeight;
      var windowTop;
      var currentPosition;
      var $header;
      var topSpacing;

      $header = $('#header');
      topSpacing = $('#admin-menu').height();
      headerHeight = $header.height();        // gets the height of our header

      $(document).ready(sticky);
      $(window).on("resize mresize", sticky);

      function sticky() {
        headerWidth = $header.width();          // gets the width of the container
        $header.css({
          // width: "initial",
        });
        if ($('sticky-header')) {
          $header.removeClass('sticky-header');
        }
        headerHeight = $header.height();        // gets the height of our header

        stickyTop = $header.offset().top;       // tells how far our target element is from the top of the page
        windowTop = $(window).scrollTop();    // tells how far our screen is currently from the top of the page
        currentPosition = stickyTop - windowTop + headerHeight;    // tells how far our target element is from where our screen is currently
        topSpacing = $('#admin-menu').height();

        $('body').css({
          "margin-top": '0',
        });

        // console.log('Distance from top of page: ' + stickyTop);
        // console.log('Position on load ' + currentPosition);

        if (currentPosition < 0) {   // if target element goes above the screen
          $header.addClass('sticky-header');

          $('body').css({
            'margin-top': headerHeight,
          });
        }
        else {
          $header.removeClass('sticky-header');

          $('body').css({
            'margin-top': '0',
          });
        }

        if ($('#admin-menu').length) {
          if (currentPosition < 0) {   // if target element goes above the screen
            $header.css({
              top: topSpacing,
            });
          }
          else {
            $header.css({
              top: '0',
            });
          }
        }

        // console.log("Top spacing is " + topSpacing);
      }

      $(window).scroll(function(){ // scroll event 
        windowTop = $(window).scrollTop();    // tells how far our screen is currently from the top of the page
        currentPosition = stickyTop - windowTop + headerHeight;    // tells how far our target element is from where our screen is currently

        // console.log('Distance from top of page: ' + stickyTop);
        // console.log('Current position: ' + currentPosition);

        if (currentPosition < 0) {   // if target element goes above the screen
          $header.addClass('sticky-header');

          $('body').css({
            'margin-top': headerHeight,
          })
        }
        else if (currentPosition >= 0) {
          $header.removeClass('sticky-header');

          $('body').css({
            'margin-top': '0',
          })
        }

        if ($('#admin-menu').length) {
          if (currentPosition < 0) {   // if target element goes above the screen
            $header.css({
              top: topSpacing,
            });   //stick it at the top
          }
          else {
            $header.css({
              top: '0',
            });
          }
        }

        // console.log("Top spacing is " + topSpacing);
      });
    }
  };
}(jQuery));
