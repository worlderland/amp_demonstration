<?php
	$pageTitle = 'Be moneywise while travelling: Transferwise | Worlderland';
	$pageDescription = 'Nobody has probably given you such a valuable travel tip! Transferwise is the best way to forget different currencies while travelling! Let me explain how...';
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
				include 'content/transferwise.html';
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
