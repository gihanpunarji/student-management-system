<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/background.css">
</head>

<body>
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="main-form">
                        <div class="title mt-4 pt-4">
                            <h1 class="text-center text-black text-md-white">Change Password
                            </h1>
                        </div>
                        <!-- Input Email -->
                        <div class="form-group ms-4 me-4 mt-5 pt-4">
                            <input id="email2" type="text" placeholder="Enter your email." class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="cp edit me-4" onclick="send_v_code()">Send Code</p>
                            </div>
                            <p class="d-none text-danger ms-4 me-2" id="v_text">The Verification code has sent to your
                                email!
                                Please
                                check and
                                come back..</p>
                        </div>
                        <div class="form-group ms-4 me-4 mt-2">
                            <input disabled id="password2" type="password" placeholder="Enter your new password."
                                class="form-control">
                        </div>

                        <div class="form-group ms-4 me-4 mt-2">
                            <input disabled id="l_code2" type="password" placeholder="Enter your login code."
                                class="form-control">
                        </div>

                        <!-- Button -->

                        <div class="d-flex justify-content-center">
                            <div class="mx-auto d-grid mt-3 col-12">
                                <button disabled id="cp" class="btn btn-primary me-4 ms-4"
                                    onclick="change_password();">Proceed</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/acc_officer.js"></script>
</body>

</html>