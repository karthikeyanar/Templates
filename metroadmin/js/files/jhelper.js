var jhelper={
	fixedLayout: function() {
		$(".container-fluid").each(function() {
			$(this).removeClass("container-fluid").addClass("container");
		});
	}
	,fluidLayout: function() {
		$(".container").each(function() {
			$(this).removeClass("container").addClass("container-fluid");
		});
	}
	,icheck: function(target) {
		try {
			$(":input[data-style='icheck']",target).each(function() {
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
		} catch(e) { }
	}
	,chosen: function() {
		try {
			var config={
				'.chzn-select': {},
				'.chzn-select-deselect': { allow_single_deselect: true },
				'.chzn-select-no-single': { disable_search_threshold: 10 },
				'.chzn-select-no-results': { no_results_text: 'Oops, nothing found!' },
				'.chzn-select-width': { width: "100%" }
			}
			for(var selector in config) {
				$(selector).chosen(config[selector]);
			}
		} catch(e) { }
	}
	,formValidate: function() {
		try {
			$(".form-validate").validate({
				ignore: "input[type='text']:hidden"
			});
		} catch(e) { }
	}
	,datePicker: function() {
		try {
			$(".datepicker").datepicker({ autoclose: true,todayHighlight: true });
		} catch(e) { }
	}
	,tooltip: function() {
		try {
			$("[data-toggle='tooltip']").tooltip();
		} catch(e) { }
	}
	,resizeChosen: function() {
		$(".chzn-container").each(function() {
			var e=$(this);
			e.css("width",e.parent().width()+"px");
			e.find(".chzn-drop").css("width",e.parent().width()-2+"px");
			e.find(".chzn-search input").css("width",e.parent().width()-37+"px")
		})
	}
	,resizeSideBar: function() {
		var $sidebar=$("#sidebar");
		var $navbar=$("#navbar");
		var $window=$(window);
		var $body=$("body");
		var h=$window.height();
		if(h<$body.height()) {
			h=$body.height();
		}
		h=h-$navbar.height();
		$sidebar.css("min-height",h);
	}
	,showSideBar: function() {
		var $sidebar=$("#sidebar");
		var $body=$("body");
		$sidebar.toggle();
		if($sidebar.css("display")=="none") {
			$("body").addClass("hide-side-bar");
		} else {
			$("body").removeClass("hide-side-bar");
		}
	}
	,chartToolTip: function(x, y, contents) {
		$('<div id="tooltip" class="chart-tooltip tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner">' + contents + '</div></div>').css( {
			top: y - 43,
			left: x - 15,
		}).appendTo("body").fadeIn(200);
	}
}
$(window).resize(function() {
	jhelper.resizeSideBar();
	jhelper.resizeChosen();
});
$(function() {
	var $body=$("body");
	jhelper.resizeSideBar();
	jhelper.icheck($body);
	jhelper.chosen();
	jhelper.formValidate();
	jhelper.datePicker();
	jhelper.tooltip();
	$('.topbar .barmenu').click(function() {
		jhelper.showSideBar();
	});
	$('.hide-sidebar').click(function() {
		jhelper.showSideBar();
	});
	$('.sidebar-nav-btn').click(function() {
		jhelper.showSideBar();
	});
	$('.accordion').on('shown',function(e) {
		$(e.target).prev('.accordion-heading').find('.accordion-toggle').addClass('open').addClass('collapsed');
	});
	$('.accordion').on('hidden',function(e) {
		$(this).find('.accordion-toggle').not($(e.target)).removeClass('open').addClass('collapsed');
	});

	// dismiss breadcrumb
	$(document).on('click.breadcrumb.data-api',"[data-dismiss='breadcrumb']",function() {
		var $breadcrumb=$(this).parents(".breadcrumb:first");
		$breadcrumb.fadeOut();
	});

});

