<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Gentle Crypto | <?= $page; ?></title>


	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/theme-styles.css">
	<link rel="stylesheet" type="text/css" href="css/blocks.css">
	<link rel="stylesheet" type="text/css" href="css/widgets.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i,900," rel="stylesheet">


	<!--Styles for RTL-->

	<!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->
	<style>
		.team-img {
			width: 200px; height: 200px; background-size: cover; border-radius: 600px;
		}

		.team-ceo {
			width: 301px; height: 301px; background-size: cover; border-radius: 600px;
		}

		@media (max-width: 989px) {
			.team-img {
				width: 160px; height: 160px; background-size: cover; border-radius: 600px;
			}

			.team-ceo {
				width: 200px; height: 200px; background-size: cover; border-radius: 600px;
			}
		}

		#lang .goog-te-combo {
			background-color: "#16181d";
		}
	</style>

</head>

<body class="crumina-grid">

<!-- Preloader -->

<!--<div id="hellopreloader">
	<div class="preloader">
		<svg width="135" height="140" fill="#fff">
			<rect width="15" height="120" y="10" rx="6">
				<animate attributeName="height" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
				<animate attributeName="y" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
			</rect>
			<rect width="15" height="120" x="30" y="10" rx="6">
				<animate attributeName="height" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
				<animate attributeName="y" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
			</rect>
			<rect width="15" height="140" x="60" rx="6">
				<animate attributeName="height" begin="0s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
				<animate attributeName="y" begin="0s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
			</rect>
			<rect width="15" height="120" x="90" y="10" rx="6">
				<animate attributeName="height" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
				<animate attributeName="y" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
			</rect>
			<rect width="15" height="120" x="120" y="10" rx="6">
				<animate attributeName="height" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
				<animate attributeName="y" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
			</rect>
		</svg>

		<div class="text">Loading ...</div>
	</div>
</div>-->

<!-- ... end Preloader -->

<!-- Header -->

<header class="header" id="site-header">
	<div class="container">
		<div class="header-content-wrapper">
			<a href="index.php" class="">
				<img src="img/gentlecrypto.png" width="160px" alt="Woox">
			</a>

			<?php include("./includes/nav.php"); ?>

			<div id="lang"></div>


			<!-- <select class="woox--select language-switcher" data-minimum-results-for-search="Infinity" data-dropdown-css-class="language-switcher-dropdown">
				<option value="French" data-href="">French</option>
				<option value="German" data-href="">German</option>
				<option value="Ukrainian" data-href="">Ukrainian</option>
				<option value="English" data-href="">English</option>
			</select> -->

		</div>
	</div>
</header>
