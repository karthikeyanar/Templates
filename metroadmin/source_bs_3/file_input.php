<?php include_once 'start-page.php' ?>
<title>Pepper - File Input</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<link href="css/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet">
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
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
								<span class="btn btn-default btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" /></span>
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
									<span class="btn btn-default btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" /></span><a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
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
									<span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span><a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
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
								<span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<!-- Bootstrap FileUpload -->
<script src="js/plugins/bs-fileupload/bootstrap-fileupload.min.js"></script>
<?php include_once 'applicationscript.php' ?>
<?php include_once 'end-page.php' ?>