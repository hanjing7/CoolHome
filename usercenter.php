<?php
 session_start();
 if($_SESSION['username']=="")
 {
   echo "<script>alert('You are not login, Please login!');history.back();</script>";
   exit;
  }
?>
<?php
 include("top.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
<!--    <td width="209" height="438" valign="top" bgcolor="#F0F0F0">--><?php //include("left.php");?><!--</td>-->

    <td width="537" align="center" valign="top" bgcolor="#FFFFFF"><table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
      <table width="550" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
        </tr>
      </table>
      <table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" bgcolor="#8A87CC"><div align="center" style="color: #660206"><?php echo $_SESSION['username'];?> User Info</div></td>
        </tr>
        <tr>
          <td height="160" bgcolor="#8A87CC"><table width="500" height="160" border="0" align="center" cellpadding="0" cellspacing="1">
              <script language="javascript">
		     function chkinput1(form)
			  {
			    if(form.email.value=="")
				{
				  alert("Email can't be empty!");
				  form.email.select();
				  return(false);
				}
				if(form.email.value.indexOf('@')<0)
				{
				  alert("Enter a valid email address!");
				  form.email.select();
				  return(false);
				}
				if(form.truename.value=="")
				{
				  alert("Full Name can't be empty!");
				  form.truename.select();
				  return(false);
				}
//				if(form.sfzh.value=="")
//				{
//				  alert("IdentificationNumber can't be empty!");
//				  form.sfzh.select();
//				  return(false);
//				}
				if(form.tel.value=="")
				{
				  alert("Contact number can't be empty!");
				  form.tel.select();
				  return(false);
				} 
				if(form.dizhi.value=="")
				{
				  alert("Contact Address can't be empty!");
				  form.dizhi.select();
				  return(false);
				}         
			   
				return(true);
			  }
		   </script>
              <form name="form1" method="post" action="changeuser.php" onSubmit="return chkinput1(this)">
                <?php
		   $sql=mysql_query("select * from tb_user where name='".$_SESSION['username']."'",$conn);
		   $info=mysql_fetch_array($sql);
		  
		  ?>
                <tr>
                  <td width="100" height="20" bgcolor="#FFFFFF"><div align="center">UserName:</div></td>
                  <td width="397" bgcolor="#FFFFFF"><div align="left"><?php echo $_SESSION['username'];?></div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">Full Name :</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="truename" size="25" class="inputcssnull" value="<?php echo $info['truename'];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">E-mail:</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="email" size="25" class="inputcssnull" value="<?php echo $info['email'];?>">
                  </div></td>
                </tr>
<!--                <tr>-->
<!--                  <td height="20" bgcolor="#FFFFFF"><div align="center">QQNumber:</div></td>-->
<!--                  <td height="20" bgcolor="#FFFFFF"><div align="left">-->
<!--                      <input type="text" name="qq" size="25" class="inputcssnull" value="--><?php //echo $info['qq'];?><!--">-->
<!--                  </div></td>-->
<!--                </tr>-->
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">Contact No.:</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="tel" size="25" class="inputcssnull" value="<?php echo $info['tel'];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">Address :</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="dizhi" size="25" class="inputcssnull" value="<?php echo $info['dizhi'];?>">
                  </div></td>
                </tr>
                <tr>
<!--                  <td height="20" bgcolor="#FFFFFF"><div align="center">ZIP:</div></td>-->
<!--                  <td height="20" bgcolor="#FFFFFF"><div align="left">-->
<!--                      <input type="text" name="youbian" size="25" class="inputcssnull" value="--><?php //echo $info['youbian'];?><!--">-->
<!--                  </div></td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                  <td height="20" bgcolor="#FFFFFF"><div align="center">ID Number :</div></td>-->
<!--                  <td height="20" bgcolor="#FFFFFF"><div align="left">-->
<!--                      <input type="text" name="sfzh" size="25" class="inputcssnull" value="--><?php //echo $info['sfzh'];?><!--">-->
<!--                  </div></td>-->
<!--                </tr>-->
                <tr>
                  <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center">
                      <input name="submit2" type="submit" class="buttoncss" value="Edit ">
&nbsp;&nbsp;
                <input name="reset" type="reset" class="buttoncss" value="Cancel Edit ">
                  </div></td>
                </tr>
              </form>
          </table></td>
        </tr>
      </table>
      <table width="500" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="center" style="color: #0000FF">You may edit when characters are blue</div></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>
