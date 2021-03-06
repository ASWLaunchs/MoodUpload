<?php
$dbhost = 'localhost'; // mysql服务器主机地址
$dbuser = 'root'; // mysql用户名
$dbpass = ''; // mysql用户名密码
// $dbname = 'mooddance'; //mysql数据库名
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
$conn->query('set names utf8;');
