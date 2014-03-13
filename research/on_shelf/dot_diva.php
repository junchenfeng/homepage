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
		
		$currrent_section_index = 0;
		echo print_on_shelf_navi($currrent_section_index);		
	?>
	<!-- print the main block -->
			<div id = "displayPanel">
				<div id = "unit">
				<h2>Why Shelved?</h2>
				
				<p>	Need to require college application data from NLSY, currently N/A.
				<p>	The topic is well studied with this dataset, new evidence/data required to make breakthrough. 
				<p>	
					<div id="download"> 
						<a href="../../files/script_gender_gap_major_choice_021413.pdf" target=_blank>Current Working Paper</a>
					</div>
				</div>
				
				<div id = "unit">
					<h2><a href = "http://www.dotdiva.org/" target=_blank>Dot Diva</a></h2>
					<p>Created by WGBH Educational Foundation, it tries to create a positive image for female geeks so as to attract more young women to STEM field.<br>
					<p>
					<img src="http://www.dotdiva.org/i/home/i_webisode.jpg">
				</div>
				
				<div id = "unit">
					<h2>Question</h2>
						<p> Nowadays, Girls are kicking boys's ass in school. If one looks at the STEM GPA, girls are also kicking ass. Yet few of them ends up in general science. 
						<p> This stylezed fact is so vividly depicted by CBS's geek show "The Big Bang Theory", where boys are all geeks and girls are whatever but geeks, with few exceptions.
						<p> Question No.1: Where do all the Dot Divas go?<br>
							Question No.2: Why? 
				</div>
				
				<div id = "unit">
					<h2>Fact from NLSY97</h2>
					<p> NLSY 97 shed some lights on the first question.
					<p> Among girls who take calculus, 29% does not go to college, 22% lands in a social science major, 18% lands in STEM, 14% lands in Econ, 6% in pre Med, 4% in other and 3% in humanity. 
					<p> In comparison, for boys, 36% lands in STEM, 32% does not go to college, 15% goes to Econ, 8% goes to Social Science, 35 in other, 2% in pre-med and 2% in hummanity. 
				</div>			
				
				<div id= "unit">
					<h2> Hypotheses</h2>
					<p>I consider two hypothese here.
					
					<p>The first is the preference hypothesis. Girls are less interested in STEM so they don't do science, whether this is by nature of by nurture.<br>
					There is no direct test against this hypothesis. However, the take up rate of hardcore calculus class is equal between boys and girls. And these girls, in general, do not end up in STEM either.<br>
					If girls do hate STEM, why do they take calculus in the first place? One of my collegues does suggest that maybe girls do this to make themselves look good in college application. 
					
					<p>The second is the ability hypothesis. Girls are no good in STEM so they don't survive.<br>
					If one looks at GPA, girls are in fact do better in almost all levels.<br>
					Howevever, if one looks at SAT score, girls do significantly worse than their male counterparts. This phenomenon is well documented, although not well explained.
					So it is empirically not clear that girls are less gifted in STEM, especially when most STEM work are not conducted in competitive environment, such as SAT.
					
					<p>Bottom line, neither hypotheis fully explain the puzzle but the definitive empirical jury is still out.
					
				</div>
			</div>	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>