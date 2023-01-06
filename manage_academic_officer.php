<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Academic Officers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7d2f1d04cc.js" crossorigin="anonymous"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <div class="container">

        <?php 

    session_start();
    require "db/connection.php";
    $pageno;
    $rs = Database::search("SELECT * FROM `academic_officer`");
    $rs_num = $rs->num_rows;
    ?>
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mt-4">Manage all academic officers</h2>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <input type="text" class="form-control" placeholder="Search by id or email...">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="d-flex justify-content-between">
                        <div class="col-8 col-md-8 d-flex justify-content-between">
                            <span class="admin-bar">Id#</span>
                            <span class="admin-bar align-self-start">Name</span>
                            <span class="admin-bar">Email</span>
                        </div>
                        <div class="col-12 col-md-2 d-none d-md-block">
                            <span>-----</span>

                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <hr>
                </div>
            </div>

            <?php

            if (isset($_GET["page"])) {
                $pageno = $_GET["page"];
            } else {
                $pageno = 1;
            }

            $resultsPerPage = 10;
            $numberOfPages = ceil($rs_num / $resultsPerPage);

            $page_results = ($pageno - 1) * $resultsPerPage;

            $sel_rs = Database::search("SELECT * FROM `academic_officer` LIMIT "  . $resultsPerPage . " OFFSET " . $page_results . "");

            $sel_num = $sel_rs->num_rows;

            for ($i=0; $i < $sel_num; $i++) { 
                $sel_data = $sel_rs->fetch_assoc();
                ?>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="col-8 col-md-8 d-flex justify-content-between">
                            <span><?php echo $sel_data["id"] ?></span>
                            <span><?php if (empty($_SESSION["ac_officer"]["first_name"]) || empty($_SESSION["ac_officer"]["first_name"]) ) {
                                echo $_SESSION["ac_officer"]["user_name"];
                            } else {
                                echo $sel_data["first_name"] . " " . $sel_data["last_name"];
                            } ?></span>
                            <span><?php echo $sel_data["email"] ?></span>
                        </div>
                        <div class="col-12 col-md-2">
                            <span onclick="manageAcademicOfficerInfo(<?php echo $sel_data['id'] ?>)"
                                class="edit">Manage</span>&nbsp;
                            <span onclick="manageAcademicOfficerInfo(<?php echo $sel_data['id'] ?>)" class="edit"><i
                                    class="fa fa-pencil"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>


            <!-- Pagination -->
            <div class="col-12 d-flex justify-content-center mt-3">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="<?php if($pageno <= 1) {
                                echo "#";
                            } else {
                                echo "?page=" . ($pageno - 1);
                            } ?>"><span aria-hidden="true">&laquo;</span></a>
                        </li>
                        <?php 
                        for ($i=1; $i < $numberOfPages; $i++) { 
                            if ($i == $pageno) {
                                ?>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="<?php echo "?page=" .($i); ?>">
                                <?php echo $i; ?>
                            </a>
                        </li>
                        <?php
                            } else {
                                ?>
                        <li class="page-item"><a class="page-link" href="<?php echo "?page=" .($i); ?>">
                                <?php echo $i; ?>
                            </a></li>
                        <?php
                            }
                        }
                        ?>
                        <li class="page-item">
                            <a class="page-link" href="<?php if($pageno >= 1) {
                                echo "#";
                            } else {
                                echo "?page=" . ($pageno + 1);
                            } ?>"><span aria-hidden="true">&raquo;</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="js/admin.js"></script>
    <script src="js/main.js"></script>

</body>

</html>