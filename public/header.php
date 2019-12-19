<?php date_default_timezone_set('Europe/London');


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body, html {
            height: 100%;
            font-family: "Comic Sans MS", sans-serif;
        }

        .bgimg {
            background-position: center;
            background-size: cover;
            background-image: url("../assets/img/pubBG.jpg")
            min-height: 75%;
        }
    </style>
    <title>The Rusty Spoon</title>
</head>

<body>
<div class="w3-top">
    <div class="w3-row w3-padding w3-black">
        <div class="w3-col s4">
            <a href="index.php" class="w3-button w3-block w3-black">HOME</a>
        </div>
        <div class="w3-col s4">
            <a href="#orders" class="w3-button w3-block w3-black">ORDERS</a>
        </div>
        <div class="w3-col s4">
            <a href="login.php" class="w3-button w3-block w3-black">LOGIN</a>
        </div>
    </div>
</div>

<header class="bgimg w3-display-container w3-grayscale-min" id="home" style="height: 200px">
    <div class="w3-display-middle w3-center">
        <span class="w3-text-black" style="font-size:70px">The Rusty Spoon</span>
    </div>
    <div class="w3-display-bottommiddle w3-center w3-hide-small">
        <span class="w3-tag">Open from 9am to 11pm</span>
    </div>
</header>

</body>
</html>
