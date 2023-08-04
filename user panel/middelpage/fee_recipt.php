<?php 
require('..\User penal\vendor\autoload.php');
ob_clean();
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="test.pdf"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
$select="SELECT * FROM `admission` INNER JOIN `state` ON admission.state=state.state_id INNER JOIN  `city` ON admission.city=city.id INNER JOIN  `district` ON admission.dist=district.districtid WHERE admission.email='".$_SESSION['username']."'";
        $qry=mysqli_query($con,$select) or die("faild....................");
$user_data=$qry->fetch_assoc();

$id=$user_data['admi_id'];
$sel="SELECT * FROM `fees_m` INNER JOIN `admission` ON fees_m.username=admission.email WHERE fees_m.username='".$_SESSION['username']."'";
$q=mysqli_query($con,$sel);
$row=mysqli_fetch_assoc($q);
        
   $sl="SELECT * FROM `bed_m` WHERE `stu_id`= '$id'";
   $q=mysqli_query($con,$sl);
   $r=mysqli_fetch_assoc($q);

   $s="SELECT * FROM `room_m` WHERE `room_id`='".$r['room_id']."'";
   $qr=mysqli_query($con,$s);
   $b=mysqli_fetch_assoc($qr);

   $html='
    <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <style type="text/css">
	body{
    margin-top:10px;
    background:#eee;    
}
</style>
<div class="container bootdey">
<div class="row invoice row-printable">
    <div class="col-md-10">
        <!-- col-lg-12 start here -->
        <div class="panel panel-default plain" id="dash_0">
            <!-- Start .panel -->
            <div class="panel-body p30">
                <div class="row">
                    <!-- Start .row -->
                    <div class="col-lg-6">
                        <!-- col-lg-6 start here -->
                        <div class="invoice-logo"><img src="C:\xampp\htdocs\llh\User penal\logo2.jpg" style="height:120px;" alt="Hostel logo"></div>
                    </div>
                    <!-- col-lg-6 end here -->
                    <div class="col-lg-6">
                        <!-- col-lg-6 start here -->
                        <div class="invoice-from">
                            <ul class="list-unstyled text-right">
                                <li style="font-size:20px;text-transform:uppercase;">Live Like Home Hostel</li>
                                <li>Ahmedabad,</li>
                                <li>Gujarat.</li>
                                <li>Contact Number :- +91 9023637226. </li>
                            </ul>
                        </div>
                    </div>
                    <!-- col-lg-6 end here -->
                    <div class="col-lg-12">
                        <!-- col-lg-12 start here -->
                        <div class="invoice-details mt25">
                            <div class="well">
                                <ul class="list-unstyled mb0">
                                    <li><strong>Recipt No:-</strong> '.$row['fees_id'].'</li>
                                    <li><strong>Payment Date:</strong>'.$row['fees_date'].'</li>
                                    <li><strong>Bed No:</strong>'.$r['bed_no'].' &nbsp;&nbsp; Room No:'.$b['room_no'].' </li>
                                    <li><strong>Expiry Date:</strong> May 30th ,'. date("y") .'</li>
                                    <li><strong>Payment Status:</strong> <span style="color:green;">PAID</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="invoice-to mt25">
                            <ul class="list-unstyled">
                                <li style="font-size:20px;"><strong>Student Detail</strong></li>
                                <li style="color:black;text-transform:uppercase;">'.$user_data['fname'].' '.$user_data['mname'].' '.$user_data['lname'].'</li>
                                <li>Mobile No:- '.$user_data['M_no'].'</li>
                                <li>'.$user_data['Address'].', '.$user_data['Area'].', '.$user_data['name'].'</li>
                                <li>'.$user_data['state_title'].'.</li>
                            </ul>
                        </div>
                        <br>
                        <br>
                        <div class="invoice-items">
                            <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="per75 coltext-center" style="width:500px" colspan="2">Description</th>
                                            <th class="per25 text-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2">Admission fee</td>
                                            <td class="text-center">'.$row['amount'].' INR</td>
                                        </tr>
                                        <tr>
                                        	
                                            <td colspan="2">Additional Charges.</td>
                                            <td class="text-center">00 INR</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2" class="text-right">Total:</th>
                                            <th class="text-center">'.$row['amount'].' INR</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="invoice-footer mt25">
                            <p class="text-center">Generated on '. date("d,m,20y") .' </p>
                        </div>
                    </div>
                    <!-- col-lg-12 end here -->
                </div>
                <!-- End .row -->
            </div>
        </div>
        <!-- End .panel -->
    </div>
    <!-- col-lg-12 end here -->
</div>
</div>';

    $file=time().'.pdf';
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($html);
    $mpdf->debug = true; 
    $mpdf->Output($file,'I');
?>
