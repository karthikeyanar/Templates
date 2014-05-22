<?php include_once 'start-page.php' ?>
<title>Pepper - Date Picker</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<!-- bootstrap datepicker -->
<link href="css/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
<div class="page-header">
	<h1>Date Picker</h1>
</div>
<ul class="breadcrumb">
	<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="form_component.php">Plugins</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="form_component.php">Date Picker</a> </li>
	<li class="pull-right"><a href="#" class="close">&times</a></li>
</ul>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading panel-title">
				<h3 class="panel-title">Date Pickers</h3>
			</div>
			<div class="panel-body">
				<form method="post" class="form-horizontal form-striped" onsubmit="return false">
					  <div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Default</label>
							<div class="col-md-4">
								<input type="text" id="Text1" placeholder="Select date" class="form-control input-medium"
									data-provide="datepicker" />
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Auto Close</label>
							<div class="col-md-4">
								<input type="text" id="Text2" placeholder="Select date" class="form-control input-medium"
									data-provide="datepicker" data-date-autoclose="true" />
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Calendar Weeks</label>
							<div class="col-md-4">
								<input type="text" id="Text3" placeholder="Select date" class="form-control input-medium"
									data-provide="datepicker" data-date-calendar-weeks="true" />
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Disable Past Dates</label>
							<div class="col-md-4">
								<input type="text" id="Text4" placeholder="Select date" class="form-control input-medium"
									data-provide="datepicker" data-date-start-date="+0d" />
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Today Highlight</label>
							<div class="col-md-4">
								<input type="text" id="Text5" placeholder="Select date" class="form-control input-medium"
									data-provide="datepicker" data-date-today-highlight="true" />
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Months Only</label>
							<div class="col-md-4">
								<input type="text" id="Text6" placeholder="Select date" class="form-control input-medium"
									data-provide="datepicker" data-date-format="mm/yyyy" data-date-min-view-mode="1" />
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Year Only</label>
							<div class="col-md-4">
								<input type="text" id="Text7" placeholder="Select date" class="form-control input-medium"
									data-provide="datepicker" data-date-format="yyyy" data-date-min-view-mode="2" />
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Start View - Year</label>
							<div class="col-md-4">
								<input type="text" id="Text8" placeholder="Select date" class="form-control input-medium"
									data-provide="datepicker" data-date-start-view="1" />
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Start View - Decade</label>
							<div class="col-md-7">
								<input type="text" id="Text9" placeholder="Select date" class="form-control input-medium"
									data-provide="datepicker" data-date-start-view="2" />
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Today Button</label>
							<div class="col-md-7">
								<input type="text" id="Text10" placeholder="Select date" class="form-control input-medium"
									data-provide="datepicker" data-date-today-btn="true" />
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Week End Disable</label>
							<div class="col-md-7">
								<input type="text" id="Text11" placeholder="Select date" class="form-control input-medium"
									data-provide="datepicker" data-date-days-of-week-disabled="0,6" />
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Component</label>
							<div class="col-md-8 input-xlarge">
								<div class="input-group input-daterange" data-provide="datepicker">
									<input type="text" class="form-control" name="start" placeholder="Start" />
									<span class="input-group-addon no-border-left no-border-right">to</span>
									<input type="text" class="form-control" name="end" placeholder="End" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Component</label>
							<div class="col-md-7 input-large">
								<div id="component" class="input-group date" data-provide="datepicker">
									<input type="text" class="form-control" placeholder="Select date" />
									<span class="input-group-addon"><i class="fa fa-calendar cursor-pointer"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Component</label>
							<div class="col-md-7 input-large">
								<div id="component" class="input-group">
									<input type="text" class="form-control" placeholder="Select date" data-provide="datepicker" />
									<span class="input-group-addon no-border-left" data-provide="datepicker-reset"><i class="fa fa-times cursor-pointer"></i></span>
									<span class="input-group-addon" data-provide="datepicker-show"><i class="fa fa-calendar cursor-pointer"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Calendar</label>
							<div class="col-md-8">
								<div class="date-picker" data-date-format="mm/dd/yyyy">
								</div>
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<!-- bootstrap datepicker -->
<script src="js/plugins/bootstrap-datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<?php include_once 'applicationscript.php' ?>
<script>
	$(function(){
		$(".date-picker").datepicker({});
	});
</script>
<?php include_once 'end-page.php' ?>