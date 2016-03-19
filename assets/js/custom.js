	// jQuery(function($) {
 //                $(document).ready( function() {
 //                  //enabling stickUp on the '.navbar-wrapper' class
 //                  $('#stick-top').stickUp({
 //                  	marginTop: 'auto'
 //                  });
 //                });
 //              });


$(document).ready(function(){
    $("#stick-top").sticky({topSpacing:0});
    $("#stick-top").on('sticky-start', function() { 
    	$("#stick-top").css({"z-index":25,"background":"#fff"});
    });
  });



		var tpj=jQuery;
		tpj.noConflict();

		tpj(document).ready(function() {

			if (tpj.fn.cssOriginal!=undefined)
			tpj.fn.css = tpj.fn.cssOriginal;

			tpj('.fullwidthbanner').revolution({
				delay:5000,
				startwidth:800,
				startheight:230,

				onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

				thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
				thumbHeight:50,
				thumbAmount:3,

				hideThumbs:200,
				navigationType:"bullet",				//bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
				navigationArrows:"verticalcentered",	//nexttobullets, verticalcentered, none
				navigationStyle:"round",				//round,square,navbar

				touchenabled:"on",						// Enable Swipe Function : on/off

				navOffsetHorizontal:0,
				navOffsetVertical:20,

				stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at 											slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
				stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if 										set to -1 slide never stop automatic

				fullWidth:"on",

				shadow:0							//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
			});
		});