<!--Update highlight count-->
<?php 
session_start();
$_SESSION['menuid']=4;
if(isset($_SESSION['userid']))
{
include "../dbconn.php";
if(isset($_POST['submit'])){

$count1=$_POST['count1'];

$count2=$_POST['count2'];

$count3=$_POST['count3'];


$sql="UPDATE tblhlights SET count='$count1' where service='Outstanding Tours'";
$sql2="UPDATE tblhlights SET count='$count2' where service='Hajj Umrah Services'";

$sql3="UPDATE tblhlights SET count='$count3' where service='Luxury Tour Pack'";

if (mysqli_query($conn, $sql) and mysqli_query($conn, $sql2) and mysqli_query($conn, $sql3)) { 
    ?>
	<script>alert("Count Added!!Check homepage!!"); </script>
	<?php
}
else
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
}

?>


<!doctype html>
<html lang="en">

<head>
	<title>Add Highlights</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="images/th.jpg" type="image/x-icon">



	<!-- Framework Stylesheets Start-->

	<!-- Bootstrap Stylesheet -->
	<link rel="stylesheet" href="css/bootstrap-4.4.1.min.css">


	<!-- Data Tables Stylesheet -->
	<link rel="stylesheet" type="text/css" href="vendors/datatables/datatables.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.datatables.css">
	<link rel="stylesheet" type="text/css" href="vendors/dropzone-5.5.0/dist/min/dropzone.min.css">


	<!-- Framework Stylesheets End-->



	<!-- Font Awsome Stylesheet -->
	<link rel="stylesheet" href="vendors/fontawesome5.7.2/css/all.min.css">

	<!-- Custom Stylesheet Start-->

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!-- Custom Stylesheet End-->

<style>
    .hlabel{
        font-size: 18px;
    width: 140px;
    padding: 9px 10px;
    padding-right: 0px;
    position: absolute;
    color: #0f0f0f;
    font-weight: 600;
    left: 0px;
    background-color: #cccccc;
   
    height: 38px;
    margin: auto 0;

    }
    
    </style>


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
			<div class="content add-details">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Add Highlights</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						<div class="col-md-4">
							
						</div><!-- end column -->

					</div><!-- end row -->

					<div class="box">

						<div class="row">
							<div class="col">
								<div class="details-text">
									<h4>Add Details</h4>
								</div><!-- end details-text -->
							</div><!-- End column -->
						</div><!-- end row -->
						<div class="hotel-listing-form">
						
							<form class="text-center" name="myForm" id="form1" action="highlightcount.php" method="post" enctype="multipart/form-data">
					
                            <div class="form-row">
									<div class="col-md">
										<div class="row form-group">
                                        <div class="col-lg-6 hlabel"><label for="inputGroupSelect07" class="">Outstanding Tours</label></div>
											
                                            <div class="col-lg-6"><input type="text" name="count1" class="form-control" required id="inputGroupSelect07" placeholder="Enter count" required></div>
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->
                                <div class="form-row">
									<div class="col-md">
										<div class="row form-group">
                                        <div class="col-lg-6 hlabel"><label for="inputGroupSelect07" class="">Hajj Umrah Services</label></div>
											
                                            <div class="col-lg-6"><input type="text" name="count2" class="form-control" required id="inputGroupSelect07" placeholder="Enter count" required></div>
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->
                                <div class="form-row">
									<div class="col-md">
										<div class="row form-group">
                                        <div class="col-lg-6 hlabel"><label for="inputGroupSelect07" class="">Luxury Tour Pack</label></div>
											
                                            <div class="col-lg-6"><input type="text" name="count3" class="form-control" required id="inputGroupSelect07" placeholder="Enter count"required></div>
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->
								
								

							
								
								<ul class="list-inline">
									<li class="list-inline-item">
										<button type="submit" id="submitbt" name="submit" class="btn">Submit</button>
									</li>
									
								</ul>

							</form>
						</div><!-- end hotel-listing-form -->
					</div><!-- end box -->
				</div><!-- end in-content-wrapper -->
			</div><!-- end add-details -->
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