 <?php 
include "function/print_header.php";
include "function/print_foot.php";
 ?> 
 
 <html>
 <head>
 <link rel="stylesheet" type = "text/css" href = "style_index.css">
 </head>
 <body>
	<!-- This function prints out the top part -->
	<?php echo pageHead(0,0)?>  <!-- index is page 0 -->

		<div id ="index_unit">
			<h3>Hello World: </h3>
				I would brand myself as "<em><span id = "codeMaroon">Data Scientist</span></em>" because I am more interested in building practical models than in pursuing consistent estimators.
		</div>
		
		<div id ="index_unit">		
			<h3>Work  On:</h3>
			
				I focus on <span id = "codeMaroon">IRT</span> models in education. For more, check out <a href ="adaptive_learning.php">"Adaptive Learning"</a> <br>

				I also try to connect <span id = "codeMaroon">Big Data</span> with economics, among other things.For more, check out <a href ="Research_masterPage.htm">"Research"</a> 
		</div>	
		
		<div id ="index_unit">	
			<h3>Worked On:</h3>
			
				I was building an advanced program evaluation toolbox in Python. Please Check out <a href = "https://github.com/junchenfeng/GeneralizedTreatmentEffectToolbox" target = "_blank">"Generalized Treatment Effect Toolbox"</a>, <br>
			 
			 <p>
			 	I worked with  <a href = "http://razorhedge.com/" target=_blank><span id = "codeMaroon">Razor Hedge Investment Management</span></a> to build a benchmark index for pension fund. Please check out my artile in <a href="http://www.etf.com/publications/journalofindexes/joi-articles/19088-prudent-target-risk-indexes.html">Journal of Index</a>.
			 
		</div>	 
		
		<div id ="index_unit">	 
			 <h3>Hobby:</h3>
			An amateur historian, a foodie, a runner and a fan of late nite comedy show.
		</div>	

	<?php echo page_foot()?>
	
 </body>
 </html>