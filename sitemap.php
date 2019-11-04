<?php
	$pageTitle = 'Site Map | Worlderland';
	$pageDescription = 'This is the Worlderland website map. A great way to get around and quickly find what you are looking for!.';
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
				include 'content/sitemap.html';
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
	