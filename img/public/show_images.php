<?php
$mysqli = new mysqli('localhost','root', '', '24577_db') or die ('Error connecting');
$query = "SELECT location, title, description FROM images ORDER BY image_id DESC";
$stmt = $mysqli->prepare($query) or die ('Error preparing.');
$stmt->bind_result($location,$title,$description) or die ('Error binding result.');
$stmt->execute() or die ('Error executing.');

while ($success = $stmt->fetch()) {
    echo '<img style="width: 300px;" src="' . $location . '"/><br>';
    echo 'Title: ' . $title . '<br>';
    echo 'Description: ' . $description . '<br><br>';
}

