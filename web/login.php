<?php
include 'dbconnection.php';
if (@$_SESSION['admin_id']) 
 {
    header("location:index.php");
 }

?>

<!DOCTYPE html>

<head>
<title> Login </title>
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
</head>
<body>

<div class="w3layouts-main">
	<h2>Sign In Now</h2>
		<form action="loginqry.php" method="post">
			<input type="email" class="ggg" name="email" placeholder="E-MAIL">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD">
			<span><input type="checkbox" />Remember Me</span>
			<h6><a href="forget.php">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
<?php 
			if(isset($_SESSION['errorMsg']))
			{
			?>
			<div class="alert-danger">
				<?php echo $_SESSION['errorMsg']; 
				unset($_SESSION['errorMsg']); ?>
			</div>	
				
			<?php } ?>


		<?php 
			if(isset($_SESSION['succMsg']))
			{
			?>
			<div class="alert-success">
				<?php echo $_SESSION['succMsg']; 
				unset($_SESSION['succMsg']); ?>
			</div>	
				
			<?php } ?>
		
		<p>Don't Have an Account ?<a href="registration.php">Create an account</a></p>
		<p class="margin-t text-whitesmoke"><small> Live like home<img src="../user penal/assets-design/frontend/llh/img/logo2.png" style="height:20px; width: 20px;"> </small> </p>
               
</div>
<!---728x90--->
</div>
</html>

