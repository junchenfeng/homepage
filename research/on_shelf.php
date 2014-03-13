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
	<?php echo pageHead(1,1)?>
	
	<!-- Here is the main body -->
	
	
	<?php 
		/* print the block navigation */
		$currrent_block_index = 1; 
		$lv_index = 0;
		echo print_research_navi($currrent_block_index, $lv_index);
		/* print the section navigation */
		$currrent_section_index = 999;
		echo print_on_shelf_navi($currrent_section_index);		
	?>
	<!-- print the main block -->
			<div id = "displayPanel">
				<div id="unit">
				<p>
					These are the researches that I saw the potential and did the preliminary work. 
					Although they failed to deliver promising result, I still think they are empirically viable or theoretically important.
					Thus I shelv them for another day.
				
				
				<p>
					As professor Levitt said, if it fails, better earlier than later.
				
				</div>
			</div>	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>