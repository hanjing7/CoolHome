<?php
 include("conn/conn.php");
 while(list($name,$value)=each($_POST))
  {
      $sql=mysql_query("select tupian from tb_product where id='".$value."'",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info['tupian']!="")
	  {
	     @unlink(substr($info['tupian'],6,(strlen($info['tupian'])-6)));
		
	  }
	  $sql1=mysql_query("select * from tb_order ",$conn);
	  while($info1=mysql_fetch_array($sql1))
	  {  $id1=$info1['id'];
	     $array=explode("@",$info1['spc']);
	     for($i=0;$i<count($array);$i++){
	        if($array['$i']==$value)
			 {
			   mysql_query("delete from tb_order where id='".$id1."'",$conn);
			 }
	      }
	  }
      mysql_query("delete from tb_product where id='".$value."'",$conn);
	  mysql_query("delete from tb_comment where spid='".$value."'",$conn);
  }
 header("location:editgoods.php"); 
?>