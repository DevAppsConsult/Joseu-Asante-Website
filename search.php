<?php require("libs/fetch_data.php");?>
<?php
define("ROW_PER_PAGE", 6);
require_once('database/db.php');//db config file
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Search | <?php getwebname("titles"); echo" | "; gettagline("titles");?></title>
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

<script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    </head>
    <body>
        <div class="main-content animsition">
            <div class="page-outer-wrap">
                <?php include("top-header.php"); ?>

    <?php
    $search_keyword = '';
    if (!empty($_POST['search']['keyword'])) {
        $search_keyword = $_POST['search']['keyword'];
    }
    $sql = 'SELECT * FROM blogs WHERE title LIKE :keyword OR content LIKE :keyword  OR tags LIKE :keyword OR author LIKE :keyword ORDER BY id DESC ';
    
    /* Pagination Code starts */
    $per_page_html = '';
    $page = 1;
    $start=0;
    if (!empty($_POST["page"])) {
        $page = $_POST["page"];
        $start=($page-1) * ROW_PER_PAGE;
    }
    $limit=" limit " . $start . "," . ROW_PER_PAGE;
    $pagination_statement = $pdo_conn->prepare($sql);
    $pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pagination_statement->execute();

    $row_count = $pagination_statement->rowCount();
    if (!empty($row_count)) {
        $per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
        $page_count=ceil($row_count/ROW_PER_PAGE);
        if ($page_count>1) {
            for ($i=1;$i<=$page_count;$i++) {
                if ($i==$page) {
                    $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current btn-warning" />';
                } else {
                    $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page btn-danger" />';
                }
            }
        }
        $per_page_html .= "</div>";
    }

    $query = $sql.$limit;
    $pdo_statement = $pdo_conn->prepare($query);
    $pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    ?>
                <!-- /.End of search  -->

                <div class="clearfix"></div>
                <!-- /.End of navigation -->
                <div class="parallax page_header"  data-parallax-bg-image="assets/img/author-header.jpg" data-parallax-direction="left">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>Post Left Right Sidebar</h3>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Post Formats</a></li>
                                    <li class="active">Post</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.End of page header -->
                <div class="page-content">
                    <div class="container">
                        <div class="row">
                            <main class="col-sm-8 col-md-9 content p_r_40">
                                     <div>
                    <h2><span>Search Results</span> 
                                                <?php  if ($row_count==0) {
        # code...
        echo "<p style=color:#E9573F><b>sorry your search for:<u style=color:black>$search_keyword</u> returned zero results</b></p>";
        echo "<p><b style=color:#4FC1E9>Suggestions<b><br>Your search item is not available on Our Website<br>Try being more specific with key words<br>Enter key word using title<br>Try search using category<br>Try again later<br></p>";
        echo "<p><a href=\"http://www.google.com/search?q="
                            . $search_keyword . "\" target=\"_blank\" title=\"Look up 
                            " . $search_keyword . " on Google\" style=color:#37BC9B>Click here</a> to try the 
                            search on google</p>";
    } else {
                            echo "<p style=color:#4FC1E9><b>you searched for:<u style=color:black> $search_keyword</u></b></p>";
                            echo "<p style=color:#37BC9B><b>Results($row_count)..</b></p>";
                        }
                        ?></h2>
                </div>
                               <?php
                        if (!empty($result)) {
                            foreach ($result as $row) {
                                ?>
                                 <div class="media meida-md">
                                    <div class="media-left">
                                        <a href="single.php?id=<?php echo $row['id']; ?>"><img src="blogadmin/images/<?php echo $row['photo']; ?>" class="media-object" alt=""></a>
                                    </div>
                                    <!-- /.Post image -->
                                    <div class="media-body">
                                        <div class="post-header">
                                            <div class="post-cat"><span>In</span> <a href="#"><?php echo $row['tags']; ?></a></div>
                                            <h3 class="media-heading"><a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><?php echo $row['date']; ?></span> 
                                                <span class="comment-link"><a href="#"><i class="fa fa-user" aria-hidden="true"></i><?php echo $row['author']; ?></a></span>
                                            </div>
                                            <!-- /.Post meta -->
                                        </div>
                                        <p><?php echo $row['content']; ?></p>
                                        <div class="element-block">
                                            <a href="single.php?id=<?php echo $row['id']; ?>" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                            <!-- /.Post button -->
                                            <div class="post_share">
                                                <a class="smedia facebook fa fa-facebook" href="#"></a>
                                                <a class="smedia twitter fa fa-twitter" href="#"></a>
                                                <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                                <a class="smedia linkedin fa fa-linkedin" href="#"></a>
                                                <a class="smedia pinterest fa fa-pinterest-p" href="#"></a>
                                            </div>
                                            <!-- /.Post social share -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.End of media left post -->
                                <?php
                            }
                        }
                              ?>
                              <?php echo $per_page_html; ?>
                                <!-- /.End of Load more 
                                <ul class="pagination">
                                    <li class="disabled"><a href="#">&#8701;</a></li>
                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="page-numbers"><span>...</span></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&#8702;</a></li>
                                </ul>
                                <!-- /.End of pagination -->
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

<!-- Mirrored from osruhtml.bdtask.com/osru_demo/post-list+left-right.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Sep 2018 17:33:22 GMT -->
</html>