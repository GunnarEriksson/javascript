/*!
 * jQuery Lightbox
 *
 * Released under the MIT license:
 *
 * Copyright (c) 2016 Gunnar Eriksson
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
 (function($) {
     $.fn.lightbox = function() {
         var windowHeigth = window.innerHeight || $(window).height(); // make it work on ipad & android
         var windowWidth  = window.innerWidth  || $(window).width();

         $('body').css('overflow-y', 'hidden');

         $('<div id="overlay"></div>')
             .css('top', $('document').scrollTop())
             .css({
                 'background': 'black no-repeat scroll center center',
                 'height': '100%',
                 'left': '0',
                 'opacity': '0',
                 'position': 'fixed',
                 'top': '0',
                 'width': '100%',
                 'z-index': '998',
             })
             .animate({'opacity' : '0.5'}, 'slow')
             .appendTo('body');

         $('<div id="lightbox"></div>')
             .css({
                 'position': 'fixed',
                 'z-index': '999',
             })
             .hide()
             .appendTo('body');

         $('<img>')
             .attr('src', $(this).attr('src'))
             .css({
                 'max-height': windowHeigth,
                 'max-width':  windowWidth
             })
             .load(function() {
                 var top = (windowHeigth - $('#lightbox').height()) / 2;
                 var left = (windowWidth - $('#lightbox').width())  / 2;

                 $('#lightbox')
                     .css({
                         'top': top,
                         'left': left
                     })
                     .fadeIn();
                 console.log("Position lightbox image set!");
             })
             .click(function() {
                 $('#overlay, #lightbox')
                     .fadeOut('slow', function() {
                         $(this).remove();
                         $('body')
                             .css('overflow-y', 'auto');
                     });
                 console.log("Lightbox removed!");
             })
             .appendTo('#lightbox');
     };
     console.log("jQuery lightbox loaded");
 })(jQuery);

 $('img.lightbox').click(function() {
     $(this).lightbox();
 });
