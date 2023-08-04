

<?php 
ini_set('memory_limit', '20480M');
$con=mysqli_connect("localhost","root","Jitali-19","hostel");
if ($_REQUEST['id']=='Addmission Report') {
	
	$select="SELECT * FROM `admission`";
  $qry=mysqli_query($con,$select);
                    if (mysqli_num_rows($qry)>0) 
                    {
                    	$html='<table class="table table-striped" id="myTable">
                <tr class="warning">
                <th style="text-align:center;">Student ID.</th>
                <th style="text-align:center;">Student Full Name.</th>
                <th style="text-align:center;">Student Email.</th>
                <th style="text-align:center;">Student Mobile No.</th>
                <th style="text-align:center;">Student Gender.</th>
                <th style="text-align:center;">Admission Status.</th>
              </tr> <tbody>';
                      while($row=mysqli_fetch_assoc($qry))
                      {
                      	@$html.='<tr><td style="text-align:center;" id="rm">'.$row['admi_id'].'</td>';
                      	@$html.='<td style="text-align:center;" id="rm">'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</td>';
                      	@$html.='<td style="text-align:center;" id="rm">'.$row['email'].'</td>';
                      	@$html.='<td style="text-align:center;" id="rm">'.$row['M_no'].'</td>';
                      	@$html.='<td style="text-align:center;" id="rm">'.$row['gender'].'</td>';
                      	@$html.='<td style="text-align:center;" id="rm">'.$row['status'].'</td></tr>'; 
                      }
                      $html.='</tbody></table>';
                  	}
    $html.='<br><div class="row">
    <div class="col-md-12" style="text-align:center;">
            <a href="index.php?page=admi_report&action=admission_r" class="btn btn-success">Report Download</a>
      </div>
      </div>';
echo $html;
}
elseif ($_REQUEST['id']=='Fee Report') {
  
  $select="SELECT * FROM `admission` WHERE `status`='done'";
  $qry=mysqli_query($con,$select);
                    if (mysqli_num_rows($qry)>0) 
                    {
                      $html='<table class="table table-striped" id="myTable">
                <tr class="warning">
                <th style="text-align:center;">Student ID.</th>
                <th style="text-align:center;">Student Full Name.</th>
                <th style="text-align:center;">Student Email.</th>
                <th style="text-align:center;">Student Mobile No.</th>
                <th style="text-align:center;">Student Gender.</th>
                <th style="text-align:center;">Fee Status.</th>
              </tr> <tbody>';
                      while($row=mysqli_fetch_assoc($qry))
                      {
                        @$html.='<tr><td style="text-align:center;" id="rm">'.$row['admi_id'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['email'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['M_no'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['gender'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['fee_status'].'</td></tr>'; 
                      }
                      $html.='</tbody></table>';
                    }
    $html.='<br><div class="row">
    <div class="col-md-12" style="text-align:center;">
            <a href="index.php?page=admi_report&action=fee_r" class="btn btn-success">Report Download</a>
      </div>
      </div>';
echo $html;
}
elseif ($_REQUEST['id']=='Room Report') {
  
  $select="SELECT * FROM `admission` INNER JOIN `bed_m` ON admission.admi_id=bed_m.stu_id  INNER JOIN `room_m` ON bed_m.room_id=room_m.room_id WHERE admission.fee_status='paid'";
  $qry=mysqli_query($con,$select);
                    if (mysqli_num_rows($qry)>0) 
                    {
                      $html='<table class="table table-striped" id="myTable">
                <tr class="warning">
                <th style="text-align:center;">Student ID.</th>
                <th style="text-align:center;">Student Full Name.</th>
                <th style="text-align:center;">Student Email.</th>
                <th style="text-align:center;">Student Mobile No.</th>
                <th style="text-align:center;">Student Gender.</th>
                <th style="text-align:center;">Room.</th>
                <th style="text-align:center;">Bed.</th>
              </tr> <tbody>';
                      while($row=mysqli_fetch_assoc($qry))
                      {
                        @$html.='<tr><td style="text-align:center;" id="rm">'.$row['admi_id'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['email'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['M_no'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['gender'].'</td>';
                        if ($row['bed_status']==0) {
                          @$html.='<td style="text-align:center;" id="rm">room not allotcated</td>';
                        @$html.='<td style="text-align:center;" id="rm">bed not allotcated</td></tr>';  
                        }
                        else{  
                        @$html.='<td style="text-align:center;" id="rm">'.$row['room_no'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['bed_no'].'</td></tr>'; 
                        }
                      }
                      $html.='</tbody></table>';
                    }
    $html.='<br><div class="row">
    <div class="col-md-12" style="text-align:center;">
            <a href="index.php?page=admi_report&action=room_r" class="btn btn-success">Report Download</a>
      </div>
      </div>';
echo $html;
}
elseif ($_REQUEST['id']=='Students Hoilidays Report') {
  
  $select="SELECT * FROM `admission` INNER JOIN `complain` ON admission.email=complain.stu_email";
  $qry=mysqli_query($con,$select);
                    if (mysqli_num_rows($qry)>0) 
                    {
                      $html='<table class="table table-striped" id="myTable">
                <tr class="warning">
                <th style="text-align:center;">Student ID.</th>
                <th style="text-align:center;">Application NO</th>
                <th style="text-align:center;">Student Full Name.</th>
                <th style="text-align:center;">Student Email.</th>
                <th style="text-align:center;">Student Mobile No.</th>
                <th style="text-align:center;">Student Gender.</th>
                <th style="text-align:center;">Application Status.</th>
              </tr> <tbody>';
                      while($row=mysqli_fetch_assoc($qry))
                      {
                        if($row['com_category']=="Holidays")
                        {
                        @$html.='<tr><td style="text-align:center;" id="rm">'.$row['admi_id'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['c_id'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['stu_name'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['stu_email'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['stu_mo'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['gender'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['status'].'</td></tr>';
                        }
                      }
                      $html.='</tbody></table>';
                    }
    $html.='<br><div class="row">
    <div class="col-md-12" style="text-align:center;">
            <a href="index.php?page=admi_report&action=holiday_r" class="btn btn-success">Report Download</a>
      </div>
      </div>';
echo $html;
}
elseif ($_REQUEST['id']=='Students Complain Report') {
  
  $select="SELECT * FROM `admission` INNER JOIN `complain` ON admission.email=complain.stu_email";
  $qry=mysqli_query($con,$select);
                    if (mysqli_num_rows($qry)>0) 
                    {
                      $html='<table class="table table-striped" id="myTable">
                <tr class="warning">
                <th style="text-align:center;">Student ID.</th>
                <th style="text-align:center;">Complain NO</th>
                <th style="text-align:center;">Student Full Name.</th>
                <th style="text-align:center;">Student Email.</th>
                <th style="text-align:center;">Student Mobile No.</th>
                <th style="text-align:center;">Student Gender.</th>
                <th style="text-align:center;">Complain Status.</th>
              </tr> <tbody>';
                      while($row=mysqli_fetch_assoc($qry))
                      {
                        if($row['com_category']=="Complaints")
                        {
                        @$html.='<tr><td style="text-align:center;" id="rm">'.$row['admi_id'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['c_id'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['stu_name'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['stu_email'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['stu_mo'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['gender'].'</td>';
                        @$html.='<td style="text-align:center;" id="rm">'.$row['status'].'</td></tr>';
                        }
                      }
                      $html.='</tbody></table>';
                    }
    $html.='<br><div class="row">
    <div class="col-md-12" style="text-align:center;">
            <a href="index.php?page=admi_report&action=complain_r" class="btn btn-success">Report Download</a>
      </div>
      </div>';
echo $html;
}
else
{
  echo "error";
}
?>