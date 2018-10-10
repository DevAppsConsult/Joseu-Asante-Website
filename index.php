<?php require "libs/fetch_data.php";?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title><?php getwebname("titles"); echo" | "; gettagline("titles");?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
    <meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
    <meta name="keywords" content="<?php getkeywords("titles");?>" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>    
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

<body class="tg-home tg-homevtwo" oncontextmenu="return false">
    <?php require "header.php";?>
    <?php require "banner.php";?>
        <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <!--************************************
                    Best Selling Start
            *************************************-->
            <section class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-sectionhead">
                                <h2><span>Reader's Choice</span>Most Read Articles</h2>
                                <a class="tg-btn" href="javascript:void(0);">View All</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div id="tg-bestsellingArticlesslider" class="tg-bestsellingArticlesslider tg-bestsellingArticles owl-carousel">
                                <?php getblogridposts("blogs");?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
                    Best Selling End
            *************************************-->
            <!--************************************
                    Featured Item Start
            *************************************-->
            <section class="tg-bglight tg-haslayout">
                <div class="container">
                    <div class="row">
        <?php getonelatest("blogs");?>
                        
                    </div>
                </div>
            </section>
            <!--************************************
                    Featured Item End
            *************************************-->
            <!--************************************
                    New Release Start
            *************************************-->
            <section class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="tg-newrelease">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="tg-sectionhead">
                                    <h2><span>Taste The New Spice</span>New Released Articles</h2>
                                </div>
                                <div class="tg-description">
                                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur cepteur sint occaecat cupidatat.</p>
                                </div>
                                <div class="tg-btns">
                                    <a class="tg-btn tg-active" href="javascript:void(0);">View All</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <div class="row">
                                    <div class="tg-newreleasebooks">
            <?php getfour("blogs");?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
                    New Release End
            *************************************-->
            <!--************************************
                    Collection Count Start
            *************************************-->
            <section class="tg-parallax tg-bgcollectioncount tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-04.jpg">
                <div class="tg-sectionspace tg-collectioncount tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div id="tg-collectioncounters" class="tg-collectioncounters">
                                <div class="tg-collectioncounter tg-drama">
                                    <div class="tg-collectioncountericon">
                                        <i class="icon-bubble"></i>
                                    </div>
                                    <div class="tg-titlepluscounter">
                                        <h2>Drama</h2>
                                        <h3 data-from="0" data-to="6179213" data-speed="8000" data-refresh-interval="50">6,179,213</h3>
                                    </div>
                                </div>
                                <div class="tg-collectioncounter tg-horror">
                                    <div class="tg-collectioncountericon">
                                        <i class="icon-heart-pulse"></i>
                                    </div>
                                    <div class="tg-titlepluscounter">
                                        <h2>Horror</h2>
                                        <h3 data-from="0" data-to="3121242" data-speed="8000" data-refresh-interval="50">3,121,242</h3>
                                    </div>
                                </div>
                                <div class="tg-collectioncounter tg-romance">
                                    <div class="tg-collectioncountericon">
                                        <i class="icon-heart"></i>
                                    </div>
                                    <div class="tg-titlepluscounter">
                                        <h2>Romance</h2>
                                        <h3 data-from="0" data-to="2101012" data-speed="8000" data-refresh-interval="50">2,101,012</h3>
                                    </div>
                                </div>
                                <div class="tg-collectioncounter tg-fashion">
                                    <div class="tg-collectioncountericon">
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="tg-titlepluscounter">
                                        <h2>Fashion</h2>
                                        <h3 data-from="0" data-to="1158245" data-speed="8000" data-refresh-interval="50">1,158,245</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
                    Collection Count End
            *************************************-->
            <!--************************************
                    Picked By Author Start
            *************************************-->
            <section class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-sectionhead">
                                <h2><span>Some Great Articles</span>Picked By Author</h2>
                                <a class="tg-btn" href="javascript:void(0);">View All</a>
                            </div>
                        </div>
                        <div id="tg-pickedbyauthorslider" class="tg-pickedbyauthor tg-pickedbyauthorslider owl-carousel">
        <?php geteditorschoice("editors_choice"); ?>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
                    Picked By Author End
            *************************************-->
            <!--************************************
                    Testimonials Start
            *************************************-->
            <section class="tg-parallax tg-bgtestimonials tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
                <div class="tg-sectionspace tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2">
                                <div id="tg-testimonialsslider" class="tg-testimonialsslider tg-testimonials owl-carousel">
                                    <div class="item tg-testimonial">
                                        <figure><img src="images/author/imag-02.jpg" alt="image description"></figure>
                                        <blockquote><q>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore tolore magna aliqua enim ad minim veniam, quis nostrud exercitation ullamcoiars nisi ut aliquip commodo.</q></blockquote>
                                        <div class="tg-testimonialauthor">
                                            <h3>Holli Fenstermacher</h3>
                                            <span>Manager @ CIFP</span>
                                        </div>
                                    </div>
                                    <div class="item tg-testimonial">
                                        <figure><img src="images/author/imag-02.jpg" alt="image description"></figure>
                                        <blockquote><q>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore tolore magna aliqua enim ad minim veniam, quis nostrud exercitation ullamcoiars nisi ut aliquip commodo.</q></blockquote>
                                        <div class="tg-testimonialauthor">
                                            <h3>Holli Fenstermacher</h3>
                                            <span>Manager @ CIFP</span>
                                        </div>
                                    </div>
                                    <div class="item tg-testimonial">
                                        <figure><img src="images/author/imag-02.jpg" alt="image description"></figure>
                                        <blockquote><q>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore tolore magna aliqua enim ad minim veniam, quis nostrud exercitation ullamcoiars nisi ut aliquip commodo.</q></blockquote>
                                        <div class="tg-testimonialauthor">
                                            <h3>Holli Fenstermacher</h3>
                                            <span>Manager @ CIFP</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
                    Testimonials End
            *************************************-->
</main>
                    <!--//main-->
        <?php require "footer.php";?>
                    <!---->

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