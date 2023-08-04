<?php 
	include "..\database\dbconnect.php";
	$username=$_REQUEST['email'];
	$password=$_REQUEST['pwd'];
	$select= "SELECT * FROM stu_registration WHERE email ='$username' and password = '$password'";
	$qry=mysqli_query($con,$select) or die("Query failed..");
	$count=mysqli_num_rows($qry);
	if ($count > 0) 
	{
			// session_unset();
			session_start();
			$row=mysqli_fetch_assoc($qry);
			$_SESSION['username']=$row['email'];
			$_SESSION['reg_id']=$row['reg_id'];
			header("location: http://localhost/llh/User%20penal/index.php?page=home");
	}
	else {
			$_SESSION['errorMsg']="Please enter valid username and password";
			header("location: http://localhost/llh/User%20penal/index.php?page=login");		 
	}
?>