<?php 
ob_start();
?>
<div  class="main zerogrid">
<div  class="wrapper row">
<div class="col-full">
	<div class="white-layer">
<?php
if (isset($_GET['ln']))
{
$link=($_GET['ln']);
switch($link) {
case "eml":
?>
	<script type="text/javascript">
	$(document).ready(function(){
	$('#btn-1').removeClass('current2');
	$('#tab-1').removeClass('current2');
	$('#btn-4').addClass('current2');
	$('#tab-4').addClass('current2');
	});
	</script>
<?php
break;
case "packages":
?>
	<script type="text/javascript">
	$(document).ready(function(){
	$('#btn-1').removeClass('current2');
	$('#tab-1').removeClass('current2');
	$('#btn-2').addClass('current2');
	$('#tab-2').addClass('current2');
	});
	</script>
<?php
break;
case "seo":
?>
	<script type="text/javascript">
	$(document).ready(function(){
	$('#btn-1').removeClass('current2');
	$('#tab-1').removeClass('current2');
	$('#btn-5').addClass('current2');
	$('#tab-5').addClass('current2');
	});
	</script>
<?php
break;
}
}
else
{}
?>
		<section class="main">
			<ul class="ch-grid">
				<li>
					<div class="ch-item">	
						<div class="ch-info">
							<h3>Meet the client</h3>
							
						</div>
						<div id="ch-thumb" class="ch-thumb  slide-down ch-img-1"></div>
					</div>
				</li>
				<li>
					<div class="ch-item">
						<div class="ch-info">
							<h3>Design and development</h3>
							
						</div>
						<div id="ch-thumb1"class="ch-thumb slide-down2 ch-img-2"></div>
					</div>
					</li>
				<li>
					<div class="ch-item">
						<div class="ch-info">
							<h3>Go live.</h3>
							
							</div>
						<div id="ch-thumb2" class="ch-thumb slide-down3 ch-img-3"></div>
					</div>
				</li>
			</ul>
		</section>
		<br class="clear-fix">
		<span id="bazinga" data-scroll href="#1@#%^-bottom"></span>
		<div class="tab-menu-1">
			<span class="title5">Our Web Services</span>
			<div  id="nav" class="select-menu">
				<span id="btn-1" class="select-title current2" data-tab="tab-1"><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#bazinga">Web design</a></span>
				<a name="Top"></a>
				<span id="btn-2" class="select-title " data-tab="tab-2"><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#bazinga">Packages</a></span>
				<span id="btn-3" class="select-title " data-tab="tab-3"><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#bazinga">Domain Registration & Hosting</a></span>
				<span id="btn-4" class="select-title " data-tab="tab-4"><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#bazinga">Email Management</a></span>
				<span id="btn-5" class="select-title" data-tab="tab-5"><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#bazinga">Search Engine Optimization</a></span>
			</div>
		</div><!--tab-menu-1-->
	</div><!---white-layer-->
</div><!---col-full-->
</div><!---wrapper-row-->
</div><!--main-zerogrid-->
<div id="tab-1" class="packages-holder  current2">
		<div  class="main zerogrid">
		<div  class="wrapper row">
		<div class="col-full">
			<div class="des-content">
				<p class="web-d justified ">Global Sites believes that by using current web-based technologies and effective designs, we provide our clients with websites that are informative, a more user-friendly environment thus helping them to achieve more wins from their prospective clients.<br> Our website designs incorporate the best SEO practices (Search Engine Optimization) to maximize “searchability” in all current internet search engines. Our Content Management System (CMS) are robust and efficient with stylish user interface to enable you manage your website content.

.</p>
			</div>
		</div><!--col-full-->
		</div><!--wrapper row-->
		</div><!--main zerogrid-->
	<div class="select-content2">
		<div class="select-content-wrapper2">
			<div  class="main zerogrid">
			<div  class="wrapper row">
			<div class="col-full">
				<div class="responsive-image">
					<figure class="fadeInUpp"><img  src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/images/slices/dark.png"/><figure>
				</div>
			</div><!--col-full-->
			</div><!--wrapper row-->
			</div><!--main zerogrid-->
		</div><!---select-content2-->
	</div><!---Select-content-wrapper2-->
