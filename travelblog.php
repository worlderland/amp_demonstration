<?php
	$pageTitle = 'Travel blog &amp; Travel tips | Worlderland';
	$pageDescription = 'Definitely the most valuable and precious page on this website, with lots of travel advices about any situation I\'ve experienced!';
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
				include 'content/travelblog.html';
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
