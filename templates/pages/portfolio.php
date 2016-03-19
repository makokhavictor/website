<?php 
ob_start();
?>
<!-- content -->
		<div id="content">
			<div class="cont-head">
				<div class="cont-text container">
					<h1>Portfolio</h1>
					<p>You are Here:<a href="#"><span></span> Home</a><a href="<?=DOMAIN;?>"><span></span> Portfolio</a></p>
				</div>
			</div>
			<div id="inner-content" class="container">

				<ul id="portfolio-filter">
					<li><a href="#" class="active4" data-filter="*">all</a></li>
					<li><a href="#" data-filter=".softwares">softwares</a></li>
					<li><a href="#" data-filter=".apps">mobile apps</a></li>
					<li><a href="#" data-filter=".others">other solutions</a></li>
					<li><a href="#" data-filter=".webdesign">Web design</a></li>
				</ul>

				<ul class="portfolio clearfix">

					<li class="portfolio-post col3 print webdesign others">
						<img alt="" src="<?=DOMAIN.ASSETS;?>upload/photo10.jpg">
						<a href="singlework.html" id="up"></a>
						<a href="<?=DOMAIN.ASSETS;?>upload/photo10.jpg" id="down" rel="galery2"></a>
						<p>Next Responsive Magazine </p>
					</li>

					<li class="portfolio-post col3 softwares">
						<img alt="" src="<?=DOMAIN.ASSETS;?>upload/photo11.jpg">
						<a href="singlework.html" id="up"></a>
						<a href="<?=DOMAIN.ASSETS;?>upload/photo11.jpg" id="down" rel="galery2"></a>
						<p>Next Responsive Magazine </p>
					</li>

					<li class="portfolio-post col3 webdesign">
						<img alt="" src="<?=DOMAIN.ASSETS;?>upload/photo12.jpg">
						<a href="singlework.html" id="up"></a>
						<a href="<?=DOMAIN.ASSETS;?>upload/photo12.jpg" id="down" rel="galery2"></a>
						<p>Next Responsive Magazine </p>
					</li>

					<li class="portfolio-post col3 webdesign ">
						<img alt="" src="<?=DOMAIN.ASSETS;?>upload/photo13.jpg">
						<a href="singlework.html" id="up"></a>
						<a href="<?=DOMAIN.ASSETS;?>upload/photo13.jpg" id="down" rel="galery2"></a>
						<p>Next Responsive Magazine </p>
					</li>

					<li class="portfolio-post col3 softwares ">
						<img alt="" src="<?=DOMAIN.ASSETS;?>upload/photo10.jpg">
						<a href="singlework.html" id="up"></a>
						<a href="<?=DOMAIN.ASSETS;?>upload/photo10.jpg" id="down" rel="galery2"></a>
						<p>Next Responsive Magazine </p>
					</li>

					<li class="portfolio-post col3 apps webdesign">
						<img alt="" src="<?=DOMAIN.ASSETS;?>upload/photo11.jpg">
						<a href="singlework.html" id="up"></a>
						<a href="<?=DOMAIN.ASSETS;?>upload/photo11.jpg" id="down" rel="galery2"></a>
						<p>Next Responsive Magazine </p>
					</li>

				</ul>

					

					<div class="pagination span12">
						<a id="prev" href="#">prev</a>
						<a href="#">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a id="next" href="#">next</a>
					</div>
			</div>
		</div>
		<!-- End content -->
		<script>
			// Needed variables
		var $container	 	= $('.portfolio');
		var $filter 		= $('#portfolio-filter');
		
			$container.imagesLoaded( function(){
				$('ul.portfolio').show();
				$container.isotope({
					filter				: '*',
					layoutMode   		: 'masonry',
					animationOptions	: {
					duration			: 750,
					easing				: 'linear'
				   }
				});
			});

		$(window).bind('resize', function(){
			var selector = $filter.find('a.active4').attr('data-filter');
			$container.isotope({ 
				filter	: selector,
				animationOptions: {
					duration: 750,
					easing	: 'linear',
					queue	: false,
		   		}
			});
		  	return false;
		});
		
		// Isotope Filter 
		$filter.find('a').click(function(){
			var selector = $(this).attr('data-filter');
			$container.isotope({ 
				filter	: selector,
				animationOptions: {
					duration: 750,
					easing	: 'linear',
					queue	: false,
		   		}
			});
		  	return false;
		});

		/* ---------------------------------------------------------------------- */
		/*	LavaLamp
		/* ---------------------------------------------------------------------- */ 
		$(document).ready(function($) {
			$("#portfolio-filter").lavaLamp({
				speed: 300,
				click: function(event, menuItem) {
					return false;
				}
			});
		});
		</script>
<?php 
 $portfolio_content = ob_get_contents();
 ob_end_clean();
 load_body('Our Portfolio',$portfolio_content);
?>