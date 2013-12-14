
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Edit Creation</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php
  include("conn/conn.php");
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<?php
	   $sql=mysql_query("select count(*) as total from tb_product ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info['total'];
	   if($total==0){
	     echo "Our Site Temperarily NoCreation!";
	   }
	   else
	    {
?>
<form name="form1" method="post" action="deletefxhw.php">
  <p>&nbsp;</p>
  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="75" bgcolor="#666666"><table width="750" height="86" border="0" cellpadding="0" cellspacing="1">
      
	  <tr bgcolor="#FFCF60">
        <td height="20" colspan="10"><div align="center" class="style1">Creation��ϢEdit </div></td>
      </tr>
      <tr>
        <td width="59" height="28" bgcolor="#FFFFFF"><div align="center">��ѡ</div></td>
        <td width="102" bgcolor="#FFFFFF"><div align="center"> Name</div></td>
        <td width="86" bgcolor="#FFFFFF"><div align="center"> Tag </div></td>
        <td width="71" bgcolor="#FFFFFF"><div align="center"> Model   </div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center"> Left </div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">�г� Price  </div></td>
        <td width="61" bgcolor="#FFFFFF"><div align="center"> Premium  Price  </div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">����</div></td>
        <td width="112" bgcolor="#FFFFFF"><div align="center">Add to Time</div></td>
        <td width="68" bgcolor="#FFFFFF"><div align="center">Operation</div></td>
      </tr>
	  <?php
	  
	       $pagesize=20;
		   if ($total<=$pagesize){
		      $pagecount=1;
			} 
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;
			
			}else{
			   $pagecount=$total/$pagesize;
			
			}
			if(($_GET['page'])==""){
			    $page=1;
			
			}else{
			    $page=intval($_GET['page']);
			
			}
			 
           $sql1=mysql_query("select * from tb_product order by addtime desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
		   while($info1=mysql_fetch_array($sql1))
		    {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="<?php echo $info1['id'];?>" value=<?php echo $info1['id'];?>>
        </div></td>
        <td height="25" bgcolor="#FFFFFF">
          
          <div align="center"><?php echo $info1['mingcheng'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['pinpai'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['xinghao'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php if($info1['shuliang']<0) {echo "����";}else {echo $info1['shuliang'];}?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['shichangjia'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['huiyuanjia'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['cishu'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['addtime'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="changegoods.php?id=<?php echo $info1['id'];?>">���</a></div></td>
      </tr>
	 <?php
	    }
        
      ?>
	 
    </table></td>
  </tr>
</table>
<table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="165">
	  <div align="left"><input name="submit" type="submit" class="buttoncss" id="submit" value="Deleteѡ��">
	  &nbsp;<input type="reset" value="����ѡ��" class="buttoncss"></div></td>
    <td width="585"><div align="right">&nbsp;Our Site  Totally    ����
        <?php
		   echo $total;
		  ?>
        &nbsp; items  &nbsp; Each    Page  Show &nbsp;<?php echo $pagesize;?>&nbsp; items  &nbsp; The &nbsp;<?php echo $page;?>&nbsp; Page  /Total&nbsp;<?php echo $pagecount; ?>&nbsp; Page  
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="editgoods.php?page=1" title="Home Page  "><font face="webdings"> 9 </font></a> <a href="editgoods.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="Prev Page  "><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="editgoods.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="editgoods.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="editgoods.php?page=<?php echo $page-1;?>" title="Next Page  "><font face="webdings"> 8 </font></a> <a href="editgoods.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="End Page  "><font face="webdings"> : </font></a>
        <?php }?>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
  <?php
	}
  ?>
</body>
</html>
