<?php

include_once __DIR__ . '/../env.php';
include __DIR__ . '/../database.php';
include __DIR__ . '/../function.php';

if(empty($_POST['id'])) {
    die('ID non inserito');
}
if(empty($_POST['beds'])) {
    die('Letti non inserito');
}
if(empty($_POST['floor'])) {
    die('Piano non inserito');
}
if(empty($_POST['room_number'])) {
    die('Numero stanza non inserito');
}

$roomId = $_POST['id'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];
$roomNumber = $_POST['room_number'];

$result = getById($conn,'stanze',$roomId);


if(count($result) > 0) {
    $sql = "UPDATE stanze SET room_number = ?, beds = ?, floor = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("iiii", $roomNumber, $beds, $floor, $roomId);
    $stmt->execute();
    $conn->close();

    if ($stmt ->affected_rows > 0) {
        header("Location: $basePath/show/show.php?id=$roomId");
    } else {
        echo 'KO';
    }
} elseif (count($result) == 0) {
    die();
} else {
    die('Stanza non esiste');
}


 