</div><!--tab-1-->
<div id="tab-2" class="packages-holder ">
	<div class="select-content2">
		<div class="select-content-wrapper2">
			<div  class="main zerogrid">
			<div  class="wrapper row">
			<div class="col-full">
				<div class="col-1-4">
					<div id="basic-holder" class="basic-holder flipinn ">
						<div class="p-icon p-icon-1 flipinn"><i id ="p-icon-1"  class="fa fa-tags fa-lg"></i></div>
						<div class="p-header">Standard</div>
						<div class="price-layer theme-color5"> K<span class="price-s">ES:</span> 30<span class="price-t">,</span>000</div>
						<div class="content-layer"> Custom Template design </div>
						<div class="content-layer"> Site Menu</div>
						<div class="content-layer"> Contact Page </div>
						<div class="content-layer"> Spam blocking </div>
						<div class="content-layer">  Slideshow on Homepage </div>
						<div class="sign_up">
							<a href="<?php printf( '%s%s/%s', DOMAIN, PRODUCT, "packages" );?>">
								<span class="button button-standard"> Sign up</span>
							</a>
						</div>
 					</div>
				</div>
				<div class="col-1-4">
					<div id="standard-holder" class="standard-holder flipinn">
						<div class="p-icon p-icon-2 flipinn"><i id ="p-icon-2" class="fa fa-tint fa-lg"></i></div>
						<div class="p-header">Business</div>
						<div class="price-layer theme-color3"> K<span class="price-s">ES:</span> 40<span class="price-t">,</span>000</div>
						<div class="content-layer"> Media Gallery</div>
						<div class="content-layer"> Web Statistics</div>
						<div class="content-layer"> Login Modules</div>
						<div class="content-layer"> Mailing List</div>
						<div class="content-layer"> Google Maps</div>
						
						<div class="sign_up">
							<a href="<?php printf( '%s%s/%s', DOMAIN, PRODUCT, "packages" );?>">
								<span class="button button-business"> Sign up</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-1-4">
					<div id="professional" class="professional-holder flipinn">
						<div class="p-icon p-icon-3 flipinn"><i id ="p-icon-3" class="fa fa-paperclip fa-lg"></i></div>
						<div class="p-header">Professional</div>
						<div class="price-layer theme-color2 ">
							<span class="from-to theme-color2">From</span>K<span class="price-s">ES:</span> 60<span class="price-t">,</span>000<span class="star theme-color2">*</span>
						</div>
						<div class="content-layer"> Site Map</div>
						<div class="content-layer"> SEO</div>
						<div class="content-layer"> Banners</div>
						<div class="content-layer"> Newsletter Modules</div>
						<div class="content-layer"> Mailing List</div>
						<div class="sign_up">
							<a href="<?php printf( '%s%s/%s', DOMAIN, PRODUCT, "packages" );?>">
								<span class="button button-professional "> Sign up</span>
							</a>
						</div>
						</div>
				</div>
				<div class="col-1-4">
					<div id="extreme" class="extreme-holder flipin2">
					<div class="p-icon p-icon-4 flipin2"><i id ="p-icon-4" class="fa fa-arrows-alt fa-lg"></i></div>
					<div class="p-header">Extreme</div>
					<div class="price-layer theme-color6 "> <span class="from-to theme-color6">From</span>K<span class="price-s">ES:</span> 80<span class="price-t">,</span>000<span class="star theme-color6">*</span></div>
					<div class="content-layer">E-Commerce</div>
					<div class="content-layer"> SEO</div>
					<div class="content-layer">News and Events Modules</div>
					<div class="content-layer"> Forum</div>
					<div class="content-layer"> Site Map</div>
					
					<div class="sign_up">
						<a href="<?php printf( '%s%s/%s', DOMAIN, PRODUCT, "packages" );?>">
							<span class="button button-extreme"> Sign up</span>
						</a>
					</div>
					</div>
				</div>
				<br class="clear-fix">
				<div class="font-2 indetifier ">
					<span class="asterick">*</span><span>- Depending on the different features</span>
				</div>
			</div><!---col-full-->
			</div><!---wrapper-row-->
			</div><!--main zero grid-->
			<br class="clear-fix">
		</div><!---select-content2-->
	</div><!---Select-content-wrapper2-->
