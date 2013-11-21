(function($) {
	var BSFANCYCHECK=function(element) {
		var that=this;
		this.element=element;
		this.$element=$(element);
		this.isRadio=false;
		this.theme=this.$element.data("theme");
		if(this.theme==undefined) {
			this.theme="blue";
		}
		this.size=this.$element.data("size");
		if(this.size==undefined){
			this.size="";
		}
		this.container=$("<span class='bs-fancy-check-wrapper'><a class='bs-fancy-check-toggle' href='#'></a></span>");
		this.$element.before(this.container);
		this.container.append(this.$element);
		this.toggle=$(".bs-fancy-check-toggle",this.container);
		this.toggle.addClass(this.theme);
		if(this.element.checked)
			this.toggle.addClass("checked");
		if(this.$element.attr('disabled'))
			this.toggle.addClass("disabled");
		if(this.$element.attr('type')=="checkbox")
			this.toggle.addClass("checkbox");
		if(this.$element.attr('type')=="radio") {
			this.toggle.addClass("radio");
			this.isRadio=true;
		}
		if(this.size!="") {
			this.toggle.addClass(this.size);
		}

		//on change, change the class of the link
		this.$element.change(function() {
			this.checked&&that.toggle.addClass('checked')||that.toggle.removeClass('checked');
			return true;
		});

		// Click Handler, trigger the click and change event on the input
		this.toggle.click(function() {
			//do nothing if the original input is disabled
			if(that.$element.attr('disabled')) {
				return false;
			}
			//trigger the envents on the input object
			that.$element.trigger('click').trigger("change");
			if(that.isRadio) {
				var $frm=that.$element.parents("form:first");
				// uncheck all others of same name input radio elements
				$('input:radio[name="'+that.$element.attr('name')+'"]',$frm)
				.not(that.$element).each(function() {
					$(this).trigger('change');
				});
			}
			return false;
		});

	}
	var old=$.fn.bsfancycheck;
	$.fn.bsfancycheck=function() {
		return this.each(function() {
			var $this=$(this)
			var data=$this.data('bsfancycheck')

			if(!data) $this.data('bsfancycheck',(data=new BSFANCYCHECK(this)))
		})
	};

	/* BSFANCYCHECK NO CONFLICT
	* =================== */

	$.fn.bsfancycheck.noConflict=function() {
		$.fn.bsfancycheck=old;
		return this;
	};

	$(function() {
		$('[data-provide="bsfancycheck"]').bsfancycheck();
	});

} (window.jQuery));
