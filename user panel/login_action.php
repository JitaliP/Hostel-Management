<?php

	include "database/dbconnect.php";

 echo $email=$_REQUEST['email'];
 echo $password=$_REQUEST['pwd'];

if (isset($_REQUEST['login']))
 {
	echo $sel= "SELECT * FROM `stud_registration` WHERE `email`='".$email."' AND `password`='".$password."' ";
 
$qry=mysqli_query($con,$sel);
$count=mysqli_num_rows($qry);
	
if ($count>0) 
{
	$row=mysqli_fetch_assoc($qry);
	$_SESSION['reg_id']=$row['reg_id'];
 	echo "Login okok";
 	header("location:index.php?page=admission_form");
}
 else
  {
	echo "Not ok";
	$_SESSION['errorMsg']="Inavlid Username Or Password!!....";
	header("location:login.php");
  }

	
}
?>