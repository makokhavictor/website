<?php
require_once("functions.php"); 

if(empty($_POST['client_name']) == TRUE && empty($_POST['client_email']) == TRUE && empty($_POST['client_subject']) == TRUE && empty($_POST['client_msg']) == TRUE && !isset($_POST['contact_submit'])) {
header ("Location: ../index.php?email-sent=no");
}
else {
//validate user inputs
$client_name=clean_up_data($_POST['client_name']);
$client_email=clean_up_data($_POST['client_email'], 'EMAIL');
$client_subject=clean_up_data($_POST['client_subject']);
$client_msg=xss_clean(clean_up_data($_POST['client_msg']));
/*HTML EMAIL*/	
//change this to your email.

    
    $to = 'info@globalsitesltd.com';
    $from = $client_email;
    $subject = "Contact | ".$client_subject;
    $content=$client_msg;
        

    //begin of HTML message
    $message = <<<EOF
<html>
  <body bgcolor="#FFFFFF">
    <center style="background-color: #0099ff; color: #FFF; font-weight: bolder; padding: 5px;">
    <a href="http://www.globalsitesltd.com/" style="text-decoration: none; color: #FFFFFF;">
        <b>GLOBAL SITES LTD</b> <br>
        For all your online applications requirements<br>
         </a>
    </center>
	<h4 style="font-weight:600;font-size:15px;margin:20px 0; color:#78C730;">Mail from $client_name,</h4>
    <p>Client Details: <br>
		<b>Email:</b> $client_email <br>
 </p>
 

<p> $client_msg</p>
 

  </body>
</html>
EOF;
   //end of message
    $headers  = "From: ".$client_email."\r\n";
    $headers .= "Content-type: text/html\r\n";

    
    mail($to, $subject, $message, $headers);
/********************************************************************************************************************************************************************************
*	
*																AUTO RESPONDER
*	
*	
*********************************************************************************************************************************************************************************
*/	
 $to_customer = $client_email;
    $from_us = 'info@globalsitesltd.com';
    $subject_customer = "GLOBAL SITES LTD | ".$client_subject;
    

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
	
    <p>Thank you $client_name for contacting us. We have gladly received your email and we are working on it. We will get in touch with you shortly. </p>
		
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
	
	
	

    header("Location: ../index.php?refid=contact&email-sent=yes");
	
	}
?>