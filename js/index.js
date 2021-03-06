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

    $(window).scroll(function () {
        if ($(window).scrollTop() > 70) {
            $('#kok-topRocket').css({
                'display': 'block',
                'bottom': '20px'
            });
        } else {
            $('#kok-topRocket').css('display', 'none');
        }
    })

    $('#kok-topRocket').click(() => {
        $('html,body').animate({
            scrollTop: 0
        }, 500);
        $('#kok-topRocket').animate({
            bottom: '110vh'
        }, 500);
    })

    refreash = () => {
        $.get("./php/Json.php?p=" + parseInt(Math.random() * 10) + 1, function (data, status) {
            v = data;
            for (i in v) {
                if (v[i].fpath.split('-1998-')[0].trim().length == 0) {
                    $('.kok-video h6').eq(i).text("发布者：佚名");
                } else {
                    $('.kok-video h6').eq(i).text("发布者：" + v[i].fpath.split('-1998-')[0]);
                }
                if (v[i].fpath.split('-1998-')[1].trim().length == 0) {
                    $('.kok-video h5').eq(i).text("无标题");
                } else {
                    $('.kok-video h5').eq(i).text(v[i].fpath.split('-1998-')[1]);
                }
                $('.kok-video h5').eq(i).text(v[i].fpath.split('-1998-')[1]);
                $('.kok-video img').eq(i).attr('src', "./upload/" + v[i].fpath.split('-1998-')[2]);
                $('.kok-video img').eq(i).attr('mutlimedia_id', v[i].id);
            }
        });
    }
    
    //首次刷新
    refreash();

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
        if (sessionStorage.length > 0 &&sessionStorage.username != undefined && sessionStorage.username.length > 0) {
            $('#kok-mean-username').text(sessionStorage.username);
        } else {
            $('#kok-mean-username').text("个人信息 (未登录)");
        }
    })()


    $("#login").click(() => {
        if (sessionStorage.length > 0 &&sessionStorage.username != undefined&& sessionStorage.username.length > 0) {
            window.location.href = "./html/Personal_Info.html";
        } else {
            window.location.href = "./html/Login.html";
        }
    });

    $('#logout').click(() => {
        if (sessionStorage.length == 0) {
            alert("你还未登录");
        }
        if (sessionStorage.length > 0 && sessionStorage.username.length > 0) {
            $('#kok-mean-username').text("个人信息 (未登录)");
            document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
            alert("已完成注销");
            sessionStorage.clear();
        } else {
            alert("你还未登录");
        }
    })

    $('#kok-refresh').click(() => {
        $('#kok-refresh').css("transform", " rotate(360deg)");
        $('html,body').animate({
            scrollTop: 0
        }, 500);
        refreash();
        setTimeout(() => {
            $('#kok-refresh').css("transform", " rotate(0deg)")
        }, 1000);
    })

    let kokVideo = document.querySelectorAll('.kok-video');
    let kokBk = document.querySelector('.kok-bk');
    for (i in kokVideo) {
        kokVideo[i].onclick = function () {
            for (i in kokVideo) {
                if (this == kokVideo[i]) {
                    $('.kok-bk').fadeIn(900);
                    $('.kok-bk').eq(0).find('.row .col-8 img').attr('src', kokVideo[i].querySelector('img.kok-img').src);
                    sessionStorage.mutlimedia_id = kokVideo[i].querySelector('img.kok-img').getAttribute('mutlimedia_id');
                    $('.kok-iframe-big').eq(0).attr('src','./html/comment.html');
                }
            }
        }
    }

    $('#kok-bk-close').click(() => {
        $('.kok-bk').fadeOut(900);
    })

    // 鼠标左键点击特效
    $('#moodImg').click((e) => {
        $('#love').fadeIn()
        Love = `<svg id="Love" style="display:flex;" t="1593606180290" class="icon" viewBox="0 0 1162 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4650" width="16" height="16"><path d="M823.652174 0c-95.276522 0-181.203478 39.17913-242.643478 102.845217C519.568696 39.17913 433.641739 0 338.365217 0 151.373913 0 0 178.086957 0 365.078261c0 543.165217 581.008696 658.921739 581.008696 658.921739S1162.017391 859.269565 1162.017391 365.078261c0-186.991304-151.373913-365.078261-338.365217-365.078261z" fill="#d81e06" p-id="4651"></path></svg>`;
        $('#love').html(Love);
        $('#love').animate({
            "left": e.pageX + 'px',
            "top": e.pageY + 'px',
            'transform': 'scale(1.2)'
        });
        $('#love').fadeOut().slow(6000);
    })

    //留言栏

});