<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Exams</title>
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
            <div class="col-12 mt-3 mb-3">
                <h2 class="text-center">View and manage all Exam marks and assigments.</h2>
            </div>
            <div class="row mb-3 mt-3">
                <div class="col-12 text-center">
                    <input type="text" class="form-control" placeholder="Search by id or assignment name...">
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <span class="admin-bar">Id#</span>
                </div>
                <div class="col-2">
                    <span class="admin-bar">Subject</span>
                </div>
                <div class="col-3">
                    <span class="admin-bar">Assignment Name</span>
                </div>
                <div class="col-2">
                    <span class="admin-bar">Released Date</span>
                </div>
                <div class="col-2">
                    <span class="admin-bar">Result</span>
                </div>
                <div class="col-2">
                    <span></span>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-1">
                    <span>00001</span>
                </div>
                <div class="col-2">
                    <span>ENGLISH</span>
                </div>
                <div class="col-3">
                    <span>English Spoken Assignment</span>
                </div>
                <div class="col-2">
                    <span>2022-11-11</span>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-primary btn-sm w-75">Add</button>
                </div>
            </div>

            <div class="row mt-3">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="js/admin.js"></script>
</body>

</html>