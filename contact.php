<?php
	$pageTitle = 'Let\'s hear from you! | Contact Worlderland';
	$pageDescription = 'I can\'t wait to hear your feedbacks, advices and tips about my website! Please fill up the form and I\'ll be in touch as soon as I possibly can!';
	include 'templates/template.php';
	echo $doctype;
	echo $title;
	echo $description;
	echo $meta;
	//echo $facebook;
	echo $header;
	echo $opnSkipNav;
?>
	<div class="center">
		<div class="container center">
			<?php
				include 'content/contact.html';
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
