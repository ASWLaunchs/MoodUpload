<?php
include "./conn_PDO.php";
$x=$_GET['x'];
$conn->query('set names utf8;');
$stmt = $conn->prepare("delete FROM multimedia where fpath='{$x}'");
$stmt->execute();
echo "<script>window.location.href='./adminR.php';</script>";