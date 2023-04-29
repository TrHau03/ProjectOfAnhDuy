<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "do_an_2023";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
}
else{
    die("Connection failed: " . mysqli_connect_error());
    }
?>