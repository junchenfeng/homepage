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
	<?php echo pageHead(2,1)?>
	
	<!-- Here is the main body -->
	<!-- print the menu -->
	<?php 
	
		$currrent_block_index = 1; 
		echo print_al_navi($currrent_block_index);
	?>
	
	<!-- print the main block -->
			<div id = "displayPanel">
				<div id = "wordBlock">
				
				<div id = "unit">
					<h2>Core analytics:	</h2>
					
					<p>
						For a technical note on unidimensional logistic IRT models and its empirical test result, see presentation slides <a href = "../p/slides/IRT_20131130.pdf" target = "_blank">HERE</a>
						
					
					<p>
						An literature review of M-IRT models is forth-coming.
					
				</div>
				
				<div id = "unit">
					<h2> Challenge:</h2>
					<p>
						IRT model is built to measure cross-section achievement, not to guide longitudinal test assembly. <br>
						When tracing a student's dynamic record, ability is autocorrelated, local independence is lost.
					
					
					<p>
						In order for factor structure to be practically useful, the resolution will be so fine that they are dependent.<br>
						So one needs to describe the joint density of the factors, which is a headache.
					
						
					<p>
						Teacher judicuously choose items from the question bank, so it is not missing at random. <br>
						How to model such design?
					
					
					<p>
						Students are more likely to be random guessing in homework than in an high stake exam.<br>
						How to incorporate "guess" if the student leave it blank?
					
					
					<p>
						Yet the most important question is: <span id = "codeMaroon"> Is it worth it to model all these aspects</span>?<br>
						To answer this question, one needs real data and expert evaluation, rather than simulation and consistency proof.
					
				</div>
				
				<!-- Another Idea -->
				<div id = "unit">
					<h2>(Collaborative) Filter</h2>
					
					<p>
						Assume for the moment that all the challenges have been solved. Item and student parameters are recovered with precision.<br>
						How to build an adaptive recommendation system?
					
					
					<p>
						I "steal" one idea from recent CMU PhD graduate Khalid El-Arini. The slides can be found on his webpage.<br>
						If one could identify the key concept(s) of the question and the preference of user over the concepts,
						using his modified max-cover submodular algorithm, one could provide a diverse practice set that has low redundancy.<br>
						
					<!-- Another Idea -->
				</div>				
				</div>
			</div>		
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>