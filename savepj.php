<?php
include("conn/conn.php");
$title=$_POST['title'];
$content=$_POST['content'];
$spid=$_GET['id'];
$time=date("Y-m-j");
session_start();
$sql=mysql_query("select * from tb_user where name='".$_SESSION['username']."'",$conn);
$info=mysql_fetch_array($sql);
$userid=$info['id'];
mysql_query("insert into tb_comment (userid,spid,title,content,time) values ('$userid','$spid','$title','$content','$time') ",$conn);
//echo "<script>alert('Comment Post successfully!');</script>";
header("location:showpl.php?id=$spid");
?>