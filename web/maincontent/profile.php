<br>
<br>
<br>
<body>
<section id="container">

<!--header start-->
<?php include_once'php/header.php' ?>
<!--header end-->

<!--sidebar start-->
<?php include_once 'php/slidermenu.php'?>
<!--sidebar end-->
<br>
<br>

<div class="row">
  <div class="col-md-12" style="text-align: -webkit-center;">
    <h2> Admin Profile </h2>
  </div>
</div>


<?php  $select="SELECT * FROM `admin` WHERE admin.id='".$_SESSION['admin_id']."'";
        $qry=mysqli_query($con,$select) or die("faild....................");

        if ($qry) {
         $row=$qry->fetch_assoc(); //mysqli_fetch_assoc($qry);
        }
        else{
            echo "error...........";
        }
    ?>    
<!-- New Profile starts here..............! -->
<div class="container-flued">
    <div class="main-body">
          <div class="row gutters-sm" >
            <div class="col-md-4 mb-3" >
              <div class="card" >
                <div class="card-body" >
                  <div class="d-flex flex-column align-items-center text-center" >
                    <?php
                    if($row['Profile'] != ''){
                    ?>
                    <img class="rounded-circle" style="width: 170px; height: 200px;" src="..\web\images\llh\<?php echo $row['Profile'];?> ">
                    <?php } 
                    else {
                    ?>
                    <img class="rounded-circle mt-5" style=" width: 150px; " src="..\web\images\1.png">
                    <?php } ?>

                    <div class="mt-3">
                      <h4><?php echo $row['name'] ?></h4>
                      <p class="text-secondary mb-1"><?php echo $row['email'];?></p>
                      <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                      <!-- <button class="btn btn-primary">Follow</button> -->
                      <button class="btn btn-outline-primary"><a href="change_photo.php?action=update&id=<?php echo $row['id'];?>">Change Photo</a> </button>
                    </div>
                  </div>
                </div>
              </div>
             </div>
            <div class="col-md-8">
              <div class="card mb-3" ><br>
                <div class="card-body">
                  <div class="row">
                    

                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['name']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['email']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['DOB'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['phone'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $row['address'];?>
                      </div>
                  </div>
                  <hr>
                </div>
              </div>  
            </div>
          </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <!-- footer start -->
    <?php include_once'php/footer.php' ?>
    <!-- footer end -->
</body>
</html>