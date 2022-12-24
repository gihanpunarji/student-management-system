<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Academic Officer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7d2f1d04cc.js" crossorigin="anonymous"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mt-4">Add Academic Officers to the sysytem</h2>
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
                        <div class="col-12 col-md-2 d-none d-md-flex">
                            <span>-----</span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="d-flex justify-content-between">
                        <div class="col-8 col-md-8 d-flex justify-content-between">
                            <span>00001</span>
                            <span>ravindu sathsara</span>
                            <span>ravi.123@gmail.com</span>
                        </div>
                        <div class="col-12 col-md-2">
                            <button class="btn btn-sm btn-outline-success">Add Academic Officer</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="col-12 d-flex justify-content-center mt-3">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><span
                                    aria-hidden="true">&laquo;</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a>
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
</body>

</html>