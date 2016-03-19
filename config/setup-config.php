<?php
	error_reporting (E_ALL);
	
	# DB Name
	define('DB_NAME', 'global');

	# MySQL database username
	define('DB_USER', 'root');

	# MySQL database password
	define('DB_PASSWORD', '');

	# MySQL hostname
	define('DB_HOST', 'localhost');

	# Database Charset to use in creating database tables.
	define('DB_CHARSET', 'utf8');
	
	# MAIN DIRECTORY 
	define ( 'ABSPATH', dirname ( __FILE__ ) . DIRECTORY_SEPARATOR. '..' . DIRECTORY_SEPARATOR );
	define ( 'DIR_SEPARATOR', DIRECTORY_SEPARATOR );
	
	
	
	# TIMEZONE SETUP
	date_default_timezone_set('Africa/Nairobi');
	# load functions
	require_once ( ABSPATH . 'lib/functions.php' );	
	
	
			
	
	
	
 ?>