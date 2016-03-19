<?php 
ob_start();
?>
<div class="lms-main-header-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="lms-heading">
					<h3>About Global HRM</h3>
					<span>A powerful software to store their employee details securely.</span>
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
			<h4 class="u-caps darh-heading bold">Global Human Resource Management System</h4>
		</div>
		<div class="col-sm-4">
			<div class="lms-content">
				<p>All HR Departments require a system to store their employee details securely. Global Hrm allows companies to centralize confidential employee information and define access permissions to authorized personnel to ensure that employee information is both secure and accessible.</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="lms-content">
				<p>Global HRM powerful leave management module allows you to stop all time-off abuses and centralize all your leave data. It allows you to add your own leave types, make exceptions to individual employees and groups using leave rules and also supports leave accrual and carry forwarding leaves to next leave period. </p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="lms-content">
				<p><b>Global Human Resource Management System increases your firms:</b></p>
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
						<h3>Global Human Resource Management<br> System</h3>
						<p>Are you still not able to track what your employees were <br>
							working on whole last week? Don't you still have employee <br>
							attendance records in a centralized location?</p>
						  <a href="<?php echo DOMAIN . PRODUCT . '/features'; ?>">View All Features</a>
					</div>
				</div>
				<div class="col-sm-6">
					<h3 class="u-caps">Main Features</h3>
					<div class="main-fets-holder">
						<span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'gavel.png' ?>" class="img-responsive" alt=""></span>
						<div>
							<h5 class="u-caps bold">Leave management</h5>
							<p>Capture and review attendance and timesheet data with efficiency and ease with Global Human Resource Management System.</p>
						</div>
					</div>
					<div class="main-fets-holder">
						<span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'search.png' ?>" class="img-responsive" alt=""></span>
						<div>
							<h5 class="u-caps bold">Employee time tracking</h5>
							<p>Capture and review attendance and timesheet data with efficiency and ease with with the time tracking module.</p>
						</div>
					</div>
					<div class="main-fets-holder">
						<span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'billing.png' ?>" class="img-responsive" alt=""></span>
						<div>
							<h5 class="u-caps bold">Employee Information Manager</h5>
							<p>With Global Human Resource Management System, all the company's employees are securely stored and management well to enable proper employee evaluation.</p>
						</div>
					</div>
					<div class="main-fets-holder">
						<span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'responsive.png' ?>" class="img-responsive" alt=""></span>
						<div>
							<h5 class="u-caps bold">Training & Development</h5>
							<p>This module helps in the upgrading of a person’s skill or the addition of a new skill, which in turn can bring about the desired change an agency is seeking.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
$about_content = ob_get_contents();
ob_end_clean();
load_product_body('About HRM',$about_content);
?>