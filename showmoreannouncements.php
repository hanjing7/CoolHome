<?php
 include("top.php");
?>
<table width = "800">
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="581" align="center" valign="top" bgcolor="#FFFFFF">
	<table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
		<td width="10" rowspan=""5></td>
        <tr>
          <td width="557" height="56" background="images/gg.gif"><div align="center" style="color: #FFFFFF"></div></td>
        </tr>
        <tr>
          <td height="150"><table width="530"  border="0" align="center" cellpadding="0" cellspacing="1">
              <?php
		     
		     $id=$_GET['id'];
			 $sql=mysql_query("select * from tb_posts where id='".$id."'",$conn);
			 $info=mysql_fetch_array($sql);
		     include("function.php");
		   
		   ?>
              <tr>
                <td width="68" height="25" bgcolor="#FFFFFF"><div id="list">__Announcement __Topic：</div></td>
				<td width="10" rowspan=""5></td>
                <td width="252" bgcolor="#FFFFFF"><div align="left"><?php echo unhtml($info['title']);?></div></td>
                <td width="63" bgcolor="#FFFFFF"><div align="center">Release Time ：</div></td>
                <td width="112" bgcolor="#FFFFFF"><div align="left"><?php echo $info['time'];?></div></td>
              </tr>
              <tr>
                <td height="125" bgcolor="#FFFFFF"><div align="center">Announcement Content ：</div></td>
                <td height="125" colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo unhtml($info['content']);?></div></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="530" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="right"><a href="showannouncements.php">Keep Viewing </a></div></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>