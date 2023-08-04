<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<?php
error_reporting(0);
  if ($_SESSION['reg_id']=="")
  {
    // $action="insert";
    header("location: index.php?page=login");
  }
  else
  {
    $action="update";
    }
 if (empty($_SESSION['reg_id'])) 
 {
    header("location: index.php?page=login");
  }

  $select="SELECT * FROM `admission` WHERE `email`='".$_SESSION['username']."'";
    $qry=mysqli_query($con,$select);
    if ($qry) {
        $user_data=$qry->fetch_assoc(); //mysqli_fetch_assoc($qry)
    }
?>

<body>
  
    <style type="text/css">
      ul.parsley-errors-list li{
      list-style: none;
      color: red;
      text-transform: capitalize;
      }
      ul.parsley-errors-list{
      padding:5px 0 0 10px;
      margin-bottom: 10px;
      }
    label small{
        font-family: "Open Sans", sans-serif;
        font-size:90%;
        font-weight:400;
    }
    form{
        font-family: "Open Sans", sans-serif;
    }
    .row{
        margin-left:0;
        margin-right:0;
    }
     .row>.col, .row>[class*=col-] {
        padding-right: 5px;
        padding-left: 5px;
    }
    .otp_page{
        background-color:white;
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        z-index:10000;
        border:5px solid black;
        display:none;
        overflow:auto;
        padding:10px;
        text-align:center;
    }
    fieldset 
  {
    border: 1px solid #ddd !important;
    margin: 0;
    min-width: 0;
    padding: 10px;       
    position: relative;
    border-radius:4px;
    background-color:#f5f5f5;
    padding-left:10px!important;
  } 
  
    legend
    {
      font-size:14px;
      font-weight:bold;
      margin-bottom: 0px; 
      width: 35%; 
      border: 1px solid #ddd;
      border-radius: 4px; 
      padding: 5px 5px 5px 10px; 
      background-color: #ffffff;
    }
    label span{
      color:red;
    }
    .secborder{
      background-color:white;
      padding: 7px;
      margin-bottom:40px;
      border: 1px solid #b8b1b1;
      border-radius: 3px !important;
      transition:background-color 1s, border-color 1s;
    }
    .secborder:hover{
      background-color:white;
      transition:background-color 0.5s, border-color 0.5s;
      border-color:green;
    }
    .more-btn{
          border-radius: 19px;
    margin-top: -108px;
      padding:0.300rem 0.75rem !important;
    }
    .inner-legend{
        display: inline-block;
        /* border: 1px solid #cfc2c2; */
        border-radius: 5px;
        padding: 3px 3px;
        background-color: #29597b;
        color: white;
        margin-bottom: -13px;
        margin-left: 20px;
        font-size:12px;
    }
    .remove_exam, .remove_company{
        border-radius: 19px;
        margin-top: -108px;
        padding: 0.300rem 0.75rem !important;
        float:right;
    }
    .overlay{
        background-color:white;
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        z-index:1000;
        border:5px solid black;
        display:none;
        overflow:auto;
        padding:10px;
    }
    .still_edit{
        background-color: #7d560e;
        border: none;
        color: white;
        padding: 1px 24px;
        border-radius: 5px;
        box-shadow: 2px 2px #fa7d77;
        cursor:pointer;
    }
    .still_edit:hover{
        background-color:orange;
    }
    .confirm_submit{
        background-color: #497b39;
        border: none;
        color: white;
        padding: 1px 24px;
        border-radius: 5px;
        box-shadow: 2px 2px #63dd4c;
        cursor:pointer;
    }
    .confirm_submit:hover{
        background-color:#6fd34f;
    }
    .preview_tables{
        width:95%;
        margin:auto;
        background-color: white;
        font-size: 15px;
        font-weight: 900;
        border-radius: 5px;
        box-shadow: 0px 1px 4px black;
    }
    .preview_tables td,.preview_tables th{
        padding: 5px;
        font-size: 16px;
        font-weight: 900;
        letter-spacing: 0.5px;
    }
    .form{
        margin-top:40px;
    }
    .validation{
        color:red;
    }
  </style>
  <div class="container-fluid">

        <!-- <div class="section-header"> -->
          <!-- <h3>Register Yourself</h3> -->
        <!-- </div> -->

        <div class="row wow fadeInUp">
          
          <div class="col-lg-12">

            <div class="form">
               
                             
              <form action="index.php?page=admission_action" method="post" role="form" enctype="multipart/form-data" class="contactForm" data-parsley-validate>
                <fieldset>
                <input type="hidden" name="id" value="<?php echo $_REQUEST['id']  ?>">
                <input type="hidden" name="action" value="<?php echo $action; ?>">
                <input type="hidden" name="confirm_submit" value="false" />
                <input type="hidden" name="confirm_otp" value="false" />
                <input type="hidden" name="csrf_test_name" value="da99bbfe2517c752f3f68489657c97b3">        
                  <legend style="color:#ff4c4c;">Onetime Hostel Registration Form</legend>
                  <div class="row">
                      <div class="inner-legend" style="font-size: 14px;">BASIC STUDENT DETAILS</div>
                  </div>
                  <div class="row secborder">
                    <div class="form-group col-lg-3">
                      <label><small>First Name <span>*</span></small></label>
                      <input  type="text" name="fname" class="form-control" required data-parsley-required-message="Enter your First Name*" placeholder="Enter your First name*" value="<?php echo $user_data['fname']?>" />
                      <div class="validation"></div>
                    </div>

                    <div class="form-group col-lg-3">
                      <label><small>Middle Name <span>*</span></small></label>
                      <input  type="text" name="mname" class="form-control" required data-parsley-required-message="Enter your Middle Name*" placeholder="Enter your Middle name" value="<?php echo $user_data['mname']?>" />
                      <div class="validation"></div>
                    </div>

                    <div class="form-group col-lg-3">
                      <label><small>Last Name <span>*</span></small></label>
                      <input  type="text" name="lname" class="form-control" required data-parsley-required-message="Enter your Last Name*" placeholder="Enter your Last name" value="<?php echo $user_data['lname']?>" />
                      <div class="validation"></div>
                    </div>

                    <div class="form-group col-lg-3">
                      <label><small> Caste <span>*</span></small></label>
                      <input  type="text" name="caste" class="form-control" required data-parsley-required-message="Enter your Caste*" placeholder="Enter your Caste" value="<?php echo $user_data['caste']?>" />
                      <div class="validation"></div>
                    </div>
                    

                    <div class="form-group col-lg-3">
                      <label><small>Gender <span>*</span></small></label>
                      <select name="gender" class="form-control" required data-parsley-required-message="Please select Gender*">
                        <?php 
                            if (isset($_SESSION['reg_id'])) {
                              if ($user_data['gender'] == 'MALE') { ?>
                                <option value="MALE" selected>MALE</option>
                                <option value="FEMALE">FEMALE</option>
                                <?php
                              }
                              else{ ?>
                                <option value="FEMALE" selected>FEMALE</option>
                                <option value="MALE">MALE</option> 
                                <?php 
                              }
                            }
                        ?>
                      </select>
                    </div>

                    <div class="form-group col-lg-3">
                      <label><small>Student's Mobile Number<span>*</span></small></label>
                      <input  type="digit" name="mobile" class="form-control mobile" required data-parsley-length="[10,10]" required data-parsley-length-message="enter a 10 digit number" data-parsley-required-message="Enter your Mobile Number" data-parsley-trigger="keyup" placeholder="Enter your Mobile Number" value="<?php echo $user_data['M_no']?>" />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>E-mail <span>*</span></small></label>
                      <input  type="email" class="form-control"  name="email" readonly id="email" required data-parsley-required-message="Enter your Email*" placeholder="Enter E-mail" value="<?php echo $user_data['email'] ?>" />
                      <div class="validation"></div>
                    </div>
                    
                    <div class="form-group col-lg-3">
                      <label><small>Date of Birth <span>*</span></small></label>
                      <input type="date" name="dob" class="form-control" required data-parsley-required-message="Enter Date of birth*" value="<?php echo $user_data['DOB']?>"  />
                    </div>

                    <div class="form-group col-lg-3">
                      <label><small>Student's Age <span>*</span></small></label>
                      <input  type="digit" name="age"  class="form-control" placeholder="" required data-parsley-required-message="Enter your age*" value="<?php echo $user_data['age']?>" />
                      <div class="validation"></div>
                    </div>          

                    <div class="form-group col-lg-3">
                      <label><small>Father's full Name <span>*</span></small></label>
                      <input  type="text" name="faname"  class="form-control" required data-parsley-required-message="Enter your Father's full name*" placeholder="Enter your Father's full name" data-rule="minlen:3" data-msg="Please enter at least 3 chars" value="<?php echo $user_data['father_name']?>" />
                      <div class="validation"></div>
                    </div>

                    <div class="form-group col-lg-3">
                      <label><small>Father Mobile Number<span>*</span></small></label>
                      <input  type="digit" name="father_mobile"  class="form-control" required data-parsley-length="[10,10]" required data-parsley-length-message="enter a 10 digit number" data-parsley-required-message="Enter your Mobile Number" data-parsley-trigger="keyup" placeholder="Enter your Father's Mobile Number." data-rule="mobile:10"   value="<?php echo $user_data['father_no']?>" />
                      <div class="validation"></div>
                    </div>

                    <div class="form-group col-lg-3">
                      <label><small>Father's Occupation <span>*</span></small></label>
                      <input  type="text" name="fao" class="form-control" required data-parsley-required-message="Enter your Father's Occupation*" placeholder="Enter your Father's Occupation"  data-rule="minlen:3" data-msg="Please enter at least 3 chars" value="<?php echo $user_data['father_occ']?>" />
                      <div class="validation"></div>
                    </div>

                    
                    <div class="form-group col-lg-3">
                      <label><small>Permanent Address <span>*</span></small></label>
                      <input  type="text" name="address" class="form-control" required data-parsley-required-message="Enter your Address*"  placeholder="enter your Address" value="<?php echo $user_data['Address']?>" />
                    </div>

                    <div class="form-group col-lg-3">
                      <label><small>Area <span>*</span></small></label>
                      <input type="text"  name="area" id="area" class="form-control" required data-parsley-required-message="Enter Area*" placeholder="Enter Area" value="<?php echo $user_data['Area']?>" >   
                    </div>
                    
                    <div class="form-group col-lg-3">
                      <label><small>Village<span>*</span></small></label>
                     <input type="text" name="village" class="form-control" required data-parsley-required-message="Enter your Village*" placeholder="Enter your Village" value="<?php echo $user_data['village']?>" />
                    </div>

                    <div class="form-group col-lg-3">
                      <label><small>State <span>*</span></small></label>
                      <select class="form-control" name="state"  id="state" required data-parsley-required-message="Select State*">
                            <option value="" disabled selected >select state*</option>
                            <?php 
                            $select_state="SELECT * FROM `state`";
                            $state_qry=mysqli_query($con,$select_state);
                                          while ($state_asoc=mysqli_fetch_array($state_qry)) 
                                          {
                                            ?>
                                            <option value="<?php echo $state_asoc['state_id']; ?>"><?php echo $state_asoc['state_title']; ?></option> 
                                  <?php
                                          }
                                  ?>
                        </select>
                      <div class="validation"></div>
                    </div>

                    <div class="form-group col-lg-3">
                      <label><small>District<span>*</span></small></label>
                       <select class="form-control" name="district"  id="district" required data-parsley-required-message="Select District*" >
                            <option value="" disabled selected>Select District*</option>
                            <?php 
                            $select_dis="SELECT * FROM `district`";
                            $qry2=mysqli_query($con,$select_dis);
                                          while ($dis_asoc=mysqli_fetch_assoc($qry2)) 
                                          {
                                            ?><option value="<?php echo $dis_asoc['districtid']?>"><?php echo $dis_asoc['district_title'];?></option> 
                                  <?php
                                          }
                                  ?>
                        </select>
                    </div>

                     <div class="form-group col-lg-3">
                      <label><small>City <span>*</span></small></label>
                      <select class="form-control" name="city"  id="city" required data-parsley-required-message="Select City*">
                            <option value="" disabled selected>Select City*</option>
                            <?php 
                              $select_city="SELECT * FROM `city`";
                              $city_qry=mysqli_query($con,$select_city);
                                  if(mysqli_num_rows($city_qry) > 0 )
                                  {
                                          while ($city_asoc=mysqli_fetch_assoc($city_qry)) 
                                          {
                                            ?><option value="<?php echo $city_asoc['id']; ?>"><?php echo $city_asoc['name'];?></option> 
                                  <?php
                                          }
                                  }
                                  ?>
                        </select>
                    </div>

                    <div class="form-group col-lg-3">
                      <label><small>Pincode <span>*</span></small></label>
                      <input  type="number" name="pincode" class="form-control" required data-parsley-length="[6,6]" required data-parsley-length-message="enter a 6 digit number" data-parsley-required-message="Enter your Mobile Number" data-parsley-trigger="keyup" placeholder="Enter Pincode" data-rule="pincode:6" data-msg="Please enter 6 digits"  value="<?php echo $user_data['pin']?>" />
                      <div class="validation"></div>
                    </div>

                    <div class="form-group col-lg-3">
                      <label><small>Passport Sized Photo (max: 800kb,JPG/PNG) <span>*</span></small></label>
                      <input type="file" name="photo" class="form-control" required data-parsley-required-message="Please select your Photo*" accept="image/*" data-rule="photo:800" data-msg="Upload File within specified file size upto 800KB"  />
                      <div class="validation"></div>
                    </div>
                    
                    <div class="form-group col-lg-3">
                      <label><small>Leaving Certificate (max: 2mb,PNG/JPG/PDF) <span>*</span></small></label>
                      <input type="file" name="lc" class="form-control" required data-parsley-required-message="Please select your Leaving Certificate*" data-rule="doc:2" data-msg="Upload File within specified file size upto 2MB"  />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>ID Proof (max: 2mb,PNG/JPG/PDF) <span>*</span></small></label>
                      <input type="file" name="id_proof"  class="form-control" required data-parsley-required-message="Please select ID-proof*" data-rule="doc:2" data-msg="Upload File within specified file size upto 2MB"  />
                      <div class="validation"></div>
                    </div> 
                    
                  </div>
                  <div class="row">
                      <div class="inner-legend" style="font-size: 14px;">CURRENT EDUCATIONAL DETAILS</div>
                  </div>
                  <div class="row secborder">
                      <div class="row">
                    <div class="form-group col-lg-3">
                      <label><small>College/School Fee Receipt(max: 2mb)<span>*</span></small></label>
                      <input type="file" name="fee_receipt" required data-parsley-required-message="Please select Fee Receipt*"  class="form-control" data-rule="doc:2" data-msg="Upload File within specified file size"  />
                      <div class="validation"></div>
                    </div>
                      
                    <div class="form-group col-lg-3">
                      <label><small>Course Name<span>*</span></small></label>
                      <select name="course_name" class="form-control course_name" required data-parsley-required-message="Please select Course *" >
                          <option disabled selected>Select Course</option>
                            
                            <optgroup label="Secondary ">
                                        <option value="10th" data-id="1" >
                                        10th                                                             
                            </optgroup>
                            <optgroup label="Higher Secondary">
                           <?php 
                                $coure="SELECT * FROM `higher_sec`";
                                $qry=mysqli_query($con,$coure) or die("faild..");
                                if (mysqli_num_rows($qry) > 0) {
                                  while ($row=mysqli_fetch_assoc($qry)) {
                                  ?>
                                        <option value="<?php echo $row['high_name']?>"><?php echo $row['high_name']?> </option>       
                                <?php
                                  }
                                }
                           ?>         
                            </optgroup>
                            <optgroup label="Polytechnic">
                            <?php 
                                $coure="SELECT * FROM `polytechnic`";
                                $qry=mysqli_query($con,$coure) or die("faild..");
                                if (mysqli_num_rows($qry) > 0) {
                                  while ($row=mysqli_fetch_assoc($qry)) {
                                  ?>
                                        <option value="<?php echo $row['poly_name']?>"><?php echo $row['poly_name']?> </option>       
                                <?php
                                  }
                                }
                            ?>           
                            </optgroup>
                            <optgroup label="Paramedical">
                            <?php 
                                $coure="SELECT * FROM `paramedical`";
                                $qry=mysqli_query($con,$coure) or die("faild..");
                                if (mysqli_num_rows($qry) > 0) {
                                  while ($row=mysqli_fetch_assoc($qry)) {
                                  ?>
                                        <option value="<?php echo $row['par_name']?>"><?php echo $row['par_name']?> </option>       
                                <?php
                                  }
                                }
                            ?>        
                            </optgroup>
                            <optgroup label="Bachelor's degree">
                            <?php 
                                $coure="SELECT * FROM `bachelor_degree`";
                                $qry=mysqli_query($con,$coure) or die("faild..");
                                if (mysqli_num_rows($qry) > 0) {
                                  while ($row=mysqli_fetch_assoc($qry)) {
                                  ?>
                                        <option value="<?php echo $row['bech_name']?>"><?php echo $row['bech_name']?> </option>       
                                <?php
                                  }
                                }
                            ?>        
                            </optgroup>
                            <optgroup label="bachelor of engineering">
                            <?php 
                                $coure="SELECT * FROM `bachelor_of_engineering`";
                                $qry=mysqli_query($con,$coure) or die("faild..");
                                if (mysqli_num_rows($qry) > 0) {
                                  while ($row=mysqli_fetch_assoc($qry)) {
                                  ?>
                                        <option value="<?php echo $row['engi_name']?>"><?php echo $row['engi_name']?> </option>       
                                <?php
                                  }
                                }
                            ?>      
                            </optgroup>
                            <optgroup label="diploma to degree">
                            <?php 
                                $coure="SELECT * FROM `diploma_to_degree`";
                                $qry=mysqli_query($con,$coure) or die("faild..");
                                if (mysqli_num_rows($qry) > 0) {
                                  while ($row=mysqli_fetch_assoc($qry)) {
                                  ?>
                                        <option value="<?php echo $row['dtd_name']?>"><?php echo $row['dtd_name']?> </option>       
                                <?php
                                  }
                                }
                            ?>                
                            </optgroup>
                            <optgroup label="others">  
                                        <option value="others" data-id="8" >
                                        others
                            </optgroup>
                      </select>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>College/School Name<span>*</span></small></label>
                      <input type="text" name="college_name"  class="form-control college_name" required data-parsley-required-message="Enter your College/School Name*" value="<?php echo $user_data['college_name']?>" >
                         
                    
                      
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Semester/Standard<span>*</span></small></label>
                      <select name="semester" class="form-control semester" required data-parsley-required-message="Please select Semester*" >
                        <?php 
                        if (isset($user_data['semester'])) {
                        ?>
                            <option selected value="<?php $user_data['semester']?>"><?php echo $user_data['semester']?></option>
                            <option disabled>--------------------------------------------------------------</option>
                            <?php 
                               $sem="SELECT * FROM `semester`";
                               $qry=mysqli_query($con,$sem) or die("faild..");
                               if (mysqli_num_rows($qry) > 0) {
                                 while ($row=mysqli_fetch_assoc($qry)) {
                                 ?>
                                       <option value="<?php echo $row['sem_name']?>"><?php echo $row['sem_name']?> </option>       
                               <?php
                                 }
                               }
                        }
                        else 
                        {
                          ?>
                            <option disabled selected>Select semester</option>
                            <?php 
                               $sem="SELECT * FROM `semester`";
                               $qry=mysqli_query($con,$sem) or die("faild..");
                               if (mysqli_num_rows($qry) > 0) {
                                 while ($row=mysqli_fetch_assoc($qry)) {
                                 ?>
                                       <option value="<?php echo $row['sem_name']?>"><?php echo $row['sem_name']?> </option>       
                               <?php
                                 }
                               }
                        }
                            ?>
                      </select>
                    </div>
                    
                    
                    
                    </div>
                  </div>
                  <div class="row">
                      <div class="inner-legend" style="font-size: 14px;">PREVIOUS EDUCATIONAL DETAILS</div>
                  </div>
                  <div class="row secborder" id="company_main">
                      <div class="row">
                    <div class="form-group col-lg-3">
                      <label><small>Marksheet Pics (Last Exam-max:2mb)<span>*</span></small></label>
                      <input type="file" name="marksheets_file" required data-parsley-required-message="Please select Marksheet photo*"  class="form-control" data-rule="doc:2" data-msg="Upload File within specified file size"  />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Education Category <span>*</span></small></label>
                      <select name="edu_cat" class="form-control edu_cat" required data-parsley-required-message="Please select Education Category*"  >
                                  <option disabled selected>Select Category</option>
                                 
                                  <option value="Secondary " data-id="1" >Secondary</option>
                                 
                                  <option value="Higher Secondary" data-id="2" >Higher Secondary</option>
                                 
                                  <option value="Polytechnic" data-id="3" >Polytechnic</option>
                                 
                                  <option value="Paramedical" data-id="4" >Paramedical</option>
                                 
                                  <option value="Bachelor's degree" data-id="5" >Bachelors degree</option>
                                 
                                  <option value="bachelor of engineering" data-id="6" >bachelor of engineering</option>
                                 
                                  <option value="diploma to degree" data-id="7" >diploma to degree</option>
                                 
                                  <option value="others" data-id="8" >others</option>
                      </select>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Education <span>*</span></small></label>
                      <input type="text" name="edu_subcat"  class="form-control edu_subcat" required data-parsley-required-message="Enter your Education*" value="<?php echo $user_data['edu_subcat']?>" >
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Year of Completion<span>*</span></small></label>
                        <select name="passing_year" required data-parsley-required-message="Please select Year*" class="form-control year"  >
                          <option value=""> - YEAR - </option>  
                          <option value='2022'>2022</option><option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option>  
                        </select>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Board / University / Institute <span>*</span></small></label>
                      <select name="board" class="form-control board" required data-parsley-required-message="Please select Board details*"  >
                          <option disabled selected>Select University/Board</option>
                         <?php 
                                $bui="SELECT * FROM `b_u_i`";
                                $qry=mysqli_query($con,$bui) or die("faild..");
                                if (mysqli_num_rows($qry) > 0) {
                                  while ($row=mysqli_fetch_assoc($qry)) {
                                  ?>
                                        <option value="<?php echo $row['bui_name']?>"><?php echo $row['bui_name']?> </option>       
                                <?php
                                  }
                                }
                            ?>        
                          <option value="others" data-id="8" >others</option>        
                       </select>
                      
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>percentage <span>*</span></small></label>
                      <input  type="number" name="percentage" value="<?php echo $user_data['percentage']?>"  class="form-control percentage" placeholder="" min="33" max="100" step="any" required data-parsley-required-message="Please enter percentage*" data-rule="percentage:100" data-msg="Please Enter valid Percentage"  />
                      <div class="validation"></div>
                    </div>
                   
                    </div>
                  </div>
                 
                    </div>
                    
                  </div>
                  <div class="text-center">
                      <label><span>*</span> <input type="checkbox"  name="terms[1]" value="1" />
                        I hereby declare that the details furnished above are true and correct to the best of my knowledge. I shall abide by the rules and regulations of the institute. The institute can use my candidature to recognize the performance of the institute.</br>
                        From 3000 deposits of new and old students
                        The extra amount will be refunded for cutting of 2000 Patel Suwas and 250 Alumanai Association as well as 250 badsheet cover
                        </br></br>In any case, if the student leaves the hostel, he / she will not be able to get his / her fee refunded.
                        </br>
                        </label>
                  </div>
                   <?php 
                                if(isset($_SESSION['check_er']))
                                {
                                ?>
                                  <script  type="text/javascript" charset="utf-8" async defer>
                                    alert('Please agree to our terms and condition..!');
                                  </script>
                                <?php
                                    unset($_SESSION['check_er']);
                                } 
                                ?>

                  <div class="form-group col-lg-12"></div>
                  <div class="text-center">
                    <!-- <button type="button" class="still_edit">EDIT</button> -->
                    <button type="submit" class="btn btn-primary confirm_submit"  title="Send Message">Submit</button>
                    <input type="text" name="status" hidden value="" />
                  </div>
                </fieldset>
              </form>
            </div>
          </div>

        </div>

      </div>
      
    <!-- <div id="preloader"></div>
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div style="text-align:center;">
                        <button type="button" class="still_edit">EDIT</button>
                        <button type="button" class="confirm_submit">CONFIRM SUBMIT</button>
                    </div>
                </div>
            </div>
            <div class="row" style="overflow:auto;background-color:#f5f5f5;border-radius:5px;padding-bottom:20px;margin-bottom:10px;">
                <div class="col-md-12 text-center" style="margin:10px 0;">
                    <span style="color:red;">Confirm your details and then press "CONFIRM SUBMIT" to Register Yourself.</span>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center"><u><b>Basic Details</b></u></h4>
                    <table class="preview_tables">
                        <tr>
                            <td>
                                <small>Student's full Name:</small> 
                            </td>
                            <td>
                                <span id="first_name_prev"></span> <span id="father_name_prev"></span> <span id="surname_prev"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><small>Caste:</small></td>
                            <td><span id="subcaste_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Gender:</small></td>
                            <td><span id="gender_prev"></span></td>
                        </tr>
                        
                        <tr>
                            <td><small>Mobile:</small></td> 
                            <td><span id="mobile_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Email:</small></td>
                            <td><span id="email_prev"></span></td>
                        </tr>
                        
                        <tr>
                            <td><small>Father Mobile:</small></td>
                            <td><span id="father_mobile_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Date of Birth:</small></td>
                            <td><span id="dob_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Age:</small></td>
                            <td><span id="age_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Permanent Address:</small></td>
                            <td><span id="address_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>City:</small></td>
                            <td><span id="city_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Pincode:</small></td>
                            <td><span id="pincode_prev"></span></td>
                        </tr>
                        <tr>    
                            <td><small>village:</small></td>
                            <td> <span id="village_prev"></span></td>
                        </tr>
                        
                        <tr>    
                            <td><small>District:</small> </td>
                            <td><span id="district_prev"></span></td>
                        </tr>
                       </table>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center"><u><b>Educational Details</b></u></h4>
                    <div style="text-align:center;margin-top:20px;"><h5>CURRENT</h5></div>
                    <table class="preview_tables" id="ced_prev">
                        <tr>
                            <th>College/School *</th>
                        </tr>
                        <tr>
                            <th>Course *</th>
                        </tr>
                        <tr>
                            <th>Semester/Standard *</th>
                        </tr>
                    </table>
                    <div style="text-align:center;margin-top:20px;"><h5>PREVIOUS</h5></div>
                    <table class="preview_tables" id="job_prev" style="margin:auto;">
                        <tr>
                            <th>Education Category *</th>
                        </tr>
                        <tr>
                            <th>Education *</th>
                        </tr>
                        <tr>
                            <th>Percentage *</th>
                        </tr>
                        <tr>
                            <th>Year of Completion *</th>
                        </tr>
                    </table>
                    
                </div>
            </div>
            <div class="row text-center" style="margin-bottom:20px;">
                <div class="col-md-2 col-md-offset-1">
                    <span id="photo_prev"><img src="#" width="100px" /></span>
                    <small style="display:block">Passport Sized Photo:</small>
                </div>
                <div class="col-md-2">
                    <span id="lc_prev"><img src="#" width="100px" /></span>
                    <small style="display:block">Leaving Certificate:</small>
                </div>
                <div class="col-md-2">
                    <span id="id_proof_prev"><img src="#" width="100px" /></span>
                    <small style="display:block">ID Proof:</small>
                </div>
                <div class="col-md-2">
                    <span id="marksheets_file_prev"><img src="#" width="100px" /></span>
                    <small style="display:block">Marksheet Pics (Last Exam):</small>
                </div>
                <div class="col-md-2">
                    <span id="fee_receipt_prev"><img src="#" width="100px" /></span>
                    <small style="display:block">College/School Fee Receipt:</small>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="text-align:center;">
                        <button type="button" class="still_edit">EDIT</button>
                        <button type="button" class="confirm_submit">CONFIRM SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="otp_page">
        <div class="centerit">
            <label id="otp_mobile_display"></label><br>
             <label id="otp_email_display"></label><br>
            <label>Enter 4 Digit OTP Received On Your Phone And Email.</label><br>
            <label>OTP Is Valid Upto 10 Minutes.</br> Do Not Press Back Button OR Refresh This Page.</label></br>
            <input type="number" name="otp" pattern="[0-9]{4}" title="Enter 4 digit OTP received on your Email" style="margin:10px;" /><br>
            <button type="button" id="otp_submit" class="btn btn-primary">Verify</button>
            <button type="button" id="otp_back_btn" class="btn btn-primary">Back</button>
        </div>
    </div> -->
