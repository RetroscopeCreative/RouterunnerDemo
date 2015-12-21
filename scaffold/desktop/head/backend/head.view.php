<?php
$bootstrap = \bootstrap::get();
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Routerunner Meta data start -->
	<base href="<?=\runner::config("BASE")?>">

	<title><?=$bootstrap->pageproperties["title"]?></title>

	<meta name="description" content="<?=$bootstrap->pageproperties["description"]?>" />

	<!-- Open Graph data -->
	<meta property="og:title" content="<?=($bootstrap->pageproperties["meta"]["og:title"] ? $bootstrap->pageproperties["meta"]["og:title"] : $bootstrap->pageproperties["title"])?>" />
	<meta property="og:type" content="<?=$bootstrap->pageproperties["meta"]["og:type"]?>" />
	<meta property="og:url" content="<?=\runner::config("BASE") . $bootstrap->url?>" />
	<meta property="og:image" content="<?=$bootstrap->pageproperties["meta"]["og:image"]?>" />
	<meta property="og:description" content="<?=$bootstrap->pageproperties["meta"]["og:description"]?>" />

	<meta name="author" content="Retroscope Creative">
	<!-- Routerunner Meta data end -->

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/modern-business.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!--
	<link rel="shortcut icon" href="favicon.ico?v=2" />
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="favicon-64x64.png" sizes="64x64" />
	<link rel="icon" type="image/png" href="favicon-48x48.png" sizes="48x48" />
	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon-24x24.png" sizes="24x24" />
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="favicon-128x128.png" sizes="128x128" />
	<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
	<meta name="msapplication-TileColor" content="#ffffff"/>
	-->

	<style>

	</style>
	<script>
		window.container_width = 996;
		window.panel_width = 560;
		window.settings = {
			"container_width": 996,
			"panel_width": 660,
			"scaffold": "scaffold",
			"root": "desktop"
		};
	</script>
</head>
