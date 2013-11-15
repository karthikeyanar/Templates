<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
			<div class="page-header">
				<h1>Form components</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
				<li><a href="form_component.php">Forms</a> <i class="icon-angle-right"></i></li>
				<li><a href="form_component.php">Form component</a> </li>
				<li class="pull-right"><a href="#" class="close">&times</a></li>
			</ul>
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="icon-edit"></i>Date Pickers</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST" class="form-horizontal">
							<div class="form-group">
								<label for="textfield" class="col-lg-4 control-label">Default</label>
								<div class="col-lg-4">
									<input type="text" id="datepicker" placeholder="Select date" class="form-control" data-plugin="datepicker" />
								</div>
							</div>
							<div>
								<h4>Options</h4>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
										<label class="checkbox-inline"><input type="checkbox" id="autoclose" name="autoclose" data-provide="bsfancycheck" />Auto Close</label>
										<label class="checkbox-inline"><input type="checkbox" id="calendarweeks" data-provide="bsfancycheck" />Calendar Weeks</label>
									<label class="checkbox-inline"><input type="checkbox" id="todayhighlight" data-provide="bsfancycheck" />Today highlight</label>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- end mainbar -->
</div>
<!-- end container -->
<?php include_once 'script.php' ?>
<script>
$(function() {
	$("#autoclose")
	.click(function(){
		updateDatePicker();
	});
	$("#calendarweeks")
	.click(function(){
		updateDatePicker();
	});
	$("#todayhighlight")
	.click(function(){
		updateDatePicker();
	});
});
function updateDatePicker(){
	var autoClose = $("#autoclose").get(0).checked;
	var calendarWeeks = $("#calendarweeks").get(0).checked;
	var todayHighlight = $("#todayhighlight").get(0).checked;
	var $datePicker = $("#datepicker");
	$datePicker.datepicker("remove");
	$datePicker.data("autoClose",autoClose);
	$datePicker.data("calendarWeeks",calendarWeeks);
	$datePicker.data("todayHighlight",todayHighlight);
	APP.handleDatePicker();
}
</script>
<?php include_once 'footer.php' ?>