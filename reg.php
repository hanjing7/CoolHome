<?php
 include("top.php");
?>
<script language="javascript">
  function chknc(nc)
  {
    window.open("chkusernc.php?nc="+nc,"newframe","width=200,height=10,left=500,top=200,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
  }
</script>
<script language="javascript">
  function chkinput(form)
  {
    if(form.usernc.value=="")
	{
	 alert(" Please    type in   username!");
	 form.usernc.select();
	 return(false);
	}
	if(form.p1.value=="")
	{
	 alert(" Please    type in    Register  Password !");
	 form.p1.select();
	 return(false);
	}
    if(form.p2.value=="")
	{
	 alert(" Please    type in   Re-type Password !");
	 form.p2.select();
	 return(false);
	 }	
	if(form.p1.value.length<6)
	 {
	 alert(" Register Password is too short. Minimum 6 characters!");
	 form.p1.select();
	 return(false);
	 }	
	if(form.p1.value!=form.p2.value)
	 {
	 alert(" Password don't match!");
	 form.p1.select();
	 return(false);
	 }
   if(form.email.value=="")
	{
	 alert(" Please    type in   Email Address !");
	 form.email.select();
	 return(false);
	 }
	if(form.email.value.indexOf('@')<0)
	{
	 alert(" Please    type in   a valid email address !");
	 form.email.select();
	 return(false);
	 }
   if(form.tel.value=="")
	{
	 alert(" Please    type in   Contact Number!");
	 form.tel.select();
	 return(false);
	 }
  if(form.truename.value=="")
	{
	 alert(" Please    type in   Full Name !");
	 form.truename.select();
	 return(false);
	 }
//  if(form.sfzh.value=="")
//	{
//	 alert(" Please    type in   IdentificationNumber !");
//	 form.sfzh.select();
//	 return(false);
//	 }
  if(form.dizhi.value=="")
	{
	 alert(" Please    type in   Address !");
	 form.dizhi.select();
	 return(false);
	 }
//  if(form.tsda.value=="")
//	{
//	 alert(" Please     type Password Security Answer!");
//	 form.tsda.select();
//	 return(false);
//	 }
//   if((form.ts1.value==1)&&(form.ts2.value==""))
//     {
//	 alert(" Please   retype type in    Password Security Answer!");
//	 form.ts2.select();
//	 return(false);
//	 }
   return(true);
  }
</script>
<table width="766" height="350" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>

    <td width="561" align="center" valign="top" bgcolor="#FFFFFF"><table width="557"  height="15" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="500"><table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="557" height="46" background="images/user.gif"><div align="center" style="color: #FFFFFF"></div></td>
            </tr>
            <tr>
              <td  bgcolor="#555555"><table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
                  <form name="form1" method="post" action="savereg.php" onSubmit="return chkinput(this)">
                    <tr>
                      <td width="100" height="20" bgcolor="#FFFFFF"><div align="center">&nbsp;&nbsp;User Name:</div></td>
                      <td width="397" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="usernc" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">&nbsp;*</span>&nbsp;

                      </div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center"> Register  Password :</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="password" name="p1" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">Re-type Password :</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="password" name="p2" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">E-mail:</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="email" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
<!--                    <tr>-->
<!--                      <td height="20" bgcolor="#FFFFFF"><div align="center">QQ&nbsp;Number:</div></td>-->
<!--                      <td height="20" bgcolor="#FFFFFF"><div align="left">-->
<!--                          <input type="text" name="qq" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">-->
<!--                      </div></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                      <td height="20" bgcolor="#FFFFFF"><div align="center">yb:</div></td>-->
<!--                      <td height="20" bgcolor="#FFFFFF"><div align="left">-->
<!--                          <input type="text" name="yb" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">-->
<!--                      </div></td>-->
<!--                    </tr>-->
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">Contact Number:</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="tel" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">(Telephone Number )*</span></div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">Full Name :</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="truename" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span> </div></td>
                    </tr>
<!--                    <tr>-->
<!--                      <td height="20" bgcolor="#FFFFFF"><div align="center">IdentificationNumber :</div></td>-->
<!--                      <td height="20" bgcolor="#FFFFFF"><div align="left">-->
<!--                          <input type="text" name="sfzh" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">-->
<!--                          <span style="color: #FF0000">*</span></div></td>-->
<!--                    </tr>-->
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">Address :</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="dizhi" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
<!--                    <tr>-->
<!--                      <td height="20" bgcolor="#FFFFFF"><div align="center"> Password Hint:</div></td>-->
<!--                      <td height="20" bgcolor="#FFFFFF"><div align="left">-->
<!--                          <select name="ts1" class="inputcss">-->
<!--                            <option selected value=1> Please   </option>-->
<!--                            <option value="��s ����">��s ����</option>-->
<!--                            <option value="�㡮s ����">�㡮s ����</option>-->
<!--                            <option value="��ĸ�ס�s ����">��ĸ�ס�s ����</option>-->
<!--                            <option value="���ס�s ����">���ס�s ����</option>-->
<!--                            <option value="�����Not ���s ��">�����Not ���s ��</option>-->
<!--                          </select>-->
<!--&nbsp;&nbsp;����:&nbsp;&nbsp;-->
<!--                      <input type="text" name="ts2" class="inputcss" size="15" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">-->
<!--                      <span style="color: #FF0000">*</span></div></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                      <td height="20" bgcolor="#FFFFFF"><div align="center">Security Answer:</div></td>-->
<!--                      <td height="20" bgcolor="#FFFFFF"><div align="left">-->
<!--                          <input type="text" name="tsda" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">-->
<!--                          <span style="color: #FF0000">*</span></div></td>-->
<!--                    </tr>-->
                    <tr>
                      <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center">
                          <input name="submit2" type="submit" class="buttoncss" value=" Login  ">
&nbsp;&nbsp;
                        <input name="reset" type="reset" class="buttoncss" value="Reset ">
                      </div></td>
                    </tr>
                  </form>
              </table></td>
            </tr>
          </table>
            <table width="557" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="547"><div align="center" style="color: #FF0000">Required Content</div>
              </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>