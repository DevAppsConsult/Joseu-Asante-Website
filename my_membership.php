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
                                    <li class="active">Membership</li>
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
                                    <h4><span>Membership </span>Current Plan</h4>
                                    <p>Setup or review your membership plan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="error-desc">
                                   <form action="#">                            
                                                    <?php $myPlan = json_decode(file_get_contents(base_url().'public/user/plan/'.$_SESSION['user_id']),true); ?>                      
                                                  <div class="card">
                                                  <div class="media mt-0">
                                                        <div class="media-body">
                                                        <?php
                                                            if(isset($myPlan['success'])) :
                                                        ?>
                                                          <h4 class="media-heading"><a href="plans.html">Plan <strong><?php echo $myPlan['data']['plan']['name'] ?></strong></a></h4>
                                                                <?php 
                                                                    if($myPlan['data']['status'] == 'Expired')
                                                                    {
                                                                        ?>
                                                                              <p class="text-muted">Already Expired</p>                                                                               
                                                                        
                                                                        <?php
                                                                    }else{
                                                                ?>

                                                          <p class="text-muted">Expiring on <?php echo $myPlan['data']['expires'] ?></p> 
                                                                    <?php } ?>                                                                            
                                                        <?php
                                                            else:
                                                                ?>
                                                                    <h4 class="media-heading"><a href="plans.html"><strong>You are not any plan</strong></a></h4>
                                                                <?php
                                                            endif;
                                                        ?>
                                                        </div>
                                                      </div>
                                                  </div>
                                                      <?php
                                                            if(isset($myPlan['success'])) :
                                                                ?>
                                                            <a href="plans.php" class="btn btn-success btn-sm">Upgrade Plan</a>
                                                            <a href="plans.php" class="btn btn-success btn-sm">Renew Plan</a>
                                                        <?php else: ?>
                                                          <a href="plans.php" class="btn btn-success btn-sm">Subscribe Plan</a>
                                                        <?php endif; ?>
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
        <?php require "authentication.php";?>

    </body>

</html>