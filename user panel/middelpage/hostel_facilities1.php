<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<body>
  	<!-- flip card  link-->
  	<link rel="stylesheet"  href="..\User penal\assets-design\frontend\llh\css\flipcard.css">
  	<!-- end -->
    <link rel="stylesheet" href="..\User penal\assets-design\frontend\llh\css\hes-gallery.css">
<style>
	#banner img{
    	height:290px;
	}
	#facilities{
    	padding:40px 0;
	}
	#facilities ul{
    	list-style-type:none;
    	padding:0;
	}
	#facilities ul .facility-head img{
    	width:50px;
    	height:50px;
	}
	#facilities ul .facility-head span{
    	font-size: 20px;
    	margin-left: 20px;
	}
	#facilities ul .facility-head i{
	    opacity:0.5;
	}
	#facilities ul .facility-head span span{
	    font-weight: 900;
	}
	#facilities ul .facility-head .clearfix{
    	clear:right;
	}
	#facilities ul .facility-head button{
    	background-color:transparent;
    	border:none;
    	font-size:35px;
    	color:#385d8a;
	}
	#documentary{
    	background-color:white;
    	text-align:center;
    	padding-bottom: 30px;
	}
	#documentary h3{
    	font-weight: 900;
    	color:#002060;
    	margin-top:55px
	}
	#documentary button{
    	margin-top:20px
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
    }
</style>
<section id="banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-7">
				<h1>Hostel <span>Facilities</span></h1>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-5">
				<img src="assets-design/frontend/llh/img/hostel-facilities/banner.png" />
			</div>
		</div>
	</div>
