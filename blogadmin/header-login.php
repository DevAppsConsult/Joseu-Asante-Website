<!DOCTYPE html>
<?php if (!defined('PREPEND_PATH')) {
    define('PREPEND_PATH', '');
} ?>
<?php if (!defined('datalist_db_encoding')) {
    define('datalist_db_encoding', 'UTF-8');
} ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="<?php echo datalist_db_encoding; ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <title><?php echo ucwords('BLOG ADMIN'); ?> | <?php echo(isset($x->TableTitle) ? $x->TableTitle : ''); ?></title>

		<!-- Bootstrap -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900%7COpen+Sans" rel="stylesheet" />
		  <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/css/bootstrap.min.css">
		  <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/css/normalize.css">
		  <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/css/font-awesome.min.css">
		  <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/css/icomoon.css">
		  <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/css/jquery-ui.css">
		  <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/css/owl.carousel.css">
		  <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/css/transitions.css">
		  <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/css/main.css">
		  <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/css/color-purple.css">
		  <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/css/responsive.css">

		  
		  <script src="<?php echo PREPEND_PATH; ?>resources/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

		  <!--[if lt IE 9]>
			<script src="<?php echo PREPEND_PATH; ?>resources/initializr/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<![endif]-->
		<script src="<?php echo PREPEND_PATH; ?>resources/jquery/js/jquery-1.12.4.min.js"></script>
		<script>var $j = jQuery.noConflict();</script>
		<script src="<?php echo PREPEND_PATH; ?>resources/jquery/js/jquery.mark.min.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/initializr/js/vendor/bootstrap.min.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/lightbox/js/prototype.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/lightbox/js/scriptaculous.js?load=effects"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/select2/select2.min.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/timepicker/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/jscookie/js.cookie.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/datepicker/js/datepicker.packed.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>common.js.php"></script>
		<?php if (isset($x->TableName) && is_file(dirname(__FILE__) . "/hooks/{$x->TableName}-tv.js")) {
    ?>
			<script src="<?php echo PREPEND_PATH; ?>hooks/<?php echo $x->TableName; ?>-tv.js"></script>
		<?php
} ?>
</head>
	<body oncontextmenu="return false">
  <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
  <?php include("nav-header.php");?>
    <!--<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="resources/images/bgparallax-07.jpg">
      
    </div>-->
			<?php if (function_exists('handle_maintenance')) {
        echo handle_maintenance(true);
    } ?>

			<?php if (!$_REQUEST['Embedded']) {
        ?>
				<?php if (function_exists('htmlUserBar')) {
            echo htmlUserBar();
        } ?>
				<div style="height: 70px;" class="hidden-print"></div>
			<?php
    } ?>

			<?php if (class_exists('Notification')) {
        echo Notification::placeholder();
    } ?>

			<!-- process notifications -->
			<?php $notification_margin = ($_REQUEST['Embedded'] ? '15px 0px' : '-15px 0 -45px'); ?>
			<div style="height: 60px; margin: <?php echo $notification_margin; ?>;">
				<?php if (function_exists('showNotifications')) {
        echo showNotifications();
    } ?>
			</div>

			<?php if (!defined('APPGINI_SETUP') && is_file(dirname(__FILE__) . '/hooks/header-extras.php')) {
        include(dirname(__FILE__).'/hooks/header-extras.php');
    } ?>
			<!-- Add header template below here .. -->

