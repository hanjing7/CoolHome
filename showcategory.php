<?php
 include("top.php");
//echo "<script>$('.btn').button()</script>";
?>

<table id="content" width="60%" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width=60% align="center" valign="top" bgcolor="#FFFFFF"><table  height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td> <h4>&nbsp;
                <?php

                $sql=mysql_query("select * from tb_type order by id desc",$conn);
                $info=mysql_fetch_object($sql);
                if($info==false)
                {
                    echo "Our Site Temporarily Has No Creation Categories!";
                }
                else
                {
                    do
                    {
                        echo "<span class='label label-info'><a style='color:white;'href='showcategory.php?id=".$info->id."'>".$info->typename."&nbsp;</a></span>&nbsp;";


                    }while($info=mysql_fetch_object($sql));
                }
                ?>
            </h4>
            </td>
      </tr>
    </table>
      <?php
	   if($_GET['id']=="")
	   {
	     $sql=mysql_query("select * from tb_type order by id desc limit 0,1",$conn);
		 $info=mysql_fetch_array($sql);
		 $id=$info['id'];
	   }
	   else
	   {
         $id=$_GET['id'];
	   }
	   $sql1=mysql_query("select * from tb_type where id=".$id."",$conn);
	   $info1=mysql_fetch_array($sql1);
	   
       $sql=mysql_query("select count(*) as total from tb_product where typeid='".$id."' order by addtime desc ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info['total'];
	   if($total==0)
	   {
	     echo "<div align='center'>Our site does not have products for this category yet!</div>";
	   } 
	   else
	   {
	  ?>
      <table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#00b9f7"><div align="left"><span style="color: #f5f5f5; font-weight: bold"><span style="color: #000000">&nbsp;</span><?php echo $info1['typename'];?></span> </div></td>
        </tr>
      </table>
      <table width="550" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td background="images/line1.gif"></td>
        </tr>
      </table>
      <table width="550" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
        <?php
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
			 
             $sql1=mysql_query("select * from tb_product where typeid=".$id." order by addtime desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
        <tr>
          <td width="89"  rowspan="6"><div align="center">
              <?php
			 if($info1['tupian']=="")
			 {
			   echo "Temperarily No Picture !";
			 }
			 else
			 {
			?>
              <a href="lookinfo.php?id=<?php echo $info1['id'];?>"><img border="0" width="80" height="80" src="<?php echo $info1['tupian'];?>"></a>
              <?php
			 }
			?>
          </div></td>
          <td width="93" height="20"><div align="center" style="color: #000000">Creation Name:</div></td>
          <td colspan="5"><div align="left"><a href="lookinfo.php?id=<?php echo $info1['id'];?>"><?php echo $info1['mingcheng'];?></a></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">Creation Tag :</div></td>
          <td width="101" height="20"><div align="left"><?php echo $info1['pinpai'];?></div></td>
          <td width="62"><div align="center" style="color: #000000">Creation Model   :</div></td>
          <td colspan="3"><div align="left"><?php echo $info1['xinghao'];?></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">Creation Description :</div></td>
          <td height="20" colspan="5"><div align="left"><?php echo $info1['jianjie'];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000"> Market  Date  :</div></td>
          <td height="20"><div align="left"><?php echo $info1['addtime'];?></div></td>
          <td height="20"><div align="center" style="color: #000000"> Left  Amount :</div></td>
          <td width="69" height="20"><div align="left"><?php echo $info1['shuliang'];?></div></td>
          <td width="63"><div align="center" style="color: #000000">Creation Level :</div></td>
          <td width="73"><div align="left"><?php echo $info1['dengji'];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000"> Common   Price  :</div></td>
          <td height="20"><div align="left"><?php echo $info1['shichangjia'];?>Dollar</div></td>
          <td height="20"><div align="center" style="color: #000000"> Premium  Price  :</div></td>
          <td height="20"><div align="left"><?php echo $info1['huiyuanjia'];?>Dollar</div></td>
          <td height="20"><div align="center" style="color: #000000"> Discount :</div></td>
          <td height="20"><div align="left"><?php echo (ceil(($info1['huiyuanjia']/$info1['shichangjia'])*100))."%";?></div></td>
        </tr>
        <tr>
          <td height="20" colspan="6" width="461"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="additemtocollection.php?id=<?php echo $info1['id'];?>"><img src="images/buy.jpg" width="60" height="18" border="0" style=" cursor:hand"></a></div></td>
        </tr>
        <tr>
          <td height="10" colspan="7" background="images/line1.gif"></td>
        </tr>
        <?php
	    }
		
		?>
      </table>
      <table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="right"> &nbsp;Total Items&nbsp;
                  <?php
		   echo $total;
		  ?>
&nbsp; items  &nbsp; Each    Page  Shows &nbsp;<?php echo $pagesize;?>&nbsp; items  &nbsp; Page &nbsp;<?php echo $page;?>&nbsp;  /Total&nbsp;<?php echo $pagecount; ?>&nbsp; Page
        <?php
		  if($page>=2)
		  {
		  ?>
        <?php
		  }
		          if($pagecount<=4){
		           for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="showcategory.php?id=<?php echo $id;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="showcategory.php?id=<?php echo $id;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="showcategory.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="Next Page  "><font face="webdings"> 8 </font></a> <a href="showcategory.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="β Page  "><font face="webdings"> : </font></a>
        <?php }?>
          </div></td>
        </tr>
      </table>
    <?php
	   }
	  
	  ?>	</td>
  </tr>
</table>
<?php
 include("bottom.php");
?>