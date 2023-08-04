<?php
error_reporting(0);

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

    }

?>



<head>
    <!-- <link rel="stylesheet" type="text/css" href="..\User penal\assets-design\frontend\llh\css\profile.css"> -->
</head>
<div class="container rounded bg-white  mb-5" style="margin-top: 180px;">
    <div class="row" style="border: 1px dashed #dee2e6;">
        <div class="col-md-3 border-right">
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
                    <span class="border px-3 p-1 add-experience ">
                        <i class="fa fa-pen"></i>&nbsp;<a href="index.php?page=change_photo&&id=<?php echo $user_data1['admi_id'];?>" style="color:black; text-decoration: none;">Change Photo</a>
                     </span><br>
                    <span class="font-weight-bold" style="font-size:16px;">
                    Admission Status
                    </span>
                    <!-- It's for admission status.............. -->
                    <?php 
                        if($user_data1['status']=='done'){   
                    ?>
                            <label style="color: green;font-size: 20px;">
                                <?php echo "Approved!";?>
                            </label>        
                    <?php 
                        }
                        elseif($user_data1['status']=='pending'){   
                    ?>
                        <label style="color: green;font-size: 20px;">
                            <?php echo "Request is pending..!";?>
                        </label>        
                    <?php 
                    } 
                    else 
                    {
                    ?>
                    <label style="color: red;font-size: 20px;">
                        <?php echo "Admission Request is Not sended!";?>
                    </label>  
                <?php    
                    }
                ?>        
                <!-- Ends here............................ -->
            </div>
            <!-- It's for fee's Status................. -->
            <?php 
                if ($user_data1['status']=='done') {
            ?>
                            <div class="d-flex flex-column align-items-center text-center ">
                                <span class="font-weight-bold" style="font-size:16px;">
                                 Fee Status
                                </span>
                                <?php 
                                    if($user_data1['fee_status']=='paid'){   
                                ?>
                                        <label style="color: green;font-size: 20px;">
                                            <?php echo "Approved!";?>
                                        </label>
                                        <br>
                                        <?php
                                        if($user_data1['bed_status']=='1')
                                        {
                                            ?>
                                        <a href="index.php?page=fee_recipt" class="btn-block btn-lg btn-success" style="text-decoration: none;">Download Fee Recipt</a>        
                                <?php
                                        }
                                        else {
                                            ?>
                                            <a href="#" disabled class="btn-block btn-lg btn-success"  style="text-decoration: none;">Please Wait your room is not Allocated Yet!</a> 
                                         
                                       <?php  
                                     } 
                                    }
                                    elseif($user_data1['fee_status']=='pending'){   
                                ?>
                                    <label style="color: darkgreen;font-size: 20px;">
                                        <?php echo "Fee is pending..!";?>
                                    </label>        
                                    <a href="index.php?page=pay_fees" class="btn btn-outline-primary w-100">Pay Now</a>
                                <?php 
                                } 
                                    elseif($user_data1['fee_status']=='waiting'){   
                                ?>
                                    <label style="color: darkgreen;font-size: 20px;">
                                        <?php echo "Fee payment is on waiting..!";?>
                                    </label>        
                                    <a href="index.php?page=pay_fees" class="btn btn-outline-primary w-100">Pay Now</a>
                                <?php 
                                } 
                                else 
                                {
                                ?>
                                <label style="color: red;font-size: 20px;">
                                    <?php echo "Request is Rejected!";?>
                                </label>  
                                <?php    
                                    }
                                ?>  
                            </div>
            <?php        
                }
            ?>
            <!-- Ends here.......................... -->
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="justify-content-between align-items-center mb-3">
                    <h4 style="text-align:center; border-bottom: 1px solid #dee2e6; padding-bottom: 10px;">PROFILE</h4>
                </div>
                <div class="row mt-1">
                    <div class="col-md-6"><label class="labels">Name</label><input readonly type="text" class="form-control" placeholder="first name" value="<?php echo $user_data1['mname']; ?>"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input readonly type="text" class="form-control" value="<?php echo $user_data1['fname']; ?>" placeholder="surname"></div>
                    <div class="col-md-6"><label class="labels">Mobile Number</label><input readonly type="number" class="form-control" placeholder="enter phone number" value="<?php echo $user_data['M_no'] ?>"></div>
                    <div class="col-md-6"><label class="labels">Email ID</label><input readonly type="email" class="form-control" placeholder="enter email id" readonly value="<?php echo $user_data1['email']?>"></div>
                    <div class="col-md-6"><label class="labels">Date Of Birth</label><input readonly type="date" class="form-control" placeholder="enter date of birth" value="<?php echo $user_data['DOB']?>"></div>
                     <div class="col-md-6"><label class="labels">Gender</label><input readonly type="text" class="form-control" placeholder="enter gender" value="<?php echo $user_data['gender']?>"></div>
                    <div class="col-md-6"><label class="labels">Address</label><input readonly type="text" class="form-control" placeholder="enter address" value="<?php echo $user_data['Address']?>"></div>
                    <div class="col-md-6"><label class="labels">Area</label><input readonly type="text" class="form-control" placeholder="enter Area" value="<?php echo $user_data['Area']?>"></div>
                    <div class="col-md-6"><label class="labels">Pincode</label><input readonly type="text" class="form-control" placeholder="enter Pincode" value="<?php echo $user_data['pin']?>"></div>

                    <div class="col-md-6"><label class="labels">State</label><input readonly type="text" class="form-control" placeholder="enter state" value="<?php echo $user_data['state_title']?>"></div>
                    
                    <div class="col-md-6"><label class="labels">City</label><input readonly type="text" class="form-control" placeholder="city" value="<?php echo $user_data['name']?>"></div>

                    <div class="col-md-6"><label class="labels">District</label><input readonly type="text" class="form-control" placeholder="District" value="<?php echo $user_data['district_title']?>"></div>
                    
                    <div class="col-md-6"><label class="labels">Village</label><input readonly type="text" class="form-control" value="<?php echo $user_data['village']?>" placeholder="Village"></div>
                </div>
                
                <div class="mt-5 text-center">
                    <a href="..\User penal\middelpage\logout.php"><button class="btn btn-primary profile-button" type="button" >Logout</button></a>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="justify-content-between align-items-center mb-3">
                    <h4 style="text-align:center; border-bottom: 1px solid #dee2e6; padding-bottom: 10px;">EDUCATION</h4>
                </div>
                <div class="col-md-6"><label class="labels">Education</label><input readonly type="text" class="form-control" placeholder="education" value="<?php echo $user_data['course_name']?>"></div>
                <div class="col-md-6"><label class="labels">Semester</label><input readonly type="text" class="form-control" placeholder="Semester" value="<?php echo $user_data['semester']?>"></div> <br>
                <div class="col-md-12"><label class="labels">School/Collage</label><input readonly type="text" class="form-control" placeholder="Semester" value="<?php echo $user_data['college_name']?>"></div> <br>
                <?php 
                $s="SELECT * FROM `bed_m` WHERE `stu_id`='".$user_data1['admi_id']."'";
                $q=mysqli_query($con,$s);
                $a=mysqli_fetch_assoc($q);

                $s1="SELECT * FROM `room_m` WHERE `room_id`='".$a['room_id']."'";
                $qr=mysqli_query($con,$s1);
                $b=mysqli_fetch_assoc($qr);
                    if ($user_data1['bed_status']==0) {
                        
                    }
                    else
                    {
                    ?>
                    <div class="col-md-6"><label class="labels">Room No.</label><input readonly type="text" class="form-control"value="<?php echo $b['room_no']?>"></div>
                    <div class="col-md-6"><label class="labels">Bed No.</label><input readonly type="text" class="form-control" value="<?php echo $a['bed_no']?>"></div><br>
                    <!-- -----------------------------------------Complaint section --------------------------------->           
                    <div class="col-md-12 mt-5">
                        <div class="justify-content-between align-items-center mb-3">
                            <h4 style="text-align:center; border-bottom: 1px solid #dee2e6; padding-bottom: 10px;">Complain Section</h4>
                        </div>
                        <?php 

                                $select1="SELECT * FROM `complain` WHERE stu_email='".$user_data1['email']."'";
                                $query=mysqli_query($con,$select1);
                                
                                while($count=mysqli_fetch_assoc($query))
                                {
                                    if($user_data1['email']==$count['stu_email'] && $count['status']=="pending")
                                    {
                                        echo '
                                    <div class="col-md-12 alert alert-dark alert-dismissible show" style="font-size:14px;margin-top:auto" role="alert">Your application number 
                                        <strong style="text-transform: uppercase;">'.$count['c_id'].'</strong> For  <strong style="text-transform: uppercase;">'.$count['com_category'].'</strong> is pending now!
                                    </div>';
                                    }
                                    elseif($user_data1['email']==$count['stu_email'] && $count['status']=="rejected")
                                    {
                                        echo '
                                        <div class="col-md-12 alert alert-dark alert-dismissible show" style="font-size:14px;margin-top:auto" role="alert">Your application number 
                                        <strong style="text-transform: uppercase;">'.$count['c_id'].'</strong> For  <strong style="text-transform: uppercase;">'.$count['com_category'].'</strong> is Rejected!
                                    </div>';
                                    }
                                    elseif($user_data1['email']==$count['stu_email'] && $count['status']=="approved")
                                    {
                                        echo '
                                        <div class="col-md-12 alert alert-dark alert-dismissible show" style="font-size:14px;margin-top:auto" role="alert">Your application number <strong style="text-transform: uppercase;">'.$count['c_id'].'</strong> For  <strong style="text-transform: uppercase;">'.$count['com_category'].'</strong>  is Approved!
                                    </div>';
                                    }
                                    else
                                    {
                                        
                                    }
                                }
                                
                        ?>
                        <div class="col-12 pb-3">
                            <a href="index.php?page=complain_view&email=<?php echo $user_data1['email']?>" class="btn btn-dark w-100" style="height:30px;font-size:13px">View Your complains here!</a>
                        </div>
                        <div class="col-12">
                            <a href="index.php?page=complain&id=<?php echo $user_data1['admi_id']?>" class="btn btn-info w-100" style="height:30px;font-size:13px">Write complains here!</a>
                        </div>
                    </div>
                    <!-- --------------------------------------------ends -------------------------------------------->
                    <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>