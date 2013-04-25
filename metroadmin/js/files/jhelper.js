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
}
$(window).resize(function () {
	var w = $(window).width();
	if (w >= 978) {
		$(".tab-menu").show();
	}
});
var config = {
	'.chzn-select': { "width": "auto" },
	'.chzn-select-deselect': { allow_single_deselect: true },
	'.chzn-select-no-single': { disable_search_threshold: 10 },
	'.chzn-select-no-results': { no_results_text: 'Oops, nothing found!' },
	'.chzn-select-width': { width: "100%" }
}
$(function () {
	var $body = $("body");
	var $tabmenu = $(".tab-menu");
	$("#show-mobile-menu")
	.click(function () {
		$tabmenu.toggle();
	});
	jhelper.icheck($body);
	for (var selector in config) {
		$(selector).chosen(config[selector]);
	}
});