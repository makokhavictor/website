<?php
ob_start();
?>
</head>
<body>
<div id="container">
<?php require_once(PRODUCT_ABSPATH . TEMPLATES . 'nav.php'); ?>	
|BODY|
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