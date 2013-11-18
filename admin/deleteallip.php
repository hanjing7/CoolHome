<?php
include("conn/conn.php");
mysql_query("delete from tb_ip",$conn);
echo "<script>alert('· Each   Í¼ÇÂ¼Çå³ý³É¹¦!');history.back();</script>";
?>