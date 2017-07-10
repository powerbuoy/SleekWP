<?php
function sleek_get_page_type () {
	global $post;

	$htmlID = 'unknown';

	if (is_front_page())		$htmlID = 'front';
	elseif (is_single())		$htmlID = 'post';
	elseif (is_attachment())	$htmlID = 'attachment';
	elseif (is_page())			$htmlID = 'page';
	elseif (is_archive())		$htmlID = 'archive';
	elseif (is_search())		$htmlID = 'search';
	elseif (is_home())			$htmlID = 'blog';

	return $htmlID;
}
