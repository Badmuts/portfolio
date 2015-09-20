var header = {

    /**
     * Header constructor
     */
    init: function() {
        this.scroll = null;
        this.slowScroll = null;
        $(window).on('scroll', this.parallaxHeader );
    },

    /**
     * Set 'translateY' css property to half the scroll amount
     * on '#header' image.
     */
    parallaxHeader: function() {
        this.scroll = $(window).scrollTop();
        this.slowScroll = scroll/2;

        $('#header').css({
            transform: "translateY(" + slowScroll + "px)"
        });
    }

}
