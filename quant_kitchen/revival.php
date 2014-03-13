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
	
		$currrent_block_index = 1; /* all page with links */
		echo print_kitchen_navi($currrent_block_index,0)
	?>
	<!-- print the main block -->
		<div id = "displayPanel">
			<div id = "unit">
						<h3>Green Onion Ribs</h3>
								
					<p>
						In "Recipe of Sui Garden", Mei Yuan suggested to substitute the bones of rib with stalks of green onions and BBQ it.
					</p>
					
					<p>
						Here is my improved version that focuses on get rid of blood smell, because the pork rib sold in super markets are not as fresh as in the 1800s China.<br>
						(1) Boil the rib in the cold water on the lowest possible heat on the range.<br>
						 <i>The idea is wash the blood residual out of the rib while keep the rib soft.</i><br>
						(2) Debone the rib and rub the inside of the rib with pepper salt.<br>
						(3) Stuff a stalk of green onion in the place of the rib bone.<br>
						(4) BBQ it with the sauce you like. Or "grill" it in the oven. <br>
					</p>
		
				</div>	
		</div>

	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>			