<?php 
session_start();
$con = new mysqli("localhost:3307","root","","omantha_tire");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
$uname = $_POST['username'];
$password = $_POST['password'];

$s = "select * from register where username ='$uname' && password = '$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    header('location:index.php');
}
else{
    echo "Invalid Email or Password";
}
?>