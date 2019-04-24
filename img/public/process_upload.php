<?php
echo 'Naam van de file:' . $_FILES['uploaded_image']['name'] . '<br>';
echo 'Grootte van file in bytes:' . $_FILES['uploaded_image']['size'] . '<br>';
echo 'Tijdelijke opslaglocatie:' . $_FILES['uploaded_image']['tmp_name'] . '<br>';

//IMAGE OP DE JUISTE PLAATS ZETTEN (IN MAP IMAGES)
$temp_location = $_FILES['uploaded_image']['tmp_name'];
$target_location = 'images/' . time() . $_FILES['uploaded_image']['name'];

move_uploaded_file($temp_location, $target_location);

$title = $_POST['title'];
$description = $_POST['description'];

$mysqli = new mysqli ('localhost', 'root', '', '24577_db') or die ('Error connecting');
$query = "INSERT INTO images VALUES (0,?,?,?)";
$stmt = $mysqli->prepare($query) or die ('Error preparing.');
$stmt->bind_param('sss', $target_location, $title, $description) or die ('Error binding params.');
$stmt->execute() or die ('Error inserting image in database.');
$stmt->close();

header('Location: show_images.php');