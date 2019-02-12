<?php
header("Access-Control-Allow-Origin: *");

try {
  $conn = new PDO("mysql:host=localhost;dbname=Storm_Walker", "root", "root");
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}

$query = "SELECT * FROM Barbers"; 

$result = $conn->query($query);
if($result){
  $appointments = $result->fetchAll();
  echo json_encode($appointments);
} else {
  echo json_encode(false);
}
?>
