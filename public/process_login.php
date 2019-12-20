<?php
include_once 'header.php';
include_once '../src/model/repository.php';

$tablename = 'Customers';

if (isset($_POST['login'])) {
    $customerEmail = $_POST['email'];
    $postcode = $_POST['postcode'];
}

if (isset($tablename)) {
    $db = new repository();
    $results = $db->getAll($tablename);
    $found = FALSE;

    while($found == FALSE){
        foreach ($results as $row) {
            if ($row['customerEmail'] == $customerEmail && $row['customerPostcode'] == $postcode) {
                $_SESSION["currentCustID"] = $row['CustomerID'];
                $found = TRUE;
                header("Location: landing.php");
            }
        }
        if($found == FALSE){
            echo "Customer not found";
            break;
        }
    }
}
