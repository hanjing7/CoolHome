<?php
 include("top.php");
?>
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="209" height="438" valign="top" bgcolor="#F4F4F4"><div align="center">

      </div></td>
    <td width="557" align="center" valign="top" bgcolor="#FFFFFF">       <script language="javascript">
		   function chkinput(form){
			   if(form.name.value==""){
				  alert(" Please    type in   Receiver Full Name !");
				  form.name.select();
				  return(false);
				}
				if(form.dz.value==""){
				  alert(" Please    type in   Receiver Address !");
				  form.dz.select();
				  return(false);
				}
//				if(form.yb.value==""){
//				  alert(" Please    type in   Receiver �ʱ�!");
//				  form.yb.select();
//				  return(false);
//				}
				if(form.tel.value==""){
				  alert(" Please    type in   Receiver Contact Number!");
				  form.tel.select();
				  return(false);
				}
				if(form.email.value==""){
				  alert(" Please    type in   Receiver E-mailAddress !");
				  form.email.select();
				  return(false);
				
				}
				if(form.email.value.indexOf("@")<0){
				    alert("Please type a valid Receiver E-mailAddress!");
				    form.email.select();
				    return(false);
				 }
				return(true);
			 }
		 </script>
      <table width="557" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="6"></td>
        </tr>
      </table>
      <table width="530" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#FCC223">
      <tr>
        <td height="25" bgcolor="#FEDD9A"><div align="center" style="color: #720206">Receiver  INFO</div></td>
      </tr>
      <tr>
        <td height="295"><table width="530" height="293" border="0" align="center" cellpadding="0" cellspacing="1">

            <form name="form1" method="post" action="savedd.php" onSubmit="return chkinput(this)">
              <tr>
                <td width="100" height="25" bgcolor="#FFFFFF"><div align="center">Receiver Full Name :</div></td>
                <td width="183" bgcolor="#FFFFFF"><div align="left">
                    <input type="text" name="name2" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                </div></td>
                <td width="86" bgcolor="#FFFFFF"><div align="center">Gender:</div></td>
                <td width="176" bgcolor="#FFFFFF"><div align="left">
                    <select name="sex">
                      <option selected value="male">M</option>
                      <option value="female">F</option>
                    </select>
                </div></td>
              </tr>
<!--              <tr>-->
<!--                <td height="25" bgcolor="#FFFFFF"><div align="center">��������:</div></td>-->
<!--                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">-->
<!--                    <input type="text" name="yb" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">-->
<!--                </div></td>-->
<!--              </tr>-->
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">Contact Number:</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <input type="text" name="tel" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">Email :</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <input type="text" name="email" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">Receiver Address :</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <input name="dz" type="text" class="inputcss" id="dz" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="50">
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">DELIVERY NOTIFICATION METHOD:</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <select name="shff" id="shff">
                      <option selected value="call">Phone Call</option>
                      <option value="sms">Text message</option>
                      <option value="e-mail">E-mail</option>
                    </select>
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">PAYMENT METHOD:</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <select name="zfff" id="zfff">
                      <option selected value="mastercard">Mastercard</option>
                      <option value="visa">Visa</option>
                      <option value="americanexpress">American Express</option>
                      <option value="discover">Discover</option>
                    </select>
                </div></td>
              </tr>
              <tr>
                <td height="86" bgcolor="#FFFFFF"><div align="center">Message:</div></td>
                <td height="86" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <textarea name="ly" cols="70" rows="5" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></textarea>
                </div></td>
              </tr>
              <tr>
                <td height="22" colspan="4" bgcolor="#FFFFFF"><div align="center">
                    <input name="submit2" type="submit" class="buttoncss" value=" Submit Order ">
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
 if($_GET['dingdanhao']!="")
  {  $dd=$_GET['dingdanhao'];
     session_start();
     $array=explode("@",$_SESSION['producelist']);
	 $sum=count($array)*20+260;
    echo" <script language='javascript'>";
	echo" window.open('showconfirmation.php?dd='+'".$dd."','newframe','top=150,left=200,width=600,height=".$sum.",menubar=no,toolbar=no,location=no,scrollbars=no,status=no ')";
	echo "</script>";

  }
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
