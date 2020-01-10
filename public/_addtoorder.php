<?php
include_once ("header.php");
include_once '../src/model/repository.php';

if(empty($_SESSION['currentCustID'])){
    header("Location: login.php");
}
$passedID = $_GET['itemID'];
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
    $db = new repository();
    $db->createOrder();
}

if(isset($passedID)){
    $itemID = $passedID;
    $orderID = $_SESSION['liveOrderID'];
    if (isset($itemID) && isset($orderID)){
        $db = new repository();
        $db->addToOrder($itemID, $orderID);
    }

}

?>

<script>
    setTimeout(function(){
        document.getElementById("addOrderSuccess").style.display = "none";
    }, 3000);
</script>
<?php  ?>
