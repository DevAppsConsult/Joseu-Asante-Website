<?php require "libs/fetch_data.php";?>
<?php require 'libs/check_login.php'; ?>

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
    <body class="null">
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
                                    <h4>Payments History</h4>
                                    <p>Review your payment history.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="error-desc">
            <form action="#">
              <div class="form-group">
               
              </div>
              <h3 class="subheadline">All &amp; Payment History</h3>
              <ul class="list-group no-border list-unstyled v2">
                  <?php 
                  $history = json_decode(file_get_contents(base_url().'public/user/payments/'.$_SESSION['user_id']),true); 
                  $data = $history['data'];
                  foreach($data as $hist):
                    if($hist['status'] == "Pending"){
                   ?>
                <li><i class="fa fa-spinner fa-spin "></i> <?php echo $hist['amount']." GhC On ".$hist['created_at']." ".$hist['status'];  ?> </li><br>
                    <?php }elseif($hist['status'] == "Completed"){
                        ?>
                <li><i class="fa fa-check "></i> <?php echo $hist['amount']." GhC On ".$hist['created_at']." ".$hist['status'];  ?></li><br>                        
                        <?php
                    }else{
                        ?>
                <li><i class="fa fa-times "></i> <?php echo $hist['amount']." GhC On ".$hist['created_at']." ".$hist['status'];  ?></li><br>                        
                        
                        <?php
                    } ?>
                  <?php endforeach; ?>
              </ul>
              <h3 class="subheadline">Add Credit Card</h3>
              <div class="card">
             
              <div class="row">
              <div class="col-md-8">
             <div class="row">
            
             <div class="col-md-5">
             <div class="form-group">
             
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
                <?php include("footer-banner.php"); ?>
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