<?php

/*
// Override any of the default settings below:

$config['site_title'] = 'Pico';			// Site title
$config['base_url'] = ''; 				// Override base URL (e.g. http://example.com)
$config['theme'] = 'default'; 			// Set the theme (defaults to "default")
$config['date_format'] = 'jS M Y';		// Set the PHP date format
$config['twig_config'] = array(			// Twig settings
	'cache' => false,					// To enable Twig caching change this to CACHE_DIR
	'autoescape' => false,				// Autoescape Twig vars
	'debug' => false					// Enable Twig debug
);
$config['items_per_page'] = 15;

// Un-comment to make your gallery private

$config['private'] = true;
$config['private_pass']['admin'] = 'd033e22ae348aeb5660fc2140aec35850c4da997'; // user credentials
$config['admin_pass']['admin'] = 'd033e22ae348aeb5660fc2140aec35850c4da997'; // admin credentials

// To add a custom config setting:

$config['custom_setting'] = 'Hello'; 	// Can be accessed by {{ config.custom_setting }} in a theme

*/
$config['site_title'] = 'Picturo 2.0';
$config['base_url'] = 'http://localhost/Picturo2.0'; 				// Override base URL (e.g. http://example.com), no slash at end.
$config['private'] = true;                  // To enable private session change this to 'true' else 'false'
$config['admin_pass']['admin'] = 'sha512:1000:2Gp+SOuwkWQpMsemFvMyxfPtEfY/M77l:GrHLycEBPATCSmFCmd4onEynvfSoNR3Q';
$config['private_pass']['toto'] = 'sha512:1000:2Gp+SOuwkWQpMsemFvMyxfPtEfY/M77l:GrHLycEBPATCSmFCmd4onEynvfSoNR3Q';
$config['nbOfFolders'] = 3;
$config['theme'] = 'yashanyket';			// Set the theme -> default / dineshkummarc / jerrywham / yashanyket (defaults to "default")
// $config['locale'] = '';
// $config['timezone'] = '';
$config['date_format'] = 'jS M Y';
$config['items_per_page'] = 25;              // defaults to 15 images per page
$config['twig_config'] = array(			// Twig settings
	'cache' => 'base_url'.'/conf/',  	// To enable Twig caching change this to CACHE_DIR i.e. 'base_url'.'/conf/' else false
	'autoescape' => true,				// Autoescape Twig vars
	'debug' => true			            // Enable Twig debug
);
// custom config
$config['twigversion'] = 0;
$config['phpversion'] = 0;

?>