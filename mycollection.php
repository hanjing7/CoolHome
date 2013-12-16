<?php
 session_start();
 if($_SESSION['username']==""){
    echo "<script>alert(' Please Login First!');history.back();</script>";
	exit;
  }
?>
<?php
 include("top.php");
?>
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>


    <td width="561" align="center" valign="top" bgcolor="#FFFFFF"><table width="550" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
    </table>
      <table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
        <form name="form1" method="post" action="mycollection.php">
          <tr>
              <td height="46" style="font-size: 24pt;" align="center"><span class="label label-primary">Shopping Cart</span></td>

          </tr>
          <tr>
            <td  bgcolor="#FFFFFF"><table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
                <?php

			  if($_GET['qk']=="yes"){
			     $_SESSION['producelist']="";
				 $_SESSION['quatity']=""; 
			  }

               $arraygwc=explode("@",$_SESSION['producelist']);

			   $s=0;
			   for($i=0;$i<count($arraygwc);$i++){
			       $s = $arraygwc[$i];
                   if(is_numeric($s)) break;
			   }
			  if($s==0 ){
				   echo "<tr>";
                   //echo" <td height='25' colspan='6' bgcolor='#FFFFFF' align='center'>Empty Collection!</td>";
                   echo" <td width='100%' height='25' bgcolor='#0058a6'><div align=center'><span style='margin-left: 40%;'><b>Empty Collection!</div></td>";
                   echo"</tr>";
				}
			  else{ 
			?>
                <tr>
                  <td width="125" height="25" bgcolor="#FFFFFF"><div align="center">Creation Name</div></td>
                  <td width="52" bgcolor="#FFFFFF"><div align="center"> Amount </div></td>
                  <td width="64" bgcolor="#FFFFFF"><div align="center">Market   Price  </div></td>
                  <td width="64" bgcolor="#FFFFFF"><div align="center"> Premium  Price  </div></td>
                  <td width="51" bgcolor="#FFFFFF"><div align="center"> Discount </div></td>
                  <td width="66" bgcolor="#FFFFFF"><div align="center">Subtotal </div></td>
                  <td width="71" bgcolor="#FFFFFF"><div align="center">Operation </div></td>
                </tr>
                <?php
			    $total=0;
			    $array=explode("@",$_SESSION['producelist']);
				$arrayquatity=explode("@",$_SESSION['quatity']);
				 while(list($name,$value)=each($_POST)){
					  for($i=0;$i<count($array)-1;$i++){
					    if(($array['$i'])==$name){
						  $arrayquatity['$i']=$value;  
						}
					}
				}
			    $_SESSION['quatity']=implode("@",$arrayquatity);

				for($i=0;$i<count($array)-1;$i++){
                    //echo $array[$i];
				   $id=$array[$i];
				   $num=$arrayquatity[$i];
				  
				  if($id!=""){

				   $sql=mysql_query("select * from tb_product where id='".$id."'",$conn);

				   $info=mysql_fetch_array($sql);

				   $total1=$num*$info['huiyuanjia'];
				   $total+=$total1;
				   $_SESSION['total']=$total;

			?>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['mingcheng'];?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">
                  <input type="text" name="<?php echo $info['id'];?>" size="2" class="inputcss" value=<?php echo $num;?>>
                  </div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">$<?php echo $info['shichangjia'];?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">$<?php echo $info['huiyuanjia'];?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo @(ceil(($info['huiyuanjia']/$info['shichangjia'])*100))."%";?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">$<?php echo $info['huiyuanjia']*$num."";?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="removegwc.php?id=<?php echo $info['id']?>">Remove</a></div></td>
                </tr>
                <?php
			      }
				 }
			 ?>
                <tr>
                  <td height="25" colspan="8" bgcolor="#FFFFFF"><div align="right">
                      <table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="125"><div align="center">
                              <input name="submit2" type="submit" class="buttoncss" value="Edit Creation Amount ">
                          </div></td>
                          <td width="125"><div align="center"><a href="receiverinfo.php"> Checkout</a></div></td>
                          <td width="125"><div align="center"><a href="mycollection.php?qk=yes"> Empty Collection </a></div></td>
                          <td width="125"><div align="left">Total :<?php echo $total;?></div></td>
                        </tr>
                      </table>
                  </div></td>
                </tr>
                <?php
			 }
			?>
            </table></td>
          </tr>
        </form>
    </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>