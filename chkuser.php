<?php
include("conn/conn.php");
$username=$_POST['username'];

$userpwd=md5($_POST['userpwd']);
$yz=$_POST['yz'];
$num=$_POST['num'];
//if(strval($yz)!=strval($num)){
//  echo "<script>alert(' Verification Code typed in Error!');history.go(-1);</script>";
//  exit;
// }
class chkinput{
   var $name;
   var $pwd;

   function chkinput($x,$y){
     $this->name=$x;
     $this->pwd=$y;
    }

   function checkinput(){
     include("conn/conn.php");
     $sql=mysql_query("select * from tb_user where name='".$this->name."'",$conn);
     $info=mysql_fetch_array($sql);
     if($info==false){
          echo "<script language='javascript'>alert('User does not Exist');history.back();</script>";
          exit;
       }
      else{
	      if($info['dongjie']==1){
			   echo "<script language='javascript'>alert(' This User is locked');history.back();</script>";
               exit;
			}

          if(strcmp(($this->pwd),$info['pwd']) == 0)//
            {  
			//echo"$this->pwd";
			   session_start();
	           $_SESSION['username']=$info['name'];

               header("location:index.php");
               exit;
            }
          else {
             echo "<script language='javascript'>alert('Incorrect Password');history.back();</script>";
             exit;
           }

      }    
   }
 }

    $obj=new chkinput(trim($username),trim($userpwd));
    $obj->checkinput();
?>