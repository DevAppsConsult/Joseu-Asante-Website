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
        <title><?php echo $row['title']; ?>|<?php getwebname("titles");?></title>
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
    <!--//header-->
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
                                <!--<ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active"><?php echo $row['title']; ?></li>
                                </ol>-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.End of page header -->
                <div class="page-content">
                    <div class="container">
                        <div class="row">
                            <main class="col-sm-8 col-md-9 content p_r_40">
                                <div class="details-body">
                                    <div class="post_details stickydetails">
                                        <header class="details-header">
                                            <div class="post-cat"><a href="#"><?php echo $row['tags']; ?></a></div>
                                            <h2><?php echo $row['title']; ?></h2>
                                            <div class="element-block">
                                                <div class="entry-meta">
                                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><?php echo $row['date']; ?></span> 
                                                    <span class="comment-link"><a href="#"><i class="fa fa-user" aria-hidden="true"></i><?php echo $row['author']; ?></a></span>
                                                </div>
                                                <div class="reading-time"><span class="eta"></span> (<span class="words"></span> words)</div>
                                            </div>
                                        </header>
                                        <figure>
                                            <img src="blogadmin/images/<?php echo $row['photo']; ?>" width="825px" height="630px" alt="" class="aligncenter img-responsive">
                                        </figure>
                                        <h3><?php echo $row['title']; ?></h3>
                                        <p><?php echo $row['content']; ?></p>
                                    </div>
                                    <!-- /.End of post details -->
                                    <div class="stickyshare">
                                        <aside class="share_article">
                                            <a href="#" class="boxed_icon facebook" data-share-url="http://mightymedia.nl" data-share-network="facebook" data-share-text="Share this awesome link on Facebook" data-share-title="Facebook Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-facebook"></i><span>28</span></a>
                                            <a href="#" class="boxed_icon twitter" data-share-url="http://mightymedia.nl" data-share-network="twitter" data-share-text="Share this awesome link on Twitter" data-share-title="Twitter Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="boxed_icon google-plus" data-share-url="http://mightymedia.nl" data-share-network="googleplus" data-share-text="Share this awesome link on Google+" data-share-title="Google+ Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="boxed_icon pinterest" data-share-url="http://mightymedia.nl" data-share-network="pinterest" data-share-text="Share this awesome link on Pinterest" data-share-title="Pinterest Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-pinterest-p"></i></a>
                                            <a href="#" class="boxed_icon comment"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="14" height="14" viewBox="0 0 14 14" enable-background="new 0 0 14 14" xml:space="preserve"><path d="M3.6 14c0 0-0.1 0-0.1 0 -0.1-0.1-0.2-0.2-0.2-0.3v-2.7h-2.9C0.2 11 0 10.8 0 10.6V0.4C0 0.2 0.2 0 0.4 0h13.3C13.8 0 14 0.2 14 0.4v10.2c0 0.2-0.2 0.4-0.4 0.4H6.9L3.9 13.9C3.8 14 3.7 14 3.6 14zM0.7 10.2h2.9c0.2 0 0.4 0.2 0.4 0.4v2.2l2.5-2.4c0.1-0.1 0.2-0.1 0.2-0.1h6.6v-9.5H0.7V10.2z"></path></svg><span>3</span></a>
                                        </aside>
                                    </div>
                                    <!-- /End of share icon -->
                                </div>
                                <!-- /.End of details body -->
                                <aside class="about-author">
                                    <h3>About The Author</h3>
                                    <div class="author-bio">
                                        <div class="author-img">
                                            <a href="#"><img alt="Johnny Doe" src="assets/img/about-avatar.jpg" class="avatar img-responsive"></a>												
                                        </div>
                                        <!-- /. Author-img -->
                                        <div class="author-info">
                                            <h4 class="author-name"><?php echo $row['author']; ?></h4>
                                            <p><?php echo $row['author']; ?></p>
                                            <p>
                                                <a class="social-link facebook" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="social-link twitter" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="social-link vine" href="#"><i class="fa fa-vine"></i></a>
                                                <a class="social-link dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                                <a class="social-link instagram" href="#"><i class="fa fa-instagram"></i></a>
                                            </p>
                                        </div>
                                        <!-- /. Author-info -->
                                    </div>
                                    <!-- /.End of author bio -->
                                </aside>
                                <!-- /.End of about author -->
                                <div class="post_related">
                                    <h3 class="related_post_title">You Might Also Like...</h3>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <article class="post_article item_related">
                                                <a class="post_img" href="#">
                                                    <figure>
                                                        <img class="img-responsive" src="assets/img/400x280-7.jpg" alt="">
                                                    </figure>
                                                </a>
                                                <h4><a href="#">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                            </article>
                                            <!-- /.End of related post -->
                                        </div>
                                        <div class="col-sm-4">
                                            <article class="post_article item_related">
                                                <a class="post_img" href="#">
                                                    <figure>
                                                        <img class="img-responsive" src="assets/img/400x280-8.jpg" alt="">
                                                    </figure>
                                                </a>
                                                <h4><a href="#">Aliquam <em><strong>gravida urna</strong></em> ut ipsum hendrerit cursus.</a></h4>
                                            </article>
                                            <!-- /.End of related post -->
                                        </div>
                                        <div class="col-sm-4">
                                            <article class="post_article item_related">
                                                <a class="post_img" href="#">
                                                    <figure>
                                                        <img class="img-responsive" src="assets/img/400x280-9.jpg" alt="">
                                                    </figure>
                                                </a>
                                                <h4><a href="#">Aliquam eu nunc at nulla efficitur <em><strong>pellentesque a quis.</strong></em></a></h4>
                                            </article>
                                            <!-- /.End of related post -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.End of  related post 
                                <div class="comments">
                                    <h3 class="comment_title">2 Comments</h3>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/img/img_avatar1.png" alt="" class="media-object">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Jahangir Alom <small>Posted on February 19, 2016</small></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <a href="#" class="btn link-btn btn-rounded">Reply ⇾</a>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/img/img_avatar2.png" alt="Demo Avatar Jane Doe" class="media-object">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Jane Doe <small>Posted on February 20, 2016</small></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <a href="#" class="btn link-btn btn-rounded">Reply ⇾</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/img/img_avatar1.png" alt="" class="media-object">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <a href="#" class="btn link-btn btn-rounded">Reply ⇾</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.End of comment 
                                <div class="comment_form">
                                    <h3 class="replay_title">Leave a Reply </h3>
                                    <div class="form-group">
                                        <textarea class="form-control" id="textarea" rows="5"></textarea>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Name *</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" id="name2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email *</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" id="email3" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="website" class="col-sm-2 col-form-label">Website</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" id="website" type="text">
                                        </div>
                                    </div>
                                    <a href="#" class="btn link-btn">Post Comment ⇾</a>
                                </div>
                                <!-- /.End of comment content -->
                            </main>
                            <?php include("aside.php"); ?>
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
<?php include("libs/security_js.php");?>