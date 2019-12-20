<?php
session_start();
include_once 'header.php';
?>
<div class="container mt-5">
    <div class="card-deck">
        <div class="card" style="width:400px">
            <a href="_drinks.php" style="color:black">
            <img class="card-img-top" src="../assets/img/drinks_btn.png" alt="Drinks image">
            <div class="card-body text-center">
                <p class="card-text">Drinks</p>
            </div>
            </a>
        </div>
        <div class="card" style="width:400px">
            <a href="_food.php" style="color:black">
            <img class="card-img-top" src="../assets/img/food_btn.jpg" alt="Drinks image">
            <div class="card-body text-center">
                <p class="card-text">Food</p>
            </div>
            </a>
        </div>
        <div class="card" style="width:400px">
            <a href="_orders.php" style="color:black">
            <img class="card-img-top" src="../assets/img/orders_btn.png" alt="Drinks image">
            <div class="card-body text-center">
                <p class="card-text">Your Orders</p>
            </div>
            </a>
        </div>
    </div>
</div>