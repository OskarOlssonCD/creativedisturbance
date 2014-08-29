jQuery(function($) {
$(document).ready(function(){
	$('.clk').click(function ()
	{
		$('#audio_src').attr('src',$(this).attr('audio'));
		alert($('#audio_src').attr('src'));
		alert($(this).attr('audio'));
		var audio1 = $("#player");
		audio1.trigger('pause');
		audio1.trigger('load');//suspends and restores all audio element
		audio1.trigger('play');;
	});
});
});