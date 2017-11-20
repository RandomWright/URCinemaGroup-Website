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

        <!--========== HEADER ==========-->
        <header class="header">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="navbar-logo">
                            <a class="navbar-logo-wrap" href="index.html">
                                <img class="navbar-logo-img" src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <!-- Home -->
                                <li class="nav-item">
                                    <a class="nav-item-child" href="index.html">
                                        Home
                                    </a>
                                </li>
                                <!-- End Home -->

                                <!-- About -->
                                <li class="nav-item">
                                    <a class="nav-item-child" href="about.html">
                                        About
                                    </a>
                                </li>
                                <!-- End About -->

                                <!-- Films -->
                                <li class="nav-item">
                                    <a class="nav-item-child" href="films.html">
                                        Films
                                    </a>
                                </li>
                                <!-- End Films -->
								
								<!-- Co -->
                                <li class="nav-item">
                                    <a class="nav-item-child" href="cospon.html">
                                        Cosponsorships
                                    </a>
                                </li>
                                <!-- End Co -->

                                <!-- Contact -->
                                <li class="nav-item">
                                    <a class="nav-item-child" href="contact.html">
                                        Contact
                                    </a>
                                </li>
                                <!-- End Contact -->
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PAGE LAYOUT ==========-->
		
		
	<center><h1>URCG Membership</h1></center>
    <div class="container">
      <center><h3><font color=#ff0000>URCG meets every Sunday at 2pm in Wilson Commons 122. All are welcome!</font></h3></center>
      <p>Membership can be acquired by any undergraduate student enrolled at the University of Rochester. Membership as a student consists of the ability to vote (such as in elections), free admission to any regularly scheduled movie, and eligiblity to become a Theater Manager and/or executive board member.</p>
      <p>Anyone who is not a student at the University may join as associate members, which lack the ability to vote and the eligibility for a position as a Theater Manager and on the executive board.</p>
      <p>To gain membership, 10 points are required. To continue as a member, a total of 5 points are needed each semester. Points may be earned by working at the movies (selling or taking tickets, etc.), by distributing publicity materials, and by completing other special tasks. For working one showing in a movie night, 1 point will be given. For working two or three showings in a movie night, 2 points may be given. By putting up one area's worth of posters, 1 point will be given.</p>
      <p>After the required points per semester/membership are gained, the member is now eligible for guest passes, which grant one free admission to any regular programming movies. Members will receive one free guest pass for every point earned.</p>
      <p>Once membership is gained, any member is eligible to become a Theater Manager by vote. Once voted in, that member must go through two sessions of managing with another Theater Manager, as well as two tests with either the Personnel Director or the Chairperson before that member can manage by him/herself.</p>

      <?
        $years = $_GET['years'];
        $years = ereg_replace("[^0-9]", "", $years);
        if($years == "")
        {
          if(date("m")>4) { $years = date("Y").(date("Y")+1); }
          else{ $years = (date("Y")-1).date("Y");}
        }

        include_once("connect.php");

        $query = "SELECT years, timestamp, president, personnel, business, programming, alternative, publicity, trailer, secretary, advisor FROM execboard WHERE execboard.years=$years";
        $request = mysql_query($query);

        if($request)
        {
          $row = mysql_fetch_assoc($request);

          if($row['years']!="")
          {
            $president = $row['president'];
            $personnel = $row['personnel'];
            $business = $row['business'];
            $programming =$row['programming'];
            $alternative = $row['alternative'];
            $publicity = $row['publicity'];
            $trailer = $row['trailer'];
            $secretary = $row['secretary'];
            $advisor = $row['advisor'];
            $timestamp = $row['timestamp'];

            $nosugar = 0;
          }
          else
          {
            $nosugar = 1;
          }
        }
        $firstyear = substr($years,0,4);
        $secondyear = substr($years,4,4);
      ?>

      <div class="col-md-5">
        <h1><? echo($firstyear);?>-<? echo($secondyear);?> Executive Board</h1>
        <div class="row">
          <?
            if($president=="")
            {
              echo("<p>No Executive Board information found for these years.</p>");
            }
            else
            {
              echo("
              <ul>\n
                <li><strong>President:</strong> $president</li>\n
                <li><strong>Personnel Director:</strong> $personnel</li>\n
                <li><strong>Business Manager:</strong> $business</li>\n
                <li><strong>Programming Director:</strong> $programming</li>\n
                <li><strong>Alternative Programming:</strong> $alternative</li>\n
                <li><strong>Publicity Manager:</strong> $publicity</li>\n
                <li><strong>Trailer Editior:</strong> $trailer</li>\n
                <li><strong>Secretary: </strong>$secretary</li>\n
                <li><strong>Faculty Advisor:</strong> $advisor</li>\n
              </ul>\n<p>Executive Board information was last edited on $timestamp.</p>");
            }
          ?>
        </div>
      </div>
      <div class="col-md-2">
      </div>
      <div class="col-md-5">
        <h1>Theater Managers</h1>
        <div class="row">
          <ul>
            <?
              include_once("connect.php");
              $query = " SELECT name FROM movies_tm WHERE active > 0 ORDER BY name ";

              $result = mysql_query($query) or die('<li>Could not find TMs in database!'.mysql_error()."</li>");
              while($row = mysql_fetch_array($result, MYSQL_NUM)) {
                if($row[0]!="None"){echo("<li>".$row[0]."</li>");}
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <?
        echo("<form name=\"jumpopt\">
        <p>Want to see a past Executive Board? Select a year here:

          <select name=\"myjumpbox\" size=\"1\" OnChange=\"location.href=jumpopt.myjumpbox.options[selectedIndex].value\">");
		
          $query = "SELECT years FROM execboard ORDER BY years DESC";
          $result = mysql_query($query) or die('Error, insert query failed!'.mysql_error());
          $found = 0;
          while($row = mysql_fetch_array($result))
            {
              echo("<option ");
              if($row['years']==$years) { echo(" selected "); $found=1;}

              echo("value=\"club.php?years=".$row['years']."\">".substr($row['years'],0,4)."-".substr($row['years'],4,4));
            }
            if($found==0) echo("<option selected value=\"club.php\"> Select valid years");
          echo("</select></form>"); 
        echo("</p>");
      ?>

      <h1>Legalese</h1>
      <p><a href="items/constitution.pdf" target="_blank">Constitution</a></p>
      <p><a href="items/bylaws.pdf" target="_blank">By Laws</a></p>
    </div>
	  

		
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="section-seperator">
                <div class="content container">
                    <div class="row">
                        <div class="col-xs-3 sm-margin-b-20">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="index.html">Home</a></li>
                                <li class="footer-list-item"><a href="about.html">About</a></li>
                                <li class="footer-list-item"><a href="films.html">Films</a></li>
                                <li class="footer-list-item"><a href="contact.html">Contact</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-xs-3 sm-margin-b-20">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="https://twitter.com/urcg">Twitter</a></li>
                                <li class="footer-list-item"><a href="https://www.facebook.com/URCinema/">Facebook</a></li>
                                <li class="footer-list-item"><a href="https://www.instagram.com/urcinemagroup/">Instagram</a></li>
                                <li class="footer-list-item"><a href="https://ccc.rochester.edu/organization/urcg">CCC</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
						<div class="col-xs-3 sm-margin-b-20">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
								<li class="footer-list-item"><a href="cospon.html">Cosponsorships</a></li>
                                <li class="footer-list-item"><a href="http://sa.rochester.edu/sa/">URCG is SA Funded</a></li>
								<li class="footer-list-item"><a href="http://demo.themewagon.com/preview/acidus-free-bootstrap-agency-business-portfolio-personal-website-theme">Acidus Theme</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->
        </footer>
        <!--========== END FOOTER ==========-->

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