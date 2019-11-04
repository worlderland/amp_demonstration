<?php
	$pageTitle = 'Experience New South Wales - Australia | Worlderland';
	$pageDescription = 'The New South Wales, with its capital Sydney, was the first colony of Australia. It is rich of history and beautiful landscapes...';
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
				include 'content/nsw.html';
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