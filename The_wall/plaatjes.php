<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>plaatjes</title>
    <link rel="stylesheet" href="css/sytle.css">
</head>
<body>
<?php
require ('db.php');

$query = "SELECT locatie FROM c2363The_wall.plaatjes WHERE 1 ORDER BY pic_id ASC; ";

// QUERY UITVOEREN
$result = mysqli_query($dbc, $query) or die ('De query is mislukt.');
$dbc_close = mysqli_close($dbc);

// MET EEN WHILE-LOOP ALLE GEGEVENS IN BEELD BRENGEN

while ($row = mysqli_fetch_array($result)) {
    echo  '<img src="'. $row['locatie'] .'" alt="foto"><br>';
}
$result = "";
?>

</body>
</html>