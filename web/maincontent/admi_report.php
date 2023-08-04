<br>
<br>
<br>
<br>
<?php 
require('..\web\vendor\autoload.php');
echo '<pre>';
print_r($_REQUEST);
ob_clean();
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="test.pdf"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

// Addmission report......................................................................!

if ($_REQUEST['action']=='admission_r') 
{
  $select="SELECT * FROM `admission`";
  $qry=mysqli_query($con,$select);
  $html='
  <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="..\web\css\student.css">
    <style type="text/css">
  body{
    margin-top:10px;
    background:white;    
}
table{
  border:5px solid black;
  
}
</style>

<div class="row">
  <div class="col-lg-6 " style="margin-top:10px; margin-left:-55px;">                  
    <img src="C:\xampp\htdocs\llh\web\images\logo2.jpg" style="height:140px;" alt="Hostel logo">
  </div>
  <div class="col-lg-6 " style=" margin-top:-110px; margin-right:-45px">
    <ul class="list-unstyled text-right">
        <li style="font-size:20px;text-transform:uppercase;">Live Like Home Hostel</li>
        <li>Ahmedabad,</li>
        <li>Gujarat.</li>
        <li>Contact Number :- +91 9023637226. </li>
    </ul>
  </div>
</div>
<hr class="w-100">
<br>
<div style="text-align:center;font-size:30px;text-transform:uppercase;">Addmission Report</div>
<br>';
$html.='<table class="table table-striped" style="margin-top:20px;  border:4px solid grey; ">
              <thead class="thead-dark">
                <tr>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student ID.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Full<br> Name.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Email<br>.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Mobile No.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Gender.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Admission Status.</th>
                </tr>
              </thead>
              <tbody>';
                      while($row=mysqli_fetch_assoc($qry))
                      {
                        @$html.='<tr><td style="text-align:center; padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['admi_id'].'</td>';
                        @$html.='<td style="text-align:center; padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['email'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['M_no'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['gender'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['status'].'</td></tr>'; 
                      }
                      $html.='</tbody></table>
                      <br>
                      <br>
                      <hr>
                      <div class="invoice-footer mt25">
                            <p class="text-center">*Report Generated on '. date("d,m,20y") .'*</p>
                      </div>';

}
// fee report................................................................................!
elseif ($_REQUEST['action']=='fee_r') 
{
  $select="SELECT * FROM `admission` WHERE `status`='done'";
  $qry=mysqli_query($con,$select);
  $html='
  <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="..\web\css\student.css">
    <style type="text/css">
  body{
    margin-top:10px;
    background:white;    
}
table{
  border:5px solid black;
}
</style>

<div class="row">
  <div class="col-lg-6 " style="margin-top:10px; margin-left:-55px;">                  
    <img src="C:\xampp\htdocs\llh\web\images\logo2.jpg" style="height:140px;" alt="Hostel logo">
  </div>
  <div class="col-lg-6 " style=" margin-top:-110px; margin-right:-45px">
    <ul class="list-unstyled text-right">
        <li style="font-size:20px;text-transform:uppercase;">Live Like Home Hostel</li>
        <li>Ahmedabad,</li>
        <li>Gujarat.</li>
        <li>Contact Number :- +91 9023637226. </li>
    </ul>
  </div>
</div>
<hr class="w-100">
<br>
<div style="text-align:center;font-size:30px;text-transform:uppercase;">Fee Report</div>
<br>';
$html.='<table class="table" style="margin-top:20px; border:4px solid grey;">
              <thead class="thead-dark">
                <tr>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student ID.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Full <br>Name.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Email <br>.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Mobile <br>No.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Gender.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Fee Status<br>.</th>
                </tr>
              </thead>
              <tbody>';
                      while($row=mysqli_fetch_assoc($qry))
                      {
                        @$html.='<tr><td style="text-align:center; padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['admi_id'].'</td>';
                        @$html.='<td style="text-align:center; padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</td>';
                        @$html.='<td style="text-align:center; padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['email'].'</td>';
                        @$html.='<td style="text-align:center; padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['M_no'].'</td>';
                        @$html.='<td style="text-align:center; padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['gender'].'</td>';
                        @$html.='<td style="text-align:center; padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['fee_status'].'</td></tr>'; 
                      }
                      $html.='</tbody></table>
                      <br>
                      <br>
                      <hr>
                      <div class="invoice-footer mt25">
                            <p class="text-center">*Report Generated on '. date("d,m,20y") .'*</p>
                      </div>';

}
// room report............................................................................!
elseif ($_REQUEST['action']=='room_r') 
{
  $select="SELECT * FROM `admission` INNER JOIN `bed_m` ON admission.admi_id=bed_m.stu_id  INNER JOIN `room_m` ON bed_m.room_id=room_m.room_id WHERE admission.fee_status='paid'";
  $qry=mysqli_query($con,$select);
  $html='
  <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="..\web\css\student.css">
    <style type="text/css">
  body{
    margin-top:10px;
    background:white;    
}
table{
  border:5px solid black;
}
</style>

<div class="row">
  <div class="col-lg-6 " style="margin-top:10px; margin-left:-55px;">                  
    <img src="C:\xampp\htdocs\llh\web\images\logo2.jpg" style="height:140px;" alt="Hostel logo">
  </div>
  <div class="col-lg-6 " style=" margin-top:-110px; margin-right:-45px">
    <ul class="list-unstyled text-right">
        <li style="font-size:20px;text-transform:uppercase;">Live Like Home Hostel</li>
        <li>Ahmedabad,</li>
        <li>Gujarat.</li>
        <li>Contact Number :- +91 9023637226. </li>
    </ul>
  </div>
</div>
<hr class="w-100">
<br>
<div style="text-align:center;font-size:30px;text-transform:uppercase;">Room Report</div>
<br>';
$html.='<table class="table" style="margin-top:20px; border:4px solid grey;">
              <thead class="thead-dark">
                <tr>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student ID<br>.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Full <br> Name.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Email<br>.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Mobile <br> No.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Gender.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Room<br>.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Bed<br>.</th>
                </tr>
              </thead>
              <tbody>';
                      while($row=mysqli_fetch_assoc($qry))
                      {
                        @$html.='<tr><td style="text-align:center; padding-bottom:5px; border:1px solid grey;" id="rm"">'.$row['admi_id'].'</td>';
                        @$html.='<td style="text-align:center; padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</td>';
                        @$html.='<td style="text-align:center; padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['email'].'</td>';
                        @$html.='<td style="text-align:center;  padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['M_no'].'</td>';
                        @$html.='<td style="text-align:center; padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['gender'].'</td>';
                        @$html.='<td style="text-align:center; padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['room_no'].'</td>';
                        @$html.='<td style="text-align:center; padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['bed_no'].'</td></tr>';  
                      }
                      $html.='</tbody></table>
                      <br>
                      <br>
                      <hr>
                      <div class="invoice-footer mt25">
                            <p class="text-center">*Report Generated on '. date("d,m,20y") .'*</p>
                      </div>';

}
// Holidays Application Report............................................................................!
elseif ($_REQUEST['action']=='holiday_r') 
{
  $select="SELECT * FROM `admission` INNER JOIN `complain` ON admission.email=complain.stu_email";
  $qry=mysqli_query($con,$select);
  $html='
  <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="..\web\css\student.css">
    <style type="text/css">
  body{
    margin-top:10px;
    background:white;    
}
table{
  border:5px solid black;
}
</style>

<div class="row">
  <div class="col-lg-6 " style="margin-top:10px; margin-left:-55px;">                  
    <img src="C:\xampp\htdocs\llh\web\images\logo2.jpg" style="height:140px;" alt="Hostel logo">
  </div>
  <div class="col-lg-6 " style=" margin-top:-110px; margin-right:-45px">
    <ul class="list-unstyled text-right">
        <li style="font-size:20px;text-transform:uppercase;">Live Like Home Hostel</li>
        <li>Ahmedabad,</li>
        <li>Gujarat.</li>
        <li>Contact Number :- +91 9023637226. </li>
    </ul>
  </div>
</div>
<hr class="w-100">
<br>
<div style="text-align:center;font-size:30px;text-transform:uppercase;">Student Holidays Report</div>
<br>';
$html.='<table class="table" style="margin-top:20px; border:4px solid grey;">
              <thead class="thead-dark" style="border-bottom:1px solid grey;">
                <tr>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student ID.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Application<br>No.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Full <br>Name.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Email <br>.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Mobile <br>No.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Gender.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Application Status<br></th>
                </tr>
              </thead>
              <tbody>';
                      while($row=mysqli_fetch_assoc($qry))
                      {
                        if($row['com_category']=="Holidays")
                        {
                        @$html.='<tr><td style="text-align:center;padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['admi_id'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px;border:1px solid grey;" id="rm">'.$row['c_id'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px;border:1px solid grey;" id="rm">'.$row['stu_name'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px;border:1px solid grey;" id="rm">'.$row['stu_email'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px;border:1px solid grey;" id="rm">'.$row['stu_mo'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px;border:1px solid grey;" id="rm">'.$row['gender'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px;border:1px solid grey;" id="rm">'.$row['status'].'</td></tr>'; 
                        }
                      }
                      $html.='</tbody></table>
                      <br>
                      <br>
                      <hr>
                      <div class="invoice-footer mt25">
                            <p class="text-center">*Report Generated on '. date("d,m,20y") .'*</p>
                      </div>';

}
// end-------------------------------------------------------------------------------------------!
elseif ($_REQUEST['action']=='complain_r') 
{
  $select="SELECT * FROM `admission` INNER JOIN `complain` ON admission.email=complain.stu_email";
  $qry=mysqli_query($con,$select);
  $html='
  <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="..\web\css\student.css">
    <style type="text/css">
  body{
    margin-top:10px;
    background:white;    
}
table{
  border:5px solid black;
}
</style>

<div class="row">
  <div class="col-lg-6 " style="margin-top:10px; margin-left:-55px;">                  
    <img src="C:\xampp\htdocs\llh\web\images\logo2.jpg" style="height:140px;" alt="Hostel logo">
  </div>
  <div class="col-lg-6 " style=" margin-top:-110px; margin-right:-45px">
    <ul class="list-unstyled text-right">
        <li style="font-size:20px;text-transform:uppercase;">Live Like Home Hostel</li>
        <li>Ahmedabad,</li>
        <li>Gujarat.</li>
        <li>Contact Number :- +91 9023637226. </li>
    </ul>
  </div>
</div>
<hr class="w-100">
<br>
<div style="text-align:center;font-size:30px;text-transform:uppercase;">Student Complains Report</div>
<br>';
$html.='<table class="table" style="margin-top:20px; border:4px solid grey;">
              <thead class="thead-dark" style="border-bottom:1px solid grey;">
                <tr>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student ID.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Application<br>No.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Full <br>Name.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Email <br>.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Mobile <br>No.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Student Gender.</th>
                <th style="text-align:center;background-color:#505157;color:white;padding-bottom:10px;padding-top:5px">Application Status<br></th>
                </tr>
              </thead>
              <tbody>';
                      while($row=mysqli_fetch_assoc($qry))
                      {
                        if($row['com_category']=="Complaints")
                        {
                        @$html.='<tr><td style="text-align:center;padding-bottom:5px; border:1px solid grey;" id="rm">'.$row['admi_id'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px;border:1px solid grey;" id="rm">'.$row['c_id'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px;border:1px solid grey;" id="rm">'.$row['stu_name'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px;border:1px solid grey;" id="rm">'.$row['stu_email'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px;border:1px solid grey;" id="rm">'.$row['stu_mo'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px;border:1px solid grey;" id="rm">'.$row['gender'].'</td>';
                        @$html.='<td style="text-align:center;padding-bottom:5px;border:1px solid grey;" id="rm">'.$row['status'].'</td></tr>'; 
                        }
                      }
                      $html.='</tbody></table>
                      <br>
                      <br>
                      <hr>
                      <div class="invoice-footer mt25">
                            <p class="text-center">*Report Generated on '. date("d,m,20y") .'*</p>
                      </div>';

}

else
{
  $html='
  <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="..\web\css\student.css">
    <style type="text/css">
  body{
    margin-top:10px;
    background:white;    
}
table{
  border:5px solid black;
}
</style>

<div class="row">
  <div class="col-lg-6 " style="margin-top:10px; margin-left:-55px;">                  
    <img src="C:\xampp\htdocs\llh\web\images\logo2.jpg" style="height:140px;" alt="Hostel logo">
  </div>
  <div class="col-lg-6 " style=" margin-top:-110px; margin-right:-45px">
    <ul class="list-unstyled text-right">
        <li style="font-size:20px;text-transform:uppercase;">Live Like Home Hostel</li>
        <li>Ahmedabad,</li>
        <li>Gujarat.</li>
        <li>Contact Number :- +91 9023637226. </li>
    </ul>
  </div>
</div>
<hr class="w-100">
<br>
<div style="text-align:center;font-size:30px;text-transform:uppercase;">Somthing Went Wrong Please Try Leter..!</div>
<br>
<br>
<br>
<hr>
<div class="invoice-footer mt25">
      <p class="text-center">*Report Generated on '. date("d,m,20y") .'*</p>
</div>';
}
	$file=time().'.pdf';
  $mpdf = new \Mpdf\Mpdf();
  $mpdf->WriteHTML($html);
  $mpdf->debug = true; 
  $mpdf->Output($file,'I'); 
?>