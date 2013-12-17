<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
			<div class="page-header">
				<h1>
					Basic forms</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="form_basic.php">Forms</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="form_basic.php">Basic forms</a> </li>
				<li class="pull-right"><a href="#" class="close">&times</a></li>
			</ul>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								<i class="fa fa-edit"></i>Basic form</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST" class="form-horizontal">
							<div class="form-group">
								<label for="textfield" class="col-lg-2 control-label">
									Text input</label>
								<div class="col-lg-4">
									<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
									Password</label>
								<div class="col-lg-4">
									<input type="password" name="password" id="password" placeholder="Password input"
										class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
									File Input</label>
								<div class="col-lg-10">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<span class="btn btn-default btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input
											type="file" /></span> <span class="fileupload-preview"></span><a href="#" class="close fileupload-exists"
												data-dismiss="fileupload" style="float: none">&times</a>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
									Check Box</label>
								<div class="col-lg-10">
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
								<label class="col-lg-2 control-label">
									Radio Button</label>
								<div class="col-lg-10">
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
								<label for="textarea" class="col-lg-2 control-label">
									Textarea</label>
								<div class="col-lg-10">
									<textarea name="textarea" id="textarea" rows="5" cols="10" class="form-control">test content</textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<button type="submit" class="btn btn-primary cutter-right">
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
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								<i class="fa fa-edit"></i>Bordered form</h3>
						</div>
						<div class="panel-body no-padding">
							<form action="#" method="POST" class='form-horizontal form-bordered form-striped'>
							<div class="form-group">
								<label for="textfield" class="col-lg-2 control-label">
									Text input</label>
								<div class="col-lg-4">
									<input type="text" name="textfield" id="text1" placeholder="Text input" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
									Password</label>
								<div class="col-lg-4">
									<input type="password" name="password" id="password1" placeholder="Password input"
										class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
									File Input</label>
								<div class="col-lg-10">
										<div class="fileupload fileupload-new" data-provides="fileupload">
										<span class="btn btn-default btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input
											type="file" /></span> <span class="fileupload-preview"></span><a href="#" class="close fileupload-exists"
												data-dismiss="fileupload" style="float: none">&times</a>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
									Check Box</label>
								<div class="col-lg-10">
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
								<label class="col-lg-2 control-label">
									Radio Button</label>
								<div class="col-lg-10">
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
								<label for="textarea" class="col-lg-2 control-label">
									Textarea</label>
								<div class="col-lg-10">
									<textarea name="textarea" id="textarea1" rows="5" cols="10" class="form-control">test content</textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<button type="submit" class="btn btn-primary cutter-right">
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
<?php include_once 'endcontainer.php' ?>
<?php include_once 'script.php' ?>
<?php include_once 'footer.php' ?>