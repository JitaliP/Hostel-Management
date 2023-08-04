<?php 
echo $_REQUEST['id'];
echo $action=$_REQUEST['action'];
switch ($action) 
	{
 	case 'approve':
 		$upd="UPDATE `admission` SET `status`='done' WHERE `admi_id`='".$_REQUEST['id']."'";
		$qry=mysqli_query($con,$upd) or die("failed qry......");
		if (isset($qry)) 
		{	
			echo '<script type="text/javascript">';
			echo 'alert("Admission approved!!! ");';
			echo 'window.location.assign("index.php?page=admission_list");';
			echo '</script>';
		}	
 		break;
 	case 'deny':
 		$upd="UPDATE `admission` SET `status`='rejected' WHERE `admi_id`='".$_REQUEST['id']."'";
		$qry=mysqli_query($con,$upd) or die("failed qry......");
		if (isset($qry)) 
		{	
 			echo '<script type="text/javascript">';
			echo 'alert("Admission deny!!! ");';
			echo 'window.location.assign("index.php?page=admission_list");';
			echo '</script>';
		}
 	break;
 	default:
 			echo '<script type="text/javascript">';
			echo 'alert("ERROR!!! ");';
			echo 'window.location.assign("index.php?page=admission_list");';
			echo '</script>';
 		break;
 	}