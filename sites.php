<?php // start page sites
	
$favicons = 'http://www.google.com/s2/favicons?domain=';

$my_sites = array(
	'sdavismedia'     => array(
		'name'        => 'SDavis Media',
		'id'          => 'sdavismedia',
		'url'         => 'http://sdavismedia.com/',
		'favicon'     => $favicons . 'sdavismedia.com',
		'wordpress'   => true,
	),
	'volatylthemes'   => array(
		'name'        => 'Volatyl Themes',
		'id'          => 'volatylthemes',
		'url'         => 'http://volatylthemes.com/',
		'favicon'     => $favicons . 'volatylthemes.com',
		'wordpress'   => true,
	),
	'buildwpyourself' => array(
		'name'        => 'Build WP Yourself',
		'id'          => 'buildwpyourself',
		'url'         => 'http://buildwpyourself.com/',
		'favicon'     => $favicons . 'buildwpyourself.com',
		'wordpress'   => true,
	),
	'seandavis'       => array(
		'name'        => 'Sean Davis',
		'id'          => 'seandavis',
		'url'         => 'http://seandavis.co/',
		'favicon'     => $favicons . 'seandavis.co',
		'wordpress'   => true,
	),
	'optinagent'      => array(
		'name'        => 'Optin Agent',
		'id'          => 'optinagent',
		'url'         => 'http://optinagent.com/',
		'favicon'     => $favicons . 'optinagent.com',
		'wordpress'   => true,
	),
	'dapperfitdetermined' => array(
		'name'        => 'Dapper Fit Determined',
		'id'          => 'dfd',
		'url'         => 'http://dapperfitdetermined.com/',
		'favicon'     => $favicons . 'dapperfitdetermined.com',
		'wordpress'   => false,
	),
);

$my_links = array(
	'paypal'          => array(
		'name'        => 'PayPal',
		'id'          => 'paypal',
		'url'         => 'https://www.paypal.com/',
		'favicon'     => $favicons . 'paypal.com',
	),
	'stripe'          => array(
		'name'        => 'Stripe',
		'id'          => 'stripe',
		'url'         => 'https://dashboard.stripe.com/transfers/overview',
		'favicon'     => $favicons . 'stripe.com',
	),
	'sdvs.me'         => array(
		'name'        => 'sdvs.me',
		'id'          => 'sdvs.me',
		'url'         => 'http://sdvs.me/',
		'favicon'     => $favicons . 'sdvs.me',
	),
	'aweber'          => array(
		'name'        => 'Aweber',
		'id'          => 'aweber',
		'url'         => 'https://www.aweber.com/',
		'favicon'     => $favicons . 'aweber.com',
	),
	'wordpress'       => array(
		'name'        => 'WordPress',
		'id'          => 'wordpress',
		'url'         => 'https://profiles.wordpress.org/sdavis2702',
		'favicon'     => $favicons . 'wordpress.org',
	),
	'github'          => array(
		'name'        => 'GitHub',
		'id'          => 'github',
		'url'         => 'https://github.com/SDavisMedia',
		'favicon'     => $favicons . 'github.com',
	),
);

$edd_links = array(
	'edd_site'        => array(
		'name'        => 'Easy Digital Downloads',
		'id'          => 'edd_site',
		'url'         => 'https://easydigitaldownloads.com/',
		'favicon'     => $favicons . 'easydigitaldownloads.com',
		'wordpress'   => true,
	),
);

$edd_support = array(
	'forum_dashboard' => array(
		'name'        => 'Support Dashboard',
		'id'          => 'forum_dashboard',
		'url'         => 'https://easydigitaldownloads.com/support/dashboard/',
		'favicon'     => $favicons . 'easydigitaldownloads.com',
	),
	'my_tickets'      => array(
		'name'        => 'My Support Tickets',
		'id'          => 'my_tickets',
		'url'         => 'https://easydigitaldownloads.com/support/dashboard/?mod=1305',
		'favicon'     => $favicons . 'easydigitaldownloads.com',
	),
	'org_tickets'     => array(
		'name'        => 'WP.org',
		'id'          => 'org_tickets',
		'url'         => 'https://wordpress.org/support/plugin/easy-digital-downloads',
		'favicon'     => $favicons . 'wordpress.com',
	),
	'helpscout'       => array(
		'name'        => 'HelpScout',
		'id'          => 'helpscout',
		'url'         => 'https://secure.helpscout.net/mailbox/8bdaa0e6241e867f/321418/',
		'favicon'     => $favicons . 'helpscout.com',
	),
);

