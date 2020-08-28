<?php



// Local server settings
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "college-guide";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
?>
