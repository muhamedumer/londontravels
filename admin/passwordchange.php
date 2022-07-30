<!--admin password change-->
<?php 

session_start();
if(isset($_SESSION['userid']))
{
		
$_SESSION['msg']=null;
include "../dbconn.php";
if(isset($_POST['update'])){
	$old=$_POST['old'];
$new=$_POST['new'];
$sql=mysqli_query($conn,"select password from tbluser where userid='$_SESSION[userid]' and password='$old'");
$num=mysqli_num_rows($sql);
if($num==1)
{
 $con=mysqli_query($conn,"update tbluser set password='$new' where userid='$_SESSION[userid]'");
$_SESSION['msg']=1;
}
else
{
	$_SESSION['msg']=2;
	
}



} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Profile Change Password</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="images/th.jpg" type="image/x-icon">


	<!-- Framework Stylesheets Start-->

	<!-- Bootstrap Stylesheet -->
	<link rel="stylesheet" href="css/bootstrap-4.4.1.min.css">


	<!-- Data Tables Stylesheet -->

	<link rel="stylesheet" type="text/css" href="css/custom.datatables.css">


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
			<div class="content add-details change-password">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Profile</h3>
							</div> <!-- End heading-messages -->
						</div> <!-- End column -->
						<div class="col-md-4">
							<div class="breadcrumb">
								<div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Profile</a>
								</div>
								<div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Edit Profile
								</div>
							</div><!-- End breadcrumb-->
						</div><!-- End column -->

					</div><!-- End row -->

					<div class="box">

						<div class="row">
							<div class="col">
								<div class="details-text">
									<h4>Change Password</h4>
								</div><!-- End details-text -->
							</div><!-- End column -->
						</div><!-- End row -->
						<div class="hotel-listing-form">
						
							<form name="chngpwd" class="text-center" onsubmit="return valid()" action="passwordchange.php" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col">
										<div class="form-row">
											<div class="col-md">
												<div class="form-group">
													<label for="to" class="">Old Password:</label>
													<input type="password" class="form-control" name="old" id="opwd">
												</div><!-- end form-group -->
											</div><!-- End column -->
										</div><!-- End form-row -->
										<div class="form-row">
											<div class="col-md">
												<div class="form-group">
													<label for="to1" class="">New Password:</label>
													<input type="password" class="form-control" name="new" id="npwd">
												</div><!-- end form-group -->
											</div><!-- end column -->
										</div><!-- end form-row -->
										<div class="form-row">
											<div class="col-md">
												<div class="form-group">
													<label for="to2" class="">Repeat Password:</label>
													<input type="password" class="form-control" name="repeat" id="cpwd">
												</div><!-- end form-group -->
											</div><!-- End column -->
										</div><!-- End form-row -->

										<ul class="list-inline">
											<li class="list-inline-item">
												<button type="submit" class="btn" name="update">Update</button>
											</li>
											
										</ul>
									</div><!-- End column -->
								</div><!-- End row -->

							</form>
							<?php 
							if(isset($_SESSION['msg']))
							{
								if ($_SESSION['msg']==2)
								{
									unset ($_SESSION ['msg']); 
								echo '<script>alert("Old password doesnt match!!")</script>';
								}
								if ($_SESSION['msg']==1)
								{
									unset ($_SESSION ['msg']); 
									echo '<script>alert("Password changed successfully!!")</script>';
								}
							}	
								
							?>
							
							
			
						</div><!-- End hotel-listing-form -->
					</div><!-- End Box -->
				</div><!-- End in-content-wrapper -->
			</div><!-- End change-password -->
		</section>
		<!-- ===========End Innerpage-wrapper============= -->

	</div><!-- end wrapper -->



	<script type="text/javascript">
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>










	<!-- Optional JavaScript, Not optional it's need too -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.min.js"></script>


	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.4.1.min.js"></script>
	<script src="vendors/datatables/datatables.min.js"></script>

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