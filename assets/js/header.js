var Header = (function() {

    'use strict';

    var self;

    function Header() {
        this.scroll;
        this.header = document.getElementById('header');
        this.ticking = false;
        self = this;
        window.addEventListener('scroll', this.parallaxHeader, false);
    }

    Header.prototype = {

        /**
        * Set 'translateY' css property to half the scroll amount
        * on '#header' image.
        */
        parallaxHeader: function() {
            self.scroll = window.scrollY;
            self.requestTick();
        },

        requestTick: function() {
            if(!this.ticking)
                requestAnimationFrame(this.update);
            this.ticking = true;
        },

        update: function() {
            self.ticking = false;
            var slowScroll = self.scroll/2;

            self.header.style.transform = "translateY(" + slowScroll + "px)";
        }

    };

    return Header;

})();
