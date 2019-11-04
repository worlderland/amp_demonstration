<?php
	$pageTitle = 'Resources | Findability Class - Assessment 4';
	$pageDescription = 'Resources found and followed, regarding websites findability.';
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
				include 'content/resources.html';
			?>
		</div>
	<br class="clearfloat" />
	</div>	
<?php
	echo $clsSkipNav;
	echo $footerFindability;
	echo $clsDoc
?>
	