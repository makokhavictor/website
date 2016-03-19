

function spin (){

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
 }, 2175);
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

}, 3000);
};

window.onload = spin;




