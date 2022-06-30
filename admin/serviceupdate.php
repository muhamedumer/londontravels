<?php
if(isset($_REQUEST['Update']))
{
    session_start();
    include "../dbconn.php";

  //retrieving values from text boxes and dropbox
  $serv1name=$_POST['serv1name'];  
  $serv2name=$_POST['serv2name']; 
  $serv3name=$_POST['serv3name']; 
  $serv4name=$_POST['serv4name'];  
  $serv5name=$_POST['serv5name']; 
  $serv6name=$_POST['serv6name']; 
  $serv7name=$_POST['serv7name'];  
  $serv8name=$_POST['serv8name']; 
  $serv9name=$_POST['serv9name']; 

  $serv1desc=$_POST['serv1desc'];
  $serv2desc=$_POST['serv2desc'];
  $serv3desc=$_POST['serv3desc'];
  $serv4desc=$_POST['serv4desc'];
  $serv5desc=$_POST['serv5desc'];
  $serv6desc=$_POST['serv6desc'];
  $serv7desc=$_POST['serv7desc'];
  $serv8desc=$_POST['serv8desc'];
  $serv9desc=$_POST['serv9desc'];

  // Attempt update query execution into service table
  $sql="update tblservice set title='$serv1name', descr='$serv1desc' where id='1'";
  mysqli_query($conn, $sql); 
  $sql="update tblservice set title='$serv2name', descr='$serv2desc' where id='2'";
  mysqli_query($conn, $sql); 
  $sql="update tblservice set title='$serv3name', descr='$serv3desc' where id='3'";
  mysqli_query($conn, $sql); 
  $sql="update tblservice set title='$serv4name', descr='$serv4desc' where id='4'";
  mysqli_query($conn, $sql); 
  $sql="update tblservice set title='$serv5name', descr='$serv5desc' where id='5'";
  mysqli_query($conn, $sql); 
  $sql="update tblservice set title='$serv6name', descr='$serv6desc' where id='6'";
  mysqli_query($conn, $sql); 
  $sql="update tblservice set title='$serv7name', descr='$serv7desc' where id='7'";
  mysqli_query($conn, $sql); 
  $sql="update tblservice set title='$serv8name', descr='$serv8desc' where id='8'";
  mysqli_query($conn, $sql); 
  $sql="update tblservice set title='$serv9name', descr='$serv9desc' where id='9'";
  mysqli_query($conn, $sql); 
}