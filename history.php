<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <?php include "inc/head-info.inc"; ?>

        <!-- PAGE LEVEL PLUGIN STYLES -->
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
	<?php $selected = 'history'; include "inc/header.inc"; ?>

        <!--========== PAGE LAYOUT ==========-->
		
		<!-- Old Site -->
		<div class = "bg-color-sky-light">
        <div class="content-sm container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About the URCG Website</h2>
                    <p>The original URCG website was designed by former URCG President Nate McBean in 2005. Some functions of the website died along the way, and the style just grew out of style. That website was then updated to the 2016-2017 version, designed by 2015-2016 URCG President Shane O'Neil. The current website is completely new created by Charlotte Wright, 2017-2018 President.</p>
                </div>
				<div class="col-md-6">
				<div class="row">
					<div class="col-xs-12 margin-b-10">
					<!-- Work -->
                        <div class="work">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/other/oldsite01.png" alt="Old Website">
                            </div>
							<a class="content-wrapper-link" href="https://www.facebook.com/URCinema">
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Original URCG Website</h3>
								<p class="color-white margin-b-0">The PHP and MySQL-based site created by Nate</p>
                            </div>
                            </a>
                        </div>
					<!-- End Work -->
					</div>
					<div class="col-xs-12 margin-b-10">
					<!-- Work -->
                        <div class="work">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/other/oldsite02.png" alt="Old Site">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">2016-2017 Website</h3>
                                <p class="color-white margin-b-0">This new site was born with the help of Bootstrap and some creativity!</p>
                            </div>
                        </div>
					<!-- End Work -->
					</div>
				</div>
				</div>
            </div>
            <!--// end row -->
        </div>
		</div>
        <!-- Old Site -->
		
		<div class="content-sm container">
			<div class="row">
				<div class="col-xs-8">
				<img class="full-width img-responsive" src="img/other/site01.png" alt="Site">
				</div>
				<div class="col-xs-4">
				Here is the 2017-2018 Website. It is a simple version of the old site using bootstrap and a Acidus Template.
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