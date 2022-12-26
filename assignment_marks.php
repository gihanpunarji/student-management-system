<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Assignments</title>

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
            <div class="col-12 mt-3">
                <h2 class="text-center">Release Assignment Marks</h2>
            </div>

            <div class="row">
                <div class="col-12 mt-3">
                    <div class="row">
                        <div class="col-2">
                            <span class="admi-bar">Id#</span>
                        </div>
                        <div class="col-4">
                            <span class="admi-bar">Teacher Name</span>
                        </div>
                        <div class="col-4">
                            <span class="admi-bar">Student Name</span>
                        </div>
                        <div class="col-2">
                            <span class="admi-bar"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-2">
                    <div class="row">
                        <div class="col-2">
                            <span>0001</span>
                        </div>
                        <div class="col-4">
                            <span>Sulochana Mis</span>
                        </div>
                        <div class="col-4">
                            <span>Ravindu</span>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-primary btn-sm w-100">Release</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="row">
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
            </div>
        </div>
    </div>

    <script src="js/admin.js"></script>
</body>

</html>