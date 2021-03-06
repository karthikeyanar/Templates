<?php include_once 'start-page.php' ?>
<title>Pepper - Slider</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<!-- bootstrap slider -->
<link href="css/plugins/bootstrap-slider/slider.css" rel="stylesheet" type="text/css" />
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
<div class="page-header">
	<h1>Slider</h1>
</div>
<ul class="breadcrumb">
	<li>
		<a href="index.php">Home</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<a href="form_layout.php">UI Elements</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<a href="slider.php">Slider</a>
	</li>
	<li class="pull-right">
		<a href="#" class="close">&times</a>
	</li>
</ul>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					Slider
				</h3>
			</div>
			<div class="panel-body no-padding">
				<form action="#" method="POST" class='form-horizontal form-row-separated'>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Default
						</label>
						<div class="col-md-4">
							<input type="text" class="slider form-control" />
						</div>
					</div>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Set Value
						</label>
						<div class="col-md-4">
							<input type="text" class="slider form-control" value="4" data-slider-value="4"  />
						</div>
					</div>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Min = 10 and Max = 100
						</label>
						<div class="col-md-4">
							<input type="text" class="slider form-control" data-slider-min="10" data-slider-max="100"  />
						</div>
					</div>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Step = 10
						</label>
						<div class="col-md-4">
							<input type="text" class="slider form-control" data-slider-min="0" data-slider-max="1000" data-slider-step="10"  />
						</div>
					</div>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Price $0 to $1000
						</label>
						<div class="col-md-4">
							<input type="text" value="" id="priceSlider" class="form-control" data-slider-min="0" data-slider-max="1000" data-slider-step="5" data-slider-value="[200,500]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" />
						</div>
					</div>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Vertical Slider
						</label>
						<div class="col-md-4">
							<input type="text" class="slider form-control" data-slider-value="5" data-slider-orientation="vertical"  />
						</div>
					</div>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Format Tooltip
						</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="formatSlider" />
						</div>
					</div>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							RGB
						</label>
						<div class="col-md-4">
							<label>Red</label>
							<input type="text" class="form-control" id="Red" data-slider-id="red" data-slider-value="10" data-slider-min="0" data-slider-max="255" data-slider-step="1" />
							<label>Green</label>
							<input type="text" class="form-control" id="Green" data-slider-id="green" data-slider-value="50" data-slider-min="0" data-slider-max="255" data-slider-step="1"  />
							<label>Blue</label>
							<input type="text" class="form-control" id="Blue" data-slider-id="blue" data-slider-value="80" data-slider-min="0" data-slider-max="255" data-slider-step="1" />
						</div>
						<div class="col-md-3">
							<div class="well no-border" id="RGB">
							</div>
							<form>
								<div class="form-group">
									<label>Red</label>
									<input type="text" class="form-control" id="RedValue" data-slider-id="red" />
								</div>
								<div class="form-group">
									<label>Green</label>
									<input type="text" class="form-control" id="GreenValue" data-slider-id="green" />
								</div>
								<div class="form-group">
									<label>Blue</label>
									<input type="text" class="form-control" id="BlueValue" data-slider-id="blue" />
								</div>
							</form>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					Slider Colors
				</h3>
			</div>
			<div class="panel-body no-padding">
				<form action="#" method="POST" class='form-horizontal form-row-separated'>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Red
						</label>
						<div class="col-md-6">
							<input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="red" />
						</div>
					</div>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Blue
						</label>
						<div class="col-md-6">
							<input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue" />
						</div>
					</div>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Green
						</label>
						<div class="col-md-6">
							<input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="green" />
						</div>
					</div>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Yellow
						</label>
						<div class="col-md-6">
							<input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="yellow" />
						</div>
					</div>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Aqua
						</label>
						<div class="col-md-6">
							<input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="aqua" />
						</div>
					</div>
					<div class="form-group">
						<label for="textfield" class="col-md-2 control-label">
							Purple
						</label>
						<div class="col-md-6">
							<input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="purple" />
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
<!-- bootstrap modal --> 
<script src="js/plugins/bootstrap-slider/bootstrap-slider.js" type="text/javascript"></script>
<?php include_once 'applicationscript.php' ?>
<script>
$(function(){
	$("#formatSlider").slider({
		formater: function(value) {
			value = "Current Value = " + value;
			return value;
		}
	});
	$("#priceSlider").slider({
		formater: function(value) {
			value = "$" + value;
			return value;
		}
	});
	function setRGBValue(){
		$("#RedValue").val(r.getValue());
		$("#GreenValue").val(g.getValue());
		$("#BlueValue").val(b.getValue());
		updateRGB();		
	}
	function updateRGB(){	
		$('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	}
	$("#RedValue")
	.bind("keyup",function(){
		r.setValue(this.value);
		updateRGB();
	});
	$("#GreenValue")
	.bind("keyup",function(){
		g.setValue(this.value);
		updateRGB();
	});
	$("#BlueValue")
	.bind("keyup",function(){
		b.setValue(this.value);
		updateRGB();
	});
	var RGBChange = function() {
       setRGBValue();
    };
    var r = $('#Red').slider()
            .on('slide', RGBChange)
            .data('slider');
    var g = $('#Green').slider()
            .on('slide', RGBChange)
            .data('slider');
    var b = $('#Blue').slider()
            .on('slide', RGBChange)
            .data('slider');
	setRGBValue();
});
</script>

