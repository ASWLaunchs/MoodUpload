<?php
header('Content-Type:application/json;charset=utf-8');

include "./conn_PDO.php";

//search data from database
try {
    $conn->query('set names utf8;');
    $stmt = $conn->prepare("SELECT * FROM multimedia");
    $stmt->execute();

    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    echo json_encode($stmt->fetchAll());
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
