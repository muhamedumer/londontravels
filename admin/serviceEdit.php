<!--Edit services-->
<?php 

session_start();
$_SESSION['menuid']=6;
if(isset($_SESSION['userid']))
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Create User</title>
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
<div class="wrapper">
<!-- ===========Top-Bar============= -->
<?php
		include "adminheader.php";
		include "sidebar.php";
		?>
	


	



		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content add-details profile User">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Edit Services</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						<div class="col-md-4">
							
						</div><!-- End column -->

					</div><!-- end row -->

					<div class="box">

						<div class="row">
							<div class="col">
								<div class="details-text">
									<h4>Service Details</h4>
								</div><!-- end details-text -->
							</div><!-- End column -->
						</div><!-- end row -->
						<?php 
						include "../dbconn.php";
						?>
						<div class="hotel-listing-form">
							<form class="text-center" action="serviceupdate.php" method="post" enctype="multipart/form-data">
							
							<div class="row">
									<div class="col-md-12">
										<div class="form-row">
										<?php
								$sql=mysqli_query($conn,"select * from tblservice where id='1';");
								while($rows = mysqli_fetch_array($sql))
								{
							?>	
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service 1 Name:</label>
												<div class="form-group">
													
													<input type="text" class="form-control" required id="to" name="serv1name" style="padding: 0 0 0 0px;"  autofocus value="<?php echo $rows['title']; ?>">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service 1 Description</label>
												<div class="form-group">
													
													<textarea class="form-control" required id="to" name="serv1desc" rows="5" style="padding: 0 0 0 0px;"><?php echo $rows['descr']; ?></textarea>
												</div><!-- end form-group -->
											</div><!-- End column -->
									
									<?php }
									$sql=mysqli_query($conn,"select * from tblservice where id='2';");
									while($rows = mysqli_fetch_array($sql))
									{ ?>
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service2 Name:</label>
												<div class="form-group">
												
													<input type="text" class="form-control" required id="to" name="serv2name" style="padding: 0 0 0 0px;" autofocus value="<?php echo $rows['title']; ?>">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service2 Desciption:</label>
												<div class="form-group">
												
													<textarea class="form-control" required id="to" name="serv2desc" rows="5" style="padding: 0 0 0 0px;"><?php echo $rows['descr']; ?></textarea>
												</div><!-- end form-group -->
											</div><!-- End column -->
											<?php } 
									$sql=mysqli_query($conn,"select * from tblservice where id=3;");
									while($rows = mysqli_fetch_array($sql))
									{ ?>
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service3 Name:</label>
												<div class="form-group">
												
													<input type="text" class="form-control" required id="to" name="serv3name" style="padding: 0 0 0 0px;" autofocus value="<?php echo $rows['title']; ?>">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service3 Desciption:</label>
												<div class="form-group">
												
													<textarea class="form-control" required id="to" name="serv3desc" rows="5" style="padding: 0 0 0 0px;"><?php echo $rows['descr']; ?></textarea>
												</div><!-- end form-group -->
											</div><!-- End column -->
											<?php  } 
									$sql=mysqli_query($conn,"select * from tblservice where id=4;");
									while($rows = mysqli_fetch_array($sql))
									{ ?>
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service4 Name:</label>
												<div class="form-group">
												
													<input type="text" class="form-control" required id="to" name="serv4name" style="padding: 0 0 0 0px;" autofocus value="<?php echo $rows['title']; ?>">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service4 Description</label>
												<div class="form-group">
													
													<textarea class="form-control" required id="to" name="serv4desc" rows="5" style="padding: 0 0 0 0px;"><?php echo $rows['descr']; ?></textarea>
												</div><!-- end form-group -->
											</div><!-- End column -->
											<?php  } 
									$sql=mysqli_query($conn,"select * from tblservice where id=5;");
									while($rows = mysqli_fetch_array($sql))
									{ ?>
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service5 Name</label>
												<div class="form-group">
												
													<input type="text" class="form-control" required id="to"  name="serv5name"style="padding: 0 0 0 0px;" autofocus value="<?php echo $rows['title']; ?>">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service5 Description</label>
												<div class="form-group">
													
												
													<textarea class="form-control" required id="to"  name="serv5desc"rows="5" style="padding: 0 0 0 0px;"><?php echo $rows['descr']; ?></textarea>
												</div><!-- end form-group -->
											</div><!-- End column -->
											<?php  } 
									$sql=mysqli_query($conn,"select * from tblservice where id=6;");
									while($rows = mysqli_fetch_array($sql))
									{ ?>
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service6 Name</label>
												<div class="form-group">
													
													<input type="text" class="form-control" required id="to" name="serv6name" style="padding: 0 0 0 0px;" autofocus value="<?php echo $rows['title']; ?>">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service6 Description</label>
												<div class="form-group">
													<textarea class="form-control" required id="to" name="serv6desc" rows="5" style="padding: 0 0 0 0px;"><?php echo $rows['descr']; ?></textarea>
												</div><!-- end form-group -->
											</div><!-- End column -->
											<?php  } 
									$sql=mysqli_query($conn,"select * from tblservice where id=7;");
									while($rows = mysqli_fetch_array($sql))
									{ ?>
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service7 Name:</label>
												<div class="form-group">
												
													<input type="text" class="form-control" required id="to" name="serv7name" style="padding: 0 0 0 0px;" autofocus value="<?php echo $rows['title']; ?>">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service7 Desciption:</label>
												<div class="form-group">
													
													<textarea class="form-control" required id="to" name="serv7desc" rows="5" style="padding: 0 0 0 0px;"><?php echo $rows['descr']; ?></textarea>
												</div><!-- end form-group -->
											</div><!-- End column -->
											<?php  } 
									 ?>
											
										</div><!-- end form-row -->
										
									

										<ul class="list-inline">
											<li class="list-inline-item">
												<button type="submit" name="Update" class="btn" type="submit">Update</button>
											</li>
											
										</ul>
									</div><!-- End column -->
								
								</div><!-- end row -->
							
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
  
  echo '<script> alert("ERROR: Please Check Credentials or Sign In!!!"); window.location.href="../index.php"; </script>';
}
?>