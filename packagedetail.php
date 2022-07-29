<?php
session_start();
  $pkgid=$_GET['id'];
  $_SESSION['pkgid']=$pkgid;
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    

?>

<!doctype html>
<html lang="en">
<head>
    <title>Package details</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" href="images/th.jpg" type="image/x-icon">
    
    <!-- Google Fonts -->   
    <link 
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
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
    
    <!-- Slick Stylesheet -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link href="css/mystyle.css" rel="stylesheet">
   
    <link href='js/jquery-bar-rating-master/dist/themes/fontawesome-stars.css' rel='stylesheet' type='text/css'>
    <script src="js/jquery-bar-rating-master/dist/jquery.barrating.min.js" type="text/javascript"></script>
   
    <script type="text/javascript">
        $(function() {
            $('.rating').barrating({
                theme: 'fontawesome-stars',
                onSelect: function(value, text, event) {

                    // Get element id by data-id attribute
                    var el = this;
                    var el_id = el.$elem.data('id');

                    // rating was selected by a user
                    if (typeof(event) !== 'undefined') {
                        
                        var split_id = el_id.split("_");

                        var postid = split_id[1];  // postid
                        $('#save_review').click(function(e){
                        
                        e.preventDefault();
                        var user_name = $('#user_name').val();

var user_review = $('#user_review').val();

if(user_name == '' || user_review == '')
{
    alert("Please Fill Both Field");
    return false;
}
else
{

                        // AJAX Request
                        $.ajax({
                            url: 'rating_ajax.php',
                            type: 'post',
                            data: {postid:postid,rating:value,user_name:user_name,user_review:user_review},
                            dataType: 'json',
                            success: function(data){
                              alert("Thankyou for your rating!!");
                                // Update average
                                console.log(data);
                                var average = data['averageRating'];
                                $('#avgrating_'+postid).text(average);
                                document.location.reload();
                            }
                        });
                    
                        //document.f1.reset();
                    
                       
                    }//else close
                });

                      




                    }
                }
            });
        });
      
      
        $(function () {
                $('#WAButton').floatingWhatsApp({
                    phone: '8086679563', //WhatsApp Business phone number
                    headerTitle: 'Chat with us on WhatsApp!', //Popup Title
                    popupMessage: 'Hello, how can we help you?', //Popup Message
                    message: "<?php echo $url; ?> I want to know the details of this package",
                    showPopup: false, //Enables popup display
                    buttonImage: '<img src="wpm/whatsapp.svg" />', //Button Image
                    //headerColor: 'crimson', //Custom header color
                    //backgroundColor: 'crimson', //Custom background button color
                    position: "right" //Position: left | right
     
                });
            });
     </script>

</head>


