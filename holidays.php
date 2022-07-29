<!doctype html>
<html lang="en">
<head>
    <title>Holidays</title>
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
    <link href="css/mystyle.css" rel="stylesheet">
    
</head>


<body>

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>
            
        <?php
        include_once("header.php");
        include_once("sidebar.php");
    ?>  
      
        
        <!--================= PAGE-COVER =================-->
        <section class="page-cover" id="cover-holiday">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Beautiful Holiday Trips</h1>
                        
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <?php 
			include "dbconn.php";
		?> 
        <section class="innerpage-wrapper">
            <div id="holiday-trips" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                            <?php 
                            $sql1=mysqli_query($conn,"select * from tblpackage where category='Domestic'");
                            $res1=mysqli_num_rows($sql1);
                            $sql2=mysqli_query($conn,"select * from tblpackage where category='International'");
                            $res2=mysqli_num_rows($sql2);
                            ?>
                            <div class="trip-block mg-bot-60">
                                <div class="page-heading trip-heading">
                                    <h2><span><i class="fa fa-map-marker"></i></span>Inside India trip</h2>
                                    <p><?php echo $res1; ?> Holiday Places</p>
                                </div><!-- end page-heading -->
                                
                                <div class="row">

<?php
                            $sql=mysqli_query($conn,"select * from tblpackage where category='Domestic' ORDER BY id DESC;");
								while($rows = mysqli_fetch_array($sql))
								{   $id= $rows['id'];
                                    $img_src = 'images/'.$rows['mainimage'];
                                     $img_name = $rows['pkgname'];
                                     $price=$rows['price'];
                                     $avgrating=$rows['avgrating'];
                                    ?>
                        <div class="gallery-product col-lg-4">
                                        <div class="gallery-block">
                                            <div class="gallery-img ">
                                            <a href="packagedetail.php?id=<?php echo $id; ?>"> <img src="<?php echo $img_src; ?>" class="img-fluid" alt="gallery-img" ></a>
                            
                                               
                                            </div><!-- end gallery-img -->
                                            <div class="offer-price-2">
                                                <ul class="list-unstyled">
                                                    <li class="price">Rs <?php echo $price; ?><a href="#" ><span class="arrow"></span></a></li>
                                                </ul>
                                            </div><!-- end offer-price-2 -->
                                            <div class="main-info tour-info pkgTitle">
                                                <div class="main-title tour-title">
                                                <a href="packagedetail.php?id=<?php echo $id; ?>"><?php echo $img_name; ?></a>
                                                   
                                                    <div class="rating">
                                                    <?php
                                    $stars = "";
                                   
                                    for ($i = 1; $i <= 5; $i++) { 
                                     if($i <= $avgrating )
                                    echo "<span class='stars'><i class='fa fa-star'></i></span> ";
                                    else  echo "<span class='nullstars'><i class='fa fa-star'></i></span> ";
                                    } 
                                    ?>
                                                    </div>
                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div><!-- end gallery-block -->
                                    </div><!-- end gallery-product -->
                      
                                    <?php } ?>
</div>
                           </div><!-- end trip-block -->
                           
                           <div class="trip-block mg-bot-60">
                                <div class="page-heading trip-heading">
                                    <h2><span><i class="fa fa-map-marker"></i></span>International Packages</h2>
                                    <p><?php echo $res2; ?> Holiday Places</p>
                                </div><!-- end page-heading -->
                                
                                <div class="row">

<?php
                            $sql=mysqli_query($conn,"select * from tblpackage where category='International' ORDER BY id DESC;");
								while($rows = mysqli_fetch_array($sql))
								{   $id= $rows['id'];
                                    $img_src = 'images/'.$rows['mainimage'];
                                     $img_name = $rows['pkgname'];
                                     $price=$rows['price'];
                                     $avgrating=$rows['avgrating'];
                                    ?>
                        <div class="gallery-product col-lg-4">
                                        <div class="gallery-block">
                                            <div class="gallery-img ">
                                            <a href="packagedetail.php?id=<?php echo $id; ?>"> <img src="<?php echo $img_src; ?>" class="img-fluid" alt="gallery-img" ></a>
                            
                                               
                                            </div><!-- end gallery-img -->
                                            <div class="offer-price-2">
                                                <ul class="list-unstyled">
                                                    <li class="price">Rs <?php echo $price; ?><a href="#" ><span class="arrow"></span></a></li>
                                                </ul>
                                            </div><!-- end offer-price-2 -->
                                            <div class="main-info tour-info pkgTitle">
                                                <div class="main-title tour-title">
                                                <a href="packagedetail.php?id=<?php echo $id; ?>"><?php echo $img_name; ?></a>
                                                   
                                                    <div class="rating">
                                                    <?php
                                    $stars = "";
                                   
                                    for ($i = 1; $i <= 5; $i++) { 
                                     if($i <= $avgrating )
                                    echo "<span class='stars'><i class='fa fa-star'></i></span> ";
                                    else  echo "<span class='nullstars'><i class='fa fa-star'></i></span> ";
                                    } 
                                    ?>
                                                    </div>
                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div><!-- end gallery-block -->
                                    </div><!-- end gallery-product -->
                      
                                    <?php } ?>
</div>
                           </div><!-- end trip-block -->
                           
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->          
            </div><!-- end holidays -->
            
        
                        
        </section><!-- end innerpage-wrapper -->
        
        
        <?php
            include_once("footer.php");
        ?>

      
        
     </div><!-- end edit-card -->
    </div>
    
    
    <!-- Page Scripts Starts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-4.4.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-owl.js"></script>
    <!-- Page Scripts Ends -->
</body>
</html>
