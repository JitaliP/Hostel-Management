<?php
    
    $select1="SELECT * FROM `admission` INNER JOIN `state` ON admission.state=state.state_id INNER JOIN  `city` ON admission.city=city.id INNER JOIN  `district` ON admission.dist=district.districtid WHERE admission.email='".$_SESSION['username']."'";
                    $qry1=mysqli_query($con,$select1) or die("faild.......");
                    if ($qry1) {
                        $user_data1=$qry1->fetch_assoc();
                    }
                    else{
                        echo 'error.........';
                    }

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_288005dcbe67d76fdda523758b7",
                  "X-Auth-Token:test_f78d36e6737d5e78432c5c1a8bd"));
$payload = Array(
    'purpose' => 'Admission fee',
    'amount' => '20000',
    'redirect_url' => 'http://localhost/llh/User%20penal/index.php?page=redirect',
    'send_email' => true,
    'send_sms' => true,
    'allow_repeated_payments' => false
);
// data come from other page.......
$payload['phone']=$user_data1['M_no'];
$payload['email']=$user_data1['email'];
$payload['buyer_name']=$user_data1['fname'].' '.$user_data1['mname'].' '.$user_data1['lname'];
echo $payload['noc']=$_REQUEST['cardname'];
// end

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$response=json_decode($response);
echo '<pre/>';
print_r($response);
$_SESSION['TID']=$response->payment_request->id; 
//Database work........................................................................
    echo $d=date('y/m/d');
    $ins="INSERT INTO `card_detail`(`name_on_card`, `card_no`, `exp_month`, `exp_year`,`date`, `cvv`,`username`,`t_id`) VALUES ('".$_REQUEST['cardname']."','".$_REQUEST['cardnumber']."','".$_REQUEST['expmonth']."','".$_REQUEST['expyear']."','".$d."','".$_REQUEST['cvv']."','".$_SESSION['username']."','".$_SESSION['TID']."')";
    $qry=mysqli_query($con,$ins) or die("eror........");
// end.................................................................................

header('location:'.$response->payment_request->longurl);
// die(); 
?>