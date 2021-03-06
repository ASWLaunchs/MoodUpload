<?php
header("Content-Type: application/json;charset=utf-8");
include "./conn_PDO.php";
//receivced front-end data
$username = $_POST['username'];
$passwd = $_POST['passwd'];
$email = $_POST['email'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$province = $_POST['province'];
$brief = $_POST['brief'];
$flag = array(0);
//insert into mysql
try {
    $conn->query('set names utf8;');
    $passwd = md5($passwd);
    $sql = "UPDATE users SET username='{$username}',passwd='{$passwd}',email='{$email}',age={$age},sex={$sex},addr='{$province}',brief='{$brief}' where email='{$email}' ";
    // use exec() because no results are returned
    $count = $conn->exec($sql);
    if ($count > 0) {
        $flag[0] = 1;
        echo json_encode($flag);} else {
        $flag[0] = 0;
        echo json_encode($flag);}
} catch (PDOException $e) {
    echo $sql . $e->getMessage();
}

$conn = null;
