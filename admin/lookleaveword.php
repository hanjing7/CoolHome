
<html>
<head>
<title>User  Message Management </title>
<link  rel="stylesheet" type="text/css" href="css/font.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
 <?php
       include("conn/conn.php");
	    include("function.php");
	   $sql=mysql_query("select count(*) as total from tb_leaveword  ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info['total'];
	   if($total==0)
	   {
	     echo "Our Site Temperarily NoUser  Message!";
	   }
	   else
	   {
	  
	  ?>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
<form name="form1" method="post" action="deleteleaveword.php">
  <tr bgcolor="#FFCF60"> 
    <td height="20" colspan="2"><div align="center"><font color="#FFFFFF">User  Message Management </font></div></td>
  </tr>
  <tr> 
    <td height="40" colspan="2" bgcolor="#333333"><table width="750"  border="0" align="center" cellpadding="0" cellspacing="1">
        <tr> 
          <td width="357" height="20" bgcolor="#FFFFFF"><div align="center"> Message主题</div></td>
          <td width="80" bgcolor="#FFFFFF"><div align="center"> Message者</div></td>
          <td width="156" bgcolor="#FFFFFF"><div align="center"> Message时间</div></td>
          <td width="93" bgcolor="#FFFFFF"><div align="center">操作</div></td>
          <td width="58" bgcolor="#FFFFFF"><div align="center">删除</div></td>
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
			 
            
			 $sql1=mysql_query("select * from tb_leaveword  order by time desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
        <tr> 
          <td height="20" bgcolor="#FFFFFF"><div align="left"><?php echo unhtml($info1['title']);?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center">
		  <?php
		   $sql2=mysql_query("select name from tb_user where id='".$info1['userid']."'",$conn);
		   $info2=mysql_fetch_array($sql2);
		   echo $info2['name'];
		  ?>
		  </div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['time'];?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="editleaveword.php?id=<?php echo $info1['id'];?>">View </a></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center">
              <input type="checkbox" name=<?php echo $info1['id'];?> value=<?php echo $info1['id'];?>>
            </div></td>
        </tr>
		<?php
		 }
		?>
      </table></td>
  </tr>
  <tr> 
    <td width="652" height="20" bgcolor="#FFFFFF"><div align="left">
	&nbsp;Our Site  Totally    User  Message&nbsp;<?php
		   echo $total;
		  ?>&nbsp;&nbsp; Each    Page  Show &nbsp;<?php echo $pagesize;?>&nbsp;&nbsp; The &nbsp;<?php echo $page;?>&nbsp; Page  /Total&nbsp;<?php echo $pagecount; ?>&nbsp; Page  
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="lookleaveword.php?page=1" title="Home Page  "><font face="webdings"> 9 </font></a> 
		<a href="lookleaveword.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="Prev Page  "><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="lookleaveword.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="lookleaveword.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="lookleaveword.php?page=<?php echo $page-1;?>" title="Next Page  "><font face="webdings"> 8 </font></a> 
		<a href="lookleaveword.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="End Page  "><font face="webdings"> : </font></a>
        <?php }?>
	
	</div></td>
    <td width="98" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="删除选项" class="buttoncss"></div></td>
  </tr>
  </form>
</table>
	<?php
		 }
	?>
</body>
</html>
