<?php 
ob_start();
?>
<div  class="main zerogrid">
<div  class="wrapper row">
<div class="col-full">
	<div class="white-layer">
		<div class="social-holder">
			<div class="circle-holder">
				<div class="circle1 fromleft">
					<figure class="image2 zoomInn">
						<img src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/images/slices/s5.png"/>
					</figure>
				</div>
				<div class="circle2 fromright">
					<figure class="image zoomInn">
						<img  src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/images/slices/social.png"/>
					</figure>
				</div>
			</div>
			<div class="social-content zoomInn ">
				<div class="a-content">
					<span class="title-header">
						<i class="fa fa-weixin"></i> Social Collaboration
					</span>
				</div>
				<span class="s-top-margin"></span>
				<p > Social networks, like Facebook, Twitter, LinkedIn, and Pinterest are the places where social interactions happen (discovering & sharing) and social media marketing is the way to use that technology to build relationships, drive repeat business and attract new customers through friends sharing with friends. Global sites has the tools and expertise to help you maximize the value of social collaboration in business environments, including profiles, blogs, wikis, bookmarking, tagging, activities, communities, shared files, team spaces with content management tools, enterprise instant messaging, online meetings, audio and video chat, email and calendaring, delivered on premises or in the cloud.</p>
			</div>
		</div><!--/social-holder-->
		<br class="clear-fix">
	</div>
</div>
</div>
</div>
  <?php
    $f_content = ob_get_contents();
    ob_end_clean();
    load_product_body('Social Collaboration',$f_content);
?>