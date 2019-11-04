<?php
	$pageTitle = 'Vocabulary | Findability Class - Assessment 4';
	$pageDescription = 'A little bit about some of the terms used in findability.';
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
				include 'content/vocabulary.html';
			?>
		</div>
	<br class="clearfloat" />
	</div>	
<?php
	echo $clsSkipNav;
	echo $footerFindability;
	echo $clsDoc
?>
	