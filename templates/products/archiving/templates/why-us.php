<?php 
ob_start();
?> 
<div class="boxbg">
<!-- <img class="barnimg" src="<?php  ?>"> -->
<div class="featurediv">

<div class=" row pl1">

	<h2>Why Global Law Management System</h2>

	<p >GLMS helps you organize your practice by making more efficiently, provide better better client service, improve  teamwork and capture more billable time</p>
	<p> We are offering you a mattter centric Legal MAnagement Solution that equips you with poqwerful features that enabld you to concentrate onb your day to day work, putting you in control of your law firm</p>
	<h4>This helps you to increase and attain</h4>
	
<div class="col-md-4">
	<span> <img class="bbm" src="<?php  echo DOMAIN.PRODUCTS.PRODUCT.'/assets/images/icons/pn.png' ?>"> </span><h5>EFFICIENCY</h5>
</div>
<div class="col-md-4">
	<span> <img class="bbm" src="<?php  echo DOMAIN.PRODUCTS.PRODUCT.'/assets/images/icons/pn.png' ?>"> </span><h5>PRODUCTIVITY</h5>
</div>
<div class="col-md-4">
	<span> <img class="bbm" src="<?php  echo DOMAIN.PRODUCTS.PRODUCT.'/assets/images/icons/pn.png' ?>"> </span><h5>PROFITABILITY</h5>
</div>
	
<div class="row">
	<div class="col-md-6">
	<h3>What you experience</h3>
<div class="row">
	<div class="imgp">
		<img  src="<?php  echo DOMAIN.PRODUCTS.PRODUCT.'/assets/images/icons/mm.png' ?>">
	</div>
	<div class="imgc">
		<h4>Matter Management</h4>
		Matter centric Documents and Email filing all in one place
	</div>
</div>
<div class="row">
	<div class="imgp">
		<img  src="<?php  echo DOMAIN.PRODUCTS.PRODUCT.'/assets/images/icons/tb.png' ?>">
	</div>
	<div class="imgc">
		<h4>Time & Billing</h4>		
		Time and Billing features that allows you to easily create bills and get paid faste
	</div>
</div>

<div class="row">
	<div class="imgp">
		<img  src="<?php  echo DOMAIN.PRODUCTS.PRODUCT.'/assets/images/icons/et.png' ?>">
	</div>
	<div class="imgc">
		<h4>Manage events and tasks</h4>		
		
		Calendars and Reminders to make sure you and your clients never miss an important date
	</div>
</div>
<div class="row">
	<div class="imgp">
		<img  src="<?php  echo DOMAIN.PRODUCTS.PRODUCT.'/assets/images/icons/cm.png' ?>">
	</div>
	<div class="imgc">
		<h4>Contact Management</h4>		
		Organize all the firm contacts and easily communicate with clients and staff
	</div>
</div>

<div class="row">
	<div class="imgp">
		<img  src="<?php  echo DOMAIN.PRODUCTS.PRODUCT.'/assets/images/icons/sb.png' ?>">
	</div>
	<div class="imgc">
		<h4>System Backup</h4>	
		
		Real Time System Backups with the option of iCloud Backups
	</div>
</div>

</div>
<div class="col-md-6">
	<h3>What your clients experience</h3>

<div class="row">
	<div class="imgp">
		<img  src="<?php  echo DOMAIN.PRODUCTS.PRODUCT.'/assets/images/icons/cl.png' ?>">
	</div>
	<div class="imgc">
		<h4>Client Login</h4>
		
		Clients have a secure access to all important matter details 24/7
	</div>
</div>
<div class="row">
	<div class="imgp">
		<img  src="<?php  echo DOMAIN.PRODUCTS.PRODUCT.'/assets/images/icons/bl.png' ?>">
	</div>
	<div class="imgc">
		<h4>Billing</h4>
		
		
View calendar, billing details based on permissions
	</div>
</div>
<div class="row">
	<div class="imgp">
		<img  src="<?php  echo DOMAIN.PRODUCTS.PRODUCT.'/assets/images/icons/inv.png' ?>">
	</div>
	<div class="imgc">
		<h4>Invoices</h4>
		
			
Receive invoices/messages right from the system so they stay completely organizedClients have a secure access to all 
	</div>
</div>
<div class="row">
	<div class="imgp">
		<img  src="<?php  echo DOMAIN.PRODUCTS.PRODUCT.'/assets/images/icons/up.png' ?>">
	</div>
	<div class="imgc">
		<h4>Realtime Updates</h4>
		
Clients have an easy way of getting updated on their matters and account status
		
	</div>
</div>
</div>
</div>
</div>


</div>
</div>
<?php
    $f_content = ob_get_contents();
    ob_end_clean();
    load_product_body('About Archiving System',$f_content);
?>