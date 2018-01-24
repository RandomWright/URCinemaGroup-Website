<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Acidus" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Version:        1.0
    Author:         KeenThemes
    Primary use:    Corporate, Business Themes.
    Email:          support@keenthemes.com
    Follow:         http://www.twitter.com/keenthemes
    Like:           http://www.facebook.com/keenthemes
    Website:        http://www.keenthemes.com
    Premium:        Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
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

	<?php $selected = 'about'; include "inc/header.inc"; ?>
	
		<?
      include_once("connect.php");
      $query = "SELECT room FROM website";
      $request = mysql_query($query);
      $row = mysql_fetch_assoc($request);
      $room = $row['room'];
    ?>

    <!--========== PAGE LAYOUT ==========-->
	
    <!-- Slider -->
        <div class="bg-color-sky-light">
            <div class="content-md container">
                <img class="img-responsive" src="img/1920x1080/02.jpg" alt="Slider Image">
            </div>
        </div>
        <!-- End Slider -->

        <!-- About -->
        <div class="content-md container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>About</h2>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <div class="margin-b-30">
                        <p>UR Cinema Group has been a staple of the University of Rochester's community since 1970. The club's purpose is to publicly show movies from many genres varying from blockbusters to independent films, providing the campus with a positive and entertaining movie-going experience. We show our primary programming on Friday and Saturday evenings and also have free alternative programs (films which are co-sponsored with other campus organizations) on pre-scheduled weeknights.</p>
                    </div>
                    <p>Outside of our film programming, we further seek to provide a fun and fulfilling environment for our members through weekly meetings to discuss film and other goings on, off-campus screenings, and social events such as our annual Oscar party.</p>
					<p>Meetings are held every Sunday at 2 PM in <? echo($room); ?>. Students are welcome to join at anytime; members gain admission to speical events and a chance to earn the full size movie posters that are on display.</p>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="img/640x380/01.jpg" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End About -->

        <!-- Team -->
        <div class="bg-color-sky-light">
            <div class="content-md container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Join the Team</h2>
                        <p>Stop by any of our weekly meetings that are Sunday at 2pm in Wilson Commons. Stay up-to-date by joining the group on the CCC and by following us on Facebook.</p>
                    </div>
                </div>
                <!--// end row -->

                <div class="row">
                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="img/770x860/01.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a href="eboard.php">eBoard</a> <span class="text-uppercase margin-l-20">URCG</span></h4>
                        <p>Our eBoard consists of 8 members; President, Personnel Director, Business Manager, Programming Director, Publicity Director, Alternative Programming Director, Trailer Editor, and Secretary.</p>
                        <a class="link" href="eboard">Read More</a>
                    </div>
                    <!-- End Team -->

                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="img/770x860/02.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a href="eboard#TM">Theater Managers</a> <span class="text-uppercase margin-l-20">URCG</span></h4>
                        <p>A Theater Manager is the person in charge of a movie showing. They show up 30 to 20 mins before the movie and make sure everything is setup correctly.</p>
                        <a class="link" href="eboard#TM">Read More</a>
                    </div>
                    <!-- End Team -->

                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="img/770x860/03.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a href="#">Members</a> <span class="text-uppercase margin-l-20">URCG</span></h4>
                        <p>Members get special benefits including full size movie poster at the end of the semester, free or discounted tickets, can vote in the elections and other perks.</p>
                        <a class="link" href="#members">Read More</a>
                    </div>
                    <!-- End Team -->
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Team -->

        <!-- Member Activites -->
        <div class="section-seperator" id="members">
            <div class="content-md container">
                <div class="row">
                    <div class="col-sm-6 sm-margin-b-50">
                        <h2>Member Activites</h2>
                        <p>Trips to the Theater, Plan Events, Work Movie Shifts, Watch Trailers, Film Discussions, Vote, Tunnel Painting and More...</p>
						<img class="img-responsive" src="img/other/osc01.jpg" alt="OSCAR">
						<p><br>Learn more about the <a href="history">history of this website</a>.</p>
                    </div>
					<div class="col-xs-6 sm-margin-b-50">
						<img class="img-responsive" src="img/other/paint.jpg" alt="Slider Image">
					</div>
                </div>
                <!--// end row -->

            </div>
        </div>
        <!-- Members -->
		
		
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

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        
    </body>
    <!-- END BODY -->
</html>