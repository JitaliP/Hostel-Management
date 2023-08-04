<?php
include "dbconnection.php";


	echo "<pre>";
	print_r($_REQUEST);
if (isset($_REQUEST['action']))
 {
	echo  $c_id=$_REQUEST['c_id'];
	echo  $c_name=$_REQUEST['c_name'];
	echo $action=$_REQUEST['action'];

	switch ($action)
	{
		case 'insert':

			$insert="INSERT INTO `category`(`c_name`)VALUES('".$c_name."')";
			$qry=mysqli_query($con,$insert);
			if ($qry) {
				echo "Insert okok";
				header("location:index.php?page=cat_list");
			}
			else
			{
				echo "not inserted";
			}
			break;

	    case 'delete':

		 	$delete="DELETE FROM `category` WHERE `c_id`='".$c_id."'";
			$qry=mysqli_query($con,$delete);
			if ($qry)
			{
				echo "deleted";
				header("location:index.php?page=cat_list");
			}
			else
			{
				echo "not deleted";
			}
		 	break;

		 case 'update':
		 		$update= "UPDATE `category` SET `c_name`='".$c_name."' WHERE `c_id`= '".$c_id."' ";
		 		$qry=mysqli_query($con,$update);
				if ($qry) 
				{
					echo "update";
				    header("location:index.php?page=cat_list"); 	
				}	 	
		 	break;
		
		default:

			echo "Enter Valid Choice";
			break;
	}
}

?>