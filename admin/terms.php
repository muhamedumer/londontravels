<!--Edit terms , cancellation polcy-->
<?php
session_start();
$_SESSION['menuid']=10;
if(isset($_SESSION['userid']))
{
    include "../dbconn.php";

    if(isset($_REQUEST['Update']))
{
    $terms=$_POST["terms"];
    $cancel=$_POST["cancelpolicy"];
    $sql = mysqli_query($conn,"update tblterms set terms='$terms',cancelpolicy='$cancel' where id=1;");
    header("location:terms.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Update Policy</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="images/th.jpg" type="image/x-icon">


	<!-- Framework Stylesheets Start-->

	<!-- Bootstrap Stylesheet -->
	<link rel="stylesheet" href="css/bootstrap-4.4.1.min.css">


	<!-- Data Tables Stylesheet -->

	<link rel="stylesheet" type="text/css" href="css/custom.datatables.css">
	<link rel="stylesheet" type="text/css" href="vendors/dropzone-5.5.0/dist/min/dropzone.min.css">

	<!-- Framework Stylesheets End-->

	<!-- Font Awsome Stylesheet -->
	<link rel="stylesheet" href="vendors/fontawesome5.7.2/css/all.min.css">

	<!-- Custom Stylesheet Start-->

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!-- Custom Stylesheet End-->



</head>

<body>

	<!-- ===========wrapper============= -->
	<div class="wrapper">
	<?php
		include "adminheader.php";
		include "sidebar.php";
		?>
		<!-- ===========Top-Bar============= -->
	

	

		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content add-details profile User">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Terms & condtion</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						

					</div><!-- end row -->

					<div class="box">

						<div class="row">
							<div class="col">
								<div class="details-text">
									<h4>Update Details</h4>
								</div><!-- end details-text -->
							</div><!-- End column -->
						</div><!-- end row -->
						<div class="hotel-listing-form">
                    
						<form class="text-center" name="myForm" id="form1" action="terms.php" method="post" enctype="multipart/form-data">
                        <?php
                            $sql=mysqli_query($conn,"select * from tblterms");
                            while($rows = mysqli_fetch_array($sql))
                            {
                                
                        ?>

								<div class="row">
									<div class="col-sm-12">
										
										
										<div class="form-row">
											<div class="col-md">
												<div class="form-group">
													<label for="inputGroupSelect07" class="" style="height: 50px;">Terms and Conditions</label>
													<textarea cols="40" rows="15" class="form-control" name="terms" id="inputGroupSelect07" maxlength="500" autofocus required><?php echo $rows['terms']; ?></textarea>
													
												</div><!-- end form-group -->
												
											</div><!-- End column -->
											
											
										</div><!-- end form-row -->
                                        <div class="form-row">
											<div class="col-md">
												<div class="form-group">
													<label for="inputGroupSelect07" class="" style="height: 50px;">Cancellation Policy</label>
													<textarea cols="40" rows="15" class="form-control" name="cancelpolicy" id="inputGroupSelect07" maxlength="500" autofocus required><?php echo $rows['cancelpolicy']; ?></textarea>
													
												</div><!-- end form-group -->
												
											</div><!-- End column -->
											
											
										</div><!-- end form-row -->
									
											
										
										
									
											
										
										<ul class="list-inline">
											<li class="list-inline-item">
												<button type="submit" class="btn" id="submitbt" name="Update" type="submit">Update</button>
											</li>
											
										</ul>
									</div><!-- End column -->
									
								</div><!-- end row -->
                                <?php } ?>
							</form>
						</div><!-- end hotel-listing-form -->
					</div><!-- end box -->
				</div><!-- end in-content-wrapper -->
			</div><!-- end add-details profile User -->
		</section>
		<!-- ===========End Innerpage-wrapper============= -->

	</div><!-- end wrapper -->














	<!-- Optional JavaScript, Not optional it's need too -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.min.js"></script>


	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.4.1.min.js"></script>

	<script src="vendors/dropzone-5.5.0/dist/min/dropzone.min.js"></script>
	<script src="js/customscriptfile.js"></script>

	<!-- Page Scripts Ends -->


</body>

</html>
<?php
}
else{
  
  echo '<script> alert("ERROR: Please Check Credentials OR SignUp!!!"); window.location.href="../index.php"; </script>';
}
?>