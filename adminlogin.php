<!-- Admin login front end -->
<?php
session_start();
if(!isset($_SESSION['userid']))
{
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Login </title>
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
            <!--============= PAGE-COVER =============-->
            <section class="page-cover" id="cover-login">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-title">Login </h1>
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </section><!-- end page-cover -->
            
            
            <!--===== INNERPAGE-WRAPPER ====-->
            <section class="innerpage-wrapper">
                <div id="login" class="innerpage-section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            
                                <div class="flex-content">
                                    <div class="custom-form custom-form-fields">
                                        <h3>Login</h3>
                                        
                                        <form name="f1" action = "admin/authentication.php" onsubmit = "return validation()" method = "POST">  
                                       
                                            <div class="form-group">
                                                 <input type="text"name="user" id=inputEmail class="form-control" placeholder="Username"  required/>
                                                 <span><i class="fa fa-user"></i></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                 <input type="password" name= "pass" id="inputPassword" class="form-control" placeholder="Password"  required/>
                                                 <span><i class="fa fa-lock"></i></span>
                                            </div>
                                            
                                            <div class="checkbox">
                                                 <label><input type="checkbox"> Remember me</label>
                                            </div>
                                            
                                            <button type="submit"  id="loginbtn" class="btn btn-orange btn-block">Login</button>
                                        </form>
                                        
                                        <div class="other-links">
                                            <p class="link-line">New Here ? <a href="#">Signup</a></p>
                                            <a class="simple-link" href="#">Forgot Password ?</a>
                                        </div><!-- end other-links -->
                                    </div><!-- end custom-form -->
                                    
                                    <div class="flex-content-img custom-form-img">
                                        <img src="images/london.jpg" class="img-fluid" alt="registration-img" />
                                    </div><!-- end custom-form-img -->
                                </div><!-- end form-content -->
                                
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end container -->         
                </div><!-- end login -->
            </section><!-- end innerpage-wrapper -->
            
            
           
            
            
            <?php
            include_once("footer.php");
        ?>

        </div>
        
                        <!--validation-->
        <script>  
        function validation()  
        {  
            var id=document.f1.user.value;  
            var ps=document.f1.pass.value;  
            if(id.length=="" && ps.length=="") {  
                alert("User Name and Password fields are empty");  
                return false;  
            }  
            else  
            {  
                if(id.length=="") {  
                    alert("User Name is empty");  
                    return false;  
                }   
                if (ps.length=="") {  
                alert("Password field is empty");  
                return false;  
                }  
            }                             
        }  
        </script>  
                        <!--End  validation-->



        <!-- Page Scripts Starts -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/bootstrap-4.4.1.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
<?php }
else{

  echo '<script> alert("ERROR: Please Signout from your current account!!!"); window.location.href="index.html"; </script>';
}
?>
