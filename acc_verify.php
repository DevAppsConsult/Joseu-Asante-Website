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
					Author Detail Start
			*************************************-->
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					  <div class="row">

									<div class="tg-sectionhead" align="center">
										<h4 style="line-height:35px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque semper, est et tincidunt hendrerit, purus felis ornare ante</h4>
									</div>
            <form id="newForm" class="newForm" action="public/user/activate">

						<div class="col-md-offset-3 col-md-6">
						<div class="ajax-message">
            </div>
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" id="email" class="form-control form-control-lg" placeholder="" value="">
                  </div>
                  <div class="form-group">
                    <label>Account verification Code</label>
                    <input type="text" id="activation_code" class="form-control form-control-lg" placeholder="" value="">
                  </div>

									<div class="form-group action">
										<button type="submit" class="btn btn-sm tg-btn">continue</button>
									</div>
                </div>

						</form>
       
        </div>
				</div>
			</div>
			<!--************************************
					Author Detail End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
          <?php include("footer.php");?>
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
	<script>  

$(".newForm").submit(function(e) {
	//$("#btnSubmit").prop("disabled", true);

	//window.scrollTo(0,document.body.scrollHeight);
		sending = 1;
		e.preventDefault();
		var obj = { email: $("#email").val(), activation_code : $("#activation_code").val() };
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
									
									$(".ajax-message").html('<div class="alert alert-success"><i class="fa fa-check"></i> Your account has been verified</div>');
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

<!-- Mirrored from exprostudio.com/html/book_library/authordetail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 20:08:03 GMT -->
</html>