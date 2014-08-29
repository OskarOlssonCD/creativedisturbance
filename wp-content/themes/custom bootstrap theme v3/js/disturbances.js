jQuery(function($) {
$(document).ready(function(){
var $el, $ps, $up, totalHeight;
$(".mainbox").hover(function(){
	$el = $(this).find(".box");
	$p= $el.find(".read-more");
	$up = $el;
	$ps = $el.find(".list");		
	ht = $ps.height() + 110;
	// alert($up.height());			
	$up
		.css({
			"height": $up.height(),
			"max-height": 9999
		})
		.animate({
			height: ht
		});
	$p.html("<span class=\"glyphicon glyphicon-chevron-up clk\" />");
	return false;	
},function(){
	$el = $(this).find(".box");
	$p= $el.find(".read-more");
	$up = $el;
	$ps = $el.find(".list");	
		
	$up
		.css({
			"height": $up.height(),
			"max-height": 9999
		})
		.animate({
			"height": 110
		});
	$p.html("<span class=\"glyphicon glyphicon-chevron-down clk\" />");
	return false;
});
});
});