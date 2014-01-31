

(function($) {
	var BSCONFIRM=function(element) {
		var self=this;
		this.element=element;
		this.$element=$(element);

		this.okclass=this.$element.data("okClass");
		this.cancelclass=this.$element.data("cancelClass");
		this.oklabel=this.$element.data("okLabel");
		this.cancellabel=this.$element.data("cancelLabel");

		if(this.oklabel==undefined)
			this.oklabel="OK";
		if(this.cancellabel==undefined)
			this.cancellabel="Cancel";
		if(this.okclass==undefined)
			this.okclass="btn-primary";
		if(this.cancelclass==undefined)
			this.cancelclass="btn-danger";

		var popoverContent="<div> \
			<span class='btn "+self.okclass+" popover-confirm-btn'> \
			"+self.oklabel+" \
			</span>&nbsp;&nbsp; \
			<span class='btn "+self.cancelclass+" popover-cancel-btn'> \
			"+self.cancellabel+" \
			</span> \
			</div>";


		this.$element.popover({
			html: true,
			content: popoverContent
		});



	}
	var old=$.fn.bsconfirm;
	$.fn.bsconfirm=function(option) {
		return this.each(function() {
			var $this=$(this)
			var data=$this.data('bsconfirm')

			if(!data) $this.data('bsconfirm',(data=new BSCONFIRM(this)))
			if(typeof option=='string') data[option]()
		})
	};

	/* BSCONFIRM NO CONFLICT
	* =================== */

	$.fn.bsconfirm.noConflict=function() {
		$.fn.bsconfirm=old;
		return this;
	};

	$(function() {
		$('[data-provide="bsconfirm"]').bsconfirm();
	});

} (window.jQuery));

$(document).on('click','.popover-confirm-btn',function() {
	var popover=$(this).closest('.popover'),
    btn=popover.prev(),
    callback=btn.data('popover-confirm'),
    result=eval(callback);

	btn.popover('toggle');
});

$(document).on('click','.popover-cancel-btn',function() {
	var popover=$(this).closest('.popover'),
    btn=popover.prev();

	btn.popover('toggle');
});