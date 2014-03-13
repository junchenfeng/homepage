<?php
/* Here are the functions utilized in this page */
include "function/print_header.php";
include "function/print_foot.php";
include "function/print_block.php";
?>

<html>
<head>
	<link  rel = "stylesheet" type = "text/css" href = "style_index.css">
	<link  rel = "stylesheet" type = "text/css" href = "style_block.css">
</head>

<body>
	<!-- print header -->
	<?php echo pageHead(4,0)?>
	
	<!-- Here is the main body -->
	<!-- print the menu -->
	<?php 
	
		$currrent_block_index = 999; /* all page with links */
		echo print_kitchen_navi($currrent_block_index,0)
	?>
	<!-- print the main block -->
		<div id = "displayPanel">
			<div id = "unit">
				<h1> &quot If everything fails, be the funny guy. &quot</h1>
					<div align= "right">
						<p> -- Jay to Manny in <i> Modern Family</i></p>
					</div>			
			</div>
			
			
		</div>	
	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>			