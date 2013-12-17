<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
			<div class="page-header">
				<h1>
					Elements</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="form_basic.php">Forms</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="elements.php">Elements</a></li>
				<li class="pull-right"><a href="#" data-dismiss='breadcrumb' class="close">&times</a></li>
			</ul>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading panel-title">
							<h3 class="panel-title"><i class="fa fa-edit"></i>Supported controls</h3>
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
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading panel-title">
							<h3 class="panel-title"><i class="fa fa-edit"></i>Checkboxes and radios</h3>
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
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading panel-title">
							<h3 class="panel-title"><i class="fa fa-edit"></i>Validation states</h3>
						</div>
						<div class="panel-body">
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess">Input with success</label>
							  <input type="text" class="form-control" id="inputSuccess">
							</div>
							<div class="form-group has-warning">
							  <label class="control-label" for="inputWarning">Input with warning</label>
							  <input type="text" class="form-control" id="inputWarning">
							</div>
							<div class="form-group has-error">
							  <label class="control-label" for="inputError">Input with error</label>
							  <input type="text" class="form-control" id="inputError">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading panel-title">
							<h3 class="panel-title"><i class="fa fa-edit"></i>Control sizing</h3>
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
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading panel-title">
							<h3 class="panel-title"><i class="fa fa-edit"></i>Column sizing</h3>
						</div>
						<div class="panel-body">
							<div class="row">
							  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							    <input type="text" class="form-control" placeholder=".col-xs-2 .col-sm-2 .col-md-2 .col-lg-2">
							  </div>
							  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							    <input type="text" class="form-control" placeholder=".col-xs-3 .col-sm-3 .col-md-3 .col-lg-3">
							  </div>
							  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							    <input type="text" class="form-control" placeholder=".col-xs-4 .col-sm-4 .col-md-4 .col-lg-4">
							  </div>
							   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							    <input type="text" class="form-control" placeholder=".col-xs-3 .col-sm-3 .col-md-3 .col-lg-4">
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading panel-title">
							<h3 class="panel-title"><i class="fa fa-edit"></i>Help text</h3>
						</div>
						<div class="panel-body">
						    <input type="text" class="form-control">
						    <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading panel-title">
							<h3 class="panel-title"><i class="fa fa-edit"></i>Textarea</h3>
						</div>
						<div class="panel-body no-padding">
							<form method="post" class="form-horizontal form-striped">
								<div class="form-group">
									<label class="col-lg-2 control-label font-normal">
										Textarea</label>
									<div class="col-lg-10">
										<textarea rows="5" cols="80" class="form-control col-xs-2"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">
										Textarea with Auto Resize</label>
									<div class="col-lg-10">
										<textarea rows="5" cols="80" id="textareaAR" class="form-control"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">
										Textarea with Character Count</label>
									<div class="col-lg-10">
										<textarea id="textareaCC" rows="5" cols="80" class="form-control"></textarea>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
<?php include_once 'endcontainer.php' ?>
<?php include_once 'script.php' ?>
<script type="text/javascript">
	$(function() {
		// Make it more personal
		$('#textareaCC').inputlimiter({
			limit: 50,
			remText: 'You only have %n character%s remaining...',
			remFullText: 'Stop typing! You\'re not allowed any more characters!',
			limitText: 'You\'re allowed to input %n character%s into this field.'
		});
		// auto grow text area
		$('#textareaAR').autoGrow();

		$(".pick-a-color").pickAColor({
			showSpectrum: false,
			showSavedColors: true,
			saveColorsPerElement: false,
			fadeMenuToggle: true,
			showAdvanced: true,
			showHexInput: true,
			showBasicColors: true
		});
	});
</script>
<?php include_once 'footer.php' ?>
