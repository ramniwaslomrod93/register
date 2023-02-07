<?php
include("dbconnection.php");
$id=$_GET["id"];
	$email=$_GET["email"];
	$username=$_GET["username"];
	$password=$_GET["password"];
	$mobile=$_GET["mobile"];
//prpare sql query
//$sql = "insert into emp(id,name,age,city,password) values('$id','$nm','$ag','$ct','$ps')";
$sql = "insert into jobuser (id,email,username,password,mobile) values('$id','$email','$username','$password',$mobile)";

//execute query

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);
 //echo"<br><br> <a href='listforedit.php'>List data</a>";*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
<div>
<a href="login.php"> login </a> <br/>
</div>
</body>
</html>