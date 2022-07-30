<!--Add visa details to db-->
<?php 
session_start();
$_SESSION['menuid']=8;
if(isset($_SESSION['userid']))
{
include "../dbconn.php";
if(isset($_POST['submit'])){

$visaname=$_POST['visaname'];
$desc=$_POST['visadesc'];
$category=$_POST['category'];
$country=$_POST['country'];
$filename1= $_FILES["img1"]["name"];

if($filename1!=NULL)
{
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["img1"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$temp = explode(".", $_FILES["img1"]["name"]);
$pic1 = round(microtime(true)) . basename($filename1,'.'.$imageFileType) . '.' .end($temp);
move_uploaded_file($_FILES["img1"]["tmp_name"], "../images/" . $pic1);
    
}



$sql="INSERT INTO tblvisa(title,image,descr,category,country)values('$visaname','$pic1','$desc','$category','$country')";
if (mysqli_query($conn, $sql)) { ?>
	<script>alert(" Visa detailes added successfully"); </script>

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
	<title>Add Visa</title>
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

function getcat(val) {
	$.ajax({
	type: "POST",
	url: "getdropdown.php",
	data:'country='+val,
	success: function(data){
		$("#category").html(data);
	}
	});
    console.log(data);
}

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
								<h3>Visa</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						

					</div><!-- end row -->

					<div class="box">

						<div class="row">
							<div class="col">
								<div class="details-text">
									<h4>Add Visa details</h4>
								</div><!-- end details-text -->
							</div><!-- End column -->
						</div><!-- end row -->
						<div class="hotel-listing-form">
						<form class="text-center" name="myForm" id="form1" action="addvisa.php" method="post" enctype="multipart/form-data">
						
								<div class="row">
									<div class="col-sm-12">
										<div class="form-row">
											<div class="col-md">
												<div class="form-group">
													<label for="to" class=""> Visa Title</label>
													<input type="text" class="form-control" required id="to" name="visaname">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md">
											
												<div class="form-group">
												<label for="filePhoto1" class="">Image</label>
												<input type="file" name="img1" id="filephoto1" class="file_upload1 form-control" required accept="image/jpg,image/png,image/jpeg,image/gif" >
												<span id="file_error1"></span>	
                                                Recommended dimension:880*400
												</div><!-- end form-group -->
											</div><!-- End column -->
										</div>
										<div class="form-row">
                                        <div class="col-md">
                                        <div class="form-group">
													<label for="country" class="">Country</label>
													<select onChange="getcat(this.value);" id="country" class="form-control" name="country" required>
             <option value="">-- Select country --</option>
             <?php
          $records = mysqli_query($conn, "SELECT country From tblcountry");
          
                  while($data = mysqli_fetch_array($records))
                  {

                      ?> 

                      <option value="<?php echo $data['country']; ?>"><?php echo $data['country']; ?></option>
                 <?php }	?>

              
</select>
												</div><!-- end form-group -->
                                        </div>
											<div class="col-md">
												<div class="form-group">
													<label for="category" class="">Category</label>
													<select id="category" class="form-control" name="category" required>
                       
                       </select>
												</div><!-- end form-group -->
											</div><!-- End column -->
										</div><!-- end form-row -->
									
										<div class="form-row">
											<div class="col-md">
												<div class="form-group">
													<label for="inputGroupSelect07" class="">Description</label>
													<textarea cols="50" class="form-control" name="visadesc" id="inputGroupSelect07" maxlength="500" required></textarea>
													
												</div><!-- end form-group -->	
											</div><!-- End column -->
											
										</div><!-- end form-row -->
									
											
										
										
										
											
										
										<ul class="list-inline">
											<li class="list-inline-item">
												<button type="submit" class="btn" id="submitbt" name="submit" type="submit">Add Visa</button>
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