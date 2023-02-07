<?php
// connect to the Database
$servername ="localhost";
$username ="root";
$password ="";
$database = "ankur";

// create a connection
$conn =mysqli_connect($servername,$username,$password,$database);

// Die if connection was not successful
if (!$conn){
    die("sorry we failed to connect: ".mysql_connect_error());
}
else{
echo "connection was successful";
}
?>