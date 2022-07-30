<!--Add package details to db-->
<?php 
session_start();
$_SESSION['menuid']=2;
if(isset($_SESSION['userid']))
{
include "../dbconn.php";
if(isset($_POST['submit'])){

$packname=$_POST['packname'];
$price=$_POST['price'];
$seats=$_POST['seats'];
$days=$_POST['days'];
$offer=$_POST['offer'];
$desc=$_POST['tourdesc'];
$category=$_POST['category'];
$filename1= $_FILES["img1"]["name"];
$filename2= $_FILES["img2"]["name"];
$filename3= $_FILES["img3"]["name"];
$filename4= $_FILES["img4"]["name"];
$filename5= $_FILES["img5"]["name"];
if($filename1!=NULL)
{
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["img1"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$temp = explode(".", $_FILES["img1"]["name"]);
$pic1 = round(microtime(true)) . basename($filename1,'.'.$imageFileType) . '.' .end($temp);
move_uploaded_file($_FILES["img1"]["tmp_name"], "../images/" . $pic1);
    
}
if($filename2!=NULL)
{
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["img2"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$temp = explode(".", $_FILES["img2"]["name"]);
$pic2 = round(microtime(true)) . basename($filename2,'.'.$imageFileType) . '.' .end($temp);
move_uploaded_file($_FILES["img2"]["tmp_name"], "../images/" . $pic2);
    
}
if($filename3!=NULL)
{
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["img3"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$temp = explode(".", $_FILES["img3"]["name"]);
$pic3 = round(microtime(true)) . basename($filename3,'.'.$imageFileType) . '.' .end($temp);
move_uploaded_file($_FILES["img3"]["tmp_name"], "../images/" . $pic3);
    
}
if($filename4!=NULL)
{
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["img4"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$temp = explode(".", $_FILES["img4"]["name"]);
$pic4 = round(microtime(true)) . basename($filename4,'.'.$imageFileType) . '.' .end($temp);
move_uploaded_file($_FILES["img4"]["tmp_name"], "../images/" . $pic4);
    
}
if($filename5!=NULL)
{
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["img5"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$temp = explode(".", $_FILES["img5"]["name"]);
$pic5 = round(microtime(true)) . basename($filename5,'.'.$imageFileType) . '.' .end($temp);
move_uploaded_file($_FILES["img5"]["tmp_name"], "../images/" . $pic5);
    
}


$sql="INSERT INTO tblpackage(pkgname,price,seats,duration,offer,descr,mainimage,img2,img3,img4,img5,category,status,avgrating)values('$packname','$price','$seats','$days','$offer','$desc','$pic1','$pic2','$pic3','$pic4','$pic5','$category',0,4)";
if (mysqli_query($conn, $sql)) { ?>
	<script>alert("Package added successfully"); </script>

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
	<title>Add Packages</title>
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

	<script>

$(document).ready(function(){
	$("#filephoto1").change(function(){
  
  var ext = $('#filephoto1').val().split('.').pop().toLowerCase();
  $("#file_error1").html("");
$(".file_upload1").css("border-color","#F0F0F0");
var file_size = $('#filephoto1')[0].files[0].size;
if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
  alert('invalid filetype! Only jpg,jpeg,png are allowed');
  $("#submitbt").attr("disabled",true);
  return false;
  }
else if(file_size>5000000) {

$("#file_error1").html("<p style='color:#FF0000'>File size is greater than 5mb</p>");
$(".file_upload1").css("border-color","#FF0000");
$("#submitbt").attr("disabled",true);
return false;
}

$("#submitbt").removeAttr("disabled");
return true;
});

$("#filephoto2").change(function(){
  
  var ext = $('#filephoto2').val().split('.').pop().toLowerCase();
  $("#file_error2").html("");
$(".file_upload2").css("border-color","#F0F0F0");
var file_size = $('#filephoto2')[0].files[0].size;
if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
  alert('invalid filetype! Only jpg,jpeg,png are allowed');
  $("#submitbt").attr("disabled",true);
  return false;
  }
else if(file_size>5000000) {

$("#file_error2").html("<p style='color:#FF0000'>File size is greater than 5mb</p>");
$(".file_upload2").css("border-color","#FF0000");
$("#submitbt").attr("disabled",true);
return false;
}

$("#submitbt").removeAttr("disabled");
return true;
});


$("#filephoto3").change(function(){
  
  var ext = $('#filephoto3').val().split('.').pop().toLowerCase();
  $("#file_error3").html("");
$(".file_upload3").css("border-color","#F0F0F0");
var file_size = $('#filephoto3')[0].files[0].size;
if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
  alert('invalid filetype! Only jpg,jpeg,png are allowed');
  $("#submitbt").attr("disabled",true);
  return false;
  }
else if(file_size>5000000) {

$("#file_error3").html("<p style='color:#FF0000'>File size is greater than 5mb</p>");
$(".file_upload3").css("border-color","#FF0000");
$("#submitbt").attr("disabled",true);
return false;
}

$("#submitbt").removeAttr("disabled");
return true;
});


$("#filephoto4").change(function(){
  
  var ext = $('#filephoto4').val().split('.').pop().toLowerCase();
  $("#file_error4").html("");
$(".file_upload4").css("border-color","#F0F0F0");
var file_size = $('#filephoto4')[0].files[0].size;
if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
  alert('invalid filetype! Only jpg,jpeg,png are allowed');
  $("#submitbt").attr("disabled",true);
  return false;
  }
else if(file_size>5000000) {

$("#file_error4").html("<p style='color:#FF0000'>File size is greater than 5mb</p>");
$(".file_upload4").css("border-color","#FF0000");
$("#submitbt").attr("disabled",true);
return false;
}

$("#submitbt").removeAttr("disabled");
return true;
});


$("#filephoto5").change(function(){
  
  var ext = $('#filephoto5').val().split('.').pop().toLowerCase();
  $("#file_error5").html("");
$(".file_upload5").css("border-color","#F0F0F0");
var file_size = $('#filephoto5')[0].files[0].size;
if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
  alert('invalid filetype! Only jpg,jpeg,png are allowed');
  $("#submitbt").attr("disabled",true);
  return false;
  }
else if(file_size>5000000) {

$("#file_error5").html("<p style='color:#FF0000'>File size is greater than 5mb</p>");
$(".file_upload5").css("border-color","#FF0000");
$("#submitbt").attr("disabled",true);
return false;
}

$("#submitbt").removeAttr("disabled");
return true;
});

});
</script>
<style>
	
	input[type="file" ]{
		background-color: white;
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
			<div class="content add-details profile User">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Packages</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						

					</div><!-- end row -->

					<div class="box">

						<div class="row">
							<div class="col">
								<div class="details-text">
									<h4>Create Package</h4>
								</div><!-- end details-text -->
							</div><!-- End column -->
						</div><!-- end row -->
						<div class="hotel-listing-form">
						<form class="text-center" name="myForm" id="form1" action="addpackg.php" method="post" enctype="multipart/form-data">
						
								<div class="row">
									<div class="col-sm-12">
										<div class="form-row">
											<div class="col-md">
												<div class="form-group">
													<label for="to" class="">Package name</label>
													<input type="text" class="form-control" required id="to" name="packname">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md">
												<div class="form-group packbox">
													<label for="to1" class="">Price:</label>
													<input type="number" class="form-control" required id="to1" name="price">
												</div><!-- end form-group -->
											</div><!-- End column -->
										</div>
										<div class="form-row">
											<div class="col-md">
												<div class="form-group">
													<label for="to2" class="">No of Seats:</label>
													<input type="number" class="form-control" required id="to2" name="seats">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md">
												<div class="form-group">
													<label for="category" class="">Category</label>
													<select name="category" id="category" class="select-input form-control" required>
            											<option value="">Select</option>
            											<option value="International">International</option>
														<option value="Domestic">Domestic</option>
													</select>
												</div><!-- end form-group -->
											</div><!-- End column -->
										</div><!-- end form-row -->
										<div class="form-row">
											<div class="col-md">
												<div class="form-group">
													<label for="to3" class="">No of Days</label>
													<input type="number" class="form-control" required id="to3" name="days">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md">
												<div class="form-group">
													<label for="to4" class="">Offer(In %)</label>
													<input type="number" class="form-control" required id="to4" name="offer">
												</div><!-- end form-group -->
											</div><!-- End column -->
											
										</div><!-- end form-row -->
										<div class="form-row">
											<div class="col-md">
												<div class="form-group">
													<label for="inputGroupSelect07" class="">Description</label>
													<textarea cols="40" class="form-control" name="tourdesc" id="inputGroupSelect07" maxlength="500" autofocus required></textarea>
													
												</div><!-- end form-group -->
												
											</div><!-- End column -->
											<div class="col-md">
											
												<div class="form-group">
												<label for="filePhoto1" class="">Main Image</label>
												<input type="file" name="img1" id="filephoto1" class="file_upload1 form-control" required accept="image/jpg,image/png,image/jpeg,image/gif" >
												<span id="file_error1"></span>	
												</div><!-- end form-group -->
											</div><!-- End column -->
											
										</div><!-- end form-row -->
									
											
										
										
										<div class="form-row">
											
											<div class="col-md">
												<div class="form-group">
													<label for="filephoto2" class="">Image 2</label>
													<input type="file" name="img2" id="filephoto2" class="file_upload2 form-control" required accept="image/jpg,image/png,image/jpeg,image/gif" >
													<span id="file_error2"></span>	
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md">
												<div class="form-group">
													<label for="filephoto3" class="">Image 3</label>
													<input type="file" name="img3" id="filephoto3" class="file_upload3 form-control" required accept="image/jpg,image/png,image/jpeg,image/gif" >
													<span id="file_error3"></span>	
												</div><!-- end form-group -->
											</div><!-- End column -->
										</div>
											
										<div class="form-row">
											
											<div class="col-md">
												<div class="form-group">
													<label for="filephoto4" class="">Image 4</label>
													<input type="file" name="img4" id="filephoto4" class="file_upload4 form-control" required accept="image/jpg,image/png,image/jpeg,image/gif" >
													<span id="file_error4"></span>	
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md">
												<div class="form-group">
													<label for="filephoto5" class="">Image 5</label>
													<input type="file" name="img5" id="filephoto5" class="file_upload5 form-control" required accept="image/jpg,image/png,image/jpeg,image/gif" >
													<span id="file_error5"></span>	
												</div><!-- end form-group -->
											</div><!-- End column -->
										</div>
										<ul class="list-inline">
											<li class="list-inline-item">
												<button type="submit" class="btn" id="submitbt" name="submit" type="submit">Create Package</button>
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