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
	<?php echo pageHead(2,0)?>
	
	<!-- Here is the main body -->
	<!-- print the menu -->
	<?php 
	
		$currrent_block_index = 999; /* all page with links */
		echo print_al_navi($currrent_block_index)
	?>
	<!-- print the main block -->
		<div id = "displayPanel">
			<div id = "unit">
				<p> 
				Confucious said:<br>
					I don't give out hints unless the student pulls his hair off. <br>
					I don't give out answers unless it is in his mind but falls short by his mouth.<br>
				    If I point to one corner of the room and he cannot associate it with the rest three, I do not teach him new stuff.<br>
					
				
				<p>
					For the most part of human history, education is highly individualized.<br>
					The factorilization did not happen until late 1800s when mass education was subject to the production technology constraint.<br>
					Today, machine learning, Internet and tablet have break the shackle.
					
				
				<p>
					<font color="#800000">It is the time to reimagine education.</font>
				
			</div>
		</div>	
	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>