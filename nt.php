<?php
	$pageTitle = 'Experience the Northern Territory - Australia | Worlderland';
	$pageDescription = 'The Northern Territory is located in central-north of Australia and it probably the less populated territory in the whole continent...';
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
			include 'content/nt.html';
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