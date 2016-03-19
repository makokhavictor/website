<?php 

	require_once (dirname(__DIR__). '/../../config/setup-config.php' );
	
	define ( 'PRODUCT', 'lms' );
	define ( 'PRODUCT_ABSPATH', ABSPATH . PRODUCTS . PRODUCT . '/'  );
	
	require_once ( PRODUCT_ABSPATH . 'library/functions.php' );
	require_once ( PRODUCT_ABSPATH . 'library/rewrite.php' );
?>