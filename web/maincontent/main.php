<!-- //market-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
<?php
 
 //count current student in addmission table which fee paid is 1
    $sql = "SELECT COUNT(*) FROM admission WHERE fee_status = 'paid'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $total_fee_paid = $row[0];

// showing a room_m which is active
    $sql1 = "SELECT COUNT(*) FROM room_m WHERE room_status = 'active'";
    $result1 = mysqli_query($con, $sql1);
    $row1 = mysqli_fetch_array($result1);
    $total_room_active = $row1[0];
    
// count current stuent adsmission whare status is pending
    $sql2 = "SELECT COUNT(*) FROM admission WHERE status = 'pending'";
    $result2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_array($result2);
    $total_admission_pending = $row2[0];
?>
  <section class="wrapper">
        <div class="market-updates">
        <div class="row">
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right" style="text-align:left;">
                        <i class="fa fa-users"style="font-size:52px;color:white;margin-right:10px;"></i>
                    </div>
                    <a href="index.php?page=stud_list" style="color:white;">
                     <div class="col-md-8 market-update-left" style="text-align:right">
                     <h4>CURRENT STUDENTS</h4>
                    <h3><span class="text-warning"><?php echo $total_fee_paid;?></span>/300</h3>
                    <p>Capacity of Students</p>
                  </div></a>
                  <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right" style="text-align:left;">
                        <i class="fa fa-bed" style="font-size:52px;color:white;margin-right:10px;" ></i>
                    </div>
                    <a href="index.php?page=room_m" style="color:white;">
                    
                    <div class="col-md-8 market-update-left" style="text-align:right">
                    <h4>AVAILABLE ROOMS</h4>
                    <h3><?php echo $total_room_active;?>/75</h3>
                    <p>5 Floors in  Hostel</p>
                    </div></a>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 market-update-gd" >
                <div class="market-update-block clr-block-4">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-8 market-update-left" style="text-align:right">
                        <h4 style="color:white;">STUDENT REQUESTS</h4>
                        <h3><?php echo $total_admission_pending?></h3>
                        <p>Student's admisssion request..</p>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
        </div>
           <div class="clearfix"> </div>
        </div>  
        <!-- ---------------------------------------------------calender------------------------------------------- -->
        <div class="agil-info-calendar">
        <div class="col-md-6 agile-calendar">
            <div class="calendar-widget">
                <div class="panel-heading ui-sortable-handle">
                    <span class="panel-icon">
                      <i class="fa fa-calendar-o"></i>
                    </span>
                    <span class="panel-title"> Calendar Widget</span>
                </div>
                <!-- grids -->
                    <div class="agile-calendar-grid">
                        <div class="page">
                            
                            <div class="w3l-calendar-left">
                                <div class="calendar-heading">
                                    
                                </div>
                                <div class="monthly" id="mycalendar"></div>
                            </div>
                            
                            <div class="clearfix"> </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- -----------------------------------------------Ends------------------------------------------------------- -->
        <!-- -----------------------------------------------Admission Requests-------------------------------------------- -->
        <div class="col-md-6" style="background-color:#eef9f0;">
            <br>
            <div style="text-align:center;text-transform: uppercase;color: #8b5c7e;"><b>New Admission Requests</b>*</div><br>
                <?php 
                    $select="SELECT * FROM `admission` WHERE `status`='pending'";
                    $qry=mysqli_query($con,$select);
                    if (mysqli_num_rows($qry)>0) {
                      while($row=mysqli_fetch_assoc($qry))
                      {
                        ?>
                        <div class="alert alert-success alert-dismissible show" role="alert">
                            <strong style="text-transform: uppercase;"><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname']?></strong> Has Request For Admission!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                      }
                    }
                    else{
                        ?>
                        <div class="alert alert-danger alert-dismissible show" role="alert">
                        <strong style="text-transform: uppercase;">No New Admission Request!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
        <!-- -----------------------------------------------ends-------------------------------------------- -->
        <div class="col-md-6"><hr> </div>
        <!-- -------------------------------student complaints......................................... -->
        <div class="col-md-6" style="background-color:#eef9f0;">        
            <div style="text-align:center;text-transform: uppercase;color: #8b5c7e;margin-top:20px;"><b>New Complaints Requests</b>*</div><br>
                <?php 
                    $select1="SELECT * FROM `complain` WHERE `status`='pending'";
                    $qry1=mysqli_query($con,$select1);
                    if (mysqli_num_rows($qry1)>0) {
                      while($row1=mysqli_fetch_assoc($qry1))
                      {
                        ?>
                        <div class="alert alert-dark alert-dismissible show" role="alert">
                            <strong style="text-transform: uppercase;"><?php echo $row1['stu_name'];?></strong> Has Sent Request For 
                            <strong style="text-transform: uppercase;"><?php echo $row1['com_category']?>!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                      }
                    }
                    else{
                        ?>
                        <div class="alert alert-danger alert-dismissible show" role="alert">
                        <strong style="text-transform: uppercase;">No New Admission Request!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php
                    }
                ?>    
            </div>
        </div>
        <!-- ----------------------------------------ends------------------------------------------------ -->
        
</section>