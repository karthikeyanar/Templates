var Main = {
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
}