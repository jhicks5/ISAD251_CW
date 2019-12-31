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

<?php
$tablename = 'OrderDetails';
$_SESSION["selectedOrderID"] = $selectedOrder;
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