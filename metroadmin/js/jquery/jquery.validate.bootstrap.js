$.validator.setDefaults({
	errorPlacement: function (error, element) {
		return true;
	},
	highlight: function (element, errorClass, validClass) {
		var $element;
		if (element.type === 'radio') {
			$element = this.findByName(element.name);
		} else {
			$element = $(element);
		}
		$element.addClass(errorClass).removeClass(validClass);
		$element.parents("div.control-group").addClass("error");
	},
	unhighlight: function (element, errorClass, validClass) {
		var $element;
		if (element.type === 'radio') {
			$element = this.findByName(element.name);
		} else {
			$element = $(element);
		}
		$element.removeClass(errorClass).addClass(validClass);
		$element.parents("div.control-group").removeClass("error");
	},
	success: function (label, element) {
		if ($(element).data("popover") != undefined) {
			$(element).data("popover").destroy();
		}
	},
	showErrors: function (errorMap, errorList) {

		$.each(this.successList, function (index, value) {
			$(value).popover('hide');
		});

		$.each(errorList, function (index, value) {
			var $element = $(value.element);
			var isnotexist = false;
			if ($element.data("popover") == undefined) {
				isnotexist = true;
			} else {
				if (!$element.data("popover").tip().get(0)) {
					isnotexist = true;
				}
			}
			if (isnotexist) {
				var pop = $element.popover({
					trigger: 'manual',
					content: value.message,
					template: '<div class="popover error"><div class="arrow"></div><div class="popover-inner"><div class="popover-content"><p></p></div></div></div>'
				});
				$element.data("popover").options.content = value.message;
				$element.popover('show');
			}
			$element.data("popover").options.content = value.message;
			$element.data("popover").tip().show().find('.popover-content').html(value.message);
		});

		this.defaultShowErrors();
	}
});