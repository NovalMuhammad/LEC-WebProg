$(document).ready(function() {
    // FAQ animation
    $('.course>li>.answer').hide();

    $('.course>li').click(function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active").find(".answer").slideUp(200);
        } else {
            $(".Faq>li.active .answer").slideUp();
            $(".Faq>li.active").removeClass("active");
            $(this).addClass("active").find(".answer").slideDown(200);
        }
    });

});