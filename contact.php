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
		<meta name="keywords" content="university, college, rochester, film, urcg, cinema group, movies" />
		<meta name="robots" content="index, follow, noarchive" />

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/testing.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		
		<!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

    <?php $selected = 'contact'; include "inc/header.inc"; ?>
	
	<?
      include_once("connect.php");

      $query = "SELECT trailer_name, trailer_email, room FROM website";
      $request = mysql_query($query);

      $row = mysql_fetch_assoc($request);

      $trailer_name = $row['trailer_name'];
      $trailer_email = $row['trailer_email'];
	  $room = $row['room'];
    ?>

        <!--========== PAGE LAYOUT ==========-->
        <!-- Google Map -->
        <div id="map" class="map height-300"></div>

        <!-- Contact List -->
		<!-- Icons of Simple Line Icons-->
        <div class="section-seperator">
            <div class="content-md container">
                <div class="row">
                    <!-- Contact List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h4><a href="#">Hoyt Auditorium</a> <span class="text-uppercase margin-l-20">Theater</span></h4>
                        <p>Hoyt Hall features a 300-seat auditorium available for lectures, demonstrations, and film screenings. Hoyt Auditorium is the main theater location for movies on River campus.</p>
                        <ul class="list-unstyled contact-list">
							<li><i class="margin-r-10 color-base icon-film"></i><a href="http://sa.rochester.edu/urcg">Our Website</a></li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> ur.cinemagroup@gmail.com</li>
							<li><i class="margin-r-10 color-base icon-direction"></i><a href="#directions">Directions</a></li>
                        </ul>
                    </div>
                    <!-- End Contact List -->

                    <!-- Contact List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h4><a href="#">Wilson Commons</a> <span class="text-uppercase margin-l-20">Meeting Room</span></h4>
                        <p>Designed by architect I. M. Pei and located at the heart of campus, Wilson Commons is the main hub of student activity connecting the academic and residential sectors of River Campus. Here you can grab coffee at Starbucks or a bite from the PIT, a food court-style dining area. 
						The building also houses the Student Activities Office, student clubs and government organizations,
						an information center, student lounges, and conference rooms.</p>
                        <ul class="list-unstyled contact-list">
							<li><i class="margin-r-10 color-base icon-users"></i>Meeting Room: <? echo($room); ?></li>
                            <li><i class="margin-r-10 color-base icon-home"></i><a href="https://www.rochester.edu/college/wcsa/">Wilson Commons Student Activities</a></li>
							<li><i class="margin-r-10 color-base icon-map"></i><a href="https://www.rochester.edu/maps/">University of Rochester Map</a></li>
                        </ul>
                    </div>
                    <!-- End Contact List -->

                    <!-- Contact List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h4><a href="#">101B Ruth Merrill</a> <span class="text-uppercase margin-l-20">Office</span></h4>
                        <p>URCG's Office is located in the Ruth Merrill Center on the first floor on Wilson Commons. Our Office is located on the right side of the room in 101B. We share the office with College Feminists.</p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-user"></i><a href="https://ccc.rochester.edu/organization/urcg">CCC Page</a></li>
                            <li><i class="margin-r-10 color-base icon-home"></i> Wilson Commons, University of Rochester</li>
                        </ul>
                    </div>
                    <!-- End Contact List -->
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Contact List -->

        <!-- Emails -->
        <div class="bg-color-sky-light section-seperator">
            <div class="content-md container">
			<div class="row">
				<div class="col-md-6">
                <h4><i class="margin-r-10 color-base icon-envelope"></i><a href="mailto:ur.cinemagroup@gmail.com">ur.cinemagroup@gmail.com</a></h4>
				<h4><i class="margin-r-10 color-base icon-envelope"></i><a href="mailto:urcgtrailers@gmail.com">urcgtrailers@gmail.com</a></h4>
				</div>
				<div class="masonry-grid-item col-md-6">
                         <img class="full-width img-responsive" src="img/1920x1080/03.jpg" alt="Portfolio Image">
                 </div>
            </div>
        </div>
		</div>
        <!-- Emails -->
		
		<!-- Ads -->
		<div class="section-seperator">
            <div class="content-md container">
                <div class="row margin-b-40">
                    <div class="col-sm-8">
                        <h2>Advertise with Us</h2>
                        <p>Advertising with URCG is an extremely effective way to advertise your group or event. A wide variety of students attend our film screenings, meaning your advertisement will reach students all over campus. Advertisements can be in the form of still slides or video trailers.</p>
                    </div>
					<div class="col-sm-4">
						<p>THE DEADLINE FOR ADVERTISEMENT SUBMISSIONS IS ONE WEEK PRIOR TO THE WEEKEND THE ADVERTISEMENT IS TO BE SHOWN.</p>
					</div>
                </div> 
				<div class="row">
				<div class="col-sm-4 sm-margin-b-50">
                    <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3>Video</h3>
						<p>As videos are projected on the same large screen, if your video editing software has the option of making your video widescreen, this will result in the best quality when projected. Videos may be submitted by email or on Dropbox or Google Drive as a .mov or .m4v file. Videos may also be uploaded to YouTube. Please remember that videos must be less than 1 minute and 30 seconds. Groups must send members to at least one of the screenings.</p>
                    </div>
                </div>
				<div class="col-sm-4 sm-margin-b-50">
                    <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3>Slides</h3>
						<p>Slides are projected on a screen which is 1.85 times as wide as it is tall. For best results, set the document size to 16 inches by 9 inches or 960x540 pixels. Any program can be used to create your slides (Powerpoint, Photoshop, etc.), but please submit your slide in .jpg format. Please note that slides do not run sequentially, so each slide should be able to stand on its own with all information that is to be advertised.</p>
                    </div>
                </div>
				<div class="col-sm-4 sm-margin-b-50">
                    <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3>More Info</h3>
						<p>To advertise or to ask questions not answered here, email the Trailer Editor, <? echo($trailer_name); ?>, at <a href="urcgtrailers@gmail.com">urcgtrailers@gmail.com</a> or at their college email, <a href="mailto:<? echo($trailer_email); ?>"><? echo($trailer_email); ?></a>. Contact information for all eBoard can be found on the <a href="https://ccc.rochester.edu/organization/urcg">CCC</a>.</p>
						<p>Along with your advertisement include a start and end date of when you want it shown or a certain film you want it to play before. </p>
                    </div>
                </div>
				</div> <!--END ROW-->
			</div>
		</div>
		<!-- Ads -->
		
		<!-- FEEDS -->
		<div class="bg-color-sky-light overflow-h">
            <div class="content-md container">
                <div class="row">
					<div class="col-lg-6">
				
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FURCinema&tabs=timeline%2C%20events%2C%20messages&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					
					</div>
					
					<div class="col-lg-6">
					<!-- start feedwind code -->
					<script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="48053/"></script>
					<!-- end feedwind code -->
					</div>
				</div>
			</div>
		</div>
		
		
		
		<!-- MORE INFO -->
		<div class="content-md container">
			<div class="row">
				<div class="col-sm-4">
					Join our mailing list by adding yourself to the <a href="https://ccc.rochester.edu/organization/urcg">CCC</a> Page. 
					<br>
					<div class="btn-group" >
						<a href="https://ccc.rochester.edu/organization/urcg/contact"><button type="button" class="btn-default btn-secondary">Contact Us</button></a>
						<a href="https://www.facebook.com/groups/300674693627912/"><button type="button" class="btn-default btn-secondary">Facebook Group</button></a>
						<a href="https://ccc.rochester.edu/organization/urcg/roster"><button type="button" class="btn-default btn-secondary">Full Roster</button></a>
						<a href="https://goo.gl/forms/iJ3psCETYcQkXxZg1"><button type="button" class="btn-default btn-secondary">Movie Feedback Form</button></a>
					</div>
				</div>
				<div class="col-sm-8">
					<img class="full-width img-responsive" src="img/other/URmap.jpg" alt="Map">
				</div>
			</div>
		</div>
		
		
		<!-- DIRECTIONS -->
		<div class="bg-color-sky-light">
			<div class="content-md container" id="directions">
			<h4>Directions to Hoyt</h4>
			<div class="row">
				<div class="col-sm-4">
					<h5>Coming from the East or West:</h5>
					<p>Take the New York State Thruway, Rt. 90, to Exit 46. Take I-390 North to Exit 17. Turn left onto Scottsville Road. At the second light, bear right onto Elmwood Avenue. Cross the Genesee River Bridge and take a left at the light onto Wilson Boulevard.</p>
				</div>
				<div class="col-sm-4">
					<h5>Coming from the South:</h5>
					<p>Take I-390 North to Exit 17. Turn left onto Scottsville Road. At the second light, bear right onto Elmwood Avenue. Cross the Genesee River Bridge and take a left onto Wilson Boulevard.</p>
				</div>
				<div class="col-sm-4">
					<h5>On Campus:</h5>
					<p>Pass the visitor booth and turn right onto Hutchison Road. Then make a left into Dewey Lot. After Parking, walk past building five (Simon School) and turn right onto the Eastman Quadriangle. Pass Building 7 (Dewey Hall) and turn right onto the patio of hoyt hall.</p>
				</div>
			</div>
			</div>
		</div>
		
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
        <script src="https://maps.googleapis.com/maps/api/js?sensor=true" type="text/javascript"></script>
        <script src="vendor/google-map.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
		<script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/google-map.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>