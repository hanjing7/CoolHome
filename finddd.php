<?php
 include("top.php");
?>
<table width="1200" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
   
    <td width="761" align="center" valign="top" bgcolor="#FFFFFF"><table width="550" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
      <table width="730" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="25" align="center" style="font-size: 24pt;"><span class="label label-primary">Order Query</span></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="550" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
              <tr>
                <td bgcolor="#FFFFFF">
                  <table width="750" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
                    <script language="javascript">
			     function chkinput3(form)
				 {
				   if((form.username.value=="")&&(form.ddh.value==""))
				    {
				      alert(" Please type in Order Person or Order Number ");
					  form.username.select();
					  return(false);
				    }
				   return(true);
				    
				 }
			   </script>
                    <form name="form3" method="post" action="finddd.php" onSubmit="return chkinput3( this)">
                      <tr>
                        <td height="25"><div align="center">Full Name of Orderer:
                                <input name="username" type="text" class="inputcss" id="username" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="25">
                      Order Number :
                      <input type="text" name="ddh" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
						<input type="hidden" value="show_find" name="show_find">
                            <input name="submit2" type="submit" class="buttoncss" value="SEARCH">	
					   </div>
						</td>
                      </tr>
                     
                    </form>
                </table></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="550" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
      <?php
	    if($_POST['show_find']!="")
		 {
	      $username=trim($_POST['username']);
		  $ddh=trim($_POST['ddh']);
		  if($username=="")
		   {
		       $sql=mysql_query("select * from tb_order where dingdanhao='".$ddh."'",$conn);
		   }
		  elseif($ddh=="")
		  {
		      $sql=mysql_query("select * from tb_order where xiadanren='".$username."'",$conn);
		   }
		  else
		  {
		      $sql=mysql_query("select * from tb_order where xiadanren='".$username."'and dingdanhao='".$ddh."'",$conn);
		  }
		  $info=mysql_fetch_array($sql);
		  if($info==false)
		   {
		      echo "<div algin='center'><b>Search Not Found</b></div>";
		   }
		   else
		   {
	  ?>
      <table width="725" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="25" bgcolor="#8A87CC"><div align="center" id="list">Query Result</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="700" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
              <tr>
                <td width="197" height="25" bgcolor="#FFFFFF"><div align="center">Order Number </div></td>
                <td width="77" bgcolor="#FFFFFF"><div align="center">Receiver </div></td>
                <td width="77" bgcolor="#FFFFFF"><div align="center">Orderer</div></td>
                <td width="77" bgcolor="#FFFFFF"><div align="center">Total </div></td>
                <td width="97" bgcolor="#FFFFFF"><div align="center">Payment Method</div></td>
                <td width="77" bgcolor="#FFFFFF"><div align="center">Delivery</div></td>
                <td width="177" bgcolor="#FFFFFF"><div align="center">Order Status</div></td>
              </tr>
              <?php
			
			  do
			  {
			
			?>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['dingdanhao'];?></div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['xiadanren'];?></div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['shouhuoren'];?></div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['total'];?></div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['zfff'];?></div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['shff'];?></div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['zt'];?></div></td>
              </tr>
              <?php
			   }while($info=mysql_fetch_array($sql));
			?>
          </table></td>
        </tr>
      </table>
    <?php
		   }
		  }
		?></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>