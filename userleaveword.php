<?php
 include("top.php");
?>
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="209" height="438" valign="top" bgcolor="#F0F0F0"><div align="center">
      <?php include("left.php");?>
    </div></td>
    <td width="561" align="center" valign="top" bgcolor="#FFFFFF"><table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
      <table width="550" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="left">&nbsp;&nbsp;Current User &nbsp;<span style="color: #0000FF">》&nbsp;</span><?php echo $_SESSION['username'];?>&nbsp;<span style="color: #0000FF">》</span><a href="usercenter.php">修改个人 INFO</a>&nbsp;<span style="color: #0000FF">》</span><a href="userleaveword.php">User Message</a>&nbsp;<span style="color: #0000FF">》</span><a href="changeuserpwd.php">修改 Password </a>&nbsp;<span style="color: #0000FF">》</span><a href="logout.php">注销离开&nbsp;</a></div></td>
        </tr>
      </table>
      <table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" bgcolor="#8A87CC"><div align="center" style="color: #990000">User Message</div></td>
        </tr>
        <tr>
          <td height="150" bgcolor="#555555"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
              <script language="javascript">
			  function chkinput1(form)
			  {
			    if(form.title.value=="")
				{
				   alert(" Please    type in   MessageTopic!");
				   form.title.select();
				   return(false);
				}
			   if(form.content.value=="")
				{
				   alert(" Please    type in   MessageContent !");
				   form.content.select();
				   return(false);
				}
				return(true);
			  }
			
			</script>
              <form name="form2" method="post" action="saveuserleaveword.php" onSubmit="return chkinput1(this)">
                <tr>
                  <td width="102" height="25" bgcolor="#FFFFFF"><div align="center">MessageTopic:</div></td>
                  <td width="395" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="title" size="30" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                  </div></td>
                </tr>
                <tr>
                  <td height="100" bgcolor="#FFFFFF"><div align="center">MessageContent :</div></td>
                  <td height="100" bgcolor="#FFFFFF"><div align="left">
                      <textarea name="content" rows="8" cols="60" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></textarea>
                  </div></td>
                </tr>
                <tr>
                  <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
                      <input name="submit2" type="submit" class="buttoncss" value=" Login  ">
&nbsp;&nbsp;
                <input name="reset" type="reset" class="buttoncss" value="Reset ">
                  </div></td>
                </tr>
              </form>
          </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
