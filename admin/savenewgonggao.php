<?php
 include("conn/conn.php");
 $title=$_POST['title'];
 $content=$_POST['content'];
 $time=date("Y-m-j");
 mysql_query("insert into tb_gonggao (title,content,time) values ('$title','$content','$time')",$conn);
 echo "<script>alert('Announcement ��ӳɹ�!');history.back();</script>";
?>