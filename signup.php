<?php
include 'Connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Cedarville+Cursive&family=Shrikhand&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('wow.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
        
        .contact-form {
            text-align: center;
        }
        .contact-form form {
            margin: 0 auto;
            max-width: 300px;
        }
        .form-group label {
            display: block;
        }
        .form-group input {
            width: 100%;
            padding: 5px;
            margin: 5px 0;
        }
        .form-group button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>

    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 mt-5 mx-auto">
            <div class="contact-form-body">
                <div class="contact-form"><br><h4>SIGN UP</h4><br><br>
                             <form action="config.php" method="POST" class="text-center">
                            <div class="form-group">
                                <label for="Username">Username:</label>
                                <input type="text" id="Username" name="Username" placeholder="Your Username" required>
                            </div>
                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="text" id="Email" name="Email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <label for="Password">Password:</label>
                                <input type="password" id="Password" name="Password" placeholder="Your Password" required>
                            </div>
                            <div class="form-group">
                                <label for="Conf_Password">Confirm Password:</label>
                                <input type="password" id="Conf_Password" name="Conf_Password" placeholder="Confirm Your Password" required>
                            </div>
                            <p><input type="submit" name="sign_up" class="btn btn-secondary" value="Sign Up"></p>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
