<?php
	$pageTitle = 'AirBnB - Travel experiencing &amp; enjoying locals!';
	$pageDescription = 'Great travel tip!!! AirBnB is one of the best ways to travel the world, because it let\'s share your experience with locals by staying at their place.';
	include 'templates/template.php';
	echo $doctype;
	echo $title;
	echo $description;
	echo $meta;
	echo $facebook;
	echo $header;
	echo $opnSkipNav;
?>
	<div class="content center">
		<div class="container center">
			<?php
				include 'content/airbnb.html';
				echo $aside;
			?>
		</div>
		<br class="clearfloat" />
	</div>
<?php
	echo $clsSkipNav;
	echo $footer;
	echo $clsDoc
?>
