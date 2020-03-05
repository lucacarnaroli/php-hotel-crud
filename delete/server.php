<?php
  include __DIR__ . '/../database.php';


  $roomId = $_POST['id'];

  $sql = "SELECT * FROM stanze WHERE id = $idRoom";

  if (empty($_POST['id'])) {
    die('ID non correto');
  }

  $sql = "DELETE FROM stanze WHERE id = $roomId";

  $result = $conn->query($sql);

  if ($result) {
    header("Location: $basePath?roomNumber=$roomId");
  } else {
    echo 'ko';
  }
$conn->close();
