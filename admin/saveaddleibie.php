<?php
$leibie=$_POST['leibie'];
include("conn/conn.php");
$sql=mysql_query("select * from tb_type where typename='".$leibie."'",$conn);
$info=mysql_fetch_array($sql);
if($info!=false){
 echo"<script>alert(' This  Category ���Ѿ�Exist !');window.location.href='addleibie.php';</script>";
exit;
}
mysql_query("insert into tb_type(typename) values ('$leibie')",$conn);
echo"<script>alert('�� Category ����ӳɹ�!');window.location.href='addleibie.php';</script>";
?>