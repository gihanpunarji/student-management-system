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
    <title>Academic Officer Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7d2f1d04cc.js" crossorigin="anonymous"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>

    <?php 

            $ac_rs = Database::search("SELECT * FROM `academic_officer` WHERE `email` = '" . $_SESSION["ac_officer"]["email"] . "'");
            $ac_data = $ac_rs->fetch_assoc();

            $teacher_rs = Database::search("SELECT * FROM `teacher`");
            $teacher_num = $teacher_rs->num_rows;

            ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 vh-100 bg-dark d-none d-md-block">
                <div class="col-12">
                    <h3 class="text-white mt-2 ">SMS</h3>
                    <div class="img-container">
                        <div class="profile-img me-3">
                            <img src="resources/user.png" onclick="gotoAccOffProfile()">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <div class="d-flex flex-column text-white">
                            <span onclick="gotoAccOffProfile()" class="link"><?php if (empty($ac_data["first_name"]) || empty($ac_data["first_name"]) ) {
                                echo $ac_data["user_name"];
                            } else {
                                echo $ac_data["first_name"] . " " . $ac_data["last_name"];
                            } ?></span>
                            <span class="email"><?php echo $ac_data["email"] ?></span>
                        </div>
                    </div>
                    <div class="row dashboard">
                        <div class="col-12 mt-4">
                            <h4 class="dashboard-text">DASHBOARD</h4>
                        </div>
                        <hr class="left-hr">
                        <div class="item">
                            <a href="#">Dashboard</a>
                            <i class="icon fa-solid fa-computer"></i>
                        </div>
                        <hr class="left-hr">
                        <div class="item">
                            <a href="assignment_marks.php">Assigments Marks</a>
                            <i class="icon fa-solid fa-layer-group"></i>
                        </div>
                        <hr class="left-hr">
                    </div>

                </div>
            </div>
            <div class="col-md-10 panel">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <h3 class="welcome">Welcome Academic Officer, <?php if (empty($ac_data["first_name"]) || empty($ac_data["first_name"]) ) {
                                echo $ac_data["user_name"];
                            } else {
                                echo $ac_data["first_name"] . " " . $ac_data["last_name"];
                            } ?></h3>
                        <div class="btn btn-sm btn-secondary mt-1 mb-1" onclick="logout();">Log Out</div>
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="border border-secondary rounded-1 bg-white pb-3">
                            <div class="row">
                                <span class=" mt-3 ms-4">Dashboard Summery</span>
                                <div class="col-11 ms-3">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <span class="ps-3">Total Student</span><br>
                                    <span class="ps-3">100</span><br>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span class="ps-3">Teachers Requests</span><br>
                                    <span class="ps-3">100</span><br>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span class="ps-3">Total Teachers</span><br>
                                    <span class="ps-3">
                                        <?php echo $teacher_num ?>
                                    </span><br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-12 col-md-6">
                        <div class="border border-secondary rounded-1 bg-white">
                            <div class="col-12">
                                <div class="row">
                                    <span class=" mt-3 ms-4">Manage Students Registrations</span>
                                    <div class="col-11 ms-3">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <img src="resources/user.png" alt="">
                                    </div>
                                    <div class="col-8">
                                        <span>Send Invitation to Students</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-10">
                                        <input type="email" class="form-control" placeholder="Email here..." id="email"
                                            autocomplete="off">
                                        <label class="form-label ms-3" for="email">Enter the student email</label>
                                    </div>
                                </div>
                                <div class="row mt-3 ms-1 mb-3">
                                    <div class="col-12 col-md-6">
                                        <div class="btn btn-sm btn-primary" onclick="sendRequest();">Send Request</div>
                                    </div>
                                </div>
                                <div class="col-11 ms-3">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-2 mt-md-0">
                        <div class="border border-secondary rounded-1 bg-white">
                            <div class="col-12">
                                <div class="row mb-3">
                                    <span class=" mt-3 ms-4">Academic Officer Details</span>
                                    <div class="col-11 ms-3">
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <img src="resources/user.png" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-start text-md-center ms-4 ms-md-1">
                                            <span>Academic Officer :
                                                <?php echo $_SESSION["ac_officer"]["id"] ?></span><br>
                                            <span>Staus : Acc Officer</span><br>
                                            <span class="edit">Edit</span>&nbsp;<i class="fa-solid fa-pencil"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="border border-secondary rounded-1 bg-white">
                                <div class="col-12">
                                    <div class="row">
                                        <span class="mt-3 ms-4">Recent Assignment Marks</span>
                                    </div>
                                    <div class="col-11 ms-3">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-between ms-3 me-3">
                                        <span class="admin-bar">ID</span>
                                        <span class="admin-bar">Subject</span>
                                        <span class="admin-bar">Status</span>
                                        <span class="admin-bar"></span>
                                    </div>
                                    <div class="col-9 d-flex justify-content-between ms-3 me-3 mt-3 mb-3">
                                        <span>00001</span>
                                        <span>Subject 01</span>
                                        <span>Release</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "components/footer.php"
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
    <script src="js/acc_officer.js"></script>

</body>

</html>
<?php
} else {
    header("index.php");
}

?>