<?php
  $title=$_POST['title'];
  $content=$_POST['content'];
  include("conn/conn.php");
  mysql_query("update tb_posts set title='$title',content='$content' where id='".$_POST['id']."'",$conn);
  echo "<script>alert('Announcement Update Successfully!');history.back();</script>";
?>