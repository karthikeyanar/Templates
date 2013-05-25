var jhelper = {
	fixedLayout: function () {
		$(".container-fluid").each(function () {
			$(this).removeClass("container-fluid").addClass("container");
		});
	}
	, fluidLayout: function () {
		$(".container").each(function () {
			$(this).removeClass("container").addClass("container-fluid");
		});
	}
	, icheck: function (target) {
		$(":input[data-style='icheck']", target).each(function () {
			var $this = $(this);
			var $parent = $this.parent();
			if ($parent.hasClass("radio")
			|| $parent.hasClass("checkbox")) {
				$parent.addClass("icheck-label");
			}
			if ($this.attr("disabled") != undefined) {
				$this.addClass("disabled");
			}
			var skin = "";
			var color = "";
			if ($this.attr("data-skin") == undefined) { skin = "square"; } else { skin = $this.attr("data-skin"); }
			if ($this.attr("data-color") == undefined) { color = "blue"; } else { color = $this.attr("data-color"); }
			var icheckClass = "icheckbox_" + skin + (color != "" ? '-' + color : '');
			var iradioClass = "iradio_" + skin + (color != "" ? '-' + color : '');
			$this.iCheck({
				checkboxClass: icheckClass,
				radioClass: iradioClass
			});
		});
	}
	, resizeChosen: function () {
		$(".chzn-container").each(function () {
			var e = $(this);
			e.css("width", e.parent().width() + "px");
			e.find(".chzn-drop").css("width", e.parent().width() - 2 + "px");
			e.find(".chzn-search input").css("width", e.parent().width() - 37 + "px")
		})
	}
	, resizeMainBar: function () {
		var $sidebar = $("#sidebar");
		var $mainbar = $("#mainbar");
		var $navbar = $("#navbar");
		var $window = $(window);
		var h = $window.height() - $navbar.height();
		$mainbar.css("min-height", h);
	}
}
$(window).resize(function () {
	jhelper.resizeMainBar();
	jhelper.resizeChosen();
});
jhelper.resizeMainBar();
var config = {
	'.chzn-select': {},
	'.chzn-select-deselect': { allow_single_deselect: true },
	'.chzn-select-no-single': { disable_search_threshold: 10 },
	'.chzn-select-no-results': { no_results_text: 'Oops, nothing found!' },
	'.chzn-select-width': { width: "100%" }
}
$(function () {
	var $body = $("body");
	jhelper.icheck($body);
	for (var selector in config) {
		$(selector).chosen(config[selector]);
	}
	$(".form-validate").validate({
		ignore: "input[type='text']:hidden"
	});
	$('.topbar .barmenu').click(function () {
		var $sidebar = $("#sidebar");
		$sidebar.toggleClass("show");
	});
	$('.sidebar-barmenu').click(function () {
		var $sidebar = $("#sidebar");
		$sidebar.toggleClass("show");
	});
	$('.accordion').on('shown', function (e) {
		$(e.target).prev('.accordion-heading').find('.accordion-toggle').addClass('open').addClass('collapsed');
	});
	$('.accordion').on('hidden', function (e) {
		$(this).find('.accordion-toggle').not($(e.target)).removeClass('open').addClass('collapsed');
	});
	$(".datepicker").datepicker({ autoclose: true, todayHighlight: true });
});