<?php

include_once __DIR__ . '/../env.php';
include __DIR__ . '/../database.php';

if(empty($_POST['id'])) {
    die('ID non inserito');
}

$roomId = $_POST['id'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];
$roomNumber = $_POST['room_number'];

$sql = "SELECT * FROM stanze WHERE id = $roomId";

$result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
     $room = $result->fetch_assoc();
  } else {
      die('ID non esistente');
  }

$sql = "UPDATE 'stanze'
        SET room_number = $roomNumber , 'beds' = $beds , 'floor' = $floor
        WHERE id = $roomId";

  

if ($result) {
    header("Location: $basePath/show/show.php?id=$roomId");
} else {
    echo 'KO';
}
$result = $conn->query($sql); 