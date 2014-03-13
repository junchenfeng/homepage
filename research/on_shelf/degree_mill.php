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
	
		$currrent_block_index = 1; 
		$lv_index = 1;
		echo print_research_navi($currrent_block_index, $lv_index);
		
		$currrent_section_index = 1;
		echo print_on_shelf_navi($currrent_section_index);		
	?>
	<!-- print the main block -->
			<div id = "displayPanel">
				<div id = "unit">
					<h2>Why Shelved</h2>
					Severe selection bias issue.<br>
					Better to merge with another data source to get wage impact (tax return ideally)<br>
					Need to construct a comparison group if want to compare employment spells.
					<div id="download"> 
						<a href = "../../files/degreeMill_script_20130415.pdf" target = "_blank">Current Working Papers</a>	
					</div>						
				</div>
				
				
				<div id = "unit">
					<h2>Rampant Degree Mill</h2>
					<p>
						Allegedly, there have been a million fake degree sold.<br>
						Who are buying these degrees?<br>
						How does the fake degree change their career?<br>
								

				</div>
				
				<div id = "unit">
					<h2>Use Scraped Resume Data</h2>
					<p>
						To my best knowledge, there are no academic papers on this topic.<br> 
						I scrapte "<em>Indeed.com</em>" for resumes that list known degree mills on their education achievement.<br>
						Therefore, I am able to produce some empirical evidence, albeit descriptive on this issue.
					
					<p>
						I compared the graduates from known degree mill, legit online college and community college.<br>
						I compare their labor market performance before and after the degree. I also did a bit analysis on how they do during the 2008-2011 financial crisis.
					
					
					<p>
						The bottom line from the previous analysis is that those three types of degree holders behave much alike in the labor market.
						
					
	
				</div>
				
				
			</div>	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>