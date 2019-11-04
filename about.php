<?php
	$pageTitle = 'Who\'s behind Worlderland...?!';
	$pageDescription = 'Here you can find a brief story about Alessandro, the person behind Worlderland. Read about his journey that brought him here.';
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
				include 'content/about.html';
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
	