<?php
   session_start();
   include("conn/conn.php");
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CoolHome:Customized Furniture Design</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body bgcolor="#E6E6FA">
<table width=100%>
  <tr bgcolor="#023BA6">
    <td colspan="3" valign="bottom"><table width="1334" border="0" align="left" cellpadding="0" cellspacing="0">
      <tr>
        <td width="450" height="240" background="images/banner.png">&nbsp;</td>
        <td align="right" style="padding-right: 40px;" bgcolor="#023BA6">
		<table border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td id="username" style="color:white"><h4><?php
                      if($_SESSION['username'])
                      {
                          $name = $_SESSION['username'];
                          echo "Welcome $name";

                      } ?></a>&nbsp;&nbsp;&nbsp;&nbsp;</h4></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
		  <table height="20" border="0" align="center" cellpadding="0" cellspacing="0">
              <form name="form" method="post" action="findsp.php">
                <tr>
                  <td width="81" height="30" align="right">&nbsp;</td>
                  <td width="500" height="30" valign="bottom"><div align="left">&nbsp;<span class="style4"><img src="images/biao.png" width="30" height="30"></span>
                          <input type="text" name="name" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#000000'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <input type="hidden" name="jdcz" value="jdcz">
                          <input name="submit" type="submit" class="buttoncss" value="Search ">
                          <input name="button" type="button" class="buttoncss" onClick="javascript:window.location='highfind.php';" value="Advanced Search ">
					</div></td>
                </tr>
              </form>
			</table>

            <table height="120" align = "center"><tr>
    <td  height="22" align="right" style="padding-right: 0px;"><h4><a href="login.php">Login </a> | <a href="index.php">Home</a>
	| <a href="shownew.php"> Latest Creation</a> | <a href="showrecommendation.php">Recommended Creation</a> | <a href="showhot.php">
	Popular Creation</a>&nbsp;|&nbsp;<a href="showcategory.php">Creation Category </a>&nbsp;|<br/><br/>&nbsp;<a href="usercenter.php">User Center </a>
	&nbsp;|&nbsp;<a href="finddd.php">Order Query </a>&nbsp;|&nbsp;<a href="mycollection.php">My Collection &nbsp;</a> | <a href="logout.php">Logout </a> </h4></td>
            </tr></table>
</td>
      </tr>
    </table></td>
  </tr>
</table>	
