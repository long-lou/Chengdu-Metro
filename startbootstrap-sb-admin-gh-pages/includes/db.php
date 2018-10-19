<?php

//1. Open database connection
$dbhost="localhost"; 
$dbuser="li-hulongchen";
$dbpass="569iR517je2T";
$dbname="2201613130310";

$connection=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection is ok
if (mysqli_connect_errno()){
    die("Database connection failed: " .
        mysqli_connect_error() .
       " (" . mysqli_connect_errno() . ")"
     );
}

?>