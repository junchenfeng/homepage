<?php
/* Here are the functions utilized in this page */
include "../../function/print_header.php";
include "../../function/print_foot.php";
include "../../function/print_block.php";
?>

<html>
<head>
	<link  rel = "stylesheet" type = "text/css" href = "../../style_index.css">
	<link  rel = "stylesheet" type = "text/css" href = "../../style_block.css">
</head>

<body>
	<!-- print header | lv index is 2 -->
	<?php echo pageHead(1,2)?>
	
	<!-- Here is the main body -->
	<!-- print the menu -->
	<?php 
	
		$currrent_block_index = 0; 
		$lv_index = 1;
		echo print_research_navi($currrent_block_index, $lv_index);
		
		$currrent_section_index = 1;
		echo print_in_progress_navi($currrent_section_index);		
	?>
	<!-- print the main block -->
			<div id = "displayPanel">
				<div id = "unit">
				<h2>To be continued...</h2>
				
				</div>
				
			</div>	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>