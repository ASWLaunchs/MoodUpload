<?php
include "./conn_PDO.php";
$email = $_POST['email'];

//search data from database
try {
    $conn->query('set names utf8;');
    $stmt = $conn->prepare("SELECT * FROM users where email='{$email}'");
    $stmt->execute();
    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    echo json_encode(count($stmt->fetchAll()));
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
