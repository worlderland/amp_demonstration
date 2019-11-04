<?php
	$pageTitle = 'Experience Western Australia - Australia | Worlderland';
	$pageDescription = 'I personally made WA (and Perth) my second home. I fell in love with its infinite beaches, its wildness and with its amazing weather...';
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
			include 'content/wa.html';
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