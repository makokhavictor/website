<?php 
require_once ( ABSPATH . PRODUCTS . 'website/seting.php' );
	
if(empty($_GET['page'])):
	require_once ( PRODUCT_ABSPATH . TEMPLATES .  'home.php' );
else:
	require_once ( PRODUCT_ABSPATH . TEMPLATES . $_GET['page'] . '.php' );
endif;

 ?>