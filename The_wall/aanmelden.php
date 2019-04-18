<?php
$naam = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

require ('db.php');

$query = "SELECT email FROM c2363The_wall.users WHERE email = '$email'";

$result = mysqli_query($dbc,$query);

$numbersOfRow = mysqli_num_rows($result);

if ($numbersOfRow == 1){
    echo "Deze email bestaat als in de database!";
}else{

}