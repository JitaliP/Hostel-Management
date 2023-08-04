<?php
	include "dbconnection.php";
  
  error_reporting(0);
  if (@$_REQUEST['id']=="")
  {
    $action="insert";
  }
  else
  {
    $action="update";
    
  }


?>
<!DOCTYPE html>
<head>
<title> Registration </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>

<div class="w3layouts-main">
	<h2>Register Now</h2>
		<form action="regqry.php" method="post" enctype="multipart/form-data" >
			<input type="hidden" name="action" value="<?php echo $action; ?>">
			<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];  ?>">
			<br>
			<input type="file" class="ggg" name="profile" placeholder="choose your profile">
			<input type="text" class="ggg" name="name" placeholder="NAME" >
			<input type="date" class="ggg" name="dob" placeholder="">
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" >
			<input type="text" class="ggg" name="phone" placeholder="PHONE" >
			<input type="text" class="ggg" name="address" placeholder="ADDRESS" >
			
			<input type="password" class="ggg" name="pwd" placeholder="PASSWORD" >
			<h4><input type="checkbox" />I agree to the Terms of Service and Privacy Policy</h4>
			
				<div class="clearfix"></div>
				<input type="submit" value="submit" name="register">
		</form>
		<p>Already Registered.<a href="login.php">Login</a></p>
</div>
<!---728x90--->
</div>

</body>

</html>
