<?php
require "common.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
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
<style type="text/css">
	#contact_style{
		margin-top: 150px;
	}
</style>
<body>
	<?php
	include 'header.php';
	?>
<div class="container" id="contact_style">
	<div class="row">
		<div class="col-xs-9">
			<h1>LIVE SUPPORT</h1>
			<p>The Contact Us page is one of the most visited pages on any website. That seems like a compelling enough reason to redesign your Contacts section to better meet your users' needs and grab their attention. While working on this post. I came across hundreds of beautifully made websites. yet their Contact Us pages were. for the most part. disappointing. Most Contact pages are made for show. with just an email address. phone. location. and some short boring text on a plain backgroundseason to redesign your Contacts section to better meet your users' needs and grab their attention. While working on this post. I came across hundreds.</p>
		</div>
		<div class="col-xs-3">
			<img src="images/support.jpg" alt="live-support" width="400px;">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-xs-7">
			<form class="form">
				<h1>CONTACT US</h1>
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Name" required="true">
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
				</div>
				<div class="form-group">
					<textarea rows="4" cols="90" placeholder="Address" name="address" required="true" maxlength="50"></textarea>
				</div>
				<button type="submit" class="btn btn-primary"><a href="#"></a>Submit</button>
			</form>
		</div>
		<div class="col-xs-5" >
			<div class="panel-default">
				<div class="panel-heading">COMPANY INFORMATION</div>
				<div class="panel-body">
					<p>Guwahati, India - 781012</p>
					<p>Phone: +91 8448448345</p>
					<p>Email: lifestyle@gmail.com</p>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<?php
include 'footer.php';
?>
</body>
</html>