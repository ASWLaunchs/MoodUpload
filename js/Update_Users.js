$(document).ready(function () {
    // (() => {
    //     $.post("../php/Personal_Info.php", {
    //             username: sessionStorage.username,
    //         },
    //         function (data, status) {
    //             console.log("数据: \n" + data + "\n状态: " + status);
    //             if (data[0].brief != null) {
    //                 $('.introTag2').eq(0).html(data[0].brief);
    //             } else {
    //                 $('.introTag2').eq(0).html("这个人很懒，什么都没写");
    //             }
    //             $('.introTag2').eq(1).html(data[0].username);
    //             $('.introTag2').eq(2).html(data[0].id);
    //             $('.introTag2').eq(3).html(data[0].age);
    //             $('.introTag2').eq(4).html(data[0].sex == 0 ? '男' : '女');
    //             $('.introTag2').eq(5).html(data[0].addr);
    //         });
    // })()


    $('.rightTopBound').eq(0).click(function () {
        $('.kok-menu').eq(0).css("display", "block");
    })

    $('.leftBottomBound').eq(0).click(function () {
        $('.kok-menu').eq(0).css("display", "block");
    })

    $('.kok-menu-close').eq(0).click(function () {
        $('.kok-menu').eq(0).fadeOut();
    })
    //采用严格模式进行判断
    "user strict"
    //通过name对input框的对象
    let username = document.getElementsByName("username");
    let password1 = document.getElementsByName("password1");
    let password2 = document.getElementsByName("password2");
    let sex = document.getElementsByName("sex");
    let province = document.getElementsByName("province");
    let displayBan = document.getElementById("displayBan");
    let displayBanSpan = displayBan.querySelectorAll("span");
    let HT = document.getElementById("HT");
    let sexState = 0;
    let count = true;

    
    function check() {
        alert("你好");
        displayBan.style.top = "0px";
        //保证表单提交值的顺序和安全检测的顺序，采用if...else进行判断嵌套，层层判断后再到密码判断
        //针对前三个文本框进行判断

        //top code so terrible , lets we have a new starting!
        //this username
        if (username[0].value != "" && username[0].value != null && username[0].value.length <= 12) {
            $.post("../php/cheakedAccount.php", {
                username: username[0].value
            }, function (data, status) {
                console.log("数据: " + data + "\n状态: " + status);
                if (data > 0) {
                    alert("用户名已存在");
                    count = false;
                }
            });
            displayBanSpan[0].innerHTML = "用户名格式 正确 <font style=\"color:lightgreen;\">✔</font>";
            count = true;
        } else {
            displayBanSpan[0].innerHTML =
                "输入的用户名不符合要求，请输入用户名不为空且长度不大于12位 <font style=\"color:red;\"> !</font>";
            count = false;
        }

        //this passwd
        if (password1[0].value != "" && password1[0].value != null && password1[0].value.length >= 6) {
            displayBanSpan[1].innerHTML = "第一次密码格式 正确 <font style=\"color:lightgreen;\">✔</font>";
            count = true;
        } else {
            displayBanSpan[1].innerHTML =
                "第一次输入密码不符合要求，请输入密码不为空且长度不小于6不大于12位 <font style=\"color:red;\"> !</font>";
            count = false;
        }
        if (password2[0].value != "" && password2[0].value != null && password2[0].value.length >= 6) {
            //针对后4个input框进行判断
            displayBanSpan[2].innerHTML = "第二次密码格式 正确 <font style=\"color:lightgreen;\">✔</font>";
            count = true;
        } else {
            displayBanSpan[2].innerHTML =
                "第二次输入密码不符合要求，请输入密码不为空且长度不小于6不大于12位 <font style=\"color:red;\"> !</font>";
            count = false;
        }

        //this email
        if ($("#email").val().length > 6 && $("#email").val().length < 18) {
            displayBanSpan[3].innerHTML =
                "Email必选项已选 正确 <font style=\"color:lightgreen;\">✔</font>";
            count = true;
        } else {
            displayBanSpan[3].innerHTML =
                "Email必选项未选，请输入Email <font style=\"color:red;\"> !</font>";
            count = false;
        }
        //this age
        if ($("input[name='age']").val().length >= 1 && $("input[name='age']").val().length < 3) {
            displayBanSpan[4].innerHTML =
                "年龄必选项已选 正确 <font style=\"color:lightgreen;\">✔</font>";
            count = true;
        } else {
            displayBanSpan[4].innerHTML =
                "年龄必选项未正确输入，请输入年龄 <font style=\"color:red;\"> !</font>";
            count = false;
        }

        //this sex
        if (!sex[0].checked === true && !sex[1].checked === true && !sex[2].checked === true) {
            displayBanSpan[5].innerHTML = "性别选项为必选项，请选择<font style=\"color:red;\"> !</font>";
            count = false;
        } else {
            for (let i = 0; i < sex.length; i++) {
                if (sex[i].checked == true)
                    sexState = i;
            }
            displayBanSpan[5].innerHTML = "性别必选项已选 正确 <font style=\"color:lightgreen;\">✔</font>";
            count = true;
        }

        //this province
        if ($('#provinces').val().trim() === "正在加载" || $('#provinces').val().trim() === "" || $(
                '#provinces').val().trim() === null || $('#cities').val().trim() ===
            "" ||
            $('#cities').val().trim() === null || $('#areas').val().trim() === "" || $('#areas')
            .val().trim() === null) {
            displayBanSpan[6].innerHTML = "省份选项为必选项，请选择<font style=\"color:red;\"> !</font>";
            count = false;
        } else {
            displayBanSpan[6].innerHTML =
                "省份必选项已选 正确 <font style=\"color:lightgreen;\">✔</font>";
            count = true;
        }

        //this tokenCode
        tokenCode = () => {
            let tokenCode = parseInt(Math.random() * 10) * 1998;
            if (prompt("确定提交数据请输入验证码" + tokenCode + "：") == tokenCode) {
                var token = (parseInt(password1[0].value.trim()) ==
                    parseInt(password2[0].value.trim())) ? true : false;
                document.body.style.backgroundColor =
                    "#000";
                $('#warningTip').fadeOut();
                if (token) {
                    $.post("../php/Register.php", {
                            username: $("#username").val().trim(),
                            passwd: $("#passwd").val().trim(),
                            age: $("#age").val().trim(),
                            email: $("#email").val().trim(),
                            sex: sexState,
                            province: $('#provinces').val().trim() + $('#cities').val().trim() +
                                $('#areas').val().trim(),
                            brief: $('#brief').val()

                        },
                        function (data, status) {
                            console.log("数据: " + data + "状态: " + status);
                            if (parseInt(data) > 0) {
                                displayBanSpan[7].innerHTML = "☆ 表单已经完整填报 ☆";
                                displayBanSpan[8].innerHTML =
                                    "欢迎您，验证通过！已成功注册 <font style=\"color:lightgreen;\">✔</font>";
                                count = true;
                                $('#warningTip').fadeIn();
                                let watingSecond = 3;
                                setInterval(() => {
                                    watingSecond--;
                                    if (watingSecond <= 0) {
                                        window.location.href = './Login.html';
                                    }
                                    displayBanSpan[9].innerHTML =
                                        "倒数<font style=\"color:lightgreen;\">" +
                                        watingSecond +
                                        "</font>秒后跳转到登录页面";
                                }, 1000);
                            } else {
                                alert("信息有误，用户名已被注册！");
                                displayBanSpan[8].innerHTML =
                                    "信息有误，用户名已被注册！ <font style=\"color:red;\"> !</font>";
                            }
                        });
                } else {
                    displayBanSpan[7].innerHTML = "☆ 表单已经完整填报 ☆";
                    displayBanSpan[8].innerHTML =
                        "非常抱歉，密码错误！请重新输入 <font style=\"color:red;\"> !</font>";
                    count = false;
                    $('#warningTip').fadeIn();
                }
            } else {

            }
        }

        if (count) {
            tokenCode();
        }
    }
})