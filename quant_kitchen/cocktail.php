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
					<h3>Rino Colada </h3>
						<ul>
							<li>
								30 ml rice wine, preferablly sparkling rice makgeolli.<br>
								SRM is not as strong as rum. Its sweet and sour flavor compliments that of coconut and pinapple. <br>
								SRM is also carbonated, an interesting twist for the cocktail.<br>
							</li>
							<li>
								30 ml coconut cream
							</li>
							<li>
								30 ml pinapple juice
							</li>
							
						</ul>	
		
				</div>	
		</div>

	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>			