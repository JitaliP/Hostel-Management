<?php 
	include "..\database\dbconnect.php";

	$stu_f_name=$_POST['firstname'];
	$stu_l_name=$_POST['lastname'];
	$stu_email=$_POST['email'];
	$stu_pass=$_POST['pwd'];

	$registration="INSERT INTO `stu_registration`(`first_name`,`last_name`,`email`,`password`) VALUES('".$stu_f_name."','".$stu_l_name."','".$stu_email."','".$stu_pass."')";
	
	$result=mysqli_query($con,$registration) or die("Query fail...");

	$insert="INSERT INTO `admission`( `mname`, `fname`, `email`, `password`,`fee_status`,`status`) VALUES('".$stu_f_name."','".$stu_l_name."','".$stu_email."','".$stu_pass."','waiting','waiting')";
	$qry=mysqli_query($con,$insert) or die('Email Already Exists...!');

	header("location: http://localhost/llh/User%20penal/index.php?page=login");
?>