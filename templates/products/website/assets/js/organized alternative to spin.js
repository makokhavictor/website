function intervalTrigger() {
window.setInterval(function(){
 
 setTimeout(function () {
 $(".i-2").removeClass("i-1-anime");
 $(".i-3").removeClass("i-2-anime");
 $(".i-4").removeClass("i-3-anime");
 $(".i-5").removeClass("i-4-anime");
 $(".i-6").removeClass("i-5-anime");
 $(".i-7").removeClass("i-6-anime");
 $(".i-8").removeClass("i-7-anime");
 $(".i-1-5").removeClass("i-8-anime");
 }, 2000);
 setTimeout(function () {
$(".i-1-anime").addClass("i-2"); 
$(".i-1-anime").removeClass("i-1-5");
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
$(".i-8-anime").addClass("i-1-5"); 
$(".i-8-anime").removeClass("i-8");
 
  
}, 1500);

 setTimeout(function () {
$(".i-1-5").addClass("i-1-anime"); 
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
$("#webd").addClass("fadeInUpp");
$("#webd-title").addClass("fadeInUpp");
$("#webd").css("z-index","10"); 

}
else{
$("#webd").removeClass("fadeInUpp");
$("#webd-title").removeClass("fadeInUpp");
$("#webd").css("z-index","0"); 
}
  
  
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

var scl = document.getElementById('i-4');
var scl_class = scl.className.split(' ')[1];
document.getElementById("w-circle2").innerHTML = scl_class;
if ( scl_class == "i-1-5" ) {
$("#scl").addClass("fadeInUpp");
$("#scl-title").addClass("fadeInUpp");
$("#scl").css("z-index","10");
}
else{
$("#scl").removeClass("fadeInUpp");
$("#scl-title").removeClass("fadeInUpp");
$("#scl").css("z-index","0");

} 
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

var cldd = document.getElementById('i-5');
var cldd_class = cldd.className.split(' ')[1];
document.getElementById("w-circle2").innerHTML = cldd_class;
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

}, intervaltime);


 setTimeout(function () {
$(".i-1-5").removeClass("i-1"); 

}, 6);
 setTimeout(function () {
$(".i-1").addClass("i-1-5"); 

}, 5);




};



var intervaltime = 7000;
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////on click spin/////////////////////////////////////////////
 function spin (){
 
 
 setTimeout(function () {
 $(".i-2").removeClass("i-1-anime");
 $(".i-3").removeClass("i-2-anime");
 $(".i-4").removeClass("i-3-anime");
 $(".i-5").removeClass("i-4-anime");
 $(".i-6").removeClass("i-5-anime");
 $(".i-7").removeClass("i-6-anime");
 $(".i-8").removeClass("i-7-anime");
 $(".i-1-5").removeClass("i-8-anime");
 }, 1000);
 setTimeout(function () {
$(".i-1-anime").addClass("i-2"); 
$(".i-1-anime").removeClass("i-1-5");
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
$(".i-8-anime").addClass("i-1-5"); 
$(".i-8-anime").removeClass("i-8");
 
  
}, 750);

 setTimeout(function () {
$(".i-1-5").addClass("i-1-anime"); 
$(".i-2").addClass("i-2-anime"); 
$(".i-3").addClass("i-3-anime"); 
$(".i-4").addClass("i-4-anime"); 
$(".i-5").addClass("i-5-anime");
$(".i-6").addClass("i-6-anime");
$(".i-7").addClass("i-7-anime");
$(".i-8").addClass("i-8-anime");

}, 325);

var webd = document.getElementById('i-8');
var webd_class = webd.className.split(' ')[1];
if ( webd_class == "i-8" ) {
$("#webd").addClass("fadeInUpp");
$("#webd-title").addClass("fadeInUpp");
$("#webd").css("z-index","10"); 

}
else{
$("#webd").removeClass("fadeInUpp");
$("#webd-title").removeClass("fadeInUpp");
$("#webd").css("z-index","0"); 
}
  
  
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

var scl = document.getElementById('i-4');
var scl_class = scl.className.split(' ')[1];
document.getElementById("w-circle2").innerHTML = scl_class;
if ( scl_class == "i-1-5" ) {
$("#scl").addClass("fadeInUpp");
$("#scl-title").addClass("fadeInUpp");
$("#scl").css("z-index","10");
}
else{
$("#scl").removeClass("fadeInUpp");
$("#scl-title").removeClass("fadeInUpp");
$("#scl").css("z-index","0");

} 
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

var cldd = document.getElementById('i-5');
var cldd_class = cldd.className.split(' ')[1];
document.getElementById("w-circle2").innerHTML = cldd_class;
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

$('#i-9').hide();

 setTimeout(function () {
$('#i-9').show();

}, 1000);



 setTimeout(function () {
$(".i-1-5").removeClass("i-1"); 

}, 6);
 setTimeout(function () {
$(".i-1").addClass("i-1-5"); 

}, 5);

};
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function spinned (){
 
 setTimeout(function () {
 $(".i-2").removeClass("b-2-anime");
 $(".i-3").removeClass("b-3-anime");
 $(".i-4").removeClass("b-4-anime");
 $(".i-5").removeClass("b-5-anime");
 $(".i-6").removeClass("b-6-anime");
 $(".i-7").removeClass("b-7-anime");
 $(".i-8").removeClass("b-8-anime");
 $(".i-1").removeClass("b-1-anime");
 }, 1000);
 setTimeout(function () {
$(".b-1-anime").addClass("i-1"); 
$(".b-1-anime").removeClass("i-2");
$(".b-2-anime").addClass("i-2"); 
$(".b-2-anime").removeClass("i-3");
$(".b-3-anime").addClass("i-3"); 
$(".b-3-anime").removeClass("i-4");
$(".b-4-anime").addClass("i-4"); 
$(".b-4-anime").removeClass("i-5");
$(".b-5-anime").addClass("i-5"); 
$(".b-5-anime").removeClass("i-6");
$(".b-6-anime").addClass("i-6"); 
$(".b-6-anime").removeClass("i-7");
$(".b-7-anime").addClass("i-7"); 
$(".b-7-anime").removeClass("i-8");
$(".b-8-anime").addClass("i-8"); 
$(".b-8-anime").removeClass("i-1");
 
  
}, 750);

 setTimeout(function () {
$(".i-1").addClass("b-8-anime"); 
$(".i-2").addClass("b-1-anime"); 
$(".i-3").addClass("b-2-anime"); 
$(".i-4").addClass("b-3-anime"); 
$(".i-5").addClass("b-4-anime");
$(".i-6").addClass("b-5-anime");
$(".i-7").addClass("b-6-anime");
$(".i-8").addClass("b-7-anime");

}, 325);


 setTimeout(function () {
$(".i-1").removeClass("i-1-5"); 

}, 6);
 setTimeout(function () {
$(".i-1-5").addClass("i-1"); 

}, 5);

$('#i-1').hide();

 setTimeout(function () {
$('#i-1').show();

}, 1000);

};

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

var spinning = intervalTrigger();



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



$("#i-9").click(function(){
clearInterval(intervaltime);
 setTimeout(function () {
 spin ();
 }, 100); 
});

$("#i-1").click(function(){
clearInterval(intervaltime);
spinned ();  
});


$("#i-4").click(function(){
window.clearInterval();
window.clearInterval();


});


 
 


 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 








 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
