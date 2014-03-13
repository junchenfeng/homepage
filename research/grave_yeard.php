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
		$currrent_block_index = 4; 
		$lv_index = 0;
		echo print_research_navi($currrent_block_index, $lv_index);
	
	?>
	<!-- print the main block -->
			<div id = "displayPanel">
			<div id= "unit">
				<h3>Online Gaming and Crime Rate</h3>
				
			<p>
			Massive Multi-player online game (MMOs) is one giant time sucking machine. It is addictive, low cost and satifactory if you play it right.<br>
			There are two conflict stories on how that affect crime rate:
			
			<p><i>Version 1:</i><br>
			Idle youth who would otherwise commit crime are now sucks into MMOs. They are too busy to commit petty crimes.
			
			<p><i>Version 2:</i><br>
			If one wants to excel in MMOs, it requires a lot of money to buy good gears and what not. If the player do not have the money, they may have to get it illegally, thus increase the crime rate.
			
			<p>
			Thus it boils down to an empricial question. The number 1 problem is that it is hard to get individual gamer data and how much time they spend on MMOs.<br>
			Of course gaming company will have the IP of the gamer and the log of their time play, but it is hard to get.<br>
			So the natural way to do inference is using natural experiment.<br>
			
			<p><b>Experiment 1: Internet Cafe penetration</b><br>
			At least in China, Internet Cafe is the synnomous to MMOs club. The more cafes are their, the more young people are playing.<br>
			Still, data on the size and inception date on Internet Cafe is hard to come by. Also it has endogeneity problem. More wealthy region tends to have more internet cafe.<br>
			
			<p><b>Experiment 2: Release of New MMO or their Expansion Set</b><br>
			Aside from a few die hard professionals, most players are casual players. They got bored with endless quests of the same kind. So game industry has to release new expansion now and then to get the attentions.<br>
			This is an excellent candidate for RDD. It only requires time series of aggregate crime data and maybe some demographics to infer the popularity of the MMOs.<br>
			Not sure what theory it helps to verify but it is an interesting empirical question. MMOs may be a highly cost effective way to suppress urban crimes.<br>
			<span id="codeMaroon">Use Chicago crime data, there is no obvious evidence that the release of bombshell games materially influence the crime rate in a quick look. A better data source that contains the age of the criminal is needed. </span>
					
			</div>		
			</div>	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>