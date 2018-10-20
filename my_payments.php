<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title><?php getwebname("titles"); echo" | "; gettagline("titles");?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color-purple.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body oncontextmenu="return false">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
  <?php include("header.php");?>
		<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
			
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					News Grid Start
			*************************************-->
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div id="tg-twocolumns" class="tg-twocolumns">
							<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
								<div id="tg-content" class="tg-content">
									<div class="tg-products">
										<div class="tg-sectionhead">
											<h2><span>Settings </span>Payments Settings</h2>
										</div>
										<div class="tg-productgrid">
											<div class="col-xs-12 col-sm-8 col-md-9 col-lg-8"><form action="http://uilove.in/realestate/listo/preview/index.php">
              <div class="form-group">
                <div class="checkbox">
                  <input type="checkbox" id="private_message" checked="">
                  <label for="private_message">Allow auto debit from default payment source on renewal</label>
                </div>
              </div>
              <h3 class="subheadline">Credit Cards &amp; Gateways</h3>
              <ul class="list-group no-border list-unstyled v2">
                <li><i class="fa fa-fw fa-cc-paypal icon"></i> Paypal <a href="#" class="btn btn-sm set-default">Set as default</a></li><br>
                <li><i class="fa fa-fw fa-cc-stripe icon"></i> Stripe <a href="#" class="btn btn-link set-default">Set as default</a></li><br>
                <li><i class="fa fa-fw fa-credit-card icon hidden-xs"></i> <span class="card-number">**** **** **** 2132</span><a class="btn btn-primary" style="margin-left:20px"><i class="fa fa-trash-o"></i></a> <span class="default">Default</span></li><br>
                <li><i class="fa fa-fw fa-credit-card icon hidden-xs"></i> <span class="card-number">**** **** **** 5643</span><a class="btn btn-primary" style="margin-left:20px"><span><i class="fa fa-trash-o"></i></span></a> <a href="#" class="btn btn-link set-default">Set as default</a></li><br>
                <li><i class="fa fa-fw fa-credit-card icon hidden-xs"></i> <span class="card-number">**** **** **** 9843</span><a class="btn btn-primary" style="margin-left:20px"><i class="fa fa-trash-o"></i></a> <a href="#" class="btn btn-link set-default">Set as default</a></li>
              </ul>
              <h3 class="subheadline">Add Credit Card</h3>
              <div class="card">
              <div class="form-group">
              <label>Card Number</label>
                <div class="input-group input-group-lg"> <span class="input-group-addon"><i class="icon fa fa-fw fa-credit-card-alt"></i></span>
                  <input type="text" class="form-control form-control-lg" id="cc_number" value="">
                </div>
              </div>
              <div class="row">
              <div class="col-md-8">
             <label>Expiration Date (Month/Year)</label>
             <div class="row">
             <div class="col-md-7">
             <div class="form-group">
             <select class="form-control form-control-lg ui-select">
             <option value="jan">January</option>
             <option value="feb">February</option>
             <option value="mar">March</option>
             <option value="apr">April</option>
             <option value="may">May</option>
             <option value="jun">June</option>
             <option value="jul">July</option>
             <option value="aug">August</option>
             <option value="sep">September</option>
             <option value="oct">October</option>
             <option value="nov">November</option>
             <option value="dec">December</option>
             </select>
             </div>
             </div>
             <div class="col-md-5">
             <div class="form-group">
             <select class="form-control form-control-lg ui-select">
             <option value="2015">2015</option>
             <option value="2016">2016</option>
             <option value="2017">2017</option>
             <option value="2018">2018</option>
             <option value="2019">2019</option>
             <option value="2020">2020</option>
             <option value="2021">2021</option>
             <option value="2022">2022</option>
             <option value="2023">2023</option>
             <option value="2024">2024</option>
             <option value="2025">2025</option>
             <option value="2026">2026</option>
             <option value="2027">2027</option>
             <option value="2028">2028</option>
             <option value="2029">2029</option>
             <option value="2030">2030</option>
             </select>
             </div>
             </div>
             </div>
             
             
              
              </div>
              <div class="col-md-4">
              <div class="form-group">
              <label>Security Code</label>
              <input type="text" class="form-control form-control-lg">
              </div>
              </div>
              </div>
              <p>You agree to authorize the use of your credit card for this deposit and future payments.</p>
              <button class="btn tg-btn" id="add_card">Add Card</button>
              </div>
              <hr>
              <div class="form-group action">
                <button type="submit" class="btn btn-sm tg-btn tg-active">Save Settings</button>
              </div>
            </form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
								<?php require_once('libs/account_side.php') ?>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
								<aside id="tg-sidebar" class="tg-sidebar">
									<div class="tg-widget tg-catagories">
										<div class="tg-widgettitle">
											<h3>Manqge Articles</h3>
										</div>
										<div class="tg-widgetcontent">
											<ul>
												<li><a href="javascript:void(0);"><span>Browse Articles</a></li>
												<li><a href="javascript:void(0);"><span>Bookmarked Articles</a></li>
												<li><a href="javascript:void(0);"><span>My Articles</a></li>
											</ul>
										</div>
									</div>
								</aside>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					News Grid End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
          <?php include("footer.php");?>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.vide.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/main.js"></script>
</body>

</html>