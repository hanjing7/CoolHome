
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>User ��Ϣ����</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php
include("conn/conn.php");
$id=$_GET['id'];
$sql=mysql_query("select * from tb_user where id=".$id."",$conn);
$info=mysql_fetch_array($sql);
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">User ��Ϣ�鿴</div></td>
  </tr>
  <tr>
    <td height="98" bgcolor="#666666"><table width="650" border="0" align="center" cellpadding="0" cellspacing="1">
      <!--DWLayoutTable-->
      <tr>
        <td width="99" height="20" bgcolor="#FFFFFF"><div align="center">User �ǳƣ�</div></td>
        <td width="180" bgcolor="#FFFFFF"><div align="left"><?php echo $info['name'];?></div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center">User ״̬��</div></td>
        <td width="266" bgcolor="#FFFFFF"><div align="left"><?php
	 if($info['dongjie']==0)
	  {
	    echo "�Ƕ���״̬";
	  }
	  else
	  { 
	   echo "����״̬"; 
	  }
		?></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">Full Name ��</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['truename'];?></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">���֤Number ��</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['sfzh'];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">E-mail��</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['email'];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">Contact �绰��</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['tel'];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">QQNumber �룺</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['qq'];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center"> Register ʱ�䣺</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['regtime'];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center"> Password Hint��</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['tishi'];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center"> Password Security Answer��</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['huida'];?></div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td height="20"><div align="center"><a href="dongjieuser.php?id=<?php echo $id;?>">
	<?php
	 $sql=mysql_query("select * from tb_user where id=".$id."",$conn);
	 $info=mysql_fetch_array($sql);
	 if($info['dongjie']==0)
	  {
	    echo "���� This User ";
	  }
	  else
	  {
	    echo "�������";
	  }
	?></a></div></td>
  </tr>
</table>
</body>
</html>
