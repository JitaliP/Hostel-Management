<?php
// include "../database/dbconnect.php";
$con=mysqli_connect("localhost","root","","hostel");

echo $_REQUEST['id'];
$select_room="SELECT * FROM `bed_m` WHERE `room_id`={$_REQUEST['id']} and `bed_status`='active'";

$run=$con->query($select_room);
$html="<option value='' selected disabled>Select Bed*</option>";

while ($row=$run->fetch_assoc()) {
    $html.="<option value='".$row['bed_id']."'>".$row['bed_no']."</option>";
}

echo $html;

?>