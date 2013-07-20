<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	<?php include_once 'sidebar.php' ?>
	<!-- mainbar -->
	<div id="mainbar">
		<div class="container-fluid">
			<div class="page-header">
				<h1>
					Elements</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
				<li><a href="form_basic.php">Forms</a> <i class="icon-angle-right"></i></li>
				<li><a href="elements.php">Elements</a></li>
				<li class="pull-right"><a href="#" class="close">&times</a></li>
			</ul>
			<div class="row-fluid">
				<div class="span12">
					<div class="box box-bordered">
						<div class="box-title">
							<h4>
								<i class="icon-edit"></i>Elements</h4>
						</div>
						<div class="box-content no-padding">
							<form method="post" class="form-horizontal form-bordered form-striped">
							<div class="control-group">
								<label class="control-label">
									Small Input</label>
								<div class="controls">
									<input type="text" placeholder=".input-small" class="input-small" name="input1" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Medium Input</label>
								<div class="controls">
									<input type="text" placeholder=".input-medium" class="input-medium" name="input1" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Large Input</label>
								<div class="controls">
									<input type="text" placeholder=".input-large" class="input-large" name="input1" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									X Large Input</label>
								<div class="controls">
									<input type="text" placeholder=".input-xlarge" class="input-xlarge" name="input1" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									XX Large Input</label>
								<div class="controls">
									<input type="text" placeholder=".input-xxlarge" class="input-xlarge" name="input1" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Input Block Level</label>
								<div class="controls">
									<input type="text" placeholder=".input-block-level" class="input-block-level" name="input1" />
								</div>
							</div>
							<div class="control-group warning">
								<label class="control-label" for="inputWarning">
									Input with warning</label>
								<div class="controls">
									<input type="text" placeholder=".span4" id="inputWarning" class="span4" />
									<span class="help-inline">Something may have gone wrong</span>
								</div>
							</div>
							<div class="control-group error">
								<label class="control-label" for="inputError">
									Input with error</label>
								<div class="controls">
									<input type="text" placeholder=".span4" id="inputError" class="span4" />
									<span class="help-inline">Please correct the error</span>
								</div>
							</div>
							<div class="control-group info">
								<label class="control-label" for="inputInfo">
									Input with info</label>
								<div class="controls">
									<input type="text" placeholder=".span4" id="inputInfo" class="span4" />
									<span class="help-inline">Username is taken</span>
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">
									Input with success</label>
								<div class="controls">
									<input type="text" placeholder=".span4" id="inputSuccess" class="span4" />
									<span class="help-inline">Woohoo!</span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Textarea</label>
								<div class="controls">
									<textarea rows="5" cols="80" class="input-xxlarge"></textarea>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Textarea with Auto Resize</label>
								<div class="controls">
									<textarea rows="5" cols="80" id="textareaAR" class="input-xxlarge"></textarea>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Textarea with Character Count</label>
								<div class="controls">
									<textarea id="textareaCC" rows="5" cols="80" class="input-xxlarge"></textarea>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Select</label>
								<div class="controls">
									<select class="uniformselect" name="select">
										<option value="">Choose One</option>
										<option value="">Selection One</option>
										<option value="">Selection Two</option>
										<option value="">Selection Three</option>
										<option value="">Selection Four</option>
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Disabled Select</label>
								<div class="controls">
									<select class="uniformselect" disabled="disabled" name="select">
										<option value="">Choose One</option>
										<option value="">Selection One</option>
										<option value="">Selection Two</option>
										<option value="">Selection Three</option>
										<option value="">Selection Four</option>
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Multiple Select</label>
								<div class="controls">
									<select size="5" class="span4" multiple="multiple" name="select2">
										<option value="">Selection One</option>
										<option value="">Selection Two</option>
										<option value="">Selection Three</option>
										<option value="">Selection Four</option>
										<option value="">Selection Five</option>
										<option value="">Selection Six</option>
										<option value="">Selection Seven</option>
										<option value="">Selection Eight</option>
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Prepend input</label>
								<div class="controls">
									<div class="input-prepend">
										<span class="add-on">@</span>
										<input id="prependedInput" type="text" placeholder="Username">
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Append input</label>
								<div class="controls">
									<div class="input-append">
										<input id="appendedInput" type="text">
										<span class="add-on">.00</span>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Combined input</label>
								<div class="controls">
									<div class="input-prepend input-append">
										<span class="add-on">$</span>
										<input id="appendedPrependedInput" type="text">
										<span class="add-on">.00</span>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Buttons instead of text</label>
								<div class="controls">
									<div class="input-append">
										<input id="appendedInputButton" type="text">
										<button class="btn" type="button">
											Go!</button>
									</div>
									<div class="clearfix">
										&nbsp;</div>
									<div class="input-append">
										<input id="appendedInputButtons" type="text">
										<button class="btn" type="button">
											Search</button>
										<button class="btn" type="button">
											Options</button>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Button dropdowns</label>
								<div class="controls">
									<div class="input-append">
										<input id="appendedDropdownButton" type="text">
										<div class="btn-group">
											<button class="btn dropdown-toggle" data-toggle="dropdown">
												Action <span class="caret"></span>
											</button>
											<ul class="dropdown-menu pull-right">
												<li><a href="#">Action</a></li>
												<li><a href="#">Action2</a></li>
												<li><a href="#">Action3</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix">
										&nbsp;</div>
									<div class="input-prepend">
										<div class="btn-group">
											<button class="btn dropdown-toggle" data-toggle="dropdown">
												Action <span class="caret"></span>
											</button>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Action2</a></li>
												<li><a href="#">Action3</a></li>
											</ul>
										</div>
										<input id="prependDropdownButton" type="text">
									</div>
									<div class="clearfix">
										&nbsp;</div>
									<div class="input-append input-prepend">
										<div class="btn-group">
											<button class="btn dropdown-toggle" data-toggle="dropdown">
												Action <span class="caret"></span>
											</button>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Action2</a></li>
												<li><a href="#">Action3</a></li>
											</ul>
										</div>
										<input id="Text2" type="text">
										<div class="btn-group">
											<button class="btn dropdown-toggle" data-toggle="dropdown">
												Action <span class="caret"></span>
											</button>
											<ul class="dropdown-menu pull-right">
												<li><a href="#">Action</a></li>
												<li><a href="#">Action2</a></li>
												<li><a href="#">Action3</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Segmented dropdown</label>
								<div class="controls">
									<div class="input-append">
										<input id="Text3" type="text" />
										<div class="btn-group">
											<button tabindex="-1" class="btn">
												Action</button>
											<button tabindex="-1" data-toggle="dropdown" class="btn dropdown-toggle">
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu pull-right">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Control sizing</label>
								<div class="controls">
									<input class="input-mini" type="text" placeholder=".input-mini" /><div class="clearfix">
										&nbsp;</div>
									<input class="input-small" type="text" placeholder=".input-small" /><div class="clearfix">
										&nbsp;</div>
									<input class="input-medium" type="text" placeholder=".input-medium" /><div class="clearfix">
										&nbsp;</div>
									<input class="input-large" type="text" placeholder=".input-large" /><div class="clearfix">
										&nbsp;</div>
									<input class="input-xlarge" type="text" placeholder=".input-xlarge" /><div class="clearfix">
										&nbsp;</div>
									<input class="input-xxlarge" type="text" placeholder=".input-xxlarge" /><div class="clearfix">
										&nbsp;</div>
									<input class="input-block-level" type="text" placeholder=".input-block-level" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Grid Sizing</label>
								<div class="controls">
									<div class="span12">
										<input class="span1" type="text" placeholder=".span1" /><div class="clearfix">
											&nbsp;</div>
										<input class="span2" type="text" placeholder=".span2" /><div class="clearfix">
											&nbsp;</div>
										<input class="span3" type="text" placeholder=".span3" /><div class="clearfix">
											&nbsp;</div>
										<input class="span4" type="text" placeholder=".span4" /><div class="clearfix">
											&nbsp;</div>
										<input class="span5" type="text" placeholder=".span5" /><div class="clearfix">
											&nbsp;</div>
										<input class="span6" type="text" placeholder=".span6" /><div class="clearfix">
											&nbsp;</div>
										<input class="span7" type="text" placeholder=".span7" /><div class="clearfix">
											&nbsp;</div>
										<input class="span8" type="text" placeholder=".span8" /><div class="clearfix">
											&nbsp;</div>
										<input class="span9" type="text" placeholder=".span9" /><div class="clearfix">
											&nbsp;</div>
										<input class="span10" type="text" placeholder=".span10" /><div class="clearfix">
											&nbsp;</div>
										<input class="span11" type="text" placeholder=".span11" /><div class="clearfix">
											&nbsp;</div>
										<input class="span12" type="text" placeholder=".span12" />
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	 </div>
	<!-- end mainbar -->
</div>
<!-- end container -->
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
