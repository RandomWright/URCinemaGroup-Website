<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Acidus" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Author:         KeenThemes / Charlotte Wright
================================== -->
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>UR Cinema Group</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="Offical website for the University of Rochester Cinema Group." name="description"/>
        <meta content="Charlotte Wright" name="author"/>
		<meta name="keywords" content="university, college, rochester, urcg, cinema group, movies" />
		<meta name="robots" content="index, follow, noarchive" />


        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

	<!-- PHP - HEADER -->
	<?php include "inc/header.inc"; ?>

        <!--========== PAGE LAYOUT ==========-->
		
    <?php
	if(isset( $_POST['name']))
		$name = $_POST['name'];
	if(isset( $_POST['email']))
		$email = $_POST['email'];
	if(isset( $_POST['message']))
		$message = $_POST['message'];
	if(isset( $_POST['subject']))
		$subject = $_POST['subject'];

	$content="From: $name \n Email: $email \n Message: $message";
	$recipient = "cwrig21@u.rochester.edu";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $content, $mailheader) or die("Error!");
	echo "Email sent!";
	?>
	 
	<!-- URCG -->
	<div class = "bg-color-sky-light">
        <div class="content-sm container">
            <div class="row margin-b-30">
                <h3>Problems with Hoyt? Sound messed up? Resolution all wrong? Did the movie just stop midway through? </h3>
				<p>Contact EMC</p>
            </div>
			<div class="row">
				<div class="container">
				<form action="action_page.php">

				<label for="name">First Name</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name..">

				<label for="lname">Last Name</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name..">

				<label for="subject">Subject</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

				<input type="submit" value="Submit">

				</form>
				</div>
			</div>
            <!--// end row -->
        </div>
	</div>
    <!-- End URCG -->
	
	
	

		
        <!--========== END PAGE LAYOUT ==========-->

	<!-- PHP - FOOTER -->
	<?php include "inc/footer.inc"; ?>

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>