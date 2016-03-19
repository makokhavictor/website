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
	    
	    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600' rel='stylesheet' type='text/css'>
	    <link href="<?=DOMAIN . PRODUCTS . PRODUCT;?>/assets/css/bootstrap.min.css" rel="stylesheet">	
	    <link rel="stylesheet" href="<?=DOMAIN . ASSETS;?>css/font-awesome/css/font-awesome.min.css" type="text/css" media="screen">
	
		<link href="<?=DOMAIN;?>assets/css/general.css" rel="stylesheet">
	    <link href="<?=DOMAIN . PRODUCTS . PRODUCT;?>/assets/css/corporatestyle.css" rel="stylesheet">
    	<link rel="stylesheet" href="<?=DOMAIN . PRODUCTS . PRODUCT;?>/assets/revolution_slider/css/rs-style.css" media="screen">
    	<link rel="stylesheet" href="<?=DOMAIN . PRODUCTS . PRODUCT;?>/assets/revolution_slider/rs-plugin/css/settings.css" media="screen">
    	<link href="<?=DOMAIN . PRODUCTS . PRODUCT;?>/assets/css/style-responsive.css" rel="stylesheet" />	
		
	    

 <?php
 $site_tags = ob_get_contents();
 ob_end_clean();