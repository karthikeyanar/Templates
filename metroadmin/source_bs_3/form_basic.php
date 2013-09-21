<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	
 
			<div class="page-header">
				<h1>
					Basic forms</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
				<li><a href="form_basic.php">Forms</a> <i class="icon-angle-right"></i></li>
				<li><a href="form_basic.php">Basic forms</a> </li>
				<li class="pull-right"><a href="#" class="close">&times</a></li>
			</ul>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								<i class="icon-edit"></i>Basic form</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST">
							<div class="form-group">
								<label for="textfield" class="col-lg-2 control-label">
									Text input</label>
								<div class="col-lg-10">
									<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-xlarge" />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
									Password</label>
								<div class="col-lg-10">
									<input type="password" name="password" id="password" placeholder="Password input"
										class="input-xlarge" />
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
							<div class="form-actions">
								<button type="submit" class="btn btn-primary input-small">
									Save</button>
								<button type="button" class="btn btn-danger">
									Cancel</button>
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
								<i class="icon-edit"></i>Bordered form</h3>
						</div>
						<div class="panel-body no-padding">
							<form action="#" method="POST" class='form-vertical form-bordered form-striped'>
							<div class="form-group">
								<label for="textfield" class="col-lg-2 control-label">
									Text input</label>
								<div class="col-lg-10">
									<input type="text" name="textfield" id="text1" placeholder="Text input" class="input-xlarge" />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
									Password</label>
								<div class="col-lg-10">
									<input type="password" name="password" id="password1" placeholder="Password input"
										class="input-xlarge" />
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
							<div class="form-actions">
								<button type="submit" class="btn btn-primary input-small">
									Save</button>
								<button type="button" class="btn btn-danger">
									Cancel</button>
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
								<i class="icon-edit"></i>Horizontal form</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST" class='form-horizontal'>
							<div class="form-group">
								<label for="textfield" class="col-lg-2 control-label">
									Text input</label>
								<div class="col-lg-10">
									<input type="text" name="textfield" id="text2" placeholder="Text input" class="input-xlarge" />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
									Password</label>
								<div class="col-lg-10">
									<input type="password" name="password" id="password2" placeholder="Password input"
										class="input-xlarge" />
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
										<input type="radio" name="radio" />Choice2</label>
								</div>
							</div>
							<div class="form-group">
								<label for="textarea" class="col-lg-2 control-label">
									Textarea</label>
								<div class="col-lg-10">
									<textarea name="textarea" id="textarea2" rows="5" cols="10" class="form-control">test content</textarea>
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary input-small">
									Save</button>
								<button type="button" class="btn btn-danger">
									Cancel</button>
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
								<i class="icon-edit"></i>Vertical form</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST" class='form-vertical'>
							<div class="form-group">
								<label for="textfield" class="col-lg-2 control-label">
									Text input</label>
								<div class="col-lg-10">
									<input type="text" name="textfield" id="text3" placeholder="Text input" class="input-xlarge" />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
									Password</label>
								<div class="col-lg-10">
									<input type="password" name="password" id="password3" placeholder="Password input"
										class="input-xlarge" />
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
									<textarea name="textarea" id="textarea3" rows="5" cols="10" class="form-control">test content</textarea>
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary input-small">
									Save</button>
								<button type="button" class="btn btn-danger">
									Cancel</button>
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
								<i class="icon-edit"></i>Vertical bordered form</h3>
						</div>
						<div class="panel-body no-padding">
							<form action="#" method="POST" class='form-horizontal form-bordered form-striped'>
							<div class="form-group">
								<label for="textfield" class="col-lg-2 control-label">
									Text input</label>
								<div class="col-lg-10">
									<input type="text" name="textfield" id="text4" placeholder="Text input" class="input-xlarge" />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
									Password</label>
								<div class="col-lg-10">
									<input type="password" name="password" id="password4" placeholder="Password input"
										class="input-xlarge" />
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
									<textarea name="textarea" id="textarea4" rows="5" cols="10" class="form-control">test content</textarea>
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary input-small">
									Save</button>
								<button type="button" class="btn btn-danger">
									Cancel</button>
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
<?php include_once 'footer.php' ?>