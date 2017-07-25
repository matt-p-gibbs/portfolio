<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
	'*' => array(
		'tablePrefix' => 'craft'
	),
	'localhost' => array(
		'server' => 'localhost',
		'user' => 'root',
		'password' => 'root',
		'database' => 'portfolio',
    'port' => '8889'
	),
	'www.matt-gibbs.com' => array(
		'server' => 'localhost',
		'user' => 'mattdwip_portfolio',
		'password' => 'V1s10n31',
		'database' => 'mattdwip_portfolio'
	),
	'dev.matt-gibbs.com' => array(
		'server' => 'localhost',
		'user' => 'cl50-matt-cis',
		'password' => 'V1s10n31',
		'database' => 'cl50-matt-cis'
	),
);
