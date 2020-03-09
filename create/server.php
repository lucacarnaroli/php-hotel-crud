<?php   
include __DIR__ . '/../database.php';
include_once __DIR__ .' /../env.php';

if(empty($_POST['beds'])) {
    die('Letti non inseriti');
}
if(empty($_POST['floor'])) {
    die('Piano non inserito');
}
if(empty($_POST['room_number'])) {
    die('Numero stanza non inserito');
}

$beds = $_POST['beds'];
$floor = $_POST['floor'];
$roomNumber = $_POST['room_number'];

$sql = "INSERT INTO stanze (beds, floor, room_number, created_at, updated_at) VALUES(?,?,?,NOW(), NOW())";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $beds, $floor, $roomNumber);

$stmt->execute();

if(isset($stmt->insert_id)) {
    header("Location: $basePath/show/show.php?id=$stmt->insert_id");
} else {
    echo 'KO';
}