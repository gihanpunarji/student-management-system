<?php

session_start();
require "db/connection.php";

if(isset($_SESSION["admin"])) {
    $officer = $_SESSION["aid"];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Academic Officer Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7d2f1d04cc.js" crossorigin="anonymous"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body style="background: #d4d0d0">
    <div class="container">

        <?php 
    $rs = Database::search("SELECT * FROM `academic_officer` WHERE `id` = '" . $officer["id"] . "'");
    $rs_data = $rs->fetch_assoc();
    ?>
        <div class="row">
            <div class="col-12 mt-4">
                <h2 class="text-center">Manage Acedamic Officers's all details here </h2>
            </div>
            <div class="col-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="border-border-secondary rounded-1 bg-white pt-3 ps-4 pb-5">
                    <div class="row teacher-details">
                        <div class="col-12">
                            <span>Id# : </span>
                            <span><?php if($officer["id"] < 10) {
                                echo "0". $officer["id"];
                            } else {
                                echo $officer["id"];
                            } ?></span>
                        </div>
                    </div>
                    <div class="row teacher-details">
                        <div class="col-12">
                            <span>Name : </span>
                            <span><?php if (empty($rs_data["first_name"]) || empty($rs_data["first_name"]) ) {
                                echo $rs_data["user_name"];
                            } else {
                                echo $rs_data["first_name"] . " " . $rs_data["last_name"];
                            } ?></span>
                        </div>
                    </div>
                    <div class="row teacher-details">
                        <div class="col-12">
                            <span>Email : </span>
                            <span><?php echo $rs_data["email"] ?></span>
                        </div>
                    </div>
                    <div class="row teacher-details">
                        <div class="col-12">
                            <span>Phone : </span>
                            <span><?php if(empty($rs_data["mobile"])) {
                            echo "No number added yet.";
                        } else {
                            echo $rs_data["mobile"];
                        } ?></span>
                        </div>
                    </div>
                    <div class="row teacher-details">
                        <div class="col-12">
                            <span>Status : </span>
                            <span><?php if($rs_data["verified"] == 1) {
                                echo 'Verified' . '&nbsp;' . '<i class="fa-solid fa-check"></i>';
                            } else {
                                echo "Not verified yet";
                            } ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 mt-2 mt-md-0">
                <div class="row">
                    <div class="border-border-secondary rounded-1 bg-white pt-3 ps-4 pb-3 pe-3">
                        Academic Officer
                    </div>
                </div>
                <div class="row">
                    <div class="border-border-secondary rounded-1 bg-white mt-3 pt-3 ps-4 pb-3 pe-3">
                        <span>Teacher's Current Status : <?php if($rs_data["status"] == 1) {
                                echo 'Verified' . '&nbsp;' . '<i class="fa-solid fa-check"></i>';
                            } else {
                                echo "Not verified yet";
                            } ?></span><br><br>
                        <span>Teachers Current Position : New</span><br><br>
                        <div class="col-12 d-flex justify-content-between">
                            <span>Academic rs_data's current status</span>
                            <?php if($rs_data["status"] == 1) {
                                 ?> <button class="btn btn-sm btn-primary"
                                onclick="changeStatus(<?php echo $rs_data['id'] ?>);">Active</button> <?php
                            } else {
                                 ?> <button class="btn btn-sm btn-danger"
                                onclick="changeStatus(<?php echo $rs_data['id'] ?>);">Blocked</button> <?php
                            } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="js/admin.js"></script>
</body>

</html>
<?php
}

?>