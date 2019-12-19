<?php

include_once 'header.php';
include_once '../src/model/repository.php';

$tablename = 'Products-Drinks';

if (isset($tablename)) {
    $db = new repository();
    $results = $db->getAll($tablename);

    foreach($results as $row){
        ?>
        <div class = "card hovercard">
            <div class="card-body">
                <a href="#"><?php echo $row['Product_Details']; ?></a>
            </div>
        </div>
    <?php } ?>
<?php } ?>