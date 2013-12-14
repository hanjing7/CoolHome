<?php  
$ysk=$_POST['ysk']."&nbsp;";
$yfh=$_POST['yfh']."&nbsp;";
$ysh=$_POST['ysh']."&nbsp;";
$zt="";
if($ysk!="&nbsp;"){
   $zt.=$ysk;
 }
if($yfh!="&nbsp;"){
   $zt.=$yfh;
 }
 if($ysh!="&nbsp;"){
   $zt.=$ysh;
 }
 if(($ysk=="&nbsp;")&&($yfh=="&nbsp;")&&($ysh=="&nbsp;")){
    echo "<script>alert(' Please   ѡ����Status!');history.back();</script>";
	exit;
  }
 include("conn/conn.php");
 $sql3=mysql_query("select * from tb_order where id='".$_GET['id']."'",$conn);
 $info3=mysql_fetch_array($sql3);
 if(trim($info3['zt'])=="δ���κδ���"){
 $sql=mysql_query("select * from tb_order where id='".$_GET['id']."'",$conn);
 $info=mysql_fetch_array($sql);
 $array=explode("@",$info['spc']);
 $arraysl=explode("@",$info['slc']);
 
 for($i=0;$i<count($array);$i++){
	 $id=$array['$i'];
     $num=$arraysl['$i'];
      mysql_query("update tb_product set cishu=cishu+'".$num."' ,shuliang=shuliang-'".$num."' where id='".$id."'",$conn);
    }
  }
 mysql_query("update tb_order set zt='".$zt."'where id='".$_GET['id']."'",$conn);
 header("location:lookdd.php");
?>