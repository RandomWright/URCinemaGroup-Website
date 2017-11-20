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
		
		
	<center><h1>URCG eBoard</h1></center>
    <div class="container">

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

      <div class="col-md-12">
        <h2><? echo($firstyear);?>-<? echo($secondyear);?> Executive Board</h2>
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
                <li><strong>Secretary/Webmaster: </strong>$secretary</li>\n
                <li><strong>Faculty Advisor:</strong> $advisor</li>\n
              </ul>\n<!--<p>Executive Board information was last edited on $timestamp.</p>-->");
            }
          ?>
        </div>
      </div>
    </div>
	
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

              echo("value=\"eboard?years=".$row['years']."\">".substr($row['years'],0,4)."-".substr($row['years'],4,4));
            }
            if($found==0) echo("<option selected value=\"eboard\"> Select valid years");
          echo("</select></form>"); 
        echo("</p>");
      ?>
	  
	</div>
	 
	<!-- URCG -->
	<div class = "bg-color-sky-light">
        <div class="content-sm container">
            <div class="row margin-b-30">
                <div class="text-center">
                    <h3>URCG meets every Sunday at 2pm in Wilson Commons 121</h3>
				</div>
					<p>Membership can be acquired by any undergraduate student enrolled at the University of Rochester. Membership as a student consists of the ability to vote (such as in elections), free admission to any regularly scheduled movie, and eligiblity to become a Theater Manager and/or executive board member.</p>
					<p>Anyone who is not a student at the University may join as associate members, which lack the ability to vote and the eligibility for a position as a Theater Manager and on the executive board.</p>
            </div>
            <!--// end row -->
        </div>
	</div>
    <!-- End URCG -->
	
	
	<div class="content-sm container" id="TM">
	<div class="row">
			<div class="col-md-5 margin-b-40">
			<h2>Theater Managers</h2>
			<table>
			<tr>
				<td width="200"><h3><u>Name</u></h3></td>
				<td width="200"><h3><u>Email</u></h3></td>
			</tr>

		<?
          include_once("../connect.php");
          $query = " SELECT tm_id, name, phone, email FROM movies_tm WHERE active > 0 ORDER BY name ";
          $result = mysql_query($query) or die('Error, query failed!'.mysql_error());
          while($row = mysql_fetch_array($result, MYSQL_NUM)) {
            echo("<tr class=\"tableNorm\"  onmouseover=\"this.className='tableHover'\" onmouseout=\"this.className='tableNorm'\">".
              "<td><strong>".$row[1]."</strong></td>".
              "<td>".$row[3]."</td>".
              "</tr>"
            );
          }
        ?>
		</table
		<br>
		</div>
	  
		<div class="col-sm-3 sm-margin-b-50">
            <div class="bg-color-white margin-b-20">
                <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                    <img class="img-responsive" src="img/770x860/02.jpg" alt="Team Image">
                </div>
            </div>
		</div>
		<div class="col-sm-4 sm-margin-b-50">
            <h4><a href="#TM">Theater Managers</a> <span class="text-uppercase margin-l-20">URCG</span></h4>
            <p>A Theater Manager is the person in charge of a movie showing. They show up 30 to 20 mins before the movie and make sure everything is setup correctly.</p>
            <a class="link" href="about">Read More</a>
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