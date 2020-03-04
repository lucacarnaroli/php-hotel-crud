<?php
include 'env.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn && $conn->connect_error) {
  echo "error" . $conn->connect_error; die();
}

$sql = "SELECT * FROM stanze";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  $rooms = [];
  while($row = $result->fetch_assoc()) {
    
    $rooms[] = $row;
  }
} elseif ($result) {
  echo "No result";
} else {
  echo "Query error";
}
$conn->close();
