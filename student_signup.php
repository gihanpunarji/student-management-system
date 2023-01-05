<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="login_bg d-none d-md-block">
        <div class="bg_overlay">
        </div>
    </div>
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="main-form">
                        <div class="mt-4 pt-4">
                            <h1 class="title text-center text-black">Welcome to the student management
                                system
                            </h1>
                        </div>
                        <!-- Input Email -->
                        <div class="form-group ms-4 me-4 mt-5 pt-4">
                            <input id="email" type="email" placeholder="Enter your email for varification."
                                class="form-control">
                        </div>
                        <p class="text-end me-4 mt-2 admin-btn" onclick="verifyEmail();">Verify Email</p>
                        <div class="form-group ms-4 me-4 mt-1 pt-1">
                            <input id="v_code" type="text" placeholder="Enter your code for varification."
                                class="form-control">
                        </div>
                        <!-- Button -->
                        <div class="d-flex justify-content-center mt-3">
                            <div class="d-grid col-6 mx-auto">
                                <button id="btn" onclick="studentSignup();" class="login_btn btn btn-primary">
                                    Proceed
                                </button>
                            </div>
                        </div>
                        <!-- Register Text -->
                        <div class="reg-text mt-4 text-end me-4">
                            <span>If you are already a student <a href="student_login.php">click here</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/student.js"></script>
</body>

</html>