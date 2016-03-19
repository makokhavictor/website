<?php
ob_start();
?>
</head>
<body>
<div id="container" class="body-background">
<?php require_once(ABSPATH . TEMPLATES . 'nav.php'); ?>	
|BODY|
</div>
<!-- call your scripts -->
<?php 
require_once(ABSPATH . TEMPLATES . 'footer.php');
 ?>
</body>
</html>
<?php
$template_body = ob_get_contents();
ob_end_clean(); 
 ?>