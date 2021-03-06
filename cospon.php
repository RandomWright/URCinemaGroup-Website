<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Acidus" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Author:         KeenThemes / Charlotte Wright
================================== -->
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <?php include "inc/head-info.inc"; ?>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

	<!-- PHP - HEADER -->
	<?php $selected = 'cospon'; include "inc/header.inc"; ?>
	
	<?
      include_once("connect.php");

      $query = "SELECT altprog_name, altprog_email, room FROM website";
      $request = mysql_query($query);

      $row = mysql_fetch_assoc($request);

      $altprog_name = $row['altprog_name'];
      $altprog_email = $row['altprog_email'];
	  $room = $row['room'];
    ?>

        <!--========== PAGE LAYOUT ==========-->
		
		
		<!-- CoSpon -->
        <div class="section-seperator">
            <div class="content-md container">
                <div class="row">
                    <!-- CoSpon List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h4><a href="#">Cosponsorships</a> <span class="text-uppercase margin-l-20">(Alternative Programming)</span></h4>
                        <p>UR Cinema Group enjoys showing movies that are cosponsored with other groups to supplement our regular semester programming. We show all sorts of movies. They can be foreign, documentaries or films of any other genre. </p>
                    </div>
                    <!-- End CoSpon List -->

                    <!-- CoSpon List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h4><span class="text-uppercase margin-l-20">What does co-sponsoring a film entail?</span></h4>
                        <p>By cosponsoring a movie, the group in question agrees to assisst UR Cinema Group in three ways: Publicity, Personnel, and Finance. Your group will be responsible for additional advertising, whether by posters, e-mail, or word-of-mouth and must send a few of your members to help with the screening. We have a contract that the cosponsoring groups will need to sign that covers everything that is expected and needed.</p>
                    </div>
                    <!-- End CoSpon List -->

                    <!-- CoSpon List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h4><span class="text-uppercase margin-l-20">How do I start?</span></h4>
                        <p>Reach out to our Alternative Programming Director, <? echo($altprog_name); ?>. He can be reached via email at <a href="mailto:<? echo($altprog_email); ?>"><? echo($altprog_email); ?></a> and fill out the URCG Co-sponsorship survey below.</p>
						
						<p>Please note: In order to begin the cosponsorship process, you must fill out this form to assist our Alternative Programming Director in making your event happen: <strong></strong><a href="https://goo.gl/forms/OL11w8yC8jXCNHMi2">https://goo.gl/forms/OL11w8yC8jXCNHMi2</a></strong></p>
                    </div>
                    <!-- End CoSpon List -->
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End CoSpon List -->
		
		
        <!-- Slider -->
        <div class="bg-color-sky-light">
            <div class="content-md container">
                <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
            </div>
        </div>
        <!-- End Slider -->
		
		 <!-- Questions -->
        <div class="content-md container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Q & A</h2>

                    <!-- Swiper Testimonials -->
                    <div class="swiper-slider swiper-testimonials">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Q: What is Alternative Programming?
                                    </div>
                                    <div class="margin-b-20">
                                        A: UR Cinema Group enjoys showing movies that are cosponsored with other groups to supplement our regular semester programming.
                                    </div>
                                    </blockquote>
                            </div>
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Q: What sort of movies are shown for Alternative Programming?
                                    </div>
                                    <div class="margin-b-20">
										A: All sorts of movies. They can be foreign films or films of any genre. The only restrictions are that they are not recent releases that would compete with our regular programming and that they not be pornographic.
                                    </div>
                                </blockquote>
                            </div>
							<div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Q: Who chooses the movies?
                                    </div>
                                    <div class="margin-b-20">
										A: The film is chosen by the cosponsoring group.
                                    </div>
                                </blockquote>
                            </div>
							<div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Q: Can I show a movie if it has already been shown on campus recently?
                                    </div>
                                    <div class="margin-b-20">
										A: If the movie has been shown on campus in the last three years, Cinema Group would rather not show it again. Variety is the spice of life. Or something.
                                    </div>
                                </blockquote>
                            </div>
							<div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Q: Where are Alternative Programming movies shown?
                                    </div>
                                    <div class="margin-b-20">
										A: Alternative Programming movies are typically shown in Hoyt Auditorium on the River Campus, but the cosponsor may request a different venue if need be.
                                    </div>
                                </blockquote>
                            </div>
							<div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                       Q: When are Alternative Programming movies shown?
                                    </div>
                                    <div class="margin-b-20">
										A: Alternative Programming movies are typically shown on Thursday evenings.
                                    </div>
                                </blockquote>
                            </div>
							<div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Q: When are Alternative Programming movies scheduled?
                                    </div>
                                    <div class="margin-b-20">
										A: UR Cinema Group prefers to schedule films prior to the semester in which they will be shown. Scheduling for Fall Semester begins in the summer; scheduling for Spring Semester begins mid-October.
                                    </div>
                                </blockquote>
                            </div>
							<div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Q: We have the film on DVD. Do we still need to pay for the movie costs?
                                    </div>
                                    <div class="margin-b-20">
										A: Yes. The financial burden is not from ordering the film reel, but from obtaining the rights to show the movie on campus. Although it is a free showing, it is still a public showing, and we must pay for the rights. UR Cinema Group does not endore illegal showings.
                                    </div>
                                </blockquote>
                            </div>
							<div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Q: What does co-sponsoring a film entail?
                                    </div>
                                    <div class="margin-b-20">
										A: By cosponsoring a movie, the group in question agrees to assisst UR Cinema Group in three ways: Publicity, Personnel, and Finance. We have a contract that the cosponsoring groups will need to sign that covers everything that is expected and needed.
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <!-- End Swiper Wrapper -->

                        <!-- Pagination -->
                        <div class="swiper-testimonials-pagination"></div>
                    </div>
                    <!-- End Swiper Testimonials -->
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End ReViews -->
		
		<div class="bg-color-sky-light">
		<div class="content-md container text-center">
		<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSftlM8pqnwD4Egbwsffi-1U9De4a_tObrI_k27b1w9trm8QgA/viewform?embedded=true" width="90%" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
		</div>
		</div>

        <!-- Features -->
        <div class="section-seperator">
            <div class="content-md container">
                <div class="row">
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3>Schedule</h3>
							<p>Want to know what movies we are playing this semester or what movies we've played in the past?</p>
                            <a class="link" href="films#schedule">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <h3>Box Office</h3>
                            <p>Want to know how to get tickets? Need help getting to Hoyt Auditorium?</p>
                            <a class="link" href="contact">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h3>The Club</h3>
                            <p>Curious about the club or want to know how to get involved in URCG? Click below to find out more!</p>
                            <a class="link" href="about">Read More</a>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Features -->

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
                    <img class="img-responsive" src="img/397x400/01.jpg" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End About -->

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