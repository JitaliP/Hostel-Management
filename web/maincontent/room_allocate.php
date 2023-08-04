<?php 
$con=mysqli_connect("localhost","root","","hostel");

$id = $_POST['id'];
$f = $_POST['f'];
$r = $_POST['r'];
$b = $_POST['b'];

$slt="SELECT * FROM `admission` WHERE `admi_id`='$id'";
$qry=mysqli_query($con,$slt);
$row=mysqli_fetch_assoc($qry);
if ($row['admi_id']==$id && $row['bed_status']=='0') {

$upd = "UPDATE `bed_m` SET  `bed_status`='deactivate',`stu_id`=$id WHERE `bed_id`=$b ";
$qry = mysqli_query($con,$upd);

$upt= "UPDATE `admission` SET `bed_status`=1 WHERE `admi_id`='$id'";
$qry= mysqli_query($con,$upt);

if ($qry) {
	echo "room allocated to student";
}	
}
else
{
	echo "Room is Already Allocated...";
}
?>