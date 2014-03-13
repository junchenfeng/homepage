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
	<?php echo pageHead(3,0)?>
	
	<!-- Here is the main body -->
	<!-- print the menu -->
	<?php 
	
		$currrent_block_index = 999; /* all page with links */
		echo print_kitchen_navi($currrent_block_index,0)
	?>
	<!-- print the main block -->
		<div id = "displayPanel">
			<div id = "unit">
					<p>
						Cooking is like Quant because one needs to try 100 combinations before 1 recipe working out.<br>
						Cooking is unlike Quant because for the 99 failures, someone is getting some utility of finishing the food, hopefully positive utility.
					</p>
					
					<p>
						As a medicore cook of both Western and Eastern cusine, I am aiming for the <span id="codeMaroon">fusion</span>:more Western than classical Eastern dish and vice versa<br>
					</p>
					
					
					<p>
						Another interest of mine is to explore and revive ancient Chinese food recipe.<br>
						This idea is inspired by the British TV Series <a href="http://en.wikipedia.org/wiki/The_Supersizers..." target="_blank">The Supersizers</a>. It is a set of brilliant documentaries that dress the part, eat the part and live the part of various eras ranging from Rome to 1980s 						Britain.<br>
					</p>	
			</div>
			
			
		</div>	
	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>			