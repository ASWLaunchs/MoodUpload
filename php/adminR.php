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
    <title>管理员界面</title>
</head>
<body>
<?php
include "./conn_PDO.php";
$username = $_POST['username'];
$passwd = $_POST['passwd'];
$passwd = md5($passwd);
//search data from database
try {
    $conn->query('set names utf8;');
    $stmt = $conn->prepare("SELECT * FROM admin where username='{$username}' and passwd='{$passwd}'");
    $stmt->execute();
    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $rs = intval(count($stmt->fetchAll()));
    echo "结果为：" . $rs; //count($stmt->fetchAll());
    if ($rs > 0) {
        // echo "<script>alert('尊敬的管理员，欢迎光临！登录成功！');</script>";
    } else {
        echo "<script>history.go(-1);</script>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>
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
    <!-- 主体内容部分 -->
    <div class="container" style="background-color: rgb(252, 252, 252);">
        <div class="topTitle animate__animated animate__rotateInDownLeft" role="alert">
            <h5><svg class="bi bi-arrow-right-square-fill" width="1em" height="1em" style="margin-top:-4px;margin-right: 8px
            ;" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm5.646 10.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z" />
                </svg>管理员界面</h5>
        </div>
        <br>
        <hr>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                    aria-controls="nav-home" aria-selected="true">审核用户上传媒体信息界面</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                    aria-controls="nav-profile" aria-selected="false">管理违规用户界面</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                    aria-controls="nav-contact" aria-selected="false">发布官方公告信息界面</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <ul class="list-group list-group-flush">
                <?php
                    $stmt = $conn->prepare("SELECT * FROM multimedia");
                    $stmt->execute();
                    foreach(($stmt->fetchAll()) as $k=>$v) { 
                        $a=explode('-1998-',$v['fpath']);
                    echo '<li class="list-group-item"><div class="p-3 mb-2 bg-warning text-dark">'.$v['fpath'].
                        '</div><div class="btn-group kok-btn-right" role="group" aria-label="Basic example">
                            <a href="../upload/'.$a[2].'" type="button" id="'.$v['fpath'].'" class="btn btn-primary" >查看</a>
                            <button type="button" class="btn btn-dark" data-toggle="modal"
                                data-target="#staticBackdrop2" style="color: coral">通过</button>
                            <a href="./Delete_Media.php?x='.$v['fpath'].'" type="button" class="btn btn-danger" >删除</a>
                        </div>
                    </li>;' ;//data-toggle="modal" data-target="#staticBackdrop1"
                    }
                ?>
                </ul>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <ul class="list-group list-group-flush">
                <?php
                    $stmt = $conn->prepare("SELECT * FROM users");
                    $stmt->execute();
                    foreach(($stmt->fetchAll()) as $k=>$v) { 
                    echo '<li class="list-group-item">用户名：'.$v['username'].' ———— 电子邮件：'.$v['email'].'
                        <div class="btn-group kok-btn-right" role="group" aria-label="Basic example">
                            <a href="./deleteUsers.php?x='.$v['username'].'" type="button" class="btn btn-danger">封号</a>
                        </div>
                    </li>';
                    }
                    //记得a标签转button data-toggle="modal" data-target="#staticBackdrop3"       
                    ?>
                </ul>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <form action="./Insert_announcement.php" method="get">
                    <nav aria-label="breadcrumb" class="partTitle">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"><svg class="bi bi-card-list"
                                    width="1em" height="1em" style="margin-top:5px;margin-right: 6px
                        ;" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                    <path fill-rule="evenodd"
                                        d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
                                    <circle cx="3.5" cy="5.5" r=".5" />
                                    <circle cx="3.5" cy="8" r=".5" />
                                    <circle cx="3.5" cy="10.5" r=".5" />
                                </svg> 标题</li>
                        </ol>
                    </nav>
                    <div class="form-group">
                        <input name="title" class="form-control form-control-lg" type="text" placeholder="这里填写需要发布的标题">
                    </div>
                    <nav aria-label="breadcrumb" class="partTitle">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"><svg class="bi bi-card-list"
                                    width="1em" height="1em" style="margin-top:5px;margin-right: 6px
                        ;" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                    <path fill-rule="evenodd"
                                        d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
                                    <circle cx="3.5" cy="5.5" r=".5" />
                                    <circle cx="3.5" cy="8" r=".5" />
                                    <circle cx="3.5" cy="10.5" r=".5" />
                                </svg> 内容</li>
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="14"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-4"> <button type="submit" class="btn btn-primary">发布</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1"
            role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: center !important;">
                        <img id="previewImg" src="" style="width:300px;height:400px;"/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">看完了</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1"
            role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">来自系统提示</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        确定要该内容没有违法规则？
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">算了</button>
                        <button type="button" class="btn btn-primary">我确定</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop3" data-backdrop="static" data-keyboard="false" tabindex="-1"
            role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">来自系统提示</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        确定要删除？你确定？
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">算了</button>
                        <button type="button" class="btn btn-primary">我确定</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../bootstrap-4.5.0-dist/js/jquery.js"></script>
    <script src="../bootstrap-4.5.0-dist/js/bootstrap.js"></script>
    <script src="../js/index.js"></script>
</body>

</html>
<?php $conn = null;?>