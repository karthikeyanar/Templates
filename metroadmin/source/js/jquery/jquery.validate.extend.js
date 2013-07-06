$.validator.setDefaults({
	showErrors: function (errorMap, errorList) {
		this.defaultShowErrors();
		$.each(errorList, function (index, value) {
			var $element = $(value.element);
			if ($element.data("chosen") != undefined) {
				var $container = $element.data("chosen").container;
				var $error = $(".error:first", $container.parent());
				$error.after($container);
			}
		});
	}
});