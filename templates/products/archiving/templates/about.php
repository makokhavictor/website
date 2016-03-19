<?php 
ob_start();
?>
<div class="lms-main-header-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="lms-heading">
					<h3>About Global Archiving</h3>
					<span>Scalable solution to support your company’s growth.</span>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="breadcrumb-holder">
					<a href="<?php echo DOMAIN . PRODUCT; ?>">Home &rsaquo;</a>
					<a>About</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h4 class="u-caps darh-heading bold">Global Archive System</h4>
		</div>
		<div class="col-sm-4">
			<div class="lms-content">
				<p>Our Global Archive System provides a complete turnkey solution for all of your paper and digital documents. We take the paper off your hands. You can perform your own scanning or simply outsource digitization and paper storage to us. our software aims at improving your company's performance by reducing the time wasted in dealing with paper work.</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="lms-content">
				<p>Automate the capture of shared file systems into a single repository, and leverage powerful records management controls to comply with policies and simplify the disposal of documents. Global Archiving System provides a reliable foundation for your evolving file storage requirements, reducing future integration costs and protecting your investment in existing technology.</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="lms-content">
				<p><b>Global Archiving System increases your firms:</b></p>
				<div class="div-per-holder">
					<div class="div-per-titl-holder"></div>
						<span class="div-per-title">EFFICIENCY</span>
						<span class="div-per-cent">95%</span>
						<br class="clear-fix">					
					<div class="div-percent"><span class="p-bar-95 orange"></span></div>
				</div>
				<div class="div-per-holder">
					<div class="div-per-titl-holder"></div>
						<span class="div-per-title">PRODUCTIVITY</span>
						<span class="div-per-cent">80%</span>
						<br class="clear-fix">					
					<div class="div-percent"><span class="p-bar-80 pink"></span></div>
				</div>
				<div class="div-per-holder">
					<div class="div-per-titl-holder"></div>
						<span class="div-per-title">PROFITABILITY</span>
						<span class="div-per-cent">60%</span>
						<br class="clear-fix">					
					<div class="div-percent"><span class="p-bar-60 green"></span></div>
				</div>
			</div>
			</div>
		</div>
	</div>

	<div class="lms-about-us-canvas">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'about.png' ?>" class="" alt="">
					<div class="lms-bg-img-content">
						<h3>Experience Global Archive Software</h3>
						<p>All contextual metadata information, including auditing, version<br>
						 control, security permissions, and more, is handled by a dedicated<br>
						  metadata management module.</p>
						  <a href="<?php echo DOMAIN . PRODUCT . '/features'; ?>">View All Features</a>
					</div>
				</div>
				<div class="col-sm-6">
					<h3 class="u-caps">Main Features</h3>
					<div class="main-fets-holder">
						<span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'gavel.png' ?>" class="img-responsive" alt=""></span>
						<div>
							<h5 class="u-caps bold">Quick Universal Access</h5>
							<p>Easy, secure access through a browser interface or through your existing Global systems systems.</p>
						</div>
					</div>
					<div class="main-fets-holder">
						<span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'search.png' ?>" class="img-responsive" alt=""></span>
						<div>
							<h5 class="u-caps bold">User- friendly to multiple devices</h5>
							<p>Scalable solution to support your company’s growth with Web based user-friendly interface.</p>
						</div>
					</div>
					<div class="main-fets-holder">
						<span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'billing.png' ?>" class="img-responsive" alt=""></span>
						<div>
							<h5 class="u-caps bold">Speed and Accuracy</h5>
							<p>High quality scanners to scan all your documents and store them on a button click.</p>
						</div>
					</div>
					<div class="main-fets-holder">
						<span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'responsive.png' ?>" class="img-responsive" alt=""></span>
						<div>
							<h5 class="u-caps bold">Minimize risks and ensure data security</h5>
							<p> It gives you the freedom to work when you want and where you want without restrictions using your smart devices. (Ipad, & Smartphones) </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	$home_content = ob_get_contents();
	ob_end_clean();
	load_product_body('About Archiving',$home_content);
	?>