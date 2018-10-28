<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php getwebname("titles"); echo" | "; gettagline("titles");?> | Contact</title>
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
                <div class="map-content">
                    <!-- The element that will contain our Google Map. This is used in both the Javascript and CSS above. -->
                    <div id="map" class="gmap2"></div>
                </div>
                <!--End of map content-->
                <div class="page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <div class="contact-address">
                                        <div class="contact-text">
                                            <h3>Contact Info</h3>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                                Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at 
                                                Hampden-Sydney College in Virginia.</p>
                                        </div>
                                        <div class="address-info">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img src="assets/img/icon/agenda.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="addon-title">Address</h4>
                                                    <div class="addon-text"> <?php getcontacts("titles","1");?><br>
                                                        <!--San Francisco, CA 94103--></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="address-info">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img src="assets/img/icon/email.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="addon-title">Email Address</h4>
                                                    <div class="addon-text"><a href="http://osruhtml.bdtask.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="04777174746b7670446b7776716a6173772a676b69"><?php getcontacts("titles","2");?></a><br>
                                                       <!-- <a href="http://osruhtml.bdtask.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="92dbfcf4fdd2fde1e0e7fcf7e5e1bcf1fdff">[email&#160;protected]</a>--></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="address-info">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img src="assets/img/icon/phone.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="addon-title">Phone Number</h4>
                                                    <div class="addon-text">Support: <?php getcontacts("titles","3");?><!--<br>
                                                        Sales: +098 765 4321--></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-form">
                                    <h3>Feedback</h3>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                        Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at 
                                        Hampden-Sydney College in Virginia.</p>
                                    <div class="form-group">
                                        <textarea class="form-control" id="textarea" rows="5"></textarea>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 col-md-2 col-form-label">Name *</label>
                                        <div class="col-sm-6 col-md-5">
                                            <input class="form-control" id="name2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-md-2 col-form-label">Email *</label>
                                        <div class="col-sm-6 col-md-5">
                                            <input class="form-control" id="email2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="website" class="col-sm-3 col-md-2 col-form-label">Website</label>
                                        <div class="col-sm-6 col-md-5">
                                            <input class="form-control" id="website" type="text">
                                        </div>
                                    </div>
                                    <a href="#" class="btn link-btn">Submit ⇾</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="height_30"></div>
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

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcMXKkIZSG1Ev3nNkDE5vZpfT_KG9zBT8"></script>
        <script>
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 6,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(23.8103968, 90.41256666), //Dhaka

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#d17c78"}, {"visibility": "on"}]}]
                };

                // image from external URL
                var myIcon = 'assets/img/icon/marker.png';

                //preparing the image so it can be used as a marker
                //https://developers.google.com/maps/documentation/javascript/reference#Icon
                //includes hacky fix "size" to allow for wobble
                var catIcon = {
                    url: myIcon
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(23.8103968, 90.41256666), //Dhaka
                    map: map,
                    icon: catIcon,
                    title: 'Snazzy!',
                    animation: google.maps.Animation.DROP,
                });
            }
        </script>
    </body>

</html>