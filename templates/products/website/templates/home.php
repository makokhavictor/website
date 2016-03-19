<?php ob_start(); ?>
<div class="testting">

	<span class="s-top-margin"></span>
	<div id="w-circle" class="w-circle">
		<div class="hover-tag"></div>
		<span class="c-logo" style="">
			<img class="image-3" src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/images/slices/head-logo.png"/>
		</span>
		<div id="email" class="icon-1 i-1">
			<a href="index.php?refid=webdesignd&ln=eml#bazinga">
				<span class="icon-w-1"><i class="fa fa-envelope-o fa-lg"></i></span>
			</a>
		</div>
		<div id="social" class="icon-2 i-2 ">
			<a href="index.php?refid=social_collaboration">
				<span class="icon-w-2"><i class="fa fa-comments-o fa-lg"></i></span>
			</a>
		</div>
		<div id="i-4" class="icon-3 i-3">
			<a href="index.php?refid=mobile_app">
				<span class="icon-w-3"><i class="fa fa-tablet fa-lg"></i></span>
			</a>
		</div>
		<div id="i-5" class="icon-4 i-4">
			<a href="index.php?refid=cloud_computing">
				<span class="icon-w-4"><i class="fa fa-cloud fa-lg"></i></span>
			</a>
		</div>
		<div id="i-55"class="icon-5 i-5">
			<a href="index.php?refid=webdesignd&ln=seo#bazinga">
				<span class="icon-w-5"><i class="fa fa-search fa-lg"></i></span>
			</a>
		</div>
		<div id="i-6" class="icon-6 i-6">
			<a href="index.php?refid=webdesignd">
				<span class="icon-w-6"><i class="fa fa-desktop fa-lg"></i></span>
			</a>
		</div>
		<div id="i-7" class="icon-7 i-7">
			<a href="index.php?refid=contact">
				<span class="icon-w-7"><i class="fa fa-phone-square fa-lg"></i></span>
			</a>
		</div>
		<div id="i-8"class="icon-8 i-8">
			<a href="index.php?refid=about_us">
				<span class="icon-w-8"><i class="fa fa-users fa-lg"></i></span>
			</a>
		</div>
		<div id="webd-title"class="title-pic"> webdesign</div>
		<div id="webd" class="about-wbd">
			<a href="index.php?refid=webdesignd">
				<span class="rd-more">Read More</span>
			</a>
		</div>
		<div id="mbl-title"class="title-mbl"> Mobile<br>Apllications</div>
		<div id="mbl" class="about-mbl">
		<a href="index.php?refid=mobile_app">
			<span class="rd-more">Read More</span>
		</a>
		</div>
		<div id="sol-title"class="title-sol">Search Engine<br> Optimization</div>
		<div id="sol" class="about-sol">
			<a href="index.php?refid=webdesignd&ln=seo#bazinga">
				<span class="rd-more">Read More</span>
			</a>
		</div>
		<div id="ebl-title"class="title-ebl">Email<br> Management</div>
		<div id="ebl" class="about-ebl">
			<a href="index.php?refid=webdesignd&ln=eml#bazinga">
				<span class="rd-more">Read More</span>
			</a>
		</div>
		<div id="scl-title"class="title-scl">Social<br> Collaboration</div>
		<div id="scl" class="about-scl">
			<a href="index.php?refid=social_collaboration">
				<span class="rd-more">Read More</span>
			</a>
		</div>
		<div id="cldd-title"class="title-cldd">Cloud<br> Computing</div>
		<div id="cldd" class="about-cldd">
			<a href="index.php?refid=cloud_computing">
				<span class="rd-more">Read More</span>
			</a>
		</div>
		<div id="cnt-title"class="title-cnt">Contacts</div>
		<div id="cnt" class="about-cnt">
			<a href="index.php?refid=contact">
				<span class="rd-more">Read More</span>
			</a>
		</div>
		<div id="abut-title"class="title-abut">About Us</div>
		<div id="abut" class="about-abut">
			<a href="index.php?refid=about_us">
				<span class="rd-more">Read More</span>
			</a>
		</div>
	</div>
	<!--mobile-apps-->
	
	<div class="mobile-devices">
	<span class="s-top-margin"></span>
	<div class="md-welcome">
	<div class="md-welcome-i"><i class="fa fa-home fa-lg"></i></div>
	<div class="md-welcome-m"><p>Welcome to Global Sites where we put you on the global map.<br>Global Sites Ltd is a company that provides a wide range of solutions and services. We mainly specialise in Software Development , Mobile Solutions and Web Solutions.</p></div>
	</div>
	<div class="md-readmore">
	<p>Our Services</p>
	<span><a href="index.php?refid=about_us">Read more</a></span>
	</div>
	</div>
	<!--mobile-apps-->
</div>
<script type="text/javascript" src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/js/spin.js"></script>
<br class="clear-fix">


 <?php
    $f_content = ob_get_contents();
    ob_end_clean();
    load_product_body('Global Home',$f_content);
?>