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
            <label for="selectOrderForm" class="pb-4">Select a Previous or Existing Order</label>
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

<div class="container pt-5">
    <label class="pt-4 pb-4">Currently Active Orders</label>
    <?php
    $tablename = 'OrderDetails';
    //$_SESSION["liveOrderID"] = $selectedOrder;
    if(isset($tablename)) {
        $db = new Repository();
        $results = $db->getAll($tablename);

        if ($results) {
            $columns = empty($results) ? array() : array_keys($results[0]);
            $idColumn = $columns[0];
            $tableString = '<table class="w3-table w3-striped w3-bordered"><tr>';
            $inputString = '';
            $insertString = '';
            foreach ($columns as $column) {
                $tableString .= '<th>' . $column . '</th>';
                $inputString .= '<th>' . $column . '</th>';
                $insertString .= '<td><input type=\'text\' name=\'' . $column . '\'/></td>';

            }
            echo $tableString;
            foreach ($results as $row) {
                echo '<tr>';

                foreach ($row as $cell) {
                    echo '<td>' . $cell . '</td>';
                }
            }
            echo '</table>';
        }
    }
    ?>
    <div id = "noOrders" class="pt-3 pb-4">There are no currently active orders</div>
    <a type="Checkout" id="Checkout" class="btn btn-primary text-white mt-4">Checkout</a>
    <a onclick="cancelClick()" href="cancel_order.php" type="Cancel" id="Cancel" class="btn btn-danger text-white mt-4">Cancel Order</a>
</div>
<?php
    if(!$results){
        ?>
        <script>document.getElementById("Cancel").style.display = "none";</script>
        <script>document.getElementById("Checkout").style.display = "none";</script>
        <?php
    }
    if($results){
    ?>
    <script>document.getElementById("noOrders").style.display = "none";</script>
    <?php
    }?>

<script>
    function cancelClick(cardID){
        let userconfirm = confirm("Are you sure you want to cancel this order?");
        if (userconfirm === true){
            location.href = "cancel_order.php";
        }
    }
</script>
