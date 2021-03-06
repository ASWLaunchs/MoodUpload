<?php
include "./conn_PDO.php";
$x=$_GET['x'];
$conn->query('set names utf8;');
$stmt = $conn->prepare("delete FROM users where username='{$x}'");
$stmt->execute();
echo "<script>history.go(-1);</script>";