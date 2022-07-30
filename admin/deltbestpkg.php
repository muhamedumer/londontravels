<!--delete package priority -->
<?php
session_start();
if(isset($_SESSION['userid']))
{
include "../dbconn.php";
$id=$_GET["id"];

$sql=mysqli_query($conn,"update tblpackage  set status=0 where id='$id'");
$sql2=mysqli_query($conn,"delete from bestpkg where pkgid='$id'");
header("location:bestpkg.php");
}
else{
  
  echo '<script> alert("ERROR: Please Check Credentials or Sign In!!!"); window.location.href="../index.php"; </script>';
}
?>