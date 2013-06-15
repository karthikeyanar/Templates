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
				if($parent.hasClass("radio")
			||$parent.hasClass("checkbox")) {
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
		var $mainbar=$("#mainbar");
		var $navbar=$("#navbar");
		var $window=$(window);
		var $body=$("body");
		var h=$window.height();
		if(h<$body.height()) {
			h=$body.height();
		}
		h=h-$navbar.height();
		$sidebar.css("min-height",h);
		$(".sidebar-nav-btn").removeClass("shown");
		if($window.width()<=979) {
			$sidebar.hide();
		} else {
			$sidebar.show();
			$("body").removeClass("hide-side-bar");
		}
	}
	,showSideBar: function() {
		var $sidebar=$("#sidebar");
		var $btn=$(".sidebar-nav-btn");
		var $body=$("body");
		if(!$body.hasClass("hide-side-bar")) {
			$sidebar.toggle("slide",function() {
				$btn.toggleClass("shown");
				$body.toggleClass("hide-side-bar");
			});
		} else {
			$btn.toggleClass("shown");
			$body.toggleClass("hide-side-bar");
			$sidebar.toggle("slide");
		}
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
});