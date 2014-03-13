<?php
include "block_action.php";

function pageHead($currrent_block_index, $lv_index)
{
	/* parameter space*/
	$block_name_array = array("Home","Research","Adaptive Learning","Quant Kitchen","Fun Still Alive @ Uchicago");
	
	$blockfolder = '';
	if ($lv_index>0){
		for ($lv =0; $lv < $lv_index; $lv++){
			$blockfolder .='../';
		};
	};
	
	$block_link_array = array(
			$blockfolder."index.php",
			$blockfolder."research.php",
			$blockfolder."adaptive_learning.php",
			$blockfolder."quant_kitchen.php",
			$blockfolder."humor.php"
	);	
	$num_block = count($block_name_array);
		
	
	/* header*/
	$headBlock= "
		<div id = \"header\">
			<table >
				<tr>
					<!-- Name -->
					<th colspan=2>  <span id = \"headSignature\">Junchen Feng</span> </th>
						
					<!-- logo -->
					<th colspan=2 rowspan=2> 
					<a href= \"http://www.uchicago.edu/\">
					<img class= \"headLogo\" src = \"http://communications.uchicago.edu/sites/all/files/identity/downloads/logo/logo.rgb.reversed.png\">
					</a>
				</th>
	
				<tr>
				<!-- Important Links -->	
					<th> <a href = \"http://harrisschool.uchicago.edu/\" target=\"_blank\"><span id = \"headLink\">Harris School</span></a> </th>
					<th> <a href = \"http://www.zixi.org.cn\" target=\"_blank\"><span id = \"headLink\">Digital Ed Project</span></a> </th>
				</tr>
			</table>
		</div>";

	/* navigation list */
		/* generate the list */
			$index_navi_ind = 1;
			$navi_list = get_list($block_name_array, $block_link_array, $num_block, $currrent_block_index, $index_navi_ind);
			$navigation = "<div id = \"navigation\"> <ul> $navi_list </ul> </div>";
	
	/* append and return */
	return $headBlock.$navigation;
}




?>