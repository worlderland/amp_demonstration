<?php
	$pageTitle = 'Privacy Policies | Worlderland';
	$pageDescription = 'Did my best trying to be as shorter as possible... Please read through our privacy policies.';
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
				include 'content/privacy.html';
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
	