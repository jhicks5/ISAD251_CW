<?php
include_once ("header.php");
include_once '../src/model/repository.php';

if(empty($_SESSION['currentCustID'])){
    header("Location: login.php");
}

if($_SESSION["fromFood"] == TRUE){
    include_once ("_food.php");
}
else{
    include_once ("_drinks.php");
}
?>

<div id="addOrderSuccess" class="card bg-success text-white w3-animate-opacity mt-4">
    <div class="card-body">Item successfully added to order</div>
</div>

<script>
setTimeout(function(){
    document.getElementById("addOrderSuccess").style.display = "none";
    window.location.replace("index.php")
    }, 3000);
</script>

<?php
if(!isset($_SESSION["liveOrderID"])){
    $tablename = "Orders";
    $_SESSION["liveOrderID"] = TRUE;
    if (isset($tablename)) {
        $db = new repository();
        $db->addToOrder($tablename);
    }
}
?>