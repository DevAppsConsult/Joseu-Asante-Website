<?php
session_start();
ob_start();

function base_url()
{
    return 'http://localhost/article/';
}
function gettagline($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo 'No Tagline!!';
        }
        //if there are rows available display all the results
        foreach ($result as $titles => $tagline) {
            // code...
            echo ''.$tagline['tagline'].'';
        }
    }

    mysqli_close($con);
}
function getPayments()
{
    
}
function geticon($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no icon alert
        if ($rowcount==0) {
            // code...
            echo 'NoIcon';
        }
        //if there are rows available display all the results
        foreach ($result as $webicon => $icon) {
            // code...
            echo ''.$icon['icon'].'';
        }
    }

    mysqli_close($con);
}
function getjavascripts($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no script alert
        if ($rowcount==0) {
            // code...
            echo 'No script';
        }
        //if there are rows available display all the results
        foreach ($result as $jsscripts => $js) {
            // code...
            echo ''.$js['javascript'].'';
        }
    }

    mysqli_close($con);
}
function getsharingscript($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no script alert
        if ($rowcount==0) {
            // code...
            echo 'No script';
        }
        //if there are rows available display all the results
        foreach ($result as $sharingscript => $sharing) {
            // code...
            echo ''.$sharing['sharing_script'].'';
        }
    }

    mysqli_close($con);
}
function getcommentsscript($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no script alert
        if ($rowcount==0) {
            // code...
            echo 'No script';
        }
        //if there are rows available display all the results
        foreach ($result as $commentsscript => $csript) {
            // code...
            echo ''.$csript['comments_script'].'';
        }
    }

    mysqli_close($con);
}
function getshortdescription($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo 'No Description!!';
        }
        //if there are rows available display all the results
        foreach ($result as $titles => $sdc) {
            // code...
            echo ''.$sdc['short_description'].'';
        }
    }

    mysqli_close($con);
}
function getcontacts($table, $num)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo 'No Description!!';
        }
        //if there are rows available display all the results
        foreach ($result as $titles => $contacts) {
            // code...num
            if ($num==1) {
                // code...
                echo ''.$contacts['address'].'';
            } elseif ($num==2) {
                // code...
                echo ''.$contacts['email'].'';
            } elseif ($num==3) {
                // code...
                echo ''.$contacts['phone'].'';
            } elseif ($num==4) {
                // code...
                echo ''.$contacts['googlemap'].'';
            }
        }
    }

    mysqli_close($con);
}
function getdetaileddescription($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo 'No Description!!';
        }
        //if there are rows available display all the results
        foreach ($result as $titles => $sdc) {
            // code...
            echo ''.$sdc['detailed_description'].'';
        }
    }

    mysqli_close($con);
}
function countcategories()
{
    include "database/db_connect.php";
    $sql="SELECT * FROM blog_categories LIMIT 10";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo 'No Categories!!';
        }
        //if there are rows available display all the results
        foreach ($result as $categoriescount => $categorydata) {
            // count how many times each category appears in blogs
            $categoryid=$categorydata['id'];
            $sql="SELECT * FROM blogs WHERE category='$categoryid'";
            if ($result=mysqli_query($con, $sql)) {
                // code...
                $rowcountcategory=mysqli_num_rows($result);
                $getcatcount=$rowcountcategory;
            }
            // code...show data
            echo '
			<li><a href="javascript:void(0);"><span>'.$categorydata['name'].'</span><em>'.$rowcountcategory.'</em></a></li>
			';
        }
    }

    mysqli_close($con);
}
function getbannertext($table, $position)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo 'Hello World!!';
        }
        //if there are rows available display all the results
        foreach ($result as $titles => $bannertext) {
            // code...
            if ($position==1) {
                // code...
                echo ''.$bannertext['bannertext1'].'';
            } elseif ($position==2) {
                // code...
                echo ''.$bannertext['bannertext2'].'';
            } elseif ($position==3) {
                // code...
                echo ''.$bannertext['bannertext3'].'';
            } elseif ($position==4) {
                // code...
                echo ''.$bannertext['bannertext4'].'';
            }
        }
    }

    mysqli_close($con);
}
function getwebname($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo 'No Name!!';
        }
        //if there are rows available display all the results
        foreach ($result as $titles => $blogname) {
            // code...
            echo ''.$blogname['website_name'].'';
        }
    }

    mysqli_close($con);
}
function getkeywords($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo 'Nothing';
        }
        //if there are rows available display all the results
        foreach ($result as $titles => $keywords) {
            // code...
            echo ''.$keywords['keywords'].'';
        }
    }

    mysqli_close($con);
}
function getlinks($table, $platform)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo '#';
        }
        //if there are rows available display all the results
        foreach ($result as $link => $site) {
            // code...
            if ($platform=="facebook") {
                // code...
                echo ''.$site['facebook'].'';
            } elseif ($platform=="twitter") {
                // code...
                echo ''.$site['twitter'].'';
            } elseif ($platform=="googleplus") {
                // code...
                echo ''.$site['googleplus'].'';
            } elseif ($platform=="pinterest") {
                // code...
                echo ''.$site['pinterest'].'';
            } elseif ($platform=="dribble") {
                // code...
                echo ''.$site['dribble'].'';
            }
        }
    }

    mysqli_close($con);
}
function getcategoriesmenu($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no categories alert
        if ($rowcount==0) {
            // code...
            echo 'No Categories';
        }
        //if there are rows available display all the results
        foreach ($result as $blog_categories => $category) {
            // code...
            echo '<li><a href="category.php?id='.$category['id'].'">'.$category['name'].'</a>
			</li>';
        }
    }

    mysqli_close($con);
}


