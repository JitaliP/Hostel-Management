<?php

  include "database/dbconnect.php";

  ?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>LLH | Home</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- favicon -->
    <link rel="icon" type="image/png" href="..\User penal\assets-design\frontend\llh\img\favicon\logo2.png">
    <!-- end -->
    <!-- profile page css -->
    <link rel="stylesheet" type="text/css" href="..\User penal\assets-design\frontend\llh\css\profile.css">
    <!-- ends -->
    <!-- slider -->
    <link rel="stylesheet" type="text/css" href="..\User penal\assets-design\frontend\llh\css\slider.css">
    <!-- end -->

    <!-- flip card  link-->
    <link rel="stylesheet"  href="..\User penal\assets-design\frontend\llh\css\flipcard.css">
    <!-- end -->
    
    <!-- login css -->
    <link rel="stylesheet" type="text/css" href="..\User penal\assets-design\frontend\llh\css\logcss.css">
    <!-- login css end -->

    <!-- lightbox link -->
    <link rel="stylesheet" type="text/css" href="..\User penal\assets-design\frontend\llh\css\lightbox.css">
    <script type="text/javascript" src="..\User penal\assets-design\frontend\llh\js\lightbox-plus-jquery.js"></script>
    <!-- end -->

    <!-- gallary -->
    <link rel="stylesheet" type="text/css" href="..\User penal\assets-design\frontend\llh\css\gallery.css">
    <!-- end -->
    
    <!-- main css -->
    <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- end -->
    
    <link rel="stylesheet" type="text/css" href="assets-design/frontend/llh/css/styleec74.css?v=0.07" />
    <link rel="stylesheet" type="text/css" href="assets-design/frontend/llh/css/style-responsivea139.html?v=0.01" />
    
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
  <link
      rel="stylesheet"
      href="assets-design/frontend/slider.css"
    />

    <link rel="stylesheet" type="text/css" href="../unpkg.com/aos%402.3.0/dist/aos.css" />
    
    <script src="assets-design/frontend/llh/js/jquery-3.4.1.js"></script>
    <script src="../stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <!-- Parsley js link....................! -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js"></script>
    <!-- end -->
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
   <!---------------------------------- header Start ---------------------------- -->
   <?php

        include "template/nav.php";
    
   ?>
   <!---------------------------------- header End----------------------------- -->


    <link rel="stylesheet" href="assets-design/frontend/llh/css/hes-gallery.css">
<link rel="stylesheet" type="text/css" href="assets-design/frontend/llh/css/slick/slick.css">
<link rel="stylesheet" type="text/css" href="assets-design/frontend/llh/css/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="assets-design/frontend/llh/css/index307f.css?v=0.04" />
<link rel="stylesheet" type="text/css" href="assets-design/frontend/llh/css/set2a139.css?v=0.01" />
<style>

#header{
    position:fixed;
    width:100%;
}
@media screen and (max-width:768px){
      #about-us .news-col .date{
          margin:auto;
      }
      #header{
        position:relative;
        width:100%;
      }
      #header.sticky{
          position:fixed;
      }
    #slider{
        margin-top:0;
    }
    #about-us .news-col .date .month{
        font-size:18px;
    }
    #about-us .news-col .date{
        width:112px;
    }
}
#facilities a{
    color:black;
}
#facilities a:hover{
    color:black;
}
</style>

<!------------------------- main page start -------------------- -->

<?php
  
  @$page= $_REQUEST['page'];

  if ($page=="" && basename($_SERVER['PHP_SELF'])=='index.php')
  {
    $page = 'home';
  }
  if ($page!="" && file_exists("middelpage/".$page.".php"))
  {
    include ("middelpage/".$page.".php");
  }
  else
  {
    include "middelpage/error.php";
  }

  ?>
  
  
<!-- ------------------main page end ---------------------- -->
<button class="btn btn-primary scroll-top" data-scroll="up" type="button">
<i class="fa fa-chevron-up"></i>
</button>
<!---------------------------------- footer start----------------------------- -->
<?php
  
  include "template/footer.php";

  ?>

