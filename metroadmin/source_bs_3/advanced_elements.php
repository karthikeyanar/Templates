<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>

	<div class="page-header">
			<h1>
				Advanced Elements
			</h1>
		</div>
	<ul class="breadcrumb">
			<li>
				<a href="index.php">Home</a>
				<i class="icon-angle-right"></i>
			</li>
			<li>
				<a href="form_basic.php">Forms</a>
				<i class="icon-angle-right"></i>
			</li>
			<li>
				<a href="advanced_elements.php">Advanced Elements</a>
			</li>
			<li class="pull-right">
				<a href="#" class="close">&times</a>
			</li>
		</ul>
	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>
							<i class="icon-edit"></i>Advanced Elements
						</h4>
					</div>
					<div class="panel-body no-padding">
						<form action="#" method="POST" class="form-horizontal form-bordered form-striped">
							<div class="form-group">
								<label class="col-lg-2 control-label">
									Colorpicker
								</label>
								<div class="col-lg-10">
									<div class="pick-a-color">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
									Date Picker
								</label>
								<div class="col-lg-10">
									<input type="text" class="input-small datepicker" name="date" id="datepicker">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
									Default Time Picker
								</label>
								<div class="col-lg-10">
									<div class="input-append bootstrap-timepicker">
										<input id="timepicker1" class="input-small" type="text"/>
										<span class="add-on">
											<i class="icon-time"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
									Modal Time Picker
								</label>
								<div class="col-lg-10">
									<div class="input-append bootstrap-timepicker">
										<input id="timepicker2" type="text" class="input-small">
											<span class="add-on">
												<i class="icon-time"></i>
											</span>
										</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
								</label>
								<div class="col-lg-10">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<span class="btn btn-file">
											<span class="fileupload-new">Select file</span>
											<span class="fileupload-exists">Change</span>
											<input
											type="file" />
										</span>
										<span class="fileupload-preview"></span>
										<a href="#" class="close fileupload-exists"
												data-dismiss="fileupload" style="float: none">&times</a>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
								</label>
								<div class="col-lg-10">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="input-append">
											<div class="uneditable-input col-md-3">
												<i class="icon-file fileupload-exists"></i>
												<span class="fileupload-preview"></span>
											</div>
											<span class="btn btn-file">
												<span class="fileupload-new">Select file</span>
												<span class="fileupload-exists">Change</span>
												<input
												type="file" />
											</span>
											<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
								</label>
								<div class="col-lg-10">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
										</div>
										<div>
											<span class="btn btn-file">
												<span class="fileupload-new">Select image</span>
												<span
												class="fileupload-exists">Change</span>
												<input type="file" />
											</span>
											<a href="#" class="btn fileupload-exists"
													data-dismiss="fileupload">Remove</a>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
								</label>
								<div class="col-lg-10">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-new thumbnail" style="width: 50px; height: 50px;">
											<img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" />
										</div>
										<div class="fileupload-preview fileupload-exists thumbnail" style="width: 50px; height: 50px;">
										</div>
										<span class="btn btn-file">
											<span class="fileupload-new">Select image</span>
											<span
											class="fileupload-exists">Change</span>
											<input type="file" />
										</span>
										<a href="#" class="btn fileupload-exists"
												data-dismiss="fileupload">Remove</a>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
									Input Tags
								</label>
								<div class="col-lg-10">
									<input type="hidden" id="select2InputTag" class="input-large" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
									Input Tags
								</label>
								<div class="col-lg-10">
									<input type="hidden" id="select2InputTag2" class="input-large pull-left" />
									<label class="pull-left cutter-left">Maximum input length: 10</label>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
									Spinner
								</label>
								<div class="col-lg-10">
									<input id="spinner" name="spinner" value="5" />
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
<script type="text/javascript">
	$(function() {
		//select2
		$("#select2InputTag").select2({tags:["red", "green", "blue"]});

		$("#select2InputTag2").select2({tags:["red", "green", "blue"], maximumInputLength: 10});

		$('#timepicker1').timepicker();

		$('#timepicker2').timepicker({
			minuteStep: 1,
			template: 'modal',
			showSeconds: true,
			showMeridian: false
		});

		// spinner
		$("#spinner").spinner({
			min: 5,
			max: 2500,
			step: 25,
			start: 1000,
			numberFormat: "C"
		});

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