<?php include_once 'start-page.php' ?>
<title>Pepper - Form Components</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<!-- chosen -->
<link href="css/plugins/chosen/chosen.css" rel="stylesheet" type="text/css" />
<!-- bootstrap timepicker -->
<link href="css/plugins/bootstrap-timepicker/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<!-- bootstrap datepicker -->
<link href="css/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<!-- bootstrap select -->
<link href="css/plugins/bootstrap-select/bootstrap-select.css" rel="stylesheet" type="text/css" />
<!-- bootstrap daterange picker -->
<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<!-- inputlimiter -->
<link href="css/plugins/jquery-inputlimiter/jquery.inputlimiter.1.0.css" rel="stylesheet" type="text/css" />
<!-- bootstrap switch -->
<link href="css/plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
<div class="page-header">
	<h1>Form Components</h1>
</div>
<ul class="breadcrumb">
	<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="form_component.php">Forms</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="form_component.php">Form component</a> </li>
	<li class="pull-right"><a href="#" class="close">&times</a></li>
</ul>
<!-- Nav tabs -->
<ul class="nav nav-tabs nav-tab-border">
	<li class="active"><a href="#component1" data-toggle="tab">Date Picker & Time Picker</a></li>
	<li><a href="#component2" data-toggle="tab">Elements</a></li>
	<li><a href="#component3" data-toggle="tab">CheckBox & Radio</a></li>
	<li><a href="#component4" data-toggle="tab">iPhone Style Checkbox</a></li>
	<li><a href="#component5" data-toggle="tab">Dropdowns</a></li>
	<li><a href="#component6" data-toggle="tab">Spinner</a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content padding-top-10">
	<div class="tab-pane active" id="component1">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading panel-title">
						<h3 class="panel-title">Daterange Pickers</h3>
					</div>
					<div class="panel-body">
						<form method="post" class="form-horizontal form-striped">
							<div class="form-group">
								<label class="col-md-3 control-label">Reservation</label>
								<div class="col-md-9">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-calendar cursor-pointer"></i></span>
										<input type="text" class="form-control" name="reservation" id="reservation" value="03/18/2013 - 03/23/2013" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Reservation With Time</label>
								<div class="col-md-9">
										<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-calendar cursor-pointer"></i></span>
										<input type="text" class="form-control" name="reservation" id="reservationtime" value="08/01/2013 1:00 PM - 08/01/2013 1:30 PM"	/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Advanced Date Ranges</label>
								<div class="col-md-9">
								 	<button id="reportrange" class="btn btn-default">
										<i class="fa fa-calendar cursor-pointer margin-right-10"></i><span class="margin-right-10"></span><b class="caret"></b>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Date Pickers</h3>
					</div>
					<div class="panel-body">
						<form action="#" method="POST" class="form-horizontal">
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
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Time Pickers
						</h3>
					</div>
					<div class="panel-body">
						<form action="#" method="POST" class="form-horizontal">
						<div class="form-group">
							<label class="col-md-4 control-label">
								Default Time Picker
							</label>
							<div class="col-md-4">
								<div class="input-group bootstrap-timepicker input-medium">
									<input id="timepicker1" class="form-control" type="text" /><span class="input-group-addon"><i
										class="fa fa-clock-o"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">
								24hr Time Picker
							</label>
							<div class="col-md-4">
								<div class="input-group bootstrap-timepicker input-medium">
									<input id="timepicker2" class="form-control" type="text" /><span class="input-group-addon"><i
										class="fa fa-clock-o"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Date with time</label>
							<div class="col-md-4 input-medium no-padding-right">
								<input type="text" id="datepicker" placeholder="Select date" class="form-control"
									data-provide="datepicker" />
							</div>
							<div class="col-md-4 input-medium no-padding-left">
								<div class="input-group bootstrap-timepicker">
									<input id="timepicker3" class="form-control no-border-left" type="text" />
									<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="component2">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading panel-title">
								<h3 class="panel-title">Supported controls</h3>
							</div>
							<div class="panel-body">
								<span class="help-text">Most common form control, text-based input fields. Includes support for all HTML5 types: text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, and color.</span>
								<pre><code class="html">.form-control</code></pre>
								<input type="text" class="form-control" placeholder="Text input">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading panel-title">
								<h3 class="panel-title">Checkboxes and radios</h3>
							</div>
							<div class="panel-body">
								<div class="checkbox">
									<label>
									<input type="checkbox" value="">
									Option one is this and that&mdash;be sure to include why it's great
									</label>
								</div>
								<div class="radio">
									<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
									Option one is this and that&mdash;be sure to include why it's great
									</label>
								</div>
								<div class="radio">
									<label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									Option two can be something else and selecting it will deselect option one
									</label>
								</div>
								<h3 class="panel-title">Inline checkboxes</h3>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1"> 1
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2"> 2
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox3" value="option3"> 3
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading panel-title">
								<h3 class="panel-title">Control sizing</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<input class="form-control input-lg" type="text" placeholder=".input-lg">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Default input">
								</div>
								<div class="form-group">
									<input class="form-control input-sm" type="text" placeholder=".input-sm">
								</div>
								<div class="form-group">
									<select class="form-control input-lg">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
								<div class="form-group">
									<select class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
								<div class="form-group">
									<select class="form-control input-sm">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading panel-title">
								<h3 class="panel-title">Column sizing</h3>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-2 col-sm-2 col-md-2 col-md-2">
									<input type="text" class="form-control" placeholder=".col-xs-2 .col-sm-2 .col-md-2 .col-md-2">
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-md-3">
									<input type="text" class="form-control" placeholder=".col-xs-3 .col-sm-3 .col-md-3 .col-md-3">
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-md-4">
									<input type="text" class="form-control" placeholder=".col-xs-4 .col-sm-4 .col-md-4 .col-md-4">
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-md-3">
									<input type="text" class="form-control" placeholder=".col-xs-3 .col-sm-3 .col-md-3 .col-md-4">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading panel-title">
								<h3 class="panel-title">Help text</h3>
							</div>
							<div class="panel-body">
								<input type="text" class="form-control">
								<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading panel-title">
								<h3 class="panel-title">Textarea</h3>
							</div>
							<div class="panel-body">
								<form method="post" class="form-horizontal form-striped">
									<div class="form-group">
										<label class="col-md-3 control-label font-normal">
											Textarea</label>
										<div class="col-md-9">
											<textarea rows="5" cols="80" class="form-control col-xs-2"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											Textarea with Auto Resize</label>
										<div class="col-md-9">
											<textarea rows="5" cols="80" id="textareaAR" class="form-control"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											Textarea with Character Count</label>
										<div class="col-md-9">
											<textarea id="textareaCC" rows="5" cols="80" class="form-control"></textarea>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="component3">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default blue">
					<div class="panel-heading">
						<h3 class="panel-title">Checkbox</h3>
					</div>
					<div class="panel-body">
						<form action="#" method="POST" class="form-horizontal">
						<div class="form-group">
							<div class="col-md-3">
								<label class="checkbox metro-checkbox">
									<input type="checkbox" value="test" /><span class='text'>Checkbox Default</span>
								</label>
								<label class="checkbox metro-checkbox primary">
									<input type="checkbox" value="test" /><span class='text'>Checkbox Primary</span>
								</label>
								<label class="checkbox metro-checkbox success">
									<input type="checkbox" value="test" /><span class='text'>Checkbox Success</span>
								</label>
								<label class="checkbox metro-checkbox info">
									<input type="checkbox" value="test" /><span class='text'>Checkbox Info</span>
								</label>
								<label class="checkbox metro-checkbox warning">
									<input type="checkbox" value="test" /><span class='text'>Checkbox Warning</span>
								</label>
								<label class="checkbox metro-checkbox danger">
									<input type="checkbox" value="test" /><span class='text'>Checkbox Danger</span>
								</label>
								<label class="checkbox metro-checkbox">
									<input type="checkbox" value="test" disabled /><span class='text'>Checkbox Disabled</span>
								</label>
							</div> 
							<div class="col-md-3">
								<label class="radio metro-radio">
									<input type="radio" value="test" /><span class='text'>Radio Default</span>
								</label>
								<label class="radio metro-radio primary">
									<input type="radio" value="test" /><span class='text'>Radio Primary</span>
								</label>
								<label class="radio metro-radio success">
									<input type="radio" value="test" /><span class='text'>Radio Success</span>
								</label>
								<label class="radio metro-radio info">
									<input type="radio" value="test" /><span class='text'>Radio Info</span>
								</label>
								<label class="radio metro-radio warning">
									<input type="radio" value="test" /><span class='text'>Radio Warning</span>
								</label>
								<label class="radio metro-radio danger">
									<input type="radio" value="test" /><span class='text'>Radio Danger</span>
								</label>
								<label class="radio metro-radio">
									<input type="radio" value="test" disabled /><span class='text'>Radio Disabled</span>
								</label>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="component4">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Size</h3>
					</div>
					<div class="panel-body">
						<input type="checkbox" checked class="switch switch-large" />
						<input type="checkbox" checked class="switch" />
						<input type="checkbox" checked class="switch switch-small" />
						<input type="checkbox" checked class="switch switch-mini" />
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Colors</h3>
					</div>
					<div class="panel-body">
						<input type="checkbox" checked class="switch" data-on="primary" data-off="info" />
						<input type="checkbox" checked class="switch" data-on="info" data-off="success" />
						<input type="checkbox" checked class="switch" data-on="success" data-off="warning" />
						<input type="checkbox" checked class="switch" data-on="warning" data-off="danger" />
						<input type="checkbox" checked class="switch" data-on="danger" data-off="primary" />
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Disable Animation</h3>
					</div>
					<div class="panel-body">
						<input type="checkbox" checked class="switch" data-animated="false" />
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Disabled</h3>
					</div>
					<div class="panel-body">
						<input type="checkbox" checked disabled class="switch" data-animated="false" />
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Text</h3>
					</div>
					<div class="panel-body">
						<input type="checkbox" checked class="switch" data-on-label="Yes" data-off-label="No" />
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							HTML text</h3>
					</div>
					<div class="panel-body">
						<input type="checkbox" checked class="switch" data-on-label="<i class='icon-ok icon-white'></i>" data-off-label="<i class='icon-remove'></i>" />
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Event handler <small>javascript</small></h3>
					</div>
					<div class="panel-body">
						<input id="mySwitch" type="checkbox" checked class="switch" />
						<pre>$('#mySwitch').on('switch-change', function (e, data) {
							var $el = $(data.el),
							value = data.value;	
							console.log(e, $el, value);
						});</pre>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Toggle State <small>javascript</small></h3>
					</div>
					<div class="panel-body">
						<input type="checkbox" checked  id="toggle-state-switch" class="switch" />
						<br/>
						<br/>
						<div id="toggle-state-switch-button-on" class="btn btn-blue">ON!</div>
						<div id="toggle-state-switch-button" class="btn btn-blue">Toggle me!</div>
						<div id="toggle-state-switch-button-off" class="btn btn-blue">OFF!</div>
						<pre class="prettyprint linenums">$('#toggle-state-switch').bootstrapSwitch('toggleState');$('#toggle-state-switch').bootstrapSwitch('setState', false); // true || false
						</pre>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Destroy <small>javascript</small></h3>
					</div>
					<div class="panel-body">
						<input type="checkbox" checked id="destroy-switch" class="switch" />
						<br/>
						<br/>
						<button id="btn-destroy-switch" class="btn btn-danger">Destroy me!</button>
						<pre class="prettyprint linenums">$('#destroy-switch').bootstrapSwitch('destroy');</pre>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Create <small>javascript</small></h3>
					</div>
					<div class="panel-body">
						<input id="create-switch" type="checkbox" checked />
						<br/>
						<br/>
						<div id="btn-create" class="btn btn-default">Create</div>
						<pre class="prettyprint linenums">$('#create-switch').bootstrapSwitch();</pre>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Disabled <small>javascript</small></h3>
					</div>
					<div class="panel-body">
						<input type="checkbox" id="disable-switch" checked>
						<br/>
						<br/>
						<button id="btn-disable-is" class="btn btn-default">Is disabled?</button>
						<button id="btn-disable-toggle" class="btn btn-default">Toggle Disable</button>
						<button id="btn-disable-set" class="btn btn-default">Set Disable</button>
						<button id="btn-disable-remove" class="btn btn-default">Remove Disable</button>
						<br/>
						<br/>
						<pre class="prettyprint linenums">
							$('#disable-switch').bootstrapSwitch('isDisabled');
							$('#disable-switch').bootstrapSwitch('toggleDisabled'); $('#disable-switch').bootstrapSwitch('setDisabled',	true); // true || false $('#readonly-switch').bootstrapSwitch('isReadOnly'); $('#readonly-switch').bootstrapSwitch('toggleReadOnly');
							$('#readonly-switch').bootstrapSwitch('setReadOnly', true); // true || false
						</pre>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="component5">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Chosen</h3>
					</div>
					<div class="panel-body">
						<form action="#" method="POST" class="form-horizontal">
						<div class="form-group">
							<label class="col-md-3 control-label">
								Standard Select
							</label>
							<div class="col-md-9">
								<select id="country" name="country" data-placeholder="Choose a Country..." class="chosen-select">
									<option value=""></option>
									<option value="United States">United States</option>
									<option value="United Kingdom">United Kingdom</option>
									<option value="Afghanistan">Afghanistan</option>
									<option value="Aland Islands">Aland Islands</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="American Samoa">American Samoa</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Anguilla">Anguilla</option>
									<option value="Antarctica">Antarctica</option>
									<option value="Antigua and Barbuda">Antigua and Barbuda</option>
									<option value="Argentina">Argentina</option>
									<option value="Armenia">Armenia</option>
									<option value="Aruba">Aruba</option>
									<option value="Australia">Australia</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Belize">Belize</option>
									<option value="Benin">Benin</option>
									<option value="Bermuda">Bermuda</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
									<option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									<option value="Botswana">Botswana</option>
									<option value="Bouvet Island">Bouvet Island</option>
									<option value="Brazil">Brazil</option>
									<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
									<option value="Brunei Darussalam">Brunei Darussalam</option>
									<option value="Bulgaria">Bulgaria</option>
									<option value="Burkina Faso">Burkina Faso</option>
									<option value="Burundi">Burundi</option>
									<option value="Cambodia">Cambodia</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Canada">Canada</option>
									<option value="Cape Verde">Cape Verde</option>
									<option value="Cayman Islands">Cayman Islands</option>
									<option value="Central African Republic">Central African Republic</option>
									<option value="Chad">Chad</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Christmas Island">Christmas Island</option>
									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
									<option value="Colombia">Colombia</option>
									<option value="Comoros">Comoros</option>
									<option value="Congo">Congo</option>
									<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic
										of The</option>
									<option value="Cook Islands">Cook Islands</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Cote D'ivoire">Cote D'ivoire</option>
									<option value="Croatia">Croatia</option>
									<option value="Cuba">Cuba</option>
									<option value="Curacao">Curacao</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Denmark">Denmark</option>
									<option value="Djibouti">Djibouti</option>
									<option value="Dominica">Dominica</option>
									<option value="Dominican Republic">Dominican Republic</option>
									<option value="Ecuador">Ecuador</option>
									<option value="Egypt">Egypt</option>
									<option value="El Salvador">El Salvador</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option>
									<option value="Ethiopia">Ethiopia</option>
									<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
									<option value="Faroe Islands">Faroe Islands</option>
									<option value="Fiji">Fiji</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="French Guiana">French Guiana</option>
									<option value="French Polynesia">French Polynesia</option>
									<option value="French Southern Territories">French Southern Territories</option>
									<option value="Gabon">Gabon</option>
									<option value="Gambia">Gambia</option>
									<option value="Georgia">Georgia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Gibraltar">Gibraltar</option>
									<option value="Greece">Greece</option>
									<option value="Greenland">Greenland</option>
									<option value="Grenada">Grenada</option>
									<option value="Guadeloupe">Guadeloupe</option>
									<option value="Guam">Guam</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guernsey">Guernsey</option>
									<option value="Guinea">Guinea</option>
									<option value="Guinea-bissau">Guinea-bissau</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
									<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong">Hong Kong</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option>
									<option value="India">India</option>
									<option value="Indonesia">Indonesia</option>
									<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Isle of Man">Isle of Man</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jersey">Jersey</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic
										of</option>
									<option value="Korea, Republic of">Korea, Republic of</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>
									<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libya">Libya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Macao">Macao</option>
									<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav
										Republic of</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malawi">Malawi</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Maldives">Maldives</option>
									<option value="Mali">Mali</option>
									<option value="Malta">Malta</option>
									<option value="Marshall Islands">Marshall Islands</option>
									<option value="Martinique">Martinique</option>
									<option value="Mauritania">Mauritania</option>
									<option value="Mauritius">Mauritius</option>
									<option value="Mayotte">Mayotte</option>
									<option value="Mexico">Mexico</option>
									<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
									<option value="Moldova, Republic of">Moldova, Republic of</option>
									<option value="Monaco">Monaco</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montenegro">Montenegro</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar">Myanmar</option>
									<option value="Namibia">Namibia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands">Netherlands</option>
									<option value="New Caledonia">New Caledonia</option>
									<option value="New Zealand">New Zealand</option>
									<option value="Nicaragua">Nicaragua</option>
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Niue">Niue</option>
									<option value="Norfolk Island">Norfolk Island</option>
									<option value="Northern Mariana Islands">Northern Mariana Islands</option>
									<option value="Norway">Norway</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Palau">Palau</option>
									<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
									<option value="Panama">Panama</option>
									<option value="Papua New Guinea">Papua New Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Philippines">Philippines</option>
									<option value="Pitcairn">Pitcairn</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option>
									<option value="Puerto Rico">Puerto Rico</option>
									<option value="Qatar">Qatar</option>
									<option value="Reunion">Reunion</option>
									<option value="Romania">Romania</option>
									<option value="Russian Federation">Russian Federation</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Saint Barthelemy">Saint Barthelemy</option>
									<option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension
										and Tristan da Cunha</option>
									<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
									<option value="Saint Lucia">Saint Lucia</option>
									<option value="Saint Martin (French part)">Saint Martin (French part)</option>
									<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
									<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
									<option value="Samoa">Samoa</option>
									<option value="San Marino">San Marino</option>
									<option value="Sao Tome and Principe">Sao Tome and Principe</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Senegal">Senegal</option>
									<option value="Serbia">Serbia</option>
									<option value="Seychelles">Seychelles</option>
									<option value="Sierra Leone">Sierra Leone</option>
									<option value="Singapore">Singapore</option>
									<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
									<option value="Slovakia">Slovakia</option>
									<option value="Slovenia">Slovenia</option>
									<option value="Solomon Islands">Solomon Islands</option>
									<option value="Somalia">Somalia</option>
									<option value="South Africa">South Africa</option>
									<option value="South Georgia and The South Sandwich Islands">South Georgia and The South
										Sandwich Islands</option>
									<option value="South Sudan">South Sudan</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="Sudan">Sudan</option>
									<option value="Suriname">Suriname</option>
									<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Syrian Arab Republic">Syrian Arab Republic</option>
									<option value="Taiwan, Province of China">Taiwan, Province of China</option>
									<option value="Tajikistan">Tajikistan</option>
									<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
									<option value="Thailand">Thailand</option>
									<option value="Timor-leste">Timor-leste</option>
									<option value="Togo">Togo</option>
									<option value="Tokelau">Tokelau</option>
									<option value="Tonga">Tonga</option>
									<option value="Trinidad and Tobago">Trinidad and Tobago</option>
									<option value="Tunisia">Tunisia</option>
									<option value="Turkey">Turkey</option>
									<option value="Turkmenistan">Turkmenistan</option>
									<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
									<option value="Tuvalu">Tuvalu</option>
									<option value="Uganda">Uganda</option>
									<option value="Ukraine">Ukraine</option>
									<option value="United Arab Emirates">United Arab Emirates</option>
									<option value="United Kingdom">United Kingdom</option>
									<option value="United States">United States</option>
									<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
									<option value="Uruguay">Uruguay</option>
									<option value="Uzbekistan">Uzbekistan</option>
									<option value="Vanuatu">Vanuatu</option>
									<option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
									<option value="Viet Nam">Viet Nam</option>
									<option value="Virgin Islands, British">Virgin Islands, British</option>
									<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
									<option value="Wallis and Futuna">Wallis and Futuna</option>
									<option value="Western Sahara">Western Sahara</option>
									<option value="Yemen">Yemen</option>
									<option value="Zambia">Zambia</option>
									<option value="Zimbabwe">Zimbabwe</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">
								Multiple Select
							</label>
							<div class="col-md-9">
								<select data-placeholder="Choose a Country..." class="chosen-select"
									multiple>
									<option value=""></option>
									<option value="United States">United States</option>
									<option value="United Kingdom">United Kingdom</option>
									<option value="Afghanistan">Afghanistan</option>
									<option value="Aland Islands">Aland Islands</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="American Samoa">American Samoa</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Anguilla">Anguilla</option>
									<option value="Antarctica">Antarctica</option>
									<option value="Antigua and Barbuda">Antigua and Barbuda</option>
									<option value="Argentina">Argentina</option>
									<option value="Armenia">Armenia</option>
									<option value="Aruba">Aruba</option>
									<option value="Australia">Australia</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Belize">Belize</option>
									<option value="Benin">Benin</option>
									<option value="Bermuda">Bermuda</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
									<option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									<option value="Botswana">Botswana</option>
									<option value="Bouvet Island">Bouvet Island</option>
									<option value="Brazil">Brazil</option>
									<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
									<option value="Brunei Darussalam">Brunei Darussalam</option>
									<option value="Bulgaria">Bulgaria</option>
									<option value="Burkina Faso">Burkina Faso</option>
									<option value="Burundi">Burundi</option>
									<option value="Cambodia">Cambodia</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Canada">Canada</option>
									<option value="Cape Verde">Cape Verde</option>
									<option value="Cayman Islands">Cayman Islands</option>
									<option value="Central African Republic">Central African Republic</option>
									<option value="Chad">Chad</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Christmas Island">Christmas Island</option>
									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
									<option value="Colombia">Colombia</option>
									<option value="Comoros">Comoros</option>
									<option value="Congo">Congo</option>
									<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic
										of The</option>
									<option value="Cook Islands">Cook Islands</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Cote D'ivoire">Cote D'ivoire</option>
									<option value="Croatia">Croatia</option>
									<option value="Cuba">Cuba</option>
									<option value="Curacao">Curacao</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Denmark">Denmark</option>
									<option value="Djibouti">Djibouti</option>
									<option value="Dominica">Dominica</option>
									<option value="Dominican Republic">Dominican Republic</option>
									<option value="Ecuador">Ecuador</option>
									<option value="Egypt">Egypt</option>
									<option value="El Salvador">El Salvador</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option>
									<option value="Ethiopia">Ethiopia</option>
									<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
									<option value="Faroe Islands">Faroe Islands</option>
									<option value="Fiji">Fiji</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="French Guiana">French Guiana</option>
									<option value="French Polynesia">French Polynesia</option>
									<option value="French Southern Territories">French Southern Territories</option>
									<option value="Gabon">Gabon</option>
									<option value="Gambia">Gambia</option>
									<option value="Georgia">Georgia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Gibraltar">Gibraltar</option>
									<option value="Greece">Greece</option>
									<option value="Greenland">Greenland</option>
									<option value="Grenada">Grenada</option>
									<option value="Guadeloupe">Guadeloupe</option>
									<option value="Guam">Guam</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guernsey">Guernsey</option>
									<option value="Guinea">Guinea</option>
									<option value="Guinea-bissau">Guinea-bissau</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
									<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong">Hong Kong</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option>
									<option value="India">India</option>
									<option value="Indonesia">Indonesia</option>
									<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Isle of Man">Isle of Man</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jersey">Jersey</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic
										of</option>
									<option value="Korea, Republic of">Korea, Republic of</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>
									<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libya">Libya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Macao">Macao</option>
									<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav
										Republic of</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malawi">Malawi</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Maldives">Maldives</option>
									<option value="Mali">Mali</option>
									<option value="Malta">Malta</option>
									<option value="Marshall Islands">Marshall Islands</option>
									<option value="Martinique">Martinique</option>
									<option value="Mauritania">Mauritania</option>
									<option value="Mauritius">Mauritius</option>
									<option value="Mayotte">Mayotte</option>
									<option value="Mexico">Mexico</option>
									<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
									<option value="Moldova, Republic of">Moldova, Republic of</option>
									<option value="Monaco">Monaco</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montenegro">Montenegro</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar">Myanmar</option>
									<option value="Namibia">Namibia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands">Netherlands</option>
									<option value="New Caledonia">New Caledonia</option>
									<option value="New Zealand">New Zealand</option>
									<option value="Nicaragua">Nicaragua</option>
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Niue">Niue</option>
									<option value="Norfolk Island">Norfolk Island</option>
									<option value="Northern Mariana Islands">Northern Mariana Islands</option>
									<option value="Norway">Norway</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Palau">Palau</option>
									<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
									<option value="Panama">Panama</option>
									<option value="Papua New Guinea">Papua New Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Philippines">Philippines</option>
									<option value="Pitcairn">Pitcairn</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option>
									<option value="Puerto Rico">Puerto Rico</option>
									<option value="Qatar">Qatar</option>
									<option value="Reunion">Reunion</option>
									<option value="Romania">Romania</option>
									<option value="Russian Federation">Russian Federation</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Saint Barthelemy">Saint Barthelemy</option>
									<option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension
										and Tristan da Cunha</option>
									<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
									<option value="Saint Lucia">Saint Lucia</option>
									<option value="Saint Martin (French part)">Saint Martin (French part)</option>
									<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
									<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
									<option value="Samoa">Samoa</option>
									<option value="San Marino">San Marino</option>
									<option value="Sao Tome and Principe">Sao Tome and Principe</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Senegal">Senegal</option>
									<option value="Serbia">Serbia</option>
									<option value="Seychelles">Seychelles</option>
									<option value="Sierra Leone">Sierra Leone</option>
									<option value="Singapore">Singapore</option>
									<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
									<option value="Slovakia">Slovakia</option>
									<option value="Slovenia">Slovenia</option>
									<option value="Solomon Islands">Solomon Islands</option>
									<option value="Somalia">Somalia</option>
									<option value="South Africa">South Africa</option>
									<option value="South Georgia and The South Sandwich Islands">South Georgia and The South
										Sandwich Islands</option>
									<option value="South Sudan">South Sudan</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="Sudan">Sudan</option>
									<option value="Suriname">Suriname</option>
									<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Syrian Arab Republic">Syrian Arab Republic</option>
									<option value="Taiwan, Province of China">Taiwan, Province of China</option>
									<option value="Tajikistan">Tajikistan</option>
									<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
									<option value="Thailand">Thailand</option>
									<option value="Timor-leste">Timor-leste</option>
									<option value="Togo">Togo</option>
									<option value="Tokelau">Tokelau</option>
									<option value="Tonga">Tonga</option>
									<option value="Trinidad and Tobago">Trinidad and Tobago</option>
									<option value="Tunisia">Tunisia</option>
									<option value="Turkey">Turkey</option>
									<option value="Turkmenistan">Turkmenistan</option>
									<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
									<option value="Tuvalu">Tuvalu</option>
									<option value="Uganda">Uganda</option>
									<option value="Ukraine">Ukraine</option>
									<option value="United Arab Emirates">United Arab Emirates</option>
									<option value="United Kingdom">United Kingdom</option>
									<option value="United States">United States</option>
									<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
									<option value="Uruguay">Uruguay</option>
									<option value="Uzbekistan">Uzbekistan</option>
									<option value="Vanuatu">Vanuatu</option>
									<option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
									<option value="Viet Nam">Viet Nam</option>
									<option value="Virgin Islands, British">Virgin Islands, British</option>
									<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
									<option value="Wallis and Futuna">Wallis and Futuna</option>
									<option value="Western Sahara">Western Sahara</option>
									<option value="Yemen">Yemen</option>
									<option value="Zambia">Zambia</option>
									<option value="Zimbabwe">Zimbabwe</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">
								Single Select with Groups
							</label>
							<div class="col-md-9">
								<select data-placeholder="Your Favorite Football Team" class="chosen-select">
									<option value=""></option>
									<optgroup label="NFC EAST">
										<option>Dallas Cowboys</option>
										<option>New York Giants</option>
										<option>Philadelphia Eagles</option>
										<option>Washington Redskins</option>
									</optgroup>
									<optgroup label="NFC NORTH">
										<option>Chicago Bears</option>
										<option>Detroit Lions</option>
										<option>Green Bay Packers</option>
										<option>Minnesota Vikings</option>
									</optgroup>
									<optgroup label="NFC SOUTH">
										<option>Atlanta Falcons</option>
										<option>Carolina Panthers</option>
										<option>New Orleans Saints</option>
										<option>Tampa Bay Buccaneers</option>
									</optgroup>
									<optgroup label="NFC WEST">
										<option>Arizona Cardinals</option>
										<option>St. Louis Rams</option>
										<option>San Francisco 49ers</option>
										<option>Seattle Seahawks</option>
									</optgroup>
									<optgroup label="AFC EAST">
										<option>Buffalo Bills</option>
										<option>Miami Dolphins</option>
										<option>New England Patriots</option>
										<option>New York Jets</option>
									</optgroup>
									<optgroup label="AFC NORTH">
										<option>Baltimore Ravens</option>
										<option>Cincinnati Bengals</option>
										<option>Cleveland Browns</option>
										<option>Pittsburgh Steelers</option>
									</optgroup>
									<optgroup label="AFC SOUTH">
										<option>Houston Texans</option>
										<option>Indianapolis Colts</option>
										<option>Jacksonville Jaguars</option>
										<option>Tennessee Titans</option>
									</optgroup>
									<optgroup label="AFC WEST">
										<option>Denver Broncos</option>
										<option>Kansas City Chiefs</option>
										<option>Oakland Raiders</option>
										<option>San Diego Chargers</option>
									</optgroup>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">
								Multiple Select with Groups
							</label>
							<div class="col-md-9">
								<select data-placeholder="Your Favorite Football Teams" class="chosen-select"	multiple>
									<option value=""></option>
									<optgroup label="NFC EAST">
										<option>Dallas Cowboys</option>
										<option>New York Giants</option>
										<option>Philadelphia Eagles</option>
										<option>Washington Redskins</option>
									</optgroup>
									<optgroup label="NFC NORTH">
										<option>Chicago Bears</option>
										<option>Detroit Lions</option>
										<option>Green Bay Packers</option>
										<option>Minnesota Vikings</option>
									</optgroup>
									<optgroup label="NFC SOUTH">
										<option>Atlanta Falcons</option>
										<option>Carolina Panthers</option>
										<option>New Orleans Saints</option>
										<option>Tampa Bay Buccaneers</option>
									</optgroup>
									<optgroup label="NFC WEST">
										<option>Arizona Cardinals</option>
										<option>St. Louis Rams</option>
										<option>San Francisco 49ers</option>
										<option>Seattle Seahawks</option>
									</optgroup>
									<optgroup label="AFC EAST">
										<option>Buffalo Bills</option>
										<option>Miami Dolphins</option>
										<option>New England Patriots</option>
										<option>New York Jets</option>
									</optgroup>
									<optgroup label="AFC NORTH">
										<option>Baltimore Ravens</option>
										<option>Cincinnati Bengals</option>
										<option>Cleveland Browns</option>
										<option>Pittsburgh Steelers</option>
									</optgroup>
									<optgroup label="AFC SOUTH">
										<option>Houston Texans</option>
										<option>Indianapolis Colts</option>
										<option>Jacksonville Jaguars</option>
										<option>Tennessee Titans</option>
									</optgroup>
									<optgroup label="AFC WEST">
										<option>Denver Broncos</option>
										<option>Kansas City Chiefs</option>
										<option>Oakland Raiders</option>
										<option>San Diego Chargers</option>
									</optgroup>
								</select>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default blue">
					<div class="panel-heading">
						<h3 class="panel-title">Bootstrap Dropdown</h3>
					</div>
					<div class="panel-body no-padding">
						<form action="#" method="POST" class="form-horizontal form-striped form-row-separated">
							<div class="form-group">
								<label class="col-md-3 control-label">
									Standard Select
								</label>
								<div class="col-md-3">
								 	<select id="select1" class="selectpicker form-control">
										<option>Mustard</option>
										<option>Ketchup</option>
										<option>Relish</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">
									Option Groups
								</label>
								<div class="col-md-3">
							 			<select class="selectpicker form-control">
										<optgroup label="Picnic">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
									  	</optgroup>
								    	<optgroup label="Camping">
											<option>Tent</option>
											<option>Flashlight</option>
											<option>Toilet Paper</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">
								 	Multiple Select
								</label>
								<div class="col-md-6">
							 		<select class="selectpicker form-control" multiple>
										<option>Mustard</option>
										<option>Ketchup</option>
										<option>Relish</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">
								 	Colors
								</label>
								<div class="col-md-3">
							 		<select class="selectpicker form-control" data-style="btn-blue">
										<option>Mustard</option>
										<option>Ketchup</option>
										<option>Relish</option>
									</select>
								</div>
								<div class="col-md-3">
							 		<select class="selectpicker form-control" data-style="btn-danger">
										<option>Mustard</option>
										<option>Ketchup</option>
										<option>Relish</option>
									</select>
								</div>
								<div class="col-md-3">
							 		<select class="selectpicker form-control" data-style="btn-success">
										<option>Mustard</option>
										<option>Ketchup</option>
										<option>Relish</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">
									Search
								</label>
								<div class="col-md-3">
								 	<select class="selectpicker form-control" data-live-search="true">
										<option>Mustard</option>
										<option>Ketchup</option>
										<option>Relish</option>
									</select>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="component6">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Spinner</h3>
					</div>
					<div class="panel-body">
						<form action="#" method="POST" class="form-horizontal">
							<div class="form-group">
								<label class="col-md-2 control-label">Spinner 1</label>
								<div class="col-md-10">
									<input id="spinner1" type="text" value="0" name="spinner1" class="col-md-8 form-control" />
									<span class="help-text margin-top-10 pull-left">basic example</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Spinner 2</label>
								<div class="col-md-10">
									<input id="spinner2" type="text" value="0" name="spinner2" class="col-md-8 form-control no-border-right" />
									<span class="help-text margin-top-10 pull-left">example with decimal steps</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Spinner 3</label>
								<div class="col-md-10">
									<input id="spinner3" type="text" value="0" name="spinner3" class="col-md-8 form-control no-border-left" />
									<span class="help-text margin-top-10 pull-left">example with currency steps</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Spinner 4</label>
								<div class="col-md-10">
									<input id="spinner4" type="text" value="0" name="spinner4" class="col-md-8 form-control" readonly />
									<span class="help-text margin-top-10 pull-left">basic example with read only</span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<!-- chosen -->
