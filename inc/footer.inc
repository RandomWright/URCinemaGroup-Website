        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="section-seperator">
                <div class="content container">
                    <div class="row">
                        <div class="col-xs-3 sm-margin-b-20">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="index">Home</a></li>
                                <li class="footer-list-item"><a href="about">About</a></li>
                                <li class="footer-list-item"><a href="films">Films</a></li>
                                <li class="footer-list-item"><a href="contact">Contact</a></li>
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
								<li class="footer-list-item"><a href="cospon">Cosponsorships</a></li>
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
		
	<? 
	if (substr($_SERVER['REQUEST_URI'],-10)=='google.php') {
		echo "Stop it.";
	} else {
	?>

<script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
  var pageTracker = _gat._getTracker("UA-51752-7");
  pageTracker._initData();
  pageTracker._trackPageview();
</script>
<? } ?>