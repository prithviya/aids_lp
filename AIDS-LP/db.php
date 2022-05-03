<?php 

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "aids_lp_dp");

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);
}
else
{
    echo "connection successfully";
}
?>