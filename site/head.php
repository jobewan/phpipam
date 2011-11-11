<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta name="Description" content=""> 
	<meta name="title" content="<?php print $settings['siteTitle']; ?>"> 
	<meta name="robots" content="noindex, nofollow"> 
	
	<!-- chrome frame support -->
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
  
	<!-- title -->
	<title><?php print $settings['siteTitle']; ?></title>
	
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="css/images/favicon.ico">
		
	<!-- js -->
	<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="js/jclock.jquery.js"></script>
<!-- 	<script type="text/javascript" src="js/magic.min.js"></script> -->
	<script type="text/javascript" src="js/magic.js"></script>
	<script type="text/javascript" src="js/buttons.js"></script>
	<?php 
	if ($settings['showTooltips'] == 1) { 
		print '<script type="text/javascript" src="js/jquery.tools.tooltip.min.js"></script>'; 
		print '<script type="text/javascript" src="js/tooltips.js"></script>'; 	
	} 
	?>

	<!-- HighCharts script -->
	<script type="text/javascript" src="js/Highcharts-2.1.8/highcharts.js"></script>

	<!--[if gt IE 6]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
 		
</head>