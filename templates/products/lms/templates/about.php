<?php 
ob_start();
?>
<div class="lms-main-header-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="lms-heading">
					<h3>About Us</h3>
					<span>Increasing your firm productivity, efficiency & profitability.</span>
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
			<h4 class="u-caps darh-heading bold">Global Legal Management System</h4>
		</div>
		<div class="col-sm-4">
			<div class="lms-content">
				<p>Global Legal Management Sytsem is the most comprehensive, easy-to-use web-based, stand-alone/cloud-based law practice management software that helps to organize all legal matters, tasks, meetings and enables sharing of documents across in one central place.</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="lms-content">
				<p>Global Legal Management Sytsem is easy to set up and start using since it does not require expensive infrastructure and it has easy settings procedure to quickly create your firm's details and start running the system.</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="lms-content">
				<p>Global legal Management System increases your firms:</p>
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
						<h3>Global Legal Management Software</h3>
						<p>Designed for you and your clients with integrated client portal<br>
						 to keep updated and receieve invoices as well as alerts on<br>
						  important dates.</p>
						  <a href="<?php echo DOMAIN . PRODUCT . '/features'; ?>">View All Features</a>
					</div>
				</div>
				<div class="col-sm-6">
					<h3 class="u-caps">Main Features</h3>
					<div class="main-fets-holder">
						<span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'gavel.png' ?>" class="img-responsive" alt=""></span>
						<div>
							<h5 class="u-caps bold">Matter Management</h5>
							<p>It takes all of your critical practice challenges and organizes them in a way that is incredibly straightforward and intuitive</p>
						</div>
					</div>
					<div class="main-fets-holder">
						<span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'search.png' ?>" class="img-responsive" alt=""></span>
						<div>
							<h5 class="u-caps bold">Conflict of Interest Checker</h5>
							<p>Our conflict checker searches through the contact database and emails in order to avoid conflict of interest situations.</p>
						</div>
					</div>
					<div class="main-fets-holder">
						<span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'billing.png' ?>" class="img-responsive" alt=""></span>
						<div>
							<h5 class="u-caps bold">Time & Expense Tracking</h5>
							<p>LMS makes it easier to capture ALL billable time and expenses thus increasing your efficiency</p>
						</div>
					</div>
					<div class="main-fets-holder">
						<span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'responsive.png' ?>" class="img-responsive" alt=""></span>
						<div>
							<h5 class="u-caps bold">Accessibility</h5>
							<p>It gives you the freedom to work when you want and where you want without restrictions using your smart devices. (Ipad, & Smartphones)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <?php
    $f_content = ob_get_contents();
    ob_end_clean();
    load_product_body('About LMS',$f_content);
?>