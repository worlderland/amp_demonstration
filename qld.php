<?php
	$pageTitle = 'Experience Queensland - Australia | Worlderland';
	$pageDescription = 'Queensland is where the wonderful Great Barrier Reef is located; probably the largest and most beautiful reef barrier in the World...';
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
		include 'content/qld.html';
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