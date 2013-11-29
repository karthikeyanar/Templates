<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
			<div class="page-header">
				<h1>Form components</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="form_component.php">Forms</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="form_component.php">Form component</a> </li>
				<li class="pull-right"><a href="#" class="close">&times</a></li>
			</ul>
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-edit"></i>Date Pickers</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST" class="form-horizontal">
								<div class="form-group">
									<label for="textfield" class="col-lg-4 control-label">Default</label>
									<div class="col-lg-4">
										<input type="text" id="datepicker" placeholder="Select date" class="form-control input-small" data-provide="datepicker" />
									</div>
								</div>
								<div class="form-group">
									<label for="textfield" class="col-lg-4 control-label">Auto Close</label>
									<div class="col-lg-4">
										<input type="text" id="datepicker" placeholder="Select date" class="form-control input-small" data-provide="datepicker" data-auto-close="true" />
									</div>
								</div>
								<div class="form-group">
									<label for="textfield" class="col-lg-4 control-label">Calendar Weeks</label>
									<div class="col-lg-4">
										<input type="text" id="datepicker" placeholder="Select date" class="form-control input-small" data-provide="datepicker" data-calendar-weeks="true" />
									</div>
								</div>
								<div class="form-group">
									<label for="textfield" class="col-lg-4 control-label">Today Highlight</label>
									<div class="col-lg-4">
										<input type="text" id="datepicker" placeholder="Select date" class="form-control input-small" data-provide="datepicker" data-today-highlight="true" />
									</div>
								</div>
								<div class="form-group">
									<label for="textfield" class="col-lg-4 control-label">Component</label>
									<div class="col-lg-6 input-xlarge">
										<div class="input-group input-daterange" data-provide="datepicker">
											<input type="text" class="form-control" name="start" placeholder="Start" />
											<span class="input-group-addon no-border-left no-border-right">to</span>
											<input type="text" class="form-control" name="end" placeholder="End" />
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="textfield" class="col-lg-4 control-label">Component</label>
									<div class="col-lg-4 input-large">
										<div id="component" class="input-group date" data-provide="datepicker">
											<input type="text" class="form-control" placeholder="Select date" /><span class="input-group-addon"><i class="fa fa-calendar cursor-pointer"></i></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="textfield" class="col-lg-4 control-label">Calendar</label>
									<div class="col-lg-8">
										<div data-provide="datepicker"></div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								<i class="fa fa-edit"></i>Time Pickers
							</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST" class="form-horizontal">
								<div class="form-group">
									<label class="col-lg-4 control-label">
										Default Time Picker
									</label>
									<div class="col-lg-4">
										<div class="input-group bootstrap-timepicker input-medium">
											<input id="timepicker1" class="form-control" type="text"/><span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">
										24hr Time Picker
									</label>
									<div class="col-lg-4">
										<div class="input-group bootstrap-timepicker input-medium">
											<input id="timepicker2" class="form-control" type="text"/><span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								<i class="fa fa-edit"></i>Date Picker With Time Picker
							</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST" class="form-horizontal">
								<div class="form-group">
									<label for="textfield" class="col-lg-4 control-label">Default</label>
									<div class="col-lg-4 input-medium no-padding-right">
										<input type="text" id="datepicker" placeholder="Select date" class="form-control" data-provide="datepicker" />
									</div>
									<div class="col-lg-4 input-medium no-padding-left">
										<div class="input-group bootstrap-timepicker">
											<input id="timepicker3" class="form-control no-border-left" type="text"/>
											<span class="input-group-addon">
												<i class="fa fa-clock-o"></i>
											</span>
										</div>
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
	$(function(){
		$('#timepicker1').timepicker();
		$('#timepicker3').timepicker();
		$('#timepicker2').timepicker({
			minuteStep: 1,
			showSeconds: true,
			showMeridian: false
		});
	});
</script>
<?php include_once 'footer.php' ?>