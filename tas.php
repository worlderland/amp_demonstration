<?php
	$pageTitle = 'Experience Tasmania - Australia | Worlderland';
	$pageDescription = 'Lots of travel advices for visting the only island in Australia (apart for Astralia itself), Tasmania.';
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
			include 'content/tas.html';
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