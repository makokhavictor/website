<?php 
ob_start();
?>
<script>
  
 $(document).ready(function() {

 $('#global_formm input,textarea').tooltipster({
        trigger: 'custom',
        onlyOne: false,
        position: 'right',
    });
	// validate signup form on keyup and submit
	$("#global_formm").validate({
	onkeyup: function(element, event) {
            this.element(element);
        },
        onfocusout: function(element, event) {
            this.element(element);
        },
		 errorPlacement: function (error, element) {
                        
            var lastError = $(element).data('lastError'),
                newError = $(error).text();
            
            $(element).data('lastError', newError);
                            
            if(newError !== '' && newError !== lastError){
                $(element).tooltipster('content', newError);
                $(element).tooltipster('show');
            }
			
        },
		 success: function (label, element) {
            $(element).tooltipster('hide');
        },
			
		 rules: {
		client_name: {
                required: true,
				      },		 
			client_email: {
                required: true,
				email:true
                      },
					
			client_subject: {
                required: true,
				      },
			       }
			
	});
});
</script>
<div  class="main zerogrid">
<div  class="wrapper row">
	<div class="white-layer">
		<div class="map-holder"><!--MAP-->
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3988.808324310787!2d36.829589000000006!3d-1.2892289999999997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1126882bd72f%3A0xc5c4aabb1868dd3b!2sGlobal+Sites+LTD!5e0!3m2!1sen!2s!4v1418213683386" width="100%" height="200px" frameborder="0" style="border:0;  "   ></iframe>
		</div><!--/map-holder--> 
 <!---------contact-page ---------->
		<div class="col-full">
			<div class="contact-page">
			<br class="clear-fix">
				<?php
					if(isset($_GET['email-sent']))
					{
						$status=$_GET['email-sent'];
						$succ="Thanks for contacting us. We will get back to you shortly.";$fail="Oops! Sorry, your email culd not be sent. Please try again.";
						if($status=="yes")
							{?>
								<span style="width:auto;display:block;text-align:center;height:auto;padding:5x 5px;margin:5px 10px;border:2px solid #FFDD73;color:#c25200;">
									<h5><?php echo $succ; ?></h5>
								</span>
						<?php }
						else { ?>
						 <span style="width:auto;display:block;text-align:center;height:auto;padding:5px 5px;border:2px solid #FFDD73;margin:5px 10px;background-color:#FFDD73;color:#c25200;">
							<h5> <?php echo $fail; ?></h5>
						 </span>
						 <?php }
					}
					else {
						echo "";
						} ?>
			<br class="clear-fix">
			<div class="col-2-3">
				<div class="">
					<div class="col1">
						<h5 align="left" class="title-2 theme-color3">
							<span class="title2-bg"></span>GET IN TOUCH
						</h5>
						<p style="">Contact us if you are interested or if you have any queries about our services.</p>
						<form id="global_form" method="post" action="library/process-contact.php">
							<div class="col-1-2">	
								<input type="text" class="form-field-4" name="client_name" placeholder="Your Name" required/>
							</div>
							<div class="col-1-2">
								<input type="email" class="form-field-4"  name="client_email" placeholder="Your Email" required />
							</div>
							<div class="col-full">
								<div class="subject-container">
									<input type="text" class="form-field-5"  name=	"client_subject" placeholder="Subject"required/>
								</div>
							</div>
							<div class="col-full">
								<span class="left" style="margin:0 0 0 10px;">Message:</span>
								<div class="subject-container">
									<textarea class="form-field-5-textarea"  name="client_msg" required></textarea>
								</div>
							</div>
							<br class="clear-fix">
							<input type="button" onclick="submitForm()" class="submit2" value="Send Message" name="contact_submit" />
							<br class="clear-fix">
							<span id="msg"></span>
						</form>
					</div>
				</div>
				<br class="clear-fix">
			</div><!--/col-2-3-->
			<div class="col-1-3">
				<div class="col1 font-sizing">
					<h5 align="left" class="title-2 theme-color3">
						<span class="title2-bg"></span>CONTACT DETAILS
					</h5><br>
					<h4>Global Sites</h4>
					<span class="contact-detail-section"> <i class="fa fa-map-marker fa-lg"></i> APT #063 Kifaru Court,Tecra Lorupe Road off Mombasa Road. </span>
					<span class="contact-detail-section"> <i class="fa fa-envelope-square fa-lg"></i>  P.O. Box 61494-00200 <br>Nairobi, Kenya.</span>
					<span class="contact-detail-section"> <i class="fa fa-mobile fa-2x"></i> +254 724 178 878 or<br>+254-202-240-485</span>
					<span class="contact-detail-section"> <i class="fa fa-envelope fa-lg"></i><a style="font-weight:1;"href="mailto:info@globalsitesltd.com">info@globalsitesltd.com</a></span>
				</div>
			</div><!--/col-1-3-->
		</div>
		</div>
	</div>
</div>
</div>
<br class="clear-fix">
 <!---------/contact-page ---------->
  <?php
    $f_content = ob_get_contents();
    ob_end_clean();
    load_product_body('Contact Us',$f_content);
?>
