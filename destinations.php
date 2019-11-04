<?php
	$pageTitle = 'The World in your hands | Worlderland Destinations';
	$pageDescription = 'Check out all the amazing places that the World has to offer along with the bset travel tips to maximise your experience.';
	include 'templates/template.php';
	echo $doctype;
	echo $title;
	echo $description;
	echo $meta;
	//echo $facebook;
	echo $header;
	echo $opnSkipNav;
?>
	<div class="content center">
		<div class="container center">
			<?php
				include 'content/destinations.html';
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