<!---------------------------------- footer end----------------------------- -->

</body>
<script src="assets-design/frontend/llh/js/hes-gallery.js"></script>
<!-- slider js -->
<script type="text/javascript">
            /* Set the width of the side navigation to 250px */
            function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
            }

            /* Set the width of the side navigation to 0 */
            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
            }
            
            // slider sub menu's js
            //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;

            for (i = 0; i < dropdown.length; i++) {
              dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                  dropdownContent.style.display = "none";
                } else {
                  dropdownContent.style.display = "block";
                }
              });
            }
            //sub menu ends 
</script>
<!-- end -->

<script>

    HesGallery.setOptions({
        disableScrolling: false,
        hostedStyles: false,
        animations: true,

        showImageCount: true,
        wrapAround: true
    });

</script>
<script src="assets-design/frontend/llh/js/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
   $(function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay:true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
      });
    });
</script>
<script src="../cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script>
    $(document).ready(function(){
        $('.num').counterUp({
          delay: 10,
          time: 1000
        });
        $('.num').addClass('animated fadeInDownBig');
    });
    
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myModal").modal('show');
        $("figcaption").click(function(){
            $(this).parent().children("img").click();
        });
    });
</script>   




<script src="assets-design/frontend/llh/js/main9093.js?v=0.02"></script>
<script src="../unpkg.com/aos%402.3.0/dist/aos.js"></script>
<script>
    AOS.init({
  duration: 1200,
})
</script>
<!-- ------------------------------------------- complain ----------------------------------------->
<script>
  // whene page load hide complain form
  window.onload = function()
  {
    document.getElementById("complain1").style.display = "none";
    document.getElementById("complain2").style.display = "none";
  }
  // show compain form if selected value is complain
  function complain()
  {
    var complain = document.getElementById("complain").value;
    if(complain=="Complaints")
    {
      document.getElementById("complain1").style.display = "block";
      document.getElementById("complain2").style.display = "none";
    }
    else
    {
      document.getElementById("complain2").style.display = "block";
      document.getElementById("complain1").style.display = "none";
    }
  }
  // insert data in databse if submit button is clicked
  function submit()
  {
    var complain = document.getElementById("complain").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("mob").value;
    var sub = document.getElementById("sub").value;
    var sub1 = document.getElementById("sub1").value;
    var detail = document.getElementById("detail").value;
    var detail1 = document.getElementById("detail1").value;
    var date1 = document.getElementById("date1").value;
    var date2 = document.getElementById("date2").value;
    if(complain=="Complaints")
    {
      var data = "complain="+complain+"&name="+name+"&email="+email+"&phone="+phone+"&sub="+sub+"&detail="+detail;      
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("msg").innerHTML = this.responseText;
        }
      };
      xhttp.open("POST", "../User penal/middelpage/complain_q.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(data);
    }
    else
    {
      var data = "complain="+complain+"&name="+name+"&email="+email+"&phone="+phone+"&sub1="+sub1+"&detail1="+detail1+"&date1="+date1+"&date2="+date2;      
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("msg").innerHTML = this.responseText;
        }
      };
      xhttp.open("POST", "../User penal/middelpage/complain_q.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(data);
    }
  }
</script>
<!------------------------------------------------- ends -------------------------------------------------->
<!-- ---------------------------------------------date validation-------------------------------------- -->
<script>
 //on date change event check a date is not a less then today
  function checkDate()
  {
    var date1 = document.getElementById("date1").value;
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10)
    {
        dd='0'+dd
    } 
    if(mm<10)
    {
        mm='0'+mm
    } 
    today = yyyy+'-'+mm+'-'+dd;
    if(date1<today)
    {
      document.getElementById("date1").value = today;
    } 
  }
  // checking a date2 is not less then date1
  function checkDate2()
  {
    var date1 = document.getElementById("date1").value;
    var date2 = document.getElementById("date2").value;
    if(date2<date1)
    {
      document.getElementById("date2").value = date1;
    }
  }
</script> 
<!-- ------------------------------------ends--------------------------------------------- -->
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


</html>