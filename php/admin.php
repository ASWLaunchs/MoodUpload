<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-4.5.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/Register.css">
    <link rel="stylesheet" href="../css/kok-ui.css">
    <title>发布作品</title>
</head>
<body>
<div class="container" id="checkedForm">
        <div class="topTitle animate__animated animate__rotateInDownLeft" role="alert">
            <h5><svg class="bi bi-arrow-right-square-fill" width="1em" height="1em" style="margin-top:-4px;margin-right: 8px
                ;" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm5.646 10.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z" />
                </svg>管理员登录</h5>
        </div>
        <form action="./adminR.php" method="post">
            <h2 style="color: rgb(255, 255, 255);text-shadow: 2px 1px rgb(15, 178, 228);">管理员登录</h2>
            <br>
            <p><label>用 户 名：</label>&nbsp;<input id="username" type="text" name="username"></p>
            <p><label>密 码：</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="passwd" type="password" name="passwd"></p>
            <p><button type="submit">提交</button></p>
        </form>
    </div>
</body>

</html>