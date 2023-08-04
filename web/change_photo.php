
  <?php
	include "dbconnection.php";
  
   error_reporting(0);
  
  	if (isset($_POST['submit']))
	{
			$id=$_REQUEST['id'];
			$action=$_REQUEST['action'];
  		$profile=$_FILES['profile']['name'];
			$s_tmp_profile=$_FILES['profile']['tmp_name'];
			move_uploaded_file($s_tmp_profile,"images/llh/".$profile);
			
  echo 	$action="UPDATE `admin` SET `Profile`='$profile' WHERE `id`='$id.'";
  	mysqli_query($con,$action) or die("faild....");
  	header("location:index.php?page=profile");
	  }
	
?>
<!DOCTYPE html>
<head>
<title> change photo</title>
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
	<h2>Change photo</h2>

		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  enctype="multipart/form-data" >
			<input type="hidden" name="action" value="<?php echo $action; ?>">
			<input type="hidden" name="id" value="<?php echo @$_REQUEST['id'];  ?>">
			<br>
			<input type="file" class="ggg" name="profile" placeholder="choose your profile">
				<div class="clearfix"></div>
				<input type="submit" value="submit" name="submit">
		</form>
		
</div>
<!---728x90--->
</div>

</body>

</html>
