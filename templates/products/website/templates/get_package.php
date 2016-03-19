<script type="text/javascript" src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/js/jquery-1.9.1.js"></script>
<?php

if (isset($_GET['item']))
{
	
$link=($_GET['item']);

switch($link) {
case "pro":
$type="Professional Package";
break;
case "stn":
$type="Standard Package";
break;
case "biz":
$type="Business Package";
break;
case "exe":
$type="Extreme Package";
break;
default:
$type="Standard Package";
break;
}
}
else
{
$type="Standard Package";

}

?>

<div  class="main zerogrid">
<div  class="wrapper row">
<div class="col-full">

<div class="white-layer">
<script>
  
 $(document).ready(function() {

 $('#global_pcc input,textarea').tooltipster({
        trigger: 'custom',
        onlyOne: false,
        position: 'right',
    });
	// validate signup form on keyup and submit
	$("#global_pcc").validate({
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
				e_name: {
                required: true,
				email:true
                      },
			
			       }
			
	});
});
</script>
<span class="s-top-margin"></span>

<div class="col-full">
<?php
					if(isset($_GET['package-sent']))
					{
						$status=$_GET['package-sent'];
						$succ="Thanks for contacting us. We will get back to you shortly.";$fail="Oops! Sorry, your request culd not be sent. Please try again.";
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
<form action="library/package-contact.php" method="post" id="global_pc">
<div class="package-line font-2"><p>Thank you for your interest in working with Global Sites. Our team will review your business requirements as per your request and prepare a detailed proposal within 24 hours.</p></div>

<br class="clear-fix">

<div class="col-1-2">
<input class="surname" type="text"  name="s_name"  />
<input class="input-p" type="text" placeholder="First Name" name="f_name" required />
</div>
<div class="col-1-2">

<input class="input-p" type="text" placeholder="Last Name" name="l_name" required />


</div>
<br class="clear-fix">
<div class="col-full">
<div class="col-1-2">

<input class="input-p" type="email" placeholder="Email Address" name="e_name" required />

</div>
<div class="col-1-2">

<input class="input-p" type="text" placeholder="Phone Number" name="p_name"required />

</div>
</div>
<div class="col-full">
<div class="subject-container">
<input class="form-field-5" type="text" value="<?php echo $type;?>"   name="package_name" disabled  />
<input type="hidden" name="package_value" value="<?php echo $type;?>" />
</div>
</div>

<br class="clear-fix">
<div class="col-full">
<span class="left" style="margin:0 0 0 10px;">Message:</span>
<div class="subject-container">
<textarea class="form-field-5-textarea"   name="message" required> </textarea>
</div>
</div>
<br class="clear-fix">
<input type="submit" class="submit1" value="Send Message" name="contact_submit" />
<span class="s-top-margin"></span>
</form>
</div>

</div>

</div>
</div>
</div>
<br class="clear-fix">