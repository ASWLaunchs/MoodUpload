<?php
header("Content-Type: text/html;charset=utf-8");
include "./conn_PDO.php";
//receivced front-end data
$username = $_POST['username'];
$passwd = $_POST['passwd'];
$email = $_POST['email'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$province = $_POST['province'];
$flag = array(0);
//insert into mysql
try {
    $conn->query('set names utf8;');
    $stmt = $conn->prepare("SELECT * FROM users where email='{$email}'");
    $stmt->execute();

    // 设置结果集为关联数组
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    if (count($stmt->fetchAll()) > 0) {
        $flag[0] = 0;
        echo json_encode($flag[0]);
    } else {
        $passwd = md5($passwd);
        $sql = "INSERT INTO users(username,passwd,email,age,sex,addr) VALUES ('{$username}', '{$passwd}', '{$email}',{$age},{$sex},'{$province}')";
        // use exec() because no results are returned
        $count = $conn->exec($sql);
        if ($count > 0) {
            $flag[0] = 1;
            echo json_encode($flag[0]);} else {
            $flag[0] = 0;
            echo json_encode($flag[0]);}
    }
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
