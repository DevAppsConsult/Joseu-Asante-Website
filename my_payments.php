<?php require "libs/fetch_data.php";?>
<?php require('libs/check_login.php') ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php getwebname("titles"); echo" | "; gettagline("titles");?></title>
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/animsition.min.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/themify-icons/themify-icons.css" rel="stylesheet">
        <link href="assets/css/bootsnav.css" rel="stylesheet">
        <link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="assets/owl-carousel/owl.theme.css" rel="stylesheet">
        <link href="assets/owl-carousel/owl.transitions.css" rel="stylesheet">
        <link href="assets/css/magnific-popup.css" rel="stylesheet">
        <link href="assets/css/fluidbox.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="main-content animsition">
            <div class="page-outer-wrap">
                <?php include("top-header.php"); ?>
                <div class="clearfix"></div>
                <!-- /.End of navigation -->
                <div class="parallax page_header"  data-parallax-bg-image="assets/img/author-header.jpg" data-parallax-direction="left">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>My Account Settings</h3>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Payments</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.End of page header -->
                <div class="page-content">
                    <div class="container">
                        <div class="row">
                            <?php require_once('libs/account_side.php') ?>
                            <main class="col-sm-8 col-md-9 content p_l_40">
                                
                                 
                        <div class="row">
                            <div class="col-md-7">
                                <div class="error-text">
                                    <h4>Payments Settings</h4>
                                    <p>Setup or review your membership plan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="error-desc">
                                                                <form action="#">
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
                    
                            </main>
                        </div>
                    </div>
                </div>
                <div class="newslatter">
                    <div class="container">
                        <h3>Sign Up for Our <em>Newsletter</em></h3>
                        <p>Subscribe now to get notified about exclusive offers<br> from The .... every week!</p>
                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your email address" name="q">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /. End of news latter -->
                <div class="insta-content">
                    <div class="insta-link"><a href="#" rel="me" target="_blank" class="">Follow Me!</a></div>
                    <div id="ri-grid" class="ri-grid ri-grid-size-2">
                        <img class="ri-loading-image" src="assets/img/loading.gif" alt=""/>
                        <ul>
                            <li><a href="#"><img src="assets/img/instagram/01.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/02.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/03.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/04.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/05.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/06.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/07.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/08.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/09.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/10.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/11.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/12.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/13.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/14.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/15.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/16.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/17.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/18.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/19.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="assets/img/instagram/20.jpg" alt=""/></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /. End of instagram -->
            </div>
            <?php require "footer.php";?>
            <!-- /.End of footer -->
        </div>
        <?php require "authentication.php";?>
        <!-- /.End of Sign up  Sing in -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/animsition.min.js"></script>
        <script src="assets/js/bootsnav.js"></script>
        <script src="assets/js/macy.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/ResizeSensor.min.js"></script>
        <script src="assets/js/theia-sticky-sidebar.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/modernizr.custom.js"></script>
        <script src="assets/js/jquery.gridrotator.min.js"></script>
        <script src="assets/js/parallax-background.min.js"></script>
        <script src="assets/js/jquery.simpleSocialShare.min.js"></script>
        <script src="assets/js/jquery.fluidbox.min.js"></script>
        <script src="assets/js/retina.min.js"></script>
        <script src="assets/js/jquery.shuffle.min.js"></script>
        <script src="assets/js/readingTime.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>

</html>