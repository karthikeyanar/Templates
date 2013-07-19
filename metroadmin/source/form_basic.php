<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	<?php include_once 'sidebar.php' ?>
	<!-- mainbar -->
	<div id="mainbar">
		<div class="container-fluid">
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
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-title">
							<h4>
								<i class="icon-edit"></i>Basic form</h4>
						</div>
						<div class="box-content">
							<form action="#" method="POST">
							<div class="control-group">
								<label for="textfield" class="control-label">
									Text input</label>
								<div class="controls">
									<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-xlarge" />
								</div>
							</div>
							<div class="control-group">
								<label for="password" class="control-label">
									Password</label>
								<div class="controls">
									<input type="password" name="password" id="password" placeholder="Password input"
										class="input-xlarge" />
								</div>
							</div>
							<div class="control-group">
								<label for="password" class="control-label">
									File Input</label>
								<div class="controls">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input
											type="file" /></span> <span class="fileupload-preview"></span><a href="#" class="close fileupload-exists"
												data-dismiss="fileupload" style="float: none">&times</a>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Check Box</label>
								<div class="controls">
									<label class='checkbox'>
										<input type="checkbox" name="checkbox" />Choice
									</label>
									<label class='checkbox'>
										<input type="checkbox" name="checkbox" />
										Choice2
									</label>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Radio Button</label>
								<div class="controls">
									<label class='radio'>
										<input type="radio" name="radio" />Choice
									</label>
									<label class='radio'>
										<input type="radio" name="radio" />
										Choice2
									</label>
								</div>
							</div>
							<div class="control-group">
								<label for="textarea" class="control-label">
									Textarea</label>
								<div class="controls">
									<textarea name="textarea" id="textarea" rows="5" cols="10" class="input-block-level">test content</textarea>
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
			<div class="row-fluid">
				<div class="span12">
					<div class="box box-bordered">
						<div class="box-title">
							<h4>
								<i class="icon-edit"></i>Bordered form</h4>
						</div>
						<div class="box-content no-padding">
							<form action="#" method="POST" class='form-vertical form-bordered form-striped'>
							<div class="control-group">
								<label for="textfield" class="control-label">
									Text input</label>
								<div class="controls">
									<input type="text" name="textfield" id="text1" placeholder="Text input" class="input-xlarge" />
								</div>
							</div>
							<div class="control-group">
								<label for="password" class="control-label">
									Password</label>
								<div class="controls">
									<input type="password" name="password" id="password1" placeholder="Password input"
										class="input-xlarge" />
								</div>
							</div>
							<div class="control-group">
								<label for="password" class="control-label">
									File Input</label>
								<div class="controls">
										<div class="fileupload fileupload-new" data-provides="fileupload">
										<span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input
											type="file" /></span> <span class="fileupload-preview"></span><a href="#" class="close fileupload-exists"
												data-dismiss="fileupload" style="float: none">&times</a>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Check Box</label>
								<div class="controls">
									<label class='checkbox'>
										<input type="checkbox" name="checkbox" />Choice
									</label>
									<label class='checkbox'>
										<input type="checkbox" name="checkbox" />
										Choice2
									</label>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Radio Button</label>
								<div class="controls">
									<label class='radio'>
										<input type="radio" name="radio" />Choice
									</label>
									<label class='radio'>
										<input type="radio" name="radio" />
										Choice2
									</label>
								</div>
							</div>
							<div class="control-group">
								<label for="textarea" class="control-label">
									Textarea</label>
								<div class="controls">
									<textarea name="textarea" id="textarea1" rows="5" cols="10" class="input-block-level">test content</textarea>
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
			<div class="row-fluid">
				<div class="span12">
					<div class="box box-bordered">
						<div class="box-title">
							<h4>
								<i class="icon-edit"></i>Horizontal form</h4>
						</div>
						<div class="box-content">
							<form action="#" method="POST" class='form-horizontal'>
							<div class="control-group">
								<label for="textfield" class="control-label">
									Text input</label>
								<div class="controls">
									<input type="text" name="textfield" id="text2" placeholder="Text input" class="input-xlarge" />
								</div>
							</div>
							<div class="control-group">
								<label for="password" class="control-label">
									Password</label>
								<div class="controls">
									<input type="password" name="password" id="password2" placeholder="Password input"
										class="input-xlarge" />
								</div>
							</div>
							<div class="control-group">
								<label for="password" class="control-label">
									File Input</label>
								<div class="controls">
										<div class="fileupload fileupload-new" data-provides="fileupload">
										<span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input
											type="file" /></span> <span class="fileupload-preview"></span><a href="#" class="close fileupload-exists"
												data-dismiss="fileupload" style="float: none">&times</a>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Check Box</label>
								<div class="controls">
									<label class='checkbox'>
										<input type="checkbox" name="checkbox" />Choice
									</label>
									<label class='checkbox'>
										<input type="checkbox" name="checkbox" />
										Choice2
									</label>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Radio Button</label>
								<div class="controls">
									<label class='radio'>
										<input type="radio" name="radio" />Choice
									</label>
									<label class='radio'>
										<input type="radio" name="radio" />Choice2</label>
								</div>
							</div>
							<div class="control-group">
								<label for="textarea" class="control-label">
									Textarea</label>
								<div class="controls">
									<textarea name="textarea" id="textarea2" rows="5" cols="10" class="input-block-level">test content</textarea>
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
			<div class="row-fluid">
				<div class="span12">
					<div class="box box-bordered">
						<div class="box-title">
							<h4>
								<i class="icon-edit"></i>Vertical form</h4>
						</div>
						<div class="box-content">
							<form action="#" method="POST" class='form-vertical'>
							<div class="control-group">
								<label for="textfield" class="control-label">
									Text input</label>
								<div class="controls">
									<input type="text" name="textfield" id="text3" placeholder="Text input" class="input-xlarge" />
								</div>
							</div>
							<div class="control-group">
								<label for="password" class="control-label">
									Password</label>
								<div class="controls">
									<input type="password" name="password" id="password3" placeholder="Password input"
										class="input-xlarge" />
								</div>
							</div>
							<div class="control-group">
								<label for="password" class="control-label">
									File Input</label>
								<div class="controls">
										<div class="fileupload fileupload-new" data-provides="fileupload">
										<span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input
											type="file" /></span> <span class="fileupload-preview"></span><a href="#" class="close fileupload-exists"
												data-dismiss="fileupload" style="float: none">&times</a>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Check Box</label>
								<div class="controls">
									<label class='checkbox'>
										<input type="checkbox" name="checkbox" />Choice
									</label>
									<label class='checkbox'>
										<input type="checkbox" name="checkbox" />
										Choice2
									</label>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Radio Button</label>
								<div class="controls">
									<label class='radio'>
										<input type="radio" name="radio" />Choice
									</label>
									<label class='radio'>
										<input type="radio" name="radio" />
										Choice2
									</label>
								</div>
							</div>
							<div class="control-group">
								<label for="textarea" class="control-label">
									Textarea</label>
								<div class="controls">
									<textarea name="textarea" id="textarea3" rows="5" cols="10" class="input-block-level">test content</textarea>
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
			<div class="row-fluid">
				<div class="span12">
					<div class="box box-bordered">
						<div class="box-title">
							<h4>
								<i class="icon-edit"></i>Vertical bordered form</h4>
						</div>
						<div class="box-content no-padding">
							<form action="#" method="POST" class='form-horizontal form-bordered form-striped'>
							<div class="control-group">
								<label for="textfield" class="control-label">
									Text input</label>
								<div class="controls">
									<input type="text" name="textfield" id="text4" placeholder="Text input" class="input-xlarge" />
								</div>
							</div>
							<div class="control-group">
								<label for="password" class="control-label">
									Password</label>
								<div class="controls">
									<input type="password" name="password" id="password4" placeholder="Password input"
										class="input-xlarge" />
								</div>
							</div>
							<div class="control-group">
								<label for="password" class="control-label">
									File Input</label>
								<div class="controls">
										<div class="fileupload fileupload-new" data-provides="fileupload">
										<span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input
											type="file" /></span> <span class="fileupload-preview"></span><a href="#" class="close fileupload-exists"
												data-dismiss="fileupload" style="float: none">&times</a>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Check Box</label>
								<div class="controls">
									<label class='checkbox'>
										<input type="checkbox" name="checkbox" />Choice
									</label>
									<label class='checkbox'>
										<input type="checkbox" name="checkbox" />
										Choice2
									</label>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Radio Button</label>
								<div class="controls">
									<label class='radio'>
										<input type="radio" name="radio" />Choice
									</label>
									<label class='radio'>
										<input type="radio" name="radio" />
										Choice2
									</label>
								</div>
							</div>
							<div class="control-group">
								<label for="textarea" class="control-label">
									Textarea</label>
								<div class="controls">
									<textarea name="textarea" id="textarea4" rows="5" cols="10" class="input-block-level">test content</textarea>
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
	</div>
	<!-- end mainbar -->
</div>
<!-- end container -->
<?php include_once 'script.php' ?>
<?php include_once 'footer.php' ?>