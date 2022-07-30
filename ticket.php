<!doctype html>
<html lang="en">
<head>
    <title>Flight Search</title>
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
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">
</head>


<body>

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>
            
        <?php
            include_once("header.php");
            include_once("sidebar.php");
        ?>    
         
        <!--======================= PAGE-COVER =====================-->
        <section class="page-cover back-size" id="cover-flight-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Flight Search</h1>
                        
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="search-result-page" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 content-side">
                            <div class="page-search-form">
                           
                            
                                <h2>Flight Information <span> <i class="fa fa-plane"></i></span></h2>
                                
                                <ul class="nav nav-tabs">
                                    <li class="nav-item active"><a class="nav-link" href="#tab-round-trip" data-toggle="tab">Round Trip</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab-one-way" data-toggle="tab">One Way</a></li>
                                </ul>
                                
                                <div class="tab-content">
                                    <div id="tab-round-trip" class="tab-pane in active">
                                        

                                    <form name="f1" class="pg-search-form" action = "sendquote.php" method = "POST" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-map-marker"></i></span>From</label>
                                                        <input type="text" name="from1" class="form-control" placeholder="Destination, City, Country" required/>
                                                    </div>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-map-marker"></i></span>To</label>
                                                        <input type="text" name="dest1" class="form-control" placeholder="Destination, City, Country"required/>
                                                    </div>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                                    <div class="row">
                                                        <div class="col-6 col-md-6">
                                                            <div class="form-group">
                                                                <label><span><i class="fa fa-calendar"></i></span>Departing</label>
                                                                <input type="date" name="dep1" class="form-control dpd1" placeholder="Date" required/>
                                                            </div>
                                                        </div><!-- end columns -->
                                                        
                                                        <div class="col-6 col-md-6">
                                                            <div class="form-group">
                                                                <label><span><i class="fa fa-calendar"></i></span>Returning</label>
                                                                <input type="date" name="ret1" class="form-control dpd2" placeholder="Date" required/>
                                                            </div>
                                                        </div><!-- end columns -->
                                                    </div>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-12 col-md-12 col-lg-2 col-xl-2">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-users"></i></span>Passengers</label>
                                                        <input type="number" name="count1" class="form-control" placeholder="Total" min="0" required/>                                                     </div>
                                                </div><!-- end columns -->
                                            </div><!-- end row -->
                                            <h2>Personal Information <span> <i class="fa fa-user"></i></span></h2>
                            
                                <div class="row">
                                                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-user"></i></span>Name</label>
                                                        <input type="text" name="username" class="form-control" required/>
                                                    </div>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-envelope"></i></span>Email-id</label>
                                                        <input type="email" name="email" class="form-control" required />
                                                    </div>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-phone"></i></span>Phone No</label>
                                                        <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="phone1" class="form-control" required />
                                                    </div>
                                                </div><!-- end columns -->
                                                

                                            </div><!-- end row -->
                                            
                                            <button type="submit" name="submit1" id="submit1" class="btn btn-orange">Get Quote</button>
                                        </form>
                                    </div><!-- end tab-round-trip -->
                                    
                                    <div id="tab-one-way" class="tab-pane">
                                    <form name="f2" class="pg-search-form" action = "sendquote.php" method = "POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-map-marker"></i></span>From</label>
                                                        <input type="text" name="from2" class="form-control" placeholder="Destination, City, Country" required/>
                                                    </div>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-map-marker"></i></span>To</label>
                                                        <input type="text" name="dest2" class="form-control" placeholder="Destination, City, Country" required/>
                                                    </div>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-calendar"></i></span>Departing</label>
                                                        <input type="date" name="dep2" class="form-control dpd3" placeholder="Date" required/>
                                                    </div>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-users"></i></span>Passengers</label>
                                                        <input type="number"name="count2" class="form-control" placeholder="Total" required/>                                                     </div>
                                                </div><!-- end columns -->
                                            </div><!-- end row -->
                                             <h2>Personal Information <span> <i class="fa fa-user"></i></span></h2>
                            
                                <div class="row">
                                                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-user"></i></span>Name</label>
                                                        <input type="text" name="username2" class="form-control" required/>
                                                    </div>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-envelope"></i></span>Email-id</label>
                                                        <input type="email" name="email2" class="form-control" required />
                                                    </div>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-phone"></i></span>Phone No</label>
                                                        <input type="tel" name="phone2" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" required />
                                                    </div>
                                                </div><!-- end columns -->
                                                

                                            </div><!-- end row -->
                                            <button type="submit" name="submit2" id="submit2" class="btn btn-orange">Get Quote</button>
                                        </form>
                                    </div><!-- end tab-one-way -->
                                </div><!-- end tab-content -->
                            </div><!-- end page-search-form -->
                            
                            
  
                        </div><!-- end columns -->
        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end search-result-page -->
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
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom-navigation.js"></script>
	<script src="js/custom-date-picker.js"></script>
    <!-- Page Scripts Ends -->
</body>
</html>
