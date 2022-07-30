<!--Add visa category to db-->
<?php 
session_start();
$_SESSION['menuid']=8;
include "../dbconn.php";
if(isset($_SESSION['userid']))
{

if(isset($_POST['submit'])){

$category=$_POST['category'];
$country=$_POST['country'];
$sql="INSERT INTO tblvisatype(category,country)values('$category','$country')";
if (mysqli_query($conn, $sql)) { ?>
	<script>alert("Category added successfully"); </script>

	<?php
	echo "<meta http-equiv='refresh' content='0'>";
}

else
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Add Category</title>
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
		

		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content add-details profile User">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Visa Category</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						

					</div><!-- end row -->

					<div class="box">

						<div class="row">
							<div class="col">
								<div class="details-text">
									<h4>Add Visa Category</h4>
								</div><!-- end details-text -->
							</div><!-- End column -->
						</div><!-- end row -->
						<div class="hotel-listing-form">
						<form class="text-center" name="myForm" id="form1" action="addvisacat.php" method="post" enctype="multipart/form-data">
						
								<div class="row">
									<div class="col-sm-12">
									
										<div class="form-row">
											<div class="col-md">
												<div class="form-group">
													<label for="to2" class="">Category</label>
													<input type="text" class="form-control" required id="to2" name="category">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md">
												<div class="form-group">
													<label for="country" class="">Country</label>
													<select name="country" id="country" class="select-input form-control" required>
                                                    <option value="">-- Select Country --</option>
										<?php
										  $records = mysqli_query($conn, "SELECT country From tblcountry");
										
											while($data = mysqli_fetch_array($records))
											{

										?> 

										<option value="<?php echo $data['country']; ?>"><?php echo $data['country']; ?></option>
												<?php }	?>

													</select>
												</div><!-- end form-group -->
											</div><!-- End column -->
										</div><!-- end form-row -->
										
										
											
										
										
										
										
										<ul class="list-inline">
											<li class="list-inline-item">
												<button type="submit" class="btn" id="submitbt" name="submit" type="submit">Create Category</button>
											</li>
											
										</ul>
									</div><!-- End column -->
									<a href="listvisatype.php">View All Visa Category</a>
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