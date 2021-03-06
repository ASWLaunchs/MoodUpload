<?php
include "./conn_PDO.php";
$x1=$_GET['title'];
$x2="<h4>".$x1."<h4><h6>".$_GET['text']."</h6>";
$conn->query('set names utf8;');
try {    
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="insert into officialinfo(id,announcement,t_date) values(1998,'{$x2}',now())";
$conn->exec($sql);
echo "新记录插入成功";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
echo "<script>history.go(-1);</script>";