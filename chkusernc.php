<?php
 $nc=trim($_GET['nc']);
?>
<?php
 include("conn/conn.php");
?>
<html>
<head>
<title>
昵称重用检测
</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FADD33">
  <tr>
    <td height="50"><div align="center">
	
	<?php
	  if($nc=="")
	  {
	    echo " Please    type in   昵称!";
	  
	  }
	  else
	  {
	    $sql=mysql_query("select * from tb_user where name='".$nc."'",$conn);  
	    $info=mysql_fetch_array($sql);
		if($info==true)
		{
		  echo "对Not 起, This 昵称已被占用!";
		}
		else
		{
		   echo "Congratulations! , This 昵称没被占用!";
		} 
	  }
	?>
	</div></td>
  </tr>
  <tr>
    <td height="50"><div align="center"><input type="button" value="Comfirm" class="buttoncss" onClick="window.close()"></div></td>
  </tr>
</table>
</body>