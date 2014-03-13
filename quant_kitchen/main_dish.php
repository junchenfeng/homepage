<?php
/* Here are the functions utilized in this page */
include "../function/print_header.php";
include "../function/print_foot.php";
include "../function/print_block.php";
?>

<html>
<head>
	<link  rel = "stylesheet" type = "text/css" href = "../style_index.css">
	<link  rel = "stylesheet" type = "text/css" href = "../style_block.css">
</head>

<body>
	<!-- print header -->
	<?php echo pageHead(3,1)?>
	
	<!-- Here is the main body -->
	<!-- print the menu -->
	<?php 
	
		$currrent_block_index = 0; /* all page with links */
		echo print_kitchen_navi($currrent_block_index,0)
	?>
	<!-- print the main block -->
		<div id = "displayPanel">
			<div id = "unit">
					<h3>
						Tofu Avocado Salad
					</h3>
					<p>
						(1) Slice Avocado into chunks <br>
						(2) Slice the <b>SILKY</b> tofu into chunks <br>
						(3) Chop green onions into small bits, which will give the salad a spicy taste <br>
						(4) Mix all the materials together and season it with a good splash of soy sauce and seaseme oil.<br>
					</p>
		
				</div>	
		</div>

	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>			