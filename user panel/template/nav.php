<header id="header">
       <div class="container-fluid sticky-hide">
           <div class="row top-header">
               <div class="col-md-6 col-sm-6  hidden-xs">
                   <a href="tel:+9109023637226"><i class="fa fa-phone"></i> +91 9023637226</a>
                   &nbsp;
                   &nbsp;
                   &nbsp;
                   <a href="mailto:llhhostel@gmail.com" class="hidden-xs"><i class="fa fa-envelope"></i> llhhostel@gmail.com</a>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12 social" style="text-align:right;">
                   <a href="https://www.facebook.com/profile.php?id=100079265603718"><img src="assets-design/frontend/llh/img/social/fb.png" /></a>
                   <!-- <a href="" target="_blank"><img src="assets-design/frontend/llh/img/social/insta.png" /></a> -->
                   <a href="https://www.youtube.com/channel/UCT8kNbFx0F0PDRLWNpfxCCw"><img src="assets-design/frontend/llh/img/social/youtube.png" /></a>
               </div>
           </div>
            
       </div>
       <div class="container-fluid">
           <div class="row logo">
               <div class="col-md-3 col-sm-3 col-xs-12">
                   <div class="row " style="display:flex;">
                       <div class="col-md-5 col-sm-5 col-xs-3 float-left">
                           <a href="index.php"><img src="assets-design/frontend/llh/img/logo2.png" /></a>
                       </div>
<!-- slider -->
                       <div class="hidden-lg hidden-md hidden-sm col-xs-4 col-md-4 col-sm-4 col-lg-4" style="margin-left: auto;text-align: end;">
                           <div id="mySidenav" class="sidenav">
                              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                              <a href="index.php" class="">Home</a>
                              <a href="index.php?page=about">About Us</a>
                              <button class="dropdown-btn">Student Life
                              <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-container">
                                <a href="index.php?page=hostel_facilities1">Hostel Facilities</a>
                                <button class="dropdown-btn">Events and Functions
                                <i class="fa fa-caret-down"></i>
                                </button>
                                    <div class="dropdown-container">
                                        <a href="index.php?page=photos">Photos</a>
                                        <a href="index.php?page=videos">Videos</a>
                                    </div>
                              </div>
                              <button class="dropdown-btn">Admission
                              <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-container">
                                <?php
                                @$select1="SELECT * FROM `admission` WHERE `email`='".$_SESSION['username']."'";
                                                    $qry1=mysqli_query($con,$select1) or die("faild.......");
                                                    if ($qry1) {
                                                        $user_data1=$qry1->fetch_assoc();
                                                    }
                                                    else{
                                                        echo 'error.........';
                                                    }
                                 if (@$user_data1['status']=='done') {
                                                    }
                                                    else
                                                    {
                                                    ?>
                                                        <a href="index.php?page=admission_form">ADMISSION FORM</a>
                                                    <?php
                                                    }
                                            ?>
                                <!-- payment hidden and visible -->
                                               <?php
                                               if (@$_SESSION['reg_id']=='') {  
                                               }
                                               else
                                               {
                                                    if (@$user_data1['fee_status']=='paid') {    
                                                    }   
                                                    else
                                                    {
                                                        if (@$user_data1['status']=='pending' || @$user_data1['status']=='waiting'  ) {
                                                            
                                                        }
                                                        else{
                                                            ?>
                                                                <a href="index.php?page=pay_fees">PAY FEES ONLINE</a>
                                                        <?php    
                                                        }
                                                ?>      
                                               <?php
                                                    }
                                               }
                                                ?>
                                                <!-- end -->
                                <a href="index.php?page=contactus">Contact Us</a>
                              </div>
                              <!-- profile or login php -->
                       <?php 
                            if (@$_SESSION['reg_id']=='') {
                        ?>
                                <a href="index.php?page=login" class="">Login</a>
                        <?php
                            }
                            else
                            {
                        ?>
                                <a href="index.php?page=profile" class="">Profile</a>
                        <?php
                            }
                       ?>
                        <!-- ends -->
                            </div>

                            <!-- Use any element to open the sidenav -->
                            <span onclick="openNav()"><a class="menu-btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a></span>

<!-- slider end -->
                       </div>
                   </div>
               </div>
               <div class="col-md-9 col-sm-9 hidden-xs text-right">
                   <ul class="pc-nav">
                       <li><a href="index.php" class="">Home</a></li>
                       <li><a href="index.php?page=about" class="">About Us</a></li>
                       <li class="submenu"><a href="#" class="">Student Life</a>
                           <ul>
                               <li><a href="index.php?page=hostel_facilities">Hostel Facilities</a></li>
                               <li class="subsubmenu"><a href="index.php?page=videos">Events and Functions</a>
                                    <!-- <ul>
                                        <li><a href="index.php?page=photos">Photos</a></li>
                                        <li><a href="index.php?page=videos">Videos</a></li>
                                    </ul> -->
                               </li>
                           </ul>
                       </li>

                       <li class="submenu"><a href="javascript:void(0);">Admission</a>
                                           <ul>
                                            <!-- Hidden and visible for admission form..! -->
                                            <?php 
                                                    if (@$user_data1['status']=='done') {
                                                        
                                                    }
                                                    else
                                                    {
                                                    ?>
                                                        <li><a href="index.php?page=admission_form">ADMISSION FORM</a></li>
                                                    <?php
                                                    }
                                            ?>
                                            <!-- end....................................! -->
                                               <!-- payment hidden and visible -->
                                               <?php
                                               if (@$_SESSION['reg_id']=='') {  
                                               }
                                               else
                                               {
                                                    if (@$user_data1['fee_status']=='paid') {    
                                                    }   
                                                    else
                                                    {
                                                        if (@$user_data1['status']=='pending' || @$user_data1['status']=='waiting') {
                                                            
                                                        }
                                                        else{
                                                            ?>
                                                                <li><a href="index.php?page=pay_fees">PAY FEES ONLINE</a></li>
                                                        <?php    
                                                        }
                                                ?>      
                                               <?php
                                                    }
                                               }
                                                ?>
                                                <!-- end -->
                                               <!-- <li><a href="index.php?page=updatedocuments">UPDATE DOCUMENTS</a></li> -->
                                           </ul>
                                       </li>
                       <li><a href="index.php?page=contactus" class="">Contact Us</a></li>
                       <!-- profile or login php -->
                       <?php 
                            if (@$_SESSION['reg_id']=='') {
                        ?>
                                <li><a href="index.php?page=login" class="">Login</a></li>
                        <?php
                            }
                            else
                            {
                        ?>
                                <li><a href="index.php?page=profile" class="">Profile</a></li>
                        <?php
                            }
                       ?>
                        <!-- ends -->
                   </ul>
               </div>
           </div>
       </div>
   </header>
   