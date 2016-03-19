<?php 
ob_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta charset="UTF-8">
		 <meta name="description" content="Global Sites LTD">
		 <meta name="author" content="Global Sites LTD">
		 <meta name="keyword" content="Global Sites LTD ">
		 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		 <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

		 <title>|TITLE|</title>
		 
	    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	    <!-- <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700' rel='stylesheet' type='text/css'> -->
	    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'> -->
	    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600' rel='stylesheet' type='text/css'>
		<!-- <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'> -->
	    

 <?php
			require_once(ABSPATH .'includes/css.php');
 $site_tags = ob_get_contents();
 ob_end_clean();
 ?>