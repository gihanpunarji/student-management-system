<?php

session_start();

require "db/connection.php";

if(isset($_SESSION["teacher"])) {
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7d2f1d04cc.js" crossorigin="anonymous"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 vh-100 bg-dark d-none d-md-block">
                <div class="col-12">
                    <h3 class="text-white mt-2 ">SMS</h3>
                    <div class="img-container">
                        <div class="profile-img me-3">
                            <img src="resources/user.png" onclick="gotoTeacherProfile()">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <div class="d-flex flex-column text-white">
                            <span> <?php if (empty($_SESSION["teacher"]["first_name"]) || empty($_SESSION["teacher"]["first_name"]) ) {
                                echo $_SESSION["teacher"]["user_name"];
                            } else {
                                echo $_SESSION["teacher"]["first_name"] . " " . $_SESSION["teacher"]["last_name"];
                            } ?></span>
                            <span class="email"><?php echo $_SESSION["teacher"]["email"] ?></span>
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
                            <a href="">Exams</a>
                            <i class="icon fa-solid fa-layer-group"></i>
                        </div>
                        <hr class="left-hr">
                        <div class="item">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Assignments
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="add_assignments.php">Add Assignments</a></li>
                                    <li><a class="dropdown-item" href="#">Add Lesson Notes</a></li>
                                    <li><a class="dropdown-item" href="view_assignments.php">View Submited Answer
                                            Sheets</a>
                                    </li>
                                </ul>
                            </div>
                            <i class="icon fa-solid fa-graduation-cap"></i>
                        </div>

                        <hr class="left-hr">
                    </div>

                </div>
            </div>
            <div class="col-md-10 panel">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <h3 class="welcome">Welcome Teacher, Gihan Punarji</h3>
                        <div class="btn btn-sm btn-secondary mt-1 mb-1">Log Out</div>
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
                                <?php 

                                $ac_rs = Database::search("SELECT * FROM `academic_officer`");
                                $ac_num = $ac_rs->num_rows;

                                ?>
                                <div class="col-6 col-md-3">
                                    <span class="ps-3">Academic Officers</span><br>
                                    <span class="ps-3"><?php echo $ac_num ?></span><br>

                                </div>
                                <?php 

                                $teacher_rs1 = Database::search("SELECT * FROM `teacher`");
                                $teacher_num1 = $ac_rs->num_rows;

                                ?>
                                <div class="col-6 col-md-3">
                                    <span class="ps-3">Total Teachers</span><br>
                                    <span class="ps-3"><?php echo $teacher_num1 ?></span><br>

                                </div>
                                <div class="col-6 col-md-3">
                                    <span class="ps-3">Total Exams</span><br>
                                    <a class="ms-3 manage" href="#">20</a>
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
                                    <span class=" mt-3 ms-4">Recent Exams and Assignments</span>
                                    <div class="col-11 ms-3">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row ms-2">
                                    <div class="col-4">
                                        <span>Subject</span>
                                    </div>
                                    <div class="col-4">
                                        <span>Exam Date</span>
                                    </div>
                                    <div class="col-4">
                                        <span>Marks</span>
                                    </div>
                                </div>
                                <br>
                                <div class="row ms-2">
                                    <div class="col-4">
                                        <span>English</span>
                                    </div>
                                    <div class="col-4">
                                        <span>2022-10-05</span>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <span class="btn btn-primary btn-sm">Checked</span>
                                    </div>
                                </div>
                                <div class="row ms-2">
                                    <div class="col-4">
                                        <span>English</span>
                                    </div>
                                    <div class="col-4">
                                        <span>2022-10-05</span>
                                    </div>
                                    <div class="col-4">
                                        <span class="btn btn-primary btn-sm">Checked</span>
                                    </div>
                                </div>


                                <div class="col-11 ms-3">
                                    <hr>
                                </div>
                                <div class="col-12 mb-3">
                                    <a href="view_assignments.php" class="text-decoration-none text-black-50 ms-3">View
                                        All Assignments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-2 mt-md-0">
                        <div class="border border-secondary rounded-1 bg-white">
                            <div class="col-12">
                                <div class="row mb-3">
                                    <span class=" mt-3 ms-4">Teacher Details</span>
                                    <div class="col-11 ms-3">
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <img src="resources/user.png" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <?php
                                        $teacher_rs2 = Database::search("SELECT * FROM `teacher` WHERE `email` = '" . $_SESSION["teacher"]["email"] . "' ");
                                        $teacher_data2 = $teacher_rs2->fetch_assoc();
                                        ?>
                                        <div class="col-12 text-start text-md-center ms-4 ms-md-1">
                                            <span>Teacher : <?php echo $teacher_data["id"] ?></span><br>
                                            <span>Staus : Teacher</span><br>
                                            <span class="edit"><?php if($teacher_data2["verified"] == 1) {
                                                echo "Verified";
                                            } ?></span>&nbsp;<i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="border border-secondary rounded-1 bg-white">
                                <div class="col-12">
                                    <div class="row">
                                        <span class="mt-3 ms-4">Recent Lessons</span>
                                    </div>
                                    <div class="col-11 ms-3">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-11 d-flex justify-content-between ms-3 me-3">
                                        <span class="admin-bar">ID</span>
                                        <span class="admin-bar">Subject</span>
                                        <span class="admin-bar">Status</span>
                                    </div>
                                    <div class="col-11 d-flex justify-content-between ms-3 me-3 mt-3 mb-3">
                                        <span>0001</span>
                                        <span>English</span>
                                        <span>Added</span>
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
    <script src="js/teacher.js"></script>
    <script src="js/main.js"></script>

</body>

</html>

<?php
}

?>