<?php
	$pageTitle = 'Terms of use | Worlderland';
	$pageDescription = 'Terms and conditions of use of Worlderland\'s services.';
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
				include 'content/terms.html';
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
	