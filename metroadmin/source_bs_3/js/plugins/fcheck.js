(function($) {
	var FCHECK=function(element) {
		var self=this;
		this.element=element;
		this.$element=$(element);
		this.isRadio=false;
		this.color=this.$element.data("color");
		this.skin=this.$element.data("skin");
		if(this.color==undefined) {
			this.color="";
		}
		if(this.skin==undefined) {
			this.skin="";
		}
		this.size=this.$element.data("size");
		if(this.size==undefined) {
			this.size="";
		}
		this.container=$("<span class='fcheck'><a href='javascript:;'><i class='fa'></i></a></span>");
		this.$element.before(this.container);
		this.container.append(this.$element);
		this.toggle=$("i",this.container);
		if(this.element.checked)
			this.toggle.addClass("fa-check");
		if(this.$element.attr('disabled'))
			this.toggle.addClass("disabled");
		if(this.$element.attr('type')=="checkbox")
			this.toggle.addClass("checkbox");
		if(this.$element.attr('type')=="radio") {
			this.toggle.addClass("radio");
			this.isRadio=true;
		}
		this.toggle.addClass(this.color);
		this.toggle.addClass(this.skin);
		if(this.size!="") {
			this.toggle.addClass(this.size);
		}

		//on change, change the class of the link
		//this.$element.change(function() {
			//this.checked&&self.toggle.addClass('fa-check')||self.toggle.removeClass('fa-check');
			//return true;
		//});

		// Click Handler, trigger the click and change event on the input

		this
		.$element
		.click(function() {
			console.log("click" + "," + this.checked);
			$(this).fcheck('update');
			return;
			//do nothing if the original input is disabled
			if(self.$element.attr('disabled')) {
				return false;
			}
			//trigger the envents on the input object
			//self.$element.trigger("click").trigger("change").fcheck('update');
			if(self.isRadio) {
				var $frm=self.$element.parents("form:first");
				// uncheck all others of same name input radio elements
				$('input:radio[name="'+self.$element.attr('name')+'"]',$frm)
				//.not(self.$element)
				.each(function() {
					$(this).fcheck('update');
				});
			}
			return false;
		});

		this.update=function() {
			this.toggle.removeClass("fa-check");
			if(this.element.checked)
				this.toggle.addClass("fa-check");
		};

		this.destroy=function() {
			this.$element.removeData("fcheck");
			this.container.before(this.element);
			this.container.remove();
		};

	}
	var old=$.fn.fcheck;
	$.fn.fcheck=function(option) {
		return this.each(function() {
			var $this=$(this)
			var data=$this.data('fcheck')

			if(!data) $this.data('fcheck',(data=new FCHECK(this)))
			if(typeof option=='string') data[option]()
		})
	};

	/* FCHECK NO CONFLICT
	* =================== */

	$.fn.fcheck.noConflict=function() {
		$.fn.fcheck=old;
		return this;
	};

	$(function() {
		$('[data-provide="fcheck"]').fcheck();
	});

} (window.jQuery));
