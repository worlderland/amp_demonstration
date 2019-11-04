<?php
$doctype = '
	<!doctype html>
	<html ⚡ lang="en">
	<head>
		<meta charset="utf-8">
	';

$title = '<title>' . $pageTitle . '</title>';

$description = '<meta name="description" content="' . $pageDescription . '">';

$meta = '
		<meta name="author" content="Alessandro Coraglia">
		<meta name="theme-color" content="#21ccd4">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<!-- AMP Boilerplate lines -->
		<link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
		<script async src="https://cdn.ampproject.org/v0.js"></script>
		<style amp-custom>
			/* CSS Document */
			
			* {
				margin: 0;
				padding: 0;
			}
			
			.clearfloat {
				font-size: 0px;
				margin: 0px;
				padding: 0px;
				clear: both;
				float: none;
				height: 0px;
				width: 0px;
				border: 0px none;
				line-height: 0px;
			}
			
			/*===FONTS EMBEDDING===*/
			/*===WORLDER part of the logo===*/
			@font-face {
				font-family: \'im_fell_french_canon_proRg\';
				src: url(\'fonts/imfellfrenchcanonpro_regular/FeFCrm27C-webfont.eot\');
				src: url(\'fonts/imfellfrenchcanonpro_regular/FeFCrm27C-webfont.eot?#iefix\') format(\'embedded-opentype\'),
					url(\'fonts/imfellfrenchcanonpro_regular/FeFCrm27C-webfont.woff\') format(\'woff\'),
					url(\'fonts/imfellfrenchcanonpro_regular/FeFCrm27C-webfont.ttf\') format(\'truetype\'),
					url(\'fonts/imfellfrenchcanonpro_regular/FeFCrm27C-webfont.svg#im_fell_french_canon_proRg\') format(\'svg\');
				font-weight: normal;
				font-style: normal;
			}/*===WORLDER part of the logo===*/
			
			/*===LAND part of the logo===*/
			@font-face {
				font-family: \'comic_reliefregular\';
				src: url(\'fonts/comic-relief/comicrelief_regular/ComicRelief-webfont.eot\');
				src: url(\'fonts/comic-relief/comicrelief_regular/ComicRelief-webfont.eot?#iefix\') format(\'embedded-opentype\'),
					url(\'fonts/comic-relief/comicrelief_regular/ComicRelief-webfont.woff\') format(\'woff\'),
					url(\'fonts/comic-relief/comicrelief_regular/ComicRelief-webfont.ttf\') format(\'truetype\'),
					url(\'fonts/comic-relief/comicrelief_regular/ComicRelief-webfont.svg#comic_reliefregular\') format(\'svg\');
				font-weight: normal;
				font-style: normal;
			}/*===LAND part of the logo===*/
			
			/*===H2s, H3s, Nav and Paragraphs===*/
			@font-face {
				font-family: \'qikki_regregular\';
				src: url(\'fonts/Qikki-Reg/qikkireg_regular/Qarmic_sans_Abridged-webfont.eot\');
				src: url(\'fonts/Qikki-Reg/qikkireg_regular/Qarmic_sans_Abridged-webfont.eot?#iefix\') format(\'embedded-opentype\'),
					url(\'fonts/Qikki-Reg/qikkireg_regular/Qarmic_sans_Abridged-webfont.woff\') format(\'woff\'),
					url(\'fonts/Qikki-Reg/qikkireg_regular/Qarmic_sans_Abridged-webfont.ttf\') format(\'truetype\'),
					url(\'fonts/Qikki-Reg/qikkireg_regular/Qarmic_sans_Abridged-webfont.svg#qikki_regregular\') format(\'svg\');
				font-weight: normal;
				font-style: normal;
			}
			@font-face {
				font-family: \'existencelight\';
				src: url(\'fonts/Existence-Light/existence_light/Existence-Light-webfont.eot\');
				src: url(\'fonts/Existence-Light/existence_light/Existence-Light-webfont.eot?#iefix\') format(\'embedded-opentype\'),
					url(\'fonts/Existence-Light/existence_light/Existence-Light-webfont.woff\') format(\'woff\'),
					url(\'fonts/Existence-Light/existence_light/Existence-Light-webfont.ttf\') format(\'truetype\'),
					url(\'fonts/Existence-Light/existence_light/Existence-Light-webfont.svg#existencelight\') format(\'svg\');
				font-weight: normal;
				font-style: normal;
			}
			
			@font-face {
				font-family: \'abelregular\';
				src: url(\'fonts/abel_regular/abel-regular-webfont.eot\');
				src: url(\'fonts/abel_regular/abel-regular-webfont.eot?#iefix\') format(\'embedded-opentype\'),
					url(\'fonts/abel_regular/abel-regular-webfont.woff\') format(\'woff\'),
					url(\'fonts/abel_regular/abel-regular-webfont.ttf\') format(\'truetype\'),
					url(\'fonts/abel_regular/abel-regular-webfont.svg#abelregular\') format(\'svg\');
				font-weight: normal;
				font-style: normal;
			}/*===H2s, H3s and Paragraphs===*/
			
			/*===GENERAL STYLES===*/
			html, body {
				width: 100%;
			}
			
			.container {
				max-width: 1080px;
			}
			
			.lft-clmn {
				width: 66%;
				padding: 20px 2%;
				border-right: 0.5px solid #BBBBBB;
			}
			
			.rgt-clmn {
				width: 25%;
				padding: 20px 2%;
			}
			
			.lft-clmn, .rgt-clmn {
				float: left;
			}
			
			.center {
				margin: 0 auto;
			}
			
			.txt-center {
				text-align: center;
			}
			
			.paral-bckg {
				position: relative;
				background-attachment: fixed;
				background-position: center bottom;
				background-repeat: no-repeat;
				background-size: cover;
			}
			
			.caption {
				padding: 20px 0 0 0;
				background-color: #EAEAEB;
			}
			
			.content {
				color: #2f3036;
				text-align: justify;
				overflow: hidden;
			}
			
			h2 {
				width: 80%;
				margin: 0 auto 40px auto;
				font-family: \'existencelight\', sans-serif;
				font-size: 2em;
				font-weight: 300;
				text-align: center;
				text-transform: uppercase;
				color:  #1F7D97;
				border-bottom: 0.5px solid #BBBBBB;
			}
			
			h3 {
				font-family: \'qikki_regregular\', sans-serif;
				font-size: 1.25em;
				font-weight: 100;
				text-align: left;
				color:  #1F7D97;
			}
			
			h4 {
				margin: 0 auto 10px auto;
				font-family: \'existencelight\', sans-serif;
				font-size: 1.5em;
				text-align: center;
				color:  #1F7D97;
			}
			
			p {
				color: #333333;
				font-family: \'abelregular\', sans-serif;
				font-size: 1.25em;
				text-align: justify;
			}
			
			a {
				text-decoration: none;
			}
			
			ul {
				list-style-type: none;
			}
			
			.hidden {
				display: none;
			}
			
			
			.out-of-screen {
				position: absolute;
				left: -1000px;
			}
			
			.bttn{
				float: left;
				margin: 20px 7.5px;
				padding: 15px 10px;
				text-align: center;
				text-transform: uppercase;
				font-family: \'qikki_regregular\', sans-serif;
				background-color: #1F7D97;
				color: #EAEAEB;
				border-radius: 10px;
				border: 0;
			}
			
			.bttn a {
				text-decoration: none;
				color: #EAEAEB;
			}
			
			.bttn:hover {
				background-color: #0DAC10;
				text-decoration: underline;
			}
			
			.image {
				display: block;
				margin: 20px auto 20px auto;
				-webkit-box-shadow: 0 10px 20px rgba(34,34,34,0.8);
				-moz-box-shadow: 0 10px 20px rgba(34,34,34,0.8);
				-ms-box-shadow: 0 10px 20px rgba(34,34,34,0.8);
				-o-box-shadow: 0 10px 20px rgba(34,34,34,0.8);
				box-shadow:  0 10px 20px rgba(34,34,34,0.8);
			}
			
			.image-big {
				width: 90%;
			}
			
			.image-med {
				width: 70%;
			}
			
			.image-sml {
				width: 50%;
			}
			
			.image-lft {
				float: left;
				margin: 10px 3% 3% 0;
			}
			
			.image-rgt {
				float: right;
				margin: 10px 0 3% 3%;
			}
			
			.pic-capt {
				margin: 10px auto 20px auto;
				color: #777777;
				font-family: \'abelregular\', sans-serif;
				font-size: 0.8em;
			}
			
			.blog-box {
				width: 86%;
				margin: 30px auto;
				padding: 20px 2.5%;
				-webkit-box-shadow: 0 0 1px 2px rgba(31,125,151,0.5);
				-moz-box-shadow: 0 0 1px 2px rgba(31,125,151,0.5);
				-ms-box-shadow: 0 0 1px 2px rgba(31,125,151,0.5);
				-o-box-shadow: 0 0 1px 2px rgba(31,125,151,0.5);
				box-shadow: 0 0 1px 2px rgba(31,125,151,0.5);
				border: 0;
			}
			
			.blog-link-container {
				margin: 20px 0 0 0;
				text-align: center;
			}
			
			.blog-link {
				font-family: \'abelregular\', sans-serif;
				font-size: 1.25em;
				font-weight: bold;
				text-transform: uppercase;
				color: #1F7D97;
			}
			
			.blog-link:hover {
				color: #0DAC10;
				text-decoration: underline;
			}
			
			.parag-link {
				color: #1F7D97;
			}
			
			.parag-link:hover {
				color: #0DAC10;
				text-decoration: underline;
			}
			
			.social-bttns-box {
				padding: 10px 0;
			}
			
			.social-bttns {
				padding-right: 5%;
			}
			
			.acc-key {
				font-weight: bold;
				color: lightcoral;
			}
			
			/*===Flipping effect===*/
			.card-container {
				position: relative;
				margin: 10px auto;
				width: 95%;
				height: 350px;
			}
			
			.card-container {
				perspective: 1000;
			}
			
			.card {
				width: 100%;
				height: 100%;
				transform-style: preserve-3d;
				transition: all 0.75s linear;
			}
			
			.card-container:hover .card {
				transform: rotateY(180deg);
			}
			
			.card-face {
				position: absolute;
				width: 100%;
				height: 100%;
				backface-visibility: hidden;
			}
			
			.card-back {
				display: block;
				transform: rotateY(180deg);
				box-sizing: border-box;
				padding: 10px;
				text-align: center;
				/*background-color: #FFFEEE;*/
				background-image: url(images/general/flip-card-bckg.jpg);
				background-position: center center;
			}
			
			.card, .card-front, .card-back {
				border-radius: 20px;
			}
			
			.card-content {
				padding: 3%;
				font-style: italic;
			}
			.card-content p {
				color: #191008;
			}
			/*===END Flipping effect===*/
			
			.show-on-mobile {
				display: none;
			}
			/*===END GENERAL STYLES===*/
			
			/*===HEADER STYLES===*/
			header {
				background-color: #2f3036;
			}
			/*===HEADER STYLES===*/
			
			/*===LOGO (H1) STYLES===*/
			.logo {
				max-width: 320px;
				padding-top: 20px;
				text-align: center;
			}
			
			/*h1 {
				margin-top: -30px;
				padding: 15px 0;
				text-align: center;
				text-transform: lowercase;
				font-weight: 100;
				font-style: normal;
				font-size: 3em;
				letter-spacing: 2px;
			}
			
			h1 .worlder {
				font-family: \'im_fell_french_canon_proRg\', serif;
			}
			
			h1 #land, #com {
				font-family: \'comic_reliefregular\', sans-serif;
			}
			
			h1 #com {
				font-size: 0.4em;
			}
			
			h1 img {
				margin: 0 4px -25px -5px;
			}
			
			#balloon {
				max-width: 46px;
			}
			
			h1 span {
				color: #EAEAEB;
			}
			
			h1 a {
				text-decoration: none;
			}
			
			h1::first-letter {
				font-size: 175%;
			}*/
			/*===END LOGO (H1) STYLES===*/
			
			/*===RESPONSIVE TOP NAV MENU===*/
			/*hiding label and checkbox*/
			input[type=checkbox], .show-menu, .show-submenu {
				display:none;
			}
			
			#top-nav{
				width: 100%;
				color:#EAEAEB;
				background-color: #2f3036;
				font-family: \'qikki_regregular\', sans-serif;
				text-transform: uppercase;
			}
			
			/*styling navigation*/
			.navigation {
				display: flex;
				list-style-type: none;
			}
			
			/*styling list items->li in navigation*/
			.navigation li {
				flex: 1;
				text-align: center;
				transition: all 0.5s ease;
			}
			
			/*styling our anchor tag*/
			.navigation li a {
				display: block;
			}
			
			.navigation li a, .show-submenu{
				padding: 15px 0;
				color: #EAEAEB;
				text-decoration: none;
			}
			
			.navigation li ul {
				display: none;
			}
			
			/*styling hover*/
			.navigation li:hover{
				background-color: #0DAC10;
				flex: 1.5;
			}
			
			/*For desktop showing the submenu only when the menu list is hovered*/
			.navigation li:hover ul {
				display: block;
				width: 27.25%;
				position: absolute;
				z-index: 1;
			}
			
			/*Underlining the anchor tags text when hovered*/
			.navigation li:hover a {
				text-decoration: underline;
			}
			
			/*Styling the submenu anchor tags when the menu list is hovered*/
			.navigation li:hover li a {
				padding: 15px 0;
				background-color: #444444;
				text-decoration: none;
			}
			
			/*Styling the anchor tags in the submenu when their list is hovered*/
			.navigation li li:hover a {
				background-color: #1F7D97;
				text-decoration: underline;
			}
			
			.active {
				background-color: #fac966;
			}
			/*===END RESPONSIVE TOP NAV MENU===*/
			
			/*===MAIN STYLES===*/
			/*===Home Page Styles===*/
			.home-pg, .thanks-pg {
				background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0.1)), url(images/home-pg/bckg.jpg);
				background-repeat: no-repeat;
				background-position: center center;
				height: 100vh;
			}
			
			.home-pg-second {
				height: 60%;
				background-image: url(images/home-pg/travel-plan.jpg);
			}
			
			#home-pg-content, #thanks-pg-content {
				height: 100vh;
			}
			
			#home-pg-content div, #thanks-pg-content div {
				display: block;
			}
			
			#home-pg-top, #thanks-pg-top {
				height: 49%;
				padding-top: 8%;
			}
			
			/*#home-pg-mid, #thanks-pg-mid {
				height: 33%;
			}*/
			
			#home-pg-bott, #thanks-pg-bott {
				height: 49%;
			}
			
			#hello, #welcome, #thanks, #get-back {
				color: #EAEAEB;
				text-align: center;
			}
			
			#hello, #get-back {
				font-family: \'comic_reliefregular\', sans-serif;
				font-size: 2em;
			}
			
			#welcome, #thanks {
				font-family: \'qikki_regregular\', sans-serif;
				font-size: 5em;
				text-transform: uppercase;
				letter-spacing: 10px;
			}
			
			.home-bttn-w {
				width: 320px;
			}
			
			#first-card-front {
				background: url(images/home-pg/australia-map.jpg) no-repeat center;
			}
			
			/*===END Home Page Styles===*/
			
			/*===AUSTRALIA Page styles===*/
			#wa-card-front {
				background: url(images/australia-pg/nature-window.jpg) no-repeat center;
			}
			
			#nsw-card-front {
				background: url(images/australia-pg/opera-house.jpg) no-repeat center;
			}
			
			#vic-card-front {
				background: url(images/australia-pg/twelve-apostoles.jpg) no-repeat center;
			}
			
			#qld-card-front {
				background: url(images/australia-pg/airlie-beach.jpg) no-repeat center;
			}
			
			#sa-card-front {
				background: url(images/australia-pg/victoria-square.jpg) no-repeat center;
			}
			
			#tas-card-front {
				background: url(images/australia-pg/tasmanian-devil.jpg) no-repeat center;
			}
			
			#nt-card-front {
				background: url(images/australia-pg/ayers-rock.jpg) no-repeat center;
			}
			
			#act-card-front {
				background: url(images/australia-pg/parliament-house.jpg) no-repeat center;
			}
			/*===END AUSTRALIA Page styles===*/
			
			/*===Contact page styles===*/
			#contactForm p {
				padding-top: 30px;
			}
			
			#contactForm fieldset {
				width: 100%;
				border: none;
			}
			
			.form-content {
				width: 90%;
			}
			
			.form-content p {
				padding: 0;
			}
			
			.star {
				font-weight: bold;
				color: orange;
			}
			
			.form-content p {
				padding-bottom: 15px;
			}
			
			.form-field label, .form-field input, .form-field textarea, #submit {
				font-family: \'abelregular\', sans-serif;
				font-size: 1em;
			}
			
			.form-field label {
				font-weight: bold;
			}
			
			.form-field input, .form-field textarea {
				width: 97%;
				margin: 10px 0px;
				padding: 10px 1.5%; 
				-webkit-box-shadow: 0 0 1px 2px rgba(31,125,151,0.5);
				-moz-box-shadow: 0 0 1px 2px rgba(31,125,151,0.5);
				-ms-box-shadow: 0 0 1px 2px rgba(31,125,151,0.5);
				-o-box-shadow: 0 0 1px 2px rgba(31,125,151,0.5);
				box-shadow: 0 0 1px 2px rgba(31,125,151,0.5);
				border: 0;
			}
			
			.form-field textarea {
				height: 200px;
			}
			
			.error {
				-webkit-box-shadow: 0 0 1px 2px rgba(255,50,50,0.5);
				-moz-box-shadow: 0 0 1px 2px rgba(255,50,50,0.5);
				-ms-box-shadow: 0 0 1px 2px rgba(255,50,50,0.5);
				-o-box-shadow: 0 0 1px 2px rgba(255,50,50,0.5);
				box-shadow: 0 0 1px 2px rgba(255,50,50,0.5);
			}
			
			.form-field input, .form-field textarea {
				-webkit-appearance: none;
			}
			/*===END of Contact page styles===*/
			
			#thanks-pg-top {
				height: 45%;
				padding-top: 15%;
			}
			
			#thanks-pg-bott {
				height: 45%;
			}
			
			.sitemap ul {
				list-style-type: circle;
				margin-left: 25px;
			}
			
			.sitemap ul ul {
				list-style-type: square;
				margin-left: 50px;
			}
			/*===END MAIN STYLES===*/
			
			/*===FOOTER STYLES===*/
			footer {
				background-color: #2f3036;
			}
			
			/*===RESPONSIVE BOTTOM NAV MENU===*/
			#bottom-nav {
				width: 50%;
				color:#EAEAEB;
				background-color: #2f3036;
				font-family: \'existencelight\', sans-serif;
				font-size: 0.9em;
				text-transform: uppercase;
			}
			
			/*styling navigation*/
			#bottom-nav ul, #terms-nav ul {
				display: flex;
				list-style-type: none;
			}
			
			/*styling list items->li in navigation*/
			#bottom-nav li, #terms-nav li {
				flex: 1;
				text-align: center;
			}
			
			#bottom-nav li a, #terms-nav li a {
				display: block;
				padding: 30px 0 10px 0;
				color: #EAEAEB;
				text-decoration: none;
			}
			
			/*styling hover*/
			#bottom-nav li:hover a, #terms-nav li:hover a {
				color: #0DAC10;
			}
			
			/*Underlining the anchor tags text when hovered*/
			#bottom-nav li:hover a {
				text-decoration: underline;
			}
			/*===END RESPONSIVE BOTTOM NAV MENU===*/
			
			/*===RESPONSIVE TERMS NAV MENU===*/
			#terms-nav {
				width: 40%;
				color:#EAEAEB;
				background-color: #2f3036;
				font-family: \'existencelight\', sans-serif;
				font-size: 0.75em;
			}
			/*===END RESPONSIVE TERMS NAV MENU===*/
			
			.footer-social {
				width: 30%;
				padding: 30px 0 15px 0;
			}
			
			.footer-social ul {
				display: flex;
				text-align: center;
			}
			
			.footer-social li {
				flex: 1;
			}
			
			.footer-social .fa {
				color: #1F7D97;
				font-size: 2em;
			}
			
			.cop-rig-container {
				display: block;
				float: left;
				width: 100%;
				padding: 10px 0 20px 0;
			}
			
			.cop-rig {
				font-size: 0.8em;
				color: #EAEAEB;
				text-align: center;
			}
			/*===END FOOTER STYLES===*/
			
			/*===SIDEBAR STYLES===*/
			/*===Social Network Buttons in sidebar===*/ 
			.sidebar-bttn {
				margin: 40px 0;
			}
			
			.sidebar-bttn a {
				float: none;
				margin: 0 auto;
			}
			
			.sidebar-social {
				margin: 20px 0;
			}
			
			.sidebar-social ul {
				width: 100%;
				display: flex;
				text-align: center;
			}
			
			.sidebar-social li {
				flex: 1;
			}
			.sidebar-social .fa {
				color: #1F7D97;
				font-size: 2em;
			}
			
			.fb:hover {
				color: #3B5998;
			}
			
			.tw:hover {
				color: #00aced;
			}
			
			.pn:hover {
				color: #C92228;
			}/*===END Social Network Buttons in sidebar===*/
			/*===END SIDEBAR STYLES===*/
			
			/*===STYLES FOR TABLETS===*/
			@media only screen and (max-width: 1023px) {
			
				/*Switching off the parallax for tablets and smartphones===*/
				.paral-bckg {
					background-attachment: scroll;
				}
			
				/*showing some stuff for tablets and smartphones===*/
				.show-on-mobile {
					display: block;
				}
			
				h1 {
					margin-top: -20px;
					font-size: 2em;
					letter-spacing: 1px;
				}
			
				h1 img {
					height: 40px;
					margin: 0 2px -15px -2px;
				}
			
				h1 span {
					color: #EAEAEB;
				}
			
				/*===RESPONSIVE MENU STYLES===*/
				#hamburger {
					font-size: 1.5em;
				}
			
				/*styling our show menu button*/
				.show-menu {
					background: #2f3036;;
					display: flex;
					cursor: pointer;
					padding: 5px 0;
					justify-content: center;
				}
			
				.show-submenu{
					display: block;
					padding: 10px 0;
					text-align: center;
				}
			
				.show-submenu, .has-submenu{
					background-color: #444444;
				}
			
				.rotate-submenu {
					-webkit-animation: rotate 3.5s infinite;
					-moz-animation: rotate 3.5s infinite;
					-ms-animation: rotate 3.5s infinite;
					-o-animation: rotate 3.5s infinite;
					animation: rotate 3.5s infinite;
				}
			
				@keyframes rotate {
					100% {
						-webkit-transform: rotateX(360deg);
						-moz-transform: rotateX(360deg);
						-ms-transform: rotateX(360deg);
						-o-transform: rotateX(360deg);
						transform: rotateX(360deg);
					}
				}
			
				/*hiding our navigation*/
				.navigation, .navigation li:hover ul {
					display: none;
				}
			
				.navigation li:hover{
					background-color: #2f3036;
				}
			
				.navigation li:hover ul {
					width: 100%;
					position: unset;
				}
				
				/*displaying our list items as block element; if checkbox is check*/
				input[type=checkbox]:checked ~ .navigation{
					display: block;
				}
				
				/*removing border left from the pseudo class*/
				.navigation li:not(:first-child){
					border: 0;
				}
				/*===RESPONSIVE MENU STYLES===*/
			
				/*===HOME Page mobile styles===*/
			
				.card-container:hover .card {
					transform: none;
				}
			
				#hello, #get-back {
					font-size: 1.5em;
				}
				
				#welcome, #thanks {
					font-size: 5em;
				}
			
			}
			
			/*STYLE FOR MOBILE*/
			@media only screen and (max-width: 600px) {
			
				.lft-clmn {
					border-right: 0;
				}
			
				.rgt-clmn {
					border-top: 0.5px solid #BBBBBB;
				}
			
				.lft-clmn, .rgt-clmn {
					width: 95%;
				}
			
				#hello {
					font-size: 1.25em;
				}
			
				#welcome {
					font-size: 2.25em;
				}
			
				#thanks {
					font-size: 2em;
				}
			
				.card-content {
					font-size: 0.8em;
				}
			
				/*FOOTER MENU STYLES*/
				#bottom-nav, #terms-nav {
					width: 100%;
					padding: 15px 0;
				}
			
				/*styling navigation*/
				#bottom-nav ul, #terms-nav ul {
					width: 100%;
					display: unset;
				}
			
				/*styling list items->li in navigation*/
				#bottom-nav li, #terms-nav li {
					width: 100%;
					display: block;
					float: left;
				}
			
				#bottom-nav li a, #terms-nav li a {
					padding: 5px 0;
				}
			
				.footer-social {
					width: 100%;
					display: block;
					float: left;
				}/*ENDFOOTER MENU STYLES*/
			
			}/*END STYLES FOR MOBILE*/
    	</style>
		<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
		<link rel="canonical" href=".">
		<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
		<!-- END of AMP Boilerplate lines -->
		<!-- <link rel="stylesheet" href="css/styles.css" type="text/css"> -->
		<link rel="icon" href="images/browser.png" type="image/png">
	</head>

	<body>
	';

/*$facebook = '
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
	';*/

$header = '
	<div id="outer">	
		<header>
			<!--<h1><a href="index.php"><span class="worlder">W</span><amp-img id="balloon" src="images/World-Balloon.svg" alt="worlderland logo"><span class="worlder">rlder</span><span id="land">land</span><span id="com">.com</span></a></h1> -->
			<div class="container center">
				<div class="logo center">	
					<a href="./"><amp-img src="images/Worlderland.svg" alt="worlderland logo" width="300" height="80"></a>
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
				<amp-img src="images/side-bar/me.jpg" class="image image-big center" alt="me" width="300" height="225" layout="responsive"></amp-img>
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
