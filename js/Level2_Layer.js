$(document).ready(function () {
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

    //about login token
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i].trim();
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }

    (() => {
        if (sessionStorage.length > 0 && sessionStorage.username != undefined && sessionStorage.username.length > 0) {
            $('#kok-mean-username').text(sessionStorage.username);
        } else {
            $('#kok-mean-username').text("个人信息 (未登录)");
        }
    })()

    $("#login").click(() => {
        if (sessionStorage.length > 0 && sessionStorage.username != undefined && sessionStorage.username.length > 0) {
            window.location.href = "../html/Personal_Info.html";
        } else {
            window.location.href = "../html/Login.html";
        }
    });

    $('#logout').click(() => {
        if (sessionStorage.length > 0 && sessionStorage.username.length > 0) {
            sessionStorage.username = '';
            $('#kok-mean-username').text("个人信息 (未登录)");
            document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
            alert("已完成注销");
        } else {
            alert("你还未登录");
        }
    })
    console.log(sessionStorage.length);
});