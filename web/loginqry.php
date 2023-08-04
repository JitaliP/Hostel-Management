<?php

	include "dbconnection.php";

 echo $email=$_REQUEST['email'];
 echo $password=$_REQUEST['password'];

if (isset($_REQUEST['login']))
 {
echo $sel= "SELECT * FROM `admin` WHERE `email`='".$email."' AND `password`='".$password."' ";
 
$qry=mysqli_query($con,$sel);
$count=mysqli_num_rows($qry);
	
if ($count>0) 
{
	$row=mysqli_fetch_assoc($qry);
	$_SESSION['admin_id']=$row['id'];
	$_SESSION['name']=$row['name'];
	$_SESSION['img']=$row['Profile'];
 	echo "Login okok";
 	header("location:index.php");
}
 else
  {
	echo "Not ok";
	$_SESSION['errorMsg']="Inavlid Username Or Password!!....";
	header("location:login.php");
  }

	
}
?>