<?php
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
			<img src="../images/logo.jpg" style="height: 55px; "></a>
			</div> <!-- End sidebar-topbar -->
			<!-- End sidebar-topbar -->

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
			</div><!-- End side-bar-bottom -->
		</div><!-- End sidebar-left -->

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

					<div class="box">
						<div class="dashboard-wrapper">
							<div class="row">
								<div class="col-xl col-md-6">
									<div class="dashboard-boxes primary">
										<div class="row no-gutters">
											<div class="col-4">
												<div class="icon">
													<a href="messages-inbox.html"><i class="fas fa-envelope"></i></a>
												</div>
											</div><!-- End column -->
											<div class="col">
												<a href="messages-inbox.html">
													<h5>10 New Messages</h5>
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
													<a href="reviews.html"><i class="fas fa-star"></i></a>
												</div>
											</div><!-- End Columns -->
											<div class="col">
												<a href="reviews.html">
													<h5>10 New Reviews</h5>
												</a>
											</div><!-- End column -->
										</div><!-- End row -->
									</div><!-- End dashboard-boxes -->
								</div><!-- End column -->
								
							</div><!-- End row -->
						</div><!-- End dashboard-wrapper -->
				
						<div class="charts-section">
							<div class="row">
								<div class="col-12 d-block mx-auto canvas1">
									<canvas id="myChart" height="200"></canvas>
								</div><!-- End column -->
								<div class="col-12 d-block mx-auto">
									<canvas id="myChart1" height="200"></canvas>
								</div><!-- End column -->
							</div><!-- End row -->
						</div><!-- End charts-section -->
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

	<script>
		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["January", "February", "March", "April", "May", "June"],
				datasets: [{
					label: '# of Bookings',
					data: [12, 19, 3, 5, 10, 3],
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true,
						}
					}],
					yAxes: [{
						ticks: {
							// fontSize: 15,
							fontColor: 'black',
						}
					}],
					xAxes: [{
						ticks: {
							// fontSize: 15,
							fontColor: 'black',
							beginAtZero: true,
						}
					}]
				}
			}
		});
	</script>
	<script>
		var ctx = document.getElementById("myChart1");
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["January", "February", "March", "April", "May", "June"],
				datasets: [{
					label: '# of Bookings',
					data: [12, 19, 3, 5, 10, 3],
					backgroundColor: [
						'rgba(260, 103, 134, 0.9)',
						'rgba(59, 166, 237, 0.9)',
						'rgba(260, 210, 88, 0.9)',
						'rgba(80, 196, 194, 0.9)',
						'rgba(158, 106, 257, 0.9)',
						'rgba(260, 163, 66, 0.9)'
					],
					borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true,
						}
					}],
					yAxes: [{
						ticks: {
							// fontSize: 15,
							fontColor: 'black',
						}
					}],
					xAxes: [{
						ticks: {
							// fontSize: 15,
							fontColor: 'black',
							beginAtZero: true,
						}
					}]
				}
			}
		});
	</script>
</body>

</html>