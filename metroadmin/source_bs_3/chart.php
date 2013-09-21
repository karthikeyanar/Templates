<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	
 
			<div class="row">
				<div class="col-lg-4">
					<div class="page-header">
						<h1>
							Charts</h1>
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
 	</div>
	<!-- end mainbar -->
</div>
<!-- end container -->
<?php include_once 'script.php' ?>
<script src="js/example/chart.js" type="text/javascript"></script>
<?php include_once 'footer.php' ?>