<?php
include("top.php");
include("function.php");
$spid=$_GET['spid'];
$id=$_GET['id'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" type="text/css" href="css/font.css">
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="209" height="438" valign="top" bgcolor="#FFFFFF"><div align="center">
      <?php
	   include("left.php");
	?>
      </div></td>
    <td width="581" valign="top" bgcolor="#FFFFFF"><table width="550" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><div align="left"><a href="javascript:history.back();">����</a></div></td>
      </tr>
    </table>
      <table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#FDE9C9">
          <td height="25" colspan="4"><div align="center" style="color: #990000">Creation����</div></td>
        </tr>
        <?php
       $sql=mysql_query("select count(*) as total from tb_pingjia where spid='".$_GET['id']."'",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info['total'];
	   if($total==0)
	   {
	     echo " This CreationTemperarily No������Ϣ!";
	   }
	   else
	   {
	       $pagesize=3;
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
             $sql1=mysql_query("select * from tb_pingjia where spid='".$_GET['id']."' order by time desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
        <tr>
          <td width="70" height="20"><div align="center">Creation Name��</div></td>
          <td width="181"><div align="left">
              <?php 
		     $spid=$info1['spid'];
			 $sql2=mysql_query("select mingcheng from tb_shangpin where id=".$spid."",$conn);
			 $info2=mysql_fetch_array($sql2);
			 echo $info2['mingcheng'];
		  ?>
          </div></td>
          <td width="70"><div align="center">����ʱ�䣺</div></td>
          <td width="229"><div align="left"><?php echo $info1['time'];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center">�����ߣ�</div></td>
          <td height="20" colspan="3"><div align="left">
              <?php 
		     $spid=$info1['userid'];
			 $sql3=mysql_query("select name from tb_user where id=".$spid."",$conn);
			 $info3=mysql_fetch_array($sql3);
			 echo $info3['name'];
			
		  ?>
          </div></td>
        </tr>
        <tr>
          <td height="20"><div align="center">�������⣺</div></td>
          <td height="20" colspan="3"><div align="left"><?php echo unhtml($info1['title']);?></div></td>
        </tr>
        <tr>
          <td height="40"><div align="center">�������ݣ�</div></td>
          <td height="40" colspan="3" valign="bottom"><div align="left"><?php echo unhtml($info1['content']);?></div></td>
        </tr>
        <tr>
          <td height="10" colspan="4" background="images/line1.gif"></td>
        </tr>
        <?php
		   }
		  }
		  ?>
      </table>
      <table width="550" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="right"> &nbsp;Our Site  Totally     This Creation����&nbsp;
                  <?php
		   echo $total;
		  ?>
&nbsp;��&nbsp; Each    Page  Show &nbsp;<?php echo $pagesize;?>&nbsp;��&nbsp; The &nbsp;<?php echo $page;?>&nbsp; Page  /Total&nbsp;<?php echo $pagecount; ?>&nbsp; Page  
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="showpl.php?page=1" title="Home Page  "><font face="webdings"> 9 </font></a> <a href="showpl.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>&spid=<?php echo $spid;?>&id=<?php echo $id;?>" title="ǰһ Page  "><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="showpl.php?page=<?php echo $i;?>&spid=<?php echo $spid;?>&id=<?php echo $id;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="showpl.php?page=<?php echo $i;?>&spid=<?php echo $spid;?>&id=<?php echo $id;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="showpl.php?page=<?php echo $page-1;?>&spid=<?php echo $spid;?>&id=<?php echo $id;?>" title="Next Page  "><font face="webdings"> 8 </font></a> <a href="editgoods.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>&spid=<?php echo $spid;?>&id=<?php echo $id;?>" title="β Page  "><font face="webdings"> : </font></a>
        <?php }?>
          </div></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>