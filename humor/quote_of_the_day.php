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
	
		$currrent_block_index = 1; /* all page with links */
		echo print_humor_navi($currrent_block_index,0)
	?>
	<!-- print the main block -->
		<div id = "displayPanel">

			<div id = "unit">
				<h2>10/26/2013</h2>
				<p>
					If it is not important, why do you even ask? <br>
					-- <i>Hanzhe Zhang</i> countered an idiotic question during a seminar					
			</div>
			<div id = "unit">
				<h2>02/17/2013</h2>
				<p>
					When I first heard of Ashenfelter's dip, I thought it was a dance move. <br>
					-- <i>David Card</i> during a Booth Seminar				
			</div>

			<div id = "unit">
				<h2>02/13/2013</h2>
				<img src = "../image/mathPhDRidicule.jpg">		
			</div>
			
			<div id = "unit">
				<h2>01/22/2013</h2>
				<p>
					As for getting ideas, I would prefer watching TV to reading economic journals.<br>
					You know, maybe you can get an idea from cartoon like Lion King. <br>
					-- <i>Steven Levitt</i> during his class		
			</div>
			
			<div id = "unit">
				<h2>01/09/2013</h2>
				<p>
					Taking 4 course for grade in a quarter (in Uchicago) is like taking a quarter long flue shot.<br>
					You know it is helpful but it hurts.<br>
					-- <i>Carolyn Sloane</i>		
			</div>
			
			<div id = "unit">
					<h2>05/09/2012</h2>
					<p>
						Theory is when you know everything but nothing works.<br>
						Practice is when everything works but no one knows why.<br>
						In our lab, theory and practice are combined: nothing works and no one knows why.	
			</div>
			


	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>			