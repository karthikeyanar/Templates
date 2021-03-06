<?php include_once 'start-page.php' ?>
<title>Pepper - Form Controls</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
<div class="page-header">
	<h1>
		Form Controls</h1>
</div>
<ul class="breadcrumb">
	<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="form_control.php">Forms</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="form_control.php">Form control</a> </li>
	<li class="pull-right"><a href="#" class="close">&times</a></li>
</ul>
<!-- Nav tabs -->
<ul class="nav nav-tabs nav-tab-border">
	<li class="active"><a href="#form1" data-toggle="tab">Default Form</a></li>
	<li><a href="#form2" data-toggle="tab">Default Form Height Sizing</a></li>
	<li><a href="#form3" data-toggle="tab">Form Input Width Sizing</a></li>
	<li><a href="#form4" data-toggle="tab">Horizontal Form</a></li>
	<li><a href="#form5" data-toggle="tab">Horizontal Form Height Sizing</a></li>
	<li><a href="#form6" data-toggle="tab">Fluid Input Groups</a></li>
	<li><a href="#form7" data-toggle="tab">More Form Examples</a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content padding-top-10">
	<div class="tab-pane active" id="form1">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Default Form</h3>
			</div>
			<div class="panel-body">
				<form action="#" method="POST">
				<div class="form-group">
					<label>
						Text</label>
					<input type="text" class="form-control" id="text" placeholder="Enter text" />
					<p class="help-block">
						A block of help text.</p>
				</div>
				<div class="form-group">
					<label>
						Email Address</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<input type="text" class="form-control" placeholder="Email Address" />
					</div>
				</div>
				<div class="form-group">
					<label>
						Password</label>
					<div class="input-group">
						<input type="password" class="form-control" id="password" placeholder="Password" />
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
					</div>
				</div>
				<div class="form-group">
					<label>
						Left Icon</label>
					<div class="input-icon">
						<i class="fa fa-bell-o"></i>
						<input type="text" class="form-control" placeholder="Left icon" />
					</div>
				</div>
				<div class="form-group">
					<label>
						Right Icon</label>
					<div class="input-icon right">
						<i class="fa fa-microphone"></i>
						<input type="text" class="form-control" placeholder="Right icon" />
					</div>
				</div>
				<div class="form-group">
					<label>
						Input With Spinner</label>
					<input class="form-control spinner" type="text" placeholder="Process something" />
				</div>
				<div class="form-group">
					<label>
						Static Control</label>
					<p class="form-control-static">
						email@example.com</p>
				</div>
				<div class="form-group">
					<label>
						Disabled</label>
					<input type="text" class="form-control" placeholder="Disabled" disabled />
				</div>
				<div class="form-group">
					<label>
						Readonly</label>
					<input type="text" class="form-control" placeholder="Readonly" readonly />
				</div>
				<div class="form-group">
					<label>
						Dropdown</label>
					<select class="form-control">
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
						<option>Option 4</option>
						<option>Option 5</option>
					</select>
				</div>
				<div class="form-group">
					<label>
						Multiple Select</label>
					<select multiple class="form-control">
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
						<option>Option 4</option>
						<option>Option 5</option>
					</select>
				</div>
				<div class="form-group">
					<label>
						Textarea</label>
					<textarea class="form-control" rows="3"></textarea>
				</div>
				<div class="form-group">
					<label>
						File input</label>
					<input type="file" id="fle" />
					<p class="help-block">
						some help text here.
					</p>
				</div>
				<div class="form-group">
					<label>
						Checkboxes</label>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="value1">Checkbox 1</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="value3">Checkbox 2</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="value3" disabled>Disabled</label>
					</div>
				</div>
				<div class="form-group">
					<label>
						Inline Checkboxes</label>
					<div>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1">1
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox2" value="option2">2
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox3" value="option3">3
						</label>
					</div>
				</div>
				<div class="form-group">
					<label>
						Radio</label>
					<div class="radio">
						<label>
							<input type="radio" name="rdo" value="option1">Option 1</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="rdo" value="option2">Option 2</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="rdo" value="option3" disabled>Disabled</label>
					</div>
				</div>
				<div class="form-group">
					<label>
						Inline Radios</label>
					<div>
						<label class="radio-inline">
							<input type="radio" id="inlineRadio1" name="rdo2" value="option1">1
						</label>
						<label class="radio-inline">
							<input type="radio" id="inlineRadio2" name="rdo2" value="option2">2
						</label>
						<label class="radio-inline">
							<input type="radio" id="inlineRadio3" name="rdo2" value="option3" disabled>3
						</label>
					</div>
				</div>
				<button type="submit" class="btn btn-primary margin-right-10">
					Submit</button>
				<button type="button" class="btn btn-default">
					Cancel</button>
				</form>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="form2">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">
					Default Form Height Sizing</h3>
			</div>
			<div class="panel-body">
				<form action="#" method="POST">
				<div class="form-group">
					<label>
						Large Input</label>
					<input type="text" class="form-control input-lg" placeholder="input-lg">
				</div>
				<div class="form-group">
					<label>
						Default Input</label>
					<input type="text" class="form-control" placeholder="">
				</div>
				<div class="form-group">
					<label>
						Small Input</label>
					<input type="text" class="form-control input-sm" placeholder="input-sm">
				</div>
				<div class="form-group">
					<label>
						Large Select</label>
					<select class="form-control input-lg">
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
						<option>Option 4</option>
						<option>Option 5</option>
					</select>
				</div>
				<div class="form-group">
					<label>
						Default Select</label>
					<select class="form-control">
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
						<option>Option 4</option>
						<option>Option 5</option>
					</select>
				</div>
				<div class="form-group">
					<label>
						Small Select</label>
					<select class="form-control input-sm">
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
						<option>Option 4</option>
						<option>Option 5</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary margin-right-10">
					Submit</button>
				<button type="button" class="btn btn-default">
					Cancel</button>
				</form>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="form3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Form Input Width Sizing</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="#" method="POST">
				<div class="row">
					<div class="col-md-12">
						<h4>
							Fluid Input</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="text" class="form-control" placeholder="fluid">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-icon right margin-top-10">
							<i class="fa fa-check"></i>
							<input type="text" class="form-control" placeholder="fluid">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-icon margin-top-10">
							<i class="fa fa-user"></i>
							<input type="text" class="form-control" placeholder="fluid">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-group margin-top-10">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input type="email" class="form-control" placeholder="fluid">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-group margin-top-10">
							<input type="email" class="form-control" placeholder="fluid">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>
							Extra Large Input</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="text" class="form-control input-xlarge" placeholder=".input-xlarge">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-icon right input-xlarge margin-top-10">
							<i class="fa fa-check"></i>
							<input type="text" class="form-control" placeholder=".input-xlarge">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-icon input-xlarge margin-top-10">
							<i class="fa fa-user"></i>
							<input type="text" class="form-control" placeholder=".input-xlarge">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-group input-xlarge margin-top-10">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input type="email" class="form-control" placeholder=".input-xlarge">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-group input-xlarge margin-top-10">
							<input type="email" class="form-control" placeholder=".input-xlarge">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>
							Large Input</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="text" class="form-control input-large" placeholder=".input-large">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-icon right input-large margin-top-10">
							<i class="fa fa-check"></i>
							<input type="text" class="form-control" placeholder=".input-large">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-icon input-large margin-top-10">
							<i class="fa fa-user"></i>
							<input type="text" class="form-control" placeholder=".input-large">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-group input-large margin-top-10">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input type="email" class="form-control" placeholder=".input-large">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-group input-large margin-top-10">
							<input type="email" class="form-control" placeholder=".input-large">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>
							Medium Input</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="text" class="form-control input-medium" placeholder=".input-medium">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-icon right input-medium margin-top-10">
							<i class="fa fa-check"></i>
							<input type="text" class="form-control" placeholder=".input-medium">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-icon input-medium margin-top-10">
							<i class="fa fa-user"></i>
							<input type="text" class="form-control" placeholder=".input-medium">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-group input-medium margin-top-10">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input type="email" class="form-control" placeholder=".input-medium">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-group input-medium margin-top-10">
							<input type="email" class="form-control" placeholder=".input-medium">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>
							Small Input</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="text" class="form-control input-small" placeholder=".input-small">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-icon right input-small margin-top-10">
							<i class="fa fa-check"></i>
							<input type="text" class="form-control" placeholder=".input-small">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-icon input-small margin-top-10">
							<i class="fa fa-user"></i>
							<input type="text" class="form-control" placeholder=".input-small">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-group input-small margin-top-10">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input type="email" class="form-control" placeholder=".input-small">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-group input-small margin-top-10">
							<input type="email" class="form-control" placeholder=".input-small">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>
							Mini Input</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="text" class="form-control input-mini" placeholder=".input-mini">
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="form4">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">
					Horizontal Form</h3>
			</div>
			<div class="panel-body no-padding-bottom">
				<form action="#" method="POST" class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-md-3">
						Text</label>
					<div class="col-md-9">
						<input type="text" class="form-control" id="text2" placeholder="Enter text" />
						<p class="help-block">
							A block of help text.</p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Email Address</label>
					<div class="col-md-9">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input type="text" class="form-control" placeholder="Email Address" />
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Password</label>
					<div class="col-md-9">
						<div class="input-group">
							<input type="password" class="form-control" id="password2" placeholder="Password" />
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Left Icon</label>
					<div class="col-md-9">
						<div class="input-icon">
							<i class="fa fa-bell-o"></i>
							<input type="text" class="form-control" placeholder="Left icon" />
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Right Icon</label>
					<div class="col-md-9">
						<div class="input-icon right">
							<i class="fa fa-microphone"></i>
							<input type="text" class="form-control" placeholder="Right icon" />
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Input With Spinner</label>
					<div class="col-md-9">
						<input class="form-control spinner" type="text" placeholder="Process something" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Static Control</label>
					<div class="col-md-9">
						<p class="form-control-static">
							email@example.com</p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Disabled</label>
					<div class="col-md-9">
						<input type="text" class="form-control" placeholder="Disabled" disabled />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Readonly</label>
					<div class="col-md-9">
						<input type="text" class="form-control" placeholder="Readonly" readonly />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Dropdown</label>
					<div class="col-md-9">
						<select class="form-control">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
							<option>Option 4</option>
							<option>Option 5</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Multiple Select</label>
					<div class="col-md-9">
						<select multiple class="form-control">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
							<option>Option 4</option>
							<option>Option 5</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Textarea</label>
					<div class="col-md-9">
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						File input</label>
					<div class="col-md-9">
						<input type="file" id="File1" />
						<p class="help-block">
							some help text here.</p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Checkboxes</label>
					<div class="col-md-9">
						<div class="checkbox">
							<label>
								<input type="checkbox" value="value1">Checkbox 1</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="value3">Checkbox 2</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="value3" disabled>Disabled</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Inline Checkboxes</label>
					<div class="col-md-9">
						<label class="checkbox-inline">
							<input type="checkbox" id="Checkbox1" value="option1">1
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="Checkbox2" value="option2">2
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="Checkbox3" value="option3">3
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Radio</label>
					<div class="col-md-9">
						<div class="radio">
							<label>
								<input type="radio" name="rdo" value="option1">Option 1</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="rdo" value="option2">Option 2</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="rdo" value="option3" disabled>Disabled</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Inline Radios</label>
					<div class="col-md-9">
						<label class="radio-inline">
							<input type="radio" id="Radio1" name="rdo2" value="option1">1
						</label>
						<label class="radio-inline">
							<input type="radio" id="Radio2" name="rdo2" value="option2">2
						</label>
						<label class="radio-inline">
							<input type="radio" id="Radio3" name="rdo2" value="option3" disabled>3
						</label>
					</div>
				</div>
				<div class="form-group form-actions">
					<div class="col-md-9 col-md-offset-3">
						<button type="submit" class="btn btn-primary margin-right-10">
							Submit</button>
						<button type="button" class="btn btn-default">
							Cancel</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="form5">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Horizontal Form Height Sizing</h3>
			</div>
			<div class="panel-body no-padding-bottom">
				<form class="form-horizontal" action="#" method="POST">
				<div class="form-group">
					<label class="col-md-3 control-label">
						Large Input</label>
					<div class="col-md-9">
						<input type="text" class="form-control input-lg" placeholder="Large Input">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">
						Default Input</label>
					<div class="col-md-9">
						<input type="text" class="form-control" placeholder="Default Input">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">
						Small Input</label>
					<div class="col-md-9">
						<input type="text" class="form-control input-sm" placeholder="Default Input">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">
						Large Select</label>
					<div class="col-md-9">
						<select class="form-control input-lg">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
							<option>Option 4</option>
							<option>Option 5</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">
						Default Select</label>
					<div class="col-md-9">
						<select class="form-control">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
							<option>Option 4</option>
							<option>Option 5</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">
						Small Select</label>
					<div class="col-md-9">
						<select class="form-control input-sm">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
							<option>Option 4</option>
							<option>Option 5</option>
						</select>
					</div>
				</div>
				<div class="form-group form-actions">
					<div class="col-md-9 col-md-offset-3">
						<button type="submit" class="btn btn-primary margin-right-10">
							Save</button>
						<button type="button" class="btn btn-danger">
							Cancel</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="form6">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">
					Fluid Input Groups</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="#" method="POST">
				<div class="row">
					<div class="col-md-12">
						<h4>
							Checkbox Addons</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="input-group">
							<span class="input-group-addon">
								<label class="checkbox metro-checkbox">
									<input type="checkbox" value="test" />
								</label>
							</span>
							<input type="text" class="form-control" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group">
							<input type="text" class="form-control" />
							<span class="input-group-addon">
								<label class="metro-checkbox">
									<input type="checkbox" name="chk" />
								</label>
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>
							Button Addons</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									Go!</button>
							</span>
							<input type="text" class="form-control" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group">
							<input type="text" class="form-control" />
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									Go!</button>
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>
							Button Addons On Both Sides</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									Go!</button>
							</span>
							<input type="text" class="form-control" />
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									Go!</button>
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>
							Buttons With Dropdowns</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="input-group">
							<div class="input-group-btn">
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
									Action <i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
							<input type="text" class="form-control" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group">
							<input type="text" class="form-control" />
							<div class="input-group-btn">
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
									Action <i class="fa fa-angle-down"></i>
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
				<div class="row">
					<div class="col-md-12">
						<h4>
							Buttons With Dropdowns On Both Sides</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-group">
							<div class="input-group-btn">
								<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
									Action <i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
							<input type="text" class="form-control" />
							<div class="input-group-btn">
								<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
									Action <i class="fa fa-angle-down"></i>
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
				<div class="row">
					<div class="col-md-12">
						<h4>
							Segmented Buttons</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="input-group">
							<div class="input-group-btn">
								<button type="button" class="btn btn-primary" tabindex="-1">
									Action</button>
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
									tabindex="-1">
									<i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
							<input type="text" class="form-control" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group">
							<input type="text" class="form-control" />
							<div class="input-group-btn">
								<button type="button" class="btn btn-primary" tabindex="-1">
									Action</button>
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
									tabindex="-1">
									<i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu pull-right" role="menu">
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
				</form>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="form7">
		<div class="panel-body">
			<h4>
				Inline Form</h4>
			<form class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="exampleInputEmail2">
					Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" />
			</div>
			<div class="form-group">
				<label class="sr-only" for="exampleInputPassword2">
					Password</label>
				<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" />
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" />
					Remember me
				</label>
			</div>
			<button type="submit" class="btn btn-default">
				Sign in</button>
			</form>
			<hr/>
			<h4>
				Inline Form With Icons</h4>
			<form class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only">
					Email address</label>
				<div class="input-icon">
					<i class="fa fa-envelope"></i>
					<input type="email" class="form-control" placeholder="Enter email" />
				</div>
			</div>
			<div class="form-group">
				<label class="sr-only">
					Password</label>
				<div class="input-icon">
					<i class="fa fa-user"></i>
					<input type="password" class="form-control" placeholder="Password" />
				</div>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" />
					Remember me
				</label>
			</div>
			<button type="submit" class="btn btn-default">
				Sign in</button>
			</form>
			<hr/>
			<h4>
				Horizontal Form</h4>
			<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="inputEmail" class="col-md-2 control-label">
					Email</label>
				<div class="col-md-4">
					<input type="email" class="form-control" id="inputEmail" placeholder="Email" />
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-md-2 control-label">
					Password</label>
				<div class="col-md-4">
					<input type="password" class="form-control" id="inputPassword" placeholder="Password" />
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-4">
					<div class="checkbox">
						<label>
							<input type="checkbox" />
							Remember me
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-10">
					<button type="submit" class="btn blue">
						Sign in</button>
				</div>
			</div>
			</form>
			<hr/>
			<h4>
				Horizontal Form With Icons</h4>
			<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="inputEmail12" class="col-md-2 control-label">
					Email</label>
				<div class="col-md-4">
					<div class="input-icon">
						<i class="fa fa-envelope"></i>
						<input type="email" class="form-control" id="inputEmail12" placeholder="Email" />
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword1" class="col-md-2 control-label">
					Password</label>
				<div class="col-md-4">
					<div class="input-icon right">
						<i class="fa fa-user"></i>
						<input type="password" class="form-control" id="inputPassword1" placeholder="Password" />
					</div>
					<div class="help-block">
						with right aligned icon
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-4">
					<div class="checkbox">
						<label>
							<input type="checkbox" />
							Remember me
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-10">
					<button type="submit" class="btn green">
						Sign in</button>
				</div>
			</div>
			</form>
			<hr />
			<h4>
				Column Sizing</h4>
			<form role="form">
			<div class="row">
				<div class="col-md-2">
					<input type="text" class="form-control" placeholder=".col-md-2" />
				</div>
				<div class="col-md-3">
					<input type="text" class="form-control" placeholder=".col-md-3" />
				</div>
				<div class="col-md-4">
					<input type="text" class="form-control" placeholder=".col-md-4" />
				</div>
				<div class="col-md-3">
					<input type="text" class="form-control" placeholder=".col-md-2" />
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<?php include_once 'applicationscript.php' ?>
<?php include_once 'end-page.php' ?>