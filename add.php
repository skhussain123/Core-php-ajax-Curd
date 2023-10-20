<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Include the full version of jQuery first -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">


            <div class="col-md-6">
                <h2 class="mb-4">Add Record</h2>
                <form>
                    <p id="message"></p>
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" id="name" name="fullName" placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                    </div>
                    <button type="button" class="btn btn-primary mt-5" id="submitButton" data-url="register.php">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#submitButton").click(function(e) {
                e.preventDefault();


                var name = $("#name").val();
                var email = $("#email").val();
                var password = $("#password").val();

                if (name.trim() === '' || email.trim() === '' || password.trim() === '') {
                    $('#name').addClass('border-red');
                    $('#email').addClass('border-red');
                    $('#password').addClass('border-red');

                } else {

                    $('#name').removeClass('border-red');
                    $('#email').removeClass('border-red');
                    $('#password').removeClass('border-red');

                    $.ajax({
                        type: 'POST',
                        url: $("#submitButton").data("url"),
                        data: {
                            name: name,
                            email: email,
                            password: password
                        },
                        success: function(data) {
                            console.log(data);
                            $('#message').text(data);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>