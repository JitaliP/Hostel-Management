<?php

include "dbconnection.php";
echo "<pre>";
print_r($_REQUEST);
if (isset($_REQUEST['action']))
{
	$id=$_REQUEST['id'];
	$action=$_REQUEST['action'];

	$profile=$_FILES['profile']['name'];
	$s_tmp_profile=$_FILES['profile']['tmp_name'];

	$name=$_REQUEST['name'];
	$dob=$_REQUEST['dob'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$address=$_REQUEST['address'];
	$pwd=$_REQUEST['pwd'];
}

	switch ($action)
	{
		case 'insert':
				move_uploaded_file($s_tmp_profile,"images/llh/".$profile);
				
				echo $insert="INSERT INTO `admin`( `Profile`,`name`,`DOB` ,`email`, `phone`,`address`, `password`) VALUES ('".$profile."','".$name."','".$dob."','".$email."','".$phone."','".$address."','".$pwd."') ";

				$qry=mysqli_query($con,$insert);
				if ($qry)
				{
					echo "recored inserted";
					header("location:login.php");
				}
				else
				{
					echo "not inserted";
				}

			break;
		case 'delete':
				echo $delete="DELETE FROM `admin` WHERE `id`='".$id."' ";
				$qry=mysqli_query($con,$delete);
				if ($qry)
				{
					echo "record deleted";
					header("location:index.php?page=reg_list");
					
				}
				else
				{
					echo "not deleted";
				}
			break;
		case 'update':
		move_uploaded_file($s_tmp_profile,"images/llh/".$profile);
				
				echo $update="UPDATE `admin` SET `Profile`='".$profile."',`name`='".$name."',`DOB`='".$dob."',`email`='".$email."',`phone`='".$phone."',`address`='".$address."',`password`='".$pwd."' WHERE `id`='".$id."' ";
				$qry=mysqli_query($con,$update);
				if ($qry)
				{
					echo "record updated";
					header("location:index.php?page=reg_list");
				}
				else
				{
					echo "not updated";
				}
			
				break;
		
		default:

			echo "registration faild......";
		
			break;
	}


  ?>