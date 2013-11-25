<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/loginbase.css">
	<link rel="stylesheet" href="css/loginskeleton.css">
	<link rel="stylesheet" href="css/loginlayout.css">
	
</head>
<script language="javascript">
	  function chkinput(form){
	    if(form.name.value==""){
		  alert("Please Type in Username!");
		  form.name.select();
		  return(false);
		}
		if(form.pwd.value==""){
		  alert("Please Input User Password!");
		  form.pwd.select();
		  return(false);
		}
		return(true);
	  }
	</script>
<body>
	<div class="notice">
		<a href="" class="close">close</a>
		<p class="warn">Whoops! We didn't recognise your username or password. Please try again.</p>
	</div>



	<!-- Primary Page Layout -->

	<div class="container">
		
		<div class="form-bg">
			<form name="form1" method="post" action="chkadmin.php" onSubmit="return chkinput(this)">
				<h2>Cool Home Administrator Login</h2>
				<p><input type="text" name="name" placeholder="Username"></p>
				<p><input type="password" name="pwd" placeholder="Password"></p>
				<label for="remember">
				  <input type="checkbox" id="remember" value="remember" />
				  <span>Remember me</span>
				</label>
				<button type="submit"></button>
				<p class="forgot"><a href="">Reset Password</a></p>
			<form>
		</div>

	
		<p class="forgot">System Sponsored by CoolHome</a></p>


	</div><!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	
<!-- End Document -->
</body>
</html>