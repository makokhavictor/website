<?php 
ob_start();
?>
<!-- content -->
		<div id="content">
			<div class="cont-head">
				<div class="cont-text container">
					<h1>About</h1>
					<p>You are Here:<a href="#"><span></span> Home</a><a href="#"><span></span> About</a></p>
				</div>
			</div>

			<div id="inner-content" class="container">
				<div id="about">
					<div class="row-fluid">
						<div class="span5">
							<img alt="" src="<?=DOMAIN.ASSETS;?>upload/about.jpg">
						</div>
						<div class="span7">
							<h1>Meet Our Team</h1>
							<p>Global Sites Ltd is a company that provides a wide range of solutions and services. We mainly specialise in<b> Software Development</b> ,<b> Mobile Solutions</b> and <b>Web Solutions</b>.</p><p>Our vision is to become the most recommendable service company in the industry and revolutionise the ICT industry. With  regular training and motivation, our team has creative and innovative ways to ensure our clients experience is the best. Our team is able to offer the best and the latest trends in technology and innovation.</p>

							<p>
								Here at Global Sites Limited, we ensure that our clients are happy with the final product in a way that suits whatever need they asked for. Therefore our target is always to come up with a solution that directly mirrors the client requirements as much as possible.
							</p>
						</div>
					</div>

					<!-- <div class="row-fliud clearfix" id="our-team">
						<h1>Our Team</h1>

						<div class="span3" id="member1">
							<a href="#"><img alt="" src="<?=DOMAIN.ASSETS;?>upload/mem1.jpg"></a>
							<h4>Stanley Mwangi</h4>
							<span>Director</span>
							<p>Each Administration Screen is presented in sections, the toolbar (and header), the main navigation, the Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>

						<div class="span3" id="member">
							<a href="#"><img alt="" src="<?=DOMAIN.ASSETS;?>upload/mem1.jpg"></a>
							<h4>Edward Gwada</h4>
							<span>Technical Manager</span>
							<p>Each Administration Screen is presented in sections, the toolbar (and header), the main navigation, the</p>
						</div>

						<div class="span3" id="member">
							<a href="#"><img alt="" src="<?=DOMAIN.ASSETS;?>upload/mem1.jpg"></a>
							<h4>Samson Mutunga</h4>
							<span>Lead Developer</span>
							<p>Each Administration Screen is presented in sections, the toolbar (and header), the main navigation, the</p>
						</div>

						<div class="span3" id="member">
							<a href="#"><img alt="" src="<?=DOMAIN.ASSETS;?>upload/mem1.jpg"></a>
							<h4>Eunice Njeri Gitau</h4>
							<span>Marketing Executive</span>
							<p>Each Administration Screen is presented in sections, the toolbar (and header), the main navigation, the</p>
						</div>

					</div> -->

					<div id="our_clients" class="clearfix row-fluid">

						<div class="span6">
							<h1> Why choose Global sites</h1>
							<ul class="ab-list">
								<li>We provide high quality flexible solutions.</li>
								<li>Excellent customer support and service. </li>
								<li>Distinctive Architecture: We design and develop distinct solutions for our client.</li>
								<li>Incredible Value: We maximise efficiency without sacrificing quality delivering solutions at better prices.</li>
								<li>On time Promise: We are efficient and always ensure that the clients projects are delivered on time.  </li>
							</ul>
						</div>

						<div class="images span6 clearfix">
							<h1>Our Clients</h1>
							<!-- <ul>
								<li>
									<img alt="" src="<?=DOMAIN.ASSETS;?>images/client-logo1.png">
								</li>
								<li>
									<img alt="" src="<?=DOMAIN.ASSETS;?>images/client-logo2.png">
								</li>
								<li>
									<img alt="" src="<?=DOMAIN.ASSETS;?>images/client-logo3.png">
								</li>
								<li>
									<img alt="" src="<?=DOMAIN.ASSETS;?>images/client-logo4.png">
								</li>
								<li>
									<img alt="" src="<?=DOMAIN.ASSETS;?>images/client-logo5.png">
								</li>
								<li>
									<img alt="" src="<?=DOMAIN.ASSETS;?>images/client-logo1.png">
								</li>
							</ul> -->

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End content -->
<?php 
 $about_content = ob_get_contents();
 ob_end_clean();
 load_body('About Us',$about_content);
?>