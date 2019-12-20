<?php
include_once 'header.php';
if(empty($_SESSION['currentCustID'])){
    header("Location: login.php");
}