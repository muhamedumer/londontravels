<!doctype html>
<html lang="en">
<head>
    <title>Services </title>
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
</head>


<body>

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>
            
            
        <?php
            include_once("header.php");
            include_once("sidebar.php");
        ?>  
        
        
        <!--=============== PAGE-COVER ==============-->
        <section class="page-cover" id="cover-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Services </h1>
                        
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="services-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-heading">
                                <h2>Our Services</h2>
                                <hr class="heading-line" />
                            </div><!-- end page-heading -->
                            <?php 
						    include "dbconn.php";
						    ?>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="service-block-1">
                                        <div class="service-icon-1">
                                            <span><i class="fa fa-globe"></i></span>
                                        </div><!-- end service-icon-1 -->
                                        <?php
								$sql=mysqli_query($conn,"select * from tblservice where id='1';");
								while($rows = mysqli_fetch_array($sql))
								{ ?>
                                        <div class="service-text-1">
                                            <h3><?php echo $rows['title']; ?></h3>
                                            <p><?php echo $rows['descr']; ?></p>
                                        </div><!-- end service-text-1 -->
                                    <?php } ?>    
                                    </div><!-- end service-block-1 -->
                                </div><!-- end columns -->
                                
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="service-block-1">
                                        <div class="service-icon-1">
                                            <span><i class="fa fa-building"></i></span>
                                        </div><!-- end service-icon-1 -->
                                        <?php
								$sql=mysqli_query($conn,"select * from tblservice where id='2';");
								while($rows = mysqli_fetch_array($sql))
								{ ?>
                                        <div class="service-text-1">
                                        <h3><?php echo $rows['title']; ?></h3>
                                            <p><?php echo $rows['descr']; ?></p>
                                        </div><!-- end service-text-1 -->
                                        <?php } ?>
                                    </div><!-- end service-block-1 -->
                                </div><!-- end columns -->
                                
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="service-block-1">
                                        <div class="service-icon-1">
                                            <span><i class="fa fa-dollar"></i></span>
                                        </div><!-- end service-icon-1 -->
                                        <?php
								$sql=mysqli_query($conn,"select * from tblservice where id='3';");
								while($rows = mysqli_fetch_array($sql))
								{ ?>
                                        <div class="service-text-1">
                                        <h3><?php echo $rows['title']; ?></h3>
                                            <p><?php echo $rows['descr']; ?></p>
                                        </div><!-- end service-text-1 -->
                                        <?php } ?>
                                    </div><!-- end service-block-1 -->
                                </div><!-- end columns -->
                                
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="service-block-1">
                                        <div class="service-icon-1">
                                            <span><i class="fa fa-book"></i></span>
                                        </div><!-- end service-icon-1 -->
                                        <?php
								$sql=mysqli_query($conn,"select * from tblservice where id='4';");
								while($rows = mysqli_fetch_array($sql))
								{ ?> 
                                        <div class="service-text-1">
                                        <h3><?php echo $rows['title']; ?></h3>
                                            <p><?php echo $rows['descr']; ?></p>
                                        </div><!-- end service-text-1 -->
                                        <?php } ?>
                                    </div><!-- end service-block-1 -->
                                </div><!-- end columns -->
                                
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="service-block-1">
                                        <div class="service-icon-1">
                                            <span><i class="fa fa-plane"></i></span>
                                        </div><!-- end service-icon-1 -->
                                        <?php
								$sql=mysqli_query($conn,"select * from tblservice where id='5';");
								while($rows = mysqli_fetch_array($sql))
								{ ?>
                                        <div class="service-text-1">
                                        <h3><?php echo $rows['title']; ?></h3>
                                            <p><?php echo $rows['descr']; ?></p>
                                        </div><!-- end service-text-1 -->
                                        <?php } ?>
                                    </div><!-- end service-block-1 -->
                                </div><!-- end columns -->
                                
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="service-block-1">
                                        <div class="service-icon-1">
                                            <span><i class="fa fa-users"></i></span>
                                        </div><!-- end service-icon-1 -->
                                        <?php
								$sql=mysqli_query($conn,"select * from tblservice where id='6';");
								while($rows = mysqli_fetch_array($sql))
								{ ?>
                                        <div class="service-text-1">
                                        <h3><?php echo $rows['title']; ?></h3>
                                            <p><?php echo $rows['descr']; ?></p>
                                        </div><!-- end service-text-1 -->
                                        <?php } ?>
                                    </div><!-- end service-block-1 -->
                                </div><!-- end columns -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="service-block-1">
                                        <div class="service-icon-1">
                                            <span><i class="fa fa-suitcase"></i></span>
                                        </div><!-- end service-icon-1 -->
                                        <?php
								$sql=mysqli_query($conn,"select * from tblservice where id='7';");
								while($rows = mysqli_fetch_array($sql))
								{ ?>    
                                        <div class="service-text-1">
                                        <h3><?php echo $rows['title']; ?></h3>
                                            <p><?php echo $rows['descr']; ?></p>
                                        </div><!-- end service-text-1 -->
                                        <?php } ?>
                                    </div><!-- end service-block-1 -->
                                </div><!-- end columns -->
                                
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="service-block-1">
                                        <div class="service-icon-1">
                                            <span><i class="fa fa-desktop"></i></span>
                                        </div><!-- end service-icon-1 -->
                                        <?php
								$sql=mysqli_query($conn,"select * from tblservice where id='8';");
								while($rows = mysqli_fetch_array($sql))
								{ ?>
                                        <div class="service-text-1">
                                        <h3><?php echo $rows['title']; ?></h3>
                                            <p><?php echo $rows['descr']; ?></p>
                                        </div><!-- end service-text-1 -->
                                        <?php } ?>
                                    </div><!-- end service-block-1 -->
                                </div><!-- end columns -->
                                
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="service-block-1">
                                        <div class="service-icon-1">
                                            <span><i class="fa fa-bus"></i></span>
                                        </div><!-- end service-icon-1 -->
                                        <?php
								$sql=mysqli_query($conn,"select * from tblservice where id='9';");
								while($rows = mysqli_fetch_array($sql))
								{ ?>
                                        <div class="service-text-1">
                                        <h3><?php echo $rows['title']; ?></h3>
                                            <p><?php echo $rows['descr']; ?></p>
                                        </div><!-- end service-text-1 -->
                                        <?php } ?>
                                    </div><!-- end service-block-1 -->
                                </div><!-- end columns -->
                            </div><!-- end row -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->   
            </div><!-- end services-section -->
            
            <div id="search-banner" class="innerpage-103-pd-tb back-size"> 
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-8 col-xl-7">
                            <p>A perfect place for searching your</p>
                            <h2>Desired Tour & Flight</h2>
                            <p>London tours and travel has expertise of 10+ years in the Tourism Industry. we stay in line with travel trends & connect consumers, businesses worldwide.</p>
                            <a href="#" class="btn btn-black btn-lg">Search Now</a>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end search-banner -->
            
           
        
        </section><!-- end innerpage-wrapper -->
        
        
        
        
        <?php
            include_once("featurebanner.php");
            include_once("footer.php");
        ?>

    </div>
    
    
    <!-- Page Scripts Starts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-4.4.1.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <!-- Page Scripts Ends -->
</body>
</html>
