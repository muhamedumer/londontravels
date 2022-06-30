<?php

//database connection code
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
$db = mysqli_select_db($conn, 'dblondon');


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>