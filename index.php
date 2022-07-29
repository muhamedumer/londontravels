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
    <link href="css/mystyle.css" rel="stylesheet">

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
                                <a href="holidays.php" class="btn btn-default">View More</a>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->
                    
                    <li class="item-2" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/hajj.jpg) 50% 50%;background-size:cover;
                        height:100%;">
                        <div class=" meta">         
                            <div class="container">
                                <h2>Hajj & Umrah </h2>
                                <h1>Package</h1>
                                <a href="holidays.php" class="btn btn-default">View More</a>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-2 --> 
                    <li>
      <video src="images/videobg.mp4" autoplay loop muted width="100%" height="100%" allowFullScreen> </video>
    </li>
                  
                </ul>
               
            </div><!-- end slider -->
            
            
            
        </section><!-- end flexslider-container -->
        
        
        
        <!--=============== Package OFFERS ===============-->
        <section id="hotel-offers" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Best Package</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                        <?php
                                include "dbconn.php";
                            $sql=mysqli_query($conn,"select * from bestpkg order by id desc;");
								while($rows = mysqli_fetch_array($sql))

								{ 
                                    $id=$rows['pkgid'];
                                    $img1_src = 'images/'.$rows['mainpic'];
                                    
                                    $pkgname=$rows['pkgname'];
                                    $price=$rows['price'];
                                    $avgrating=$rows['avgrating'];
 ?>
                            <div class="item">
                                <div class="main-block hotel-block">
                                    <div class="main-img">
                                        <a href="packagedetail.php?id=<?php echo $id; ?>">
                                            <img src="<?php echo $img1_src; ?>" class="img-fluid" alt="hotel-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price"><?php echo $price; ?> Rs<span class="divider">|</span></li>
                                                <li class="list-inline-item rating">
                                               <?php
                                    $stars = "";
                                   
                                    for ($i = 1; $i <= 5; $i++) { 
                                     if($i <= $avgrating )
                                    echo "<span class='stars'><i class='fa fa-star'></i></span> ";
                                    else  echo "<span class='nullstars'><i class='fa fa-star'></i></span> ";
                                    } 
                                    ?>
                                                
                                                
                                                
                                                  
                                                </li>



                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end offer-img -->
                                    
                                    <div class="main-info hotel-info">
                                        <div class="arrow">
                                            <a href="packagedetail.php?id=<?php echo $id; ?>"><span><i class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->
                                        
                                        <div class="main-title hotel-title">
                                            <a href="packagedetail.php?id=<?php echo $id; ?>"><?php echo $pkgname; ?></a>

                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end hotel-block -->
                            </div><!-- end item -->
                            
<?php } ?>
                          
                            
                            
                            
                        </div><!-- end owl-hotel-offers -->
                        
                        <div class="view-all text-center">
                            <a href="holidays.php" class="btn btn-orange">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end hotel-offers -->
        <?php 
			include "dbconn.php";
		
                            $sql=mysqli_query($conn,"select * from tblnews order by id desc;"); ?>
							
                                <div class="newsletter">
   
                                    <marquee behavior="scroll" direction="left" scrollamount="20"> 
                                        <?php 	while($rows = mysqli_fetch_array($sql))
								{ ?>
                                        <a style="color: black;" href="<?php echo $rows['link']; ?>"><?php echo $rows['news']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php } ?>
                                    </marquee>
                                </div>
                                
             <?php
            include_once("featurebanner.php");
            ?>
        
        <!--==================== HIGHLIGHTS ====================-->
        <?php 
			include "dbconn.php";
		?>
        <section id="highlights" class="section-padding back-size"> 
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="row">
                        <?php
                            $sql=mysqli_query($conn,"select * from tblhlights;");
								while($rows = mysqli_fetch_array($sql))
								{ ?>
                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-plane"></i></span>
                                    </div><!-- end h-icon -->
                                    
                                    <div class="h-text">
                                        <span class="numbers"><?php echo $rows['count']; ?></span>
                                        <p><?php echo $rows['service']; ?></p>
                                    </div><!-- end h-text -->                           
                                </div><!-- end highlight-box -->                       
                            </div><!-- end columns -->
                            <?php } ?>
                           
                                
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
                           
                            <?php
                            $sql=mysqli_query($conn,"Select * From bestreview Order By id Desc limit 1");
								while($rows = mysqli_fetch_array($sql))
								{
                                    $first=$rows['id'];
                                     ?>
                                 <div class="carousel-item active">
                                    <blockquote><?php echo $rows['comment']; ?></blockquote>
                                    <?php
                                    $stars = "";
                                   
                                    for ($i = 1; $i <= 5; $i++) { 
                                     if($i <= $rows['rating'] )
                                    echo "<span class='stars'><i class='fa fa-star'></i></span> ";
                                    else  echo "<span class='nullstars'><i class='fa fa-star'></i></span> ";
                                    } 
                                    ?><div class="rating">
                                        
                                    </div>
                                     <small><?php echo $rows['username']; ?></small>
                                    </div><!-- end item -->
                                    
                                <?php } ?>
                                <?php
                              
                                $sql=mysqli_query($conn, "select * from bestreview where id !=$first");
                                while($rows = mysqli_fetch_array($sql))
								
                                {
                                    
                                     ?>
                                 <div class="carousel-item">
                                    <blockquote><?php echo $rows['comment']; ?></blockquote>
                                    <?php
                                    $stars = "";
                                   
                                    for ($i = 1; $i <= 5; $i++) { 
                                     if($i <= $rows['rating'] )
                                    echo "<span class='stars'><i class='fa fa-star'></i></span> ";
                                    else  echo "<span class='nullstars'><i class='fa fa-star'></i></span> ";
                                    } 
                                    ?>
                                    <div class="rating">
                                        
                                    </div>
                                    
                                    <small><?php echo $rows['username']; ?></small>
                                    </div><!-- end item -->
                                    
                                <?php } 
                                ?>
                                
                                    
                                
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