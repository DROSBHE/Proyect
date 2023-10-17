<?php
// Connection variables
$dbhost	= "localhost";	   // localhost or IP
$dbuser	= "root";		  // database username
$dbpass	= "";		     // database password
$dbname	= "allcar";    // database name

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn) {
    die("No hay conexion" .mysqli_connect_error());

}
?>