
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Find  Password </title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<?php
 include("conn/conn.php");

?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
 <script language="javascript">

 </script>

  <tr bgcolor="#8A87CC">
    <td height="25" colspan="2"><div align="center"> Find  Password </div></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="67" height="25"><div align="center">&nbsp; Password sent! </div></td>
    <td width="133"><div align="left">Please check your email
	<?php
	  $nc=$_POST['nc'];
	  $sql=mysql_query("select * from tb_user where email='".$nc."'",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info==false)
	   {
	     echo "<script>alert('User not registered!');history.back();</script>";
		 exit;
	   }
	   else
	   {

           mail($nc,'Cool Home password', $info['pwd1']);
	   }
	   
	?>
	</div></td>
  </tr>

  <tr bgcolor="#FFFFFF">
    <td height="25" colspan="2"><div align="center"><input type="submit" value="Ok" onclick="window.close()" class="buttoncss"></div></td>
  </tr>
  </form>
</table>
<p>&nbsp;</p>
</body>
</html>
