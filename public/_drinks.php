<?php
include_once 'header.php';
include_once '../src/model/repository.php';

$tablename = 'Products-Drinks';

?>
<div class="container pt-5">
    <div class="card-deck">
        <?php
        if (isset($tablename)) {
            $db = new repository();
            $results = $db->getAll($tablename);
            $_SESSION["fromFood"] = FALSE;
            foreach($results as $row){
                ?>
                <div class="card" style="width:400px">
                    <a href="_addtoorder.php" style="color:black">
                        <img class="card-img-top" src="../assets/img/drinkTN_temp.png" alt="Drink image">
                        <div class="card-body text-center">
                            <p class="card-text"><?php echo $row['Product_Details']; ?></p>
                            <p class="card-text">£<?php echo $row['Price']; ?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>
