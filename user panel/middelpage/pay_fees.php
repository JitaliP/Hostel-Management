<br>
<br>
<br>
<br>
<br>
<br>
</br><!DOCTYPE html>
<html>
<head>
    <!-- new font awsome link -->
                    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- end -->
    <style type="text/css">
        .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.c1 {
  background-color: #f2f2f2;
  /*padding: 5px 20px 15px 20px;*/
  /*border: 1px solid lightgrey;*/
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}


.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
    </style>
</head>
<body>    
<section id="facilities">
	<div class="container">
		<div class="row">
		<div class="col-md-12">
		    <div style="border:1px solid black;margin-top:10px;padding:20px">
		        <h3>NOTICE:</h3>
               <p>જો તમે UPI દ્વારા ફી ભરો છો.</p>
                <p>તમે જે UPI એપ્લિકેશન દ્વારા ફી ભરતા હો તે મોબાઇલના બદલે બીજા મોબાઇલ અથવા લેપટોપ/ કમ્પ્યુટરમાં વેબસાઇટ ખોલો અને ફી ચૂકવો</p>
                <p>If you pay a fee through UPI.</p>
                <p>open the website in another mobile or laptop / computer instead of the mobile through which you pay the fee through UPI application and pay the fee</p>
                </div>
           </div>
				 <div class="col-lg-12">
           <h3>Regular Students Only Pay Fees Online</h3>
           
<div class="form">
              
<form  action="index.php?page=pay_action" method="post" role="form" enctype="multipart/form-data" class="contactForm">
<fieldset>
    <div class="row secborder">
    <div class="row">
        <div class="col-50">    
            <div class="container c1">
                <div class="col-75 "><h2 class="text-center">Fee Status</h2></div>
                <div class="col-75 text-center">
                <label  style="color: green;font-size: 20px;">
                    <?php 
                    $select1="SELECT * FROM `admission` INNER JOIN `state` ON admission.state=state.state_id INNER JOIN  `city` ON admission.city=city.id INNER JOIN  `district` ON admission.dist=district.districtid WHERE admission.email='".$_SESSION['username']."'";
                    $qry1=mysqli_query($con,$select1) or die("faild.......");
                    if ($qry1) {
                        $user_data1=$qry1->fetch_assoc();
                    }
                    else{
                        echo 'error.........';
                    }
                    if($user_data1['fee_status']=='paid'){
                         echo "Approved!";
                    }
                    elseif($user_data1['fee_status']=='pending'){                                        
                         echo "Fee is pending..!";
                    } 
                    else 
                    {
                        echo "Request is Rejected!";
                    }
                    ?>
                </label>
                </div>
            </div>
        </div>    
    </div>
    </div>
<div class="row secborder">
<div class="row">
  <div class="col-75">
    <div class="container c1">
        <div class="row">
          <div class="col-50">
            <h3>Details</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" readonly value="<?php echo $user_data1['fname'].' '.$user_data1['mname'].' '.$user_data1['lname']?>">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" readonly value="<?php echo $user_data1['email']?>">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" readonly value="<?php echo $user_data1['Address']?>">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" readonly value="<?php echo $user_data1['name']?>">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" readonly value="<?php echo $user_data1['state_title']?>">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" readonly value="<?php echo $user_data1['pin']?>">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
            <i class="fa-brands fa-cc-paypal" style="color:darkblue"></i>
            <i class="fa-brands fa-cc-visa" style="color:red"></i>
            <i class="fa-brands fa-cc-amazon-pay" style="color:brown"></i>
            <i class="fa-brands fa-cc-apple-pay" style="color:orange"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" required placeholder="Enter your full name">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" required placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" maxlength="2" name="expmonth" required placeholder="Ex. 01">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" maxlength="4" name="expyear" required placeholder="2024">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" maxlength="3" name="cvv" required placeholder="352">
              </div>
            </div>
          </div>
          <div class="col-50">
                    <div class="text-center">
                        <button type="submit" id="sbmt_btn" class="btn btn-primary" title="Send Message">Submit</button>
                    </div>
          </div>
        </div>
    </fieldset>
</form>            
            </br>
            </br>
            </br>
            </br>
	</div>
</section>
<!-- up button -->
    <button class="btn btn-primary scroll-top" data-scroll="up" type="button">
        <i class="fa fa-chevron-up"></i>
    </button>
<!-- end -->
<script src="../assets-design/frontend/llh/js/main9093.js?v=0.02"></script>
<script src="../../unpkg.com/aos%402.3.0/dist/aos.js"></script>
<script>
    AOS.init({
  duration: 1200,
})
</script>
<script>
    window.onscroll = function() {myFunction()};
    
    var header = document.getElementById("header");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        $(".sticky-hide").fadeOut();
      } else {
        header.classList.remove("sticky");
        $(".sticky-hide").fadeIn();
      }
    }
</script>
</body>
</html>