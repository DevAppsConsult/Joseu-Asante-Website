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
                                <h3>Plans</h3>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Plans</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.End of page header -->
                <div class="page-content">
                    <div class="middle-box">
                        <div class="row">

                        <div class="tg-sectionhead" align="center">
                            <h4 style="line-height:35px;">Select you prefered plan</h4>
                        </div>
          <div class="col-md-6">
          <?php 
            $myPlan = json_decode(file_get_contents(base_url().'public/user/plan/'.$_SESSION['user_id']),true); 
            $allPlans = json_decode(file_get_contents(base_url().'public/user/all-plans'),true); 
            ?>                    
            <div class="pricing-column">
              <ul>
                <li class="title">Basic Plan</li>
                <li class="price">GhC <?php echo $allPlans['data'][0]['price'] ?> / book</li>
                <li>Single Book</li>
                <li>Upgrade Option</li>
                <li>4 months book reading period</li>

                <?php
                    if(isset($myPlan['success'])) : 
                        if($myPlan['data']['plan']['id'] == 1)
                        {
                ?>
                            <li class="action"><a class="btn btn-primary btn-lg btn-block" href="#" id="renewOne" onclick="renew(1); return false;">Renew</a></li>
                <?php
                        }else{
                 ?>
                            <li class="action"><a class="btn btn-primary btn-lg btn-block" href="#" id="renewOne" onclick="upgrade(1); return false;">Downgrade</a></li>
                <?php
                        }
                    else:
                    ?>

                    <li class="action"><a class="btn btn-primary btn-lg btn-block" href="#" id="renewOne" onclick="subscribe(1); return false;">Subscribe</a></li>                  
                    <?php
                    endif;
                ?>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="pricing-column popular">
              <ul>
                <li class="title">Gold Plan</li>
                <li class="price">GhC <?php echo ($allPlans['data'][1]['price']) ?> / Year</li>
                <li>3 Books</li>
                <li>A year reading period</li>
                <li>Upgrade Option</li>
                <?php
                    if(isset($myPlan['success'])) : 

                        if($myPlan['data']['plan']['id'] == 3)
                        {
                ?>
                            <li class="action"><a class="btn btn-primary btn-lg btn-block" href="#" id="renewThree" onclick="renew(3); return false;">Renew</a></li>
                <?php
                        }else{
                 ?>
                            <li class="action"><a class="btn btn-primary btn-lg btn-block" href="#" id="renewThree" onclick="upgrade(3); return false;">Upgrade</a></li>
                <?php
                        }
                    else:
                    ?>
                    <li class="action"><a class="btn btn-primary btn-lg btn-block" href="#" id="renewThree" onclick="subscribe(3); return false;">Subscribe</a></li>                    
                    <?php
                    endif;
                ?>
              </ul>
            </div>
          </div>
        </div>
                    </div>
                </div>
                <?php include("footer-banner.php"); ?>
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

    <script>
    var global = 0;
        function subscribe(id)
        {
            global = id;
            if(id == 1)
            {
                $("#renewOne").html('<i class="fa fa-spinner fa-spin"></i> Please wait ...');
            }
            if(id == 2)
            {
                $("#renewTwo").html('<i class="fa fa-spinner fa-spin"></i> Please wait ...');
                
            }
            if(id == 3)
            {
                $("#renewThree").html('<i class="fa fa-spinner fa-spin"></i> Please wait ...');
            }
            $.get( "<?php echo base_url() ?>public/user/subscribe-plan/"+id,function( data ) {
                var temp = data.data.split('|') ;
                //console.log(temp);
                loadNow(temp[1],temp[0]);
            });

        }
        
        function renew(id)
        {
            if(id == 1)
            {
                $("#renewOne").html('<i class="fa fa-spinner fa-spin"></i> Please wait ...');
            }
            if(id == 2)
            {
                $("#renewTwo").html('<i class="fa fa-spinner fa-spin"></i> Please wait ...');
                
            }
            if(id == 3)
            {
                $("#renewThree").html('<i class="fa fa-spinner fa-spin"></i> Please wait ...');
            }
            $.get( "<?php echo base_url() ?>public/user/renew-plan/"+id,function( data ) {
                var temp = data.data.split('|') ;
                //console.log(temp);
                loadNow(temp[1],temp[0]);
            });

        }

        function upgrade(id)
        {
            if(id == 1)
            {
                $("#renewOne").html('<i class="fa fa-spinner fa-spin"></i> Please wait ...');
            }
            if(id == 2)
            {
                $("#renewTwo").html('<i class="fa fa-spinner fa-spin"></i> Please wait ...');
                
            }
            if(id == 3)
            {
                $("#renewThree").html('<i class="fa fa-spinner fa-spin"></i> Please wait ...');
            }
            $.get( "<?php echo base_url() ?>public/user/upgrade-plan/"+id,function( data ) {
                var temp = data.data.split('|') ;
                //console.log(temp);
                loadNow(temp[1],temp[0]);
            });

        }
    </script>
    <script type="text/javascript" src="http://flw-pms-dev.eu-west-1.elasticbeanstalk.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
<script>
/*   document.addEventListener("DOMContentLoaded", function(event) {
  document.getElementById("submit").addEventListener("click", function(e) {

  });
});
*/
function loadNow(amount,code)
{
    var PBFKey = "FLWPUBK-967856064bfbdb1f87a9690b420b268f-X";
    
    getpaidSetup({
      PBFPubKey: PBFKey,
      customer_email: "<?php echo $_SESSION['user']['email'] ?>",
      customer_firstname: "<?php echo explode(' ',$_SESSION['user']['name'])[0] ?>",
      customer_lastname: "<?php echo explode(' ',$_SESSION['user']['name'])[1] ?>",
      custom_description: "Content Subscription",
      custom_logo: "<?php echo base_url() ?>logo.png",
      custom_title: "Josey",
      amount: amount,
      country: "GH",
      currency: "GHS",
      txref: code,
      onclose: function() {},
      callback: function(response) {
        var flw_ref = response.tx.flwRef; // collect flwRef returned and pass to a                  server page to complete status check.
        console.log("This is the response returned after a charge", response);
        if (
          response.tx.chargeResponseCode == "00" ||
          response.tx.chargeResponseCode == "0"
        ) {
            if(global == 1)
            {
                $("#renewOne").html('Thank you, check your mail for confirmation');
            }
            if(global == 2)
            {
                $("#renewTwo").html('Thank you, check your mail for confirmation');
                
            }
            if(global == 3)
            {
                $("#renewThree").html('Thank you, check your mail for confirmation');
            }
            window.location = "my_payments.php";
          // redirect to a success page
        } else {
          // redirect to a failure page.
        }
      }
    });
}


</script>
    </body>

</html>