<link href="css/font.css" rel="stylesheet" type="text/css" />

<?php
 include("top.php");
 include("conn/conn.php");
?>
<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>

<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1200" align="center" valign="top" bgcolor="#FFFFFF">
     
      <table width="800" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="25" bgcolor="#8A87CC">&nbsp;&nbsp;Creation INFO</td>
        </tr>
      </table>
        <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#fff">
              <table width="800" border="0" align="center" cellpadding="0" cellspacing="1">
                <?php
		     $sql=mysql_query("select * from tb_product where id=".$_GET['id']."",$conn);
			 $info=mysql_fetch_object($sql);
		   ?>
                <tr>
                  <td width="300" height="300" rowspan="5"  bgcolor="#FFFFFF"><div align="center">
                      <?php
			    if($info->tupian==""){
				  echo "Temporarily No Picture ";
				}
				else
				{
			  ?>
                      <a href="<?php echo $info->tupian;?>" target="_blank"><img src="<?php echo $info->tupian;?>" alt="View Full Size Image" 
					  width="300" height="300" border="0"></a>
                      <?php
			    }
			  ?>
                  </div></td>
                  <td width="92" height="20" align="left" bgcolor="#FFFFFF"><div id = "list">Creation Name:</div></td>
                  <td width="134" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo $info->mingcheng;?></div></td>
                  <td width="100" bgcolor="#FFFFFF"><div id = "list">Time:</div></td>
                  <td width="129" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo $info->addtime;?></div></td>
                </tr>
                <tr>
                  <td height="20" align="left" bgcolor="#FFFFFF"><div id = "list"> Premium  Price  :</div></td>
                  <td width="134" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo $info->huiyuanjia;?></div></td>
                  <td width="100" bgcolor="#FFFFFF"><div id = "list">Market   Price  :</div></td>
                  <td width="129" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo $info->shichangjia;?></div></td>
                </tr>
                <tr>
                  <td height="20" align="left" bgcolor="#FFFFFF"><div id = "list"> Level :</div></td>
                  <td width="134" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo $info->dengji;?></div></td>
                  <td width="100" bgcolor="#FFFFFF"><div id = "list"> Tag :</div></td>
                  <td width="129" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo $info->pinpai;?></div></td>
                </tr>
                <tr>
                  <td height="20" align="left" bgcolor="#FFFFFF"><div id = "list"> Model   :</div></td>
                  <td width="134" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo $info->xinghao;?></div></td>
                  <td width="100" bgcolor="#FFFFFF"><div id = "list"> Amount :</div></td>
                  <td width="129" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo $info->shuliang;?></div></td>
                </tr>
                <tr>
                  <td width="89" height="69" bgcolor="#FFFFFF"><div align="center">Creation Description :</div></td>
                  <td height="69" colspan="4" bgcolor="#FFFFFF" valign="top"><div align="left"><br>
&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $info->jianjie;?></div></td>
                </tr>
            </table></td>
          </tr>
        </table>
        <table width="530" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><div align="right"><a href="additemtocollection.php?id=<?php echo $info->id;?>">Add to Collection </a>&nbsp;&nbsp;</div></td>
          </tr>
        </table>
        <?php
	   if($_SESSION['username']!="")
	   {
	  
	  ?>
  <form name="form1" method="post" action="savepj.php?id=<?php echo $info->id;?>" onSubmit="return chkinput(this)">
  <table width="530" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="25" bgcolor="#8A87CC"><div align="center" style="color: #FFFFFF">
                  <div align="left">&nbsp;&nbsp;<span style="color: #000000">Comment </span></div>
              </div></td>
            </tr>
            <tr>
              <td height="150" bgcolor="#999999"><table width="530" border="0" align="center" cellpadding="0" cellspacing="1">
                  <script language="javascript">
		    function chkinput(form)
			{
			   if(form.title.value=="")
			   {
			     alert(" Please type in Comment Topic!");
				 form.title.select();
				 return(false);
			   }
			   if(form.content.value=="")
			   {
			     alert(" Please    type in   Comment Content !");
				 form.content.select();
				 return(false);
			   }
			   return(true);
			}
		  </script>
                  <tr>
                    <td width="80" height="25" bgcolor="#FFFFFF"><div align="center">Comment Title:</div></td>
                    <td width="467" bgcolor="#FFFFFF"><div align="left">
                        <input type="text" name="title" size="30" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                    </div></td>
                  </tr>
                  <tr>
                    <td height="125" bgcolor="#FFFFFF"><div align="center">Comment Content:</div></td>
                    <td height="125" bgcolor="#FFFFFF"><div align="left">
                        <textarea name="content" cols="70" rows="10" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></textarea>
                    </div></td>
                  </tr>
              </table></td>
            </tr>
        </table>
          <table width="530" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="center">
                  <input name="submit2" type="submit" class="buttoncss" value="Post ">
&nbsp;&nbsp;&nbsp;<a href="showpl.php?id=<?php echo $_GET['id'];?>">View Comments of the Creation</a></div></td>
            </tr>
          </table>
      </form>
    <?php
	   }
	  
	  ?></td></tr>
</table>
<?php
 include("bottom.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
