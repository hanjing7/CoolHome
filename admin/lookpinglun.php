
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>View Comment </title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<?php
include("conn/conn.php");
include("function.php");
$sql=mysql_query("select * from tb_comment where id='".$_GET['id']."'",$conn);
$info=mysql_fetch_array($sql);


?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25"><div align="left">Comment Topic:<?php echo $info['title'];?></div></td>
  </tr>
  <tr>
    <td height="25"><div align="left">����:</div></td>
  </tr>
  <tr>
    <td height="140" valign="top"><div align="left"><?php echo unhtml($info['content']);?></div></td>
  </tr>
</table>
</body>
</html>
