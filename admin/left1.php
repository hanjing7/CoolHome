
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>CoolHome Backstage  Management </title>
<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
<link rel="stylesheet" href="css/admingrid.css" type="text/css" media="screen">  
</head>
<script language="javascript">
  function openspgl(){
    if(document.all.spgl.style.display=="none"){
	   document.all.spgl.style.display="";
	   document.all.d1.src="images/point3.gif";
	 }
	 else{
	  document.all.spgl.style.display="none";
	  document.all.d1.src="images/point1.gif";
	 }  
  }
  function openyhgl(){
    if(document.all.yhgl.style.display=="none"){
	   document.all.yhgl.style.display="";
	   document.all.d2.src="images/point3.gif";
	 }
	 else{
	  document.all.yhgl.style.display="none";
	  document.all.d2.src="images/point1.gif";
	 }  
  }
  function openddgl(){
    if(document.all.ddgl.style.display=="none"){
	   document.all.ddgl.style.display="";
	   document.all.d3.src="images/point3.gif";
	 }
	 else{
	  document.all.ddgl.style.display="none";
	  document.all.d3.src="images/point1.gif";
	 }  
  }
  function opengggl(){
    if(document.all.gggl.style.display=="none"){
	   document.all.gggl.style.display="";
	   document.all.d4.src="images/point3.gif";
	 }
	 else{
	  document.all.gggl.style.display="none";
	  document.all.d4.src="images/point1.gif";
	 }  
  }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="212" border="0" cellpadding="0" cellspacing="0" background="left_bg.gif">
  <tr>
  <h3 class="p0">Management Panel</h3>
  <ul class="list-2">
  
        <li><a href="#" onClick="javascript:openspgl()">Creation Management</a></li>
			<ul class="list-3" id="spgl" style="display:">
				<li><a href="addgoods.php" target="main">Add Creation</a></li>
				<li><a href="editgoods.php" target="main">Update Creation</a></li>
				<li><a href="showleibie.php" target="main">Creation Category Management </a></li>
				<li><a href="addleibie.php" target="main">Add Creation Category</a></li>
			</ul>
        <li><a href="#" onClick="javascript:openyhgl()">User  Management</a></li>
			<ul class="list-3" id="yhgl" style="display:">
				<li><a href="edituser.php" target="main">User Information Management </a></li>
				<li><a href="lookleaveword.php"  target="main">User Message Management </a></li>
				<li>;<a href="changeadmin.php"  target="main">Change Administrator Info</a></li>
			</ul>
        <li><a href="#" onClick="javascript:openddgl()">Order  Management</a></li>
			<ul class="list-3" id="ddgl" style="display:">
				<li><a href="lookdd.php" target="main">Edit Order </a></li>
				<li><a href="finddd.php" target="main">Query Order </a></li>
			</ul>
        <li><a href="#" onClick="javascript:opengggl()">Information Management</a></li>
			<ul class="list-3" id="gggl" style="display:">
				<li><a href="admingonggao.php " target="main">Announcement  Management </a></li>
				<li><a href="addgonggao.php " target="main">Add Announcement </a></li>
				<li><a href="editpinglun.php " target="main">Comment Management </a></li>
			</ul>
    </ul>
   
</body>
</html>
