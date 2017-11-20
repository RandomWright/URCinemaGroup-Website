
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
                            <a class="navbar-logo-wrap" href="index">
                                <img class="navbar-logo-img" src="img/logo.png" alt="URCG Logo">
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
                                    <a class="nav-item-child <?php if ($selected == 'index') print "active"; ?>" href="index">
                                        Home
                                    </a>
                                </li>
                                <!-- End Home -->

                                <!-- About -->
                                <li class="nav-item">
                                    <a class="nav-item-child <?php if ($selected == 'about') print "active"; ?>" href="about">
                                        About
                                    </a>
                                </li>
                                <!-- End About -->

                                <!-- Films -->
                                <li class="nav-item">
                                    <a class="nav-item-child <?php if ($selected == 'films') print "active"; ?>" href="films">
                                        Films
                                    </a>
                                </li>
                                <!-- End Films -->
								
								<!-- Co -->
                                <li class="nav-item">
                                    <a class="nav-item-child <?php if ($selected == 'cospon') print "active"; ?>" href="cospon">
                                        Cosponsorships
                                    </a>
                                </li>
                                <!-- End Co -->

                                <!-- Contact -->
                                <li class="nav-item">
                                    <a class="nav-item-child <?php if ($selected == 'contact') print "active"; ?>" href="contact">
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