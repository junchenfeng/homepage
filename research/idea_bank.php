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
		$currrent_block_index = 2; 
		$lv_index = 0;
		echo print_research_navi($currrent_block_index, $lv_index);
	
	?>
	<!-- print the main block -->
			<div id = "displayPanel">
				<div id="unit">
					<h2> Browse the Idea Banks</h2>
					<ol>
						<li><a href="#1" > Price Human Capital as an Asset </a></li>
						<li><a href="#2" > Estimate the off-book Income of the Chinese Civil Servants by Court Filings </a></li>
						<li><a href="#3" > Trending Inequality and Political Stability: Why Chinese Emperors Subscribe to Egalitarianism and Why They Fails to stick on It?</a></li>
						<li><a href="#4" > Higher Moments Difference and RDD  </a></li>
						<li><a href="#5" > Boundary of Efficient Team Work: heterogeneity, complementarity and turnover</a></li>
					</ol>
				</div>
				
				<div id="unit">
					<h3 id="1">Price Human Capital as an Asset</h3>
					

					<p>What is the value of one's human capital? One would think that is the first order business for the human capital literature but actually we do not quite know.
				
					<p>The microeconomics pretends the wage and asset return is non-stochastic while the finance literature largely pretends that labor income is non-existent. 
				
					<p>It is tedious but doable to factor in human capital from a theorectic perspective.<br>
					   Previous work has already shown how to price it with stochastic calculus, and <a href = "http://onlinelibrary.wiley.com/doi/10.1111/jofi.12099/abstract" target=_blank>John Cochrane (2014)</a> provided a framework of intertemporal portfolio choice with outside income and preference.<br>
					   This alone can produce many follow up papers where important labor market decisions, such as retirement, can now be placed in a more realistic framework.<br>
					   
					<p>However, the really interesting and important thing is to empirically price the value of human capital and to see if people manage it as they would do with their financial asset.<br>
					<p>
					<a href = "#"> Back to Top </a>						  
					   
				</div>
				
				<div id="unit">
					<h3 id="2">Estimate the off-book Income of the Chinese Civil Servants by Court Filings</h3>
					<p> It is widely believe that senior Chinese civil servants mostly rely on their off-book income. There is almost no reliable way to survey it.
				
					<p>However, there is one source of relative clean data on the off the balance sheet income: court filings.
				
					<p>The court document should contain the amout , the type (cash, real estate, collections, etc) and the timing of the grey income.<br>
					It provides at least a lower bound of the true off balance income
				
					<p>The key difficulty is to estimate the population weights of the cases so as to recover a national average.<br>
					If we assume the corruption is uncovered as a random process, it is basically a sampling problem. <br>
					However, if we believe that the investigations are somewhat selective, we need to account for selection bias, which is considerably difficult.
				
					<p>The other difficulty is nepotism. The Chinese senior officials are too prudent/shrewd to receive direct bribary. The money usually channels through their relatives. If the channel spreads beyond the necular family, it is not clear what kind of income category we should benchmark.<br> 
				
					<p> Peking University has complied a <a href = "http://www.lawyee.net/product_service/db_case.asp" target = "_blank">Legal Database</a> that contained 200,000+ cases. Hopefully, there will be gems.				
					<p>
					<a href = "#"> Back to Top </a>	
				</div>
				
				<div id="unit">
					<h3 id="3">Trending Inequality and Political Stability: Why Chinese Emperors Subscribe to Egalitarianism and Why They Fails to stick on It?</h3>
				<p> 
					In Acemoglu and Robinson's classical paper, they reason that the threat of revolution from the poor is the driving force for democracy. <br>
					However, in most of the human history, democracy is not an option yet the shadow of revolution is always there.
				<p> 
					How did the rulers deal with that?
				<p> 
					Chinese emperors appeal to egalitarianism, which does not come as a surprise.<br>
					The real question is that why they would ever deviate?
				<p> 
					It will be interesting if we can get something other than merely being irrational. Tyrant like Nero does come up once in a while.
					Yet it is unconvicing that they are the only ones to blame for the fall of the empire
				<p>
					Here is one possible model.<br>
					There is the king. He controls central government but has limited regional execution power. <br>
					There are land lords. They are the implementor of central policy yet at the same time, competitor to the throne.<br>
					There are peasants. They are either independent farmers or tenants to the local land lords.<br>
				<p>
					During peach time, the central government is strong. They balance between local lords and peasents by backing of the porperty right of the peasants.<br>
					When shocks came, central government weakens and either peasants rebel or a normad is invading. Central government needs to borrow the strength of local aristocracy 					but their help comes at the price of more concentrated land ownership.<br>
					A few cycles later, land lord accumulate enough resources and mount a rebel against the central government.<br>
					If central government refues to yield power to the local authority, the result is the empire falls to an outside invader.
				<p>
					The previous model summarize the Chinese history pretty well.<br> 
					It is not something new to the Chinese historian. And without empiirical evidence, it is not of much interest to economist either. 
					<p>
					<a href = "#"> Back to Top </a>	
				</div>		
				
				<div id="unit">
					<h3 id="4">Higher Moments Difference and RDD</h3>
					<p>
					This idea is inspired by <a href ="http://papers.ssrn.com/sol3/papers.cfm?abstract_id=2120745" target="_blank">Hall and Fowler(2012)</a>  
				<p>
					In their figure 4(Short Term Consequences of Elections(State Legislature - Upper)), one can see that a high density between the 0.5 threshold are pretty close.<br> 					In contrast, some sparse data points stretch out to the extreme sides. <br>
					As a consequence, the mean difference is very different than mode difference.
				<p>
					To my best knowledge, RDD does not care if the distribution is symmetric or skewed since all it cares about is mean difference.
				<p>
					However, to get a meaningful interpretion of the result, if the data is highly skewed to one side, do we want to use mean or mode?
				<p>
					It may appears to be trivial empricially, but in the original Lee paper, the RDD result feeds into a theoretically model.
					Skewness could mess up how the model is step up and the structural parameter is estimated.
				
				
				<p>
					Another example is <a href = "http://scholar.harvard.edu/files/dell/files/121113draft.pdf">Trafficking Networks and the Mexican Drug War</a> by Melissa Dell.<br>
					Her main result is presented in figure 3, panel A and C.The paper implies a shift in the mean.
				<p>
					In her case, a more reasonable hypothesis will be a normal mixture. One borders rival and One borders friend. <br>
					The mean or the variance of the rival bordering normal shifted. An easy first pass empirical test will to test whether those cities saw a large increase in drug 					related homocide are indeed rival gang bordering cities.<br>
					Whether it is a shift in mean or shift in variance could have some complication for her later structural model.				
					<p>
					<a href = "#"> Back to Top </a>	
				</div>	
				
				<div id="unit">
					<h3 id="5">Boundary of Efficient Team Work: heterogeneity, complementarity and turnover</h3>
				<p>
					Inspired from the seminar of Benjamin F. Jones, The Human Capital Stock: A Generalized Approach. <br>
					This kind of problem is very common in development world.
				<p>
					There are two kinds of workers, high skill type(H type) and low skill type (L type).
					
				<p>
					Let's start by thinking about a one-dimensional job assignment where the productivity is measured by unit finished per period.<br>
					For simplicity, H's productivity is 2, while L's productivity is 1.<br>
					Assume H must spend 1 period to "fit with" L.
					Assume H is the principal.
					
				<p> If the job length is 2 units, H should not team up with L <br>
					If the job length is 3-6 units, H is indifferent (he would prefer do it alone if he needs to pay L)<br>
					If the job length is longer than 6 units, the time "wasted" on L is worth it because now L's contribution (exceeding 3 units) is larger than the cost (2 units).
				
				<p> Now, let's say L's ability to team up with H is a general human capital.<br>
				    Another principal can steal the trained L, then there is no incentive for H to team up with L in the first place.<br>
				    We are in the familiar beckian economics. 	  
					 
				<p>
					So we need a reason for H to buddy L in the first place, that is where complementarity comes in.<br>
					What if when team up with L, H's productivity gets a boost? If the boost is large enough, that will change the picture.
				
				<p> Why do we need such a model?<br>
					Because my hunch is that effective programmer teams are usually very small, although the nature of the programming (repetitive and highly standardized) will call for an economy of scale.
				
				<p>	
					<a href = "#"> Back to Top </a>						
				</div>
				

			</div>	
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>