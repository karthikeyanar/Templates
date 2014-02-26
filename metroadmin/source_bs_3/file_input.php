<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
			<div class="page-header">
				<h1>
					File Input</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="form_layout.php">Forms</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="form_layout.php">File Input</a> </li>
				<li class="pull-right"><a href="#" class="close">&times</a></li>
			</ul>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								File Input</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST">
							<div class="form-group">
								<div class="col-lg-10">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<span class="btn btn-grey btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" /></span>
										<span class="fileupload-preview"></span><a href="#" class="close fileupload-exists"	data-dismiss="fileupload" style="float: none">&times</a>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="input-group">
											<div class="uneditable-input col-md-3">
												<span class="fileupload-preview"></span>
											</div>
											<span class="btn btn-grey btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" /></span><a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
										</div>
										<div>
											<span class="btn btn-grey btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span><a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-new thumbnail" style="width: 50px; height: 50px;"></div>
										<div class="fileupload-preview fileupload-exists thumbnail" style="width: 50px; height: 50px;">
										</div>
										<span class="btn btn-grey btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
									</div>
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