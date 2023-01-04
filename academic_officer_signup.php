<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Officer's Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="main-form">
                        <div class="title mt-4 pt-4">
                            <h1 class="text-center text-black text-md-white">Welcome to the student management system
                            </h1>
                        </div>
                        <!-- Input Email -->
                        <div class="form-group ms-4 me-4 mt-5 pt-4">
                            <input id="uname" type="text" placeholder="Enter your username." class="form-control">
                        </div>
                        <div class="form-group ms-4 me-4 mt-2">
                            <input id="password" type="password" placeholder="Enter your password."
                                class="form-control">
                        </div>
                        <div class="form-group ms-4 me-4 mt-2">
                            <input id="l_code" type="text" placeholder="Enter varification code." class="form-control">
                        </div>

                        <!-- Button -->

                        <div class="d-flex justify-content-center">
                            <div class="mx-auto d-grid mt-3 col-12">
                                <button class="btn btn-primary me-4 ms-4"
                                    onclick="signup_ac_officer();">Proceed</button>
                            </div>
                        </div>
                        <div class="col-12 ms-4">
                            <a href="academic_officer_login.php">Already a user.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/acc_officer.js"></script>
</body>

</html>