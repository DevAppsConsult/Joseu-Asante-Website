<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>OSRU - News, Blog & Magazine HTML Template</title>
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
                <!-- /.End of top header -->
                <div class="logo-wrapper">
                    <div class="container">
                        <div class="header-logo">
                            <a href="index.php" class="logo-img">
                                <img src="assets/img/logo3.png" alt="">
                            </a>
                        </div>
                        <div><i id="btn-search1" class=""></i></div>
                    </div>
                </div>
                <!-- /.End of logo section -->
                <div class="search">
                    <button id="btn-search-close" class="btn btn--search-close" aria-label="Close search form"> <i class="ti-close"></i></button>
                    <form class="search__form" action="javascript:void(0)" method="post">
                        <input class="search__input" name="search" type="search" placeholder="Search and hit enter..."/>
                        <span class="search__info">Hit enter to search or ESC to close</span>
                    </form>
                    
                </div>
                <!-- /.End of search  -->
                <nav class="navbar navbar-default navbar-sticky navbar-mobile bootsnav">
                    <div class="container">
                        <div class="attr-nav">
                            <ul>
                                <li><a data-toggle="modal" data-target="#user-modal"></a></li>
                                <li class="side-menu"><a></a></li>
                                <li id="btn-search2"><a></a></li>
                            </ul>
                        </div>
                        <!-- End Atribute Navigation -->
                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                
                            </button>
                            <a class="navbar-brand" href="index.php"><img src="assets/img/logo3.png" class="logo" alt=""></a>
                        </div>
                        <!-- End Header Navigation -->
                    </div>   
                    <!-- /. End of side menu -->
                    <div class="side-overlay"></div>
                </nav>
                <div class="clearfix"></div>
                <!-- /.End of page header -->
                <div class="page-content">
                    <div class="middle-box">
                        
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#login" data-toggle="tab">Log in</a></li>
                            <li><a href="#register" data-toggle="tab">Register</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="login">
                                <div class="form-content text-center">
                                    <h2>Sign In</h2>
                                    <!--<p>Chose One of the Following Methods.</p>
                                    <div class="social-btn">
                                        <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i>With Facebook</a>
                                        <a href="#" class="btn btn-plush"><i class="fa fa-google-plus"></i>With Google +</a>
                                    </div>
                                    <div class="ui horizontal divider">Or </div>-->
                                    <p>Sign in Using Your Email Address</p>
                                    <form id="newLogin" class="newLogin" action="public/user/login">

                                    <div class="ajax-message1">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" id="email1" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" id="password1" placeholder="Password">
                                    </div>
                                    <div class="block-content">

                                        <div class="checkbox checkbox-danger">
                                            <input id="checkbox8" type="checkbox">
                                            <label for="checkbox8">
                                                Remember me
                                            </label>
                                        </div>
                                        <a href="forgot-password.php" class="forgot">Forgot Password?</a>
                                    </div>
                                    <button type="submit" class="btn link-btn btn-block btn-rounded">Login &#8702;</button>
                                    <div class="">Don't have an account? <a href="#">Sign up Now</a></div>
                                    </form>
                                </div>
                                <!-- /.End of Login -->
                            </div>
                            <div class="tab-pane fade" id="register">
                                <div class="form-content">
                                    <h2 class="text-center">Sign Up For Free</h2>
                                    <form id="newForm" class="newForm" action="public/user">
                                    <div class="ajax-message">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                    </div>                                    
                                    <div class="form-group">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="block-content">
                                        <div><i class="fa fa-shield"></i><span>Your Password at Global Crypto are encrypted and Secured</span></div>
                                    </div>
                                    <button type="submit" class="btn link-btn btn-block btn-rounded">Sign Up &#8702;</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. End of instagram -->
            </div><?php require "footer.php";?>
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

        

<script> 
$(".newLogin").submit(function(e) {
  //$("#btnSubmit").prop("disabled", true);

  //window.scrollTo(0,document.body.scrollHeight);
    sending = 1;
    e.preventDefault();
    var obj = { email: $("#email1").val(), password : $("#password1").val() };
    var dat =JSON.stringify(obj);
    console.log(dat);
      var actionurl = e.currentTarget.action;
      $(".ajax-message1").html('<div class="alert alert-success"><i class="fa fa-spinner fa-spin"></i> Please wait loading ...</div>');
        var settings = {
          "async": true,
          "crossDomain": true,
          "url": actionurl,
          "method": "POST",
          "headers": {
            "content-type": "application/json",
            "cache-control": "no-cache",
            "postman-token": "fbdb8f20-d915-8753-b6a1-96b9cbf2de21"
          },
          "processData": false,
          "data": JSON.stringify(obj),

          success: function(data) {
                sending = 0;
                console.log(data.status);
                if(data.success)
                {
                  
                  $(".ajax-message1").html('<div class="alert alert-success"><i class="fa fa-check"></i> Your login was a success</div>');
                  window.location= "index.php";
                }
                else
                {
                  $(".ajax-message1").html('<div class="alert alert-danger"><i class="fa fa-times"></i> '+data.error+'</div>');

                }

              },
              error: function (e) {
                sending = 0;
                $(".ajax-message1").html('<div class="alert alert-danger"><i class="fa fa-times"></i> Kindly retry your request again </div>');

                $("#result").text(e.responseText);
                console.log("ERROR : ", e);

            }

        }

        $.ajax(settings).done(function (response) {
          console.log(response);
        });       

});

</script>

<script>  

    $(".newForm").submit(function(e) {
      //$("#btnSubmit").prop("disabled", true);

      //window.scrollTo(0,document.body.scrollHeight);
        sending = 1;
        e.preventDefault();
        var obj = { name: $("#name").val(), email: $("#email").val(), password : $("#password").val() };
        var dat =JSON.stringify(obj);
        console.log(dat);
          var actionurl = e.currentTarget.action;
          $(".ajax-message").html('<div class="alert alert-success"><i class="fa fa-spinner fa-spin"></i> Please wait loading ...</div>');
            var settings = {
              "async": true,
              "crossDomain": true,
              "url": actionurl,
              "method": "POST",
              "headers": {
                "content-type": "application/json",
                "cache-control": "no-cache",
                "postman-token": "fbdb8f20-d915-8753-b6a1-96b9cbf2de21"
              },
              "processData": false,
              "data": JSON.stringify(obj),

              success: function(data) {
                    sending = 0;
                    console.log(data.status);
                    if(data.success)
                    {
                      
                      $(".ajax-message").html('<div class="alert alert-success"><i class="fa fa-check"></i> Your account has been created, check your email for your activation code</div>');
                      window.location= "acc_verify.php";
                    }
                    else
                    {
                      $(".ajax-message").html('<div class="alert alert-danger"><i class="fa fa-times"></i> '+data.error+'</div>');

                    }

                  },
                  error: function (e) {
                    sending = 0;
                    $(".ajax-message").html('<div class="alert alert-danger"><i class="fa fa-times"></i> Kindly retry your request again </div>');

                    $("#result").text(e.responseText);
                    console.log("ERROR : ", e);

                }

            }

            $.ajax(settings).done(function (response) {
              console.log(response);
            });       

    });

  </script>
    </body>

</html>