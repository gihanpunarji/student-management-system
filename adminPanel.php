<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
                    <div class="d-flex align-items-center mt-4">
                        <div class="profile-img me-3">
                            <img src="resources/user.png" onclick="gotoProfile()">
                        </div>
                        <div class="d-flex flex-column text-white">
                            <span>Gihan Punarji</span>
                            <span class="email">email</span>
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
                                    Students
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="manage_students.php">Manage Students</a></li>
                                    <li><a class="dropdown-item" href="add_students.php">Add Students</a></li>
                                </ul>
                            </div>
                            <i class="icon fa-solid fa-graduation-cap"></i>
                        </div>

                        <hr class="left-hr">
                        <div class="item">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Teachers
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="manage_teachers.php">Manage Teacher</a></li>
                                    <li><a class="dropdown-item" href="add_teachers.php">Add Teacher</a></li>
                                </ul>
                            </div>
                            <i class="icon fa-solid fa-school"></i>
                        </div>
                        <hr class="left-hr">
                        <div class="item">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Academic Officer
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Manage Academic Officers</a></li>
                                    <li><a class="dropdown-item" href="#">Add Academic )fficers</a></li>
                                </ul>
                            </div>
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <hr class="left-hr">
                    </div>

                </div>
            </div>
            <div class="col-md-10 panel">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <h3 class="welcome">Welcome Admin, Gihan Punarji</h3>
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
                                    <a class="ms-3 manage" href="#">Manage Students</a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span class="ps-3">Academic Officers</span><br>
                                    <span class="ps-3">100</span><br>
                                    <a class="ms-3 manage" href="#">Manage Academic Officers</a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span class="ps-3">Total Teachers</span><br>
                                    <span class="ps-3">100</span><br>
                                    <a class="ms-3 manage" href="#">Manage Teachers</a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span class="ps-3">Administrations</span><br>
                                    <a class="ms-3 manage" href="#">Manage Administrations</a>
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
                                    <span class=" mt-3 ms-4">Manage All Registrations</span>
                                    <div class="col-11 ms-3">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <img src="resources/user.png" alt="">
                                    </div>
                                    <div class="col-8">
                                        <span>Send Invitation to a new Admin</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-10">
                                        <input type="email" class="form-control" placeholder="Email here..." id="email"
                                            autocomplete="off">
                                        <label class="form-label ms-3" for="email">Enter the new admin email</label>
                                    </div>
                                </div>
                                <div class="row mt-3 ms-1 mb-3">
                                    <div class="col-12 col-md-6">
                                        <div class="btn btn-sm btn-primary">Send Request</div>
                                    </div>
                                </div>
                                <div class="col-11 ms-3">
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <img src="resources/user.png" alt="">
                                    </div>
                                    <div class="col-8">
                                        <span>Send Invitation to a new Academic Officer</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-10">
                                        <input type="email" class="form-control" placeholder="Email here..." id="email"
                                            autocomplete="off">
                                        <label class="form-label ms-3" for="email">Enter the new admin email</label>
                                    </div>
                                </div>
                                <div class="row mt-3 ms-1 mb-3">
                                    <div class="col-12 col-md-6">
                                        <div class="btn btn-sm btn-primary">Send Request</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-2 mt-md-0">
                        <div class="border border-secondary rounded-1 bg-white">
                            <div class="col-12">
                                <div class="row mb-3">
                                    <span class=" mt-3 ms-4">System Admins Details</span>
                                    <div class="col-11 ms-3">
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <img src="resources/user.png" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-start text-md-center ms-4 ms-md-1">
                                            <span>Admins : 2</span><br>
                                            <span>Staus : Admin</span><br>
                                            <span class="edit">Edit</span>&nbsp;<i class="fa-solid fa-pencil"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="border border-secondary rounded-1 bg-white">
                                <div class="col-12">
                                    <div class="row">
                                        <span class="mt-3 ms-4">Manage Admistrations</span>
                                    </div>
                                    <div class="col-11 ms-3">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-between ms-3 me-3">
                                        <span class="admin-bar">ID</span>
                                        <span class="admin-bar">Name</span>
                                        <span class="admin-bar">Status</span>
                                        <span class="admin-bar"></span>
                                    </div>
                                    <div class="col-11 d-flex justify-content-between ms-3 me-3 mt-3 mb-3">
                                        <span>Admin 01</span>
                                        <span>Gihan Punarji</span>
                                        <span>Active</span>
                                        <span><i class="fa-solid fa-xmark"></i></span>
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
    <script src="js/admin.js"></script>

</body>

</html>