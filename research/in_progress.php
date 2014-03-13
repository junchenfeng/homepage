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
	<!-- print the menu -->
	<?php 
		/* print the block navigation bar */
		$currrent_block_index = 0; 
		$lv_index = 0;
		echo print_research_navi($currrent_block_index, $lv_index);
		/* print the section navigation bar */
		$currrent_section_index = 999;
		echo print_in_progress_navi($currrent_section_index);
		
	?>
	<!-- print the main block -->
			<div id = "displayPanel">
				<div id = "unit">
				<h2>Estimating Propensity Score of a mixture DGP</h2>
					<p>Propensity score plays a central role in the program evaluation literature.<br>
					Whether one prefers matching or structural MTE families, propensity needs to be estimated.
					
					<p>The profession takes a view that this problem is solved by Hirano, Imbens and Ridder(2003).<br>
					However, I take a different view.
				</div>
				
				<div id="unit">
				<h2> Leverage Online Resume Data</h2>
					<p>I am currently RA for a project that uses <em>"Career Builder"</em> database to understand job search behavior and wage stickiness.
										
				</div>
				
				
			</div>	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>