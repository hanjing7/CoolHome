<?php
include("conn/conn.php");
mysql_query("delete from tb_ip",$conn);
echo "<script>alert('� Each   ͼ�¼����ɹ�!');history.back();</script>";
?>