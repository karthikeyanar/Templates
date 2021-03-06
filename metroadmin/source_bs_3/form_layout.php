<?php include_once 'start-page.php' ?>
<title>Pepper - Form Layouts</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<link href="css/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet">
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
<div class="page-header">
	<h1>Form Layouts</h1>
</div>
<ul class="breadcrumb">
	<li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
	<li><a href="form_layout.php">Forms</a><i class="fa fa-angle-right"></i></li>
	<li><a href="form_layout.php">Basic forms</a></li>
	<li class="pull-right"><a href="#" class="close">&times</a></li>
</ul>
<!-- Nav tabs -->
<ul class="nav nav-tabs nav-tab-border">
	<li class="active"><a href="#form1" data-toggle="tab">Row Separated</a></li>
	<li><a href="#form2" data-toggle="tab">Row Stripped</a></li>
	<li><a href="#form3" data-toggle="tab">Bordered</a></li>
	<li><a href="#form4" data-toggle="tab">2 Columns</a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content padding-top-10">
	<!-- Row Separated tab -->
	<div class="tab-pane active" id="form1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					Form Sample
				</h3>
			</div>
			<div class="panel-body no-padding">
				<form action="#" method="POST" class='form-horizontal form-row-separated'>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Text input
						</label>
						<div class="col-md-4">
							<input type="text" placeholder="Text input" class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-md-2 control-label">
							Password
						</label>
						<div class="col-md-4">
							<input type="password" name="password" id="password1" placeholder="Password input"	class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-md-2 control-label">
							File Input
						</label>
						<div class="col-md-10">
							<div class="fileupload fileupload-new" data-provides="fileupload">
								<span class="btn btn-primary btn-file">
									<span class="fileupload-new">Select file</span>
									<span class="fileupload-exists">Change</span>
									<input type="file" />
								</span>
								<span class="fileupload-preview"></span>
								<a href="#" class="close fileupload-exists"	data-dismiss="fileupload" style="float: none">&times</a>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">
							Dropdown
						</label>
						<div class="col-md-4">
							<select class="form-control">
								<option value="">Select</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">
							Check Box
						</label>
						<div class="col-md-10">
							<label class='checkbox'>
								<input type="checkbox" name="checkbox" />Choice
							</label>
							<label class='checkbox'>
								<input type="checkbox" name="checkbox" />
								Choice2
							</label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">
							Radio Button
						</label>
						<div class="col-md-10">
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
						<label for="textarea" class="col-md-2 control-label">
							Textarea
						</label>
						<div class="col-md-10">
							<textarea name="textarea" id="textarea1" rows="5" cols="10" class="form-control">test content</textarea>
						</div>
					</div>
					<div class="form-group form-actions">
						<div class="col-md-10 col-md-offset-2">
							<button type="submit" class="btn btn-primary margin-right-10">
								Save
							</button>
							<button type="button" class="btn btn-danger">
								Cancel
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- End Row Separated tab -->
	<!-- Row Stripped tab -->
	<div class="tab-pane" id="form2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					Form Sample
				</h3>
			</div>
			<div class="panel-body no-padding">
				<form action="#" method="POST" class='form-horizontal form-row-separated form-bordered form-row-stripped'>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Text input
						</label>
						<div class="col-md-4">
							<input type="text" placeholder="Text input" class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-md-2 control-label">
							Password
						</label>
						<div class="col-md-4">
							<input type="password" name="password" id="password1" placeholder="Password input"	class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-md-2 control-label">
							File Input
						</label>
						<div class="col-md-10">
							<div class="fileupload fileupload-new" data-provides="fileupload">
								<span class="btn btn-primary btn-file">
									<span class="fileupload-new">Select file</span>
									<span class="fileupload-exists">Change</span>
									<input type="file" />
								</span>
								<span class="fileupload-preview"></span>
								<a href="#" class="close fileupload-exists"	data-dismiss="fileupload" style="float: none">&times</a>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">
							Dropdown
						</label>
						<div class="col-md-4">
							<select class="form-control">
								<option value="">Select</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">
							Check Box
						</label>
						<div class="col-md-10">
							<label class='checkbox'>
								<input type="checkbox" name="checkbox" />Choice
							</label>
							<label class='checkbox'>
								<input type="checkbox" name="checkbox" />
								Choice2
							</label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">
							Radio Button
						</label>
						<div class="col-md-10">
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
						<label for="textarea" class="col-md-2 control-label">
							Textarea
						</label>
						<div class="col-md-10">
							<textarea name="textarea" id="textarea1" rows="5" cols="10" class="form-control">test content</textarea>
						</div>
					</div>
					<div class="form-group form-actions">
						<div class="col-md-10 col-md-offset-2">
							<button type="submit" class="btn btn-primary margin-right-10">
								Save
							</button>
							<button type="button" class="btn btn-danger">
								Cancel
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- End Row Stripped tab -->
	<!-- Bordered tab -->
	<div class="tab-pane" id="form3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					Form Sample
				</h3>
			</div>
			<div class="panel-body no-padding">
				<form action="#" method="POST" class='form-horizontal form-row-separated form-bordered'>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Text input
						</label>
						<div class="col-md-4">
							<input type="text" placeholder="Text input" class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-md-2 control-label">
							Password
						</label>
						<div class="col-md-4">
							<input type="password" name="password" id="password1" placeholder="Password input"	class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-md-2 control-label">
							File Input
						</label>
						<div class="col-md-10">
							<div class="fileupload fileupload-new" data-provides="fileupload">
								<span class="btn btn-primary btn-file">
									<span class="fileupload-new">Select file</span>
									<span class="fileupload-exists">Change</span>
									<input type="file" />
								</span>
								<span class="fileupload-preview"></span>
								<a href="#" class="close fileupload-exists"	data-dismiss="fileupload" style="float: none">&times</a>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">
							Dropdown
						</label>
						<div class="col-md-4">
							<select class="form-control">
								<option value="">Select</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">
							Check Box
						</label>
						<div class="col-md-10">
							<label class='checkbox'>
								<input type="checkbox" name="checkbox" />Choice
							</label>
							<label class='checkbox'>
								<input type="checkbox" name="checkbox" />
								Choice2
							</label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">
							Radio Button
						</label>
						<div class="col-md-10">
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
						<label for="textarea" class="col-md-2 control-label">
							Textarea
						</label>
						<div class="col-md-10">
							<textarea name="textarea" id="textarea1" rows="5" cols="10" class="form-control">test content</textarea>
						</div>
					</div>
					<div class="form-group form-actions">
						<div class="col-md-10 col-md-offset-2">
							<button type="submit" class="btn btn-primary margin-right-10">
								Save
							</button>
							<button type="button" class="btn btn-danger">
								Cancel
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- End Bordered tab -->
	<!-- 2 Columns tab -->
	<div class="tab-pane" id="form4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					Form Sample
				</h3>
			</div>
			<div class="panel-body no-padding">
				<form action="#" method="POST" class='form-horizontal'>
					<h3 class="form-section padding-left-10">Personal Info</h3> 
					<div class="row no-margin">
						<div class="col-md-6">
							<div class="form-group">
								<label for="textfield" class="col-md-4 control-label">
									First Name
								</label>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="textfield" class="col-md-4 control-label">
									Last Name
								</label>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
						</div>
					</div>
					<div class="row no-margin">
						<div class="col-md-6">
							<div class="form-group">
								<label for="Gender" class="col-md-4 control-label">
									Gender
								</label>
								<div class="col-md-8">
									<select class="form-control">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="textfield" class="col-md-4 control-label">
									Date Of Birth
								</label>
								<div class="col-md-8">
									<input type="text" placeholder="mm/dd/yyyy" class="form-control" />
								</div>
							</div>
						</div>
					</div>
					<h3 class="form-section padding-left-10">Address</h3> 
					<div class="row no-margin">
						<div class="col-md-12">
							<div class="form-group">
								<label for="Address1" class="col-md-2 control-label">
									Address 1
								</label>
								<div class="col-md-10">
									<input type="text" class="form-control" />
								</div>
							</div>
						</div>
					</div>
					<div class="row no-margin">
						<div class="col-md-6">
							<div class="form-group">
								<label for="City" class="col-md-4 control-label">
									City
								</label>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="State" class="col-md-4 control-label">
									State
								</label>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
						</div>
					</div>
					<div class="row no-margin">
						<div class="col-md-6">
							<div class="form-group">
								<label for="Zip" class="col-md-4 control-label">
									Zip
								</label>
								<div class="col-md-8">
									<input type="text" class="form-control" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="State" class="col-md-4 control-label">
									Country
								</label>
								<div class="col-md-8">
									<select class="form-control"></select>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group form-actions">
						<div class="col-md-10 col-md-offset-2">
							<button type="submit" class="btn btn-primary margin-right-10">Save</button>
							<button type="button" class="btn btn-danger">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- End 2 Columns tab -->
</div> 
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<!-- Bootstrap FileUpload -->
<script src="js/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<?php include_once 'applicationscript.php' ?>
<?php include_once 'end-page.php' ?>