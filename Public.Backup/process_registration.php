<?php
include_once 'header.php';

if (isset($_POST['register']))
{
    $customerName = $_POST['customer_name'];
    $postcode = $_POST['postcode'];
    $email = $_POST['email'];
}
?>

<div id="regSuccess" class="card bg-success text-white w3-animate-opacity mt-4">
    <div class="card-body">Registration Successfully Completed</div>
</div>

<script>
    setTimeout(function(){
        document.getElementById("regSuccess").style.display = "none";
    }, 5000);
</script>

<?php
include_once 'landing.php'; ?>