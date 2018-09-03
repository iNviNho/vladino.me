$(function() {

    setTimeout(function() {
        $(".main-quote h1.first").animate({
            "opacity": 1
        }, 1000);
    }, 1000);


    setTimeout(function() {
        $(".main-quote h1.second").animate({
            "opacity": 1
        }, 1000);
    }, 2000);

    setTimeout(function() {
        $(".main-quote h1.third").animate({
            "opacity": 1
        }, 1000);
    }, 3000);

    setTimeout(function() {
        $(".main-section .arrow").animate({
            "opacity": 1
        }, 1000);
    }, 4000);

    $(".navigation-mobile").on("click", function() {

        $("body").addClass("mobile-overflow");
        $(".navigation-mobile-content").fadeIn(250);

    });

    $(".close-mobile-navigation span").on("click", function() {

        $(".navigation-mobile-content").fadeOut(250, function() {
            $("body").removeClass("mobile-overflow");
        });

    });

});