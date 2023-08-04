<?php
include 'dbconnection.php';
if (isset($_REQUEST['submit'])) {
	echo $email=$_REQUEST['email'];
	echo $newpwd=$_REQUEST['newpwd'];


	$update="UPDATE `admin` SET `password`='".$newpwd."' WHERE `email`='".$email."'";
	$qry=mysqli_query($con,$update);
	if ($qry) {
		echo "Password Updated Successfully....";
		$_SESSION['succMsg']="Your Password Updated Successfully....";
		header("location:login.php");
	}
	else
	{
		echo "password not updated...";
	}

}

?>