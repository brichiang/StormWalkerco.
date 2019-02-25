<?php
header("Access-Control-Allow-Origin: *");

try {
  $conn = new PDO("mysql:host=localhost;dbname=Storm_Walker", "root", "root");
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM Barbers WHERE email='$email' AND password='$password'"; 

$result = $conn->query($query);
if($result){
  $allowed = $result->fetchAll();
  echo json_encode($allowed);
} else {
  echo json_encode(false);
}
?>
