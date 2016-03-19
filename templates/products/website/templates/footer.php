<footer>
	<div class="footer-wrapper">
		<div class="footer-cover">
			<div  class="main zerogrid">
			<div  class="wrapper row">
			<div class="row">
				<div class="col-md-3">
				<div class="miniture-holder">
					<div class="footer-list-wrapper">
					
						<span class="s-top-margin"></span>
							<ul class="footer-list">
					<?php 
					 $result = select_data ( 'global_info', array('visibility'=>1, ));
					 if (empty($result)) {
					 	
					 }
					 else{
                		foreach ($result as $row):                   
					?>
								<li>
									<?php echo $row['location'];?><br>
									<?php echo $row['street'];?>
								</li>
								<li>
									<?php echo $row['phone'];?>
								</li>
								<li>
									<?php echo $row['address'];?>
								</li>
								<li>
									<?php echo $row['town'];?>
								</li>
								<li>
									<?php echo $row['email'];?>
								</li>
					<?php endforeach;
					}?>
							</ul>
							<br class="clear-fix">
				
					</div>
					</div><!--mini-holder-->
				</div>
				<div class="col-md-3">
				<div class="miniture-holder">
				<span class="s-top-margin"></span>
					<span class="footer-list-h"><h4>Services</h4></span>
					<ul class="footer-list-s">
					<?php 
					 $result = select_data ( 'global_services', array('visibility'=>1, ));
					 if (empty($result)) {
					 	
					 }
					 else{
                		foreach ($result as $row):                   
					?>
						<li>
							<a href="<?php printf( '%s%s/%s', DOMAIN, PRODUCT, $row['link'] );?>"><?php echo $row['service']; ?></a>
						</li>
						
					<?php endforeach; 
					}?>
						</ul>
				</div>
				</div> 
				<div class="col-md-3">
				<div class="miniture-holder">
				<span class="s-top-margin"></span>
					<span class="footer-list-h"><h4>Products</h4></span>
					<ul class="footer-list-s">
						<?php 
					 $result = select_data ( 'global_products', array('visibility'=>1, ));
					 if (empty($result)) {
					 	
					 }
					 else{
                		foreach ($result as $row):
                   

					?>
						<li>
							<a href="<?php printf( '%s%s', DOMAIN , $row['link']);?>"><?php echo $row['product']; ?></a>
						</li>
						
					<?php endforeach; 
					}?>
						
						</ul>
				</div>
				</div>
				<div class="col-md-3">
					<span class="bottom-logo" >
						<figure >
							<img src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/images/slices/logo.png"/>
						</figure>
					</span>
					<br class="clear-fix">
				</div>
			</div>
			</div>
			</div>
		</div>
	</div>
	<div class="footer-holder ">
		<span class="footer-content">
			<h6>Global Sites . © 2015. All Rights Reserved.</h6>
		</span>
	</div>
<script type="text/javascript" src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/js/jquery.validate.min.js"></script>
<script  src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/js/jquery.tooltipster.js"></script>
<script  src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/js/jquery.smartmenus.js"></script>
<script  src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/js/jquery.liquid-slider.min.js"></script>
</footer>