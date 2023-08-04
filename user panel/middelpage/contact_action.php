<?php

include "database/dbconnect.php";

echo "<pre>";
	
 print_r($_REQUEST);

if(isset($_REQUEST['action']))
{
	$id=$_REQUEST['id'];
	$action=$_REQUEST['action'];
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$M_no=$_REQUEST['mobile'];
	$msg=$_REQUEST['message'];

	switch($action)
	{
		case 'insert': 

						echo $insert = "INSERT INTO `contact`( `Name`, `Email`, `mobile_no`, `Message`) VALUES
						 ('".$name."','".$email."','".$M_no."','".$msg."')";

						$qry=mysqli_query($con,$insert);
						if ($qry)
						{
							echo "recored inserted";
						   	header("location:index.php");
						}
						else
						{
							echo "not inserted";
						}
				
							break;
			
			default:
				echo "faild..";
				break;
								
	}
}	