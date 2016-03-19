   <?php
include_once("meta-data.php");
require_once ('data-validation.php');
//Load particular template 
function load_template ($file) {
//call a particular template part
$template = "templates/".$file.".php";
include ($template);
}

//Launch Main Navigation 
function main_navigation() {
require_once(ABSPATH.TEMPLATES.'menu.php');
}


//Main slider 
function load_footer () {
require_once (PRODUCT_ABSPATH.TEMPLATES.'footer.php');
}
function switch_major_templates ($template) {
switch($template) {
case "home":
load_template ('home');
break;
case "email-management":
load_template ('email-management');
break;
case "spin":
load_template ('spin');
break;
case "social_collaboration":
load_template ('social_collaboration');
break;
case "webdesign":
load_template ('webdesign');
break;
case "cloud_computing":
load_template ('cloud_computing');
break;
case "mobile_app":
load_template ('mobile_app');
break;
case "prices":
load_template ('prices');
break;
case "about_us":
load_template ('about_us');
break;
case "get_package":
load_template ('get_package');
break;
case "webdesignd":
load_template ('webdesignd');
break;
case "packages":
load_template ('packages');
break;
case "contact":
load_template ('contact');
break;
}
}

//prev page
function goBack()
{
$prev_pg=$_SERVER['HTTP_REFERER'];
header("Location: $prev_pg");
}

function load_header() {
if(isset($_GET['refid'])) {
$header = pt_string_safe_escape($_GET['refid']);
switch($header) {
case "home":
$header_title="Global Sites LTD";
return $header_title;
break;
case "social_collaboration":
$header_titles="Social Collaboration";
return $header_titles;
break;
case "about_us":
$header_title="About Us";
return $header_title;
break;
case "webdesignd":
$header_title="Web Design";
return $header_title;
break;
case "contact":
$header_title="Contact Us";
return $header_title;
break;
case "packages":
$header_title="Packages";
return $header_title;
break;
case "get_package":
$header_title="Submit Quote";
return $header_title;
break;
case "mobile_app":
$header_title="Mobile Applications";
return $header_title;
case "cloud_computing":
$header_title="Cloud Computing";
return $header_title;
break;
case "social_collaboration":
$header_title="Social Collaboration";
return $header_title;
break;
default:
$header_title = "Global Sites LTD";
return $header_title;
break;
}
}
else{
$header_title="Global Sites LTD";
return $header_title;

}
}




?>