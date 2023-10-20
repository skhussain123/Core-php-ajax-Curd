<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">

            <?php

            if (isset($_GET['message'])) {
                if ($_GET['message']) {
                    echo $_GET['message'];
                }
            } else {
            }

            ?>

            <div class="col-md-12">
                <h2 class="mb-4">User Records</h2>
                <a href="add.php" class="btn btn-primary">Add Recorde</a>
                <br>
                <br>
                <div class="table" id="table-data">
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: "fetch-data.php",
                type: "POST",
                success: function(data) {
                    $("#table-data").html(data);
                }
            });
        });
    </script>
    <!-- Bootstrap JavaScript CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Popper.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>

</html>