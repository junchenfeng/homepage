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
	<?php echo pageHead(1,0)?>
	
	<!-- Here is the main body -->
	<!-- print the menu -->
	<?php 
	
		$currrent_block_index = 999; /* all page with links */
		echo print_research_navi($currrent_block_index,0)
	?>
	<!-- print the main block -->
		<div id = "displayPanel">
			<div id = "unit">
				<h2> Con Man</h2>
				I am an applied micro-econometr"ian" by training. 
				<p>Econometricians love to impose model/structure on the data, so am I. <span id="codeMaroon">Without a model, there is no theory, no imagination and no human touch.</span><br>
				<p>But I do think econometricians are carried away by their obessession with consistency, at a cost of out-sample validity. <br>
				We all know everybody runs a million regressions, aka data torture, if they want to publish the paper. But nobody cares how well such "elaborate" model does in real test sample, as long as the theorectical corner is covered.<br> 
				<p> Desipte the recent development in RCT, the "con", coined/lamented by Edward Leaner, is alive and well in econometrics.
			
			</div>	
			
			<div id = "unit">
				<h2> Data Hipster</h2>
				Machine learning literature shocks me as brutally pragmatic and effective (or honest).<br>
				The Big Data crowd are proud of the rebellious atheoratical approach and progressive way of applying data. Also, the rise of "Big Data" so trendy that few really understand how it works.<br>
			    Thus the name hipster.
								
				<p>However, my gut feeling is that the marginal return of MORE data and MORE computation power decreases, fast approaching 0. <br>
				Without some theory or structure, one does not even know how to utilize the tera-bype of data accumulated.<br>				
			</div>
			
			<div id = "unit" >
				<h2>Link Big Data with Economics</h2>
				I believe Economics Imperialism will gain new colonies if economists can make sense of the massive data accumulated everywhere.<br>
				I also believe economists need to be more pragmatic and honest with the analytical process. We need to learn the new tricks of the machine learning.<br>
			</div>
			
			
		</div>	
	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>