<body>

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>
            
            
        <?php
          require_once("header.php");
            include_once("sidebar.php");
        ?>  
        
        
        <!--================ PAGE-COVER ================-->
        <section class="page-cover" id="cover-tour-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Package Details</h1>
                       
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <?php 
			include "dbconn.php";
                          
		?>
        <section class="innerpage-wrapper">
            <div id="tour-details" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">            
                        
                        <div class="col-12 col-md-12 col-lg-9 col-xl-9 content-side">
                            
                            <div class="detail-slider">
                                <div class="feature-slider">
                                <?php
                              
                            $sql=mysqli_query($conn,"select * from tblpackage where id='$pkgid';");
								while($rows = mysqli_fetch_array($sql))
								{  $img1_src = 'images/'.$rows['mainimage'];
                                    $img2_src = 'images/'.$rows['img2'];
                                    $img3_src = 'images/'.$rows['img3'];
                                    $img4_src = 'images/'.$rows['img4'];
                                    $img5_src = 'images/'.$rows['img5']; 
                                    $pkgname=$rows['pkgname'];
                                    $price=$rows['price'];
                                    $seats=$rows['seats'];
                                    $days=$rows['duration'];
                                    $offer=$rows['offer'];
                                    $details=$rows['descr'];

                                     } ?>
                                    <div><img src="<?php echo $img1_src; ?>" class="img-fluid" alt="feature-img"/></div>
                                    <div><img src="<?php echo $img2_src; ?>" class="img-fluid" alt="feature-img"/></div>
                                    <div><img src="<?php echo $img3_src; ?>" class="img-fluid" alt="feature-img"/></div>
                                    <div><img src="<?php echo $img4_src; ?>" class="img-fluid" alt="feature-img"/></div>
                                    <div><img src="<?php echo $img5_src; ?>" class="img-fluid" alt="feature-img"/></div>
                                </div><!-- end feature-slider -->
                                
                                <div class="feature-slider-nav">
                                
                                    <div><img src="<?php echo $img1_src; ?>" class="img-fluid" onclick="currentSlide(1)" alt="feature-thumb"/></div>
                                    <div><img src="<?php echo $img2_src; ?>" class="img-fluid" onclick="currentSlide(2)" alt="feature-thumb"/></div>
                                    <div><img src="<?php echo $img3_src; ?>" class="img-fluid" onclick="currentSlide(3)" alt="feature-thumb"/></div>
                                    <div><img src="<?php echo $img4_src; ?>" class="img-fluid" onclick="currentSlide(4)" alt="feature-thumb"/></div>
                                    <div><img src="<?php echo $img5_src; ?>" class="img-fluid" onclick="currentSlide(5)" alt="feature-thumb"/></div>
                                    
                                </div><!-- end feature-slider-nav -->
                                
                                <ul class="list-unstyled features tour-features">
                                    <li><div class="f-icon"><i class="fa fa-wheelchair"></i></div><div class="f-text"><p class="f-heading">Seats</p><p class="f-data"><?php echo $seats; ?></p></div></li>
                                    <li><div class="f-icon"><i class="fa fa-calendar"></i></div><div class="f-text"><p class="f-heading">Duration</p><p class="f-data"><?php echo $days; ?> DAYS</p></div></li>
                                    <li><div class="f-icon"><i class="fa fa-clock-o"></i></div><div class="f-text"><p class="f-heading">Discount</p><p class="f-data"><?php echo $offer; ?>% OFF</p></div></li>
                                </ul>
                            </div><!-- end detail-slider -->  
        
                            <div class="detail-tabs">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="nav-item active"><a class="nav-link" href="#tour-information" data-toggle="tab">Tour Information</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#flight" data-toggle="tab">Terms and Condition</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#map-overview" data-toggle="tab">Cancellation Policy</a></li>
                                </ul>
                                
                                <div class="tab-content">
        
                                    <div id="tour-information" class="tab-pane in active">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4 tab-img">
                                                <img src="images/dubai.jpg" class="img-fluid" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                            
                                            <div class="col-md-8 col-lg-8 tab-text">
                                                <h3>Tour Information</h3>
                                                <p>
                                                <?php echo $details; ?> 
                                                </p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end hotel-overview -->
                                    
                                    <div id="flight" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4 tab-img">
                                                <img src="images/dubai.jpg" class="img-fluid" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                            
                                            <div class="col-md-8 col-lg-8 tab-text">
                                                <h3>Terms and Conditions</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br/> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end restaurant -->
                                    
                                    <div id="map-overview" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4 tab-img">
                                                <img src="images/dubai.jpg" class="img-fluid" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                            
                                            <div class="col-md-8 col-lg-8 tab-text">
                                                <h3>Cancellation Policy</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end pick-up -->
                                    
                                </div><!-- end tab-content -->
                            </div><!-- end detail-tabs -->
                            <?php
                            
                         
                          
                            $query = mysqli_query($conn,"select * from post_rating where postid = '$pkgid' ");
    while($fetchRating = mysqli_fetch_array($query))
    $rating = $fetchRating['rating'];

    // get average
    $query = "SELECT ROUND(AVG(rating),1) as averageRating FROM post_rating WHERE postid=".$pkgid;
    $avgresult = mysqli_query($conn,$query);
    $fetchAverage = mysqli_fetch_array($avgresult);
    $averageRating = $fetchAverage['averageRating'];

    if($averageRating <= 0){
        $averageRating = "No rating yet.";
    }


?>

                            <div id="comment-form">
                            
                                        <div class="innerpage-heading">
                                            <h1>Ratings & Reviews</h1>
                                            <div class="ratingstar">
                                            <span id='avgrating_<?php echo $pkgid; ?>'><?php echo $averageRating;?>  </span>
                                            <?php
                                            if($averageRating!= "No rating yet." )
                                 { ?>
                                            <span class='ratingstars'><i class='fa fa-star'></i></span>
                                        <?php } ?>
                                          

<!-- Set rating   (barrating function is defined on top ) -->

                                            </div>
                                        </div><!-- end innerpage-heading -->
                                        
                                        <form name="f1">
                                            <div class="row">
                                                <div class="col-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input input-lg" placeholder="Your Name" id="user_name" required/>
                                                    </div>
                                                </div><!-- end columns -->
                                            
                                                
                                            </div><!-- end row -->
                                            
                                            <div class="form-group">
                                                <textarea class="form-control input-lg" rows="5" placeholder="Your Review" id="user_review"></textarea>
                                            </div>
                                            <div class="post-action">
                           <!-- Rating -->
                           
                           <select class='rating' id='rating_<?php echo $pkgid; ?>' data-id='rating_<?php echo $pkgid; ?>'>
                               <option value="1" >1</option>
                               <option value="2" >2</option>
                               <option value="3" >3</option>
                               <option value="4" >4</option>
                               <option value="5" >5</option>
                           </select>
                          
                           <div style='clear: both;'></div>
                           <script type='text/javascript'>
