<?php

session_start();

require "db/connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION["admin"]["first_name"]. " " . $_SESSION["admin"]["last_name"] ?> | Profile</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/background.css">

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
                        <?php echo ucfirst($_SESSION["admin"]["first_name"]). " " . ucfirst($_SESSION["admin"]["last_name"]) ?>
                    </h5>
                    <h6>
                        Administrator
                    </h6>
                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>

                </div>
            </div>
            <div class="col-md-2">
                <button class="profile-edit-btn btn btn-secondary btn-sm">Save Profile</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>WORK LINK</p>
                    <a href="">Website Link</a><br />
                    <a href="">Facebook Profile</a><br />
                    <a href="">Linked Profile</a>
                    <p>Experiece</p>
                    <a href="">Admin</a><br />
                    <a href="">Director</a><br />
                    <a href="">Software Engineer</a><br />
                    <a href="">Full stack developer</a><br />
                    <a href="">PHP, .C++</a><br />
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <label>Admin ID</label>
                    </div>
                    <div class="col-md-6">
                        <p><?php echo $_SESSION["admin"]["admin_id"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                    </div>
                    <div class="col-md-6 d-flex">
                        <input type="text"
                            value="<?php echo $_SESSION["admin"]["first_name"] . " " . $_SESSION["admin"]["last_name"] ?>"
                            class="form-control">
                        &nbsp;<p><i class="fa-solid fa-pencil"></i></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Email</label>
                    </div>
                    <div class="col-md-6">
                        <p><?php echo $_SESSION["admin"]["email"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Phone</label>
                    </div>
                    <div class="col-md-6 d-flex">
                        <input type="text" value="<?php echo $_SESSION["admin"]["mobile"] ?>" class="form-control">
                        &nbsp;<p><i class="fa-solid fa-pencil"></i></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Role</label>
                    </div>
                    <div class="col-md-6">
                        <p>Admin</p>
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