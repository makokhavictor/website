<?php 
ob_start();
?>

<div  class="main zerogrid">
<div  class="wrapper row">
<div class="col-full">
	<div class="white-layer">
		<span class="s-top-margin"></span>
		<br class="clear-fix">
		<div class="col-1-4">
			<div class="a-circle">
				<ul class="rch-grid">
					<li>
						<div class="rch-item">
							<div class="rch-info">
								<div id="rch-info-front" class="rch-info-front rch-img-2"></div>
								<div class="rch-info-back">
									<h3>About</h3>
									<p>US</p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-3-4">
			<div class="a-content">
				<div class="title-header "> <i class="fa fa-users"></i> About Us</div>
				<p>Global Sites Ltd is a company that provides a wide range of solutions and services. We mainly specialise in<b> Software Development</b> ,<b> Mobile Solutions</b> and <b>Web Solutions</b>.</p><p>Our vision is to become the most recommendable service company in the industry both in Kenya and the East African Region and to revolutionise the ICT industry. With  regular training and motivation, our team has creative and innovative ways to ensure our clients experience is the best. Our team is able to offer the best and the latest trends in technology and innovation.</p>
				<br class="clear-fix">
				<h3 class="left-text font-2"> Why choose Global sites</h3>
				<ul class="ab-list">
					<li>We provide high quality flexible solutions.</li>
					<li>Excellent customer support and service. </li>
					<li>Distinctive Architecture: We design and develop distinct solutions for our client.</li>
					<li>Incredible Value: We maximise efficiency without sacrificing quality delivering solutions at better prices.</li>
					<li>On time Promise: We are efficient and always ensure that the clients projects are delivered on time.  </li>
					
				</ul>
				<span class="s-top-margin"></span>
				<span class="s-top-margin"></span>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?php
    $f_content = ob_get_contents();
    ob_end_clean();
    load_product_body('About Us',$f_content);
?>

