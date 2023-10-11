<?php

// echo "welcome <br>";

// creating connection

$servername= "localhost";
$username="root";
$password="";
$database="userone";

// connecting to database

$conn= mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("sorry we are failed to connect".mysqli_connect_error());
    
}
else
// echo "connection is Successful";





?>