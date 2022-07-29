<?php
if(!isset( $_SESSION['pkgid'])){
session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


  
            
            
        <!--======== SEARCH-OVERLAY =========-->       
        <div id="myOverlay" class="overlay">
            <span class="closebtn" onClick="closeSearch()" title="Close Overlay">×</span>
            <div class="overlay-content">
                
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="float-left" type="text" placeholder="Search.." name="search">
                                <button class="float-left" type="submit"><i class="fa fa-search"></i></button>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->
        
        
        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><span><i class="fa fa-map-marker"></i></span>East Road, Changaramkulam
                                    Malappuram </li>
                                <li class="list-inline-item"><span><i class="fa fa-phone"></i></span>04942 65 66 96</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    <div class="col-12 col-md-6">
                        <div id="links">
                            <?php 
                           
                            if(isset($_SESSION['userid']))
                            {
                            ?>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href=admin/adminhome.php><span><i class="fa fa-home"></i></span>My Account</a></li>
                               
                               
                            </ul>
                           <?php } ?>
                        </div><!-- end links -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->
        
        <nav class="navbar navbar-expand-xl sticky-top navbar-custom main-navbar p-1" id="mynavbar-1">
            <div class="container">
        
        <!--logo text changed to image-->
                <a href="#" class="navbar-brand py-1 m-0">
                    <img src="images/logo.jpg" style="height: 65px; "></a>
                <div class="header-search d-xl-none my-auto ml-auto py-1">
                    <a href="#" class="search-button" onClick="openSearch()"><span><i class="fa fa-search"></i></span></a>
                </div>
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="sidebarCollapse">
                    <i class="fa fa-navicon py-1"></i>
                </button>
        
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="navbar-nav ml-auto navbar-search-link">
                        <!--<li class="nav-item dropdown active">-->
                        <!--    <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home<span><i class="fa fa-angle-down "></i></span></a>-->
                        <!--    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
                        <!--        <li class="active"><a href="index.html" class="dropdown-item">Main Homepage</a></li>-->
                        <!--        <li><a class="dropdown-item" href="flight-homepage.html">Flight Homepage</a></li>-->
                        <!--        <li><a class="dropdown-item" href="hotel-homepage.html">Hotel Homepage</a></li>-->
                        <!--        <li><a class="dropdown-item" href="tour-homepage.html">Tour Homepage</a></li>-->
                        <!--        <li><a class="dropdown-item" href="cruise-homepage.html">Cruise Homepage</a></li>-->
                        <!--        <li><a class="dropdown-item" href="car-homepage.html">Car Homepage</a></li>-->
                        <!--        <li><a class="dropdown-item" href="landing-page.html">Landing Page</a></li>-->
                        <!--        <li><a class="dropdown-item" href="travel-agency-homepage.html">Travel Agency Page</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        
                        <li class="nav-item">
                            <a href="index.php" class="nav-link" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                       
                        <li class="nav-item">
                            <a href="about-us.php" class="nav-link" role="button" aria-haspopup="true" aria-expanded="false">About_Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Services<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="visa.php">Visa Assistance</a></li>
                                <li><a class="dropdown-item" href="ticket.php">Air Ticketing</a></li>
                                <li><a class="dropdown-item" href="otherservice.php">Other Services</a></li>
                                
                            </ul>
                        </li>
                       
                        <li class="nav-item">
                            <a href="holidays.php" class="nav-link" role="button" aria-haspopup="true" aria-expanded="false">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a href="gallery.php" class="nav-link" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact-us.php" class="nav-link" role="button" aria-haspopup="true" aria-expanded="false">Contact_Us</a>
                        </li>
                        
            
                        
                            
                        <li class="dropdown-item search-btn">
                            <a href="#" class="search-button" onClick="openSearch()"><span><i class="fa fa-search"></i></span></a>
                        </li>
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- End container -->
        </nav>       
</body>
</html>
