<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher's Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7d2f1d04cc.js" crossorigin="anonymous"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body style="background: #d4d0d0">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <h2 class="text-center">Manage Teacher's all details here </h2>
            </div>
            <div class="col-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="border-border-secondary rounded-1 bg-white pt-3 ps-4 pb-5">
                    <div class="row teacher-details">
                        <div class="col-12">
                            <span>Id# : </span>
                            <span>00001</span>
                        </div>
                    </div>
                    <div class="row teacher-details">
                        <div class="col-12">
                            <span>Name : </span>
                            <span>Teache Name</span>
                        </div>
                    </div>
                    <div class="row teacher-details">
                        <div class="col-12">
                            <span>Email : </span>
                            <span>teacher01@gmail.com</span>
                        </div>
                    </div>
                    <div class="row teacher-details">
                        <div class="col-12">
                            <span>Phone : </span>
                            <span>071647894</span>
                        </div>
                    </div>
                    <div class="row teacher-details">
                        <div class="col-12">
                            <span>Status : </span>
                            <span>Verified</span> &nbsp;<i class="fa-solid fa-check"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 mt-2 mt-md-0">
                <div class="row">
                    <div class="border-border-secondary rounded-1 bg-white pt-3 ps-4 pb-3 pe-3">
                        <div class="row teachers-details">
                            <div class="col-12">
                                <span>Grade : </span>
                                <select id="" class="form-select">
                                    <option value="">Grade 6</option>
                                    <option value="">Grade 7</option>
                                    <option value="">Grade 8</option>
                                    <option value="">Grade 9</option>
                                    <option value="">Grade 10</option>
                                    <option value="">Grade 11</option>
                                    <option value="">Grade 12</option>
                                </select>
                            </div>
                        </div>
                        <div class="row teachers-details">
                            <div class="col-12 mt-3">
                                <span>Subject : </span>
                                <select id="" class="form-select">
                                    <option value="">Sinhala</option>
                                    <option value="">Mathamatics</option>
                                    <option value="">Science</option>
                                    <option value="">History</option>
                                    <option value="">English</option>
                                    <option value="">Art</option>
                                    <option value="">Bhuddism</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="border-border-secondary rounded-1 bg-white mt-3 pt-3 ps-4 pb-3 pe-3">
                        <span>Teacher's Current Grade : Grade 10</span><br><br>
                        <span>Teachers Current Subject : Mathamatics</span><br><br>
                        <div class="col-12 d-flex justify-content-between">
                            <span>Teacher's current status</span>
                            <button class="btn btn-sm btn-primary">Active</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <button class="btn w-100 btn-lg btn-outline-dark">Save Changes</button>
            </div>
        </div>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="js/admin.js"></script>
</body>

</html>