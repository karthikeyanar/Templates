<?php include_once 'start-page.php' ?>
<title>Pepper - Flot Chart</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
	<div class="row">
		<div class="col-lg-4">
			<div class="page-header">
				<h1>Flot Chart</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Pie Chart</h3>
				</div>
				<div class="panel-body">
					<div id="pie-chart1" class="chart chart-medium"></div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Interactivity</h3>
				</div>
				<div class="panel-body">
					<div id="interactivity" class="chart chart-medium">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Panning and Zooming</h3>
				</div>
				<div class="panel-body">
					<div id="panning" class="chart chart-large">
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<!-- flot chart -->
<script src="js/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="js/plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
<script src="js/plugins/flot/jquery.flot.navigate.min.js" type="text/javascript"></script>
<script src="js/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="js/pages/chart.js" type="text/javascript"></script>
<?php include_once 'applicationscript.php' ?>
<?php include_once 'end-page.php' ?>
