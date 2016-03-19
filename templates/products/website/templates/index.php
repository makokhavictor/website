<?php require_once('header.php'); ?>

<body>






<?php
//Template switching for PBC 
if(isset($_GET['refid'])) {
$template = $_GET['refid'];
switch_major_templates ($template);
}
else {
//Display default home page 
load_template ('home');
}

 ?>




<br class="clear-fix">
<?php require_once('footer.php'); ?>
</body>
</html>