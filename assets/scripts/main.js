/* ========================================================================
* DOM-based Routing
* Based on http://goo.gl/EUTi53 by Paul Irish
*
* Only fires on body classes that match. If a body class contains a dash,
* replace the dash with an underscore when adding it to the object below.
*
* .noConflict()
* The routing is enclosed within an anonymous function so that you can
* always reference jQuery with $, even when in .noConflict() mode.
* ======================================================================== */

(function($) {

    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Sage = {
        // All pages
        'common': {
            init: function() {
                // JavaScript to be fired on all pages
            },
            finalize: function() {
                // JavaScript to be fired on all pages, after page specific JS is fired
            }
        },
        // Home page
        'home': {
            init: function() {

                $('#background-video').vide({
                    mp4: './wp-content/themes/ismaelk/assets/videos/video-snk-2.mp4',
                    poster: './wp-content/themes/ismaelk/assets/images/cover.png'
                }, {
                    volume: 1,
                    playbackRate: 1,
                    muted: false,
                    loop: true,
                    autoplay: true,
                    position: '50% 50%', // Similar to the CSS `background-position` property.
                    posterType: 'png', // Poster image type. "detect" — auto-detection; "none" — no poster; "jpg", "png", "gif",... - extensions.
                    resizing: true // Auto-resizing, read: https://github.com/VodkaBears/Vide#resizing
                });

                // Get instance of the plugin
                var instance = $('#background-video').data('vide');

                // Get video element of the background. Do what you want.
                instance.getVideoObject();

                // Resize video background.
                // It calls automatically, if window resize (or element, if you will use something like https://github.com/cowboy/jquery-resize).
                instance.resize();

                // Destroy plugin instance
                instance.destroy();
            },
            finalize: function() {
                // JavaScript to be fired on the home page, after the init JS
            }
        },
        // About us page, note the change from about-us to about_us.
        'about_us': {
            init: function() {
                // JavaScript to be fired on the about us page
            }
        },
        
        'prestations-organisation' : {
            init: function() {
                $('#play-video-dorien').on('click',function(e){
                    e.preventDefault();
                    $('#video-dorien').video();
                    $('#video-dorien').toggle();
                });
                $('#play-video-mathieu').on('click',function(e){
                    e.preventDefault();
                    $('#video-mathieu').video();
                    $('#video-mathieu').toggle();
                });
                //$('.ui.video').video();
                $('#video-snk').video();
            }
        }
    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function(func, funcname, args) {
            var fire;
            var namespace = Sage;
            funcname = (funcname === undefined) ? 'init' : funcname;
            fire = func !== '';
            fire = fire && namespace[func];
            fire = fire && typeof namespace[func][funcname] === 'function';

            if (fire) {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function() {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalize JS
            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
                UTIL.fire(classnm);
                UTIL.fire(classnm, 'finalize');
            });

            // Fire common finalize JS
            UTIL.fire('common', 'finalize');
        }
    };

    $('.ui.sticky')
      .sticky({
        context: '#context'
      });

    $('#m_btn').on('click',function(e){
        e.preventDefault();
        $('#m_menu').sidebar('toggle');
    });

    
    /*function hefct() {
        var scrollPosition = jQuery(window).scrollTop();
        jQuery('#header-image').css('top', (0 - (scrollPosition * 0.2)) + 'px');
    }

            
        $(window).bind('scroll', function() {
            //hefct();
            var scrollPosition = $(window).scrollTop();
            $('#full-content').css('top', (0 - (scrollPosition * 0.7)) + 'px');
            $('#background-video').css('top', ((scrollPosition * 0.5)) + 'px');
            $('#context').css('top', (0 - (scrollPosition * 0.7)) + 'px');
        });     
*/
   // $('#saxo-training').parallax("center", 0.2, 400, true);
    $.stellar();
    // Load Events
    $(document).ready(UTIL.loadEvents);


})(jQuery); // Fully reference jQuery after this point.
