<?php
 error_reporting(0);
  
if (isset($_POST['submit']))
{
    $id=$_REQUEST['id'];
    $action=$_REQUEST['action'];
    $S_photo=$_FILES['photo']['name'];
    $s_tmp_photo=$_FILES['photo']['tmp_name'];
    move_uploaded_file($s_tmp_photo,"../assets-design/frontend/llh/img/upload/".$S_photo);
                        
  echo  $action="UPDATE `admission` SET `s_photo`='$S_photo' WHERE `admi_id`='$id.'";
    mysqli_query($con,$action) or die("faild....");
    header("location:index.php?page=profile");
        
}

 if (empty($_SESSION['reg_id'])) 
 {
    header("location: index.php?page=login");
  }
  else{
        
        $select="SELECT * FROM `admission` INNER JOIN `state` ON admission.state=state.state_id INNER JOIN  `city` ON admission.city=city.id INNER JOIN  `district` ON admission.dist=district.districtid WHERE admission.email='".$_SESSION['username']."'";
        $qry=mysqli_query($con,$select) or die("faild....................");

        if ($qry) {
         $user_data=$qry->fetch_assoc(); //mysqli_fetch_assoc($qry);
        }
        else{
            echo "error...........";
        }

        // data coming from admissionn table for some fields....
        $select1="SELECT * FROM `admission` WHERE email='".$_SESSION['username']."'";
        $qry1=mysqli_query($con,$select1) or die("faild.......");
        if ($qry1) {
            $user_data1=$qry1->fetch_assoc();
        }
        else{
            echo 'error.........';
        }
        // ends here.............................................
    }

?>



<head>
    <link rel="stylesheet" type="text/css" href="..\User penal\assets-design\frontend\llh\css\profile.css">
   
</head>
<center>
<div class="container rounded bg-white  mb-12" style="margin-top: 180px;">
    <div class="row" style="border: 1px dashed #dee2e6;">
        <div class="col-md-12 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <?php
                // print_r($user_data);
                    if($user_data1['s_photo'] != ''){
                    ?>
                    <img class="rounded-circle mt-5" style=" width: 150px; " src="assets-design/frontend/llh/img/upload/<?php echo $user_data1['s_photo'];?> ">
                <?php } 
                    else {
                    ?>
                    <img class="rounded-circle mt-5" style=" width: 150px; " src="..\User penal\assets-design\user.jpg">
                    <?php } ?>

                    <span class="font-weight-bold">
                    <?php echo $user_data1['mname'].' '.$user_data1['fname'];?>
                    </span>
                    <span class="text-black-50">
                        <?php echo $user_data1['email'];?>
                    </span><br>

                 
                 <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"  enctype="multipart/form-data" >
                        <input type="hidden" name="action" value="<?php echo $action; ?>">
                        <input type="hidden" name="id" value="<?php echo @$_REQUEST['id'];  ?>">
                            <br>
                        
                      <input type="file" name="photo" class="form-control" required data-parsley-required-message="Please select your Photo*" accept="image/*" data-rule="photo:800" data-msg="Upload File within specified file size upto 800KB"  /><br>
                         <input type="submit"  name="submit" value="SUBMIT" class="btn btn-primary" style="width:100px;">
                     </form>

           </div>
           </div>       
     </div>
 
</div>
