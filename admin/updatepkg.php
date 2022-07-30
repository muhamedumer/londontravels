<!-- update package details-->
<?php
if(isset($_REQUEST['Update']))
{
    session_start();
    include "../dbconn.php";

    $pkgid=$_POST['pkgid'];
    $packname=$_POST['packname'];
    $price=$_POST['price'];
    $seats=$_POST['seats'];
    $days=$_POST['days'];
    $offer=$_POST['offer'];
    $desc=$_POST['tourdesc'];
    $category=$_POST['category'];

    $sql=mysqli_query($conn,"select * from tblpackage where id='$pkgid'");
    while($rows = mysqli_fetch_array($sql))
    {

    $filename1=$rows['mainimage'];
    $filename2=$rows['img2'];
    $filename3=$rows['img3'];
    $filename4=$rows['img4'];
    $filename5=$rows['img5'];
    }
    if (!empty($_FILES['img1']['name'])) {

        if($filename1!="")
        {
  
                if (file_exists("../images/".$filename1)) 
                {
                unlink("../images/".$filename1);
                $filename1="";
            }
  
        }
            $filename1=$_FILES['img1']['name'];
                    $target_dir = "../images/";
            $target_file = $target_dir . basename($_FILES["img1"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $temp = explode(".", $_FILES["img1"]["name"]);
            $pic1 = round(microtime(true)) . basename($filename1,'.'.$imageFileType) . '.' .end($temp);
            move_uploaded_file($_FILES["img1"]["tmp_name"], "../images/" . $pic1);
            $filename1=$pic1;

    } 
    if (!empty($_FILES['img2']['name'])) {
        if($filename2!="")
        {
        
            if (file_exists("../images/".$filename2)) 
            {
            unlink("../images/".$filename2);
            $filename2="";
        }
        
        }
        $filename2=$_FILES['img2']['name'];
                    $target_dir = "../images/";
            $target_file = $target_dir . basename($_FILES["img2"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $temp = explode(".", $_FILES["img2"]["name"]);
            $pic2 = round(microtime(true)) . basename($filename2,'.'.$imageFileType) . '.' .end($temp);
            move_uploaded_file($_FILES["img2"]["tmp_name"], "../images/" . $pic2);
            $filename2=$pic2;
    } 
    if (!empty($_FILES['img3']['name'])) {
        if($filename3!="")
        {
          
            if (file_exists("../images/".$filename3)) 
            {
              unlink("../images/".$filename3);
              $filename3="";
           }
          
        }
        $filename3=$_FILES['img3']['name'];
                    $target_dir = "../images/";
            $target_file = $target_dir . basename($_FILES["img3"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $temp = explode(".", $_FILES["img3"]["name"]);
            $pic3 = round(microtime(true)) . basename($filename3,'.'.$imageFileType) . '.' .end($temp);
            move_uploaded_file($_FILES["img3"]["tmp_name"], "../images/" . $pic3);
            $filename3=$pic3;
    } 
    if (!empty($_FILES['img4']['name'])) {

                if($filename4!="")
        {
        
            if (file_exists("../images/".$filename4)) 
            {
            unlink("../images/".$filename4);
            $filename4="";
        }
        
        }
        $filename4=$_FILES['img4']['name'];
                    $target_dir = "../images/";
            $target_file = $target_dir . basename($_FILES["img4"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $temp = explode(".", $_FILES["img4"]["name"]);
            $pic4 = round(microtime(true)) . basename($filename4,'.'.$imageFileType) . '.' .end($temp);
            move_uploaded_file($_FILES["img4"]["tmp_name"], "../images/" . $pic4);
            $filename4=$pic4;
    } 
    if (!empty($_FILES['img5']['name'])) {

                if($filename5!="")
        {
        
            if (file_exists("../images/".$filename5)) 
            {
            unlink("../images/".$filename5);
            $filename5="";
        }
        
        }
        $filename5=$_FILES['img5']['name'];
                    $target_dir = "../images/";
            $target_file = $target_dir . basename($_FILES["img5"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $temp = explode(".", $_FILES["img5"]["name"]);
            $pic5 = round(microtime(true)) . basename($filename5,'.'.$imageFileType) . '.' .end($temp);
            move_uploaded_file($_FILES["img5"]["tmp_name"], "../images/" . $pic5);
            $filename5=$pic5;
    }  
    $sql = mysqli_query($conn,"update tblpackage set pkgname='$packname', price='$price', seats='$seats', duration='$days', 
                        offer='$offer', descr='$desc', category='$category', mainimage='$filename1', img2='$filename2', img3='$filename3', img4='$filename4', img5='$filename5' WHERE id='$pkgid'");
    $sql1 = mysqli_query($conn,"update bestpkg set pkgname='$packname', price='$price', mainpic='$filename1' WHERE pkgid='$pkgid'");
    header("location:managepackg.php");
    
}

?>