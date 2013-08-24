<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	
 
			<div class="page-header">
				<h1>
					File Input</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
				<li><a href="form_basic.php">Forms</a> <i class="icon-angle-right"></i></li>
				<li><a href="form_basic.php">File Input</a> </li>
				<li class="pull-right"><a href="#" class="close">&times</a></li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h4>
								<i class="icon-edit"></i>File Input</h4>
						</div>
						<div class="panel-body">
							<form action="#" method="POST">
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
								</label>
								<div class="col-lg-10">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input
											type="file" /></span> <span class="fileupload-preview"></span><a href="#" class="close fileupload-exists"
												data-dismiss="fileupload" style="float: none">&times</a>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
									</label>
								<div class="col-lg-10">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="input-append">
											<div class="uneditable-input col-md-3">
												<i class="icon-file fileupload-exists"></i><span class="fileupload-preview"></span>
											</div>
											<span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input
												type="file" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
									</label>
								<div class="col-lg-10">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
										</div>
										<div>
											<span class="btn btn-file"><span class="fileupload-new">Select image</span><span
												class="fileupload-exists">Change</span><input type="file" /></span> <a href="#" class="btn fileupload-exists"
													data-dismiss="fileupload">Remove</a>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
									</label>
								<div class="col-lg-10">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-new thumbnail" style="width: 50px; height: 50px;">
											<img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /></div>
										<div class="fileupload-preview fileupload-exists thumbnail" style="width: 50px; height: 50px;">
										</div>
										<span class="btn btn-file"><span class="fileupload-new">Select image</span><span
											class="fileupload-exists">Change</span><input type="file" /></span> <a href="#" class="btn fileupload-exists"
												data-dismiss="fileupload">Remove</a>
									</div>
								</div>
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