$(function() {
	$('[data-popover-confirm]').each(function() {
		var $btn = $(this);
		$btn.popover({
			html: true,
			placement: $btn.data("placement"),
			trigger: 'manual',
			template: '<div class="popover popover-confirm"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
			content: "<span data-popover-confirm-container> \
						<span class='btn btn-primary popover-confirm-btn'> \
						  Ok \
						</span> \
						<span class='btn btn-danger popover-cancel-btn'> \
						  Cancel \
						</span> \
					  </span>"
		});
	});
});

$(document).on('click','[data-popover-confirm]',function() {
	var btn=$(this),
    popover=btn.next();
	btn.popover('toggle');
});

$(document).on('click','.popover-confirm-btn',function() {
	var popover=$(this).closest('.popover'),
    btn=popover.prev(),
    callback=btn.data('popover-confirm'),
    result=eval(callback);

	btn.popover('hide');
});

$(document).on('click','.popover-cancel-btn',function() {
	var popover=$(this).closest('.popover'),
    btn=popover.prev();

	btn.popover('hide');
});
