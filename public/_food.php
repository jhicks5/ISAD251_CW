<?php
include_once 'header.php';
include_once '../src/model/repository.php';

$tablename = 'Products-Food';

?>
<div class="container pt-5">
    <div class="card-deck">
        <?php
        if (isset($tablename)) {
            $db = new repository();
            $results = $db->getAll($tablename);
            $_SESSION["fromFood"] = TRUE;
            foreach($results as $row){
                ?>
                <div onclick="cardClick(this.id)" class="card" style="width:400px" id="<?php echo $row['ProductId']; ?>">
                    <a style="color:black">
                        <img class="card-img-top" src="../assets/img/foodTN_temp.png" alt="Drink image">
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

<script>
    function cardClick(cardID){
        let userconfirm = confirm("Are you sure you want to add this item to your order?");
        if (userconfirm === true){
            location.href = "_addtoorder.php?itemID="+cardID;
        }
    }
</script>