function getcategorieside($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no categories alert
        if ($rowcount==0) {
            // code...
            echo 'No Categories';
        }
        //if there are rows available display all the results
        foreach ($result as $blog_categories => $category) {
            // code...
            echo ' <a href="category.php?id='.$category['id'].'">'.$category['name'].'</a>';
        }
    }

    mysqli_close($con);
}

function getcategoriesfooter($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no categories alert
        if ($rowcount==0) {
            // code...
            echo 'No Categories';
        }
        //if there are rows available display all the results
        foreach ($result as $blog_categories => $category) {
            // code...
            echo '<li><a class="dropdown-item" href="category.php?id='.$category['id'].'">'.$category['name'].'</a>
			</li>';
        }
    }

    mysqli_close($con);
}
function getbottomsliderposts($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT 3";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo 'No posts to fetch';
        }
        //if there are rows available display all the results
        foreach ($result as $sliderposts => $slideritem) {
            // code...fetch actual category from categories table
            $category_id=$slideritem['category'];
            $sql="SELECT * FROM blog_categories WHERE id='$category_id'";
            if ($result=mysqli_query($con, $sql)) {
                foreach ($result as $results => $actualcategory) {
                    $ctgry=$actualcategory['name'];
                }
            }
            // code...display the results
            echo '<li>
			<div class="blog-item">
			<img src="blogadmin/images/'.$slideritem['photo'].'" alt="fantastic cms" class="img-fluid" style="width:450px;height:350px"/>
			<button type="button" class="btn btn-primary play">
			<a href="single.php?id='.$slideritem['id'].'" style="text-decoration:none;color:white"><i class="fas fa-eye"></i></a>
			</button>
			<div class="floods-text">
			<h3>'.$slideritem['title'].'
			<span>'.$ctgry.'
			<label>|</label>
			<i>'.$slideritem['author'].'</i>
			</span>
			</h3>

			</div>
			</div>
			</li>';
        }
    }

    mysqli_close($con);
}
function getblogridposts($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT 8";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo 'No Posts To Fetch';
        }
        //if there are rows available display all the results
        foreach ($result as $bloggrid => $griditem) {
            // code...
            echo '

								<div class="item">
									<div class="tg-postbook">
										<figure class="tg-featureimg">
											<div class="tg-bookimg">
												<div class="tg-frontcover"><img src="blogadmin/images/'.$griditem['photo'].'" alt="image description"></div>
												<div class="tg-backcover"><img src="blogadmin/images/'.$griditem['photo'].'" alt="image description"></div>
											</div>
											<a class="tg-btnaddtowishlist" href="javascript:void(0);">
												<i class="icon-heart"></i>
												<span>add to wishlist</span>
											</a>
										</figure>
										<div class="tg-postbookcontent">
											<ul class="tg-Articlescategories">
												<li><a href="javascript:void(0);">'.$griditem['tags'].'</a></li>
											</ul>
											<div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
											<div class="tg-booktitle">
												<h3><a href="single.php?id='.$griditem['id'].'">'.$griditem['title'].'</a></h3>
											</div>
											<span class="tg-bookwriter">By: <a href="javascript:void(0);"> '.$griditem['author'].'</a></span>
											<span>'.$griditem['date'].'</span>
											<span class="tg-bookprice">
												<ins>$25.18</ins>
												<del>$27.20</del>
											</span>
											<a class="tg-btn tg-btnstyletwo" href="jsingle.php?id='.$griditem['id'].'">
												<i class="fa fa-shopping-basket"></i>
												<em>Read Article</em>
											</a>
										</div>
									</div>
								</div>';
        }
    }

    mysqli_close($con);
}

