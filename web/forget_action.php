<?php
include 'dbconnection.php';

if (isset($_REQUEST['forget'])) 
{
	$email=$_REQUEST['email'];

	$select="SELECT * FROM `admin` WHERE `email`='".$email."'";
	$qry=mysqli_query($con,$select);
	$count=mysqli_num_rows($qry);
	if ($count>0) 
	{
		$row=mysqli_fetch_assoc($qry);
		// echo " Email Found Successfully...<br>";
		// echo $row['email'];
	?>

	<!DOCTYPE html>

	<head>
	<title> Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- //bootstrap-css -->

    <!-- new font awsome link -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- end -->

    <!-- css for student detail. -->
    <link rel="stylesheet" type="text/css" href="..\web\css\student.css">
    <!-- end -->
    
    <!-- favicon -->
    <link rel="icon" type="image/png" href="..\web\images\logo2.png">
    <!-- end -->

    <!-- lightbox link -->
    <link rel="stylesheet" type="text/css" href="..\web\css\lightbox.css">
    <script type="text/javascript" src="..\web\js\lightbox-plus-jquery.js"></script>
    <!-- end -->

    <!-- gallary -->
    <link rel="stylesheet" type="text/css" href="..\web\css\gallery.css">
    <!-- end -->

<!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
    <link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>	</head>
	<body>

	<div class="w3layouts-main">
		<h2>New Password</h2>
			<form action="updatepwd.php" method="post">
				<input type="email" class="ggg" name="email" readonly="" value="<?php echo $row['email']; ?>" placeholder="E-MAIL">
				
				<input type="password" class="ggg" name="newpwd">
				
				
					<div class="clearfix"></div>
					<input type="submit" value="New Password" name="submit">
			</form>
			
	</div>
	<!---728x90--->
	</div>
	</html>

	<?php
	} 
} 

?>

