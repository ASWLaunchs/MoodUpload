<?php
header('Content-Type:application/json;charset=utf-8');
include "./conn_PDO.php";
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$passwd = md5($passwd);
//search data from database
try {
    $conn->query('set names utf8;');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT username,email FROM users where email='{$email}' and passwd='{$passwd}'");
    // echo "SELECT username FROM users where email='{$email}' and passwd='{$passwd}'";
    $stmt->execute();

    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    echo json_encode($stmt->fetchAll());
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
