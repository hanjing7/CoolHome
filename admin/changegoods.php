
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>���Creation��Ϣ</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php 
  include("conn/conn.php");
  $sql1=mysql_query("select * from tb_product where id=".$_GET['id']."",$conn);
  $info1=mysql_fetch_array($sql1);
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">���Creation��Ϣ</div></td>
  </tr>
  <tr>
    <td height="253" bgcolor="#666666"><table width="750" border="0" cellpadding="0" cellspacing="1">
        <script language="javascript">
	function chkinput(form)
	{
	  if(form.mingcheng.value=="")
	   {
	     alert(" Please    type in   Creation Name!");
		 form.mingcheng.select();
		 return(false);
	   }
	  
	
	
	  if(form.huiyuanjia.value=="")
	   {
	     alert(" Please    type in   Creation Premium  Price  !");
		 form.huiyuanjia.select();
		 return(false);
	   }
	 
	
	
	  if(form.shichangjia.value=="")
	   {
	     alert(" Please    type in   Creation�г� Price  !");
		 form.shichangjia.select();
		 return(false);
	   }
	  if(form.dengji.value=="")
	   {
	     alert(" Please    type in   Creation Level !");
		 form.dengji.select();
		 return(false);
	   }
	   
	   
	   if(form.pinpai.value=="")
	   {
	     alert(" Please    type in   Creation Tag !");
		 form.pinpai.select();
		 return(false);
	   }
	   
	   if(form.xinghao.value=="")
	   {
	     alert(" Please    type in   Creation Model   !");
		 form.xinghao.select();
		 return(false);
	   }
	   if(form.shuliang.value=="")
	   {
	     alert(" Please    type in   Creation Amount !");
		 form.shuliang.select();
		 return(false);
	   }
	   if(form.jianjie.value=="")
	   {
	     alert(" Please    type in   Creation Description !");
		 form.jianjie.select();
		 return(false);
	   }
	   return(true);
	}
    </script>
        <form name="form1"  enctype="multipart/form-data" method="post" action="savechangegoods.php?id=<?php echo $_GET['id'];?>" onSubmit="return chkinput(this)">
          <tr>
            <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">Creation Name:</div></td>
            <td width="618" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="mingcheng" size="25" class="inputcss" value="<?php echo $info1['mingcheng'];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center"> Market Time:</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <select name="nian" class="inputcss">
                  <?php 
  for($i=1995;$i<=2050;$i++)
  {
 ?>
                  <option <?php if(substr($info1['addtime'],0,4)==$i){echo "selected";}?>><?php echo $i;?></option>
                  <?php 
  }
 ?>
                </select>
                ��
                <select name="yue" class="inputcss">
                  <?php 
            for($i=1;$i<=12;$i++)
             {
            ?>
                  <option <?php if(substr($info1['addtime'],5,1)==$i){echo "selected";} ?>><?php echo $i;?></option>
                  <?php 
             }
             ?>
                </select>
                ��
                <select name="ri" class="inputcss">
                  <?php 
            for($i=1;$i<=31;$i++)
             {
            ?>
                  <option <?php if(substr($info1['addtime'],7,1)==$i){echo "selected";} ?>><?php echo $i;?></option>
                  <?php 
             }
             ?>
                </select>
                ��</div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center"> Price  :</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">�г� Price  :
                    <input type="text" name="shichangjia" size="10" class="inputcss" value="<?php echo $info1['shichangjia'];?>">
                Dollar&nbsp;&nbsp; Premium  Price  :
                <input type="text" name="huiyuanjia" size="10" class="inputcss" value="<?php echo $info1['huiyuanjia'];?>">
                Dollar</div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">Creation Category ��:</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <?php
			$sql=mysql_query("select * from tb_type order by id desc",$conn);
			$info=mysql_fetch_array($sql);
			if($info==false)
			{
			  echo " Please   ��Add Creation Category ��!";
			}
			else
			{
			?>
                <select name="typeid" class="inputcss">
                  <?php
			do
			{
			?>
                  <option value=<?php echo $info['id'];?> <?php if($info1['typeid']==$info['id']) {echo "selected";}?>><?php echo $info['typename'];?></option>
                  <?php
			}
			while($info=mysql_fetch_array($sql));
			?>
                </select>
                <?php
		     }
		    ?>
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">Creation Level :</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <select name="dengji" class="inputcss">
                  <option value="��Ʒ" <?php if(trim($info1['dengji'])=="��Ʒ"){echo "selected";}?>>��Ʒ</option>
                  <option value="һ��" <?php if(trim($info1['dengji'])=="һ��"){echo "selected";}?>>һ��</option>
                  <option value="����" <?php if(trim($info1['dengji'])=="����"){echo "selected";}?>>����</option>
                  <option value="��̭" <?php if(trim($info1['dengji'])=="��̭"){echo "selected";}?>>��̭</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td height="22" bgcolor="#FFFFFF"><div align="center">Creation Tag :</div></td>
            <td height="22" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="pinpai" class="inputcss" size="20" value="<?php echo $info1['pinpai'];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">Creation Model   :</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="xinghao" class="inputcss" size="20" value="<?php echo $info1['xinghao'];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">�Ƿ�Recommended :</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <select name="tuijian" class="inputcss" >
                  <option value=1 <?php if($info1['tuijian']==1) {echo "selected";}?>>��</option>
                  <option value=0 <?php if($info1['tuijian']==0) {echo "selected";}?>>��</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">Creation Amount :</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="shuliang" class="inputcss" size="20" value="<?php echo $info1['shuliang'];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">Creation Picture :</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                <input name="upfile" type="file" class="inputcss" id="upfile" size="30">
            </div></td>
          </tr>
          <tr>
            <td height="80" bgcolor="#FFFFFF"><div align="center">Creation Description :</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <textarea name="jianjie" cols="50" rows="8" class="inputcss"><?php echo $info1['jianjie'];?></textarea>
            </div></td>
          </tr>
          <tr>
            <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
              <input type="submit" class="buttoncss" value="���">
              &nbsp;&nbsp;
                <input type="reset" value="ȡ����" class="buttoncss">
            </div></td>
          </tr>
        </form>
    </table></td>
  </tr>
</table>
</body>
</html>
