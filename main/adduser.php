<?php
session_start();
$con = new mysqli("localhost:3307","root","","omantha_tire");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
$uname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from register where email ='$email'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "This email already taken";
}
else{
    $reg = "INSERT INTO register(username, email, password)
     VALUES ( '$uname', '$email', '$password')";
     mysqli_query($con, $reg);
     echo "Registration successful";
     header('location:login.php');
}
?>