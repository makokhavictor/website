<?php
ob_start();
?>
</head>
<body>
<?php require_once(PRODUCT_ABSPATH . TEMPLATES . 'nav.php'); ?>	
<div  class="main zerogrid">
	<div  class="wrapper row">
		<div class="col-full">
			|BODY|
		</div>
	</div>
</div>
<?php 
require_once(PRODUCT_ABSPATH . TEMPLATES . 'footer.php');
 ?>
</body>
</html>
<?php
$template_body = ob_get_contents();
ob_end_clean(); 
 ?>