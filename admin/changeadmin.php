
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>更改User </title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">

 function chkinput(form)
  {
    if(form.n0.value=="")
	   {
	     alert(" Please    type in   User 名!");
		 form.n0.select();
		 return(false);
	   
	   } 
	if(form.n1.value!="")
	  {
	    if(form.n1.value==""||form.n2.value=="")
		 {
		   alert(" Please    type in   新User 名或确认User 名!");
		   form.n1.select();
		   return(false);
		 }
	   if(form.n1.value!=form.n2.value)
	   {
	       alert("新User 名与确认User 名Not 同!");
		   form.n1.select();
		   return(false);
	   
	   }
	  }
	  if(form.p0.value=="")
	   {
	     alert(" Please    type in   User  Password !");
		 form.p0.select();
		 return(false);
	   
	   }
	   
    if(form.p1.value!="")
	  {
	    if(form.p1.value==""||form.p2.value=="")
		 {
		   alert(" Please    type in   新User  Password 或Re-type Password !");
		   form.p1.select();
		   return(false);
		 }
	    if(form.p1.value!=form.p2.value)
	   {
	       alert("新User  Password 与确认User  Password Not 同!");
		   form.p1.select();
		   return(false);
	   
	   }
	  }
    return(true);
  }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<div align="center">
  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
    <form name="form1" method="post" action="savechangeadmin.php" onSubmit="return chkinput(this)">
	<tr>
      <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">更改 Management 员信息</div></td>
    </tr>
    <tr>
      <td bgcolor="#666666"><table width="750" border="0" align="center" cellpadding="0" cellspacing="1">
        
		<tr>
          <td width="99" height="25" bgcolor="#FFFFFF"><div align="center">原 Management 员名：</div></td>
          <td width="152" height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="n0" class="inputcss" size="20"></div></td>
          <td width="96" height="25" bgcolor="#FFFFFF"><div align="center">新 Management 员名：</div></td>
          <td width="139" height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="n1" class="inputcss" size="20"></div></td>
          <td width="127" height="25" bgcolor="#FFFFFF"><div align="center">确认新 Management 员名：</div></td>
          <td width="130" bgcolor="#FFFFFF"><div align="left"><input type="text" name="n2" class="inputcss" size="20"></div></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">原 Management 员 Password ：</div></td>
          <td bgcolor="#FFFFFF"><div align="left"><input type="password" name="p0" class="inputcss" size="20"></div></td>
          <td bgcolor="#FFFFFF"><div align="center">新 Management 员 Password ：</div></td>
          <td bgcolor="#FFFFFF"><div align="left"><input type="password" name="p1" class="inputcss" size="20"></div></td>
          <td bgcolor="#FFFFFF"><div align="center">确认新 Management 员 Password ：</div></td>
          <td bgcolor="#FFFFFF"><div align="left"><input type="password" name="p2" class="inputcss" size="20"></div></td>
        </tr>
		
      </table>
	  </td>
    </tr>
     <tr>
      <td height="20"><div align="center" class="style1"><input type="submit" value="更改" class="buttoncss">&nbsp;<input type="reset" value="取消更改" class="buttoncss"></div></td>
    </tr>
	</form>
  </table>
</div>
</body>
</html>
