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
		
		$currrent_section_index = 2;
		echo print_on_shelf_navi($currrent_section_index);		
	?>
	<!-- print the main block -->
			<div id = "displayPanel">
				<div id = "unit">
					<h2>Why Shelved</h2>
					No available data on job posting and job turnout.<br>
					Scraped data are too irregular to process, whose representativeness also begs questions.<br>
					Need to formulate testable hypothesis.
				</div>
				
				<div id= "unit">
				<h2> Train for Jobs that do not exist?</h2>
				<p>
					The technology for a bunch of high paying jobs does not even exist in 30 years or even 5 years. Nobody in 1983 could see Internet coming, nor would anyone see a multi-billion 					dollar app market when Stephen Jobs introduced iPhone.<br>
					The production technology is advanced in a pace never seen in human history.
				
				<p>
					So how do workers adapt to these technology?<br>
					Where do they get the training?
				
				<p>
					If the technology is new enough, school won't be much help. So one either has to teach themselves or learn by doing at a firm that adopts that technology.<br>
					However, the conundrum is that such training is likely to increase general human capital that is in demand. <br>
				
				
				</div>
				
				<div id="unit">
					<h2>Becker Economics</h2>
					<p>
						No firm on a competitive labor market will pay for the training cost of general human capital.<br>
						Workers have to pay for it themselves, either out of the pocket or in lower wages.<br>	
					<p>
						Programming language of any kind is usually a general human capital, no matter how new or how "cult" it is.<br>
						Thus Becker Economics predict that no firm (hard to imagine monopoly programming firm) would pay for the training of any kind of programming language.<br>
						On top of that, train a noob is a very costly effort for the firm, considering the opportunity cost of the senior programmer, whose salary is usually very high.<br>
				</div>
				
				<div id="unit">
					<h2>Test</h2>
					<p>It is my impression that few programmer post requires no prior experience. Preliminary scraped job posting data also support this "sterotype".<br>
					
					<p> Another observation is that self-help programming class and community are very successful, way more vibrant than any other online community I know of.<br>
					
					<p> One last ancedotal evidence is google search pattern. If one googles "objective c", the programming language for iOS, it is likely they are trying to learn the language since prior to 2008, it is one obscure language that nobody learns, at least not at school.
					
					
					According to <a href = "http://www.google.com/trends/explore#q=objective%20c&cmpt=geo" target=_blank>Google Trends</a>, the top 5 countries are:<br>
					(1)India<br>
					(2)Hong Kong<br>
					(3)South Korea<br>
					(4)Belarus<br>
					(5)Singapore<br>
					
					<p> These are all places where iPhone is a great hit and well educated youth are abundant, aka vibrant market for newly mint iOS programmers and app firms.<br>
					This may be a bad example since creating app can be a one-man shop. However, other main stream language, such as C, C++, Java, python, all have weird real world counterpart, thus not clean for google trend analysis. 
					
				</div>
				
			</div>	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>