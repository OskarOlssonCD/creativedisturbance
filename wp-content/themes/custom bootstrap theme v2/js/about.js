jQuery(function($) {
$(document).ready(function(){
	var active = true;
	$('#bottom-text').click(function ()
	{
		if (active)
		{
			active = false;
			$('.panel-collapse').collapse('show');
			$('.panel-title').attr('data-toggle', '');
			$(this).text('Collapse all');
		}
		else
		{
			active = true;
			$('.panel-collapse').collapse('hide');
			$('.panel-title').attr('data-toggle', 'collapse');
			$(this).text('Expand all');
		}
	});
	$('#accordion').on('show.bs.collapse', function ()
	{
		if (active) $('#accordion .in').collapse('hide');
	});
});
});