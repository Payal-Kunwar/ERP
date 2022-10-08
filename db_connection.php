<?php


$servername = "localhost";//Server Name
$username = "root";//Server User Name
$password = "root";//Server Password
$dbname = "erp_proj";//Database Name

//Create DB Connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error()); 
}


?>
