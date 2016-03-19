<?php 
ob_start();
?>
<!-- content -->
		<div id="content">
			<div class="cont-head">
				<div class="cont-text container">
					<h1>Contact</h1>
					<p>You are Here:<a href="#"><span></span> Home</a><a href="#"><span></span> Contact</a></p>
				</div>
			</div>
			<div id="inner-content" class="container">
				<div id="contact" class="row-fluid">
					<div class="span12">
						<h1>Get in touch!</h1>
						<p>Thank you for visiting our website. Should you have any queries, send us an email on info@optimataxconsult.com or fill in the contact form below and we will get back to you.</p>
					</div>

					<div id="map" class="span12"></div>

					<div class="row-fluid">
						<div class="span8">
							<h1>Send us a message</h1>
							<form id="contact-form">
								<label id="label" for="name"></label><input name="name" id="name" type="text" placeholder="Name" value="">
								<label id="label1" for="mail"></label><input name="mail" id="mail" type="text" placeholder="mail" value="">
								<label id="label2" for="website"></label><input name="website" id="website" type="text" placeholder="website" value="">
								<textarea name="comment" placeholder="Message" ></textarea>
								<div id="msg" class="message"></div>
								<input type="submit" id="submit" value="Send">
							</form>
						</div>

						<div class="span4">
							<h1>Contact info</h1>
							<p>Contact us if you are interested or if you have queries about our services</p>
							<div>
								<p><img alt="" src="<?=DOMAIN.ASSETS;?>images/contact1.png">info@globalsitesltd.com</p>
								<p><img alt="" src="<?=DOMAIN.ASSETS;?>images/contact2.png">+254 20 - 525 - 9085</p>
								<p><img alt="" src="<?=DOMAIN.ASSETS;?>images/contact3.png">http://www.globalsitesltd.com</p>
							</div>

							<ul> <!-- Social Icons -->
								<li><a href="#"><img alt="" src="<?=DOMAIN.ASSETS;?>images/fb.png"></a></li>
								<li><a href="#"><img alt="" src="<?=DOMAIN.ASSETS;?>images/gogle.png"></a></li>
								<li><a href="#"><img alt="" src="<?=DOMAIN.ASSETS;?>images/rss.png"></a></li>
								<li><a href="#"><img alt="" src="<?=DOMAIN.ASSETS;?>images/twi.png"></a></li>
							</ul>
						</div>
					</div>
`		
				</div>
			</div>
		</div>
		<!-- End content -->
<?php 
 $contact_content = ob_get_contents();
 ob_end_clean();
 load_body('Contact Us',$contact_content);
?>