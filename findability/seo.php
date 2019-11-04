<?php
	$pageTitle = 'SEO Best practises | Findability Class - Assessment 4';
	$pageDescription = 'Suggestions and best practises about how to nail SEO  (Search Engine Optimasation).';
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
				include 'content/seo.html';
			?>
		</div>
	<br class="clearfloat" />
	</div>	
<?php
	echo $clsSkipNav;
	echo $footerFindability;
	echo $clsDoc
?>
	