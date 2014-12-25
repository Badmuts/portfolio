(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-21477737-1', 'auto');
ga('send', 'pageview');

(function () {
    var navTop = $('nav').offset().top;

    $(window).scroll( function()
    {
        var scroll = $(window).scrollTop(), slowScroll = scroll/2;
        $('#header').css({ transform: "translateY(" + slowScroll + "px)" });

        if (scroll >= navTop) {
            $('body').addClass('fixed');
        } else {
            $('body').removeClass('fixed');
        }
    });

    $('nav a').on('click', function (e) {
        e.preventDefault();
        var id = $(this).attr('href');
        console.log(id);
        $('html,body').animate({scrollTop: $(id).offset().top},'slow');
    });

// CONTACT FORM
$('form').on('submit', function (e) {
    var name = $('input[name=name]');
    var email = $('input[name=email]');
    var message = $('textarea');

    $('input[name=name], input[name=email], textarea').removeClass('error');

    if ( !name.val() ) {
        name.addClass('error');
        e.preventDefault();
    } else if ( !email.val() ) {
        email.addClass('error');
        e.preventDefault();
    } else if ( !message.val() ) {
        message.addClass('error');
        e.preventDefault();
    }
});
})();
