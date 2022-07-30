<?php
//Package deletion 

session_start();

if(isset($_SESSION['userid']))
{
include "../dbconn.php";
$pkgid=$_GET['id'];
$sqlqry=mysqli_query($conn,"select * from tblpackage where id='$pkgid'");
while($rows=mysqli_fetch_array($sqlqry))
{
$filename1=$rows['mainimage'];
$filename2=$rows['img2'];
$filename3=$rows['img3'];
$filename4=$rows['img4'];
$filename5=$rows['img5'];

}
if($filename1!="")
{
  
    if (file_exists("../images/".$filename1)) 
    {
      unlink("../images/".$filename1);
      $filename1="";
   }
  
}
if($filename2!="")
{
  
    if (file_exists("../images/".$filename2)) 
    {
      unlink("../images/".$filename2);
      $filename2="";
   }
  
}
if($filename3!="")
{
  
    if (file_exists("../images/".$filename3)) 
    {
      unlink("../images/".$filename3);
      $filename3="";
   }
  
}
if($filename4!="")
{
  
    if (file_exists("../images/".$filename4)) 
    {
      unlink("../images/".$filename4);
      $filename4="";
   }
  
}
if($filename5!="")
{
  
    if (file_exists("../images/".$filename5)) 
    {
      unlink("../images/".$filename5);
      $filename5="";
   }
  
}
$sql = mysqli_query($conn,"DELETE FROM tblpackage WHERE id='$pkgid'"); // delete package
$sql2=mysqli_query($conn,"delete from bestpkg where pkgid='$pkgid'"); // delete from best packages

    header('Location:managepackg.php');
mysqli_close($conn);


}
else{
  
  echo '<script> alert("ERROR: Please Check Credentials or Sign In!!!"); window.location.href="../index.php"; </script>';
}
?>