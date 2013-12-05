<?php
session_start();
include("conn/conn.php");
if($_SESSION['username']==""){
  echo "<script>alert(' Please   先login后购物!');history.back();</script>"; 
  exit;
 }
$id=strval($_GET['id']);
$sql=mysql_query("select * from tb_shangpin where id='".$id."'",$conn); 
$info=mysql_fetch_array($sql);
if($info['shuliang']<=0){
   echo "<script>alert(' This Creation已经售完!');history.back();</script>";
   exit;
 }
  $array=explode("@",$_SESSION['producelist']);
  for($i=0;$i<count($array)-1;$i++){
	 if($array['$i']==$id){
	     echo "<script>alert(' This Creation已经在您‘s Collection 中!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION['producelist']=$_SESSION['producelist'].$id."@";
  $_SESSION['quatity']=$_SESSION['quatity']."1@";
  header("location:gouwu1.php");
?> 