function getblogPosts($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT 8";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo 'No Posts To Fetch';
        }
        //if there are rows available display all the results
        foreach ($result as $bloggrid => $griditem) {
            // code...
            echo '<article class="grid_post text-center">
            <figure>
                                            <a href="single.php?id='.$griditem['id'].'" class="grid_image"><img src="blogadmin/images/'.$griditem['photo'].'" class="img-responsive" alt=""></a>
                                            <figcaption>
                                                <div class="post-cat"><span>In</span> <a href="#">'.$griditem['tags'].'</a></div>
                                                <div class="entry-meta">
                                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i>'.$griditem['date'].'</span> 
                                                    <span class="comment-link"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>'.$griditem['author'].'</a></span>
                                                </div>
                                                <h4 class="grid_post_title"><a href="single.php?id='.$griditem['id'].'">'.$griditem['title'].'</a></h4>
                                                <div class="msg-lmt"><p>'.$griditem['content'].'</p></div>
                                                <a href="single.php?id='.$griditem['id'].'" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                                <!-- /.Post button -->
                                            </figcaption>
                                        </figure>
                                        </article>

                                ';
        }
    }

    mysqli_close($con);
}

function getAllarticles($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT 8";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo 'No Posts To Fetch';
        }
        //if there are rows available display all the results
        foreach ($result as $bloggrid => $griditem) {
            // code...
            echo '
                    <div class="media meida-md">
                                <div class="media-left">
                                    <a href="single.php?id='.$griditem['id'].'"><img src="blogadmin/images/'.$griditem['photo'].'" class="media-object" alt=""></a>
                                </div>
                                <!-- /.Post image -->
                                <div class="media-body">
                                    <div class="post-header">
                                        <div class="post-cat"><span>In</span> <a href="#">'.$griditem['tags'].'</a></div>
                                        <h3 class="media-heading"><a href="single.php?id='.$griditem['id'].'">'.$griditem['title'].'</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i>'.$griditem['date'].'</span> 
                                            <span class="comment-link"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>'.$griditem['author'].'</a></span>
                                        </div>
                                        <!-- /.Post meta -->
                                    </div>
                                    <p>'.$griditem['content'].'</p>
                                    <div class="element-block">
                                        <a href="single.php?id='.$griditem['id'].'" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
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

                                ';
        }
    }

    mysqli_close($con);
}

