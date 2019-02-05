<?php
header("Access-Control-Allow-Origin: *");

try {
  $conn = new PDO("mysql:host=localhost;dbname=Storm_Walker", "root", "root");
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}

$time = $_POST['time'];
$date = $_POST['date'];
$image = $_POST['image'];
$description = $_POST['description'];

$query = "INSERT INTO Appointments (user_id, barber_id, time, date, image, description, services) VALUES ('1', '1', '$time', '$date', '$image', '$description', 'haircut')";

$result = $conn->query($query);
if($result){
  echo json_encode(true);
} else {
  echo json_encode(false);
}
?>