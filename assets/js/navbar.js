var Navbar = (function() {

    'use strict';

    /**
     * Navbar contstructor.
     */
    function Navbar() {
        var self = this;
        this.scroll;
        this.id;

        $(window).on( 'scroll', function( event ) {
            self.scrollHandler( event );
        });

        $('nav a').on( 'click', function( event ) {
            self.id = $(this).attr('href');
            self.clickHandler( event )
        });
    }

    Navbar.prototype = {

        /**
        * When user scrolls create parallaxHeader and check if
        * navbar should be fixed to top of the page.
        */
        scrollHandler: function( event ) {
            this.scroll = $(window).scrollTop();
            this.setNavbarFixed();
        },

        /**
         * Handles clicks on 'a' tags in 'nav' and scrolls to the
         * section id.
         */
        clickHandler: function ( event ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $(this.id).offset().top
            }, 'slow' );
        },

        /**
         * Set 'fixed' class on body when nav is on top op browser
         * window.
         */
        setNavbarFixed: function( ) {
            if (this.scroll >= $('nav').offset().top)
                $('body').addClass('fixed');
            else
                $('body').removeClass('fixed');
        }

    };

    return Navbar;

})();
