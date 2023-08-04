<!-- this page is use for approve student admission!!!!!!!! -->
<br>
<br>
<br>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<link rel="stylesheet" href="css/lightbox.css">
<!-- font CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>

<!-- flip card  link-->
    <link rel="stylesheet"  href="..\User penal\assets-design\frontend\llh\css\flipcard.css">
    <!-- end -->
    <link rel="stylesheet" href="..\User penal\assets-design\frontend\llh\css\hes-gallery.css">

    <link rel="stylesheet" type="text/css" href="..\web\css\imagebox.css">
    <style type="text/css">
        /*imagebox*/

        /* Style the Image Used to Trigger the Modal */
        /*end*/
    .hes-gallery img{
        cursor:pointer;
    }
    .hes-gallery img:hover{
        opacity:0.5;
        transition:opacity 0.3s;
    }
    .hes-gallery span{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }
    .hes-gallery span{
        text-align:center;
        opacity:0;
        transition:0.8s;
        font-size:25px;
        font-weight:900;
    }
    .hes-gallery .description{
        position:absolute;
        left:10px;
        bottom:10px;
        font-weight:900;
        font-size:17px;
        opacity:0;
    }
    .hes-gallery span i{
        font-size:60px;
    }   
    .hes-gallery .item:hover > span,.hes-gallery .item:hover > .description{
        opacity:1;
    } </style>
</head>


