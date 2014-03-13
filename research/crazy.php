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
	<?php echo pageHead(1,1)?>
	
	<!-- Here is the main body -->
	
	
	<?php 
		/* print the block navigation */
		$currrent_block_index = 3; 
		$lv_index = 0;
		echo print_research_navi($currrent_block_index, $lv_index);
	
	?>
	<!-- print the main block -->
			<div id = "displayPanel">
				<div id="unit">
					<ol>
						<li><a href = "#1"> Online Gaming and Monetary Policy </a></li>
						<li><a href = "#2"> The Theory of the renaissance of Bullshit </a></li>
					</ol>
				</div>
				
				<div id="unit">
					<h3 id = "1">Online Gaming and Monetary Policy</h3>
					<p>
					If you ever played MMO, you will agree with Friedman. Inflation is indeed a montary phenomon.
					<p><b>M</b><br>
					Monetary supply is net quantity of "gold" farmed from monsters and the "gold" spent on NPC. <br>
					In most games, the monetary supply increases over time. The speed of acceleration depends what fraction of the players are "professional" gold farmers, who specialize in farming monsters at the minimum time cost and "gold" cost.
			
					<p><b>Y</b><br>
					The goods in this system are usually rare equipment, which is traded among players. Goods are increasing over time, but at a very slow rate. Otherwise, it won't be rare. The supply of top notch equipment are usually constant over time. <br>
					Without question, Y grows much slower than M.
			
					<p><b>V</b><br>
					<p>
					Since there is no banking sector and no friction cost, the velocity of the money only depends on the marginal consumption propensity of the player.<br> 
					I will argue that it is an negatively correlated with the inflation. If the price ticket on a big item is higher, the player needs to save more the spend less, thus slow down the "Gold" in circulation.
			
					<p><b>P</b><br>
					MV = PY. You get the inflation rate.
					<p>
					So far not very exciting. But here are a few interesting characteristics of this setting
					
					<p><b>1.You can do experiments of any sort.</b><br>
					Game company are literally the GOD. They set the parameters and thus determine the M and Y, mostly.<br>
					Since one have strict control of the environment and no material consequence to the real world, one can do all kinds of experiment that is impossible to do in the real world.
			
					<p><b>2.Big Data</b><br>
					Complaining too few high quality micro data for macro research? Here you have unlimited amount of data generated continuously in a panel format. What can be better?<br>
			
					<p><b>3.Real Response</b><br>
					Players respond to price signal quite well, at least before the inflation blows up the monetary system and brings the world to a barter system. 
					Such real reponse can be used to calbirate all sorts of micro-economic of macro-economic parameters.
					On a side note, this could be an exellent opportunity to estimate labor supply elasticity.
					
					<p>
					<a href = "#"> TOP </a>				
				</div>

				<div id="unit">
					<h2 id="2">The Theory of the renaissance of Bullshit</h2>
			<p>
				One observation I have is that bullshit is hard to exterminate in the age of internet.<br>
				Can you imagin newspapers as biased as FOX or MSNBC can flourish as they did now in the 1950s?
			
			<p>
				For one thing, discredited bullshit is always able to claim new vicims once in a while. <br>
				For another, there is an increasing intellectual split between antagonizing groups who see the opinion from the opposite side as totally bullshit. 
			
			<p>
				If truth can be revealed by simply pitting information against each other, as Mill argued, such phenomena should not happen.
			
			<p>
				So the question is why? <br>
				Why more information leads to more, not less, bullshit, at least by perception.
						
			<p>
				Akerlof and Shiller used the metaphor of epidemics in their "modeling" of animal spirits, which shed interesting light on the spread of bullshit.<br>
				It points to the necessity of studying the trasimission channels of the bullshit. <br>
				It obviously differ from the age of paper and ink to the age of internet and keyboard. 
			
			
			<p>
				Here is my theory. Fact checking is costly and fact finding is extremely costly.<br>
				Nobody goes on a fact rampage unless he/she is really pissed <br> 
			
			<p>
				In the age of Paper and Ink, the burden of fair and balanced are laid on the press. <br>
				Because their reader base is quite broad, they have to be really careful with their reputation.<br> 
				The probability of pissing someone with a particular view is not small enough to be neglected.<br>
				If the reputation is tarnished, they have to take VERY costly signal to reestablish it.<br>
				Very strong incentive to be "neutral"
			
			<p>
				In the age of Blog and Twitter, the reader base is highly self-selected.<br>
				Audience of the daily show does not bother to find whether Jon Steward is presenting the whole truth since they "a prior" agree with what he has to say.<br>
				So is the audience of O'Reilly show.<br>
				Since the probability of being fact checked by audience is small, why bother fair and balanced?
			
			<p>
				This problem is epecially acute in Twitter.<br>
				First of all, nobody is going to fact check tweet. There will be a smell test, but that is all<br>
				Second of all, if the tweet already spread to a certain degree, it must be quite eye catching and pass the smell test. <br>
				The probability of going viral from there is high<br>
				On the other side, how many times do you tweet 140 words just to rebuke a sily retweet? Not many times I guess.<br>
				So we have a viral bullshit and not enough anti-dote.
			
			
			<p>
				Now, empirically, how do we track that?<br>
				Microsoft has a tool called <a href = "http://www.youtube.com/watch?v=m1w7MgqkEtE" target = "_blank"> "viral search" </a> to monitor Twitter.<br>
				And there is a <a href = "http://vis.pku.edu.cn/weibova/about/intro/" target = "_blank"> similar chinese version </a> that monitors Microblog.<br>
				One needs to come up with a rumor mill that produces "urban legends" of various plausibility and "checkability"<br>
				See how those rumors spread will shed lights on the nature of information dispersion in the new age.
			
				<p>
				<a href = "#"> TOP </a>				
				</div>				
			</div>	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>