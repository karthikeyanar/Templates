var jhelper={
	fixedLayout: function() {
		$(".container").each(function() {
			$(this).removeClass("container").addClass("container");
		});
	}
	,fluidLayout: function() {
		$(".container").each(function() {
			$(this).removeClass("container").addClass("container");
		});
	}
	,icheck: function() {
		$(":input[data-style='icheck']").each(function() {
			var $this=$(this);
			var $parent=$this.parent();
			if($parent.hasClass("radio")||$parent.hasClass("checkbox")) {
				$parent.addClass("icheck-label");
			}
			if($this.attr("disabled")!=undefined) {
				$this.addClass("disabled");
			}
			var skin="";
			var color="";
			if($this.attr("data-skin")==undefined) { skin="square"; } else { skin=$this.attr("data-skin"); }
			if($this.attr("data-color")==undefined) { color="blue"; } else { color=$this.attr("data-color"); }
			var icheckClass="icheckbox_"+skin+(color!=""?'-'+color:'');
			var iradioClass="iradio_"+skin+(color!=""?'-'+color:'');
			$this.iCheck({
				checkboxClass: icheckClass,
				radioClass: iradioClass
			});
		});
	}
	,formValidate: function() {
		$(".form-validate").validate({
			ignore: "input[type='text']:hidden"
		});
	}
	,datePicker: function() {
		$(".datepicker").datepicker({ autoclose: true,todayHighlight: true });
	}
	,tooltip: function() {
		$("[data-toggle='tooltip']").tooltip();
	}
	,chartToolTip: function(x,y,contents) {
		$('<div id="tooltip" class="chart-tooltip tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner">'+contents+'</div></div>').css({
			top: y-43,
			left: x-15
		}).appendTo("body").fadeIn(200);
	}
}
function appendResponsiveStyle(styles) {
	var windowWidth=$(window).width();
	$("#responsiveStyle").remove();
	var css=$("<style id='responsiveStyle' type='text/css'></style>").get(0);
	if(windowWidth>767) {
		var styles='.container { max-width: '+(windowWidth-80)+'px;}';
		if(css.styleSheet) css.styleSheet.cssText=styles;
		else css.appendChild(document.createTextNode(styles));
		document.getElementsByTagName("head")[0].appendChild(css);
	}
}
$(window).resize(function() {
	appendResponsiveStyle();
});
$(function() {
	appendResponsiveStyle();
	jhelper.icheck();
	jhelper.formValidate();
	jhelper.datePicker();
	jhelper.tooltip();

	$(".select2").select2();

	$('#navbar .show-sidebar').click(function() {
		var $sidbar=$("#sidebar");
		$sidbar.toggleClass("visible",0);
		var $icon=$("i",this);
		$icon.removeAttr("class");
		if($sidbar.hasClass("visible")) {
			$icon.addClass("m-icon-big-swapleft");
		} else {
			$icon.addClass("m-icon-big-swapright");
		}
		$icon.addClass("m-icon-white");
	});
	$('.toggle-sidebar').click(function() {
		$("body").toggleClass("min-sidebar");
	});
	// accordion open and collapsed
	$('#sidebar .accordion').on('shown',function(e) {
		$(e.target).prev('.panel-title').find('.accordion-toggle').addClass('open').addClass('collapsed');
	});
	$('#sidebar .accordion').on('hidden',function(e) {
		$(this).find('.accordion-toggle').not($(e.target)).removeClass('open').addClass('collapsed');
	});
	// dismiss breadcrumb
	$(document).on('click.breadcrumb.data-api',"[data-dismiss='breadcrumb']",function() {
		var $breadcrumb=$(this).parents(".breadcrumb:first");
		$breadcrumb.fadeOut();
	});
	$('.sidebar .panel-heading').off('mouseenter').on('mouseenter',function() {
		var $this=$(this);
		var $body=$("body");
		if($body.hasClass("min-sidebar")) {
			$(".accordion-toggle",$this).addClass("accordion-toggle-hover").css("width",$(".panel-collapse",$this).width()+26);
			$(".panel-collapse",$this).addClass("panel-collapse-hover");
		}
	});
	$('.sidebar .panel-heading').off('mouseleave').on('mouseleave',function() {
		var $this=$(this);
		$(".accordion-toggle",$this).css("width","").removeClass("accordion-toggle-hover");
		$(".panel-collapse",$this).removeClass("panel-collapse-hover");
	});
});

