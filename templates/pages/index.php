<?php 
	ob_start();
	require_once(ABSPATH . TEMPLATES . 'pages/slider.php');
?>
<!-- content -->
		<div id="content">
			<div id="inner-content" class="container">
					<div class="row-fluid" id="articles">
						<div class="span3 grow">
							<h2><i class="fa fa-globe" style="color:#c25200"></i> <span> Web Solutions</span></h2>
							<p>Global Sites believes that by using current web-based technologies and effective designs, we provide... </p>
							<a href="<?=DOMAIN;?>website/webdesignd">Read More <span></span></a>
						</div>

						<div class="span3 grow">
							<h2><i class="fa fa-mobile" style="color:#c25200"></i> <span>Mobile Solutions</span></h2>
							<p>Are you looking for a team to help you build a great App for your company? We handle... </p>
							<a href="<?=DOMAIN;?>website/mobile_app">Read More <span></span></a>
						</div>	

						<div class="span3 grow">
							<h2><i class="fa fa-cloud" style="color:#c25200"></i> <span>Cloud Computing</span></h2>
							<p>In the simplest terms, cloud computing means storing , accessing data and programs over...  </p>
							<a href="<?=DOMAIN;?>website/cloud_computing">Read More <span></span></a>
						</div>

						<div class="span3 grow">
							<h2><i class="fa fa-users" style="color:#c25200"></i> <span>Social Collaboration</span></h2>
							<p>Social networks, like Facebook, Twitter, LinkedIn, and Pinterest are the places... </p>
							<a href="<?=DOMAIN;?>website/social_collaboration">Read More <span></span></a>
						</div>
				</div>

				<div id="recent" class="clearfix">
					<h1>Featured Softwares</h1>
					<div class="left">
							<img alt="" src="<?=DOMAIN.ASSETS;?>upload/coro.png">
							<a href="http://www.coronetcargo.com/" id="up"></a>
							<a href="<?=DOMAIN.ASSETS;?>upload/coro.png" id="down" rel="gallery"></a>
							<p>Legal Management System </p>
					</div>
					<div class="left">
							<img alt="" src="<?=DOMAIN.ASSETS;?>upload/nyam.png">
							<a href="http://nyamogoadvocates.co.ke/" id="up"></a>
							<a href="<?=DOMAIN.ASSETS;?>upload/nyam.png" id="down" rel="gallery"></a>
							<p>Human Resource Management</p>
					</div>
					<div class="left">
							<img alt="" src="<?=DOMAIN.ASSETS;?>upload/kira.png">
							<a href="kiragu-njenga.com" id="up"></a>
							<a href="<?=DOMAIN.ASSETS;?>upload/kira.png" id="down" rel="gallery"></a>
							<p>Archiving System </p>
					</div>
					<div class="left">
							<img alt="" src="<?=DOMAIN.ASSETS;?>upload/shang.png">
							<a href="http://shangrilasafaris.com/" id="up"></a>
							<a href="<?=DOMAIN.ASSETS;?>upload/shang.png" id="down" rel="gallery"></a>
							<p>School Management System </p>
					</div>
				</div>

				<div id="our_clients" class="clearfix">
					<h1>Our Clients</h1>
					<div class="images clearfix">
						<span><img alt="" src="<?=DOMAIN.ASSETS;?>upload/NDEGWA KATISYA.png"></span>
						<span><img alt="" src="<?=DOMAIN.ASSETS;?>upload/nyamogo_logo.png"></span>
						<span><img alt="" src="<?=DOMAIN.ASSETS;?>upload/ktk_logo.png"></span>
						<span><img alt="" src="<?=DOMAIN.ASSETS;?>upload/nyaribo_logo.png"></span>
						<span><img alt="" src="<?=DOMAIN.ASSETS;?>upload/more.png"></span>
					</div>
				</div>

				
				
			</div>
		</div>
		<!-- End content -->
<?php 
 $index_content = ob_get_contents();
 ob_end_clean();
 load_body('',$index_content);
?>