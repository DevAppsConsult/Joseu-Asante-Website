<?php 
require("libs/fetch_data.php");
//require('libs/validate.php')    
?>
<?php //code to get the item using its id
include("database/conn.php");//database config file
$id=$_REQUEST['id']; $query="SELECT * from blogs where id='".$id."'"; $result=mysqli_query($GLOBALS["___mysqli_ston"], $query) or die(((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true)));
$row = mysqli_fetch_assoc($result);
//pageview count query
$page=$row['title'];
$count="SELECT * FROM page_hits WHERE page='".$page."'";$feedback=mysqli_query($GLOBALS["___mysqli_ston"], $count) or die(((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true)));
$roo=mysqli_fetch_assoc($feedback);?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $row['title']; ?> | <?php getwebname("titles");?></title>
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
    <!--update database on page views-->
    <?php  require_once('adminstats/conn.php');
    require_once('counter.php');
    $pn=updateCounter(''.$row['title'].''); // Updates page hits
    echo $pn;
    updateInfo(); // Updates hit info?>
                <div class="clearfix"></div>
                <!-- /.End of navigation -->
                <div class="parallax page_header"  data-parallax-bg-image="assets/img/author-header.jpg" data-parallax-direction="left">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3><?php echo $row['title']; ?></h3>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#"><?php echo $row['title']; ?></a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.End of page header -->
                <!-- /.End of banner content -->
                <div class="page-content">
                    <div class="container">
                        <div class="row">
                            <main class="col-sm-8 col-md-9 content p_r_40">
                                <div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="classic_post">
                                                <aside class="share_article">
                                                    <a href="#" class="boxed_icon facebook" data-share-url="http://mightymedia.nl" data-share-network="facebook" data-share-text="Share this awesome link on Facebook" data-share-title="Facebook Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-facebook"></i><span>28</span></a>
                                                    <a href="#" class="boxed_icon twitter" data-share-url="http://mightymedia.nl" data-share-network="twitter" data-share-text="Share this awesome link on Twitter" data-share-title="Twitter Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-twitter"></i></a>
                                                    <a href="#" class="boxed_icon google-plus" data-share-url="http://mightymedia.nl" data-share-network="googleplus" data-share-text="Share this awesome link on Google+" data-share-title="Google+ Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-google-plus"></i></a>
                                                    <a href="#" class="boxed_icon pinterest" data-share-url="http://mightymedia.nl" data-share-network="pinterest" data-share-text="Share this awesome link on Pinterest" data-share-title="Pinterest Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-pinterest-p"></i></a>
                                                    <a href="#" class="boxed_icon comment"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="14" height="14" viewBox="0 0 14 14" enable-background="new 0 0 14 14" xml:space="preserve"><path d="M3.6 14c0 0-0.1 0-0.1 0 -0.1-0.1-0.2-0.2-0.2-0.3v-2.7h-2.9C0.2 11 0 10.8 0 10.6V0.4C0 0.2 0.2 0 0.4 0h13.3C13.8 0 14 0.2 14 0.4v10.2c0 0.2-0.2 0.4-0.4 0.4H6.9L3.9 13.9C3.8 14 3.7 14 3.6 14zM0.7 10.2h2.9c0.2 0 0.4 0.2 0.4 0.4v2.2l2.5-2.4c0.1-0.1 0.2-0.1 0.2-0.1h6.6v-9.5H0.7V10.2z"></path></svg><span>3</span></a>
                                                </aside>
                                                <figure>
                                                    <a href="#" class="classic_img">
                                                        <img src="blogadmin/images/<?php echo $row['photo']; ?>" class="img-responsive" alt="">
                                                    </a>
                                                    <figcaption>
                                                        <div class="post-header">
                                                            <div class="post-cat"><span>In</span> <a href="#"><?php echo $row['tags']; ?></a></div>
                                                            <h2 class="classic_post_title"><a href="#"><?php echo $row['title']; ?></a></h2>
                                                            <div class="entry-meta">
                                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><?php echo $row['date']; ?></span> 
                                                                <span class="comment-link"><a href="#"><i class="fa fa-user" aria-hidden="true"></i><?php echo $row['author']; ?></a></span>
                                                            </div>
                                                            <!-- /.Post meta -->
                                                        </div>
                                                        <div class="truncate"><p><?php echo $row['content']; ?></p></div>
                                                        <?php
                                                        if(!isset($_SESSION) || !isset($_SESSION['user_id']))
                                                        {
                                                            ?>
                                                                    <a href="#" onclick="alert('Login and subscribe to read this article')" class="btn link-btn">Subscribe & Read Full Story ⇾</a><!-- /.Post button -->
                                                            
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                                    <a href="<?php echo 'single.php?id'.$_GET['id'] ?>" class="btn link-btn">Subscribe & Read Full Story ⇾</a><!-- /.Post button -->

                                                            <?php
                                                        }
                                                        ?>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <!-- /.End of classic post -->
                                        </div>
                                    </div>
                                </div>
                            </main>
                             <?php include("aside.php"); ?>
                        </div>
                    </div>
                </div>
                <?php include("footer-banner.php"); ?>
            </div>
            <?php require "footer.php";?>
            <!-- /.End of footer -->
        </div>
        <!-- /.End of Sign up  Sing in -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
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
<?php include("libs/security_js.php");?>