<?php

require ('private/db.php');
session_start();

$query = "SELECT  user_id, username, naam FROM users WHERE 1";
$stmt = $dbc->prepare($query) or die('error prepare');
$stmt->bind_result($userid,$username, $naam) or die("error binding result");
$result = $stmt->execute() or die('error finding user');
$numbersOfRow = $stmt->fetch();

?>


<div class="header">



    <div class="avatar">
        <img src="images/profileimgtest.jpg" alt="Avatar" class="avatar">
    </div>

    <h4><?php echo $username?></h4>
    <h6><?php echo $naam?></h6>

<!--    <div class="search_bar">-->
<!--        <form>-->
<!--            <input type="text" class="search_type" placeholder="Search.." name="search">-->
<!--            <button type="submit" class="search_click"><i class="fa fa-search"></i></button>-->
<!--        </form>-->
<!--    </div>-->

</div>
