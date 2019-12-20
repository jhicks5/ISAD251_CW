<?php
include_once 'header.php';
include_once '../src/model/repository.php';
if(empty($_SESSION['currentCustID'])){
    header("Location: login.php");
}
$tablename = 'Orders';
?>

<div class="w3-cell">
    <?php

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
    }
    ?>
</div>

<!--
<div class="container pt-5">
    <div class="card-deck">
        <?php
        if (isset($tablename)) {
            $db = new repository();
            $results = $db->getAll($tablename);

            foreach($results as $row){
                ?>
                <div class="card" style="width:400px">
                    <a href="#" style="color:black">
                        <img class="card-img-top" src="../assets/img/foodTN_temp.png" alt="Drink image">
                        <div class="card-body text-center">
                            <p class="card-text"><?php echo $row['OrderId']; ?></p>
                            <p class="card-text">£<?php echo $row['OrderDate']; ?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>
-->
