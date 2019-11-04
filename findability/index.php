<?php
	$pageTitle = 'Findability Class - Assessment 4';
	$pageDescription = 'Mini-site made for the Findability class.';
	include '../templates/template.php';
	echo $doctype;
	echo $title;
	echo $description;
	echo $metaFindability;
	echo $headerFindability;
	echo $opnSkipNav;
?>
	<div class="content center">
		<div class="container center">
			<?php
				include 'content/index.html';
			?>
		</div>
	<br class="clearfloat" />
	</div>	
<?php
	echo $clsSkipNav;
	echo $footerFindability;
	echo $clsDoc
?>
	