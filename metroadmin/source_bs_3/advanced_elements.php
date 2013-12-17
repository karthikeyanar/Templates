<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	<div class="page-header">
		<h1>Advanced Elements</h1>
	</div>
	<ul class="breadcrumb">
		<li>
			<a href="index.php">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="form_basic.php">Forms</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="advanced_elements.php">Advanced Elements</a>
		</li>
		<li class="pull-right">
			<a href="#" class="close">&times</a>
		</li>
	</ul>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-edit"></i>Advanced Elements
					</h3>
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
							<div class="col-lg-2">
								<input type="text" class="form-control" name="date" id="datepicker">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">
								Default Time Picker
							</label>
							<div class="col-lg-2">
								<div class="input-group">
									<input id="timepicker1" class="form-control" type="text"/><span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">
								Modal Time Picker
							</label>
							<div class="col-lg-2">
								<div class="input-group">
									<input id="timepicker2" type="text" class="form-control">
										<span class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">
								Input Tags
							</label>
							<div class="col-lg-8">
								<input type="hidden" id="select2InputTag" class="width-fluid" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">
								Input Tags
							</label>
							<div class="col-lg-8">
								<input type="hidden" id="select2InputTag2" class="width-fluid pull-left" />
							</div>
							<div class="col-lg-2">
								<label class="pull-left">Maximum input length: 10</label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">
								Spinner
							</label>
							<div class="col-lg-10">
								<input id="spinner" name="spinner" value="5" class="form-control" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php include_once 'endcontainer.php' ?>
<?php include_once 'script.php' ?>
<script type="text/javascript">
	$(function() {
		//select2
		//$("#select2InputTag").select2({tags:["red", "green", "blue"]});

		//$("#select2InputTag2").select2({tags:["red", "green", "blue"], maximumInputLength: 10});

		$('#datepicker').datepicker({
			autoclose: true
		});

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