$(function() {

    console.log("pes");
    $(".main-quote h1.first").animate({
        "opacity": 1
    }, 7000);

    setTimeout(function() {
        $(".main-quote h1.second").animate({
            "opacity": 1
        }, 1000);
    }, 2500);

    setTimeout(function() {
        $(".main-quote h1.third").animate({
            "opacity": 1
        }, 2500);
    }, 4500);

});