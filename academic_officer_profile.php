<?php

session_start();

require "db/connection.php";

if(isset($_SESSION["ac_officer"])) {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (empty($_SESSION["ac_officer"]["first_name"]) || empty($_SESSION["ac_officer"]["first_name"]) ) {
                    echo $_SESSION["ac_officer"]["user_name"];
                } else {
                    echo $_SESSION["ac_officer"]["first_name"] . " " . $_SESSION["ac_officer"]["last_name"];
                } ?></span>
    </title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/background.css">

    <!-- Font Awesome KIT -->

    <script src="https://kit.fontawesome.com/7d2f1d04cc.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container emp-profile">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="academic_officer_panel.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png" alt="" />
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file" id="photo" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        <?php if (empty($_SESSION["ac_officer"]["first_name"]) || empty($_SESSION["ac_officer"]["first_name"]) ) {
                                echo $_SESSION["ac_officer"]["user_name"];
                            } else {
                                echo $_SESSION["ac_officer"]["first_name"] . " " . $_SESSION["ac_officer"]["last_name"];
                            } ?></span>
                    </h5>
                    <h6>
                        Web Developer and Designer
                    </h6>
                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>

                </div>
            </div>
            <div class="col-md-2">
                <button class="profile-edit-btn btn btn-secondary btn-sm" onclick="save_profile();">Save
                    Profile</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>WORK LINK</p>
                    <a href="">Website Link</a><br />
                    <a href="">Bootsnipp Profile</a><br />
                    <a href="">Bootply Profile</a>
                    <p>SKILLS</p>
                    <a href="">Web Designer</a><br />
                    <a href="">Web Developer</a><br />
                    <a href="">WordPress</a><br />
                    <a href="">WooCommerce</a><br />
                    <a href="">PHP, .Net</a><br />
                </div>
            </div>
            <div class="col-md-8">
                <?php 
                $ac_rs = Database::search("SELECT * FROM `academic_officer` WHERE `user_name` = '" . $_SESSION["ac_officer"]["user_name"] . "' ");
                $ac_data = $ac_rs->fetch_assoc();
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <label>Academic Officer ID</label>
                    </div>
                    <div class="col-md-6">
                        <p><?php echo $_SESSION["ac_officer"]["id"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="input-group">
                            <input id="f_name" type="text" value="<?php if (empty($ac_data["first_name"]) ) {
                                echo "First Name";
                            } else {
                                echo $ac_data["first_name"];
                            } ?>" class="form-control" /> &nbsp;
                            <input id="l_name" type="text" class="form-control" value="<?php if (empty($ac_data["last_name"]) ) {
                                echo "Last Name";
                            } else {
                                echo $ac_data["last_name"];
                            } ?>">
                        </div>
                        &nbsp;<p><i class="fa-solid fa-pencil"></i></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Email</label>
                    </div>
                    <div class="col-md-6">
                        <p><?php echo $_SESSION["ac_officer"]["email"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Phone</label>
                    </div>
                    <div class="col-md-6 d-flex">
                        <input id="mobile" value="<?php if(empty($ac_data["mobile"])) {
                            echo "No number added yet.";
                        } else {
                            echo $ac_data["mobile"];
                        } ?>" type="text" class="form-control" />
                        &nbsp;<p><i class="fa-solid fa-pencil"></i></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Role</label>
                    </div>
                    <div class="col-md-6">
                        <p><?php echo $_SESSION["ac_officer"]["role"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="edit cp" onclick="change_pw();">Change Password</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="js/acc_officer.js"></script>
</body>

</html>
<?php
} else {
    header("index.php");
}

?>