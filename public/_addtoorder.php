<?php
include_once ("header.php");
include_once '../src/model/repository.php';

if(empty($_SESSION['currentCustID'])){
    header("Location: login.php");
}
?>

<div id="addOrderSuccess" class="card bg-success text-white w3-animate-opacity mt-4">
    <div class="card-body">Item successfully added to order</div>
</div>

<?php
if($_SESSION["fromFood"] == TRUE){
    include_once ("_food.php");
}
else{
    include_once ("_drinks.php");
}

if(!isset($_SESSION["liveOrderID"])){
    $tablename = "Orders";
    $_SESSION["liveOrderID"] = TRUE;
    if (isset($tablename)) {
        $db = new repository();
        $db->createOrder($tablename);
    }
}
?>

<script>
    setTimeout(function(){
        document.getElementById("addOrderSuccess").style.display = "none";
    }, 3000);
</script>
