<?php
include_once 'header.php';
include_once '../src/model/repository.php';

$selectedOrder = $_GET['selectcontrol'];
?>

<div class="container pt-5">
    <?php
    $tablename = 'prevOrderDetails';
    $_SESSION["selectedOrderID"] = $selectedOrder;
    if(isset($tablename)) {
        $db = new Repository();
        $results = $db->getAll($tablename);

        if ($results) {
            //Hopefully if the results have been the right PDO type we should be able
            //to extract the column names with ease.
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
        else{
            ?><div>No Data Found for Order</div><?php
        }
    }
    ?>
    <a href="_orders.php" class="btn btn-primary active mt-4">Go Back</a>
</div>
