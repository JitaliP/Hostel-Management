<?php 
	$photo=$_FILES['photo']['name'];
	$tmp_photo=$_FILES['photo']['tmp_name'];
	$i_name=$_REQUEST['i_name'];
	$select="SELECT * FROM `gallery` WHERE `g_id`='".$_REQUEST['id']."'";
	$qry=mysqli_query($con,$select);
	$row=mysqli_fetch_assoc($qry);

	if ($_REQUEST['action'] =='ins') 
	{
	move_uploaded_file($tmp_photo,"../web/images/gallery/".$photo);
	$ins="INSERT INTO `gallery`(`g_name`,`i_name`) VALUES ('".$photo."','".$i_name."')";
	$qry=mysqli_query($con,$ins) or die('Failed.........');
	header('location: http://localhost/llh/web/index.php?page=gallery');
	}
	elseif($_REQUEST['action'] =='remove')
	{
		$del="DELETE FROM `gallery` WHERE `g_id`='".$_REQUEST['id']."'";
		$qry=mysqli_query($con,$del);
		unlink("../web/images/gallery/".$row['g_name']);
		header('location: http://localhost/llh/web/index.php?page=gallery');
	}
	else
	{
		header('location: http://localhost/llh/web/index.php?page=error');	
	}
?>
