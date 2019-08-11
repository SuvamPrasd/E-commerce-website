<?php
require "common.php";

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<!-- Bootstrap 3.4.0-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- css for styling -->
  <link rel="stylesheet" type="text/css" href="css/design.css">
  <!-- javascript library -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!--Jquery library-->
  <script type="text/javascript" src="js/jquery.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'header.php';
        ?>
        <!--Header end-->

        <div id="content" style="background: url(images/bokeh-2990426_1920.jpg); background-position: bottom; background-repeat: no-repeat;">
            <!--Main content-->
            <div id = "banner_image">
                <div class="container" style="background-image: url(images/pexels-photo-1020315.jpeg);">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main content end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="images/camera1.jpg" alt="">
                                <div class="caption" style="padding-top: 220px;">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="images/watch1.jpg" alt="">
                                <div class="caption" style="padding-top: 105px;">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="images/shirt1.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'footer.php';
        ?>
        <!--Footer end-->
   
</body>
</html>
