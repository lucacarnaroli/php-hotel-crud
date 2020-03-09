<?php
  include 'database.php';
  include __DIR__ . '/../function.php';

  $idRoom= $_GET['id'];

  $room = getById($conn,'stanze',$idRoom);
 