<?php
include("dbconnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        email:
        <input type="text" name="email"><br>
        mobile:
        <input type="text" name="mobile"><br>

        <input type="submit"name="submit" value="login">
</form>

<?php
if(isset($_GET['submit'])){
$email=$_GET['email'];
$mobile=$_GET['mobile'];
$res = mysqli_query($conn,"select * from jobuser where email='$email'and mobile='$mobile'");
}

$result=mysqli_fetch_array($res);
if($result){

echo"you are login successfull";


}

else{
    echo"invalid email or mobile";
}
?>
</body>
</html>