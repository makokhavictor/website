<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Global Sites Ltd is a company that provides a wide range of solutions and services. We mainly specialise in Software Development , Mobile Solutions and Web Solutions.">
    <meta name="author" content="Globalsites LTD">
    <meta name="keyword" content="Globalsites LTD, Global, Web Design">
    <title>|TITLE|</title>
    <link href="<?=DOMAIN . PRODUCTS . PRODUCT;?>/assets/css/bootstrap.min.css" rel="stylesheet">		
    <link href="<?=DOMAIN . PRODUCTS . PRODUCT;?>/assets/css/general.css" rel="stylesheet">
    <link href="<?=DOMAIN . PRODUCTS . PRODUCT;?>/assets/css/corporatestyle.css" rel="stylesheet">
    <link href="<?=DOMAIN . PRODUCTS . PRODUCT;?>/assets/css/responsive.css" rel="stylesheet">
	    

 <?php
 $site_tags = ob_get_contents();
 ob_end_clean();