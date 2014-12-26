(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-21477737-1', 'auto');
ga('send', 'pageview');

$(function() {
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

   //set animation timing
    var animationDelay = 2500,
        lettersDelay = 50;

    initHeadline();

    function initHeadline() {
        singleLetters($('.header h1.letters').find('b'));
        animateHeadline($('.header h1'));
    }

    function singleLetters($words) {
        $words.each(function(){
            var word = $(this),
                letters = word.text().split(''),
                selected = word.hasClass('is-visible');
            for (i in letters) {
                if(word.parents('.rotate-2').length > 0) letters[i] = '<em>' + letters[i] + '</em>';
                letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>': '<i>' + letters[i] + '</i>';
            }
            var newLetters = letters.join('');
            word.html(newLetters);
        });
    }

    function animateHeadline($headlines) {
        var duration = animationDelay;
        $headlines.each(function(){
            var headline = $(this);

            var words = headline.find('.word-wrapper b'),
                width = 0;
            words.each(function(){
                var wordWidth = $(this).width();
                if (wordWidth > width) width = wordWidth;
            });
            headline.find('.word-wrapper').css('width', width);

            setTimeout(function(){ hideWord( headline.find('.is-visible').eq(0) ) }, duration);
        });
    }

    function hideWord($word) {
        var nextWord = takeNext($word);

        var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
        hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
        showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);
    }

    function hideLetter($letter, $word, $bool, $duration) {
        $letter.removeClass('in').addClass('out');

        if(!$letter.is(':last-child')) {
            setTimeout(function(){ hideLetter($letter.next(), $word, $bool, $duration); }, $duration);
        } else if($bool) {
            setTimeout(function(){ hideWord(takeNext($word)) }, animationDelay);
        }

    }

    function showLetter($letter, $word, $bool, $duration) {
        $letter.addClass('in').removeClass('out');

        if(!$letter.is(':last-child')) {
            setTimeout(function(){ showLetter($letter.next(), $word, $bool, $duration); }, $duration);
        } else {
            if(!$bool) { setTimeout(function(){ hideWord($word) }, animationDelay) }
        }
    }

    function takeNext($word) {
        return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
    }

    function takePrev($word) {
        return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
    }

    function switchWord($oldWord, $newWord) {
        $oldWord.removeClass('is-visible').addClass('is-hidden');
        $newWord.removeClass('is-hidden').addClass('is-visible');
    }

    /**
     * Contact form
     */
     $("form").on("submit", function(e) {
        // <p>Oh no! Something went wrong, try to submit the form again or send a message to d.rosbergen@gmail.com</p>
        // <p>Thanks for your message! I will reply as soon as possible.</p>
        var name = $('input[name=name]');
        var email = $('input[name=email]');
        var message = $('textarea');
        var formData = $(this).serialize();

        e.preventDefault();
        $('input[name=name], input[name=email], textarea').removeClass('error');

        if ( !name.val() ) {
            name.addClass('error');
            return false;
        } else if ( !email.val() ) {
            email.addClass('error');
            return false;
        } else if ( !message.val() ) {
            message.addClass('error');
            return false;
        }


        $.ajax({
            url: "contact.php",
            type: "POST",
            data: formData,
            success: function( data ) {
                if ( data === '1' ){
                    $("form input[type=submit]").val("Thanks for your message!").addClass("success");
                } else {
                    $("form input[type=submit]").val("Oh no! Something went wrong. Try again?").addClass("error");
                }
            }
        });
     });

});
