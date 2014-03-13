<?php
function get_list($block_name_array, $block_link_array, $num_block, $currrent_block_index, $index_navi_ind){

	$list_string = '';

	for ($i = 0; $i < $num_block; $i++) {
		/* generate the list */
		if ($i != $currrent_block_index)
		{
			/* if not the current block, give link */
			$li_item = "
			<li>
			<a href=\"$block_link_array[$i]\" target=_blank>$block_name_array[$i]</a>
			</li>";
		}
		else{
		/* if the current block, high light in maroon */
		$li_item = "
		<li>
		<span id=\"codeMaroon\">$block_name_array[$i]</span>
		</li>";
		}; /* end of if else */
		$list_string .= $li_item;
			
		/* if need to append | */
		if ($index_navi_ind== 1){
		/* no need to append the last one */
			if ($i < $num_block-1){
			$list_string .= "<li> | </li>";
			};
			};
		
			};	/* end of the for loop */
			return $list_string;
}
?>