function getolderposts($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id ASC LIMIT 8";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no posts alert
        if ($rowcount==0) {
            // code...
            echo 'No Posts To Fetch';
        }
        //if there are rows available display all the results
        foreach ($result as $olderposts => $op) {
            // code...
            echo '<div class="blog-grids row mb-3">
			<div class="col-md-5 blog-grid-left">
			<a href="single.php?id='.$op['id'].'">
			<img src="blogadmin/images/'.$op['photo'].'" class="img-fluid" alt="fantastic cms">
			</a>
			</div>
			<div class="col-md-7 blog-grid-right">

			<h5>
			<a href="single.php?id='.$op['id'].'">'.$op['title'].'</a>
			</h5>
			<div class="sub-meta">
			<span>
			<i class="far fa-clock"></i> '.$op['date'].'</span>
			</div>
			</div>

			</div>';
        }
    }

    mysqli_close($con);
}
function getfour($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ORDER BY id DESC LIMIT 8";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no posts alert
        if ($rowcount==0) {
            // code...
            echo 'No posts to fetch';
        }
        //if there are rows available display all the results
        foreach ($result as $thefour => $fourdata) {
            // code...
            echo ' 
            <article class="grid_post text-center">
            <figure>
                                            <a href="#" class="grid_image"><img src="blogadmin/images/'.$fourdata['photo'].'" class="img-responsive" alt=""></a>
                                            <figcaption>
                                                <div class="post-cat"><span>In</span> <a href="#">'.$fourdata['tags'].'</a></div>
                                                <div class="entry-meta">
                                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                                    <span class="comment-link"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>'.$fourdata['author'].'</a></span>
                                                </div>
                                                <h4 class="grid_post_title"><a href="#">'.$fourdata['title'].'</a></h4>
                                                <p>'.$fourdata['content'].'</p>
                                                <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                                <!-- /.Post button -->
                                            </figcaption>
                                        </figure>
                                        </article>';
        }
    }

    mysqli_close($con);
}

function getfourSide($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ORDER BY id DESC LIMIT 4";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no posts alert
        if ($rowcount==0) {
            // code...
            echo 'No posts to fetch';
        }
        //if there are rows available display all the results
        foreach ($result as $thefour => $fourside) {
            // code...
            echo ' 

                <div class="media latest_post">
                                        <a class="media-left" href="single.php?id='.$fourside['id'].'">
                                            <img src="blogadmin/images/'.$fourside['photo'].'" width="100px" height="70px" class="media-object" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="single.php?id='.$fourside['id'].'">'.$fourside['title'].'</a></h6>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i> '.$fourside['date'].' </span> 
                                            </div>
                                        </div>
                                    </div>';
        }
    }

    mysqli_close($con);
}

