<!--delete visa category from db-->
<?php
session_start();
if(isset($_SESSION['userid']))
{
include "../dbconn.php";
$id=$_GET["id"];
$sql1=mysqli_query($conn,"delete from tblvisatype where id='$id'");

header("location:listvisatype.php");
}
else{
  
  echo '<script> alert("ERROR: Please Check Credentials or Sign In!!!"); window.location.href="../index.php"; </script>';
}

?>