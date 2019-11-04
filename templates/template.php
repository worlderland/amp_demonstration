<?php
	$doctype = '
	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
	';

	$title = '<title>' . $pageTitle . '</title>';

	$description = '<meta name="description" content="' . $pageDescription . '">';

	$meta = '
		<meta name="author" content="Alessandro Coraglia">
		<meta name="theme-color" content="#21ccd4">
		<meta name="viewport" content="width=device-width, initial scale=1.0">
		<link href="css/styles.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="images/browser.png" rel="icon" type="image/png">
	</head>

	<body>
	';

	$facebook = '
	<!--===FACEBOOK LIKE AND SHARE BUTTONS IMPLEMENTATION===-->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = \'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0\';
		fjs.parentNode.insertBefore(js, fjs);
		}(document, \'script\', \'facebook-jssdk\'));</script>
	<!--===END FACEBOOK LIKE AND SHARE BUTTONS IMPLEMENTATION===-->
	';

	$header = '
	<div id="outer">	
		<header>
			<!--<h1><a href="index.php"><span class="worlder">W</span><img id="balloon" src="images/World-Balloon.svg" alt="worlderland logo"><span class="worlder">rlder</span><span id="land">land</span><span id="com">.com</span></a></h1> -->
			<div class="container center">
				<div class="logo center">	
					<a href="./"><img src="images/Worlderland.svg" alt="worlderland logo"></a>
				</div>
			</div>
			<!--===SKIPNAV FOR BROWSER READERS===-->
			<a href="#skipnav" class="out-of-screen">Skip Nav</a>
			<!--===END SKIPNAV FOR BROWSER READERS===-->
			<nav id="top-nav" class="center">
				
				<label for="show-menu" id="hamburger" class="show-menu">&#9776;</label>
				<input type="checkbox" id="show-menu">
				<ul class="navigation">
					<li><a href="./" aria-label="Return to the Home page">Home</a></li>
					<li><a href="about.php" aria-label="Read about who\'s behind Worlderland">About</a></li>
					<li><a href="destinations.php" class="has-submenu" aria-label="Visit the destinations page">Destinations</a>
						<label for="show-submenu" class="show-submenu rotate-submenu">&#9660;</label>
						<input type="checkbox" id="show-submenu">
						<ul class="navigation">
							<li><a href="australia.php" aria-label="Read about Australia">Australia</a></li>
						</ul>
					</li>
					<li><a href="travelblog.php" aria-label="Visit the blog page">Blog</a></li>
					<li><a href="contact.php" aria-label="Visit the contact page to get in touch with Worlderland">Contact</a></li>
				</ul>					
			</nav>
		</header>
	';

	$opnSkipNav = '
	<!--===SKIPNAV FOR BROWSER READERS===-->
	<div id="skipnav">
		<div id="main">
	';

	$aside = '
		<aside class="rgt-clmn">
			<h4>Hello, I\'m Alessandro!</h4>
			<div class="sidebar-about center txt-center">
				<img src="images/side-bar/me.jpg" class="image image-big center" alt="me">
				<div class="sidebar-bttn center">
					<a class="bttn" href="about.php">Read More</a>
				</div>
			</div>
			<div class="sidebar-social">
				<ul>
					<li><a href="https://www.facebook.com/Worlderland-235922057015682/?modal=admin_todo_tour" aria-label="Visit Worlderland\'s Facebook page" target="_blank"><i class="fb fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/WorlderlandA" target="_blank" aria-label="Visit Worlderland\'s Twitter page"><i class="tw fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="http://www.pinterest.com/worlderland_alex" target="_blank" aria-label="Visit Worlderland\'s Pinterest page"><i class="pn fa fa-pinterest-p" aria-hidden="true"></i></a></li>
				</ul>
				<br class="clearfloat" />
			</div>
			<div class="social-bttns-box">
				<!--===FB buttons===-->
				<div class="fb-like social-bttns" data-href="https://www.facebook.com/Worlderland-235922057015682/?modal=admin_todo_tour" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
				<!--===FB buttons===-->
			</div>
		</aside>
	';

	$footer = '	
		<footer>
			<nav id="bottom-nav" class="center">
				<ul>
					<li><a href="./" aria-label="Return to the Home page">Home</a></li>
					<li><a href="about.php" aria-label="Read about who\'s behind Worlderland">About</a></li>
					<li><a href="destinations.php" aria-label="Visit the destinations page">Destinations</a></li>
					<li><a href="travelblog.php" aria-label="Visit the blog page">Blog</a></li>
					<li><a href="contact.php" aria-label="Visit the contact page to get in touch with Worlderland">Contact</a></li>
				</ul>
				<br class="clearfloat" />					
			</nav>
			<nav id="terms-nav" class="center">
				<ul>
					<li><a href="sitemap.php" aria-label="Visit the sitemap page">Site Map</a></li>
					<li><a href="terms.php" aria-label="Read about the terms and conditions">Terms &amp; Conditions</a></li>
					<li><a href="privacy.php" aria-label="Read about the privacy policies">Privacy Policies</a></li>
				</ul>
				<br class="clearfloat" />					
			</nav>
			<div class="footer-social center">
				<ul>
					<li><a href="https://www.facebook.com/Worlderland-235922057015682/?modal=admin_todo_tour" target="_blank" aria-label="visit the facebook page"><strong class="fb fa fa-facebook" aria-hidden="true"></strong></a></li>
					<li><a href="https://twitter.com/WorlderlandA" target="_blank" aria-label="visit the twitter page"><strong class="tw fa fa-twitter" aria-hidden="true"></strong></a></li>
					<li><a href="https://www.pinterest.com/worlderland_alex" target="_blank" aria-label="visit the pinterest page"><strong class="pn fa fa-pinterest-p" aria-hidden="true"></strong></a></li>
				</ul>
				<br class="clearfloat" />
			</div>
			<div class="cop-rig-container center">
				<div class="center txt-center">
					<p class="cop-rig">&copy; Worlderland 2018</p>
				</div>
			</div>
			<br class="clearfloat" />
		</footer>
	';

	$clsSkipNav = '
		</div><!--===END MAIN===-->
		</div><!--===END SKIPNAV===-->
	';

	$clsDoc = '
	</div><!--===END OUTER===-->
	</body>
	</html>
	';