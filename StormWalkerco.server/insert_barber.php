<?php
header("Access-Control-Allow-Origin: *");

try {
  $conn = new PDO("mysql:host=localhost;dbname=Storm_Walker", "root", "root");
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$description = $_POST['description'];
$image = $_POST['image'];

$query = "INSERT INTO Barbers (f_name, l_name, email, password, description, image) VALUES ('$fname', '$lname', '$email', '$password', '$description', '$image')";

$result = $conn->query($query);
if($result){
  echo json_encode(true);
} else {
  echo json_encode(false);
}
?>