<?php
$dbservername = "localhost";
// $dbusername = "u20184087127";
// $dbpassword = "18jbatydd";
// $dbname = "u20184087127_db";
$dbusername = "root";
$dbpassword = "";
$dbname = "mooddance";

try {
    $conn = new PDO("mysql:host=$dbservername;dbname=$dbname", $dbusername, $dbpassword);
    // echo "服务连接成功！\n";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }