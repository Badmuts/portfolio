describe("header", function() {

    jasmine.getFixtures().fixturesPath = '/tests/fixtures/';

    beforeEach(function() {
        header.init();
    });

    it("should set the 'transform: translateY' css property to half the scroll amount on '#header'", function() {
        loadFixtures('header.html');
        var spyEvent = spyOnEvent(window, 'scroll');
        var e = jQuery.Event( "DOMMouseScroll", { delta: 650 } );
        jQuery( window ).trigger( e );
        expect($("#header")).toHaveCss({transform: "translateY(325px)"});
    });

});
