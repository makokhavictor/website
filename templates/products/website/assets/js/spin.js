$(document).ready(function(){
 setTimeout(function () {
  $(".c-logo").fadeOut(2000);
 }, 4000);
var difference = 7000;//spinning interval
var spinning =
window.setInterval(function(){
 setTimeout(function () {
 $(".i-2").removeClass("i-1-anime");
 $(".i-3").removeClass("i-2-anime");
 $(".i-4").removeClass("i-3-anime");
 $(".i-5").removeClass("i-4-anime");
 $(".i-6").removeClass("i-5-anime");
 $(".i-7").removeClass("i-6-anime");
 $(".i-8").removeClass("i-7-anime");
 $(".i-1").removeClass("i-8-anime");
 }, 2000);
 setTimeout(function () {
$(".i-1-anime").addClass("i-2"); 
$(".i-1-anime").removeClass("i-1");
$(".i-2-anime").addClass("i-3"); 
$(".i-2-anime").removeClass("i-2");
$(".i-3-anime").addClass("i-4"); 
$(".i-3-anime").removeClass("i-3");
$(".i-4-anime").addClass("i-5"); 
$(".i-4-anime").removeClass("i-4");
$(".i-5-anime").addClass("i-6"); 
$(".i-5-anime").removeClass("i-5");
$(".i-6-anime").addClass("i-7"); 
$(".i-6-anime").removeClass("i-6");
$(".i-7-anime").addClass("i-8"); 
$(".i-7-anime").removeClass("i-7");
$(".i-8-anime").addClass("i-1"); 
$(".i-8-anime").removeClass("i-8"); 
}, 1500);
 setTimeout(function () {
$(".i-1").addClass("i-1-anime"); 
$(".i-2").addClass("i-2-anime"); 
$(".i-3").addClass("i-3-anime"); 
$(".i-4").addClass("i-4-anime"); 
$(".i-5").addClass("i-5-anime");
$(".i-6").addClass("i-6-anime");
$(".i-7").addClass("i-7-anime");
$(".i-8").addClass("i-8-anime");
}, 650);
var webd = document.getElementById('i-8');
var webd_class = webd.className.split(' ')[1];
if ( webd_class == "i-8" ) {
$("#abut").addClass("fadeInUpp");
$("#abut-title").addClass("fadeInUpp");
$("#abut").css("z-index","10");
}
else{
$("#abut").removeClass("fadeInUpp");
$("#abut-title").removeClass("fadeInUpp");
$("#abut").css("z-index","0");
} 
//when mobile application icon is 0deg  
var mbl = document.getElementById('i-4');
var mbl_class = mbl.className.split(' ')[1];
if ( mbl_class == "i-8" ) {
$("#mbl").addClass("fadeInUpp");
$("#mbl-title").addClass("fadeInUpp");
$("#mbl").css("z-index","10");
}
else{
$("#mbl").removeClass("fadeInUpp");
$("#mbl-title").removeClass("fadeInUpp");
$("#mbl").css("z-index","0");
}  
//when search engine optimaization icon is 0deg  
var sol = document.getElementById('i-55');
var sol_class = sol.className.split(' ')[1];
if ( sol_class == "i-8" ) {
$("#sol").addClass("fadeInUpp");
$("#sol-title").addClass("fadeInUpp");
$("#sol").css("z-index","10");
}
else{
$("#sol").removeClass("fadeInUpp");
$("#sol-title").removeClass("fadeInUpp");
$("#sol").css("z-index","0");
} 
//when social collaboration icon is 0deg
var scl = document.getElementById('i-4');
var scl_class = scl.className.split(' ')[1];
if ( scl_class == "i-1" ) {
$("#scl").addClass("fadeInUpp");
$("#scl-title").addClass("fadeInUpp");
$("#scl").css("z-index","10");
}
else{
$("#scl").removeClass("fadeInUpp");
$("#scl-title").removeClass("fadeInUpp");
$("#scl").css("z-index","0");
} 
//when email management icon is 0deg
var ebl = document.getElementById('i-8');
var ebl_class = ebl.className.split(' ')[1];
if ( ebl_class == "i-7" ) {
$("#ebl").addClass("fadeInUpp");
$("#ebl-title").addClass("fadeInUpp");
$("#ebl").css("z-index","10");
}
else{
$("#ebl").removeClass("fadeInUpp");
$("#ebl-title").removeClass("fadeInUpp");
$("#ebl").css("z-index","0");
} 
//when cloud computing icon is 0deg
var cldd = document.getElementById('i-5');
var cldd_class = cldd.className.split(' ')[1];
if ( cldd_class == "i-8" ) {
$("#cldd").addClass("fadeInUpp");
$("#cldd-title").addClass("fadeInUpp");
$("#cldd").css("z-index","10");
}
else{
$("#cldd").removeClass("fadeInUpp");
$("#cldd-title").removeClass("fadeInUpp");
$("#cldd").css("z-index","0");
} 
//when contact icon is 0deg
var cnt = document.getElementById('i-7');
var cnt_class = cnt.className.split(' ')[1];
if ( cnt_class == "i-8" ) {
$("#cnt").addClass("fadeInUpp");
$("#cnt-title").addClass("fadeInUpp");
$("#cnt").css("z-index","10");
}
else{
$("#cnt").removeClass("fadeInUpp");
$("#cnt-title").removeClass("fadeInUpp");
$("#cnt").css("z-index","0");

} 
var abut = document.getElementById('i-6');
var abut_class = abut.className.split(' ')[1];

if ( abut_class == "i-8" ) {
$("#webd").addClass("fadeInUpp");
$("#webd-title").addClass("fadeInUpp");
$("#webd").css("z-index","10"); 

}
else{
$("#webd").removeClass("fadeInUpp");
$("#webd-title").removeClass("fadeInUpp");
$("#webd").css("z-index","0"); 
} 
}, difference);
;
//web design icon on hover////////////////////////////////////////////////////////
$("#i-8").mouseover(function(){
 $(".hover-tag").css("z-index","100");
 $("#webd").addClass("fadeInUpp");
$("#webd-title").addClass("fadeInUpp");
$("#webd").css("z-index","110");
$(".title-pic").css("z-index","110");
}); 
$('#i-8').mouseleave(function () {
 $(".hover-tag").css("z-index","0");
 $("#webd").removeClass("fadeInUpp");
$("#webd-title").removeClass("fadeInUpp");
$("#webd").css("z-index","0");
$(".title-pic").css("z-index","0");
});
//mobile applications icon on hover//////////////////////////////////////////////
$("#i-4").mouseover(function(){
 $(".hover-tag").css("z-index","100");
 $("#mbl").addClass("fadeInUpp");
$("#mbl-title").addClass("fadeInUpp");
$("#mbl").css("z-index","110");
$(".title-mbl").css("z-index","110");
}); 
$('#i-4').mouseleave(function () {
 $(".hover-tag").css("z-index","0");
 $("#mbl").removeClass("fadeInUpp");
$("#mbl-title").removeClass("fadeInUpp");
$("#mbl").css("z-index","0");
$(".title-mbl").css("z-index","0");
});
//cloud computing icon on hover///////////////////////////////////////
$("#i-5").mouseover(function(){
 $(".hover-tag").css("z-index","100");
 $("#cldd").addClass("fadeInUpp");
$("#cldd-title").addClass("fadeInUpp");
$("#cldd").css("z-index","110");
$(".title-cldd").css("z-index","110");
}); 
$('#i-5').mouseleave(function () {
 $(".hover-tag").css("z-index","0");
 $("#cldd").removeClass("fadeInUpp");
$("#cldd-title").removeClass("fadeInUpp");
$("#cldd").css("z-index","0");
$(".title-cldd").css("z-index","0");
});
 //seo icon on hover/////////////////////////////////////////////////////////
$("#i-55").mouseover(function(){
 $(".hover-tag").css("z-index","100");
 $("#sol").addClass("fadeInUpp");
$("#sol-title").addClass("fadeInUpp");
$("#sol").css("z-index","110");
$(".title-sol").css("z-index","110");
}); 
$('#i-55').mouseleave(function () {
$(".title-sol").css("z-index","0");
 $(".hover-tag").css("z-index","0");
 $("#sol").removeClass("fadeInUpp");
$("#sol-title").removeClass("fadeInUpp");
$("#sol").css("z-index","0");
});
//email management icon on hover//////////////////////////////////////////////
$("#email").mouseover(function(){
 $(".hover-tag").css("z-index","100");
 $("#ebl").addClass("fadeInUpp");
$("#ebl-title").addClass("fadeInUpp");
$("#ebl").css("z-index","110");
$(".title-ebl").css("z-index","110");
}); 
$('#email').mouseleave(function () {
$(".title-ebl").css("z-index","0");
 $(".hover-tag").css("z-index","0");
 $("#ebl").removeClass("fadeInUpp");
$("#ebl-title").removeClass("fadeInUpp");
$("#ebl").css("z-index","0");
});
//social collaboration icon on hover//////////////////////////////////////////
$("#social").mouseover(function(){
 $(".hover-tag").css("z-index","100");
 $("#scl").addClass("fadeInUpp");
$("#scl-title").addClass("fadeInUpp");
$("#scl").css("z-index","110");
$(".title-scl").css("z-index","110");
}); 
$('#social').mouseleave(function () {
$(".title-scl").css("z-index","0");
 $(".hover-tag").css("z-index","0");
 $("#scl").removeClass("fadeInUpp");
$("#scl-title").removeClass("fadeInUpp");
$("#scl").css("z-index","0");
});
//contact icon on hover///////////////////////////////////////////////////////
$("#i-7").mouseover(function(){
 $(".hover-tag").css("z-index","100");
 $("#cnt").addClass("fadeInUpp");
$("#cnt-title").addClass("fadeInUpp");
$("#cnt").css("z-index","110");
$(".title-cnt").css("z-index","110");
}); 
$('#i-7').mouseleave(function () {
$(".title-cnt").css("z-index","0");
 $(".hover-tag").css("z-index","0");
 $("#cnt").removeClass("fadeInUpp");
$("#cnt-title").removeClass("fadeInUpp");
$("#cnt").css("z-index","0");
});
//web design icon on hover///////////////////////////////////////////////////
$("#i-6").mouseover(function(){
 $(".hover-tag").css("z-index","100");
 $("#abut").addClass("fadeInUpp");
$("#abut-title").addClass("fadeInUpp");
$("#abut").css("z-index","110");
$(".title-abut").css("z-index","110");
}); 
//about us icon on hover//////////////////////////////////////////////////////
$('#i-7').mouseleave(function () {
$(".title-abut").css("z-index","0");
 $(".hover-tag").css("z-index","0");
 $("#cnt").removeClass("fadeInUpp");
$("#abut-title").removeClass("fadeInUpp");
$("#abut").css("z-index","0");
});
});