	<?php 
		function gsl_lms_load_website () {
			if ( ! isset ( $_GET['sub_section'] ) ):
				$page = 'home';
			else:
				$val = new validation;
				$status = $val->check_data ( $_GET['sub_section'], 'STRING' );
				if ( ! $status ):
					$page = '404';
				else:
					$page = $val->check_data ( $_GET['sub_section'], 'PURIFY' );
				endif;
				$file = gsl_clean_dir_url ( $page );
				if ( ! $file ):
					$page = '404';
				else:
					$page = $file;
				endif;
			endif;
			return $page;		 
		}
		function lms_navigation() {
			require_once(PRODUCT_ABSPATH.TEMPLATES.'nav.php');
		}


//Main slider 
		function load_footer () {
			require_once (PRODUCT_ABSPATH.TEMPLATES.'footer.php');
		}
	 ?>