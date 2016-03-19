var HOST_NAME = 'http://localhost/global/';
$(function() {
		$('#main-menu').smartmenus({
			subMenusSubOffsetX: 1,
			subMenusSubOffsetY: -8
		});
	});
//Highlight current menu item
$(document).ready(function(){
    $('#main-menu a').each(function(index) {
        if(this.href.trim() == window.location)
            $(this).addClass("current");
    });
});


$(document).ready(function(){
	$('.select-menu span').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.select-menu span').removeClass('current2');
		$('.packages-holder').removeClass('current2');

		$(this).addClass('current2');
		$("#"+tab_id).addClass('current2');
	});

});
$(document).ready(function(){

setTimeout(function () {
 $("#ch-thumb").removeClass("slide-down");
}, 5000);

 setTimeout(function () {
 $("#ch-thumb1").removeClass("slide-down2");
}, 10000);

 setTimeout(function () {
 $("#ch-thumb2").removeClass("slide-down3");
}, 15000);

});

function submitForm () {
	$( '#msg' ) . html ( 'Loading...' );
	var form = $( '#global_form' ) . serialize ();
	var str = form;

	var xmlhttp;
        if (window.XMLHttpRequest)
          {
          xmlhttp=new XMLHttpRequest();
          }
        else
          {
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
          {

          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            $( '#msg' ) . html ( xmlhttp.responseText );
          }       
         }        
        xmlhttp.open("POST",HOST_NAME+"library/send-contact.php",true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send( str );
}