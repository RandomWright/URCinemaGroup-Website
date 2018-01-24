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
		<link href="css/testing.css" rel="stylesheet" type="text/css"/>
		

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

    <!-- PHP - HEADER -->
	<?php $selected = 'index'; include "inc/header.inc"; ?>
	
	<?
      include_once("connect.php");
      $query = "SELECT room FROM website";
      $request = mysql_query($query);
      $row = mysql_fetch_assoc($request);
      $room = $row['room'];
    ?>
        <!--========== PAGE LAYOUT ==========-->
        <!-- Work -->
        <div class="bg-color-sky-light">
            <div class="content-md container">
                <!-- Masonry Grid -->
                <div class="masonry-grid">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-6"></div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-6">
                        <!-- Work -->
                        <div class="work">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/595x483/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">URCG</h3>
                                <p class="color-white margin-b-0">Watch a Movie with Us!</p>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-6">
                        <!-- Work -->
                        <div class="work">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/595x240/01.jpg" alt="Portfolio Image">
                            </div>
							<a class="content-wrapper-link" href="https://www.facebook.com/URCinema">
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Check out our Facebook Page</h3>
                                <p class="color-white margin-b-0">URCinema</p>
                            </div>
                            </a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-6">
                        <!-- Work -->
                        <div class="work">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/595x240/02.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Meetings Every Sunday!</h3>
                                <p class="color-white margin-b-0">2pm in <? echo($room); ?></p>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
					</div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <!-- End Work -->

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

        <!-- URCG -->
		<div class = "bg-color-sky-light">
        <div class="content-sm container">
            <div class="row margin-b-20">
                <div class="text-center">
                    <h2>URCG</h2>
                    <p>The University of Rochester Cinema Group (URCG) a student group of students that screens movies every Friday and Saturday night throughout the academic year. We show high definition digital films in Hoyt Auditorium, located on the River Campus. We show a mixture of popular movies between theater and DVD release as well as indie flicks and older films. It is easy to get involved in the club, and help bring movies to campus. We are always looking for suggestions for movies, and our meetings are open to all who wish to attend (Sundays at 2pm in <? echo($room); ?>).</p>
                </div>
            </div>
            <!--// end row -->
        </div>
		</div>
        <!-- End URCG -->

		<!-- FEEDS -->
		<div class="overflow-h">
            <div class="content-md container">
                <div class="row">
					<div class="col-md-5">
					<div style="text-align: center; position: relative;">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FURCinema%2F&tabs=timeline%2Cevents&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="600" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
					</div>
					
					<div class="col-md-2"></div>
					
					<div class="col-md-5">
					<!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="48053/"></script> <!-- end feedwind code -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Feeds -->

        <!-- Reviews -->
		<div class="bg-color-sky-light">
        <div class="content-md container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Movie Reviews</h2>

                    <!-- Swiper Testimonials -->
                    <div class="swiper-slider swiper-testimonials">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Depending on whom you ask, “<Strong>mother!</Strong>” is a tragic opus detailing the destruction of the environment; “<Strong>mother!</Strong>” is a minimalist retelling of both the Old and New Testaments; and “<Strong>mother!</Strong>” is an intensely self-critical indictment of how artists treat their friends and families; or “<Strong>mother!</Strong>” is either brilliantly feminist or deeply misogynist.
										<br><br>None of these interpretations are necessarily wrong.
                                    </div>
                                    <div class="margin-b-20">
                                        More than anything, though, “<Strong>mother!</Strong>” is about the ways in which an audience takes ownership of art, rendering the artist obsolete.
                                    </div>
                                    <p><span class="fweight-700 color-link">Scott Abrams</span>, Campus Times</p>
									<a class="link" href="http://www.campustimes.org/2017/09/24/youre-right-mother/">Read More</a>
                                </blockquote>
                            </div>
							
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        “<Strong>Get Out</Strong>” is the social thriller that is breaking box office records for writer and director Jordan Peele of the comedy duo Key and Peele. The plot centers on the relationship of Chris (played by Daniel Kaluuya) and his girlfriend Rose (Allison Williams) as they head out of the city to visit Rose’s parents’ house in the nondescript suburbs.
										<br>This is the first time Chris is meeting Rose’s parents, and plot twist, he’s black.
                                    </div>
                                    <div class="margin-b-20">
										My boyfriend and I saw the movie at the advanced screening at the Little Theatre (courtesy of UR Cinema Group), and it was more than what either of us were expecting. We laughed, we screamed, and as an audience we were all cheering and rooting for Chris to get, well, the fuck out.
                                    </div>
                                    <p><span class="fweight-700 color-link">Zeke Starling & Rachel Weitzner</span>, Campus Times</p>
									<a class="link" href="http://www.campustimes.org/2017/03/28/get-out-film-gets-woke/">Read More</a>
                                </blockquote>
                            </div>
							
							<div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        What does love feel like?<br><br>I love my mom. I love the smell of birthday candles. I’ve never been in love with anyone, but I kissed someone for the first time this year, at a whole 19 years old. Maybe the term is “late bloomer,” but I don’t think it feels like that.<br><br>Every crush I’ve ever had, everyone I’ve cried for  — it all just feels like blooming. 
                                    </div>
                                    <div class="margin-b-20">
										Coming-of-age is something that has always fascinated me, which may be why I was so affected by Luca Guadagnino’s film “<Strong>Call Me By Your Name</Strong>.” 
                                    </div>
                                    <p><span class="fweight-700 color-link">Ashley Bardhan</span>, Campus Times</p>
									<a class="link" href="http://www.campustimes.org/2017/12/04/call-name-feels-like-love/">Read More</a>
                                </blockquote>
                            </div>
							<div class="swiper-slide">
							<blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        If you want to feel hopeful, watch “<strong>Hidden Figures</strong>.”
										<br><br>It’s a stunning story with stunning performances from Taraji P. Henson, Octavia Spencer, and Janelle Monáe. In classic “based on a true event” fashion, “<strong>Hidden Figures</strong>” offers a unique plot, artistic shots of shadows on walls, a killer soundtrack (thanks, Pharell Williams), and an unnecessary heterosexual romance, mixed in with hints of white savior complex.
                                    </div>
                                    <div class="margin-b-20">
                                        Like in life, though, if you ignore everything else that’s happening and focus on the smart, hardworking women, it’s pretty cool.
                                    </div>
                                    <p><span class="fweight-700 color-link">Isabel Drukker</span>, Campus Times</p>
									<a class="link" href="http://www.campustimes.org/2017/01/31/hidden-figures-arise-in-period-piece/">Read More</a>
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
		</div>
        <!-- End ReViews -->
		
		<!-- Work -->
        <div class="overflow-h">
            <div class="content-md container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Advertise with Us</h2>
                        <p>Advertising with URCG is an extremely effective way to advertise your group or event. A wide variety of students attend our film screenings, meaning your advertisement will reach students all over campus. Advertisements can be in the form of still slides or video trailers.<br><a href="contact">Learn More</a></p>
                    </div>
                </div>
                <!--// end row -->

                <!-- Masonry Grid -->
                <div class="masonry-grid">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                        <!-- Work -->
                        <div class="work">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/800x400/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">FREE MOVIES</h3>
                                <p class="color-white margin-b-0">Every Friday!</p>
                            </div>
                            <a class="content-wrapper-link" href=""></a>
                        </div>
                        <!-- End Work -->
						
						
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">New Releases</h3>
                                <p class="color-white margin-b-0">We show them as quick as we can</p>
                            </div>
                            <a class="content-wrapper-link" href=""></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Western! Horror! Action!</h3>
                                <p class="color-white margin-b-0">Comedy! Romance! Thriller!</p>
                            </div>
                            <a class="content-wrapper-link" href=""></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/02.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Documentary</h3>
                                <p class="color-white margin-b-0"> Cosponsor with us to bring Documentaries to Campus</p>
                            </div>
                            <a class="content-wrapper-link" href=""></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/03.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Film</h3>
                                <p class="color-white margin-b-0">Movie, motion picture, theatrical film, or photoplay</p>
                            </div>
                            <a class="content-wrapper-link" href=""></a>
                        </div>
                        <!-- End Work -->
                    </div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <!-- End Work -->
		

        <!-- Team -->
        <div class="bg-color-sky-light">
            <div class="content-md container">
                <div class="row margin-b-40">
                    <div class="col-sm-4">
                        <h2>Join the Team</h2>
                        <p>UR Cinema Group has been a staple of the University of Rochester's community since 1970. The club's purpose is to publicly show movies from many genres varying from blockbusters to independent films.</p>
						<p><a href="https://www.facebook.com/groups/300674693627912/">Facebook Group</a></p>
					</div>
					
					<div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="img/770x860/02.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a href="eboard#TM">Theater Managers</a> <span class="text-uppercase margin-l-20">URCG</span></h4>
                        <p>A Theater Manager is the person in charge of a movie showing. They show up 30 to 20 mins before the movie and make sure everything is setup correctly.</p>
                        <a class="link" href="about">Read More</a>
                    </div>
					
					<div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="img/770x860/03.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a href="about">Members</a> <span class="text-uppercase margin-l-20">URCG</span></h4>
                        <p>Members get special benefits including full size movie poster at the end of the semester, free or discounted tickets, can vote in the elections and other perks.</p>
                        <a class="link" href="about">Read More</a>
                    </div>
                
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Team -->
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