<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test-task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <link rel="stylesheet" href="custom.css">

</head>

<body>


    <div class="container">

        <br>
        <br>

        <h2>Upload your CSV file and create Datatable</h2>
        <br>


        <form id="upload_csv" action="" method="post" enctype="multipart/form-data">
            <div class="col-md-2">
                <label><i class="fa-solid fa-file-arrow-up"></i> Add CSV File</label>
            </div>
            <div class="col-md-3">
                <input type="file" name="csv_file" id="csv_file" accept=".csv">
                <small>Max File Sixe : 1MB</small>

            </div>

            <div class="col-md-7">
                <input type="submit" name="upload" id="upload" value="Upload File" class="btn btn-info">

            </div>

            <div style="clear:both"></div>


        </form>

        <br>
        <br>

        <div class="table-responsive mb-3">
            <table class="table table-striped table-bordered" id="data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>

                    </tr>
                </thead>
            </table>

        </div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script src="main.js"></script>

</body>

</html>