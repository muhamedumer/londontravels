<!--show all package list and manage them-->
<?php 
session_start();
$_SESSION['menuid']=2;
if(isset($_SESSION['userid']))
{ ?>
<!doctype html>
<html lang="en">

<head>
	<title>Manage Packages</title>
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
	<link href="../css/mystyle.css" rel="stylesheet">

	<!-- Custom Stylesheet End-->

<style>
    i.fa {
  display: inline-block;
  border-radius: 60px;
  box-shadow: 0 0 2px #888;
  padding: 0.5em 0.6em;

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
		<?php 
		include "../dbconn.php";
		?>
		<section>
			<div class="content">
				<div class="content-messages">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Package List</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						

					</div><!-- end row -->

					<div class="box">
						
						
						<table class="table table-hover mx-auto">
						<thead class="pkgtitle text-center">
                            <tr>
							<td>PackageName
                            </td>
                            <td>Description</td>
                            <td>Price</td>
                            <td style="text-align: left;">Action</td>
                            </tr>
						</thead>
						<?php
								$sql=mysqli_query($conn,"select * from tblpackage order by id desc;");
								while($rows = mysqli_fetch_array($sql))
								{ 
									$id=$rows['id'];
									$pkgname=$rows['pkgname'];
                                    $price=$rows['price'];
                                    $descr=$rows['descr'];
                                    $status=$rows['status'];
									?>
							<tr class="unread">
								
                            <td><?php echo $pkgname ?></td>
								<td class="reviewbox"><?php echo $descr ?>
								</td>
								<td><?php echo $price ?>
								</td>
								
							

								<td style="text-align: left;">
                                <?php if($status==0)
							{?>
                                <a Title="mark as top package" onclick="enable()" href="toppkg.php?id=<?php echo $id; ?>"><i class="fa fa-check stars"></i></a>
                                <?php } 
                                if($status==1)
                                {?>

                                <a Title="remove from top package" onclick="return checkDelete()" href="untoppkg.php?id=<?php echo $id; ?>"><i class="fa fa-check"></i></a>
                                    <?php } ?>
                                <a Title="View" href="../packagedetail.php?id=<?php echo $id; ?>"><i class="fa fa-eye stars" ></i></a>
							

								<a Title="Edit" href="editpkg.php?id=<?php echo $id; ?>" ><i class="fa fa-pencil-alt stars" ></i></a>
								
							<a Title="delete" href="deletepkg.php?id=<?php echo $id; ?>" onclick="return checkDelete()"><i class="fa fa-trash stars"></i></td>
								
							</tr>
							<?php } ?>
						</table>
						<div class="page-navigation d-flex justify-content-end">
							<a href="#"><i class="fas fa-angle-left"></i></a>
							<a href="#"><i class="fas fa-angle-right"></i></a>
						</div><!-- end page-navigation -->
					</div><!-- end box -->
				</div><!-- end content-messages -->
			</div><!-- end content -->
		</section>
		<!-- ===========End Innerpage-wrapper============= -->


	</div><!-- end wrapper -->



	<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}

function enable()
{
	alert("This package is added to priority list!!");
}

</script>










	<!-- Optional JavaScript, Not optional it's need too -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.min.js"></script>


	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.4.1.min.js"></script>
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