<?php
include_once 'env.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn && $conn->connect_error) {
  echo "error" . $conn->connect_error; die();
}