$(document).ready(function(){
    $('#rating_<?php echo $pkgid; ?>').barrating('set',<?php echo $rating; ?>);
});

</script>
                                </div>
                                            <button class="btn btn-orange" id="save_review">Submit</button>
                                        </form>
                                    </div><!-- end comment-form -->
                                    <?php
                            $sql=mysqli_query($conn,"select * from post_rating WHERE postid='$pkgid' ORDER BY id DESC LIMIT 15 ");
								while($rows = mysqli_fetch_array($sql))
								{  
                                    $username=$rows['userid'];
                                    $review=$rows['review'];
                                    $rating=$rows['rating'];
                                    ?>
                                     <div class="commentbox">
                                  <div class="row"> <h5 style="text-align: left; font-weight:bolder"> <?php echo $username  ?></h5>
                                 <?php 
                                 if($averageRating!= "No rating yet." )
                                 { 
                                  $avgrating = floatval(str_replace(',', '.', $averageRating));
                                
                                    $updatequery = "update tblpackage set avgrating='$avgrating' WHERE id='$pkgid'";
                                    mysqli_query($conn,$updatequery);
                                    $updatequery = "update bestpkg set avgrating='$avgrating' WHERE pkgid='$pkgid'";
                                    mysqli_query($conn,$updatequery);  

                                 } 
?>                             
                                
                                </div>

                                <?php
                                    $stars = "";
                                   
                                    for ($i = 1; $i <= 5; $i++) { 
                                     if($i <= $rows['rating'] )
                                    echo "<span class='stars'><i class='fa fa-star'></i></span> ";
                                    else  echo "<span class='nullstars'><i class='fa fa-star'></i></span> ";
                                    } 
                                    ?>
                                  <div> <?php echo $review ?></div>
                           
                               
                            </div>                           
                            <?php } ?>
                        </div><!-- end columns -->
                        

                        <div class="col-12 col-md-12 col-lg-3 side-bar right-side-bar">
                            
                            <div class="side-bar-block booking-form-block">
                                <h2 class="selected-price">Rs<?php echo $price; ?> <span><?php echo $pkgname; ?></span></h2>
                            
                                <div class="booking-form">
                                    <h3>Contact Us</h3>
                                    <p>Find your dream tour today</p>
                                    <form name="f1" action="mail.php" method = "POST" enctype="multipart/form-data">   
                                  
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name" id="txt_name" name="txt_name"/>
                                        </div>
                                        

                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email"  id="txt_email" name="txt_email"/>
                                        </div>
                                        <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Subject" name="txt_subject" id="txt_phone"/>
                                   
                                </div>
                                
                                <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone"  id="txt_phone" name="txt_phone"/>
                                           
                                        </div> 
                                        <div class="form-group">
                                    <textarea class="form-control" rows="4" placeholder="Your Message" name="txt_message" id="txt_message"></textarea>
                                    
                                </div>
                                        
                                            
                                            
                                       
                                        <div class="col-md-12 text-center" id="result_msg"></div>
                                        <button class="btn btn-block btn-orange" id="submit" name="emailsubmit">Submit</button>
                                    </form>
                                   
                                </div><!-- end booking-form -->
                            </div><!-- end side-bar-block -->
                            
                            <div class="row">
                                
                                
                              
                                <div id="WAButton">Need help?</div>
                            </div><!-- end row -->
                        </div><!-- end columns -->
        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end tour-detail -->
        </section><!-- end innerpage-wrapper -->
        
        <?php 
        include "featurebanner.php";
        include "footer.php";
        ?>
        
    </div>
    <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
    <link rel="stylesheet" href="wpm/floating-wpp.min.css">  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-4.4.1.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/custom-slick.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/custom-validation.js"></script>
    <script src="js/script.js"></script>
<script src="js/jquery-3.0.0.js" type="text/javascript"></script>
<script type="text/javascript" src="wpm/jquery-3.3.1.min.js"></script>
    <!--Floating WhatsApp css-->
    <link rel="stylesheet" href="wpm/floating-wpp.min.css">
    <!--Floating WhatsApp javascript-->
    <script type="text/javascript" src="wpm/floating-wpp.min.js"></script>

    <script src="js/jquery-bar-rating-master/dist/jquery.barrating.min.js" type="text/javascript"></script>
<!-- Page Scripts Starts -->


    

 
</body>
</html>
