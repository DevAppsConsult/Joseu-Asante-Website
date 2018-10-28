
                <div class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-7">
                                <div class="header-nav">
                                    <ul>
                                        <li>
	                                        <span class="headre-weather">
	                                        	<i class="fa fa-calendar-check-o"></i>&nbsp; 	                                        	
	                                        	<?php echo date("l, M d"); ?>
	                                        </span>
	                                    </li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="about-me.php">about</a></li>
                                        <li><a href="plans.php">Subscribe now!</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-5">
                                <ul class="top-socia-share">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    </li>
                                        <?php if(isset($_SESSION) && isset($_SESSION['user_id'])): ?>
                                        <li>

                                            <a href="my_profile.php">My Account</a>
                                        </li>
                                        <li>
                                            <div class="weather-top">
                                                <i class="fa fa-sign-out"></i>
                                                 <a href="logout.php">Logout</a>
                                            </div>
                                        </li> 
                                        <?php else: ?>
                                        <li>
                                           
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#user-modal"> Login / Register</a>
                                        </li>

                                            <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.End of top header -->
                <div class="logo-wrapper">
                    <div class="container">
                        <div class="header-logo">
                            <a href="index.php" class="logo-img">
                                <img src="assets/img/logo3.png" alt="">
                            </a>
                        </div>
                        <div class="header-soc-icon"><i class="icons ti-menu"></i></div>
                        <div class="searchbox-icon"><i id="btn-search1" class="icons ti-search"></i></div>
                    </div>
                </div>
                <!-- /.End of logo section -->
                <nav class="navbar navbar-default menu-bar navbar-sticky navbar-mobile bootsnav">
                    <div class="container">
                        <div class="attr-nav">
                            <ul>
                                <li><a href="javascript:void(0)" data-toggle="modal" data-target="#user-modal"><i class="fa fa-user"></i></a></li>
                                <li class="side-menu"><a href="javascript:void(0)"><i class="fa fa-bars"></i></a></li>
                                <li id="btn-search2"><a href="javascript:void(0)"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Atribute Navigation -->
                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.php"><img src="assets/img/logo3.png" class="logo" alt=""></a>
                        </div>
                        <!-- End Header Navigation -->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-center" data-in="navFadeInDown" data-out="navFadeOutUp">
                                <li class="">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">Categories</a>
                                    <ul class="dropdown-menu">
                                       <?php getcategoriesmenu("blog_categories"); ?>
                                       
                                    </ul>
                                </li>
                                <li class="dropdown megamenu-fw megamenu-video">
                                    <a href="about-me.php">About Us</a>
                                </li>
                                <!--/.End of video menu
                                <li>
                                    <a href="authors.php">The Authors</a>
                                </li>
                                <!-- /.End of tab category menu -->
                                <li>
                                    <a href="posts.php">Articles</a>
                                </li>
                                <!-- /.End of category menu -->
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </nav>
                <div class="clearfix"></div>
                <!-- /.End of navigation -->
                <div class="search">
                    <button id="btn-search-close" class="btn btn--search-close" aria-label="Close search form"> <i class="ti-close"></i></button>
                    <form class="search_form" action="search.php" name="form" method="post">
                        <input class="search__input" name="search" type="search" placeholder="Search and hit enter..."/>
                        <span class="search__info">Hit enter to search or ESC to close</span>
                    </form>
                    <div class="search__related">
                        <div class="search__suggestion">
                            <h3>May We Suggest?</h3>
                            <p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes #yesyes #aliens #green</p>
                        </div>
                        <div class="search__suggestion">
                            <h3>Is It This?</h3>
                            <p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny #catgif #broken #lost</p>
                        </div>
                        <div class="search__suggestion">
                            <h3>Needle, Where Art Thou?</h3>
                            <p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes #aliens #green #drone</p>
                        </div>
                    </div>
                </div>