<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	<?php include_once 'sidebar.php' ?>
	<!-- mainbar -->
	<div id="mainbar">
		<div class="container-fluid">
			<div class="page-header">
				<h1>
					Advanced Elements</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
				<li><a href="form_basic.php">Forms</a> <i class="icon-angle-right"></i></li>
				<li><a href="advanced_elements.php">Advanced Elements</a></li>
				<li class="pull-right"><a href="#" class="close">&times</a></li>
			</ul>
			<div class="row-fluid">
				<div class="span12">
					<div class="box box-bordered">
						<div class="box-title">
							<h4>
								<i class="icon-edit"></i>Advanced Elements</h4>
						</div>
						<div class="box-content no-padding">
							<form action="#" method="POST" class="form-horizontal form-bordered form-striped">
							<div class="control-group">
								<label class="control-label">
									Colorpicker</label>
								<div class="controls">
									<div class="pick-a-color">
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Date Picker</label>
								<div class="controls">
									<input type="text" class="input-small datepicker" name="date" id="datepicker">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Default Time Picker</label>
								<div class="controls">
									  <div class="input-append bootstrap-timepicker">
									        <input id="timepicker1" class="input-small" type="text"/><span class="add-on"><i class="icon-time"></i></span>
									   </div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Modal Time Picker</label>
								<div class="controls">
									 <div class="input-append bootstrap-timepicker">
							            <input id="timepicker2" type="text" class="input-small">
							            <span class="add-on">
							                <i class="icon-time"></i>
							            </span>
							        </div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
								</label>
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
								</label>
								<div class="controls">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="input-append">
											<div class="uneditable-input span3">
												<i class="icon-file fileupload-exists"></i><span class="fileupload-preview"></span>
											</div>
											<span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input
												type="file" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
										</div>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
								</label>
								<div class="controls">
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
							<div class="control-group">
								<label class="control-label">
								</label>
								<div class="controls">
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
							<div class="control-group">
								<label class="control-label">
									Input Tags</label>
								<div class="controls">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Spinner</label>
								<div class="controls">
								</div>
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
<script type="text/javascript">
	$(document).ready(function() {
		$('#timepicker1').timepicker();
	    $('#timepicker2').timepicker({
               minuteStep: 1,
               template: 'modal',
               showSeconds: true,
               showMeridian: false
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