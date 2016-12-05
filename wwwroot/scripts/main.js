/**
 * 		Main Scripts
 */

$(document).ready(function(){
    $(".nav-link").hover(function(){
    	$(this).next().show();
    }, function() {
    	$(this).next().hide();
    });	

    $('ul.tabs li').click(function(){
	var tab_id = $(this).attr('data-tab');

	$('ul.tabs li').removeClass('current');
	$('.tab-content').removeClass('current');

	$(this).addClass('current');
	$("#"+tab_id).addClass('current');
	});

	$('ul.tabs2 li').click(function(){
	var tab_id2 = $(this).attr('data-tab');

	$('ul.tabs2 li').removeClass('current2');
	$('.tab2-content').removeClass('current2');

	$(this).addClass('current2');
	$("#"+tab_id2).addClass('current2');
	});
});

