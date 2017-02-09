<?php

$headerlinks = array
(
	actionLink('home') => 'Home', 
	actionLink('board') => 'Forums',
);

$sidelinks = array
(
	Settings::get('menuMainName') => array
	(
		actionLink('home') => 'Home',
		actionLink('board') => 'Forums',
		actionLink('faq') => 'FAQ',
		actionLink('memberlist') => 'Member list',
		actionLink('ranks') => 'Ranks',
		actionLink('online') => 'Online users',
		actionLink('layoutmaker') => 'Layout Maker',
		actionLink('lastposts') => 'Last posts',
		actionLink('search') => 'Search',
	),
);

?>
