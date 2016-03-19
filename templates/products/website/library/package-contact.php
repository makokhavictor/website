<?php
require_once("functions.php"); 
if(strlen($_POST['s_name']) > 0){

  header("Location: ../index.php?refid=get_package&package-sent=yes");
}

else if(empty($_POST['f_name']) == TRUE && empty($_POST['l_name']) == TRUE && empty($_POST['e_name']) == TRUE && empty($_POST['p_name']) == TRUE && empty($_POST['pck_name']) == TRUE && empty($_POST['message']) == TRUE && !isset($_POST['contact_submit'])) {
header ("Location: ../index.php?refid=get_package&package-sent=no");
}
else {
//validate user inputs
$f_name=clean_up_data($_POST['f_name']);
$l_name=clean_up_data($_POST['l_name']);
$e_name=clean_up_data($_POST['e_name'], 'EMAIL');
$p_name=clean_up_data($_POST['p_name']);
$pck_name=clean_up_data($_POST['package_value']);
$message=xss_clean(clean_up_data($_POST['message']));
/*HTML EMAIL*/	
//change this to your email.

    
    $to = 'info@globalsitesltd.com';
    $from = $e_name;
    $subject = "Package Request | ".$pck_name;
    $content=$message;
        

    //begin of HTML message
    $message = <<<EOF
<html>
  <body bgcolor="#FFFFFF">
    <center style="background-color: #0099ff; color: #FFF; font-weight: bolder; padding: 5px;">
    <a href="http://www.globalsitesltd.com/" style="text-decoration: none; color: #FFFFFF;">
        <b>GLOBAL SITES LTD</b> <br>
        Package Request : $pck_name <br>
         </a>
    </center>
	<h4 style="font-weight:300;font-size:15px;margin:20px 0; color:#0099ff;">Mail from $f_name $l_name</h4>
    <p>Client Details: <br>
		<b>Email:</b> <a href="mailto:$from.">$from</a><br>
		<b>Phone Number:</b>$p_name <br>
 </p>
 
<p>Package: $pck_name</p>
<p> $content</p>


  </body>
</html>
EOF;
   //end of message
    $headers  = "From: ".$from."\r\n";
    $headers .= "Content-type: text/html\r\n";

    
    mail($to, $subject, $message, $headers);
/********************************************************************************************************************************************************************************
*	
*																AUTO RESPONDER
*	
*	
*********************************************************************************************************************************************************************************
*/	
 $to_customer = $e_name;
    $from_us = 'info@globalsitesltd.com';
    $subject_customer = "GLOBAL SITES LTD | ".$pck_name;
    

//begin of HTML message
    $message_customer = <<<EOF
<html>
  <body bgcolor="#FFFFFF">
    <center style="background-color: #0099ff; color: #FFF; font-weight: bolder; padding: 5px;">
    <a href="http://www.globalsitesltd.com/" style="text-decoration: none; color: #FFFFFF;">
        <b>GLOBAL SITES LTD SUPPORT CENTRE</b> <br>
        For all your online applications requirements<br>
         </a>
    </center>
	<h4 style="font-weight:600;font-size:15px;margin:20px 0; color:#78C730;">Mail from Global Sites LTD,</h4>
    <p>Thank you $f_name for your application. We have gladly received your request and we are working on it. We will get in touch with you shortly. </p>
		
<p>Regards,</p>
<p>&nbsp;Support Team</p>
<p><a href="mailto:info@globalsitesltd.com">info@globalsitesltd.com</a></p>
<p><a href="http://www.globalsitesltd.com/">www.globalsitesltd.com</a></p>
<p><img src="http://globalsitesltd.com/logo/logo2.png" alt="logo" /></p>
<p align="center"><span style="font-size: x-small;"><strong><span style="text-decoration: underline;">CONFIDENTIALITY NOTICE:</span></strong></span></p>
<p align="center"><span style="font-size: x-small;">INFORMATION IN THIS MESSAGE IS INTENDED ONLY FOR THE PERSONAL AND CONFIDENTIAL USE OF THE RECIPIENT (S) NAMED ABOVE. If the reader of this message is not an intended recipient or an agent responsible for delivering it to an intended recipient, you are hereby notified that you have received this message in error, and that any review, dissemination, distribution, or copying of this message is strictly prohibited. If you received this message in error, please notify the sender immediately, delete the message and return any hard copy print-outs to the address above. GLOBAL SITES LTD is neither liable for the proper and complete transmission of the information in this communication nor any delay in its receipt.</span></p>
<p align="center"><span style="font-size: x-small;">Thank you.</span></p>
  
  

  </body>
</html>
EOF;
   //end of message
    $headers_customer  = "From: ".$from_us."\r\n";
    $headers_customer .= "Content-type: text/html\r\n";

    
    mail($to_customer, $subject_customer, $message_customer, $headers_customer);
	
	
	

    header("Location: ../index.php?refid=get_package&package-sent=yes");
	
	}
?>