<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<body>
  
    <style>
    #banner img{
        height:290px;
    }
    #news{
        padding:40px 0;
    }
    #news img{
        width:100%;
        height:366px;
    }
    #news .news-col{
        padding:0;
        cursor:pointer;
    }
    #news .date{
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: rgb(34 43 52 / 85%);
        color: white;
        width: 80px;
        height: 80px;
        text-align: center;
        transition:0.5s;
    }
    #news .date .month{
        text-transform:uppercase;
        margin-top: 16px;
    }
    #news .date .day{
        font-size: 23px;
        font-weight: 900;
        margin: -5px;
    }
    #news .title{
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        background: #222b34d9;
        color: white;
        padding:15px;
        font-size:16px;
    }
    #news .subtitle{
        /*display:none;*/
        height:0px;
        transition:height 0.8s;
        font-size:14px;
    }
    #news .type{
        background: #222b34;
        color: white;
        position: absolute;
        left: 0;
        top: 0;
        padding: 5px;
        font-weight: 900;
    }
    #news .news-col:hover .subtitle{
        /*display:block;*/
        height:40px;
    }
    #news .news-col:hover .date{
        background-color:#F5702B;
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
        #news img{
            height:auto;
        }
    }
</style>
<section id="banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-6">
				<h1>News <span></span></h1>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
                <img src="assets-design/frontend/llh/img/news/banner.png" />
            </div>
		</div>
	</div>
</section>
<section id="news">
    <div class="container">
        <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6 news-col" onclick="window.location='news_individual/16.html'">
                <div class="type">
                                        <i class="fa fa-newspaper"></i> News
                                    </div>
                <div class="date">
                    <div class="month">Feb</div>
                    <div class="day">21</div>
                </div>
                <img src="https://www.sspkm.org/documents/hostel/news/1613885291_news_documents.jpg"  />
                <div class="title">
                     Admisstion 2020-21                    
                    <div class="subtitle">
                        <hr>
                        At : 10:58 AM                    </div>
                </div>
            </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 news-col" onclick="window.location='news_individual/14.html'">
                <div class="type">
                                        <i class="fa fa-newspaper"></i> News
                                    </div>
                <div class="date">
                    <div class="month">Oct</div>
                    <div class="day">29</div>
                </div>
                <img src="https://www.sspkm.org/documents/hostel/news/1603978504_news_documents.jpg"  />
                <div class="title">
                     ગુજરાતના પૂર્વ મુખ્યમંત્રી કેસુભાઇ પટેલનું નિધન                    
                    <div class="subtitle">
                        <hr>
                        At : 19:05 PM                    </div>
                </div>
            </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 news-col" onclick="window.location='news_individual/13.html'">
                <div class="type">
                                        <i class="fa fa-calendar"></i> Event
                                    </div>
                <div class="date">
                    <div class="month">Jan</div>
                    <div class="day">26</div>
                </div>
                <img src="https://www.sspkm.org/documents/hostel/news/1601899556_news_documents.jpg"  />
                <div class="title">
                     6th Sports Day of SSPKM Concluded with the Celebration of Republic day                    
                    <div class="subtitle">
                        <hr>
                        At : 17:35 PM                    </div>
                </div>
            </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 news-col" onclick="window.location='news_individual/11.html'">
                <div class="type">
                                        <i class="fa fa-newspaper"></i> News
                                    </div>
                <div class="date">
                    <div class="month">Sep</div>
                    <div class="day">01</div>
                </div>
                <img src="https://www.sspkm.org/documents/hostel/news/1599210301_news_documents.jpg"  />
                <div class="title">
                     Hostel Admission 2020                    
                    <div class="subtitle">
                        <hr>
                        At : 14:35 PM                    </div>
                </div>
            </div>
                    </div>
    </div>
</section>    
