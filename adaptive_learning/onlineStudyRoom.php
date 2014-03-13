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
	
		$currrent_block_index = 0; 
		echo print_al_navi($currrent_block_index);
	?>
	<!-- print the main block -->
			<div id = "displayPanel">
				<div id = "unit">
					<p> 
						This is the infrascture we have built to house the lectures, the execises and the algorithm.<br>
						You can visit the website <a href ="http://www.zixi.org.cn" target="_blank">www.zixi.org.cn</a>(Unfortunately, no English).
					
					 
					 <p>
 						As far as we know, it is the<em> <span id = "codeMaroon">largest free MOOC for K-12 STEM in China</span> </em>  .<br>
					 
				</div>
				
				<div id = "unit">	 
					<p> 
						We are deeply indebted to our faculty. They are<br>
						<a href = "http://www.math.uchicago.edu/~yuanshao/" target=_blank>Yuan Shao</a>, Uchicago PhD;<br>
						<a href = "http://sipa.columbia.edu/academics/degree_programs/phd/profiles/ruinan-liu.html" target="_blank">Ruinan Liu</a>, Columbia PhD Candidate;<br>
						<a href = http://home.uchicago.edu/~gefeng target="_blank">Ge Feng</a>,Uchicago PhD Candidate;<br>
						Xiaojing Gao, Standford PhD Candidate;<br>
						Hui Dai, UChicago PhD;<br>
						Zhenxing Wang, Peking University PhD Candidate
						
				</div>
					
				<div id = "unit">	
					<p>
						We are trying to establish in depth cooperation with the following schools:<br>
						Baicheng No.1 High School, Jilin Province; <br>
						Hangzhou Long March High School, Zhejiang Province; <br>
						Shenzheng High School, Guangdong Province <br>
						
				</div>
				
			</div>	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>