<script src="js/plugins/chosen/chosen.jquery.min.js" type="text/javascript"></script>
<!-- bootstrap timepicker -->
<script src="js/plugins/bs-timepicker/bootstrap-timepicker.js" type="text/javascript"></script>
<!-- bootstrap datepicker -->
<script src="js/plugins/bs-datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- bootstrap select -->
<script src="js/plugins/bs-select/bootstrap-select.min.js" type="text/javascript"></script>
<!-- inputlimiter -->
<script src="js/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js" type="text/javascript"></script>
<!-- autogrow textarea -->
<script src="js/plugins/autogrowtextarea/jquery.autogrowtextarea.min.js" type="text/javascript"></script>
<!-- bootstrap switch -->
<script src="js/plugins/bs-switch/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- bootstrap spinner -->
<script src="js/plugins/bs-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<!-- bootstrap daterange picker -->
<script src="js/plugins/bs-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="js/plugins/bs-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<?php include_once 'applicationscript.php' ?>
<script>
	$(function(){
		$('#timepicker1').timepicker();
		$('#timepicker3').timepicker();
		$('#timepicker2').timepicker({
			minuteStep: 1,
			showSeconds: true,
			showMeridian: false
		});
		$(".date-picker").datepicker({});
	 
		// Make it more personal
		$('#textareaCC').inputlimiter({
			limit: 50,
			remText: 'You only have %n character%s remaining...',
			remFullText: 'Stop typing! You\'re not allowed any more characters!',
			limitText: 'You\'re allowed to input %n character%s into this field.'
		});
		// auto grow text area
		$('#textareaAR').autoGrow();
		
		// iphone style checkbox
		$('#mySwitch').on('switch-change',function(e,data) {
			var $el=$(data.el)
	            ,value=data.value;
			alert(value);
		});

		$('#toggle-state-switch-button').on('click',function() {
			$('#toggle-state-switch').bootstrapSwitch('toggleState');
		});

		$('#toggle-state-switch-button-on').on('click',function() {
			$('#toggle-state-switch').bootstrapSwitch('setState',true);
		});

		$('#toggle-state-switch-button-off').on('click',function() {
			$('#toggle-state-switch').bootstrapSwitch('setState',false);
		});

		$('#btn-destroy-switch').on('click',function() {
			$('#destroy-switch').bootstrapSwitch('destroy');
			$(this).remove();
		});

		$('#btn-create').on('click',function() {
			$('#create-switch').bootstrapSwitch();
			$(this).remove();
		});

		 // activation
		  var $disable = $('#disable-switch');
		  $disable.bootstrapSwitch();
		  $('#btn-disable-is').on('click', function () {
		    alert($disable.bootstrapSwitch('isDisabled'));
		  });
		  $('#btn-disable-toggle').on('click', function () {
		    $disable.bootstrapSwitch('toggleDisabled');
		  });
		  $('#btn-disable-set').on('click', function () {
		    $disable.bootstrapSwitch('setDisabled', true);
		  });
		  $('#btn-disable-remove').on('click', function () {
		    $disable.bootstrapSwitch('setDisabled', false);
		  });

		$("#spinner1").TouchSpin();
		$("#spinner2").TouchSpin({
			min: 0,
	        max: 100,
	        step: 0.1,
	        decimals: 2,
	        boostat: 5,
	        maxboostedstep: 10,
	        postfix: '%',
	        buttondown_class: 'btn btn-blue',
	        buttonup_class: 'btn btn-success'
	    });
		$("#spinner3").TouchSpin({
	        min: -1000000000,
	        max: 1000000000,
	        stepinterval: 50,
	        maxboostedstep: 10000000,
	        prefix: '$',
	        buttondown_class: 'btn btn-blue',
	        buttonup_class: 'btn btn-success'
	    });
		$("#spinner4").TouchSpin();

		$('#reservation').daterangepicker();
		$('#reservationtime').daterangepicker({
			timePicker: true,
			timePickerIncrement: 30,
			format: 'MM/DD/YYYY h:mm A'
		});
		$('#reportrange').daterangepicker(
		{
	        startDate: moment().subtract('days',29),
	        endDate: moment(),
	        minDate: '01/01/2012',
	        maxDate: '12/31/2014',
	        dateLimit: { days: 60 },
	        showDropdowns: true,
	        showWeekNumbers: true,
	        timePicker: false,
	        timePickerIncrement: 1,
	        timePicker12Hour: true,
	        ranges: {
	        'Today': [moment(),moment()],
	        'Yesterday': [moment().subtract('days',1),moment().subtract('days',1)],
	        'Last 7 Days': [moment().subtract('days',6),moment()],
	        'Last 30 Days': [moment().subtract('days',29),moment()],
	        'This Month': [moment().startOf('month'),moment().endOf('month')],
	        'Last Month': [moment().subtract('month',1).startOf('month'),moment().subtract('month',1).endOf('month')]
	        },
	        opens: 'right',
	        buttonClasses: ['btn btn-default'],
	        applyClass: 'btn-small btn-blue',
	        cancelClass: 'btn-small',
	        format: 'MM/DD/YYYY',
	        separator: ' to ',
	        locale: {
	        applyLabel: 'Submit',
	        fromLabel: 'From',
	        toLabel: 'To',
	        customRangeLabel: 'Custom Range',
	        daysOfWeek: ['Su','Mo','Tu','We','Th','Fr','Sa'],
	        monthNames: ['January','February','March','April','May','June','July','August','September','October','November','December'],
	        firstDay: 1
	        }
	        },
        function(start,end) {
	        console.log("Callback has been called!");
	        $('#reportrange span').html(start.format('MMMM D, YYYY')+' - '+end.format('MMMM D, YYYY'));
        }
	    );
		//Set the initial state of the picker label
		$('#reportrange span').html(moment().subtract('days',29).format('MMMM D, YYYY')+' - '+moment().format('MMMM D, YYYY'));
	});
</script>
<?php include_once 'end-page.php' ?>
