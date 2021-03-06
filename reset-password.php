<?php require("libs/fetch_data.php");?>
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
                                <h3>Account Settings</h3>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Reset Password</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.End of page header -->
                <div class="page-content">
                    <div class="middle-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="error-text" style="text-align:center">
                                    <h2>Please set a new password</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="error-desc">
                                   <form id="newForm" class="newForm" action="public/user/set-password-forgot-code">
            <div class="ajax-message">
            </div>
            <div class="form-group">
              <label for="email">Enter Your Reset Code</label>
              <input type="text" id="code" name="forgot_code" class="form-control input-lg" placeholder="Forgot Code">
            </div>
            <div class="form-group">
              <label for="email">Enter Your Email</label>
              <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Your Email">
            </div>

            <div class="form-group">
              <label for="email">Enter New password</label>
              <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
            <label for="email">Repeat password</label>
            <input type="password" id="password_repeat" name="forgot_password" class="form-control input-lg" placeholder="Repeat Password">
          </div>
              <button type="submit" class="btn btn-primary btn-lg">Continue</button>
            </form>
                                </div>
                            </div>
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

<script>  
$(".newForm").submit(function(e) {
  //$("#btnSubmit").prop("disabled", true);

  //window.scrollTo(0,document.body.scrollHeight);
    sending = 1;
    e.preventDefault();
    var obj = { email: $("#email").val(), password : $("#password").val(), forgot_code: $('#code').val(), forgot_password: $('#password_repeat').val() };
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
                  
                  $(".ajax-message").html('<div class="alert alert-success"><i class="fa fa-check"></i> Your password has been changed, kindly login</div>');
                  window.location= "signin.php";
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