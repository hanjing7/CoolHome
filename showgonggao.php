<?php
 include("top.php");
?>
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="766" align="center" valign="top" bgcolor="#FFFFFF">      <table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="766" height="46" background="images/gg.gif"><div align="left"></div></td>
        </tr>
      </table>
      <?php
	   $sql=mysql_query("select count(*) as total from tb_posts",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info['total'];
	   if($total==0)
	   {
	     echo "Our Site Temperarily NoAnnouncement !";
	   }
	   else
	   {
	   ?>
      <table width="530" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#EEEEEE">
          <td width="296" height="20"><div align="center">Announcement Topic</div></td>
          <td width="136"><div align="center">Release Time </div></td>
          <td width="68"><div align="center">View Content </div></td>
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
			 
             $sql1=mysql_query("select * from tb_posts order by time desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
        <tr>
          <td height="20"><div align="left">-<?php echo $info1['title'];?></div></td>
          <td height="20"><div align="center"><?php echo $info1['time'];?></div></td>
          <td height="20"><div align="center"><a href="showgg.php?id=<?php echo $info1['id'];?>">View </a></div></td>
        </tr>
        <?php
	    }
		
		?>
        <tr>
          <td height="20" colspan="3"> &nbsp;
              <div align="right">Our Site  Totally    Announcement &nbsp;
                  <?php
		   echo $total;
		  ?>
&nbsp;&nbsp; Each    Page  Show &nbsp;<?php echo $pagesize;?>&nbsp;&nbsp; The &nbsp;<?php echo $page;?>&nbsp; Page  /Total&nbsp;<?php echo $pagecount; ?>&nbsp; Page  
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="showgonggao.php?page=1" title="Home Page  "><font face="webdings"> 9 </font></a> <a href="showgonggao.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="ǰһ Page  "><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="showgonggao.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="showgonggao.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="showgonggao.php?page=<?php echo $page-1;?>" title="Next Page  "><font face="webdings"> 8 </font></a> <a href="showgonggao.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="β Page  "><font face="webdings"> : </font></a>
        <?php }?>
            </div></td>
        </tr>
      </table>
    <?php
	    }
		
		?></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>