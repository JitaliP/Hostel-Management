<?php
$con=mysqli_connect("localhost","root","","hostel");

$select_floor="SELECT * FROM `room_m` WHERE `floor_id`={$_REQUEST['id']}";

$run=$con->query($select_floor);

while ($row=$run->fetch_assoc()) {
    $select_room="SELECT * FROM `bed_m` WHERE `room_id` ={$row['room_id'] }";

    $room=$con->query($select_room);
    @$html.=
        '<tr>
            <td style="text-align:center;" id="rm">'.$row['room_no'].'</td>';

         while ($rowr=$room->fetch_assoc()) {

                if($rowr['stu_id'] != 0){
                    @$html.='<td style="text-align:center;"><a href="index.php?page=stud_detail&id='.$rowr['stu_id'].'"> '.$rowr['stu_id'].'</a></td>';
            }
         else{
            @$html.='<td style="text-align:center;">-</td>';
         }
        }
        @$html.='<td style="text-align:center;" id="rmst">'.$row['room_status'].'</td>
                  </tr>   ';
}
echo $html;
?>

