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
	<?php echo pageHead(4,1)?>
	
	<!-- Here is the main body -->
	<!-- print the menu -->
	<?php 
	
		$currrent_block_index = 0; /* all page with links */
		echo print_humor_navi($currrent_block_index,0)
	?>
	<!-- print the main block -->
		<div id = "displayPanel">
			<div id = "unit">
				<h2> One Day More: Euro Crisis Version</h2>
				<iframe width="420" height="315" src="http://www.youtube.com/embed/WnQ0J7ZclUI"></iframe>
				<p>Please enable captions!
		
				</div>	
			</div>
			
			<div id = "unit">
				<h2>Ready To TA a Notorious Class </h2>
				<img src = "../image/d&o_ta_joke.jpg" alt = "d&o_ta_joke">
			</div>
			
			
		</div>	
	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>			