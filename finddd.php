<?php
 include("top.php");
?>
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="229" valign="top" bgcolor="#F4F4F4"><?php include("left.php");?>    
    <td width="561" align="center" valign="top" bgcolor="#FFFFFF"><table width="550" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
      <table width="530" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="25" bgcolor="#FFEDBF"><div align="center" style="color: #6A0202">Order Query </div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="550" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
              <tr>
                <td bgcolor="#FFFFFF">
                  <table width="550" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
                    <script language="javascript">
			     function chkinput3(form)
				 {
				   if((form.username.value=="")&&(form.ddh.value==""))
				    {
				      alert(" Please    type in   ��Order �˻�Order Number ");
					  form.username.select();
					  return(false);
				    }
				   return(true);
				    
				 }
			   </script>
                    <form name="form3" method="post" action="finddd.php" onSubmit="return chkinput3( this)">
                      <tr>
                        <td height="25"><div align="center">��Order ��Full Name :
                                <input name="username" type="text" class="inputcss" id="username" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="25">
                      Order Number :
                      <input type="text" name="ddh" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                        </div></td>
                      </tr>
                      <tr>
                        <td height="25">
                          <div align="center">
                            <input type="hidden" value="show_find" name="show_find">
                            <input name="submit2" type="submit" class="buttoncss" value="�� ��">
                        </div></td>
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
		       $sql=mysql_query("select * from tb_dingdan where dingdanhao='".$ddh."'",$conn);
		   }
		  elseif($ddh=="")
		  {
		      $sql=mysql_query("select * from tb_dingdan where xiadanren='".$username."'",$conn);
		   }
		  else
		  {
		      $sql=mysql_query("select * from tb_dingdan where xiadanren='".$username."'and dingdanhao='".$ddh."'",$conn);
		  }
		  $info=mysql_fetch_array($sql);
		  if($info==false)
		   {
		      echo "<div algin='center'>��Not ��,û��Search �� This Order !</div>";    
		   }
		   else
		   {
	  ?>
      <table width="525" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="25" bgcolor="#FFEDBF"><div align="center" style="color: #6E0202">Query ���</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="550" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
              <tr>
                <td width="77" height="25" bgcolor="#FFFFFF"><div align="center">Order Number </div></td>
                <td width="77" bgcolor="#FFFFFF"><div align="center">�µ�User </div></td>
                <td width="77" bgcolor="#FFFFFF"><div align="center">������</div></td>
                <td width="77" bgcolor="#FFFFFF"><div align="center">����ܼ�</div></td>
                <td width="77" bgcolor="#FFFFFF"><div align="center">���ʽ</div></td>
                <td width="77" bgcolor="#FFFFFF"><div align="center">�տʽ</div></td>
                <td width="77" bgcolor="#FFFFFF"><div align="center">Order ״̬</div></td>
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