<link rel="stylesheet" type="text/css" href="..\web\css\imagebox2.css">
<body>
  <div class="container rounded bg-white " style="margin-top: 0px;">
    <div class="row col-" style="border: 1px dashed #dee2e6;">
    <?php
                    $sel="SELECT admission.*,city.name,state.state_title,district.district_title FROM `admission` INNER JOIN city on city.id = admission.city INNER JOIN state on state.state_id = admission.state INNER JOIN district on district.districtid = admission.dist where admission.admi_id = '".$_REQUEST['id']."'";
                    $qr=mysqli_query($con,$sel) or die("faild connection");
                    if ($qr) {
                       $ud=mysqli_fetch_assoc($qr);
                    }
                    else
                    {
                        echo "error..........";
                    }

                    $select="SELECT * FROM `admission` WHERE `admi_id`='".$_REQUEST['id']."' ";
                    $qry=mysqli_query($con,$select);
                    $id=$_REQUEST['id'];
                    if ($qry) {
                        $row=mysqli_fetch_assoc($qry);
    ?>
    <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <?php
                if($row['s_photo'] != ''){
            ?>                 
                <!-- Trigger the Modal -->
                            <img id="myImg4" class="rounded-circle mt-5" src="../user penal/assets-design/frontend/llh/img/upload/<?php echo $row['s_photo'];?>" alt="Snow" style="width:100%;max-width:200px;height: 150px;">

                            <!-- The Modal -->
                            <div id="myModal4" class="modal4">

                              <!-- The Close Button -->
                              <span class="close4">&times;</span>

                              <!-- Modal Content (The Image) -->
                              <img class="modal-content" id="img05">

                              <!-- Modal Caption (Image Text) -->
                              <div id="caption4" class="caption1"></div>
                            </div>
                <?php 
                } 
                else {
                ?>
                <!-- Trigger the Modal -->
                            <img id="myImg4" class="rounded-circle mt-5" src="..\User penal\assets-design\user.jpg" alt="Snow" style="width:100%;max-width:200px;height: 150px;">

                            <!-- The Modal -->
                            <div id="myModal4" class="modal4">

                              <!-- The Close Button -->
                              <span class="close4">&times;</span>

                              <!-- Modal Content (The Image) -->
                              <img class="modal-content" id="img05">

                              <!-- Modal Caption (Image Text) -->
                              <div id="caption4" class="caption1"></div>
                            </div>
                <?php
                } 
                ?>
        <span class="font-weight-bold"><?php echo $row['mname'].' '.$row['fname'];?></span><span class="text-black-50"><?php echo $row['email'];?></span><br>
    </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="justify-content-between align-items-center mb-3">
                    <h4 style="text-align:center; border-bottom: 1px solid #dee2e6; padding-bottom: 10px;">student details</h4>
                </div>
                <div class="row mt-1" style="font-size: 18px;">
                    <div class="col-md-6"><b>Name : </b><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname'];?></div>
                    <div class="col-md-6"><b>Caste : </b><?php echo $row['caste']; ?></div>
                    <div class="col-md-6"><b>Gender : </b><?php echo $row['caste']; ?></div> 
                    <div class="col-md-6"><b>Mobile No : </b><?php echo $row['M_no'] ?></div>
                    <div class="col-md-6"><b>Email ID : </b><?php echo $row['email']?></div>
                    <div class="col-md-6"><b>Date of Birth : </b><?php echo $row['DOB']?></div>
                    <div class="col-md-6"><b>Age : </b> <?php echo $row['age']?></div>
                    <div class="col-md-6"><b>Father Name. : </b><?php echo $row['father_name']?></div>
                    <div class="col-md-6"><b>Father Mo. : </b><?php echo $row['father_no']?></div>
                    <div class="col-md-6"><b>Father Mo. : </b><?php echo $row['father_occ']?></div>
                    <div class="col-md-6"><b>Address : </b><?php echo $row['Address']?></div>
                    <div class="col-md-6"><b>Area : </b><?php echo $row['Area']?></div>
                    <div class="col-md-6"><b>Village : </b> <?php echo $row['village']?></div>
                    <div class="col-md-6"><b>State :  </b><?php echo @$ud['state_title']?></div> 
                    <div class="col-md-6"><b>District :  </b><?php echo @$ud['district_title']?></div> 
                    <div class="col-md-6"><b>City : </b><?php echo @$ud['name']?></div>
                    <div class="col-md-6"><b>Pincode : </b><?php echo $row['pin']?></div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6"><b>Leaving Certificate : </b><hr>
                        <!-- Trigger the Modal -->
                            <img id="myImg" src="../user penal/assets-design/frontend/llh/img/upload/<?php echo $row['leaving_cer'];?> " alt="Image not found" style="width:100%;max-width:200px">

                            <!-- The Modal -->
                            <div id="myModal" class="modal">

                              <!-- The Close Button -->
                              <span class="close">&times;</span>

                              <!-- Modal Content (The Image) -->
                              <img class="modal-content" id="img01">

                              <!-- Modal Caption (Image Text) -->
                              <div id="caption"></div>
                            </div>
                    </div>
                    <div class="col-md-6"><b>Id Proof : </b><hr>
                        <!-- Trigger the Modal -->
                            <img id="myImg1" src="../user penal/assets-design/frontend/llh/img/upload/<?php echo $row['id_proof'];?>" alt="Snow" style="width:100%;max-width:200px">

                            <!-- The Modal -->
                            <div id="myModal1" class="modal1">

                              <!-- The Close Button -->
                              <span class="close1">&times;</span>

                              <!-- Modal Content (The Image) -->
                              <img class="modal-content" id="img02">

                              <!-- Modal Caption (Image Text) -->
                              <div id="caption1" class="caption1"></div>
                            </div>
                    </div>
                    
                </div>
                
                <div class="mt-5 text-center">
                    <a href="index.php?page=stu_list_action&action=approve&id=<?php echo $id?>" class="btn btn-success">Approve</a>
                    <a href="index.php?page=stu_list_action&action=deny&id=<?php echo $id?>" class="btn btn-danger">Deny</a>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span><b>CURRENT EDUCATIONAL DETAILS</b></span></div><br>

                <div class="col-md-6"><b>Fees_Reciept : </b><hr>
                    <!-- Trigger the Modal -->
                            <img id="myImg2" src="../user penal/assets-design/frontend/llh/img/upload/<?php echo $row['fees_receipt'];?>" alt="Snow" style="width:100%;max-width:200px">

                            <!-- The Modal -->
                            <div id="myModal2" class="modal2">

                              <!-- The Close Button -->
                              <span class="close2">&times;</span>

                              <!-- Modal Content (The Image) -->
                              <img class="modal-content" id="img03">

                              <!-- Modal Caption (Image Text) -->
                              <div id="caption2" class="caption1"></div>
                            </div>
                </div>
                <div class="col-md-6"><b>Semester : </b><?php echo $row['semester']?></div>
                <div class="col-md-6"><b>School/College Name : </b><?php echo $row['college_name']?></div>
                <div class="col-md-6"><b>Course Name : </b><?php echo $row['course_name']?></div>

                
            </div>
            <!-- <br>
            <br>
            <br>
            <br>
            <br> -->
          
            <div class="p-3 py-5">
                <div class="justify-content-between align-items-center experience"><span><b>PREVIOUS EDUCATIONAL DETAILS</b> </span><!-- <span class="border px-3 p-1 add-experience"><i class="fa fa-pen"></i>&nbsp;Edit</span --></div><br>

                <div class="col-md-6"><b>Marksheet : </b><hr>
                    <!-- Trigger the Modal -->
                            <img id="myImg3" src="../user penal/assets-design/frontend/llh/img/upload/<?php echo $row['marksheets_file'];?>" alt="Snow" style="width:100%;max-width:200px">

                            <!-- The Modal -->
                            <div id="myModal3" class="modal3">

                              <!-- The Close Button -->
                              <span class="close3">&times;</span>

                              <!-- Modal Content (The Image) -->
                              <img class="modal-content" id="img04">

                              <!-- Modal Caption (Image Text) -->
                              <div id="caption3" class="caption1"></div>
                            </div>
                </div>
                <div class="col-md-6"><b>Education Category : </b><?php echo $row['edu_cat']?></div>
                <div class="col-md-6"><b>Education : </b><?php echo $row['edu_subcat']?></div>
                <div class="col-md-6"><b>Year of Completion : </b><?php echo $row['passing_year']?></div>
                <div class="col-md-6"><b>Board : </b><?php echo $row['board']?></div>
                <div class="col-md-6"><b>percentage : </b><?php echo $row['percentage']?></div>
                <div class="col-md-6"><b>Status : </b><?php echo $row['status']?></div>
                
                
            </div>
        </div>
        <?php 
            
             }  
        ?>
    </div>
</div>
<script src="..\web\js\imagebox2.js"></script>
</body>     