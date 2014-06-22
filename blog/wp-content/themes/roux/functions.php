<?php
function siteRoot($theFolder) {
	$home = get_home_url();
	// strpos(string, substring)
	$thePosition = strpos($home,$theFolder);
	// substr (string, start, length)
	$thePath = substr($home, 0, $thePosition);
	return $thePath;
}

function my_search_form($text) {
     $text = str_replace('id="s"', 'id="s" placeholder="Enter keyword(s)"', $text);
     $text = str_replace('value="Search"', 'value=""', $text);
     return $text;
}
add_filter('get_search_form','my_search_form');
?>