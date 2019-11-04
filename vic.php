<?php
	$pageTitle = 'Experience Victorias - Australia | Worlderland';
	$pageDescription = 'Victoria and its capital Melbourne have lots and lots to see! First and foremost the widely famous Great Ocean Road! CLick here for more suggestions!';
	include 'templates/template.php';
	echo $doctype;
	echo $title;
	echo $description;
	echo $meta;
	//echo $facebook;
	echo $header;
	echo $opnSkipNav;
?>				
	<div class="content center">
		<div class="container center">
		<?php
			include 'content/vic.html';
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