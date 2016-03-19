<?php 

	#load core files
	session_start ();
	require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'../config/setup-config.php');
	require_once(ABSPATH . LIBRARY . 'rewrite.php');
	// var_dump($_GET);exit;
	#check if the user is logged in
	/*if ( ! isset ( $_SESSION['lms_session_id'] ) || empty ( $_SESSION['lms_session_id'] ) ) :
			
	    			
			require_once (ABSPATH .  TEMPLATES . 'login.php' );	
			
	else:*/
		if(!isset($_GET['module']) || empty($_GET['module'])):
			#home url
			if(!file_exists(ABSPATH . TEMPLATES . 'index.php')):
				require_once(ABSPATH . TEMPLATES . '404.php');
			else:
				require_once(ABSPATH . TEMPLATES . 'pages/index.php');
			endif;
		else:
			#now module is set
			$module_dir = $_GET['module'] . DIRECTORY_SEPARATOR;
			if(!file_exists(ABSPATH . TEMPLATES . 'pages/'.$_GET['module'].'.php')):
				require_once(ABSPATH . TEMPLATES . 'pages/404.php');
			else:
				require_once(ABSPATH . TEMPLATES . 'pages/'.$_GET['module'].'.php');
			endif;
		endif;
	// endif;
// endif;
 ?>