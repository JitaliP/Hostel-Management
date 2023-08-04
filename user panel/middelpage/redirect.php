<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
	echo $_SESSION['TID'];
	echo "<br>";
	echo '<pre>';
	print_r($_REQUEST);
	echo $_REQUEST['payment_id'];
	echo "<br />";
	echo $_REQUEST['payment_status'];
	echo "<br />";
	echo $_REQUEST['payment_request_id'];

	// $cname=$_REQUEST['cardname'];
 //    $cno=$_REQUEST['cardnumber'];
 //    $exmonth=$_REQUEST['expmonth'];
 //    $exyear=$_REQUEST['expyear'];
 //    $cvv=$_REQUEST['cvv'];
    $_SESSION['username'];
    $d=date('y/m/d');
    if ($_REQUEST['payment_status']=='Credit') {
        $ins="INSERT INTO `fees_m`(`amount`, `fees_date`, `username`,`t_id`,`status`) VALUES ('20000','$d','".$_SESSION['username']."','".$_SESSION['TID']."','Credit')";
        $qry=mysqli_query($con,$ins) or die("error...........");
        $upt="UPDATE `admission` SET `fee_status`='paid' WHERE `email`='".$_SESSION['username']."'";
        $qry1=mysqli_query($con,$upt) or die("faild.........");
        $_SESSION['status']='Credit';
    }
    else
    {
    	$ins="INSERT INTO `fees_m`(`amount`, `fees_date`, `username`,`t_id`,`status`) VALUES ('20000','$d','".$_SESSION['username']."','".$_SESSION['TID']."','Failed')";
        $qry=mysqli_query($con,$ins) or die("error...........");
        $upt="UPDATE `admission` SET `fee_status`='pending' WHERE `email`='".$_SESSION['username']."'";
        $qry1=mysqli_query($con,$upt) or die("faild.........");	
    	$_SESSION['status']='Failed';
    }

header('location:http://localhost/llh/User%20penal/index.php?page=profile');
?>