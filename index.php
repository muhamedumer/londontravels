<!doctype html>
<html lang="en">
<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/th.jpg" type="image/x-icon">
    
    <!-- Google Fonts -->	
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    
    <!-- Bootstrap Stylesheet -->	
            <link rel="stylesheet" href="css/bootstrap-4.4.1.min.css">
    

    <!-- Sidebar Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
    
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
        
    <!-- Custom Stylesheets -->	
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    
    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">
    
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
</head>


<body id="main-homepage">

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>
        <?php
            include_once("header.php");
            include_once("sidebar.php");
        ?>    
      
        
        
                <!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-1">
        
            <div class="flexslider slider" id="slider-1">
                <ul class="slides">
                    
                    <li class="item-1" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/dubai.jpg) 50% 50%;background-size:cover;
                        height:100%;">
                        <div class=" meta">         
                            <div class="container">
                                <h2>Explore</h2>
                                <h1>Dubai</h1>
                                <a href="#" class="btn btn-default">View More</a>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->
                    
                    <li class="item-2" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/hajj.jpg) 50% 50%;background-size:cover;
                        height:100%;">
                        <div class=" meta">         
                            <div class="container">
                                <h2>Hajj & Umrah </h2>
                                <h1>Package</h1>
                                <a href="#" class="btn btn-default">View More</a>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-2 -->
                   
                </ul>
            </div><!-- end slider -->
            
           
            
        </section><!-- end flexslider-container -->
        
        
        <!--=============== HOTEL OFFERS ===============-->
        <section id="hotel-offers" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Hotels Offers</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                            
                            <div class="item">
                                <div class="main-block hotel-block">
                                    <div class="main-img">
                                        <a href="#">
                                            <img src="images/singapoorhotel.jpg" class="img-fluid" alt="hotel-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end offer-img -->
                                    
                                    <div class="main-info hotel-info">
                                        <div class="arrow">
                                            <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->
                                        
                                        <div class="main-title hotel-title">
                                            <a href="#">Drei Konige Hotel Lucerne</a>
                                            <p>From: Singapore</p>
                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end hotel-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="main-block hotel-block">
                                    <div class="main-img">
                                        <a href="#">
                                            <img src="images/malaysiahotel.jpg" class="img-fluid" alt="hotel-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end offer-img -->
                                    
                                    <div class="main-info hotel-info">
                                        <div class="arrow">
                                            <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->
                                        
                                        <div class="main-title hotel-title">
                                            <a href="#">IBIS KL City Centre</a>
                                            <p>From: Malaysia</p>
                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end hotel-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="main-block hotel-block">
                                    <div class="main-img">
                                        <a href="#">
                                            <img src="images/dubaihotel.jpg" class="img-fluid" alt="hotel-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end offer-img -->
                                    
                                    <div class="main-info hotel-info">
                                        <div class="arrow">
                                            <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->
                                        
                                        <div class="main-title hotel-title">
                                            <a href="#">Time OAK Hotel &Suites</a>
                                            <p>From: Dubai</p>
                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end hotel-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="main-block hotel-block">
                                    <div class="main-img">
                                        <a href="#">
                                            <img src="images/thailandhotel.jpg" class="img-fluid" alt="hotel-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end offer-img -->
                                    
                                    <div class="main-info hotel-info">
                                        <div class="arrow">
                                            <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->
                                        
                                        <div class="main-title hotel-title">
                                            <a href="#">grand pick hotel hatyai</a>
                                            <p>From: Thailand</p>
                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end hotel-block -->
                            </div><!-- end item -->
                            
                        </div><!-- end owl-hotel-offers -->
                        
                        <div class="view-all text-center">
                            <a href="#" class="btn btn-orange">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end hotel-offers -->
        
        <?php
            include_once("featurebanner.php");
        ?>

       
                
        
        <!--=============== TOUR OFFERS ===============-->
        <section id="tour-offers" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Tour Offers</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                         <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">
                            
                            <div class="item">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="#">
                                            <img src="images/sing.jpg" class="img-fluid" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->
                                    
                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$568.00<a href="#" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->
                                        
                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="#">Malaysia-Singapour tour</a>
                                            <p>From: Singapur</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="#">
                                            <img src="images/thai.jpg" class="img-fluid" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->
                                    
                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$745.00<a href="#" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->
                                        
                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="#">Thailand Tour</a>
                                            <p>From: Thailand</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="#">
                                            <img src="images/dubaitour.jpg" class="img-fluid" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->
                                    
                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$459.00<a href="#" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->
                                        
                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="#">Dubai Tour</a>
                                            <p>From: Dubai</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="#">
                                            <img src="images/srilanka.jpg" class="img-fluid" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->
                                    
                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$745.00<a href="#" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->
                                        
                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="#">Srilanka Tour</a>
                                            <p>From: Srilanka</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end item -->
                            
                        </div><!-- end owl-tour-offers -->
                        
                        <div class="view-all text-center">
                            <a href="#" class="btn btn-orange">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end tour-offers -->
                     
        
     
                           
        
        <!--==================== VIDEO BANNER ===================-->
        <section id="video-banner" class="banner-padding back-size"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <h2>Take a Video Tour</h2>
                        <p>If you have a heart & it beats for travel than that heartbeat shouldn't be skipped. You should travel down a special pathway where your heart takes you.</p>
                        <div class="margin-small py-5 mt-5 m-sm-0 "></div>
                                                                
                           <!-- Button trigger modal -->
                        <button type="button" class="btn video-btn" id="play-button" data-toggle="modal" data-src="https://www.youtube.com/embed/VE75g0frvr4" data-target="#myModal"><span><i class="fa fa-play mt-0 m-sm-0"></i></span>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">

                              <div class="modal-body">

                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>        
                                <!-- 16:9 aspect ratio -->

                                <div class="embed-responsive embed-responsive-16by9">
                                  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always">></iframe>
                                </div>

                              </div>

                            </div>
                          </div>
                        </div>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end video-banner -->
        
        
        <!--================= FLIGHT OFFERS =============-->
        <section id="flight-offers" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Flight Offers</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="row">
                        
                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="#">
                                        <div class="flight-img">
                                            <img src="images/ethihad.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->
                                        
                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Dubai</span>|<span class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->
                                            
                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 02-2022 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 03-2022 </span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->
                                            
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->
                            
                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="#">
                                        <div class="flight-img">
                                            <img src="images/malindo.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->
                                        
                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Malaysia</span>|<span class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->
                                            
                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 02-2022 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 03-2022 </span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->
                                            
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->
                            
                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="#">
                                        <div class="flight-img">
                                            <img src="images/flight.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->
                                        
                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Saudi Arabia</span>|<span class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->
                                            
                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 02-2022 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 03-2022</span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->
                                            
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->
                            
                            
                           
                            
                            
                            
                           
                            
                        </div><!-- end row -->
                        
                        <div class="view-all text-center">
                            <a href="#" class="btn btn-orange">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end flight-offers -->
                               
        
        <!--==================== HIGHLIGHTS ====================-->
        <section id="highlights" class="section-padding back-size"> 
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="row">
                            
                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-plane"></i></span>
                                    </div><!-- end h-icon -->
                                    
                                    <div class="h-text">
                                        <span class="numbers">2496</span>
                                        <p>Outstanding Tours</p>
                                    </div><!-- end h-text -->                           
                                </div><!-- end highlight-box -->                       
                            </div><!-- end columns -->
                            
                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-plane"></i></span>
                                    </div><!-- end h-icon -->
                                    
                                    <div class="h-text cruise">
                                        <span class="numbers">196</span>
                                        <p>Hajj & Umra services</p> 
                                    </div><!-- end h-text -->                           
                                </div><!-- end highlight-box -->                       
                            </div><!-- end columns -->
                            
                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-plane"></i></span>
                                    </div><!-- end h-icon -->
                                    
                                    <div class="h-text taxi">
                                        <span class="numbers">200</span>
                                        <p>Luxury tour pack</p>   
                                    </div><!-- end h-text -->                           
                                </div><!-- end highlight-box -->                       
                            </div><!-- end columns -->
                                
                        </div><!-- end row -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end highlights -->
        
             
       
        
        
        <!--==================== TESTIMONIALS ====================-->
        <section id="testimonials" class="section-padding back-size">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading white-heading">
                            <h2>Client Reviews</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
        
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <div class="carousel-inner text-center">
                            
                                <div class="carousel-item active">
                                    <blockquote>Extraordinary experience! The London tours organized our journey in India and they took care of everything, from the transport to the guide. We really appreciated the quality of their services, their reliability and punctuality. We had a thoughtless holiday mostly thanks to them. Highly recommended!!!!</blockquote>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span>
                                    </div><!-- end rating -->
                                    
                                    <small>Hashim</small>
                                </div><!-- end item -->
                                
                                <div class="carousel-item">
                                    <blockquote>My appreciations to entire london travel team for their true professionalism. Their fast growth is purely because of d dedicated n sincere swift services to d clients on time. Congrats to all of u</blockquote>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span>
                                    </div><!-- end rating -->
                                            
                                    <small>Smitha</small>
                                </div><!-- end item -->
                                
                                <div class="carousel-item">
                                    <blockquote>Excellent. Service. London tours and travels arranged for my son Malaysian visa with in 15 minutes by email.I really appreciate their commitment. Earlier they helped me in getting Georgian visa with the shortest possible time. Keep it up</blockquote>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span>
                                    </div><!-- end rating -->
                                    
                                    <small>Samuel</small>
                                </div><!-- end item -->
                                
                            </div><!-- end carousel-inner -->
                            
                            
        
                        </div><!-- end quote-carousel -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end testimonials --> 
                
        <?php
            include_once("footer.php");
        ?>

        
        <div id="popup-ad" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
        
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="popup-ad-text">
                                    <h4>Get</h4>
                                    <h2><span>10%</span> off</h2>
                                    <h4>on all flights booking</h4>
                                    <p>Book cheap flights online with London travels&tours and save on flight bookings</p>
                                    <a href="#" class="btn btn-orange">Book Now</a>
                                </div><!-- end popup-ad-text -->
                            </div><!-- end columns -->
                            
                            <div class="col-12 col-md-6">
                                <div class="popup-ad-img">
                                    <img src="images/flight.jpg" class="img-fluid" /> 
                                </div><!-- end popup-ad-img -->
                            </div><!-- end columns -->
                        </div><!-- end row -->
                        
                    </div><!-- end modal-bpdy -->
                </div><!-- end modal-content -->
            </div><!-- end modal-dialog -->
        </div><!-- end popup-ad -->
    </div>
                        
                        
    <!-- Page Scripts Starts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-4.4.1.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/custom-video.js"></script>
    <script src="js/popup-ad.js"></script>
    <!-- Page Scripts Ends -->
    
</body>
</html>