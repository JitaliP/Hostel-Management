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
  if (@$_REQUEST['id']=="")
  {
    $action="insert";
  }
  else
  {
    $action="update";
    
  }
?>

<body>
 
    <style>
    #details{
        padding:40px 0;
    }
    #details h1,#details h4{
        font-weight:900;
        color: black;
    }
    #details i{
        font-size:60px;
        color:#222B34;
    }
    #details p{
        font-size:16x;
        color: black;
    }
    #maps{
        padding:40px 0;
    }
    #maps h3{
        margin-bottom:30px;
    }
    #maps input{
        margin-bottom:30px;
    }
    @media screen and (max-width:768px){
        #banner{
            height: 90px;
        }
        #banner h1{
            margin-top: 30px;
            font-size: 25px;
        }
        #banner img{
            height:90px;
        }
    }
</style>
<section id="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact <span>Us</span></h1>
            </div>
        </div>
    </div>
</section>
<section id="details">
    <div class="container-fluid">
        <div class="row text-center" >
             <div class="col-md-4 col-sm-4"><a href="https://goo.gl/maps/iX61XifsefqojTYi9">
                <i class="fa fa-map-marker"></i>
                <h2 style="color:black;">Address</h2>
                <h4>LLH Hostel</h4>
                <p>Live LIke home , Near new IIM rd, Vastrapur, Ahmedabad, Gujarat-380009</p></a>
            </div>
            <div class="col-md-4 col-sm-4">
               <i class="fa fa-phone"></i>
                <h2>Phone No.</h2>
                <p>
                   <a href="tel:+9109023637226" style="color:black;"> +91 90236 37226<br></a>
                   <a href="tel:+9109998551883" style="color:black";> +91 63520 96322<br></a>
                   </p>
               </div>

            <div class="col-md-4 col-sm-4">
                <a href="mailto:llhhostel@gmail.com">
                <i class="fa fa-envelope"></i>
                <h2 style="color:black;">E-Mail Id</h2>
                <p style="color:black;">llhhostel@gmail.com</p></a>
            </div> 
        </div>
    </div>
</section>
<section id="maps">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-8 col-sm-8">
                <h3>LLH Hostel Map</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.718594712607!2d72.52884751544549!3d23.03410238494718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84c81749330b%3A0x2f997bf6eedcba4!2sLJ%20College%20of%20Computer%20Applications!5e0!3m2!1sen!2sin!4v1642938072622!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-4 col-sm-4">
                <h3>Inquiry Now</h3>
                <form action="index.php?page=contact_action" method="POST">
                   <div class="form-group"> 
                <input type="hidden" name="id" value="<?php echo $_REQUEST['id']  ?>">
                <input type="hidden" name="action" value="<?php echo $action; ?>"></div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <input type="tel" name="mobile" class="form-control" placeholder="Mobile No." />
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="Comments"></textarea>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary" name="submit" />
                </form>
            </div>
        </div>
    </div>
</section>    
