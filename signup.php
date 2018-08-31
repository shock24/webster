<!DOCTYPE html>
<html>
    <head>
        <title>Sign-Up</title>
        <link rel="stylesheet" type="text/css" href="../includes/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/javascript" href="../includes/bootstrap/js/jquery-3.3.1.min.js">
        <link rel="stylesheet" type="text/javascript" href="../includes/bootstrap/js/bootstrap.min.js">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">         
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <form method="post" action="signup_script.php" id="id1">
                        <h1 style="color:whitesmoke">Sign Up</h1><br>
                        <input type="name" name="name" class="form-control" placeholder="First Name" required><br>
                        <input type="name" name="name" class="form-control" placeholder="Last Name" required><br>
                        <input type="email" name="email" class="form-control" placeholder="Email" required><br>
                        <input type="password" name="password" class="form-control" placeholder="Password" required><br>
                        <input type="address" name="address" class="form-control" placeholder="Address" required><br>
                        <input type="PIN" name="PIN" class="form-control" placeholder="PIN" required><br>
                        <input type="city" name="city" class="form-control" placeholder="City" required><br>
                        <button type="button" value="registration_submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>