</section>
<section id="facilities">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<div class="box col-sm-4">
						<div class="imgbox">
							<a href="..\User penal\assets-design\frontend\llh\img\photos\room2.jpg" data-lightbox="mygallery"><img src="..\User penal\assets-design\frontend\llh\img\photos\room2.jpg"  
								class="gallery-item" alt="gallery"></a>
						</div>
						<div class="desc"><b>Rooms</b></div>
					</div>
					<div class="box col-sm-4">
						<div class="imgbox">
							<a href="..\User penal\assets-design\frontend\llh\img\photos\room1.jpg" data-lightbox="mygallery"><img src="..\User penal\assets-design\frontend\llh\img\photos\room1.jpg"  
								class="gallery-item" alt="gallery"></a>
						</div>
						<div class="desc"><b>Rooms</b></div>
					</div>
					<div class="box col-sm-4">
						<div class="imgbox">
							<a href="..\User penal\assets-design\frontend\llh\img\photos\campus.jpg" data-lightbox="mygallery"><img src="..\User penal\assets-design\frontend\llh\img\photos\campus.jpg"  
								class="gallery-item" alt="gallery"></a>
						</div>
						<div class="desc"><b>Campus</b></div>
					</div>
					<div class="box col-sm-4">
						<div class="imgbox">
							<a href="..\User penal\assets-design\frontend\llh\img\photos\lobby.jpg" data-lightbox="mygallery"><img src="..\User penal\assets-design\frontend\llh\img\photos\lobby.jpg"  
								class="gallery-item" alt="gallery"></a>
						</div>
						<div class="desc"><b>Lobby</b></div>
					</div>
					<div class="box col-sm-4">
						<div class="imgbox">
							<a href="..\User penal\assets-design\frontend\llh\img\photos\Wallyball.jpg" data-lightbox="mygallery"><img src="..\User penal\assets-design\frontend\llh\img\photos\wallyball.jpg"  
								class="gallery-item" alt="gallery"></a>
						</div>
						<div class="desc"><b>Wallyball</b></div>
					</div>
					<div class="box col-sm-4">
						<div class="imgbox">
							<a href="..\User penal\assets-design\frontend\llh\img\photos\campus2.jpg" data-lightbox="mygallery"><img src="..\User penal\assets-design\frontend\llh\img\photos\campus2.jpg"  
								class="gallery-item" alt="gallery"></a>
						</div>
						<div class="desc"><b>Wallyball</b></div>
					</div>
					<div class="box col-sm-4">
						<div class="imgbox">
							<a href="..\User penal\assets-design\frontend\llh\img\photos\library.jpg" data-lightbox="mygallery"><img src="..\User penal\assets-design\frontend\llh\img\photos\library.jpg"  
								class="gallery-item" alt="gallery"></a>
						</div>
						<div class="desc"><b>Computer Library</b></div>
					</div>
					<div class="box col-sm-4">
						<div class="imgbox">
							<a href="..\User penal\assets-design\frontend\llh\img\photos\motivational.jpg" data-lightbox="mygallery"><img src="..\User penal\assets-design\frontend\llh\img\photos\motivational.jpg"  
								class="gallery-item" alt="gallery"></a>
						</div>
						<div class="desc"><b>Motivational classis</b></div>
					</div>
					<div class="box col-sm-4">
						<div class="imgbox">
							<a href="..\User penal\assets-design\frontend\llh\img\photos\gym.jpg" data-lightbox="mygallery"><img src="..\User penal\assets-design\frontend\llh\img\photos\gym.jpg"  
								class="gallery-item" alt="gallery"></a>
						</div>
						<div class="desc"><b>Gym</b></div>
					</div>
					<div class="box col-sm-4">
						<div class="imgbox">
							<a href="..\User penal\assets-design\frontend\llh\img\photos\water.jpg" data-lightbox="mygallery"><img src="..\User penal\assets-design\frontend\llh\img\photos\water.jpg"  
								class="gallery-item" alt="gallery"></a>
						</div>
						<div class="desc"><b>Fresh Water</b></div>
					</div>
					<div class="box col-sm-4">
						<div class="imgbox">
							<a href="..\User penal\assets-design\frontend\llh\img\photos\fire.jpg" data-lightbox="mygallery"><img src="..\User penal\assets-design\frontend\llh\img\photos\fire.jpg"  
								class="gallery-item" alt="gallery"></a>
						</div>
						<div class="desc"><b>Fire Safety</b></div>
					</div>
					<div class="box col-sm-4">
						<div class="imgbox">
							<a href="..\User penal\assets-design\frontend\llh\img\photos\library2.jpg" data-lightbox="mygallery"><img src="..\User penal\assets-design\frontend\llh\img\photos\library2.jpg"  
								class="gallery-item" alt="gallery"></a>
						</div>
						<div class="desc"><b>Girls Library</b></div>
					</div>
					<div class="box col-sm-4">
						<div class="imgbox">
							<a href="..\User penal\assets-design\frontend\llh\img\photos\library3.jpg" data-lightbox="mygallery"><img src="..\User penal\assets-design\frontend\llh\img\photos\library3.jpg"  
								class="gallery-item" alt="gallery"></a>
						</div>
						<div class="desc"><b>General Library</b></div>
					</div>
			</div>
		</div>
	</div>

<section id="documentary">
    <div class="container">
        <div class="row">
           <div class="col-md-12 text-center">
               <h2>Hostel <span class="bold900">Documentary</span></h2>
               <hr class="title-underline">
           </div>
       </div>
       <div class="row">
           <div class="col-md-6" data-aos="fade-right">
               <iframe width="560" height="315" src="https://www.youtube.com/embed/0LZfjGTy2j8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
           <div class="col-md-6" data-aos="fade-left">
               <h3>
                   Our Hostels Are Living Laboratories For Sustainability And Climate Change Result.
               </h3>
               <a href="#"><button class="theme-btn" type="button">Get More Information</button></a>
           </div>
       </div>
    </div>
</section>
<script src="../assets-design/frontend/llh/js/hes-gallery.js"></script>
<script>

    HesGallery.setOptions({
        disableScrolling: false,
        hostedStyles: false,
        animations: true,

        showImageCount: true,
        wrapAround: true
    });

</script>
<script>
        $(document).ready(function(){
        $("#view1").collapse('show');
    });
</script>    


