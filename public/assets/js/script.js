var $ = jQuery;
$(window).on("load",function(){

    $(".mainContainer").height($(window).height() - 80);

    var hMain = $(".mainContainer").height();
    var hImg = $("img:not(.icon_),video").height();

    var mTop = (hMain-hImg)/2;
    $("img:not(.icon_),video").css("margin-top",mTop);

    $("#like").on("mouseenter",function() {
        $(this).attr("src","liked.png");
    }).on("mouseleave",function() {
        $(this).attr("src","like.png");
    });

    $("#menu").click(function() {
        $(".menuItem").toggleClass("hidden");
    });

    $(".background").css("background-image","url("+$("img:not(.icon)").attr("src")+")");

    $("[div-src]").each(function() {
        $(this).css("background-image","url("+$(this).attr("div-src")+")");
    });

});