<?php

include("oop_connect_php.php");

if (isset($_POST['submit'])) {
    $name = $_POST['cusername'];
    $email = $_POST['cemail'];
    $password = $_POST['cpassword'];

    $link->query("call call_users('$name','$email', '$password')");
}

if (isset($_POST['osubmit'])) {
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $u_id = $_POST['user_id'];

   $link->query("call call_order('$pname', $price, $u_id)");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <style>
        fieldset {
            border: 1px solid black !important;
            padding: 30px !important;
            border-radius: 10px !important;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5  p-5 ">
        <div class="row g-4">
            <!-- Add  Users Details -->
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header text-center bg-success-subtle fw-bold text-dark">
                        Add Users Details
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Username</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="cusername" placeholder="Enter Username">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Email</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="cemail" placeholder="Enter Email">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Password</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="cpassword" placeholder="Enter Password">
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="form-control bg-success-subtle fw-bold text-dark" id="formGroupExampleInput2" name="submit" value="Submit">
                            </div>
                        </form>
                    </div>

                </div>
            </div>



            <!-- Add  orders Details -->
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header text-center bg-success-subtle fw-bold text-dark">
                        Add Orders Details
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="pname" placeholder="Enter product">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Price</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="price" placeholder="Enter Price">
                            </div>
                            <div class="mb-3">
                                <select name="user_id" class="form-select mb-2" required>
                                    <option value="">-- Select User --</option>
                                    <?php
                                    $cats = $link->query("SELECT * FROM users");
                                    while ($row = $cats->fetch_assoc()):
                                    ?>
                                        <option value="<?= $row['id'] ?>"><?= $row['email'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="form-control bg-success-subtle fw-bold text-dark" id="formGroupExampleInput2" name="osubmit" value="Place Order">
                            </div>
                        </form>
                    </div>

                </div>
            </div>


        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>

</html>