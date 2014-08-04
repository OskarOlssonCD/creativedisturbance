jQuery(function($) {
$(document).ready(function(){
var $el, $ps, $up, totalHeight;
$(".box").hover(function(){
	$el = $(this);
	$p= $el.find(".read-more");
	$up = $el;
	$ps = $el.find(".list");		
	ht = $ps.height() + 145;			
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
	$el = $(this);
	$p= $el.find(".read-more");
	$up = $el;
	$ps = $el.find(".list");	
		
	$up
		.css({
			"height": $up.height(),
			"max-height": 9999
		})
		.animate({
			"height": 150
		});
	$p.html("<span class=\"glyphicon glyphicon-chevron-down clk\" />");
	return false;
});
});
});