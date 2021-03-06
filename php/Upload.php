<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户登录</title>
    <link rel="stylesheet" href="../bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/load.min.css">
    <link rel="stylesheet" href="../css/Register.css">
    <link rel="stylesheet" href="../css/kok-ui.css">
    <script src="../bootstrap-4.5.0-dist/js/jquery.js"></script>
</head>

<body>
    <!-- 左下右上的边角特效 -->
    <div class="rightTopBound"><svg id="rightTopBoundIcon" class="bi bi-grid" width="1em" height="1em"
            style="margin-top: 34px;margin-left: 50px;" viewBox="0 0 16 16" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
        </svg></div>
    <div class="leftBottomBound"><svg id="leftBottomBoundIcon" class="bi bi-grid" width="1em" height="1em"
            style="margin-top: 34px;margin-left: 50px;" viewBox="0 0 16 16" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
        </svg></div>
    <!-- 菜单 -->
    <div class="kok-menu animate__animated animate__flipInX ">
        <div class="kok-menu-left">
            <a id="login" href="javascript:;"><span class="kok-menu-button1" type="button">&nbsp;<svg
                        class="bi bi-arrow-right-square-fill" width="1em" height="1em" style="margin-top:-4px;margin-right: 8px
                    ;" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm5.646 10.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z" />
                    </svg><span id="kok-mean-username">个人信息</span></span></a>
            <a href="../html/Upload.html"> <span class="kok-menu-button1" type="button">&nbsp;<svg
                        class="bi bi-arrow-right-square-fill" width="1em" height="1em" style="margin-top:-4px;margin-right: 8px
                    ;" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm5.646 10.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z" />
                    </svg>发布作品</span></a>
            <a id="logout" href="javascript:;"><span class="kok-menu-button1" type="button">&nbsp;<svg
                        class="bi bi-arrow-right-square-fill" width="1em" height="1em" style="margin-top:-4px;margin-right: 8px
                    ;" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm5.646 10.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z" />
                    </svg>注销</span></a>
        </div>
        <div class="kok-menu-right">
            <a href="../index.html"><span class="kok-menu-button2" type="button">&nbsp;<svg
                        class="bi bi-arrow-right-square-fill" width="1em" height="1em" style="margin-top:-4px;margin-right: 8px
                ;" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm5.646 10.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z" />
                    </svg>首页</span></a>
            <a href="../html/Register.html"><span class="kok-menu-button2" type="button">&nbsp;<svg
                        class="bi bi-arrow-right-square-fill" width="1em" height="1em" style="margin-top:-4px;margin-right: 8px
                    ;" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm5.646 10.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z" />
                    </svg>注册</span></a>
            <a href="../html/Official_Info.html"> <span class="kok-menu-button2" type="button">&nbsp;<svg
                        class="bi bi-arrow-right-square-fill" width="1em" height="1em" style="margin-top:-4px;margin-right: 8px
                        ;" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm5.646 10.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z" />
                    </svg>官方信息</span></a>
        </div>
        <div class="kok-menu-close"><svg t="1592919053422" class="icon" viewBox="0 0 1024 1024" version="1.1"
                xmlns="http://www.w3.org/2000/svg" p-id="5138" width="48" height="48">
                <path
                    d="M591.142293 511.648675l416.816417-416.816417a54.608106 54.608106 0 0 0 0-76.756848l-2.291249-2.291249a54.54446 54.54446 0 0 0-76.756849 0L512.094196 433.17339 95.277779 15.784161a54.54446 54.54446 0 0 0-76.756848 0L16.229682 18.07541a53.589773 53.589773 0 0 0 0 76.756848l416.816416 416.816417-416.75277 416.880063a54.54446 54.54446 0 0 0 0 76.756848l2.291249 2.291249a54.54446 54.54446 0 0 0 76.756848 0l416.816417-416.816417 416.816416 416.816417a54.54446 54.54446 0 0 0 76.756848 0l2.29125-2.291249a54.54446 54.54446 0 0 0 0-76.756848z"
                    fill="#2c2c2c" p-id="5139"></path>
            </svg></div>
        <div class="kok-menu-center">

        </div>
    </div>

    <!-- 主体内容部分 -->
    <!-- <div class="kok-bigShade" style="
    position: absolute;
    width: 100%;
    height: 800px;
    left: 0;
    top: 0;
    background-color: rgb(0, 0, 0);"></div> -->
    <div class="container">
        <div class="topTitle animate__animated animate__rotateInDownLeft" role="alert">
            <h5><svg class="bi bi-arrow-right-square-fill" width="1em" height="1em" style="margin-top:-4px;margin-right: 8px
                ;" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm5.646 10.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z" />
                </svg>提交状态</h5>
        </div>
        <iframe name="IFR" src="" frameborder="0" style="display: none;"></iframe>
        <form target="IFR" style="margin-top:120px;">
            <h2 style="color: rgb(255, 255, 255);text-shadow: 2px 1px rgb(15, 178, 228);">恭喜你的生活点滴分享成功！</h2>
            <br>
            <div id="displayBan">
            </div>
        </form>
    </div>
    <script>
        if(sessionStorage.length<1){
            alert("检测到未登录，将返回首页");
            window.location.href="../index.html";
        }
          $('#warningTip').fadeIn();
        var displayBan = document.getElementById("displayBan");
        displayBan.style.top = "0px";
                let watingSecond = 2;
                setInterval(() => {
                    watingSecond--;
                    if (watingSecond <= 0) {
                        window.location.href = '../index.html';
                    }
                    displayBan.innerHTML =
                                    `<div class="loader">
                                        <div class="loader-inner square-spin">
                                            <div></div>
                                        </div><span class="tooltip">
                                            <p>square-spin</p>
                                        </span>
                                    </div>`;
                    // displayBan.innerHTML =
                    //     "<span>登录成功！倒数<font style=\"color:lightgreen;\">" + watingSecond +
                    //     "</font>秒后跳转到主页</span>";
          }, 1000);
    </script>
    <script src="../js/Level2_Layer.js"></script>
</body>

</html>

<?php
include "./conn_PDO.php";
$conn->query('set names utf8;');
var_dump($_FILES);
if (isset($_POST["username"])) {
    echo "<script>alert(" . $_POST["username"] . ")</script>";
}

if ($_FILES["file"]["error"] > 0) {
    echo "错误：" . $_FILES["file"]["error"] . "<br>";
} else {
    echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
    echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
    echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"];
    // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
    if (file_exists("../upload/" . $_FILES["file"]["name"])) {
        echo $_FILES["file"]["name"] . " 文件已经存在。 ";
    } else {
        // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
        move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $_FILES["file"]["name"]);
        $fpath = "{$_POST['username']}" . "-1998-" . $_POST["title"] . "-1998-" . $_FILES["file"]["name"];
        echo "文件存储在: " . "../upload/" . $fpath;
        try {
            // 设置 PDO 错误模式，用于抛出异常
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO multimedia (fpath) VALUES ('{$fpath}')";
            // 使用 exec() ，没有结果返回
            $conn->exec($sql);
            echo "新记录插入成功";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }
}
