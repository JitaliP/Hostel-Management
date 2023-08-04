<?php
session_start();
ob_clean();
ob_start();

$con=mysqli_connect("localhost","root","Jitali-19","hostel");

if ($con)
 {
	// echo "database succesfully";
}
else
{
	echo "not connected";
}


?>