var navbar = {

    /**
     * Navbar contstructor.
     */
    init: function() {
        this.scroll = null;
        this.id = null;
        $(window).on( 'scroll', this.scrollHandler );
        $('nav a').on( 'click', this.clickHandler );
    },

    /**
     * When user scrolls create parallaxHeader and check if
     * navbar should be fixed to top of the page.
     */
    scrollHandler: function( event ) {
        this.scroll = $(window).scrollTop();
        this.isNavbarFixed( scroll );
    },

    /**
     * Handles clicks on 'a' tags in 'nav' and scrolls to the
     * section id.
     */
    clickHandler: function ( event ) {
        event.preventDefault();
        this.id = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(id).offset().top
        }, 'slow' );
    },

    /**
     * Set 'fixed' class on body when nav is on top op browser
     * window.
     */
    isNavbarFixed: function( scroll ) {
        if (scroll >= $('nav').offset().top)
            $('body').addClass('fixed');
        else
            $('body').removeClass('fixed');
    }

}
