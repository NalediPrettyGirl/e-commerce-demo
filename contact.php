<?php include 'Connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SHOP&SLAY</title>
    <style>
       
        .navbar {
            background-color: #000;
        }
        body {
            background-image: url('wow.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
        
        .contact-form-body{
            text-align: center;
        }
 

    </style>
</head>
<body>
<?php 
include 'nav.php'
?>

<div class="container">
        <div class="row">
    <div class = "col-lg-12 col-md-12 col-sm-12 mt-5">
      <h4 class= "text-center">CONTACT US</a></h4>
</div>
</div>
</div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 mt-5 mx-auto">
                    <div class="contact-form-body">
                        <div class="contact-form">
                        <form action="server-script.php" method="POST" class="text-center">
                            <div class="form-group">
                                <label for="name">Name:</label><br>
                                <input type="text" id="name" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label><br>
                                <input type="email" id="email" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label><br>
                                <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
                            </div>
                            <p><button type="submit" class="btn btn-dark">Submit</button></p>
                            <div id="success-message" style="display: none;">Thank you for your Message Form. We will be in touch shortly.</div>
                        </form>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>