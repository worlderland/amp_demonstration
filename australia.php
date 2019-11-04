<?php
	$pageTitle = 'Australia... Wild beauty | Worlderland';
	$pageDescription = 'Australia is a young land of wild beauty, colorful landscapes and big adventures. Please check out my travel advices and unmissable spots!';
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
					include 'content/australia.html';
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
