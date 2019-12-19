<?php
include_once 'header.php';
?>
<div class="container" style="padding: 60px">
    <div class="card-deck">
        <div class="card bg-basic">
            <div class="card-header">
                <h2>Login</h2>
            </div>
            <div class="card-body">
                <form method="post" action="process_registration.php" id="registration" class="login-form">
                    <div class="form-group text-center">
                        <p><span>Please input Login details below</span></p>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" id="email" placeholder="Email..." minlength="1" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="postcode">Postcode:</label>
                        <input type="text" id="postcode" placeholder="Postcode..." minlength="1" name="postcode" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button style="" type="submit" name="register" id="register" class="mt-6 btn btn-dark">Login</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card bg-basic">
            <div class="card-header">
                <h2>New Customer?</h2>
            </div>
            <div class="card-body">
                <form method="post" action="process_registration.php" id="registration" class="login-form">
                    <div class="form-group text-center">
                        <p><span>Please provide registration details below</span></p>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <label for="customer_name">Customer Name:</label>
                        <input type="text" id="customer_name" placeholder="Customer Name..." minlength="1" name="customer_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="postcode">Postcode:</label>
                        <input type="text" id="postcode" placeholder="Postcode..." minlength="1" name="postcode" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" id="email" placeholder="Email..." minlength="1" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="register" id="register" class="btn btn-dark">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>