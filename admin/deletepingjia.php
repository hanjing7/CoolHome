<?php
include("conn/conn.php");
while(list($name,$value)=each($_POST))
 {
     $id=$value;
     mysql_query("delete from tb_comment where id=".$id."",$conn);
 
 }
header("location:editpinglun.php");
?>