<?php
header("Access-Control-Allow-Origin: *");

try {
  $conn = new PDO("mysql:host=localhost;dbname=Storm_Walker", "root", "root");
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}

$email = $_POST['email'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];

$query = "INSERT INTO Users (email, password, f_name, l_name, phone) VALUES ('$email', '$password', '$fname', '$lname', '$phone')";

$result = $conn->query($query);
if($result){
  echo json_encode(true);
} else {
  echo json_encode(false);
}
?>