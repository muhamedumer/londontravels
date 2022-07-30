<!--show contact messages-->
<?php 
session_start();
$_SESSION['menuid']=9;
if(isset($_SESSION['userid']))
{ ?>
<!doctype html>
<html lang="en">

<head>
	<title>Inbox</title>
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
								<h3>Messages</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						

					</div><!-- end row -->

					<div class="box">
						
						
						<table class="table table-hover mx-auto">
						<thead class="pkgtitle text-center">
                            <tr>
                                
							<td>UserName
                            </td>
                            <td>Message</td>
                            <td>Usermail</td>
                            <td>To_mail</td>
                            <td>Phone</td>
                            
                            <td>Category</td>
                            <td>Date</td>
                            <td>Time</td>
                            <td style="text-align: left;">Action</td>
                            </tr>
						</thead>
						<?php
								$sql=mysqli_query($conn,"select * from contact order by id desc;");
								while($rows = mysqli_fetch_array($sql))
								{ 
									$id=$rows['id'];
									$username=$rows['username'];
                                    $usermail=$rows['usermail'];
                                    $tomail=$rows['to_mail'];
                                    $phone=$rows['phone'];
                                    $msg=$rows['message'];
                                    $category=$rows['category'];
                                    $date=$rows['date'];
                                    $time=$rows['time'];
									?>
							<tr class="unread">
								
                            <td><?php echo $username ?></td>
                            <td><?php echo $msg ?>
								</td>
                            <td><?php echo $usermail ?></td>
                            <td><?php echo $tomail ?></td>
                            <td><?php echo $phone ?></td>
								
								<td><?php echo $category ?></td>
                                <td><?php echo $date ?></td>
                                <td><?php echo $time ?></td>
								
							

								<td style="text-align: left;">
                                
								
							<a Title="delete" href="deletemsg.php?id=<?php echo $id; ?>" onclick="return checkDelete()"><i class="fa fa-trash stars"></i></td>
								
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