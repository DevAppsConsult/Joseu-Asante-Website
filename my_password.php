<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title><?php getwebname("titles"); echo" | "; gettagline("titles");?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
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
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <!--************************************
      Wrapper Start
  *************************************-->
  <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
  <?php include("header.php");?>
    <!--************************************
        Inner Banner Start
    *************************************-->
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
          News Grid Start
      *************************************-->
      <div class="tg-sectionspace tg-haslayout">
        <div class="container">
          <div class="row">
            <div id="tg-twocolumns" class="tg-twocolumns">
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                <div id="tg-content" class="tg-content">       
                      <div class="col-md-7 col-lg-8 col-xl-8">
                        <div class="page-header bordered">
                          <h3>Change Password</h3>
                        </div>
                        <form action="http://uilove.in/realestate/listo/preview/index.php">
                          <div class="form-group">
                            <label>Your current password</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Your current password" autofocus>
                          </div>
                          <div class="form-group">
                            <label>Your new password</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Your new password">
                          </div>
                          <div class="form-group">
                            <label>Repeat new password</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Repeat new password">
                          </div>
                          <hr>
                          <div class="form-group action">
                            <button type="submit" class="btn btn-lg btn-primary">Update Password</button>
                          </div>
                        </form>
                      </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                <?php require_once('libs/account_side.php') ?>                                
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
    <!--************************************
        Footer Start
    *************************************-->
          <?php include("footer.php");?>
    <!--************************************
        Footer End
    *************************************-->
  </div>
  <!--************************************
      Wrapper End
  *************************************-->
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