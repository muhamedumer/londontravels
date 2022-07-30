<!--Add gallery videos to db-->
<?php 
session_start();
$_SESSION['menuid']=3;
if(isset($_SESSION['userid']))
{
include "../dbconn.php";
if(isset($_POST['submit'])){

$vidname=$_POST['title'];
$videofile=$_FILES["video"]["name"];
if($videofile!=NULL)
 {
    $target_dir = "../videos/";
    $target_file = $target_dir . basename($_FILES["video"]["name"]);
    $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $tempv1 = explode(".", $_FILES["video"]["name"]);
    $vid = round(microtime(true)) . basename($videofile,'.'.$imageFileType) . '.' .end($tempv1);
    move_uploaded_file($_FILES["video"]["tmp_name"], "../videos/" . $vid);
 }
$sql="INSERT INTO tblvideo(title,videopath)values('$vidname','$vid')";
if (mysqli_query($conn, $sql)) { ?>
	<script>alert("video added to Gallery successfully"); </script>
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
	$("#video").change(function(){
   
   var ext = $('#video').val().split('.').pop().toLowerCase();
   console.log(ext, "Hello, world!");
 $("#file_error").html("");
 $(".file_upload").css("border-color","#F0F0F0");
 var file_size = $('#video')[0].files[0].size;
 if($.inArray(ext, ['mp4','WebM','avi']) < 0) {
     alert('invalid filetype! Only MP4,webm and AVI are allowed');
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
	
	<div class="sidebar-left">
            <div class="sidebar-topbar text-center">
				<i class="fa fa-plane"></i><span class="text">Admin</span>
			</div> <!-- End sidebar-topbar -->

    
                <div class="side-menu">
                    <ul class="navbar-nav">
					
                        <li class="nav-item" id="dashboard-link">
                            <a href="adminhome.php" class="items-list first">
                                <span><i class="fa fa-home link-icon" data-toggle="tooltip" data-html="true"
                                        title="Dashboard"></i></span>
                                <span class="items-list-text">Dashboard</span>
                            </a>
                        </li>
						<li class="nav-item">
						<a href="#users" class="items-list" data-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-image" data-toggle="tooltip" data-html="true"
									title="Userscc"></i></span>
							<span class="items-list-text">Manage Gallery</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="users">
							<a class="items-list1" href="addpic.php">Picture Gallery</a>
							<a class="items-list1" href="addvideo.php">Video gallery</a>
						</div><!-- End sub-menu -->
					</li>
                        <li class="nav-item">
                            <a href="serviceEdit.php" class="items-list">
                                <span><i class="fas fa-pencil-alt" data-toggle="tooltip" data-html="true"
                                        title="Services"></i></span>
                                <span class="items-list-text">Edit Services</span>
                            </a>
                        </li>
    
                        <li class="nav-item">
                            <a href="review.php" class="items-list">
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
                                    href="passwordchange.php"><i class="fas fa-key"></i></li>
                            
                            <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Logout"><a href="logout.php"><i
                                        class="fas fa-power-off"></i></a></li>
                    </ul>
                </div><!-- End side-bar-bottom -->
            </div><!-- End sidebar-left -->
		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content add-details">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Add gallery videos</h3>
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
						
							<form class="text-center" name="myForm" id="form1" action="addvideo.php" method="post" enctype="multipart/form-data">
								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect07" class="">Video title</label>
											<input type="text" name="title" class="form-control" required id="inputGroupSelect07">
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->
								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect07" class="">File to upload</label>
                                        
											<input type="file" name="video" id="video" class="file_upload form-control" required accept="video/mp4, video/m4p, video/m4v, video/mpg, video/webm"><span id="file_error"></span>
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