</div><!--tab-2-->
<div id="tab-3" class="packages-holder ">
	<div  class="main zerogrid">
			<div  class="wrapper row">
			<div class="col-full">
				<div class="des-content">
					<p class="web-d">Web hosting server selection is one of the very important decisions for your new website. The same way your customers depend on you to keep serving them, you depend on your server to keep running your business. You will need reliable, powerful, fast and a secure web hosting server for your business.<br>We offer high-performance, multi-processor RAID and highly scalable cloud servers. Our servers can handle either Windows or Linux operating systems for hosting applications on php or .net.</p>
				</div><!--des-content-->
			</div><!--col-full-->
			</div><!--wrapper row-->
			</div><!--main zerogrid-->
			<br class="clear-fix">
	<div class="select-content2">
		<div class="select-content-wrapper2">
			<div  class="main zerogrid">
			<div  class="wrapper row">
			<div class="col-full">
				<div class="d-wrapper">
					<span class="d-text-1 floating">.co.ke</span>
					<span class="d-text-2 floating">.com</span>
					<span class="d-text-3 floating">.org</span>
					<span class="d-text-4 floating">.net</span>
					<span class="d-text-5 floating delay1">.ac.ke</span>
				</div>
			</div><!--col-full-->
			</div><!--wrapper row-->
			</div><!--main zerogrid-->
			<br class="clear-fix">
		</div><!---select-content2-->
	</div><!---Select-content-wrapper2-->
</div><!--tab-3-->
<div id="tab-4" class="packages-holder">
	<div  class="main zerogrid">
	<div  class="wrapper row">
	<div class="col-full">
		<div class="des-content">
			<p class="web-d" >Effective email management is vital to every business and they need a practical strategy that is low risk, tamper proof, immediately affordable, easy to implement and manage, and has a predictable cost profile over the many years of email management that lie ahead. Global Sites provides email management as a single service in the cloud that helps you slash on-premise email storage requirements, ensure complete email availability, email security and email compliance, while providing services to help you get more from your email. </p>
		</div><!--des-content-->
	</div><!--col-full-->
	</div><!--wrapper row-->
	</div><!--main zerogrid-->
	<div class="select-content2">
		<div class="select-content-wrapper2">
			<div  class="main zerogrid">
			<div  class="wrapper row">
			<div class="col-full">
			<?php require_once (PRODUCT_ABSPATH. TEMPLATES.'contactform/contactform.php');?>
			</div><!--col-full-->
			</div><!--wrapper row-->
			</div><!--main zerogrid-->
			<br class="clear-fix">
		</div><!---select-content2-->
	</div><!---Select-content-wrapper2-->
</div><!--tab-4-->
<div id="tab-5" class="packages-holder ">
	<div  class="main zerogrid">
	<div  class="wrapper row">
	<div class="col-full">
		<div class="des-content">
			<p class="web-d" >Today’s consumer puts a lot of trust in search engines to find what they need. Google receives 34,000 searches per second. Those searches involve finding products, reviewing brands, and looking up business locations. And when a brand appears in the first page of search results, it earns trust from consumers.<br>At Global Sites, we use SEO to build trust with your audience. We embed your brand in the search engines they trust, with the keywords and terms they’re searching for.</p>
		</div>
	</div><!--col-full-->
	</div><!--wrapper row-->
	</div><!--main zerogrid-->
	<div class="select-content2">
		<div class="select-content-wrapper2">
			<div  class="main zerogrid">
			<div  class="wrapper row">
			<div class="col-full">
				<div class="responsive-image">
					<figure class="fadeInUpp ">
						<img  class="image-seo"src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/images/slices/seo2.png"/>
					<figure>
				</div>
			</div><!--col-full-->
			</div><!--wrapper row-->
			</div><!--main zerogrid-->
			<br class="clear-fix">
		</div><!---select-content2-->
	</div><!---Select-content-wrapper2-->
</div><!--tab-3-->
<br class="clear-fix">

<script src='<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/js/bind-polyfill.js'></script>
<script src='<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/js/smooth-scroll.js'></script>
<script>
	smoothScroll.init({
		speed: 500,
		easing: 'easeInOutCubic',
		offset: 0,
		updateURL: true,
		callbackBefore: function ( toggle, anchor ) {},
		callbackAfter: function ( toggle, anchor ) {}
	});
</script>
<?php
    $f_content = ob_get_contents();
    ob_end_clean();
    load_product_body('Web Services',$f_content);
?>