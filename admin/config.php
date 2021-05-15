<?php
$servername = "localhost";
$username = "root";
$password = "";
$mydb = "club_portfolio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $mydb);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}
?>