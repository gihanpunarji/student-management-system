<?php
require "db/connection.php";
session_start();

$student_rs = Database::search("SELECT * FROM `student` WHERE `email` = '" . $_SESSION["student"]["email"] . "'");
$student_data = $student_rs->fetch_assoc();
            
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (empty($student_data["first_name"]) || empty($student_data["last_name"]) ) {
                    echo $student_data["user_name"];
                } else {
                    echo $student_data["first_name"] . " " . $student_data["last_name"];
                } ?> Profile</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/background.css">

    <style>
    .form-control {
        margin: 0px 0px;
        border: none;
        border-radius: 0;
        border-bottom: 1px solid #777878;
    }

    .form-control:focus {
        box-shadow: none !important;
        outline: 0px none;
    }
    </style>

    <!-- Font Awesome KIT -->

    <script src="https://kit.fontawesome.com/7d2f1d04cc.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container emp-profile">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                        <?php if (empty($student_data["first_name"]) || empty($student_data["last_name"]) ) {
                                echo $student_data["user_name"];
                            } else {
                                echo $student_data["first_name"] . " " . $student_data["last_name"];
                            } ?>
                    </h5>
                    <h6>
                        Student
                    </h6>
                    <p class="proile-rating">Student Ranking : <span>8/10</span></p>

                </div>
            </div>
            <div class="col-md-2">
                <button class="profile-edit-btn btn btn-secondary btn-sm" onclick="saveProfile();">Save Profile</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>Additional Deatils</p>
                    <input id="address" type="text" class="form-control mb-2" value="<?php if(empty($student_data["address"])) {
                        echo "Enter Your Address here.";
                        } else {
                            echo $student_data["address"];
                        }?>">
                    <span>Grade 10</span> <br>
                    <a href="">Bootply Profile</a>
                    <p>Subjects</p>
                    <a href="">Sinhala</a><br />
                    <a href="">English</a><br />
                    <a href="">Commerce</a><br />
                    <a href="">Commerce</a><br />
                    <a href="">Science</a><br />
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <label>Index No</label>
                    </div>
                    <div class="col-md-6">
                        <p><?php echo $student_data["index_no"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="input-group">
                            <input id="f_name" type="text" value="<?php if (empty($student_data["first_name"]) ) {
                                echo "First Name";
                            } else {
                                echo $student_data["first_name"];
                            } ?>" class="form-control" /> &nbsp;
                            <input id="l_name" type="text" class="form-control" value="<?php if (empty($student_data["last_name"]) ) {
                                echo "Last Name";
                            } else {
                                echo $student_data["last_name"];
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
                        <p><?php echo $student_data["email"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Phone</label>
                    </div>
                    <div class="col-md-6 d-flex">
                        <p><input id="mobile" value="<?php if(empty($student_data["mobile"])) {
                            echo "No number added yet.";
                        } else {
                            echo $student_data["mobile"];
                        } ?>" type="text" class="form-control" /></p>
                        &nbsp;<p><i class="fa-solid fa-pencil"></i></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Role</label>
                    </div>
                    <div class="col-md-6">
                        <p>Student</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Activation</label>
                    </div>
                    <div class="col-md-6">
                        <p>Paid</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="js/student.js"></script>
</body>

</html>