<?php
/*====================================================================================================================================================================================
*
*									GLOBAL SITES DATA VALIDATION SCRIPT
*
*=====================================================================================================================================================================================
*/
 //Remove unwanted special characters 
 function remove_special_characters ($string) {
 $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
 $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

 return preg_replace('/-+/', '-', $string);
 }
 
 //Remove unwanted url from a string 
 function remove_unwanted_url($string) {
// The Regular Expression filter
$pt_string=$string;
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
 
// Check if there is a url in the text
if(preg_match($reg_exUrl, $pt_string, $url)) {
 
       // remove the url from string
       $new_string=preg_replace($reg_exUrl, "[...]", $pt_string);
    
       return $new_string;
 
} else {
 
       return $pt_string;
 
}
}
function clean_url ($string) {
$url_less_string = remove_unwanted_url($string);
$clean_url = remove_special_characters ($url_less_string);
return $clean_url;

}
/************************************************************************************************************************************************************************************
*
*									FORM PROCESSING FUNCTIONS
*
*************************************************************************************************************************************************************************************
**/
//Check for empty field 
//trim for empty spaces 
function trim_data ($string) {
$data = trim($string);
return $data;
}
function check_empty_field_step_1 ($string) {

if($string == "") {
$new_string = "ERROR";
}
else {
$new_string = $string;
}
return $new_string;
}

function check_empty_field_step_2 ($string) {

if($string == " ") {
$new_string = "ERROR";
}
else {
$new_string = $string;
}
return $new_string;
}

function check_empty_field_step_3 ($string) {

if(!isset($string)) {
$new_string = "ERROR";
}
else {
$new_string = $string;
}
return $new_string;
}


function check_empty_field_step_4($string) {

if(empty($string) == TRUE) {
$new_string = "ERROR";
}
else {
$new_string = $string;
}
return $new_string;
}
//Overal function 
function check_empty_field ($string) {
$new_string = check_empty_field_step_4(check_empty_field_step_3(check_empty_field_step_2(check_empty_field_step_1(trim_data($string)))));
if($new_string == "ERROR") {
$validated = "ERROR";
}
else {
$validated = $string;
}
return $validated;

}


/***********************************************/
//check if is a normal string of data 
//prevent injections
function string_safe_escape($string)
{
	
	$data_string=$string;
	if ( filter_var($data_string, FILTER_SANITIZE_STRING) == TRUE) {
	$link_free_string=remove_unwanted_url($data_string);
	$escaped_string=xss_clean($link_free_string);
		
	$safe_string = $escaped_string;
	}
	else
	{
	$safe_string = "ERROR";
	}
	return $safe_string;
	}
	
//Email Validation 
function email_safe_escape($string)
{

	if ( filter_var($string, FILTER_VALIDATE_EMAIL)  == TRUE) {
	
	return $string;
	}
	else
	{
	return "ERROR";
	}
	}
	
//Numeric validation 
//check if string is integer
function string_numeric($string)
{
	if ( is_numeric($string) == TRUE) {
	$numeric_value=$string;
	return $numeric_value;
	}
	else
	{
	return "ERROR";
	}
	
	}

	
	
//Validate phone number 
function check_phone_number ($string) {
// validate a phone number
if( !preg_match( '/^[+]?([\d]{0,3})?[\(\.\-\s]?([\d]{3})[\)\.\-\s]*([\d]{3})[\.\-\s]?([\d]{4})$/', $string ) ) {
   
    return "ERROR";
}
else {
$phone = $string;
}
return $phone;
}


//check if a string is correct url
function check_url($string) {

if (!filter_var($string, FILTER_VALIDATE_URL)) {
	return "ERROR";
	}
	else
	{
	return $string;
	}
	}
	
//check if a string is an integer
function check_number($string) {

if (!filter_var($string, FILTER_SANITIZE_NUMBER_INT)) {
	return "ERROR";
	}
	else
	{
	return (int)$string;
	}
	}


//MAIN VALIDATE FUNCTION 
function clean_up_data ($string, $nature="VOID") {
if($nature == "VOID") {
$type = "STRING";
}
else {
$type = $nature;
}
//validate data 
$availability = check_empty_field ($string);
if($availability == "ERROR") {
$clean_data = "ERROR";
}
else {
//Data is available, check the kind of sanitization to be done 
$string_data = string_safe_escape($string);
switch($type) {
case "STRING":
$clean_data = string_safe_escape($string_data);
break;
case "EMAIL":
$clean_data = email_safe_escape($string_data);
break;
case "NUMERIC":
$clean_data = string_numeric($string_data);
break;
case "PHONE":
$clean_data = check_phone_number($string_data);
break;
case "URL":
$clean_data = check_url($string_data);
break;
default:
$clean_data = string_safe_escape($string_data);
}
}
return $clean_data;
}


//Clean sql statement 
function clean_sql_statement ($statement) {
$clean = string_safe_escape ($statement);
if($clean == "ERROR") {
$prev = prev_page();
header ("Location: prev_page&request=sql-error");
}

}

//password hashing
function password_protect ($password) {
$salt = substr(str_replace('+', '.', base64_encode(sha1(microtime(false), true))), 0, 22);
$hashed_pw = crypt($password, 'pT@Mat0K34' . $salt);
return $hashed_pw;

}



function xss_clean($data)
{
// Fix &entity\n;
$data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
$data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
$data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
$data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

// Remove any attribute starting with "on" or xmlns
$data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

// Remove javascript: and vbscript: protocols
$data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
$data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
$data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

// Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

// Remove namespaced elements (we do not need them)
$data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

do
{
	// Remove really unwanted tags
	$old_data = $data;
	$data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
}
while ($old_data !== $data);

// we are done...
return $data;
}





















 ?>