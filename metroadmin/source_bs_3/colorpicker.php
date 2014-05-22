<?php include_once 'start-page.php' ?>
<title>Pepper - Color Picker</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<!-- color picker -->
<link href="css/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
<div class="page-header">
	<h1>Color Picker</h1>
</div>
<ul class="breadcrumb">
	<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="form_component.php">Plugins</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="form_component.php">Color Picker</a> </li>
	<li class="pull-right"><a href="#" class="close">&times</a></li>
</ul>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading panel-title">
				<h3 class="panel-title">Color Pickers</h3>
			</div>
			<div class="panel-body">
				<form method="post" class="form-horizontal form-striped" onsubmit="return false">
					<div class="form-group">
						<label class="col-md-2 control-label">Default</label>
						<div class="col-md-4">
							<input type="text" value="#5367ce" class="form-control color-picker">
						</div>
					</div> 
					<div class="form-group">
						<label class="col-md-2 control-label">As a component</label>
						<div class="col-md-4">
							<div class="input-group color-picker">
								<input type="text" value="#5367ce" class="form-control">
								<span class="input-group-addon"><i></i></span>
							</div>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-md-2 control-label">Horizontal Mode</label>
						<div class="col-md-4">
							<input type="text" value="#5367ce" class="form-control color-picker" data-horizontal="true">
						</div>
					</div> 
					<div class="form-group">
						<label class="col-md-2 control-label">Inline Mode</label>
						<div class="col-md-2">
							<div id="demo_cont" class="color-picker" data-container="#demo_cont" data-color="rgba(150,216,62,0.55)" data-inline="true"></div>
						</div>
						<div class="col-md-2">
							<div class="color-picker" data-container="true" data-color="rgb(50,216,62)" data-inline="true"></div>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-md-2 control-label">Enable / Disable</label>
						<div class="col-md-4">
							<input type="text" disabled id="enableColorPicker" value="#5367ce" class="form-control">
						</div>
						<div class="col-md-4">
							<button id="btnEnable" type="button" class="btn btn-default">Enable</button>
							<button id="btnDisable" type="button" class="btn btn-default">Disable</button>
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
<!-- color picker -->
<script src="js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
<script>
	$(function(){
		$('.color-picker').colorpicker();
		$('#enableColorPicker').colorpicker();
		$("#btnEnable").click(function(){
			$('#enableColorPicker').colorpicker('enable');
		});
		$("#btnDisable").click(function(){
			$('#enableColorPicker').colorpicker('disable');
		});
	});
</script>
<?php include_once 'applicationscript.php' ?>
<?php include_once 'end-page.php' ?>