<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CreationOrder </title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
@media print{
div{display:none}
}
.style3 {color: #990000}
-->
</style>
</head>
<?php
  include("conn/conn.php");
  $id=$_GET['id'];
  $sql=mysql_query("select * from tb_order where id='".$id."'",$conn);
  $info=mysql_fetch_array($sql);
  $spc=$info['spc'];
  $slc=$info['slc'];
  $arraysp=explode("@",$spc);
  $arraysl=explode("@",$slc);
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="600"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr align="center" bgcolor="#FFCF60">
    <td height="20" colspan="2">CreationOrder </td>
  </tr>
  <tr>
    <td width="448" height="20">Order Number :<?php echo $info['dingdanhao'];?></td>
    <td width="152"><div align="right">
  <script>     
  function prn(){     
  document.all.WebBrowser1.ExecWB(7,1);  
  }     
  </script>     
  <object   ID='WebBrowser1'   WIDTH=0   HEIGHT=0   CLASSID='CLSID:8856F961-340A-11D0-A96B-00C04FD705A2'></object>
	<input type="button" value="��ӡԤ��" class="buttoncss" onClick="prn()">&nbsp;
	<input type="button" value="��ӡ" class="buttoncss" onClick="window.print()"></div></td>
  </tr>
  <tr>
    <td height="20" colspan="2">Creation�б�(����):</td>
  </tr>
</table>
<table width="500" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#666666"><table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr bgcolor="#FFCF60">
        <td width="153" height="20">Creation Name</td>
        <td width="80">�г� Price  </td>
        <td width="80"> Premium  Price  </td>
        <td width="80"> Amount </td>
        <td width="101">С��</td>
      </tr>
	  <?php
	  $total=0;
	  for($i=0;$i<count($arraysp)-1;$i++){
 		if($arraysp['$i']!=""){
	     $sql1=mysql_query("select * from tb_product where id='".$arraysp['$i']."'",$conn);
	     $info1=mysql_fetch_array($sql1);
		 $total=$total+=$arraysl['$i']*$info1['huiyuanjia'];
	  ?>
	  <tr bgcolor="#FFFFFF">
        <td height="20"><?php echo $info1['mingcheng'];?></td>
        <td height="20"><?php echo $info1['shichangjia'];?></td>
        <td height="20"><?php echo $info1['huiyuanjia'];?></td>
        <td height="20"><?php echo $arraysl['$i'];?></td>
        <td height="20"><?php echo $arraysl['$i']*$info1['huiyuanjia'];?></td>
     </tr>
	 <?php
	    }
	   }
	 ?>
      <tr bgcolor="#FFFFFF">
        <td height="20" colspan="5">
          �ܼƷ���:<?php echo $total;?>
          </td>
        </tr>
    </table></td>
  </tr>
</table>
<table width="460" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="81" height="20">Orderer:</td>
    <td colspan="3"><?php echo $info['xiadanren'];?></td>
  </tr>
  <tr>
    <td height="20">�ջ���:</td>
    <td height="20" colspan="3"><?php echo $info['shouhuoren'];?></td>
  </tr>
  <tr>
    <td height="20">�ջ��˵�ַ:</td>
    <td height="20" colspan="3"><?php echo $info['dizhi'];?></td>
  </tr>
  <tr>
    <td height="20">��&nbsp;&nbsp;��:</td>
    <td width="145" height="20"><?php echo $info['youbian'];?></td>
    <td width="66">��&nbsp;&nbsp;��:</td>
    <td width="158"><?php echo $info['tel'];?></td>
  </tr>
  <tr>
    <td height="20">E-mail:</td>
    <td height="20"><?php echo $info['email'];?></td>
    <td height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
  </tr>
  <tr>
    <td height="20">�ͻ���ʽ:</td>
    <td height="20"><?php echo $info['shff'];?></td>
    <td height="20">֧����ʽ:</td>
    <td height="20"><?php echo $info['zfff'];?></td>
  </tr>
  <tr>
    <td height="20" colspan="4"><span class="style3"> Please   ����һ���ڰ���s ֧����ʽ���л��,���ʱע����s Order Number !���� Please   ��ʱ֪ͨI ��</span></td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td height="20"><div align="center"><input type="button" onClick="window.close()" value="�رմ���" class="buttoncss"></div></td>
    <td height="20">����Time:</td>
    <td height="20"><?php echo $info['time'];?></td>
  </tr>
</table>
</body>
</html>
