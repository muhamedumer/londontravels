<!doctype html>
<html lang="en">
<head>
    <title>Gallery</title>
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
    
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">


    


</head>


<body>

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>
            
        
        <?php
            include_once("header.php");
            include_once("sidebar.php");
        ?> 
       
        
        
        <!--============== PAGE-COVER ==============-->
        <section class="page-cover" id="cover-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Gallery</h1>
                        
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="gallery-page" class="innerpage-section-padding"> 
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="page-heading">
                                <h2>Beautiful Shots</h2>
                                <hr class="heading-line" />
                            </div><!-- end page-heading -->
                            <?php 
						    include "dbconn.php";
						    ?> 
                            <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12" id="why-us-tabs">
                                    
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item active">
                                            <a href="#tb-happy-client" data-toggle="tab" class="nav-link" ><span><i class="fa fa-camera "></i></span>Photos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tb-satisfaction" data-toggle="tab" class="nav-link"><span><i class="fa fa-video-camera"></i></span>Videos</a>
                                        </li>
                                       
                                    </ul><!-- end nav-tabs -->
                                    </div><!-- end columns -->
                                   
                             
                            </div><!-- end row -->
                            <div class="tab-content">
                                        
                                        <div id="tb-happy-client" class="container tab-pane active">
<div class="row">

<?php
                            $sql=mysqli_query($conn,"select * from tblgallery ORDER BY id DESC LIMIT 9;");
								while($rows = mysqli_fetch_array($sql))
								{   $postID = $rows['id'];
                                    $img_src = 'images/'.$rows['galrypic'];
                                     $img_name = $rows['title'];
                                    ?>
                        
                                    <div class="gallery-product col-lg-4">
                                        <div class="gallery-block">
                                            <div class="gallery-img ">
                                                <img src="<?php echo $img_src; ?>" class="img-fluid" alt="gallery-img" >
                            
                                                <div class="gallery-mask">
                                                    <div class="gallery-title">
                                                            <h2><?php echo $img_name; ?></h2>
                                                           
                                                        </div>  <!-- end gallery-title --> 
                                                    <a href="<?php echo $img_src; ?>" title="Swipe right" class="with-caption image-link"><span><i class="fa fa-arrows-v"></i></span></a>
                                                    
                                                </div><!-- end gallery-mask -->
                                            </div><!-- end gallery-img -->
                                        </div><!-- end gallery-block -->
                                    </div><!-- end gallery-product -->
                                    <?php } ?>
</div>
                                        </div>

                                        <div id="tb-satisfaction" class="container tab-pane fade">
                                        <div class="row">

<?php
                            $sql=mysqli_query($conn,"select * from tblvideo ORDER BY id DESC LIMIT 9;");
								while($rows = mysqli_fetch_array($sql))
								{   $postID = $rows['id'];
                                    $vid_src = 'videos/'.$rows['videopath'];
                                     $img_name = $rows['title'];
                                    ?>
                        
                                    <div class="gallery-product col-lg-6">
                                        <div class="gallery-block">
                                            <div>
                                            <video controls class="iframe-vid">
<source src="<?php echo $vid_src; ?>">
</video>

                                                    
                                               
                                               
                                            </div><!-- end gallery-img -->
                                        </div><!-- end gallery-block -->
                                    </div><!-- end gallery-product -->
                                    <?php } ?>
</div>
                                                                                       
                                        </div><!-- end tb-satisfaction -->
                            </div>
                           


                            <!--
                            <div class="butn text-center">
                                <a href="#" class="btn btn-padding btn-orange">Load More</a>
                            </div>    end butn -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end gallery-page -->
        </section><!-- end innerpage-wrapper -->
        
       <?php  
       include "featurebanner.php";
       include "footer.php";
        
       ?>
        
 
    </div>
    
    
    <!-- Page Scripts Starts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-4.4.1.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-gallery.js"></script>
    <!-- Page Scripts Ends -->
</body>
</html>
