<?php
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_hash = password_hash($password, PASSWORD_DEFAULT);

include 'connect.php';
$sql = "INSERT INTO users(name, email, pass) VALUES('$name','$email','$password_hash')";
$result = mysqli_query($conn, $sql);

if($result){
  header('location: loginin.php');
}

?>