<?php 
ob_start();
?>
<div  class="main zerogrid">
<div  class="wrapper row">
<div class="col-full">
	<div class="white-layer">
		<div class="mob-s-wrapper">
			<div id="mob-top-wrapper"class="goUp2" >
				<div class="mob-img">
					<figure style="width:60%; margin:0 auto; display:block;">
						<img src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/images/slices/mobileapp - Copy.png"/>
					</figure>
				</div>
				<div class="mob-content">
					<div class="a-content">
						<div class="title-header"><i class="fa fa-weixin"></i>Mobile Applications</div>
					</div>
					<p>Are you looking for a team to help you build a great App for your company? We  handle mobile projects from small, simple Apps to complex projects.Whether you are an innovative startup with an idea to disrupt a market, a demanding brand wanting to update your consumer application, or a large corporation needing help with enterprise app development, we're ready to help. We can handle projects for any type of industry and can design your App from scratch or include our existing tools and platforms. </p>
				</div>
			</div>
		</div>
		<div class="goUp imagetext">
			<figure class="mob-h-image ">
				<img src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/images/slices/hands3.png"/>
			</figure>
		</div>
	</div>
</div>
</div>
</div>
<?php
    $f_content = ob_get_contents();
    ob_end_clean();
    load_product_body('Mobile Services',$f_content);
?>