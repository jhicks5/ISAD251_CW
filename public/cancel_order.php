<?php
include_once 'header.php';
include_once '../src/model/repository.php';

if(isset($_SESSION["liveOrderID"])){
    $db = new repository();
    $db->cancelOrder();
    unset($_SESSION["liveOrderID"]);
}
?>
<div id="cancelOrderSuccess" class="card bg-success text-white w3-animate-opacity mt-4">
    <div class="card-body">Order Successfully Cancelled</div>
</div>
<?php
include_once '_orders.php';
?>


<script>
    setTimeout(function(){
        document.getElementById("cancelOrderSuccess").style.display = "none";
    }, 5000);
</script>
