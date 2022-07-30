<!--Add gallery pictures to db-->
<?php 
session_start();
$_SESSION['menuid']=3;
if(isset($_SESSION['userid']))
{
include "../dbconn.php";
if(isset($_POST['submit'])){

$imgname=$_POST['title'];
$filename= $_FILES["image"]["name"];
if($filename!=NULL)
{
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$temp = explode(".", $_FILES["image"]["name"]);
$mainpic = round(microtime(true)) . basename($filename,'.'.$imageFileType) . '.' .end($temp);
move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $mainpic);
    
}
$sql="INSERT INTO tblgallery(title, galrypic)values('$imgname','$mainpic')";
if (mysqli_query($conn, $sql)) { ?>
	<script>alert("Photo added to Gallery successfully"); </script>
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
	<title>Manage Gallery</title>
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
<script>

$(document).ready(function(){
	$("#filePHOTO1").change(function(){
  
  var ext = $('#filePHOTO1').val().split('.').pop().toLowerCase();
  $("#file_error").html("");
$(".file_upload1").css("border-color","#F0F0F0");
var file_size = $('#filePHOTO1')[0].files[0].size;
if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
  alert('invalid filetype! Only jpg,jpeg,png are allowed');
  $("#submitbt").attr("disabled",true);
  return false;
  }
else if(file_size>5000000) {

$("#file_error").html("<p style='color:#FF0000'>File size is greater than 5mb</p>");
$(".file_upload1").css("border-color","#FF0000");
$("#submitbt").attr("disabled",true);
return false;
}

$("#submitbt").removeAttr("disabled");
return true;
});
});
</script>



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
								<h3>Add gallery pictures</h3>
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
						
							<form class="text-center" name="myForm" id="form1" action="addpic.php" method="post" enctype="multipart/form-data">
								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect07" class="">Picture title</label>
											<input type="text" name="title" class="form-control" required id="inputGroupSelect07">
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->
								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="filePHOTO1" class="">File to upload</label>
											<input type="file" name="image" id="filePHOTO1" class="file_upload1 form-control" required accept="image/jpg,image/png,image/jpeg,image/gif" >
											<span id="file_error"></span>
											NB: Recommended image dimension for best view:1440*1080
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->
								

							
								
								<ul class="list-inline">
									<li class="list-inline-item">
										<button type="submit" id="submitbt" name="submit" class="btn">Upload</button>
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