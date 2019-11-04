<?php	
	$pageTitle = 'Welcome to Worlderland | Travel tips';
	$pageDescription = 'Travel is Alessandro\'s biggest passion and on this website, he shares his travel experiences and travel tips, to help travellers getting on top of World\'s exploring issues!';
	include 'templates/template.php';
	echo $doctype;
	echo $title;
	echo $description;
	echo $meta;
	//echo $facebook;
	echo $header;
	echo $opnSkipNav;
?>
		<div class="home-pg paral-bckg">
			<?php
				include 'content/index.html';
				echo $footer;
			?>
		</div>
<?php
	echo $clsSkipNav;		
	echo $clsDoc
?>