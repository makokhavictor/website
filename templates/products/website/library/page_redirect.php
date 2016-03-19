<?php
if ( ! isset ( $_GET['section'] )   ):
	printf (lms_er('error','Page not found'));
else:
	$page= $_GET['section'];

	if (isset($_GET['sub_section'])) {
		$page2=$_GET['sub_section'];
		require_once( PRODUCT_ABSPATH. TEMPLATES . $page2.".php");
	}
else{
	



require_once( PRODUCT_ABSPATH. TEMPLATES . $page.".php");

}

endif;
?>