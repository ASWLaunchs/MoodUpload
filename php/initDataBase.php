<?php
header("Content-Type: text/html;charset=utf-8");
include "conn.php";
if (!$conn) {
    die('连接错误: ' . mysqli_error($conn));
}
echo '连接成功<br />';
mysqli_set_charset($conn, 'utf8');
//创建数据库
$sql = 'CREATE DATABASE if not exists moodDance';
$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die('创建数据库失败: ' . mysqli_error($conn));
}
echo "数据库 moodDance 创建成功<br/>\n";

//创建数据库
$sql = 'use moodDance';
$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die('连接数据库失败: ' . mysqli_error($conn));
}
echo "数据库连接成功\n";

//创建admin数据表-管理员
$sql = "create table if not exists admin(
    id int not null primary key comment '管理员ID',
    username varchar(36) not null comment '用户名',
    passwd varchar(36) not null comment '密码',
    avator varchar(255) comment '头像')ENGINE=InnoDB DEFAULT CHARSET=utf8";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die('创建数据表admin失败: ' . mysqli_error($conn));
}
echo "数据表 admin 创建成功<br/>\n";

//创建officialInfo数据表-官方
$sql = "create table if not exists officialinfo(
    id int not null comment '发布信息的管理员id',
    announcement tinytext comment '公告',
    excellent tinytext comment '优秀用户',
    t_date DATETIME comment '发表时间',
    foreign key(id) references admin(id))ENGINE=InnoDB DEFAULT CHARSET=utf8";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die('创建数据表officialInfo失败' . mysqli_error($conn));
}
echo "数据表 officialInfo 创建成功<br/>\n";

//创建users数据表-用户
$sql = "create table if not exists users(
    id int not null auto_increment comment '用户ID',
    username varchar(36) not null comment '用户名',
    passwd varchar(36) not null comment '密码',
    email varchar(255) not null comment '电子邮件',
    age int(4) comment '年龄',
    sex int(1) comment '性别',
    addr varchar(255) comment '地址',
    brief varchar(600) comment '简介',
    avator varchar(255) comment '头像',
    primary key (id),
    unique (id))ENGINE=InnoDB DEFAULT CHARSET=utf8 ";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die('创建数据表users失败' . mysqli_error($conn));
}
echo "数据表 users 创建成功<br/>\n";

//创建usersData数据表-用户数据(记录浏览历史，喜欢，已经是否被官方封号或警告)
$sql = "create table if not exists usersData(
    id int not null comment '用户ID',
    favor int(10) comment '喜欢',
    warning int(1) comment '警告',
    foreign key (id) references users (id))ENGINE=InnoDB DEFAULT CHARSET=utf8 ";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die('创建数据表usersData失败' . mysqli_error($conn));
}
echo "数据表 usersData 创建成功<br/>\n";

//创建multimedia数据表-媒体信息
$sql = "create table if not exists multimedia(
    id int not null auto_increment comment '多媒体ID',
    favor int(7) comment '喜欢',
    fpath varchar(255) not null comment '视频 / 图片',
    primary key (id))ENGINE=InnoDB DEFAULT CHARSET=utf8 ";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die('创建数据表multimedia失败' . mysqli_error($conn));
}
echo "数据表 multimedia 创建成功<br/>\n";

//创建comments数据表-用户弹幕
$sql = "create table if not exists comments(
    mutlimedia_id int not null comment '媒体ID',
    users_id int not null comment '用户ID',
    username varchar(36) not null comment '用户名',
    usercomment tinytext not null comment '用户弹幕',
    t_date datetime comment '弹幕发布日期',
    foreign key(mutlimedia_id) references multimedia(id),
    foreign key(users_id) references users(id))ENGINE=InnoDB DEFAULT CHARSET=utf8";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die('创建数据表comments失败' . mysqli_error($conn));
}
echo "数据表 comments 创建成功<br/>\n";

mysqli_close($conn);
