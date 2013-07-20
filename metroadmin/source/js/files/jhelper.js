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
	,resizeChosen: function() {
		$(".chzn-container").each(function() {
			var e=$(this);
			e.css("width",e.parent().width()+"px");
			e.find(".chzn-drop").css("width",e.parent().width()-2+"px");
			e.find(".chzn-search input").css("width",e.parent().width()-37+"px")
		});
	}
	,chartToolTip: function(x,y,contents) {
		$('<div id="tooltip" class="chart-tooltip tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner">'+contents+'</div></div>').css({
			top: y-43,
			left: x-15
		}).appendTo("body").fadeIn(200);
	}
}
$(window).resize(function() {
	jhelper.resizeChosen();
	var width=$(window).width();
	if(width>979) {
		$("#sidebar").show();
	} else {
		$("#sidebar").hide();
		$("body").removeClass("min-sidebar");
	}
});
$(function() {
	var $body=$("body");
	jhelper.icheck($body);
	jhelper.formValidate();
	jhelper.datePicker();
	jhelper.tooltip();

	$(".select2").select2();

	$('.topbar .barmenu').click(function() {
		$("#sidebar").toggle("slide",500);
	});
	$('.toggle-sidebar').click(function() {
		$("body").toggleClass("min-sidebar");
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
	$('#sidebar .accordion-group').off('mouseenter').on('mouseenter',function() {
		var $this=$(this);
		var $body=$("body");
		if($body.hasClass("min-sidebar")) {
			$(".accordion-toggle",$this).addClass("accordion-toggle-hover").css("width",$(".accordion-body",$this).width()+26);
			$(".accordion-body",$this).addClass("accordion-body-hover");
		}
	});
	$('#sidebar .accordion-group').off('mouseleave').on('mouseleave',function() {
		var $this=$(this);
		$(".accordion-toggle",$this).css("width","").removeClass("accordion-toggle-hover");
		$(".accordion-body",$this).removeClass("accordion-body-hover");
	});
});

