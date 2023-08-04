<?php
// include "../database/dbconnect.php";
$con=mysqli_connect("localhost","root","","hostel");


$select_floor="SELECT * FROM `room_m` WHERE `floor_id`={$_REQUEST['id']}";

$run=$con->query($select_floor);
$html="<option value='' selected disabled>Select Room*</option>";

while ($row=$run->fetch_assoc()) {
    $html.="<option value='".$row['room_id']."'>".$row['room_no']."</option>";
}

echo $html;

?>