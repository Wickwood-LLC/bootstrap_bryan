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

        $('#page').css({
          "margin-top": '0',
        });

        // console.log('Distance from top of page: ' + stickyTop);
        // console.log('Position on load ' + currentPosition);

        if (currentPosition < 0) {   // if target element goes above the screen
          $header.addClass('sticky-header');

          $('#page').css({
            'margin-top': headerHeight + topSpacing,
          });

          $(".pane-page-site-name").appendTo("#mini-panel-header .panel-col .inside > div"); // insert "Clenahan" after "Bryan"
        }
        else {
          $header.removeClass('sticky-header');

          $('#page').css({
            'margin-top': '0',
          });

          $(".pane-page-site-name").prependTo("#mini-panel-header .panel-col-bottom .inside > div"); // return "Clenahan" to its original location
        }

        if ($('#admin-menu').length) {
          if (currentPosition < 0) {   // if target element goes above the screen
            $header.css({
              top: topSpacing,
            });

            $(".pane-page-site-name").appendTo("#mini-panel-header .panel-col .inside > div"); // insert "Clenahan" after "Bryan"
          }
          else {
            $header.css({
              top: '0',
            });

            $(".pane-page-site-name").prependTo("#mini-panel-header .panel-col-bottom .inside > div"); // return "Clenahan" to its original location
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

          $('#page').css({
            'margin-top': headerHeight + topSpacing,
          })

          $(".pane-page-site-name").appendTo("#mini-panel-header .panel-col .inside > div"); // insert "Clenahan" after "Bryan"
        }
        else if (currentPosition >= 0) {
          $header.removeClass('sticky-header');

          $('#page').css({
            'margin-top': '0',
          })

          $(".pane-page-site-name").prependTo("#mini-panel-header .panel-col-bottom .inside > div"); // return "Clenahan" to its original location
        }

        if ($('#admin-menu').length) {
          if (currentPosition < 0) {   // if target element goes above the screen
            $header.css({
              top: topSpacing,
            });   //stick it at the top

            $(".pane-page-site-name").appendTo("#mini-panel-header .panel-col .inside > div"); // insert "Clenahan" after "Bryan"
          }
          else {
            $header.css({
              top: '0',
            });

            $(".pane-page-site-name").prependTo("#mini-panel-header .panel-col-bottom .inside > div"); // return "Clenahan" to its original location
          }
        }

        // console.log("Top spacing is " + topSpacing);
      });
    }
  };
}(jQuery));
