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
                <h2 class="text-center">Add Your Assignment Here</h2>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mt-3">
                    <span>Select Subject</span>
                    <select id="" class="form-select">
                        <option value="">Subject 1</option>
                        <option value="">Subject 2</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <span>Select Assignment</span>
                    <select id="" class="form-select">
                        <option value="">Asignment Name</option>
                        <option value="">Asignment Name</option>
                    </select>
                </div>
                <div class="col-12 mt-3">
                    <span>Upload file as an attachment</span><br>
                    <input type="file" id=""><span class="span">Please include (.pdf .zip or .rar)</span>
                </div>
                <div class="col-12 mt-3">
                    <input type="checkbox" id="">
                    <span>Please confirm changes</span>
                </div>
                <div class="col-12 mt-3">
                    <button class="btn btn-dark w-100">Upload</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/admin.js"></script>
</body>

</html>