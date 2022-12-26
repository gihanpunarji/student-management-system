<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/background.css">

    <style>
    .form-control {
        margin: 0px 10px;
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
                        Kshiti Ghelani
                    </h5>
                    <h6>
                        Web Developer and Designer
                    </h6>
                    <p class="proile-rating">Student Ranking : <span>8/10</span></p>

                </div>
            </div>
            <div class="col-md-2">
                <button class="profile-edit-btn btn btn-secondary btn-sm">Save Profile</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>Additional Deatils</p>
                    <input type="text" class="form-control mb-2" value="Address">
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
                        <label>Student ID</label>
                    </div>
                    <div class="col-md-6">
                        <p>Student 1</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                    </div>
                    <div class="col-md-6 d-flex">
                        <p>Gihan Punarji</p>
                        &nbsp;<p><i class="fa-solid fa-pencil"></i></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Email</label>
                    </div>
                    <div class="col-md-6">
                        <p>gihanpunarji@gmail.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Phone</label>
                    </div>
                    <div class="col-md-6 d-flex">
                        <p>0717437849</p>
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
</body>

</html>