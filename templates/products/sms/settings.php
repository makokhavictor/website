<?php 

	require_once ($_SERVER['DOCUMENT_ROOT']. '/global/settings.php' );
	define ( 'PRODUCT', 'archiving' );
	define ( 'PRODUCT_ABSPATH', ABSPATH . PRODUCTS . PRODUCT . '/'  );
	
	require_once ( PRODUCT_ABSPATH . LIBRARY . 'functions.php' );
	require_once ( PRODUCT_ABSPATH . LIBRARY . 'rewrite.php' );
?>