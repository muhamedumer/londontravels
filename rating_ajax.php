<?php

include "dbconn.php";
$userid=$_POST['user_name'];
$postid = $_POST['postid'];
$rating = $_POST['rating'];
$review = $_POST['user_review'];
date_default_timezone_set('Asia/kolkata');    
$date=date("Y-m-d");

$insertquery = "INSERT INTO post_rating(userid,postid,review,rating,status,date) values('$userid','$postid','$review','$rating',0,'$date')";
mysqli_query($conn,$insertquery);

//get average
$query = "SELECT ROUND(AVG(rating),1) as averageRating FROM post_rating WHERE postid=".$postid;
$result = mysqli_query($conn,$query);
$fetchAverage = mysqli_fetch_array($result);
$averageRating = $fetchAverage['averageRating'];
$return_arr = array("averageRating"=>$averageRating); 
/*$return_arr = array("averageRating"=>$s);*/
echo json_encode($return_arr);