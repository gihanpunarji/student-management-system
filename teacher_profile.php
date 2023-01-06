<?php 

require "db/connection.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<?php 
    $teacher_rs = Database::search("SELECT * FROM `teacher` WHERE `user_name` = '" . $_SESSION["teacher"]["user_name"] . "' ");
    $teacher_data = $teacher_rs->fetch_assoc();
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (empty($teacher_data["first_name"]) || empty($teacher_data["first_name"]) ) {
                    echo $teacher_data["user_name"];
                } else {
                    echo $teacher_data["first_name"] . " " . $teacher_data["last_name"];
                } ?></title>
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
                        <li class="breadcrumb-item"><a href="teachersPanel.php">Home</a></li>
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
                        <input type="file" name="file" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        <?php if (empty($teacher_data["first_name"]) || empty($teacher_data["first_name"]) ) {
                                echo $teacher_data["user_name"];
                            } else {
                                echo $teacher_data["first_name"] . " " . $teacher_data["last_name"];
                            } ?>
                    </h5>
                    <h6>
                        Teacher
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
                    <a href="">Facebook Profile</a><br />
                    <a href="">Linked Profile</a>
                    <p>SKILLS</p>
                    <a href="">Web Designer</a><br />
                    <a href="">Web Developer</a><br />
                    <a href="">WordPress</a><br />
                    <a href="">WooCommerce</a><br />
                    <a href="">PHP, .Net</a><br />
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <label>Teacher ID</label>
                    </div>
                    <div class="col-md-6">
                        <p>
                        <p><?php echo $_SESSION["teacher"]["id"] ?></p>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="input-group">
                            <input id="f_name" type="text" value="<?php if (empty($teacher_data["first_name"]) ) {
                                echo "First Name";
                            } else {
                                echo $teacher_data["first_name"];
                            } ?>" class="form-control" /> &nbsp;
                            <input id="l_name" type="text" class="form-control" value="<?php if (empty($teacher_data["last_name"]) ) {
                                echo "Last Name";
                            } else {
                                echo $teacher_data["last_name"];
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
                        <p><?php echo $_SESSION["teacher"]["email"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Phone</label>
                    </div>
                    <div class="col-md-6 d-flex">
                        <input id="mobile" value="<?php if(empty($teacher_data["mobile"])) {
                            echo "No number added yet.";
                        } else {
                            echo $teacher_data["mobile"];
                        } ?>" type="text" class="form-control" />
                        &nbsp;<p><i class="fa-solid fa-pencil"></i></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Role</label>
                    </div>
                    <div class="col-md-6">
                        <p><?php echo $_SESSION["teacher"]["role"] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="js/teacher.js"></script>
</body>

</html>
<?php

?>