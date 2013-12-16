<?php
   session_start();
?>
<link href="css/font.css" rel="stylesheet">
  <tr>
    <td><?php
 include("top.php");
?></td>
  </tr>
  <tr>
    <td bgcolor="white"><table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="800" height="438" align="center" valign="top" bgcolor="white"><table width="557"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="553" bgcolor="#FFFFFF"><table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
<!--                  <td width="557" bgcolor="#00b9f7" height="50"  align="center">Example heading <span class="label label-default">New</span></td>-->
                    <td align="center"><h3><span class="label label-info">Recommended Creation</span></h3></td>
                </tr>
              </table>
            <td><?php
                ?></td>

                <table width="550" border="00" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="555" height="110"><table width="530" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="265">
               <?php
			  $sql=mysql_query("select * from tb_product where tuijian=1 order by addtime desc limit 0,1");
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			   echo "Our Site is Temporarily out of Recommendations!";
			  }
			  else{
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info['tupian']=="")){
					  echo "Temporarily No Picture ";
					}
					else{
				  ?>
                                    <img src="<?php echo $info['tupian'];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images/circle.gif" width="10" height="10">&nbsp;<?php echo $info['mingcheng'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">Market   Price  :</font><font color="FF6501"><?php echo $info['shichangjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000"> Premium  Price  :</font><font color="FF6501"><?php echo $info['huiyuanjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000"> Left  Amount :</font><font color="13589B">                                  <?php 
				  if($info['shuliang']>0)
				  {
				     echo $info['shuliang'];
				  }
				  else
				  {
				     echo "Sold out";
				  }
				  ?>
</font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info['id'];?>"><img src="images/detail.jpg" width="60" height="18" border="0"></a> <a href="additemtocollection.php?id=<?php echo $info['id'];?>"><img src="images/buy.jpg" width="60" height="18" border="0"></a>                                 </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                          <td width="265">
                            <?php
			  $sql=mysql_query("select * from tb_product where tuijian=1 order by addtime desc limit 1,1");
			  $info=mysql_fetch_array($sql);
			  if($info==true)
			  {
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info['tupian']=="")){
					  echo "Temporarily No Picture ";
					}
					else{
				  ?>
                                    <img src="<?php echo $info['tupian'];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images/circle.gif" width="10" height="10">&nbsp;<?php echo $info['mingcheng'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">Market   Price  :</font><font color="FF6501"><?php echo $info['shichangjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000"> Premium  Price  :</font><font color="FF6501"><?php echo $info['huiyuanjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000"> Left  Amount :</font><font color="13589B">
                                  <?php 
				  if($info['shuliang']>0)
				  {
				     echo $info['shuliang'];
				  }
				  else
				  {
				     echo "Sold out";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info['id'];?>"><img src="images/detail.jpg" width="60" height="18" border="0"></a> <a href="additemtocollection.php?id=<?php echo $info['id'];?>"><img src="images/buy.jpg" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			    }
			   ?>
                          </td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="10" background="images/line1.gif"></td>
                  </tr>
                </table>
                <table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
<!--                      <td bgcolor="#00b9f7" height="50" style="font-size: 14pt;" align="center">Latest Creation</td>-->
                      <td align="center"><h3><span class="label label-info">Latest Creation</span></h3></td>

                  </tr>
                </table>
                <table width="543" border="00" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="543" height="110"><table width="540" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="265">
                            <?php
			  $sql=mysql_query("select * from tb_product order by addtime desc limit 0,1");
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			   echo "Our Site Temporarily Has No Recommended  Products!";
			  }
			  else{
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info['tupian']=="")){
					  echo "Temporarily No Picture ";
					}
					else{
				  ?>
                                    <img src="<?php echo $info['tupian'];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images/circle.gif" width="10" height="10">&nbsp;<?php echo $info['mingcheng'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">Market   Price  :</font><font color="FF6501"><?php echo $info['shichangjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000"> Premium  Price  :</font><font color="FF6501"><?php echo $info['huiyuanjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000"> Left  Amount :</font><font color="13589B">
                                  <?php 
				  if($info['shuliang']>0)
				  {
				     echo $info['shuliang'];
				  }
				  else
				  {
				     echo "Sold out";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info['id'];?>"><img src="images/detail.jpg" width="60" height="18" border="0"></a> <a href="additemtocollection.php?id=<?php echo $info['id'];?>"><img src="images/buy.jpg" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
						   }
						  ?>
                          </td>
                          <td width="265">
                            <?php
			  $sql=mysql_query("select * from tb_product order by addtime desc limit 1,1");
			  $info=mysql_fetch_array($sql);
			  if($info==true)
		
			  {
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info['tupian']=="")){
					  echo "Temporarily No Picture ";
					}
					else{
				  ?>
                                    <img src="<?php echo $info['tupian'];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images/circle.gif" width="10" height="10">&nbsp;<?php echo $info['mingcheng'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">Market   Price  :</font><font color="FF6501"><?php echo $info['shichangjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000"> Premium  Price  :</font><font color="FF6501"><?php echo $info['huiyuanjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000"> Left  Amount :</font><font color="13589B">
                                  <?php 
				  if($info['shuliang']>0)
				  {
				     echo $info['shuliang'];
				  }
				  else
				  {
				     echo "Sold out";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info['id'];?>"><img src="images/detail.jpg" width="60" height="18" border="0"></a> <a href="additemtocollection.php?id=<?php echo $info['id'];?>"><img src="images/buy.jpg" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="10" background="images/line1.gif"></td>
                  </tr>
                </table>
                <table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>

<!--                      <td bgcolor="#00b9f7" height="46" style="font-size: 14pt;" align="center">Popular Creation</td>-->
                      <td align="center"><h3><span class="label label-info">Popular Creation</span></h3></td>

                  </tr>
                </table>
                <table width="553" border="00" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="553" height="110"><table width="540" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="275">
                            <?php
			  $sql=mysql_query("select * from tb_product order by cishu desc limit 0,1");
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			   echo "Our Site Temporarily Has No Recommended  Product !";
			  }
			  else {
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info['tupian']=="")){
					  echo "Temporarily No Picture ";
					}
					else{
				  ?>
                                    <img src="<?php echo $info['tupian'];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images/circle.gif" width="10" height="10">&nbsp;<?php echo $info['mingcheng'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">Market   Price  :</font><font color="FF6501"><?php echo $info['shichangjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000"> Premium  Price  :</font><font color="FF6501"><?php echo $info['huiyuanjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000"> Left  Amount :</font><font color="13589B">
                                  <?php 
				  if($info['shuliang']>0)
				  {
				     echo $info['shuliang'];
				  }
				  else
				  {
				     echo "Sold out";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info['id'];?>"><img src="images/detail.jpg" width="60" height="18" border="0"></a> <a href="additemtocollection.php?id=<?php echo $info['id'];?>"><img src="images/buy.jpg" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                          <td width="255">
                            <?php
			  $sql=mysql_query("select * from tb_product order by cishu desc limit 1,1 ");
			  $info=mysql_fetch_array($sql);
			  if($info==true){
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info['tupian']=="")){
					  echo "Temporarily No Picture ";
					}
					else{
				  ?>
                                    <img src="<?php echo $info['tupian'];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images/circle.gif" width="10" height="10">&nbsp;<?php echo $info['mingcheng'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">Market   Price  :</font><font color="FF6501"><?php echo $info['shichangjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000"> Premium  Price  :</font><font color="FF6501"><?php echo $info['huiyuanjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000"> Left  Amount :</font><font color="13589B">
                                  <?php 
				  if($info['shuliang']>0)
				  {
				     echo $info['shuliang'];
				  }
				  else
				  {
				     echo "Sold out";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info['id'];?>"><img src="images/detail.jpg" width="60" height="18" border="0"></a> <a href="additemtocollection.php?id=<?php echo $info['id'];?>"><img src="images/buy.jpg" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="10"></td>
                  </tr>
              </table></td>
          </tr>
        </table></td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
<td>
<?php
 include("bottom.php");
?></td>
  </tr>
</table>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

