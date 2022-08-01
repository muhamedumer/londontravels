<?php

//gallery image deletion 

session_start();

if(isset($_SESSION['userid']))
{
include "dbconn.php";
$id=$_GET['id'];
$sqlqry=mysqli_query($conn,"select * from tblgallery where id='$id'");
while($rows=mysqli_fetch_array($sqlqry))
{
$filename1=$rows['galrypic'];


}
if($filename1!="")
{
  
    if (file_exists("images/".$filename1)) 
    {
      unlink("images/".$filename1);
      $filename1="";
   }
  
}


$sql = mysqli_query($conn,"DELETE FROM tblgallery WHERE id='$id'"); // delete image details


    header('Location:gallery.php');
mysqli_close($conn);


}
else{
  
  echo '<script> alert("ERROR: Please Check Credentials or Sign In!!!"); window.location.href="../index.php"; </script>';
}

?>