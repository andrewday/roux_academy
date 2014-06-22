<?php
function siteRoot($theFolder) {
	$home = get_home_url();
	// strpos(string, substring)
	$thePosition = strpos($home,$theFolder);
	// substr (string, start, length)
	$thePath = substr($home, 0, $thePosition);
	return $thePath;
}
?>