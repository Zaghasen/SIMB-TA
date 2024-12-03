<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "longsor";

$konek = mysqli_connect($hostname, $username, $password, $database);
if (!$konek) {
    echo "connection failed";
}


?>