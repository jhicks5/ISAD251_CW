<?php
include_once 'header.php';
include_once '../src/model/repository.php';
if(empty($_SESSION['currentCustID'])){
    header("Location: login.php");
}
?>

<form action="../public/_ordersdetails.php" method="GET">
    <div class="container pt-5">
        <div class="form-group">
            <label for="selectOrderForm">Select The Order ID</label>
            <select class="form-control form-control-lg" id="selectcontrol" name="selectcontrol">
            <?php
            $tablename = 'CustOrders';
            if (isset($tablename)) {
                $db = new repository();
                $results = $db->getAll($tablename);


                foreach($results as $row){
                    ?>
                    <option id="selected_order"><?php echo $row['OrderId']?></option>
                <?php } ?>
            <?php } ?>
            </select>
        </div>
        <button type="Submit" value="Submit" id="Submit" class="btn btn-primary">See Details</button>
    </div>
</form>

