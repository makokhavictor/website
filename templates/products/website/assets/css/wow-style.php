<?php
    header("Content-type: text/css; charset: UTF-8");
    for ( $x=0; $x < 12; $x++ ):
?>
/*
 *	generated by WOW Slider 5.4
 *	template Galaxy
 */
@import url("https://fonts.googleapis.com/css?family=Roboto+Condensed&subset=latin,cyrillic,latin-ext");
#wowslider-container<?php echo $x; ?> { 
	zoom: 1; 
	position: relative; 
	max-width:320px;
	margin:0px auto 0px;
	z-index:90;
	border:none;
	text-align:left; /* reset align=center */
	font-size: 10px;
}
* html #wowslider-container<?php echo $x; ?>{ width:320px }
#wowslider-container<?php echo $x; ?> .ws_images ul{
	position:relative;
	width: 10000%; 
	height:auto;
	left:0;
	list-style:none;
	margin:0;
	padding:0;
	border-spacing:0;
	overflow: visible;
	/*table-layout:fixed;*/
}
#wowslider-container<?php echo $x; ?> .ws_images ul li{
	width:1%;
	line-height:0; /*opera*/
	float:left;
	font-size:0;
	padding:0 0 0 0 !important;
	margin:0 0 0 0 !important;
}

#wowslider-container<?php echo $x; ?> .ws_images{
	position: relative;
	left:0;
	top:0;
	width:100%;
	height:100%;
	overflow:hidden;
}
#wowslider-container<?php echo $x; ?> .ws_images a{
	width:100%;
	display:block;
	color:transparent;
}
#wowslider-container<?php echo $x; ?> img{
	max-width: none !important;
}
#wowslider-container<?php echo $x; ?> .ws_images img{
	width:100%;
	border:none 0;
	max-width: none;
	padding:0;
	margin:0;
}
#wowslider-container<?php echo $x; ?> a{ 
	text-decoration: none; 
	outline: none; 
	border: none; 
}

#wowslider-container<?php echo $x; ?>  .ws_bullets { 
	font-size: 0px; 
	float: left;
	position:absolute;
	z-index:70;
}
#wowslider-container<?php echo $x; ?>  .ws_bullets div{
	position:relative;
	float:left;
}
#wowslider-container<?php echo $x; ?>  .wsl{
	display:none;
}
#wowslider-container<?php echo $x; ?> sound, 
#wowslider-container<?php echo $x; ?> object{
	position:absolute;
}

#wowslider-container<?php echo $x; ?> .ws_photoItem {
	/*border: 2em solid #fff;*/
	margin-left: -2em;
	margin-top: -2em;
}

#wowslider-container<?php echo $x; ?>  .ws_bullets { 
	padding: 5px 0; 
}
#wowslider-container<?php echo $x; ?> .ws_bullets a { 
	width: 17px;
	height: 17px;

	background-image: url(./bullet.png);
	float: left; 
	text-indent: -4000px; 
	position:relative;
	margin-left:0px;
	color:transparent;
	background-size: 100%;
}
#wowslider-container<?php echo $x; ?> .ws_bullets a:hover, #wowslider-container<?php echo $x; ?> .ws_bullets a.ws_selbull{
	background-position: 0 100%;
}
#wowslider-container<?php echo $x; ?> a.ws_next, #wowslider-container<?php echo $x; ?> a.ws_prev {
	position:absolute;
	display:none;
	top:50%;
	margin-top:-4.2em;
	z-index:60;
	width: 4.2em;	
	height: 8.4em;
	background-image: url(./arrows.png);
	background-size: 200%;
	opacity: 1;
}
#wowslider-container<?php echo $x; ?> a.ws_next{
	background-position: 0 0;
	right: 0;
}
#wowslider-container<?php echo $x; ?> a.ws_prev {
	background-position: 100% 0;
	left: 0;
}
* html #wowslider-container<?php echo $x; ?> a.ws_next,* html #wowslider-container<?php echo $x; ?> a.ws_prev{display:block}
#wowslider-container<?php echo $x; ?>:hover a.ws_next, #wowslider-container<?php echo $x; ?>:hover a.ws_prev {display:block}

