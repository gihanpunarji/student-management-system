<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <?php
    include "db/connection.php";
    ?>

    <div class="container vh-100">
        <h1 class="text-center mt-3">Welcome to the Student Management System</h1>
        <div class="col-12">
            <div class="row mt-5">
                <div class="col-6 d-none d-md-block">
                    <div class="home-img"></div>
                </div>
                <div class="col-12 col-md-6 text-center d-flex flex-column align-items-center justify-content-center">
                    <!-- Admin -->
                    <div class="admin">
                        <div class="col-12 links-login">
                            <a href="admin_login.php" class="text-secondary">Admin Login</a>
                        </div>
                    </div>
                    <!-- Academic Officer -->
                    <div class="academic-officer">
                        <div class="col-12 links-login">
                            <a href="academic_officer_login.php" class="text-secondary">Academic Officer
                                Login</a>
                        </div>
                    </div>
                    <!-- Teacher -->
                    <div class="teacher">
                        <div class="col-12 links-login">
                            <a href="teacher_login.php" class="text-secondary">Teacher Login</a>
                        </div>
                    </div>
                    <!-- Student -->
                    <div class="student">
                        <div class="col-12 links-login">
                            <a href="student_login.php" class=" text-secondary">Student</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4 d-block d-md-none">
                    <div class="home-img"></div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    include "components/footer.php";
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>