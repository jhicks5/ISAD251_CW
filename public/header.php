<?php date_default_timezone_set('Europe/London');
session_start();

$_SESSION["currentCustID"];
$_SESSION["selectedOrderID"];
$_SESSION["liveOrderID"];
$_SESSION["fromFood"];
//echo "CurrentCustID = ",$_SESSION["currentCustID"];
//echo "Current order is: ", $_SESSION["liveOrderID"];
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">

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
            <a href="index.php" class="w3-button w3-block w3-black">HOME</a>
        </div>
        <div class="w3-col s4">
            <a href="_orders.php" class="w3-button w3-block w3-black">ORDERS</a>
        </div>
        <div id="login" class="w3-col s4" style="display: inline">
            <a href="login.php" class="w3-button w3-block w3-black">LOGIN</a>
        </div>
        <div id="logout" class="w3-col s4" style="display: none">
            <a href="logout.php" class="w3-button w3-block w3-black">LOGOUT</a>
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
<?php
    if(isset($_SESSION["currentCustID"])){?>
        <script>
            document.getElementById("logout").style.display = "inline";
            document.getElementById("login").style.display = "none";
        </script>
<?php }
?>