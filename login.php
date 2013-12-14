<?php
include("top.php");
if($_SESSION['username'])
{
    echo "<script>alert('You are already logged in');history.back();</script>";
    exit;
}
?>
    <script language="javascript">-->
        function chkuserinput(form){
            if(form.username.value==""){
                alert(" Please type in Username!");
                form.username.select();
                return(false);
            }
            if(form.userpwd.value==""){
                alert(" Please type in User Password !");
                form.userpwd.select();
                return(false);
            }

            return(true);
        }
    </script>
    <script language="javascript">
        function openfindpwd(){
            window.open("openfindpwd.php","newframe","left=200,top=200,width=200,height=100,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
        }
    </script>
    <table width="1200" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>

            <td width="1200" align="center" valign="top" bgcolor="#FFFFFF"><table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">

                </table>
                <table width="726" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td background="images/line1.gif"></td>
                        <form name="form2" method="post" action="chkuser.php" onSubmit="return chkuserinput(this)">
                            <tr>
                                <td height="10" colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="50" height="20"><div align="right">User :</div></td>
                                <td height="20" colspan="2"><div align="left">
                                        <input type="text" name="username" size="19" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                    </div></td>
                            </tr>
                            <tr>
                                <td height="20"><div align="right"> Password :</div></td>
                                <td colspan="2"><div align="left">
                                        <input type="password" name="userpwd" size="19" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                    </div></td>
                            </tr>

                            <tr>
                                <td height="20" colspan="3"><div style = "margin-left:132px; align="center">
                                    <a href="agreereg.php"> Register </a>&nbsp;<a style="color: black;" href="javascript:openfindpwd()"> Forgot Password </a>&nbsp;
                                        <input name="submit" type="submit" class="buttoncss" value="Submit ">
                                       </div></td>
                            </tr>
                        </form>
                    </tr>
                </table>
        </tr>
    </table>
<?php
include("bottom.php");
?>