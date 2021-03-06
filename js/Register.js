$(function () {
    $('.rightTopBound').css("transform", " rotate(45deg) scale(1)");
    $('#rightTopBoundIcon').fadeIn(3000);
    $('#leftBottomBoundIcon').fadeIn(3000);
    $('.leftBottomBound').css("transform", " rotate(-135deg) scale(1)");

    $('.rightTopBound').eq(0).click(function () {
        $('.kok-menu').eq(0).css("display", "block");
    })

    $('.leftBottomBound').eq(0).click(function () {
        $('.kok-menu').eq(0).css("display", "block");
    })

    $('.kok-menu-close').eq(0).click(function () {
        $('.kok-menu').eq(0).fadeOut();
    })
})