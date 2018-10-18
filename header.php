<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-headervtwo tg-haslayout">
			<div class="tg-topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="tg-addnav">
								<li>
									<a href="contact.php">
										<i class="icon-envelope"></i>
										<em>Contact</em>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);">
										<i class="icon-question-circle"></i>
										<em>Help</em>
									</a>
								</li>
							</ul>
							<div class="tg-userlogin">
								<figure>
									<a href="#">
									</a>
								</figure>
								<?php if(isset($_SESSION['user_id'])): ?>
								<a href="my_profile.php"><span>Welcome</span></a>
								<a href="#"><span>Log Out</span></a>
<?php else: ?>
<a href="signin.php"><span>Sign In</span></a>

<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-middlecontainer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<strong class="tg-logo"><a href="index.php"><img src="images/logo.png" alt="company name here"></a></strong>
							<div class="tg-searchbox">
								<form action="search.php" method="post" name="form" class="tg-formtheme tg-formsearch">
									<fieldset>
										<input type="text"class="typeahead form-control" placeholder="Search by title, author, keyword">
										<button type="submit" class="tg-btn">Search</button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-navigationarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-navigationholder">
								<nav id="tg-nav" class="tg-nav">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
										<ul><li class="menu-item-has-children">
											<a href="javascript:void(0);">All Categories</a>
											<div class="mega-menu">
												<ul class="tg-themetabnav" role="tablist">
													<li role="presentation">
														<?php getcategoriesmenu("blog_categories"); ?>
													</li>
												</ul>
											</li>
										<li>
											<a href="index.php">Home</a>
										</li>
										<li>
											<a href="about.php">About Author</a>
										</li>
										<li><a href="contact.php">Contact Author</a></li>
										<li>
											<a href="#">Articles</a>
										</li>
									</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->