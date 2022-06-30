<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Create User</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">


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

		<!-- ===========Top-Bar============= -->
		<div class="top-bar">
			<nav class="navbar">
				<button class="navbar-toggler d-block sideMenuToggler" type="button">
					<span class="fa fa-bars"></span>
				</button>

				<ul class="ml-auto list-unstyled nav-list list-inline d-flex my-auto">
					<li class="nav-item list-inline-item">
						<form class="form-inline my-2 my-lg-0 d-none d-xl-flex">
							<input class="form-control mr-sm-2" type="search" placeholder="Search"
								aria-label="Search" />
							<i class="fas fa-search"></i>
						</form>
					</li>
					<li class="nav-item list-inline-item dropdown messages">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="far fa-envelope"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<span>Messages (5)</span>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#"><i class="far fa-envelope"></i>Your Order is
								Placed<span>Lorem ipsum
									dolor sit, amet consectetur adipisicing elit.
									Nisi, maxime?</span>
							</a>
							<a class="dropdown-item" href="#"><i class="far fa-envelope-open"></i>New Message
								Received<span>Lorem
									ipsum dolor sit amet.</span></a>
							<a class="dropdown-item bottom-margin" href="#"><i class="far fa-envelope-open"></i>Your
								item is
								Shipped<span>Lorem ipsum dolor sit amet consectetur adipisicing.</span></a>
							<div class="dropdown-divider"></div>
							<a href="#" class="btn mx-auto d-block">View All</a>
						</div>
					</li>
					<li class="nav-item list-inline-item dropdown notifications">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="far fa-bell"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<span>Notifications (258)</span>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#"><i class="fas fa-cart-plus"></i>Your Order is
								Placed<span>Lorem ipsum
									dolor sit, amet consectetur adipisicing elit.
									Nisi, maxime?</span>
							</a>
							<a class="dropdown-item" href="#"><i class="fas fa-sms"></i>New Message Received<span>Lorem
									ipsum dolor
									sit amet.</span></a>
							<a class="dropdown-item bottom-margin" href="#"><i class="fas fa-glass-martini"></i>Your
								item is
								Shipped<span>Lorem ipsum dolor sit amet consectetur adipisicing.</span></a>
							<div class="dropdown-divider"></div>
							<a href="#" class="btn mx-auto d-block">View All</a>
						</div>
					</li>
					<li class="nav-item list-inline-item dropdown profile">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<img src="images/commenter-1.jpg" alt="" class="img-fluid rounded-circle" width="30px" />
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="profile-view-profile.html"><i class="fas fa-user-alt"></i>
								<span>View Profile</span></a>
							<a class="dropdown-item" href="profile-edit-profile.html"><i class="fas fa-cog"></i>
								<span>Edit Profile</span></a>
							<a class="dropdown-item" href="profile-change-password.html"><i class="fas fa-unlock"></i>
								<span>Change Password</span></a>
							<a class="dropdown-item" href="#"><i class="fas fa-unlock"></i>
								<span>Lock Screen</span></a>
							<a href="#" class="btn d-block text-left"><i class="fas fa-power-off"></i>Logout</a>
						</div>
					</li>
				</ul>
			</nav>
		</div><!-- End top-bar -->

		<!-- =========== sidebar-left ============= -->
		<div class="sidebar-left">
			<div class="sidebar-topbar text-center">
				<i class="fa fa-plane"></i><span class="text">Star Travels</span>
			</div> <!-- End sidebar-topbar -->

			<div class="side-menu">
				<ul class="navbar-nav">
				<li class="nav-item" id="dashboard-link">
						<a href="adminhome.php" class="items-list first active">
							<span><i class="fa fa-home link-icon" data-toggle="tooltip" data-html="true"
									title="Dashboard"></i></span>
							<span class="items-list-text">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="serviceEdit.php" class="items-list">
							<span><i class="fas fa-pencil-alt" data-toggle="tooltip" data-html="true"
									title="Services"></i></span>
							<span class="items-list-text">Edit Services</span>
						</a>
					</li>
					
					<li class="nav-item">
						<a href="reviews.html" class="items-list">
							<span><i class="fas fa-sync-alt" data-toggle="tooltip" data-html="true"
									title="Reviews"></i></span>
							<span class="items-list-text">Reviews</span>
						</a>
					</li>
				</ul>
			</div><!-- End side-menu -->
			<div class="side-bar-bottom">
				<ul class="list-unstyled">
					<li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Edit Profile"><a
							href="profile-edit-profile.html"><i class="fas fa-cog"></i></a></li>
					<li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Change Password"><a
							href="profile-change-password.html"><i class="fas fa-key"></i></li>
					<li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Lockscreen"><a
							href="#"><i class="fas fa-unlock"></i></a></li>
					<li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Logout"><a href="#"><i
								class="fas fa-power-off"></i></a></li>
				</ul>
			</div><!-- end side-bar-bottom -->
		</div><!-- end sidebar-left -->

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
							<form class="text-center" onsubmit="return validateForm()" action="serviceupdate.php" method="post" enctype="multipart/form-data">
							
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
									$sql=mysqli_query($conn,"select * from tblservice where id=8;");
									while($rows = mysqli_fetch_array($sql))
									{ ?>
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service8 Name:</label>
												<div class="form-group">
												
													<input type="text" class="form-control" required id="to" name="serv8name"style="padding: 0 0 0 0px;" autofocus value="<?php echo $rows['title']; ?>">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service8 Desciption:</label>
												<div class="form-group">
													
													<textarea class="form-control" required id="to" name="serv8desc" rows="5" style="padding: 0 0 0 0px;"><?php echo $rows['descr']; ?></textarea>
												</div><!-- end form-group -->
											</div><!-- End column -->
											<?php 
											 } 
									$sql=mysqli_query($conn,"select * from tblservice where id=9;");
									while($rows = mysqli_fetch_array($sql))
									{ ?>
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service9 Name:</label>
												<div class="form-group">
												
													<input type="text" class="form-control" required id="to" name="serv9name" style="padding: 0 0 0 0px;" autofocus value="<?php echo $rows['title']; ?>">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md-12">
											<label style="float: left; font-weight:bold">Service9 Desciption:</label>
												<div class="form-group">
													
													<textarea class="form-control" required id="to" name="serv9desc" rows="5" style="padding: 0 0 0 0px;"><?php echo $rows['descr']; ?></textarea>
												</div><!-- end form-group -->
											</div><!-- End column -->

										<?php } ?>
											
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