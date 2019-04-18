<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>the Wall</title>
    <link rel="stylesheet" href="css/sytle.css">
</head>
<body>


<form action="home.php" id="inloggen">

    <label for="username"> username </label>
    <input type="text" id="username" name="username"><br>
    <label for="wachtwoord">password</label>
    <input type="password" name="password" id="wachtwoord">
</form>

<form action="aanmelden.php" id="aanmelden">
    <label for="email">email</label>
    <input type="email" name="email" placeholder="email" id="email"><br>
    <label for="name"> name </label>
    <input type="text" id="name" name="name" placeholder="naam"><br>
    <label for="wachtwoord">password</label>
    <input type="password" name="password" id="wachtwoord">

</form>
</body>
</html>