<!-- Contact Form JavaScript File -->
  <!-- <script src="../assets-design/frontend/contactform/newcontactform6b4b.js"></script> -->
<!-- csd start -->
  <!-- <script type="text/javascript" src="..\assets-design\frontend\llh\js\csd.js"></script> -->
<!-- end -->

<script type="text/javascript">
  $(document).ready(function() {
    
    $("input[name='dob']").change(function(){
        dob = new Date($(this).val());
        var today = new Date();
        var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
        $("input[name='age']").val(age);
        $(".year").val();
    });
    $(".year").change(function(){
        var year = parseInt($(this).val());
        var dobyear = new Date($("input[name='dob']").val()).getFullYear();
        
        if(year<dobyear+10&&$(this).prop("name")!="ssc_year"){
            alert("Enter valid YEAR! your Birth year is: "+dobyear+" ");
            $(this).val("");
        }
    });
    
 
   $('#state').change(function(){  
          
            var state=$('#state').val();
            $.ajax({
               url: 'assets-design/frontend/llh/js/csd.php',
                method:"POST",
               data:{id:state},
                success: function(response)
                {
                    console.log(response);
                    $('#district').empty();
                    $('#district').append(response);
                    // $('#city').empty();
                }
            });
        });
    
    $('#district').change(function(){  
          
            var district=$('#district').val();
            $.ajax({
               url: 'assets-design/frontend/llh/js/csd2.php',
                method:"POST",
               data:{id:district},
                success: function(response)
                {
                    console.log(response);
                    $('#city').empty();
                    $('#city').append(response);
                }
            });
        });    
        
    // $('#state').val("Gujarat").change();

        // $('#company_main').on('change','.edu_cat',function(){ 
            
        //     var edu_cat=$(this).find(':selected').data('id');
        //     var sub=$(this).parent().next().children('.edu_subcat');
        //     $.ajax({
        //       url: 'https://www.llh.org/welcome/getsubcat/',
        //         method:"POST",
        //       data:{edu_cat:edu_cat},
        //         success: function(response)
        //         {
        //             sub.html('');
        //             sub.append(response);                  
        //         }
        //     });
        // });
        
        // $(document).on('change','.course_name',function(){ 
            
        //     var course_name=$(this).find(':selected').data('id');
            
        //     var college_name=$(this).parent().next().children('.college_name');
            
        //     $.ajax({
        //       url: 'https://www.llh.org/welcome/getcollege_name/',
        //         method:"POST",
        //       data:{edu_cat:course_name},
        //         success: function(response)
        //         {
        //             college_name.html('');
        //             college_name.append(response);
        //         }
        //     });
        // });
      
    //   var marriage_div="<div class='col-lg-6'>"
    //                         +"<label><small>Marriage Certificate (max: 2mb) <span>*</span></small></label>"
    //                         +"<input type='file' name='marriage_certificate' class='form-control' data-rule='doc:2' data-msg='Upload File within specified file size' />"
    //                         +"<div class='validation'></div>"
    //                     +"</div>";
   
    // var company_main=$("#company_main").html();
    // var exam_main=$("#exam_main").html();
    // $("#more_company").click(function(){
    //   $("#company_main").append(company_main);
    // });
    // $("#more_exam").click(function(){
    //   $("#exam_main").append(exam_main);
    // });
    // $("#company_main").on("click",".remove_company",function(){
    //   if($(".remove_company").length>1){
    //     $(this).parent().parent().remove();
        
    //   }
    // });
    // $("#exam_main").on("click",".remove_exam",function(){
    //   if($(".remove_exam").length>1){
    //     $(this).parent().parent().remove();
        
    //   }
    // });
    
    // $("input[type='file']").change(function(){
    //     if($(this).prop("name")=="photo"){
    //         if ((($(this))[0].files[0].size/1024)>800) {
    //           ferror = ierror = true;
    //           $(this).next('.validation').html((ierror ? ($(this).attr('data-msg') !== undefined ? $(this).attr('data-msg') : 'wrong Input') : '')).show('blind');
    //         }else{
    //             $(this).next('.validation').html('');
    //         }
    //     }else{
    //         if ((($(this))[0].files[0].size/1024/1024)>2) {
    //           ferror = ierror = true;
    //           $(this).next('.validation').html((ierror ? ($(this).attr('data-msg') !== undefined ? $(this).attr('data-msg') : 'wrong Input') : '')).show('blind');
    //         }else{
    //             $(this).next('.validation').html('');
    //         }
    //     }
    // });
    // $("select[name='gender'],select[name='marital_status']").change(function(){
    //     var gender=$("select[name='gender']").val();
    //     var marital_status=$("select[name='marital_status']").val();
    //     if(gender=="FEMALE"&&marital_status=="Married"){
    //         $(".marriage_div").html(marriage_div);
    //     }else{
    //         $(".marriage_div").html("");
    //     }
    // });
    
    // $("#otp_back_btn").click(function(){
    //     $(".otp_page").css("display","none");
    // });
    // $("#otp_submit").click(function(){
        
    //       var otp=$("input[name='otp']").val();
    //       var mobile=$("input[name='mobile']").val();
          
    //       $.ajax({
    //            url: 'https://www.llh.org/welcome/otpvarify',
    //             method:"POST",
    //            data:{otp:otp,mobile:mobile},
    //             success: function(response)
    //             {
                    
    //                if(response=="yes")
    //                {  
    //                 $("input[name='confirm_submit']").val("true");
    //                 $("input[name='confirm_otp']").val("true");
                       
    //                   $("#preloader").css("display","block");
    //                    $("form").submit();
                       
    //                }else{
    //                    alert('not_match');
    //                }
                   
    //             }
    //         });
       
    // });
});
</script>    
