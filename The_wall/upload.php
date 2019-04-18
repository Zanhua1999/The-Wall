<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>uploaden</title>
</head>
<body>


<?php
include ('header.php');

?>

<div id="mySidenav" class="sidenav">

    <a href="javascript:void(0)" class="X" onclick="closeNav()">&times;</a>

    <a href="main.html">main</a>
    <a href="userpage.html">profile</a>
    <a href="uploaden.html">upload</a>
    <a href="friends.html">Friends</a>
    <a href="settings.html">instellingen</a>
</div>


<span style="font-size:40px;cursor:pointer" onclick="openNav()">  </span>

<script src="javas/js.js"></script>


<form action="process.php" method="post" enctype="multipart/form-data">
    <h1>Upload</h1>


    <div class="upload_from">

        <div class="title_div"><input class="title"  name="title" placeholder="Title"><br></div>

        <div class="story_div"><textarea class="story" name="story" placeholder="Type your story, max 140 char"></textarea><br></div>


        <div class="file">
            <p>upload</p>
            <img id="output" height="200em"/><br>
            <input id="hide" type="file" name="pic" onchange="loadFile(event)" accept="image/*">
            <input class="upload_button" type="button" value="" name="pic_button" onclick="document.getElementById('hide').click()">
            <script>
                var loadFile = function(event) {
                    var output = document.getElementById('output');
                    output.src = URL.createObjectURL(event.target.files[0]);
                };
            </script>
        </div>

        <div class="submit_div"><input class="submit" type="submit" name="submit" value="Posten"><br></div>

    </div>
</form>

</body>
</html>