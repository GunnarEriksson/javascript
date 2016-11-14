/**
 * Nine gifts in jQuery
 */
$(document).ready(function () {
  "use strict";

  /**
   * Related to all examples. This expands the box to full width.
   */
  $(".gift").click(function() {
    $(this).parent().addClass("fullwidth");
    $(this).parent().find("*").show("slow");
    $(this).parent().children(".gift").hide();
    console.log("Clicked to open a box, displaying it in full width.");
  });


  /**
   * Related to all examples. This minimizes the box.
   */
  $(".minimize").click(function() {
    $(this).parent().find("*").hide();
    $(this).parent().removeClass().addClass("box").show();
    $(this).parent().children(".gift").show();
    console.log("Minimizing the box.");
  });

  /**
   * Exercise 1. Selecting items, hide, show and change their look
   */
   $("#box1 .toggleColorFont").click(function() {
     $(this).toggleClass("grey");
     console.log("toggle grey letters!");
   });

   $("#box1 .toggleUppercase").click(function() {
     $(this).toggleClass("uppercase");
     console.log("toggle uppercase!");
   });

   $("#box1 .toggleDark").click(function() {
     $(this).toggleClass("dark");
     console.log("toggle dark!");
   });

   /**
    * Exercise 2. Events and event propagation
    */
    $("#box2").click(function() {
        if ($(this).hasClass('fullwidth')) {
            $(this).toggleClass('dark');
            console.log("Make the background dark with white text.");
        }
    });

    $("#box2 img.example").click(function(event) {
        event.stopPropagation();
        $(this).toggleClass("thumbnail");
        console.log("toggle thumbnail!");
    });

    /**
     * Exercise 3. Add and remove elements
     */
    var addColor = function() {
        $('<div class="palette"></div>')
        .css("background-color", $('#colorBox').val())
        .insertAfter('#palette')
        .click(function() {
            $(this).remove();
            console.log("Removing an item from the color palette.");
        });

        console.log("Adding color to palette!");
    };

    $('#box3 input[type=button]').click(addColor);
    $('#box3 input[type=text]').keypress(function(event) {
        if ( event.which == 13 ) {
            event.preventDefault();
            addColor();
        }
    });

    /**
     * Exercise 4. Resize image.
     */
    var current_dimension = function() {
        var width = $("#box4 img.example").width();
        var height = $("#box4 img.example").height();
        $('#box4_current').text(width + 'px x ' + height + "px");
        console.log("Width: " + width + ", Height: " + height);
    };

    $('#box4_dimensions').click(current_dimension());

    $('#box4_width_incr').click(function() {
        $("#box4 img.example").css('width', '+=5px');
        console.log("Increase the width of the image.");
        current_dimension();
    });

    $('#box4_width_decr').click(function() {
        $("#box4 img.example").css('width', '-=5px');
        console.log("Decrease the width of the image.");
        current_dimension();
    });

    $('#box4_height_incr').click(function() {
        $("#box4 img.example").css('height', '+=5px');
        console.log("Increase the height of the image.");
        current_dimension();
    });

    $('#box4_height_decr').click(function() {
        $("#box4 img.example").css('height', '-=5px');
        console.log("Decrease the height of the image.");
        current_dimension();
    });

    /**
     * Exercise 5. Basic animations
     */
    $('#fade-toggle').click(function() {
        $('#box5-img51').fadeToggle(2000);
        console.log("Fading the image!");
        return false;
    });

    $('#slide-toggle').click(function() {
        $('#box5-img52').slideToggle(2000);
        console.log("Sliding the image!");
        return false;
    });

    /**
     * Exercise 6. Lightbox
     */
    var positionLightBoxImage = function(windowHeigth, windowWidth) {
        var top = (windowHeigth - $('#lightbox').height()) / 2;
        var left = (windowWidth - $('#lightbox').width())  / 2;

        $('#lightbox')
            .css({
                'top': top,
                'left': left
            })
            .fadeIn();
        console.log("Position lightbox image set!");
    };

    var removeLightBox = function() {
        $('#overlay, #lightbox')
            .fadeOut('slow', function() {
                $(this).remove();
                $('body')
                    .css('overflow-y', 'auto');
            });
        console.log("Lightbox removed!");
    };

    $(".lightbox").click(function() {
        var windowHeigth = window.innerHeight || $(window).height(); // make it work on ipad & android
        var windowWidth  = window.innerWidth  || $(window).width();

        $('body').css('overflow-y', 'hidden');

        $('<div id="overlay"></div>')
            .css('top', $('document').scrollTop())
            .css('opacity', '0')
            .animate({'opacity' : '0.5'}, 'slow')
            .appendTo('body');

        $('<div id="lightbox"></div>')
            .hide()
            .appendTo('body');

        $('<img>')
            .attr('src', $(this).attr('src'))
            .css({
                'max-height': windowHeigth,
                'max-width':  windowWidth
            })
            .load(function() {
                positionLightBoxImage(windowHeigth, windowWidth);
            })
            .click(function() {
                removeLightBox();
            })
            .appendTo('#lightbox');

        console.log("Display image in lightbox.");

        return false;
     });

    /**
     * Exercise 7. Image gallery
     */
     var createThumbNails = function() {
         var current = null;
         $('.gallery-all img').each(function() {
             var thumbnailWidth = $(this).width();
             var thumbnailHeight = $(this).height();
             $(this)
                 .attr('src', $(this).attr('src1') + '?w=' + thumbnailWidth + '&h=' + thumbnailHeight + '&crop-to-fit')
                 .click(function() {
                     if (!current) {
                         current = this;
                     } else {
                         $(current).toggleClass('selected');
                         current = this;
                     }
                     $(this).toggleClass('selected');
                     showImage(this);
                 });
             console.log("Gallery thumbnails was initiated!");
          });
     };

    var showImage = function(thumbnail) {
        var imageWidth = $('.gallery-current').width();
        var imageHeight = $('.gallery-current').height();
        $('.gallery-current img').attr('src', $(thumbnail).attr('src1') + '?w=' + imageWidth + '&h=' + imageHeight);
    };

    var initGallery = function() {
        createThumbNails();
        $('.gallery-all img').first().trigger('click');
    };

    initGallery();


    /**
     * Slidheshow
     */
     function initSlideshow() {
         console.log("Init slideshow!");
         var intervalId = null;
         var numberOfPhotos = $('.slideshow img').length;
         var currentPhoto = 0;
         var zIndex = parseInt($('.slideshow').css('z-index'));
         var currentZIndex = zIndex;
         var newZIndex = 0;

         var rotateImages = function() {
             $('.slideshow img').eq(currentPhoto).fadeOut('slow', function() {
                 $(this)
                 .css('z-index', (zIndex - numberOfPhotos + 1))
                 .fadeIn(0)
                 .siblings().each(function() {
                     newZIndex = parseInt($(this).css('z-index'));
                     newZIndex++;
                     $(this).css('z-index', newZIndex);
                 });
             });
             currentPhoto++;
             currentPhoto = currentPhoto % numberOfPhotos;
         };

         $('.slideshow img').eq(currentPhoto).fadeOut(function() {
             $('.slideshow img').each(function() {
                 $(this).css(
                     'zIndex', currentZIndex--
                 );
             })
             .click(function() {
                 rotateImages();
             });
         });

         $('#box8 .gift').click(function() {
             intervalId = setInterval(function() {
                 rotateImages();
             }, 5000);
             console.log("Clicked to open slideshow.");
         });

         $('#box8 .minimize').click(function() {
             clearInterval(intervalId);
             console.log("Clicked to close slideshow.");
         });
     }

     initSlideshow();

    /**
     * Plugin
     */
    (function($) {
        $.fn.shiftColor = function(options) {
            options = $.extend({}, $.fn.shiftColor.defaults, options);
            $.fn.shiftColor.current = ($.fn.shiftColor.current + 1) % options.fontColor.length;
            return this.each(function() {
                console.log("This: " + this);
                console.log("options.fontColor: " + options.fontColor);
                $(this).css('color', options.fontColor[$.fn.shiftColor.current]);
            });
        };

        $.fn.shiftColor.defaults = {
            'fontColor': ['#666']
        };

        $.fn.shiftColor.current = 0;
        console.log('Added function shiftColor() to jQuery object as plugin.');
   }) (jQuery);

   $('#box9 h1, #box9 p').click(function() {
       $('#box9 h1, #box9 p').shiftColor({
           'fontColor': ['#cc0000', '#3333cc', '#009900', '#000']
       });
   });

});
