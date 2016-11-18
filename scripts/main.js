/**
 * 		Main Scripts
 */

$(document).ready(function(){
    $(".nav-link").hover(function(){
    	$(this).next().show();
    }, function() {
    	$(this).next().hide();
    });	
});