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


    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">

    <script src='http://code.jquery.com/jquery-1.9.1.js'></script>
    <script src='http://code.jquery.com/ui/1.10.2/jquery-ui.js'></script>

    <style>
        body {
            font-family: 'Work Sans', sans-serif;
        }

        .bgimg {
            background-position: center;
            background-size: cover;
            background-image: url("../assets/img/pubBG.jpg")
            min-height: 75%;
        }

        .mt-6 {
            margin-top: 5.25rem !important;
        }
    </style>
    <title>The Rusty Spoon</title>
</head>

<body>
<div class="w3-top">
    <div class="w3-row w3-padding w3-black">
        <div class="w3-col s4">
            <a href="landing.php" class="w3-button w3-block w3-black">HOME</a>
        </div>
        <div class="w3-col s4">
            <a href="#orders" class="w3-button w3-block w3-black">ORDERS</a>
        </div>
        <div class="w3-col s4">
            <a href="login.php" class="w3-button w3-block w3-black">LOGIN</a>
        </div>
    </div>
</div>

<header class="w3-display-container w3-grayscale-min" id="home" style="padding-top: 250px">
    <div class="w3-display-middle w3-center">
        <span class="w3-text-black" style="font-size:70px">The Rusty Spoon</span>
    </div>
    <div class="w3-display-bottommiddle w3-center w3-hide-small">
        <span class="w3-tag">Open from 9am to 11pm</span>
    </div>
</header>

</body>
</html>
