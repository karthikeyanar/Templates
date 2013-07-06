<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	<?php include_once 'sidebar.php' ?>
	<!-- mainbar -->
	<div id="mainbar">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span4">
					<div class="page-header">
						<h1>
							Charts</h1>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="box box-bordered">
						<div class="box-title">
							<h4>
								Pie Chart</h4>
						</div>
						<div class="box-content">
							<div id="pie-chart1" class="chart chart-medium"></div>
						</div>
					</div>
				</div>
				<div class="span6">
					<div class="box box-bordered">
						<div class="box-title">
							<h4>
								Interactivity</h4>
						</div>
						<div class="box-content">
							<div id="interactivity" class="chart chart-medium">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="box box-bordered">
						<div class="box-title">
							<h4>Panning and Zooming</h4>
						</div>
						<div class="box-content">
							<div id="panning" class="chart chart-large">
							</div>
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
<script src="js/example/chart.js" type="text/javascript"></script>
<?php include_once 'footer.php' ?>