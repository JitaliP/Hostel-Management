<?php
session_start();
ob_clean();
ob_start();

$con=mysqli_connect("localhost","root","Jitali-19","hostel");
if($con)
{
	// echo "db connected";
}
else
{
	echo "db not connected";
}

  ?>