<?php
include_once 'header.php';
?>

<div id="logoutSuccess" class="card bg-success text-white w3-animate-opacity mt-4">
    <div class="card-body">User Successfully Logged out</div>
</div>

<script>
    setTimeout(function(){
        document.getElementById("logoutSuccess").style.display = "none";
    }, 5000);
</script>
