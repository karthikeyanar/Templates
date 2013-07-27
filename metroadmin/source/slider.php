<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
<?php include_once 'sidebar.php' ?>
<!-- mainbar -->
<div id="mainbar">
	<div class="container-fluid">
		<div class="page-header">
			<h1>Slider</h1>
		</div>
		<ul class="breadcrumb">
			<li>
				<a href="index.php">Home</a>
				<i class="icon-angle-right"></i>
			</li>
			<li>
				<a href="form_basic.php">UI Elements</a>
				<i class="icon-angle-right"></i>
			</li>
			<li>
				<a href="labels_badges.php">Slider</a>
			</li>
			<li class="pull-right">
				<a href="#" class="close">&times</a>
			</li>
		</ul>
		<div class="row-fluid">
			<div class="span12">
				<div class="box box-bordered">
					<div class="box-title">
						<h4>
							<i class="icon-edit"></i>Slider
						</h4>
					</div>
					<div class="box-content no-padding">
						<form action="#" method="POST" class="form-horizontal form-bordered form-striped">
							<div class="control-group">
								<label class="control-label no-padding no-margin">
									Default
								</label>
								<div class="controls">
									<div id="slider"></div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Color Picker
								</label>
								<div class="controls">
									<div id="red"></div>
									<div id="green"></div>
									<div id="blue"></div>
									<div id="swatch" class="ui-widget-content ui-corner-all"></div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Vertical Slider
								</label>
								<div class="controls">
									<p>
										<label for="amount">Volume</label>
										<input type="text" id="amount" class="input-mini"  />
									</p>
									<div id="slider-vertical" style="height: 200px;"></div>
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
<style>
	#red, #green, #blue {
	width: 300px;
	margin: 0 0 20px 0;
	}
	#swatch {
	width: 120px;
	height: 100px;
	margin-top: 0px;
	margin-left: 0px;
	background-image: none;
	clear:both;
	}
	#red .ui-slider-range { background: #ef2929; }
	#red .ui-slider-handle { border-color: #ef2929; }
	#green .ui-slider-range { background: #8ae234; }
	#green .ui-slider-handle { border-color: #8ae234; }
	#blue .ui-slider-range { background: #729fcf; }
	#blue .ui-slider-handle { border-color: #729fcf; }
</style>
<script>
	$(function() {
	$( "#slider" ).slider();
	});
</script>
<script>
	function hexFromRGB(r, g, b) {
	var hex = [
	r.toString( 16 ),
	g.toString( 16 ),
	b.toString( 16 )
	];
	$.each( hex, function( nr, val ) {
	if ( val.length === 1 ) {
	hex[ nr ] = "0" + val;
	}
	});
	return hex.join( "" ).toUpperCase();
	}
	function refreshSwatch() {
	var red = $( "#red" ).slider( "value" ),
	green = $( "#green" ).slider( "value" ),
	blue = $( "#blue" ).slider( "value" ),
	hex = hexFromRGB( red, green, blue );
	$( "#swatch" ).css( "background-color", "#" + hex );
	}
	$(function() {
	$( "#red, #green, #blue" ).slider({
	orientation: "horizontal",
	range: "min",
	max: 255,
	value: 127,
	slide: refreshSwatch,
	change: refreshSwatch
	});
	$( "#red" ).slider( "value", 255 );
	$( "#green" ).slider( "value", 140 );
	$( "#blue" ).slider( "value", 60 );
	});
</script>
<script>
	$(function() {
	$( "#slider-vertical" ).slider({
	orientation: "vertical",
	range: "min",
	min: 0,
	max: 100,
	value: 60,
	slide: function( event, ui ) {
	$( "#amount" ).val( ui.value );
	}
	});
	$( "#amount" ).val( $( "#slider-vertical" ).slider( "value" ) );
	});
</script>
<?php include_once 'footer.php' ?>

