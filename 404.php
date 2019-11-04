<?php
	$pageTitle = 'Something went wrong | Error 404';
	$pageDescription = 'Error 404 - We are sorry about this issue. We are working on to fix it.';
	include 'templates/template.php';
	echo $doctype;
	echo $title;
	echo $description;
	echo $meta;
	echo $header;
	echo $opnSkipNav;
?>
		<div class="home-pg paral-bckg">
			<?php
				include 'content/404.html';
				echo $footer;
			?>
		</div>
<?php
	echo $clsSkipNav;		
	echo $clsDoc
?>