$edd_github = array(
	'edd_issues'      => array(
		'name'        => 'EDD Repo Issues',
		'id'          => 'edd_issues',
		'url'         => 'https://github.com/easydigitaldownloads/Easy-Digital-Downloads/issues',
		'favicon'     => $favicons . 'github.com',
	),
	'edd'             => array(
		'name'        => 'Easy Digital Downloads',
		'id'          => 'edd',
		'url'         => 'https://github.com/easydigitaldownloads/Easy-Digital-Downloads',
		'favicon'     => $favicons . 'github.com',
	),
	'edd_site_issues'      => array(
		'name'        => 'EDD Site Issues',
		'id'          => 'edd_site_issues',
		'url'         => 'https://github.com/easydigitaldownloads/EDD-Site/issues',
		'favicon'     => $favicons . 'github.com',
	),
	'edd_site'        => array(
		'name'        => 'EDD Site (Theme)',
		'id'          => 'edd_site',
		'url'         => 'https://github.com/easydigitaldownloads/EDD-Site',
		'favicon'     => $favicons . 'github.com',
	),
);

$edd_trello = array(
	'ext_theme'       => array(
		'name'        => 'Extensions/Themes',
		'id'          => 'ext_theme',
		'url'         => 'https://trello.com/b/bsdqsOEW/easy-digital-downloads-extensions-themes',
		'favicon'     => 'assets/images/trello-icon.png',
	),
	'admin'           => array(
		'name'        => 'Administration',
		'id'          => 'admin',
		'url'         => 'https://trello.com/b/d3ZiktZV/edd-administration',
		'favicon'     => 'assets/images/trello-icon.png',
	),
	'docs'            => array(
		'name'        => 'Documentation',
		'id'          => 'docs',
		'url'         => 'https://trello.com/b/1tLp4MNg/edd-documentation',
		'favicon'     => 'assets/images/trello-icon.png',
	),
	'fes'             => array(
		'name'        => 'FES',
		'id'          => 'fes',
		'url'         => 'https://trello.com/b/vT8aivfj/fes-development',
		'favicon'     => 'assets/images/trello-icon.png',
	),
);

$edd_resources = array(
	'dropbox_extensions' => array(
		'name'        => 'Dropbox Extensions',
		'id'          => 'dropbox_extensions',
		'url'         => 'https://www.dropbox.com/home/Add%20Ons',
		'favicon'     => 'assets/images/dropbox-icon.png',
	),
	'dropbox_themes'  => array(
		'name'        => 'Dropbox Themes',
		'id'          => 'dropbox_themes',
		'url'         => 'https://www.dropbox.com/home/Easy%20Digital%20Downloads',
		'favicon'     => 'assets/images/dropbox-icon.png',
	),
	'deployhq'        => array(
		'name'        => 'Deploy HQ',
		'id'          => 'deployhq',
		'url'         => 'https://affiliatewp.deployhq.com/',
		'favicon'     => $favicons . 'deployhq.com',
	),
);

$local_sites = array(
	'trunk'           => array(
		'name'        => 'Trunk',
		'id'          => 'trunk',
		'url'         => 'http://localhost/trunk/',
		'favicon'     => $favicons . 'wordpress.com',
		'wordpress'   => true,
	),
	'volatyl'         => array(
		'name'        => 'Volatyl',
		'id'          => 'volatyl',
		'url'         => 'http://localhost/volatyl/',
		'favicon'     => $favicons . 'volatylthemes.com',
		'wordpress'   => true,
	),
	'edd'             => array(
		'name'        => 'EDD',
		'id'          => 'edd',
		'url'         => 'http://localhost/edd/',
		'favicon'     => $favicons . 'easydigitaldownloads.com',
		'wordpress'   => true,
	),
	'themereview'     => array(
		'name'        => 'Theme Review',
		'id'          => 'themereview',
		'url'         => 'http://localhost/themereview/',
		'favicon'     => $favicons . 'wordpress.com',
		'wordpress'   => true,
	),
	'wordpress'       => array(
		'name'        => 'WordPress',
		'id'          => 'wordpress',
		'url'         => 'http://localhost/wordpress/',
		'favicon'     => $favicons . 'wordpress.com',
		'wordpress'   => true,
	),
	'edd_staging'     => array(
		'name'        => 'EDD Staging',
		'id'          => 'edd_staging',
		'url'         => 'http://localhost/edd-staging/',
		'favicon'     => $favicons . 'easydigitaldownloads.com',
		'wordpress'   => true,
	),
);