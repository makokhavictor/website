	<?php
			$server_request = $_SERVER['REQUEST_URI'];
	$server_gets = explode ( '/', $server_request );
	foreach ( $server_gets as $get_index=>$server_get ):
		if ( strlen ( $server_get ) == 0 ):
			continue;
		elseif ( $server_get == 'global' ):
		else:
			$server_urls[] = $server_get;
		endif;
	endforeach;
	$count_url_gets = 0;
	if ( ! isset ( $server_urls ) ):
		# skip rewriting.
	else:
		foreach ( $server_urls as $server_get_value ):
		$count_url_gets++;
		if ( $count_url_gets == 1 ):
			$_GET['product'] = $server_get_value;
		elseif ( $count_url_gets == 2 ) :
			$_GET['section'] = $server_get_value;
		elseif ( $count_url_gets == 3 ) :
			$_GET['sub_section'] = $server_get_value;
		else:
		
		endif;
	endforeach;
	endif;
	 ?>