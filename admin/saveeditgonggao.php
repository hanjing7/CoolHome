<?php
  $title=$_POST['title'];
  $content=$_POST['content'];
  include("conn/conn.php");
  mysql_query("update tb_gonggao set title='$title',content='$content' where id='".$_POST['id']."'",$conn);
  echo "<script>alert('Announcement Update ³É¹¦!');history.back();</script>";
?>