function getonelatest($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ORDER BY id DESC LIMIT 1";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no posts alert
        if ($rowcount==0) {
            // code...
            echo 'No posts to fetch';
        }
        //if there are rows available display all the results
        foreach ($result as $onelatest => $onedata) {
            // code...
            echo ' <figure>
                                        <a href="single.php?id='.$onedata['id'].'" class="grid_image"><img src="blogadmin/images/'.$onedata['photo'].'" class="img-responsive" alt=""></a>
                                        <figcaption>
                                            <div class="post-cat"><span>In</span> <a href="#">'.$onedata['tags'].'</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i> '.$onedata['date'].'</span> 
                                                <span class="comment-link"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> '.$onedata['author'].'</a></span>
                                            </div>
                                            <h3 class="grid_post_title"><a href="single.php?id='.$onedata['id'].'">'.$onedata['title'].'</a></h3>
                                            <div class="txt-lmt"><p>'.$onedata['content'].'</p></div>
                                            <a href="single.php?id='.$onedata['id'].'" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                            <!-- /.Post button -->
                                        </figcaption>
                                    </figure>';
        }
    }

    mysqli_close($con);
}
function geteditorschoice($table)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table ORDER BY id DESC LIMIT 8";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no posts alert
        if ($rowcount==0) {
            // code...
            echo 'No Posts To Fetch';
        }
        //if there are rows available display all the results
        foreach ($result as $edschoice => $choice) {
            // get actual blog post data
            $postid=$choice['blog'];
            $sql="SELECT * FROM blogs WHERE id='$postid'";
            if ($result=mysqli_query($con, $sql)) {
                // code...
                foreach ($result as $posts => $postdata) {
                    // code...display actual posts
                    echo '

                            <article class="grid_post text-center">
            <figure>
                                            <a href="single.php?id='.$postdata['id'].'" class="grid_image"><img src="blogadmin/images/'.$postdata['photo'].'" class="img-responsive" alt=""></a>
                                            <figcaption>
                                                <div class="post-cat"><span>In</span> <a href="#">'.$postdata['tags'].'</a></div>
                                                <div class="entry-meta">
                                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i>'.$postdata['date'].'</span> 
                                                    <span class="comment-link"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>'.$postdata['author'].'</a></span>
                                                </div>
                                                <h4 class="grid_post_title"><a href="single.php?id='.$postdata['id'].'">'.$postdata['title'].'</a></h4>
                                                <p>'.$fourdata['content'].'</p>
                                                <a href="single.php?id='.$postdata['id'].'" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                                <!-- /.Post button -->
                                            </figcaption>
                                        </figure>
                                        </article>
                    ';
                }
            }
            // code...
        }
    }

    mysqli_close($con);
}
function getcategoryblogs($table, $id)
{
    include "database/db_connect.php";
    $sql="SELECT * FROM $table WHERE category='$id' ORDER BY id DESC LIMIT 10";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo 'No Blogs To Fetch';
        }
        //if there are rows available display all the results
        foreach ($result as $categories => $cdata) {
            // code...
            echo '<div class="media meida-md">
                                    <div class="media-left">
                                        <a href="single.php?id='.$cdata['id'].'"><img src="blogadmin/images/'.$cdata['photo'].'" class="media-object" alt=""></a>
                                    </div>
                                    <!-- /.Post image -->
                                    <div class="media-body">
                                        <div class="post-header">
                                            <div class="post-cat"><span>In</span> <a href="#">'.$cdata['tags'].'</a></div>
                                            <h3 class="media-heading"><a href="single.php?id='.$cdata['id'].'">'.$cdata['title'].'</a></h3>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i> '.$cdata['date'].'</span> 
                                                <span class="comment-link"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>'.$cdata['author'].'</a></span>
                                            </div>
                                            <!-- /.Post meta -->
                                        </div>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                                        <div class="element-block">
                                            <a href="single.php?id='.$cdata['id'].'" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
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
                                </div>';
        }
    }

    mysqli_close($con);
}
function getpopularposts($table)
{
    include "database/db_connect.php";
    // get most viewed 3 pages from pagehits
    $sql="SELECT * FROM $table ORDER BY count DESC LIMIT 3";
    if ($result=mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            // code...
            echo 'No Pots To Fetch';
        }
        //if there are rows available display all the results
        foreach ($result as $pagehits => $hits) {
            // code...get actual blog from blogs db
            $storepage=$hits['page'];
            $sql="SELECT * FROM blogs WHERE title='$storepage'";
            if ($result=mysqli_query($con, $sql)) {
                // code...
                foreach ($result as $allblogs => $specificblog) {
                    // code...display the results
                    echo '
                            <div class="media latest_post">
                                        <a class="media-left" href="single.php?id='.$specificblog['id'].'">
                                            <img src="assets/img/'.$specificblog['photo'].'" width="100px" height="70px" class="media-object" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="single.php?id='.$specificblog['id'].'">'.$specificblog['title'].'</a></h6>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i> '.$specificblog['date'].' </span> 
                                            </div>
                                        </div>
                                    </div>
                    ';
                }
            }
        }
    }

    mysqli_close($con);
}
