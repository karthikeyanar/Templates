<!-- jquery -->
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<script>window.jQuery || document.write('<script src="js/jquery/jquery-1.11.1.min.js"><\/script>')</script>
<script>
	// check bootstrap cdn css
	$(function() {
		var $div = $("<div class='hide'></div>");
		$("body").append($div);
		if($div.is(':visible')===true) {
			$('<link href="css/plugins/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />').prependTo('head');
			$div.remove();
		}
	}); 
</script>
<!-- jquery validation -->
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
<script>if(typeof($.fn.validate) === 'undefined') document.write('<script src="js/jquery/jquery.validate.min.js"><\/script>')</script>
<!-- bootstrap -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script>if(typeof($.fn.modal) === 'undefined') document.write('<script src="js/bootstrap/bootstrap.min.js"><\/script>')</script>
<!-- jquery ui 1.10.4 -->
<script src="js/jquery/jquery-ui-1.10.4.custom.min.js"></script>
<!-- scrollTo -->
<script src="js/plugins/scrollTo/jquery.scrollTo.js" type="text/javascript"></script>
<!-- slim scroll -->
<script src="js/plugins/slimscroll/jquery.slimscroll.js" type="text/javascript"></script>
<!-- autofix -->
<script src="js/plugins/autofix/jquery.autofix_anything.js" type="text/javascript"></script>
 
