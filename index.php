<?php require "libs/fetch_data.php";?>
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
    <body class="blog-layout null">
        <div class="main-content animsition">
            <div class="page-outer-wrap">
                <?php include("top-header.php"); ?>
                <!-- /.End of search full page  -->
                <?php require "banner.php";?>
                <!-- /.End oof blog masonry -->
                <div class="page-content">
                    <div class="container">
                        <div class="row">
                            <main class="col-sm-8 col-md-9 content p_r_40">
                                <article class="grid_post grid_post_lg text-center">
                                   <?php getonelatest("blogs");?>
                                </article>
                                <!-- /.End of grid post -->
                                <div class="grid-content">
                                    
                                       <?php getblogPosts("blogs"); ?>
                                    
                                    <!-- /.End of grid post -->
                                </div>
                                <div class="text-center">
                                    <!--<ul class="pagination">
                                        <li class="disabled"><a href="#">&#8701;</a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="page-numbers"><span>...</span></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&#8702;</a></li>
                                    </ul>
                                    <!-- /.End of pagination -->
                                </div>
                            </main>
                            <!-- Aside -->
                            <?php include("aside.php"); ?>
                        </div>
                    </div>
                </div>
               
               <?php include("footer-banner.php"); ?>
                <!-- /. End of instagram -->
            </div>
             <?php require "footer.php";?>
        </div>
        <!-- /.End of main content -->
        <!-- /.End of Sign up  Sing in -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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

        <script>
            var masonry = new Macy({
                container: '.grid-content',
                trueOrder: false,
                waitForImages: false,
                useOwnImageLoader: false,
                debug: true,
                mobileFirst: true,
                columns: 1,
                margin: 30,
                breakAt: {
                    1200: 2,
                    992: 2,
                    768: 2,
                    480: 2
                }
            });
        </script>
    </body>

</html>