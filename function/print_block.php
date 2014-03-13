<?php

function print_navi($name_array, $link_array, $currrent_index, $css_tag){
	$num_element = count($name_array);
	$index_navi_ind = 1;
	
	$block_list = get_list($name_array, $link_array, $num_element, $currrent_index, $index_navi_ind);
	$html = "
	<div id = \"$css_tag\">
	<ul>
		$block_list
	</ul>
	</div>
	";
		
	return $html;	
	
};


function print_al_navi($currrent_block_index){
	
	$block_name_array = array("Online Study Room","IRT","Commentaries");
	
	/* If the block index is 999, it is the parent page, which resides in a different folder */
	if ($currrent_block_index != 999){
		$block_folder = "";
	}else{
		$block_folder = "adaptive_learning/";
	};
	
	$block_link_array = array(
			$block_folder."onlineStudyRoom.php",
			$block_folder."algorithm.php",
			$block_folder."commentaries.php",
	
	);	
	
	$css_tag = "menu";
	
	$navi_html = print_navi($block_name_array, $block_link_array, $currrent_block_index, $css_tag);
	return $navi_html;
}

function print_research_navi($currrent_block_index, $lv_index){
	$block_name_array = array("In Progress","On Shelf","Idea Banks","So Crazy that It Might Work","Grave Yard");
	
	/* If the block index is 999, it is the parent page, which resides in a different folder */
	$block_folder = '';
	if ($lv_index>0){
		for ($lv =0; $lv < $lv_index; $lv++){
			$block_folder .='../';
		};
	};
	
	
	if ($currrent_block_index == 999){
		$block_folder = "research/";
	};
	
	$block_link_array = array(
			$block_folder."in_progress.php",
			$block_folder."on_shelf.php",
			$block_folder."idea_bank.php",
			$block_folder."crazy.php",
			$block_folder."grave_yeard.php"
	);	
	
	$css_tag = "menu";
	
	$navi_html = print_navi($block_name_array, $block_link_array, $currrent_block_index, $css_tag);
	return $navi_html;	
}

function print_humor_navi($currrent_block_index, $lv_index){
	$block_name_array = array("My Skit","Quote of the Day");
	
	/* If the block index is 999, it is the parent page, which resides in a different folder */
	if ($currrent_block_index != 999){
		$block_folder = "";
	}else{
		$block_folder = "humor/";
	};
	
	$block_link_array = array(
			$block_folder."my_skit.php",
			$block_folder."quote_of_the_day.php",
	
	);
	
	$css_tag = "menu";
	
	$navi_html = print_navi($block_name_array, $block_link_array, $currrent_block_index, $css_tag);
	return $navi_html;	
	
}


function print_kitchen_navi($currrent_block_index, $lv_index){
	$block_name_array = array("Main Dish","Cocktail","Revival");

	/* If the block index is 999, it is the parent page, which resides in a different folder */
	if ($currrent_block_index != 999){
		$block_folder = "";
	}else{
		$block_folder = "quant_kitchen/";
	};

	$block_link_array = array(
			$block_folder."main_dish.php",
			$block_folder."cocktail.php",
			$block_folder."revival.php",
	);

	$css_tag = "menu";

	$navi_html = print_navi($block_name_array, $block_link_array, $currrent_block_index, $css_tag);
	return $navi_html;

}


function print_in_progress_navi($currrent_section_index){
	$section_name_array = array("Mixture Propensity Score","Leverage Resume Data");

	/* If the block index is 999, it is the parent page, which resides in a different folder */
	if ($currrent_section_index != 999){
		$up_folder = "";
	}else{
		$up_folder = "in_progress/";
	};

	$section_link_array = array(
			$up_folder."mixture_propensity_score.php",
			$up_folder."leverage_resume_data.php",
	);

	$css_tag = "section_navi";
	
	
	$navi_html = print_navi($section_name_array, $section_link_array, $currrent_section_index, $css_tag);
	return $navi_html;
}

function print_on_shelf_navi($currrent_section_index){
	$section_name_array = array("Dot Diva", "Degree Mill", "Noob Progammer", "Pension Spike");

	/* If the block index is 999, it is the parent page, which resides in a different folder */
	if ($currrent_section_index != 999){
		$up_folder = "";
	}else{
		$up_folder = "on_shelf/";
	};

	$section_link_array = array(
			$up_folder."dot_diva.php",
			$up_folder."degree_mill.php",
			$up_folder."noob_programmer.php",
			$up_folder."pension_spike.php",
	);

	$css_tag = "section_navi";


	$navi_html = print_navi($section_name_array, $section_link_array, $currrent_section_index, $css_tag);
	return $navi_html;
}



?>