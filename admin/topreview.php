<!--update top review list-->
<?php
session_start();
if(isset($_SESSION['userid']))
{
    $reviewid=$_GET["id"];
   include "../dbconn.php";
   $sql=mysqli_query($conn,"update post_rating set status=1 where id='$reviewid'");
   $sql2=mysqli_query($conn,"select * from post_rating where id='$reviewid' ;");
								while($rows = mysqli_fetch_array($sql2))
								{ 
									
									$user=$rows['userid'];
									$review=$rows['review'];
									$rating=$rows['rating'];
$sql3=mysqli_query($conn,"insert into bestreview(username,reviewid,comment,rating) values ('$user',$reviewid,'$review', '$rating')");
                                }
header("location:review.php");        
}
else{
  
  echo '<script> alert("ERROR: Please Check Credentials or Sign In!!!"); window.location.href="../index.php"; </script>';
}        
?>