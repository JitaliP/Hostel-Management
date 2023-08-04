<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</br><!DOCTYPE html>

<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>llh | Student Promotion</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets-design/frontend/llh/img/logo.png">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets-design/frontend/llh/css/styleec74.css?v=0.07" />
    <link rel="stylesheet" type="text/css" href="../assets-design/frontend/llh/css/style-responsivea139.html?v=0.01" />
    
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->


    <link rel="stylesheet" type="text/css" href="../../unpkg.com/aos%402.3.0/dist/aos.css" />
    
    <script src="../assets-design/frontend/llh/js/jquery-3.4.1.js"></script>
    <script src="../../stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <style>
        .footer-column-content{
            width:max-content;
            margin:auto;
        }
        @media screen and (max-width:1252px){
            header .logo img{
                margin-left:0;
            }
        }
        @media screen and (max-width:992px){
            header .logo h3{
                font-size:18px;
            }
            .sticky .logo h3 {
                font-size: 16px;
            }
            header .logo img{
                width:80px;
            }
            .sticky .logo img{
                width:75px;
            }
            header .pc-nav{
                margin:6px 0;
                margin-top:15px;
            }
            .sticky .pc-nav{
                margin-top:10px;
            }
            header .pc-nav li a{
                padding: 1px 0;
                margin: 0 6px;
                font-size: 15px;
            }
        }
        @media screen and (max-width:768px){
            .footer-column-content{
                margin-left:30px;
            }
            .social{
                text-align:center;
            }
        }
        .scroll-top {
            width: 50px;
            height: 50px;
            position: fixed;
            bottom: 25px;
            right: 20px;
            display: none;
            opacity: 0.6;
        }
        .scroll-top i {
            display: inline-block;
            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <div class="banner"></div>
      <div class="container-fluid" style="margin: 50px 0;">

        <!-- <div class="section-header"> -->
          <!-- <h3>Register Yourself</h3> -->
        <!-- </div> -->

        <div class="row wow fadeInUp">
          
          <div class="col-lg-12">
           <h3>Update Hostel Form Document</h3>
           <h4></h4>
            <div class="form">
              
                                           <form  action="https://www.sspkm.org/student/updateDocument/varify" method="post" role="form" enctype="multipart/form-data" class="contactForm">
               <input type="hidden" name="csrf_test_name" value="da99bbfe2517c752f3f68489657c97b3">        
                 
                <fieldset>
                <div class="form-row secborder">
                   <div class="form-group col-lg-3">
                      <label><small>Registration No/Form No<span>*</span></small></label>
                      <input  type="text" name="registration_no" class="form-control" placeholder=""  required />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Mobile No<span>*</span></small></label>
                      <input  type="text" name="mobile_no"  onkeyup="countChar(this)" class="form-control" placeholder=""  required />
                      <div class="validation"></div>
                    </div>
                    
                  
                  
                  <div class="form-group col-lg-3">
                        <label></label>
                        <div class="text-center">
                      <button type="submit" id="sbmt_btn" class="btn btn-primary" title="Send Message">Submit</button>
                  </div>
                    </div>
                  </div>
                  
                </fieldset>
              </form>
              
            </div>
          </div>

        </div>
        </br>
              </br>
              </br>
              </br>
              </br>
              </br>
      </div>
    
<script type="text/javascript">
  $(document).ready(function() {
      
    
    

    
    
    $("input[type='file']").change(function(){
        if($(this).prop("name")=="photo"){
            if ((($(this))[0].files[0].size/1024)>800) {
              ferror = ierror = true;
              $(this).next('.validation').html((ierror ? ($(this).attr('data-msg') !== undefined ? $(this).attr('data-msg') : 'wrong Input') : '')).show('blind');
            }else{
                $(this).next('.validation').html('');
            }
        }else{
            if ((($(this))[0].files[0].size/1024/1024)>2) {
              ferror = ierror = true;
              $(this).next('.validation').html((ierror ? ($(this).attr('data-msg') !== undefined ? $(this).attr('data-msg') : 'wrong Input') : '')).show('blind');
            }else{
                $(this).next('.validation').html('');
            }
        }
    });
   
    
});
</script>
</body>

</html>
    
<button class="btn btn-primary scroll-top" data-scroll="up" type="button">
<i class="fa fa-chevron-up"></i>
</button>
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