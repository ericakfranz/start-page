<?php // start page sites

// Google favicon snatcher
$favicons = 'http://www.google.com/s2/favicons?domain=';

/** ============================
 * My Sites
 */
$my_sites = array(
	'wordpress'       => array(
		'name'        => 'Example WordPress',
		'id'          => 'espn',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'wordpress.org',
		'wordpress'   => true,
			'admin'       => true,
			'themes'      => true,
			'plugins'     => true,
	),
	'google'          => array(
		'name'        => 'Google',
		'id'          => 'google',
		'url'         => 'http://google.com/',
		'favicon'     => $favicons . 'google.com',
		'wordpress'   => false,
			'admin'       => false,
			'themes'      => false,
			'plugins'     => false,
	),
	'facebook'        => array(
		'name'        => 'Facebook',
		'id'          => 'facebook',
		'url'         => 'http://facebook.com/',
		'favicon'     => $favicons . 'facebook.com',
		'wordpress'   => false,
			'admin'       => false,
			'themes'      => false,
			'plugins'     => false,
	),
	'twitter'         => array(
		'name'        => 'Twitter',
		'id'          => 'twitter',
		'url'         => 'http://twitter.com/',
		'favicon'     => $favicons . 'twitter.com',
		'wordpress'   => false,
			'admin'       => false,
			'themes'      => false,
			'plugins'     => false,
	),
	'youtube'         => array(
		'name'        => 'YouTube',
		'id'          => 'youtube',
		'url'         => 'http://youtube.com/',
		'favicon'     => $favicons . 'youtube.co',
		'wordpress'   => false,
			'admin'       => false,
			'themes'      => false,
			'plugins'     => false,
	),
	'wordpress_2'     => array(
		'name'        => 'Example WordPress 2',
		'id'          => 'wordpress_2',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'wordpress.org',
		'wordpress'   => true,
			'admin'       => true,
			'themes'      => false,
			'plugins'     => true,
	),
);

/**
 * My Secondary Links
 */
$my_links = array(
	'paypal'          => array(
		'name'        => 'PayPal',
		'id'          => 'paypal',
		'url'         => 'https://www.paypal.com/',
		'favicon'     => $favicons . 'paypal.com',
	),
	'wikipedia'       => array(
		'name'        => 'Wikipedia',
		'id'          => 'wikipedia',
		'url'         => 'https://www.wikipedia.org/',
		'favicon'     => $favicons . 'wikipedia.com',
	),
	'github'          => array(
		'name'        => 'GitHub',
		'id'          => 'github',
		'url'         => 'https://github.com/',
		'favicon'     => $favicons . 'github.com',
	),
	'amazon'          => array(
		'name'        => 'Amazon',
		'id'          => 'amazon',
		'url'         => 'http://www.amazon.com/',
		'favicon'     => $favicons . 'amazon.com',
	),
	'tumblr'          => array(
		'name'        => 'Tumblr',
		'id'          => 'tumblr',
		'url'         => 'http://www.tumblr.com/',
		'favicon'     => $favicons . 'tumblr.com',
	),
);


/** ============================
 * Single Project Section
 */
$project_links = array(
	'my_project'      => array(
		'name'        => 'My Special Project',
		'id'          => 'my_project',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'example.com',
		'wordpress'   => false,
			'admin'       => false,
			'themes'      => false,
			'plugins'     => false,
	),
);

// first set of project resources
$section_one_links = array(
	'link_one_one'    => array(
		'name'        => 'Resource Link',
		'id'          => 'link_one_one',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'example.com',
	),
	'link_one_two'    => array(
		'name'        => 'Another Link',
		'id'          => 'link_one_two',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'example.com',
	),
	'link_one_three'  => array(
		'name'        => 'Links Rule',
		'id'          => 'link_one_three',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'example.com',
	),
	'link_one_four'   => array(
		'name'        => 'One Last Time',
		'id'          => 'link_one_four',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'example.com',
	),
);

// second set of project resources
$section_two_links = array(
	'link_two_one'    => array(
		'name'        => 'Resource Link',
		'id'          => 'link_two_one',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'example.com',
	),
	'link_two_two'    => array(
		'name'        => 'Another Link',
		'id'          => 'link_two_two',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'example.com',
	),
);

// third set of project resources
$section_three_links = array(
	'link_three_one'    => array(
		'name'        => 'Resource Link',
		'id'          => 'link_three_one',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'example.com',
	),
	'link_three_two'    => array(
		'name'        => 'Another Link',
		'id'          => 'link_three_two',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'example.com',
	),
	'link_three_three'  => array(
		'name'        => 'Links Rule',
		'id'          => 'link_three_three',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'example.com',
	),
	'link_three_four'   => array(
		'name'        => 'One Last Time',
		'id'          => 'link_three_four',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'example.com',
	),
);

// fourth set of project resources
$section_four_links = array(
	'link_four_one'    => array(
		'name'        => 'Resource Link',
		'id'          => 'link_four_one',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'example.com',
	),
	'link_four_two'    => array(
		'name'        => 'Another Link',
		'id'          => 'link_four_two',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'example.com',
	),
	'link_four_three'  => array(
		'name'        => 'Links Rule',
		'id'          => 'link_four_three',
		'url'         => 'http://example.com/',
		'favicon'     => $favicons . 'example.com',
	),
);


/** ============================
 * More Sites
 */
$more_sites = array(
	'instagram'       => array(
		'name'        => 'Instagram',
		'id'          => 'instagram',
		'url'         => 'http://instagram.com/',
		'favicon'     => $favicons . 'instagram.com',
		'wordpress'   => false,
			'admin'       => false,
			'themes'      => false,
			'plugins'     => false,
	),
	'buzzfeed'        => array(
		'name'        => 'Buzzfeed',
		'id'          => 'buzzfeed',
		'url'         => 'http://buzzfeed.com/',
		'favicon'     => $favicons . 'buzzfeed.com',
		'wordpress'   => false,
			'admin'       => false,
			'themes'      => false,
			'plugins'     => false,
	),
	'apple'           => array(
		'name'        => 'Apple',
		'id'          => 'apple',
		'url'         => 'http://apple.com/',
		'favicon'     => $favicons . 'apple.com',
		'wordpress'   => false,
			'admin'       => false,
			'themes'      => false,
			'plugins'     => false,
	),
	'hulu'            => array(
		'name'        => 'Hulu',
		'id'          => 'hulu',
		'url'         => 'http://hulu.com/',
		'favicon'     => $favicons . 'hulu.com',
		'wordpress'   => false,
			'admin'       => false,
			'themes'      => false,
			'plugins'     => false,
	),
	'craigslist'      => array(
		'name'        => 'Craigslist',
		'id'          => 'craigslist',
		'url'         => 'http://craigslist.org/',
		'favicon'     => $favicons . 'craigslist.org',
		'wordpress'   => false,
			'admin'       => false,
			'themes'      => false,
			'plugins'     => false,
	),
	'adobe'           => array(
		'name'        => 'Adobe',
		'id'          => 'adobe',
		'url'         => 'http://adobe.com/',
		'favicon'     => $favicons . 'adobe.com',
		'wordpress'   => false,
			'admin'       => false,
			'themes'      => false,
			'plugins'     => false,
	),
);