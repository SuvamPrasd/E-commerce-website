<?php
require "common.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Bootstrap 3.4.0-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- css for styling -->
    <link rel="stylesheet" type="text/css" href="css/stylling1.css">
    <!-- javascript library -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!--Jquery library-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php include 'header.php' ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <center><h2 style="font-weight: bolder;">SIGN UP</h2></center>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <?php include 'footer.php'; ?>
    </body>
</html>