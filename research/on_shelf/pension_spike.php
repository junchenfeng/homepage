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
		
		$currrent_section_index = 4;
		echo print_on_shelf_navi($currrent_section_index);		
	?>
	<!-- print the main block -->
			<div id = "displayPanel">
				<div id = "unit">
				<h2>Why Shelved</h2>
					<p>Sadly, the data source previously I thought is available turns out to be a dud.
					
					<p>Also, most union jobs have very tight working hours regulation, so maynot have much flexibility, and thus empirically hard to detect.
				</div>
			
			
			<div id = "unit">
				<h2>Pension Spiking</h2>
				<ol>
					<li><i>How Social Security Calculate Benefit</i></li>
					I start the discussion with the formula of the social security benefit. The social security benefit takes the highest 35 years of income and calculate the pension (nonlinearly) proportional to its average. The details of the formula can be found <a href="http://www.ssa.gov/pubs/10070.html">HERE</a>  <br>
					For social security, it is hard, if not impossible or impractical, to jag up the wage so that one can get higher pension. <br>
					<li> <i>How Teacher Pension Calculate Benefit</i></li> 
					In some states, teachers are not covered by Social Security but by local teacher pension system. For most of these pension systems, the baseline benefit formula is (Year of Service)* (Final Average Salary) * (Replace rate) <br>
					The final average salary(FAS) is determined as the average of highest CONSECUTIVE income for N years, usually between 3-5. For more details on the benefit formula, check <a href="http://www.performanceincentives.org/news/detail.aspx?linkid=335&moduleid=51"> HERE </a>  <br>
					The FAS rule makes it easy to game the system. It is imaginable that rational individual will hike up their total income for three years and reap the annuity benefit for a decade or two. This is <span id="codeMaroon">pension spiking</span>  <br>
					<li><i>How California Calculate Benefit</i></li> 
					If one has more than 25 years of service history, california's FAS rule only take <b>HIGHEST</b> year among the last three years. For details, see <a href="http://www.calstrs.com/calculators/retbencalc.aspx">HERE</a>. <br>
					In fact, that is how the public pension are paid in California in general.		 <br>
					It does not take a lot of brain power to figure out this system is really easy to game. <br>
					<li><i>Anecdotal Evidence</i></li>
						<a href="http://www.caltax.org/documents/2004/Hill-Korber-HowLawFattensStatePensions12-19-04.pdf">How LAS fattens state pensions</a> <br>
						<a href="http://articles.latimes.com/2012/jan/28/local/la-me-pensions-20120128">LA Times: Clamor grows to rein in California pension benefits</a>
				</ol>
				
			</div>
			
			<div id = "unit">
				<h2>Some Theory</h2>
		<p>The FAS provides an opportunity to estimate the elasticity of the labor supply.
		<p>Let me stretch out an easiest model under California formula.
		<p>Suppose we have a T period life cycle model. One could only work in period 1 but outside income from period 2-T is indexed to the total wage income in period 1. Utility is derived from consumption and leisure.
		<p>Alternatively, we can reparameterize of the income flow. It is equivalent to a scheme where one is paid all the money upfront and he put excessive saving to an annuity program.
		<p>The re-parameterization makes it clear that we can think of the last year's work has extremely HIGH wage. If T >> 1, it will be so large that income effect in 1st period will be dwarfed by substitution effect.
		<p>The other advantage of this approach is that it is predictable and quasi-transitory. You will have 1 year of tremendous wage raise and that is it.			
			</div>
			
			<div id="unit">
				<h2>Why does it differ from the current literature</h2>
		<ol> 
			<li><a href = "http://www.nber.org/papers/w13110" target="_blank">Gopi Shah Goda, John B. Shoven, Sita Nataraj Slavov: Removing the Disincentives in Social Security for Long Careers, 2007</a></li>
			<li><a href = "http://www.jstor.org/stable/10.2307/2535254" target = "_blank">Alan B. Krueger and Jörn-Steffen Pischke: The Effect of Social Security on Labor Supply: A Cohort Analysis of the Notch Generation, 1992</a></li>
			<li><a href = "http://www.nber.org/papers/w7830" target ="_blank">Courtney Coile, Jonathan GruberSocial Security and Retirement, 2000</a></li>
		</ol>
		
		<p>This study differs most importantly in that tere is less danger of sorting. I doubt anyone will sort into job because they will be able to rig the system 25 years later. Esepcially, the california pension reform is totally unexpected.
		<p>Of course, the problem for me will be it is hard to get good quality data. It is almost inevitably has to be administrative data if we want to get a decent measure of labor supply in terms of hours.
	
			</div>
			
			<div id ="unit">
<h2> Empirical Strategy</h2>
		<p>If we could get hands on california's administrative data, an sharp RDD design could be implemented around 1990 when the pension reform bill is passed
		<p>If data on FAS based pension system is available, we could still compare the labor supply decision between FAS eligible period and non FAS eligible period. Notice that FAS is usually eligible for the last 10 year of service.
		
		<h2>Challenges</h2>
		<ol>
			<li><i>Labor Supply Flexibility</i></li>
			<p>Some literature suggests that the labor supply for teachers are very rigid. Thus teacher may not be able to increase labor supply as much as optimal, which bias the estimate downwards.
			<p>This may be one of the reason why the current research focuses on the extensive margin (retirement decision) rather than intensive margin(hours supply)
			<p>Anncedotal sources suggests that train conductor has very flexible working hours and plenty overtime opportunities. It might be a prime source for investigation.
			<li><i>Non-wage Compensation</i></li>
			<p> As suggested by the anecdotal evidence, the total compensation can be manipulated not through increasing the labor supply, but through non-wage compensation or wage hike(promotion). This would also bias the estimate of elasiticiy downward.
		</ol>			
			</div>
				</div>	
			
			
	<!-- print footer -->
	<?php echo page_foot()?>
</body>


</html>