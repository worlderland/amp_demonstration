<?php
	$pageTitle = 'Experience South Australia - Australia | Worlderland';
	$pageDescription = 'Most important travel tip for South Australia: the shark cage in Port Lincoln! Face your fears diving with one of the largest predators of our oceans!';
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
			include 'content/sa.html';
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