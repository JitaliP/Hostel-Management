<?php

include "database/dbconnect.php";
echo "<pre>";
print_r($_REQUEST);
if (isset($_REQUEST['action']))
{
	$id=$_REQUEST['id'];
	$action=$_REQUEST['action'];
	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	$email=$_REQUEST['email'];
	$pwd=$_REQUEST['pwd'];
}
switch ($action) 
{
	case 'insert':
			echo $insert = "INSERT INTO `stud_registration`(`frist_name`, `last_name`, `email`, `password`) VALUES ('".$fname."','".$lname."','".$email."','".$pwd."')";

				$qry=mysqli_query($con,$insert);
				if ($qry)
				{
					echo "recored inserted";
					header("location:Login.php");
				}
				else
				{
					echo "not inserted";
				}
		
					break;
	
	default:
		// code...
		break;
}