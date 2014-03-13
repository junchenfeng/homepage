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
	
		$currrent_block_index = 2; 
		echo print_al_navi($currrent_block_index);
	?>
	<!-- print the main block -->
			<div id = "displayPanel">
					<div id = "unit">
						<h2>Write, Write and then Write Some More</h2>
						<p>I am penning two Chinese blogs on Education. The <a href = "http://zhan.renren.com/onlinezixishi" target=_blank>1st one</a> is my own work while the <a href="http://blog.sina.com.cn/u/3897292536" target=_blank>2nd one</a> is joint work with alumni of "Teach for China".
						<p>Here is a list of commentaries of English resources, mostly from Brookings and Econ-talk.<br>
						
						<ul>
							<li> <a href = "#1"> Collaboration between Social Networking and Education </a>
							<li> <a href = "#2"> Riding the Mobile Wave: The Future of Mobile Computing </a>
							<li> <a href = "#3"> Education Technology: The Next Generation </a>
							<li> <a href = "#4"> Willingham on Education, School and Neuroscience</a>
							<li> <a href = "#5"> Kling on Education and the Internet </a>
							<li> <a href = "#6"> Doug Lemov on Teaching </a>
						</ul>
						
					</div>
			
			
					<div id = "unit">
						<a name = "1"></a>
						<h2>
							<a href="http://www.brookings.edu/events/2012/0424_education_collaboration.aspx" target=?_blank?>Brookings:</a>
							Collaboration between Social Networking and Education
						</h2>
						<p><strong>Comment:</strong> 
						<p>
							The opportunity to individualize the learning process/experience is under appreciated. <br>
							This is not all about making education like a game, but be able to layout the knowledge tree and map students and execises into this tree. 
						
						<p>
							As the panelist said, the name of the game is data.<br>
							The right question to ask is what data? and how do we advance learning process with it.
						
					</div>	
					
					<div id = "unit">
						<a name = "2"></a>
						<h2>
							<a href="http://www.brookings.edu/events/2012/10/05-mobile-wave" target = "_blank">Brookings:</a>
							Riding the Mobile Wave: The Future of Mobile Computing 
						</h2>
						
						<p><strong>Comment:</strong>
						<p>
							In this talk, Michael Saylor, CEO of MicroStrategy, articulates the scale economy of digital education.<br>
							He correctly points out that digital learning and online learning will help the disadvantaged and free the teacher from repetitive work.
						
						<p>
							However, Mr.Saylor made two strong assumptions.<br>
							Firstly, Children are eager to learn on themselves.<br>
							Secondly, video and multiple choice practice are sufficient for proficiency in certain subjects.<br>
							I consider these two assumptions not plausible.
						
						<p>
							Thus, digital learning has to be motivating and it has to be integrated to the classroom.
							
					</div>	
					
					<div id = "unit">	
						<a name = "3"></a>
						<h2>
							<a href = "http://www.brookings.edu/events/2013/03/20-education-technology#ref-id=20130320_EdTech" target = "_target">Brookings Institution </a>
							Education Technology: The Next Generation
						</h2>		
						
						<p>
							The event is amazing collection of thoughts from the frontier of the education technology.<br>
							Especially, the work of Professor Shute on stealth assessment is ingenious.<br>
							
						<p>
							The measurement of non-cognitive skill, such as creativity and grit, has been a really hard problem with questionaire.<br>
							However, a lot of good computer games require such characteristics, especially if you are on hard or brutal mode.<br>
							The idea to embed measurement into Portal 2 is ingenious. I could not wait to try it!           
						
					</div>	
					
					<div id = "unit">	
						<a name = "4"></a>			
						<h2>
							<a href="http://www.econtalk.org/archives/2009/10/willingham_on_e.html" target="_target">Econ Talk:</a>
							Willingham on Education, School and Neuroscience 
						</h2>
						<p><strong>Comment:</strong> 
						<p>
							The podcast raises a key question: Why question appears easier when others do it?
						
						<p>
							This is a non-trivial question for online learning such as Khan Academy. <br>
							How can we challenge the student so that they actuall get hands dirty and learn the real stuff, rather just watch videos and collect badges.
						
						<p>
							The other important point the podcast raises is that memory plays an important role in creative problem solving.<br>
							For student to be able solve problems in real world, it is important, at the same time hard, for online learning media to foster associative 							memory.
						<p>
							In this one's humble experience, associative memory is cultivated by boring repetitive execises.
						
					</div>	
					
					<div id = "unit">
						<a name = "5"></a>
						<h2>
							<a href="http://www.econtalk.org/archives/2012/10/kling_on_educat.html" target="_target">Econ Talk:</a>
							Kling on Education and the Internet 
						</h2>
						<p><strong>Comment:</strong> 	
						<p>
							Mr. Kling offers some sobering thoughts on the limitation of the online education.<br>
							His main idea is that migrating a traditional course to the internet is just not going to work.
						
						<p>
							That is exactly right. The online learning should be active and adaptive!
						
					</div>		
					
					
					<div id = "unit">
						<a name = "6"></a>
						<h2>
							<a href="http://www.econtalk.org/archives/2013/12/doug_lemov_on_t.html">Econ Talk:</a> 
							Doug Lemov on Teaching
						</h2>
						<p><strong>Comment:</strong> 
						<p>
							Algorithm and technology are not substitute but rather complement of the teacher insight and capability.<br>
							Mr. Lemov's "realistic" philosophy match my own experience very well. "At bats" is important because mastery means the student assimilates the skill to be a habit, which cannot be achieved without dreadful repetitive execises.<br>
							The question is how can we make the process more efficient and less painful.
						
					</div>				
				
			</div>	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>