/*playpause*/
#wowslider-container<?php echo $x; ?> .ws_playpause {
	display:none;
    width: 8.4em;
    height: 8.4em;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -4.2em;
    margin-top: -4.2em;
    z-index: 59;
	background-size: 100%;
	opacity: 1;
}

#wowslider-container<?php echo $x; ?>:hover .ws_playpause {
	display:block;
}

#wowslider-container<?php echo $x; ?> .ws_pause {
    background-image: url(./pause.png);
}

#wowslider-container<?php echo $x; ?> .ws_play {
    background-image: url(./play.png);
}/* bottom right */
#wowslider-container<?php echo $x; ?>  .ws_bullets {
    bottom: 30px;
	right: 10px;
}

#wowslider-container<?php echo $x; ?> .ws-title{
	position:absolute;
	display:block;
	bottom: 2em;
	left: 0;
	padding:1em;
	padding-left: 3em;
	margin-right:1em;
	color:#FFFFFF;	
	z-index: 50;
	line-height: 2.8em;
	text-transform: none;
	color: #fff;
	font-family: 'Roboto Condensed', sans-serif;
}
#wowslider-container<?php echo $x; ?> .ws-title div,#wowslider-container<?php echo $x; ?> .ws-title span{
	display:inline-block;
	opacity:1;
}
#wowslider-container<?php echo $x; ?> .ws-title div{
	display:block;
	margin-top:0.3em;
	font-size: 1.2em;
}
#wowslider-container<?php echo $x; ?> .ws-title span{
	font-size: 2.1em;
	text-transform: uppercase; 
}#wowslider-container<?php echo $x; ?> .ws_images ul{
	animation: wsBasic 16s infinite;
	-moz-animation: wsBasic 16s infinite;
	-webkit-animation: wsBasic 16s infinite;
}
@keyframes wsBasic{0%{left:-0%} 12.5%{left:-0%} 25%{left:-100%} 37.5%{left:-100%} 50%{left:-200%} 62.5%{left:-200%} 75%{left:-300%} 87.5%{left:-300%} }
@-moz-keyframes wsBasic{0%{left:-0%} 12.5%{left:-0%} 25%{left:-100%} 37.5%{left:-100%} 50%{left:-200%} 62.5%{left:-200%} 75%{left:-300%} 87.5%{left:-300%} }
@-webkit-keyframes wsBasic{0%{left:-0%} 12.5%{left:-0%} 25%{left:-100%} 37.5%{left:-100%} 50%{left:-200%} 62.5%{left:-200%} 75%{left:-300%} 87.5%{left:-300%} }

#wowslider-container<?php echo $x; ?> .ws_bullets  a img{
	text-indent:0;
	display:block;
	bottom:20px;
	left:-32px;
	visibility:hidden;
	position:absolute;
    /*border: 4px solid #FFF;*/
	max-width:none;
}
#wowslider-container<?php echo $x; ?> .ws_bullets a:hover img{
	visibility:visible;
}

#wowslider-container<?php echo $x; ?> .ws_bulframe div div{
	height:48px;
	overflow:visible;
	position:relative;
}
#wowslider-container<?php echo $x; ?> .ws_bulframe div {
	left:0;
	overflow:hidden;
	position:relative;
	width:64px;
	background-color:#FFFFFF;
}
#wowslider-container<?php echo $x; ?>  .ws_bullets .ws_bulframe{
	display:none;
	bottom:26px;
	overflow:visible;
	position:absolute;
	cursor:pointer;
    /*border: 4px solid #FFF;*/
}
#wowslider-container<?php echo $x; ?> .ws_bulframe span{
	display:block;
	position:absolute;
	bottom:-11px;
	margin-left:-2px;
	left:32px;
	background:url(./triangle.png);
	width:13px;
	height:7px;
}
<?php
	endfor;
 ?>