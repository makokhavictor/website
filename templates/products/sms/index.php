<?php 
	require_once ( ABSPATH . PRODUCTS . 'archiving/settings.php' );
	$page = gsl_lms_load_website ();
	if ( ! file_exists ( PRODUCT_ABSPATH . TEMPLATES . $page . '.php' ) ):
		printf ( '%s', gsl_er ( 'error', 'We could not find what you are looking for.' ) );
		exit();
	else:
		
  
	    $custom  = '<link href="'. DOMAIN . PRODUCTS . PRODUCT . '/'. CSS .'bootstrap.min.css" rel="stylesheet">';
	    $custom .= '<link href="'. DOMAIN . PRODUCTS . PRODUCT . '/'. CSS .'theme.css" rel="stylesheet">';
	    $custom .= '<link href="'. DOMAIN . PRODUCTS . PRODUCT . '/'. CSS .'bootstrap-reset.css" rel="stylesheet">';
	    $custom .= '<link href="'. DOMAIN . PRODUCTS . PRODUCT . '/' . ASSETS .'font-awesome/css/font-awesome.css" rel="stylesheet" />';

		$custom .= '<link rel="stylesheet" href="' . DOMAIN . PRODUCTS . PRODUCT . '/' . ASSETS . '/revolution_slider/css/rs-style.css" media="screen">';
    	$custom .= '<link rel="stylesheet" href="' . DOMAIN . PRODUCTS . PRODUCT . '/' . ASSETS . '/revolution_slider/rs-plugin/css/settings.css" media="screen">';
    	$custom .= '<link href="' . DOMAIN . PRODUCTS . PRODUCT . '/' . ASSETS . '/css/style-responsive.css" rel="stylesheet" />';

		printf ( '%s', gsl_main_header ( 'Welcome to Global Archiving', $custom ) );

	 
		lms_navigation();

		require_once ( PRODUCT_ABSPATH . TEMPLATES . $page . '.php' );
	endif;

	load_footer();
 ?>