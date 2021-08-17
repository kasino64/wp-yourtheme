<?php

class SocialMedia_Menu_Walker extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
		$output .= "<li class=''>";
 
		if ($item->url && $item->url != '#') {
			$output .= '<a href="' . $item->url . '" class="icon-' .  sanitize_text_field(strtolower($item->title))  .'"><span>';
		} else {
			$output .= '<span>';
		}
		$output .= $item->title;
 
		if ($item->url && $item->url != '#') {
			$output .= '</span></a>';
		} else {
			$output .= '</span>';
		}
	}
}

?>