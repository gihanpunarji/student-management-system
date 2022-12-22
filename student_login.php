<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Background Image -->

    <div class="login_bg d-none d-md-block">
        <div class="bg_overlay">
        </div>
    </div>
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <div class="main-form">
                        <!-- Logo -->
                        <div class="logo d-flex justify-content-center align-items-center mt-2">
                            <img src="resources/user.png">
                        </div>
                        <!-- Form Group -->
                        <div class="form-groups mt-5 w-100">
                            <div class="ms-4 me-4">
                                <input type="email" name="email" class="form-control w-100" type="text"
                                    placeholder="Enter Email" required="" aria-required="true">
                            </div>

                            <div class="ms-4 mt-4 me-4">
                                <input type="password" name="password" class="form-control w-100" type="text"
                                    placeholder="Enter Password" required="" aria-required="true">
                            </div>
                        </div>
                        <!-- Remember Me And Forgot Password -->
                        <div class="col-12 w-100 d-flex align-items-center justify-content-between mt-4">
                            <div class="remember-me ms-5">
                                <input type="checkbox" name="" id="rm">
                                <label for="rm">Remember Me</label>
                            </div>
                            <div class="forgot_pwd me-5">
                                <a href="#">Forgot Password</a>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="d-flex justify-content-center mt-4">
                            <div class="d-grid col-6 mx-auto">
                                <button class="login_btn btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                        <!-- Register Text -->
                        <div class="reg-text mt-4 ms-4">
                            <span>If you login for the first time <a href="student_signup.php">click here</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>