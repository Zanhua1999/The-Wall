<?php

echo $_FILES['userImage']['name'] . '<br>';
echo $_FILES['userImage']['tmp_name'] . '<br>';
echo $_FILES['userImage']['size'] . '<br>';


$temp_location = $_FILES['userImage']['tmp_name'];
$target_location = 'images/'. time() .  $_FILES['userImage']['name'];

if ($_FILES["userImage"]["size"] > 200000000) {

    echo "Sorry, your file is too large.";
}else{
    $result = move_uploaded_file($temp_location,$target_location);

}

if ($result){
    echo 'gelukt';

    $dbc = mysqli_connect('127.0.0.1','c2363Zanhua','root','c2363The_wall') or die("mislukt connectie");
    $query = "INSERT INTO plaatjes VALUE (0,'test','$target_location')";
    $result = mysqli_query($dbc,$query) or die(" mislukt");
$dbc_close = mysqli_close($dbc);
}else{
    echo 'mislukt';
}