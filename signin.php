<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title><?php getwebname("titles"); echo" | "; gettagline("titles");?></title>

<!-- Bootstrap -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900%7COpen+Sans" rel="stylesheet" />
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
  <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
  <?php include("header.php");?>
    <div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
      
    </div>
    <!--************************************
        Inner Banner End
    *************************************-->
    <!--************************************
        Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
      <!--************************************
          Contact Us Start
      *************************************-->
      <div class="tg-sectionspace tg-haslayout">
        <div class="container">
          <div class="row">
            <div class="tg-contactus">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-sectionhead">
                  <h2><span>Please sign in or register</span></h2>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="container">
    <div class="row justify-content-md-center align-items-center">
      <div class="col col-md-6  col-lg-5 col-xl-4">
        <ul class="nav nav-tabs tab-lg" role="tablist">
          <li role="presentation" class="nav-item"><a class="nav-link active" href="signin.php">Sign In</a></li>
          <li role="presentation" class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="login">
          <form id="newForm" class="newForm" action="public/user/login">
            <div class="ajax-message">
            </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" class="form-control form-control-lg" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control form-control-lg" placeholder="Password">
              </div>
              <p class="text-lg-right"><a href="forgot-password.php">Forgot Password</a></p>
              
              <button type="submit" class="tg-btn">Sign In</button>
            </form>
          </div>
        </div>
        <div> </div>
      </div>
      
      <div class="col-md-6 col-lg-5 col-xl-4">
        <div class="socal-login-buttons"> <a href="#" class="btn btn-social btn-block btn-facebook"><i class="icon fa fa-facebook"></i> Continue with Facebook</a> <a href="#" class="btn btn-social btn-block btn-twitter"><i class="icon fa fa-twitter"></i> Continue with Twitter</a> <a href="#" class="btn btn-social btn-block btn-google"><i class="icon fa fa-google"></i> Continue with Google</a> </div>
      </div>
    </div>
  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!--************************************
        Main End
    *************************************-->
          <?php include("footer.php");?>
          <!---->
</div>

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
  <script>  

$(".newForm").submit(function(e) {
  //$("#btnSubmit").prop("disabled", true);

  //window.scrollTo(0,document.body.scrollHeight);
    sending = 1;
    e.preventDefault();
    var obj = { email: $("#email").val(), password : $("#password").val() };
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
                  
                  $(".ajax-message").html('<div class="alert alert-success"><i class="fa fa-check"></i> Your login wasa success</div>');
                  window.location= "index.php";
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