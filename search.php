<?php require("libs/fetch_data.php");?>
<?php
define("ROW_PER_PAGE", 6);
require_once('database/db.php');//db config file
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Search|<?php getwebname("titles"); echo"|"; gettagline("titles");?></title>
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

<body oncontextmenu="return false">
	<!--Header-->
	<?php include("header.php");?>
	<!--//header-->
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
	<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
			
		</div>
	<!--/main-->


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
									<div class="tg-newsgrid">
										<div class="tg-sectionhead">
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
                        ?>
    				</h2>
										</div>
										
										<div class="row">
						<?php
                        if (!empty($result)) {
                            foreach ($result as $row) {
                                ?>
											<div class="col-xs-6 col-sm-12 col-md-6 col-lg-4">
												<article class="tg-post">
													<figure><a href="javascript:void(0);"><img src="blogadmin/images/<?php echo $row['photo']; ?>" alt="image description"></a></figure>
													<div class="tg-postcontent">
														<ul class="tg-bookscategories">
															<li><a href="javascript:void(0);"><?php echo $row['tags']; ?></a></li>
														</ul>
														<div class="tg-themetagbox"><span class="tg-themetag">featured</span></div>
														<div class="tg-posttitle">
															<h3><a href="javascript:void(0);"><?php echo $row['title']; ?></a></h3>
														</div>
														<span class="tg-bookwriter">By: <a href="javascript:void(0);"><?php echo $row['author']; ?></a></span>
														<ul class="tg-postmetadata">
															<li><a href="javascript:void(0);"><i class="fa fa-calendar-alt"></i><i> <?php echo $row['date']; ?></i></a></li>
															<li><a href="single.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye"></i><i>Read More</i></a></li>
														</ul>
													</div>
												</article>
											</div>
											
						<?php
                            }
                        }
                              ?>
                              
                              <?php echo $per_page_html; ?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
								<aside id="tg-sidebar" class="tg-sidebar">
									<div class="tg-widget tg-widgetsearch">
										<form class="tg-formtheme tg-formsearch">
											<div class="form-group">
												<button type="submit"><i class="icon-magnifier"></i></button>
												<input type="search" name="search" class="form-group" placeholder="Search Here">
											</div>
										</form>
									</div>
									<div class="tg-widget tg-catagories">
										<div class="tg-widgettitle">
											<h3>Categories</h3>
										</div>
										<div class="tg-widgetcontent">
											<ul>
												<?php countcategories();?>
											</ul>
										</div>
									</div>
									<div class="tg-widget tg-widgettrending">
										<div class="tg-widgettitle">
											<h3>Trending Posts</h3>
										</div>
										<div class="tg-widgetcontent">
											<ul>
												<li>
													<article class="tg-post">
														<figure><a href="javascript:void(0);"><img src="images/products/img-04.jpg" alt="image description"></a></figure>
														<div class="tg-postcontent">
															<div class="tg-posttitle">
																<h3><a href="javascript:void(0);">Where The Wild Things Are</a></h3>
															</div>
															<span class="tg-bookwriter">By: <a href="javascript:void(0);">Kathrine Culbertson</a></span>
														</div>
													</article>
												</li>
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
	<!--//main-->
	<!--footer-->
	<?php include("footer.php") ?>
	

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