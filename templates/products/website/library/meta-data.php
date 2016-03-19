<?php
/*HEADER TAGS & META DATA*/
function tag_type ($type) {							
$home = array 								(

											"title"							=>	"Welcome to Global Sites LTD| We put on the global map",
											"tags"							=>	"globalsites,global sites,Global Sites LTD,Global Sites,globalsitesltd, global sites ltd, globalsitesltd.com,Global Site LTD,Global Site,best website in kenya, best website in nairobi, responsive website designs, software developments, web hosting,domain registration,free website design,create my company website, internet application developers,web designers,website designers in kenya,website designers,mobile application developers in kenya,law websites in kenya,corporate web development in kenya,website,web development,kenya,nairobi,cloud computing, social collaboration, search engine optimization,e-commerce in kenya, e-commerce,email management,graphics",
											"author"						=>	"Global Sites Ltd",
											"description"					=>	"Global Sites Ltd is a company that provides a wide range of solutions and services. We mainly specialise in  Software Development, Mobile Solutions and Web Solutions .Global Sites Ltd is a company that provides a wide range of solutions and services. We mainly specialise in  Software Development , Mobile Solutions and Web Solutions .",
				
											);
											
$about = array 								(

											"title"							=>	"Who we are",
											"tags"							=>	"Global Sites LTD,about global sites ltd,about websites,about web service companies,globalsites,global sites, globalsitesltd, global sites ltd, globalsitesltd.com,best website in kenya, best website in nairobi, responsive website designs, software developments, web hosting,domain registration,free website design,create my company website, internet application developers,web designers,website designers in kenya,website designers,mobile application developers in kenya,law websites in kenya,corporate web development in kenya,website,web development,kenya,nairobi,cloud computing, social collaboration, search engine optimization,e-commerce in kenya, e-commerce,email management,graphics",
											"author"						=>	"Global Sites Ltd",
											"description"					=>	"Global Sites Ltd is a company that provides a wide range of solutions and services. We mainly specialise in  Software Development, Mobile Solutions and Web Solutions .Global Sites Ltd is a company that provides a wide range of solutions and services. We mainly specialise in  Software Development , Mobile Solutions and Web Solutions .",
								
											);

											
$services = array 								(

											"title"							=>	"Services | What we offer",
											"tags"							=>	"Global Sites LTD,website design,domain registration, email management, search engine optimization,cloud computing,social collaboration, e-commerce,globalsites,global sites, globalsitesltd, global sites ltd, globalsitesltd.com,best website in kenya, best website in nairobi, responsive website designs, software developments, web hosting,domain registration,free website design,create my company website, internet application developers,web designers,website designers in kenya,website designers,mobile application developers in kenya,law websites in kenya,corporate web development in kenya,website,web development,kenya,nairobi,cloud computing, social collaboration, search engine optimization,e-commerce in kenya, e-commerce,email management,graphics",
											"author"						=>	"Global Sites Ltd",
											"description"					=>	"Global Sites LTD,Global Sites Ltd is a company that provides a wide range of solutions and services. We mainly specialise in  Software Development, Mobile Solutions and Web Solutions .Global Sites Ltd is a company that provides a wide range of solutions and services. We mainly specialise in  Software Development , Mobile Solutions and Web Solutions .",
								
											);		

$mobile_app = array 								(

											"title"							=>	"Mobile Applications | Mobile Services ",
											"tags"							=>	"Global Sites LTD,website design,domain registration, email management, search engine optimization,cloud computing,social collaboration, e-commerce,globalsites,global sites, globalsitesltd, global sites ltd, globalsitesltd.com,best website in kenya, best website in nairobi, responsive website designs, software developments, web hosting,domain registration,free website design,create my company website, internet application developers,web designers,website designers in kenya,website designers,mobile application developers in kenya,law websites in kenya,corporate web development in kenya,website,web development,kenya,nairobi,cloud computing, social collaboration, search engine optimization,e-commerce in kenya, e-commerce,email management,graphics",
																				
											"author"						=>	"Global Sites Ltd",
											"description"					=>	"Are you looking for a team to help you build a great App for your company? We  handle mobile projects from small, simple Apps to complex projects.",
								
											);
$cloud_computing = array 								(

											"title"							=>	"Cloud Computing",
											"tags"							=>	"website design,domain registration, email management, search engine optimization,cloud computing,social collaboration, e-commerce,globalsites,global sites, globalsitesltd, global sites ltd, globalsitesltd.com,best website in kenya, best website in nairobi, responsive website designs, software developments, web hosting,domain registration,free website design,create my company website, internet application developers,web designers,website designers in kenya,website designers,mobile application developers in kenya,law websites in kenya,corporate web development in kenya,website,web development,kenya,nairobi,cloud computing, social collaboration, search engine optimization,e-commerce in kenya, e-commerce,email management,graphics",
																				
											"author"						=>	"Global Sites Ltd",
											"description"					=>	"In the simplest terms, Cloud Computing means storing and accessing data and programs over the Internet instead of your computer's hard drive.",
								
											);
$social_collaboration = array 								(

											"title"							=>	"Social Collaboration",
											"tags"							=>	"website design,domain registration, email management, search engine optimization,cloud computing,social collaboration, e-commerce,globalsites,global sites, globalsitesltd, global sites ltd, globalsitesltd.com,best website in kenya, best website in nairobi, responsive website designs, software developments, web hosting,domain registration,free website design,create my company website, internet application developers,web designers,website designers in kenya,website designers,mobile application developers in kenya,law websites in kenya,corporate web development in kenya,website,web development,kenya,nairobi,cloud computing, social collaboration, search engine optimization,e-commerce in kenya, e-commerce,email management,graphics",
																				
											"author"						=>	"Global Sites Ltd",
											"description"					=>	"Social networks, like Facebook, Twitter, LinkedIn, and Pinterest are the places where social interactions happen (discovering & sharing) and social media marketing is the way to use that technology to build relationships, drive repeat business and attract new customers through friends sharing with friends.",
								
											);											

							
$contact = array 								(

											"title"							=>	"Contact us | Find us ",
											"tags"							=>	"website design,domain registration, email management, search engine optimization,cloud computing,social collaboration, e-commerce,globalsites,global sites, globalsitesltd, global sites ltd, globalsitesltd.com,best website in kenya, best website in nairobi, responsive website designs, software developments, web hosting,domain registration,free website design,create my company website, internet application developers,web designers,website designers in kenya,website designers,mobile application developers in kenya,law websites in kenya,corporate web development in kenya,website,web development,kenya,nairobi,cloud computing, social collaboration, search engine optimization,e-commerce in kenya, e-commerce,email management,graphics",
																				
											"author"						=>	"Global Sites Ltd",
											"description"					=>	"Contact us if you are interested in our services. We are located on 4th Florr, Coffee plaza Haile selassie Avenue",
								
											);							



											



$section = metatags ();

switch($section) {
case $section:
$data = "";
foreach(${$section} as $tag_type => $tag_content) {
$data .= $tag_type."@".$tag_content."~~";
}
break;
}






$data_array = ($data);
$data_set = explode ("~~", $data_array);
$data_title = $data_set[0];
$data_tags = $data_set[1];
$data_author = $data_set[2];
$data_description = $data_set[3];

switch($type) {
case "title":
$title_data = explode ("@", $data_title);
$request = $title_data[1];
break;

case "tags":
$tags_data = explode ("@", $data_tags);
$request = $tags_data[1];
break;

case "author":
$author_data = explode ("@", $data_author);
$request = $author_data[1];
break;

case "description":
$description_data = explode ("@", $data_description);
$request = $description_data[1];
break;
}


return $request;
}





function metatags () {

if(!isset($_GET['refid']) == true) {
$page = "INDEX";
}
else {
$page = strtoupper($_GET['refid']);
}

switch ($page) {
case "INDEX":
return "home";
break;

case "ABOUT_US":
return "about";
break;

case "WEBDESIGND":
return "services";
break;

case "MOBILE_APP":
return "mobile_app";
break;

case "CLOUD_COMPUTING":
return "cloud_computing";
break;
case "SOCIAL_COLLABORATION":
return "social_collaboration";
break;

case "CONTACT":
return "contact";
break;

default:
return "home";

}


}
/*HEADER TAGS & META DATA*/

?>