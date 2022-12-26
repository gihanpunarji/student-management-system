<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Assignments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7d2f1d04cc.js" crossorigin="anonymous"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>

    <div class="container">
        <div class="row pb-5">
            <div class="col-12 mt-3 mb-3">
                <h2 class="text-center">Add new assigments.</h2>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-4">
                    <span>Select Subject</span>
                    <select id="" class="form-select">
                        <option value="">English</option>
                        <option value="">Mathamatics</option>
                    </select>
                </div>
                <div class="col-12 col-md-3">
                    <span>Enter the Assignment name</span>
                    <input type="text" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <span>Select the deadline</span>
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <button class="btn btn-primary w-100">Add Assignment</button>
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