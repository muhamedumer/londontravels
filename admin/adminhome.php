<!--Admin dashboard-->
<?php
session_start();
$_SESSION['menuid']=1;
if(isset($_SESSION['userid']))
{ 
	?>
<!doctype html>
<html lang="en">

<head>
	<title>Admin Dashboard</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="images/th.jpg" type="image/x-icon">



	<!-- Framework Stylesheets Start-->

	<!-- Bootstrap Stylesheet -->
	<link rel="stylesheet" href="css/bootstrap-4.4.1.min.css">



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

		<!-- ===========Top-Bar============= -->
		<?php
		include "adminheader.php";
		include "sidebar.php";
		?>
	
		

		<!-- ===========Innerpage-wrapper============= -->

		<section>
			<div class="content dashbaord">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Dashboard</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						<div class="col-md-4">
							
						</div><!-- End column -->
					</div><!-- End row -->
					<?php 
					include "../dbconn.php";
					$result1 = mysqli_query($conn,"SELECT * FROM tblpackage");
					$res1 = mysqli_num_rows($result1);
					$result2 = mysqli_query($conn,"SELECT * FROM bestpkg ");
					$res2 = mysqli_num_rows($result2);
					$result3 = mysqli_query($conn,"SELECT * FROM post_rating");
					$res3 = mysqli_num_rows($result3);
					$result4 = mysqli_query($conn,"SELECT * FROM bestreview");
					$res4 = mysqli_num_rows($result4);
					?>
					<div class="box">
						<div class="dashboard-wrapper">
							<div class="row">
								<div class="col-xl col-md-6">
									<div class="dashboard-boxes primary">
										<div class="row no-gutters">
											<div class="col-4">
												<div class="icon">
													<a href="managepackg.php"><i class="fas fa-globe"></i></a>
												</div>
											</div><!-- End column -->
											<div class="col">
												<a href="managepackg.php">
													<h5><?php echo $res1; ?> Packages</h5>
												</a>
											</div><!-- End column -->
										</div><!-- End row -->
									</div><!-- End dashboard-boxes -->
								</div><!-- End column -->
								
								<div class="col-xl col-md-6">
									<div class="dashboard-boxes danger">
										<div class="row no-gutters">
											<div class="col-4">
												<div class="icon">
													<a href="toppkg.php"><i class="fas fa-star"></i></a>
												</div>
											</div><!-- End Columns -->
											<div class="col">
												<a href="toppkg.php">
													<h5><?php echo $res2; ?> Top Packages</h5>
												</a>
											</div><!-- End column -->
										</div><!-- End row -->
									</div><!-- End dashboard-boxes -->
								</div><!-- End column -->
								


								
							</div><!-- End row -->
							
						</div><!-- End dashboard-wrapper -->
				
					

						<div class="dashboard-wrapper">
							<div class="row">
								<div class="col-xl col-md-6">
									<div class="dashboard-boxes primary">
										<div class="row no-gutters">
											<div class="col-4">
												<div class="icon">
													<a href="review.php"><i class="fas fa-sync-alt"></i></a>
												</div>
											</div><!-- End column -->
											<div class="col">
												<a href="review.php">
													<h5><?php echo $res3; ?> Total Reviews</h5>
												</a>
											</div><!-- End column -->
										</div><!-- End row -->
									</div><!-- End dashboard-boxes -->
								</div><!-- End column -->
								
								<div class="col-xl col-md-6">
									<div class="dashboard-boxes danger">
										<div class="row no-gutters">
											<div class="col-4">
												<div class="icon">
													<a href="topreview.php"><i class="fas fa-star"></i></a>
												</div>
											</div><!-- End Columns -->
											<div class="col">
												<a href="topreview.php">
													<h5><?php echo $res4; ?> Top Packages</h5>
												</a>
											</div><!-- End column -->
										</div><!-- End row -->
									</div><!-- End dashboard-boxes -->
								</div><!-- End column -->
								


								
							</div><!-- End row -->
							
						</div><!-- End dashboard-wrapper -->
				
					</div><!-- End Box -->
				</div><!-- End in-content-wrapper -->
			</div><!-- End content-dashboard -->
		</section>
		<!-- ===========End Innerpage-wrapper============= -->

	</div><!-- end wrapper -->














	<!-- Optional JavaScript, Not optional it's need too -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.min.js"></script>


	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.4.1.min.js"></script>
	<script src="js/customscriptfile.js"></script>
	<script src="vendors/chart.js-2.8.0/dist/Chart.min.js"></script>

	<!-- Page Scripts Ends -->

	
</body>

</html>
<?php

}
else{
  
  echo '<script> alert("ERROR: Please Check Credentials or Sign In!!!"); window.location.href="../index.php"; </script>';
}
?>