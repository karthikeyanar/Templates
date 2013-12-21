<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
<div class="page-header">
	<h1>
		Form controls</h1>
</div>
<ul class="breadcrumb">
	<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="form_control.php">Forms</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="form_control.php">Form control</a> </li>
	<li class="pull-right"><a href="#" class="close">&times</a></li>
</ul>
<div class="row">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							<i class="fa fa-edit"></i>Default Form</h3>
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
						<button type="submit" class="btn btn-primary margin10-right">
							Submit</button>
						<button type="button" class="btn btn-default">
							Cancel</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<i class="fa fa-edit"></i>Default Form Height Sizing</h3>
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
						<button type="submit" class="btn btn-primary margin10-right">
							Submit</button>
						<button type="button" class="btn btn-default">
							Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">
							<i class="fa fa-edit"></i>Horizontal Form</h3>
					</div>
					<div class="panel-body">
						<form action="#" method="POST" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-md-4">
								Text</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="text1" placeholder="Enter text" />
								<p class="help-block">
									A block of help text.</p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">
								Email Address</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-control" placeholder="Email Address" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">
								Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<input type="password" class="form-control" id="password1" placeholder="Password" />
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">
								Left Icon</label>
							<div class="col-md-8">
								<div class="input-icon">
									<i class="fa fa-bell-o"></i>
									<input type="text" class="form-control" placeholder="Left icon" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">
								Right Icon</label>
							<div class="col-md-8">
								<div class="input-icon right">
									<i class="fa fa-microphone"></i>
									<input type="text" class="form-control" placeholder="Right icon" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">
								Input With Spinner</label>
							<div class="col-md-8">
								<input class="form-control spinner" type="text" placeholder="Process something" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">
								Static Control</label>
							<div class="col-md-8">
								<p class="form-control-static">
									email@example.com</p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">
								Disabled</label>
							<div class="col-md-8">
								<input type="text" class="form-control" placeholder="Disabled" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">
								Readonly</label>
							<div class="col-md-8">
								<input type="text" class="form-control" placeholder="Readonly" readonly />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">
								Dropdown</label>
							<div class="col-md-8">
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
							<label class="control-label col-md-4">
								Multiple Select</label>
							<div class="col-md-8">
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
							<label class="control-label col-md-4">
								Textarea</label>
							<div class="col-md-8">
								<textarea class="form-control" rows="3"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">
								File input</label>
							<div class="col-md-8">
								<input type="file" id="File1" />
								<p class="help-block">
									some help text here.</p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">
								Checkboxes</label>
							<div class="col-md-8">
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
							<label class="control-label col-md-4">
								Inline Checkboxes</label>
							<div class="col-md-8">
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
							<label class="control-label col-md-4">
								Radio</label>
							<div class="col-md-8">
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
							<label class="control-label col-md-4">
								Inline Radios</label>
							<div class="col-md-8">
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
						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-primary margin10-right">
									Submit</button>
								<button type="button" class="btn btn-default">
									Cancel</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-skyblue">
					<div class="panel-heading">
						<h3 class="panel-title">
							<i class="fa fa-edit"></i>Bordered form</h3>
					</div>
					<div class="panel-body no-padding">
						<form action="#" method="POST" class='form-horizontal form-bordered form-striped'>
						<div class="form-group">
							<label for="textfield" class="col-md-4 control-label">
								Text input</label>
							<div class="col-md-8">
								<input type="text" name="textfield" id="text1" placeholder="Text input" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="col-md-4 control-label">
								Password</label>
							<div class="col-md-8">
								<input type="password" name="password" id="password1" placeholder="Password input"
									class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">
								Check Box</label>
							<div class="col-md-8">
								<label class='checkbox'>
									<input type="checkbox" name="checkbox" />Choice
								</label>
								<label class='checkbox'>
									<input type="checkbox" name="checkbox" />Choice2
								</label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">
								Radio Button</label>
							<div class="col-md-8">
								<label class='radio'>
									<input type="radio" name="radio" />Choice
								</label>
								<label class='radio'>
									<input type="radio" name="radio" />
									Choice2
								</label>
							</div>
						</div>
						<div class="form-group">
							<label for="textarea" class="col-md-4 control-label">
								Textarea</label>
							<div class="col-md-8">
								<textarea name="textarea" id="textarea1" rows="5" cols="10" class="form-control">test content</textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-primary margin10-right">
									Save</button>
								<button type="button" class="btn btn-danger">
									Cancel</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-skyblue">
					<div class="panel-heading">
						<h3 class="panel-title">
							<i class="fa fa-edit"></i>Horizontal Form Height Sizing</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="#" method="POST">
							<div class="form-group">
								<label class="col-md-4 control-label">Large Input</label>
								<div class="col-md-8">
									<input type="text" class="form-control input-lg" placeholder="Large Input">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Default Input</label>
								<div class="col-md-8">
									<input type="text" class="form-control" placeholder="Default Input">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Small Input</label>
								<div class="col-md-8">
									<input type="text" class="form-control input-sm" placeholder="Default Input">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Large Select</label>
								<div class="col-md-8">
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
								<label class="col-md-4 control-label">Default Select</label>
								<div class="col-md-8">
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
								<label class="col-md-4 control-label">Small Select</label>
								<div class="col-md-8">
									<select class="form-control input-sm">
										<option>Option 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-8 col-md-offset-4">
									<button type="submit" class="btn btn-primary margin10-right">
										Save</button>
									<button type="button" class="btn btn-danger">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once 'endcontainer.php' ?>
<?php include_once 'script.php' ?>
<?php include_once 'footer.php' ?>