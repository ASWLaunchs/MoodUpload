<?php
include "./conn_PDO.php";
$comment = $_GET['comment'];
$email = $_GET['email'];
$mutlimedia_id = $_GET['mutlimedia_id'];
$conn->query('set names utf8;');
try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into comments(mutlimedia_id,users_id,username,usercomment,t_date) values($mutlimedia_id,(select id from users where email = '{$email}'),(select username from users where email ='{$email}'),'{$comment}',now())";
    $conn->exec($sql);
    $res = 1;
    echo json_encode($res);
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
// echo "<script>history.go(-1);</script>";
