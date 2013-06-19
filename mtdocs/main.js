$(document).ready(function(){
	$(window).resize(function(){
	    var bgwidth = $(window).width(),
	    bgheight = $(window).height();
	    $('#cont_img').attr({width:bgwidth, height:bgheight});
	});
});