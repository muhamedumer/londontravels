<!--update top package list-->
<?php
session_start();
if(isset($_SESSION['userid']))
{
    $pkgid=$_GET["id"];
   include "../dbconn.php";
   $sql=mysqli_query($conn,"update tblpackage set status=1 where id='$pkgid'");
   $sql2=mysqli_query($conn,"select * from tblpackage where id='$pkgid' ;");
								while($rows = mysqli_fetch_array($sql2))
								{ $pkgname=$rows['pkgname'];
                                    $price=$rows['price'];
									$mainpic=$rows['mainimage'];
									$rating=$rows['avgrating'];
$sql3=mysqli_query($conn,"insert into bestpkg(pkgname,pkgid,mainpic,price,avgrating) values ('$pkgname','$pkgid','$mainpic','$price','$rating')");
                                }
header("location:managepackg.php");                
}
else{
  
  echo '<script> alert("ERROR: Please Check Credentials or Sign In!!!"); window.location.href="../index.php"; </script>';
}
?>