<?php
  include __DIR__ . '/../database.php';
  include __DIR__ . '/../function.php';


  $roomId = $_POST['id'];

  // $sql = "SELECT * FROM stanze WHERE id = $idRoom";
$result = getById($conn,'stanze',$roomId);

  if (!$result) {
    die('ID non correto');
  }

  $sql = "DELETE FROM stanze WHERE id = $roomId";

  $resultDelete = $conn->query($sql);

  if ($resultDelete) {
    header("Location: $basePath?roomNumber=$roomId");
  } else {
    echo 'ko';
  }
$conn->close();
