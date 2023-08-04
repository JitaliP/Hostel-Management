<?php

include "database/dbconnect.php";

echo "<pre>";
print_r($_FILES);	
print_r($_REQUEST);

if (isset($_REQUEST['action']) AND isset($_REQUEST['terms']))
{
	$id=$_REQUEST['id'];
	$action=$_REQUEST['action'];
	$fname=$_REQUEST['fname'];
	$mname=$_REQUEST['mname'];
	$lname=$_REQUEST['lname'];
	$caste=$_REQUEST['caste'];
	$gender=$_REQUEST['gender'];
	$M_no=$_REQUEST['mobile'];
	$email=$_REQUEST['email'];
	$fM_no=$_REQUEST['father_mobile'];
	$dob=$_REQUEST['dob'];
	$age=$_REQUEST['age'];
	$faname=$_REQUEST['faname'];
	$father_no=$_REQUEST['father_mobile'];
	$father_occ=$_REQUEST['fao'];
 	$address=$_REQUEST['address'];
	$area=$_REQUEST['area'];
	$city=$_REQUEST['city'];
	$state=$_REQUEST['state'];
	$pin=$_REQUEST['pincode'];
	$village=$_REQUEST['village'];
	$dist=$_REQUEST['district'];
	$college=$_REQUEST['college_name'];
	$course_name=$_REQUEST['course_name'];
	$semester=$_REQUEST['semester'];

	$S_photo=$_FILES['photo']['name'];
	$s_tmp_photo=$_FILES['photo']['tmp_name'];

	$lc=$_FILES['lc']['name'];
	$tmp_lc=$_FILES['lc']['tmp_name'];

	$id_proof=$_FILES['id_proof']['name'];
	$tmp_id_proof=$_FILES['id_proof']['tmp_name'];

	$fee_receipt=$_FILES['fee_receipt']['name'];
	$tmp_fee_receipt=$_FILES['fee_receipt']['tmp_name'];

	$marksheets_file=$_FILES['marksheets_file']['name'];
	$tmp_marksheets_file=$_FILES['marksheets_file']['tmp_name'];

	$edu_cat=$_REQUEST['edu_cat'];
	$edu_subcat=$_REQUEST['edu_subcat'];
	$passing_year=$_REQUEST['passing_year'];
	$board=$_REQUEST['board'];
	$percentage=$_REQUEST['percentage'];

  $value= $_REQUEST['terms'];
      
  	switch ($action)
			{

		case 'update':
				move_uploaded_file($s_tmp_photo,"assets-design/frontend/llh/img/upload/".$S_photo);
				move_uploaded_file($tmp_lc,"assets-design/frontend/llh/img/upload/".$lc);
				move_uploaded_file($tmp_id_proof,"assets-design/frontend/llh/img/upload/".$id_proof);
				move_uploaded_file($tmp_fee_receipt,"assets-design/frontend/llh/img/upload/".$fee_receipt);
				move_uploaded_file($tmp_marksheets_file,"assets-design/frontend/llh/img/upload/".$marksheets_file);

				$update="UPDATE `admission` SET `fname`='".$fname."',`mname`='".$mname."',`lname`='".$lname."',`caste`='".$caste."',`gender`='".$gender."',`M_no`='".$M_no."',`FM_no`='".$fM_no."',`DOB`='".$dob."',`age`='".$age."',`father_name`='".$faname."',`father_no`='".$father_no."',`father_occ`='".$father_occ."',`Address`='".$address."',`Area`='".$area."',`city`='".$city."',`state`='".$state."',`pin`='".$pin."',`village`='".$village."',`dist`='".$dist."',`s_photo`='".$S_photo."',`leaving_cer`='".$lc."',`id_proof`='".$id_proof."',`fees_receipt`='".$fee_receipt."',`course_name`='".$course_name."',`semester`='".$semester."',`college_name`='".$college."',`marksheets_file`='".$marksheets_file."',`edu_cat`='".$edu_cat."',`edu_subcat`='".$edu_subcat."',`passing_year`='".$passing_year."',`board`='".$board."',`percentage`='".$percentage."',`fee_status`='pending', `status`='pending'  WHERE  `email`='".$email."' ";

				$qry=mysqli_query($con,$update);
				if (isset($qry))
				{
					echo '<script type="text/javascript">';
					echo 'alert("Your Admission request is now pendding for approvel! ");';
					echo 'window.location.assign("index.php?page=profile");';
					echo '</script>';
				}
				else
				{
					echo '<script type="text/javascript">';
					echo 'alert("Something went wrong!! ");';
					echo 'window.location.assign("index.php?page=admission_form");';
					echo '</script>';
				}
				break;
			default:
				echo "registration faild......";
				break;
			}
	}
else 
{ 				
	$_SESSION['check_er']="1";
	header('location: http://localhost/llh/User%20penal/index.php?page=admission_form');
	?>
  <!-- <div class="alert alert-danger">please select checkbox..!</div> -->
<?php 
}     
?>                   
                        		