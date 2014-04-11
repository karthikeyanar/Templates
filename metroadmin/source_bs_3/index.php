<?php include_once 'start-page.php' ?>
<title>Pepper - Dashboard</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
	<div class="page-header">
		<h1>
			Dashboard
		</h1>
	</div>
	<div class="row">
        <div class="col-md-2 col-sm-4 col-xs-6">
            <div class="box bg-skyblue">
                <div class="icon">
                    <i class="fa fa-calendar"></i>
                </div>
                <div class="description">
                    <strong>14</strong> meetings
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <div class="box bg-red">
                <div class="big-text">
                    3.28%
                </div>
                <div class="description">
                    <i class="fa fa-user"></i>
                    User Growth
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <div class="box bg-green">
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="description">
                    <strong>643</strong> customers
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <div class="box bg-orange">
                <div class="big-text">
                    +512
                </div>
                <div class="description">
                    <i class="fa fa-comments"></i>
                    Comments
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <div class="box bg-pink">
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="description">
                    <strong>410</strong> orders
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <div class="box bg-cardovan">
                <div class="big-text">
                    6.42%
                </div>
                <div class="description">
                    <i class="fa fa-arrow-right"></i>
                    Traffic Growth
                </div>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-white">
				<div class="panel-heading">
					<h3 class="panel-title">
						Area Chart</h3>
				</div>
				<div class="panel-body">
					<div id="morris-area-chart" class="morris-chart">
                    </div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-white">
				<div class="panel-heading">
					<h3 class="panel-title">Donut Chart Example</h3>
				</div>
				<div class="panel-body">
					<div id="morris-donut-chart" class="morris-chart">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-white">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-comment"></i>Chat</h3>
				</div>
				<div class="panel-body">
					<div class="chat-content">
						<ul class="media-list">
							<li class="media"><a href="#" class="pull-left">
								<img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px;
									height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABi0lEQVR4nO2VrZLCMBRGef9HuSImoiIC05maiogaRERMJa9wVyXD37K7FDjD7CfOTIH0zuEk0N3xePT/zI4WoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkcIOfsMUY3M48xeq31ak0Iwc0MnfmSAIfDwc3Mc85ea3Uz8/1+f7Zmnmc3s1/LvmLmywKklO5KrOvad7Kta19qGIa+bhgGNzOvtT40EwvQjmiTTimdfT6Ooy/LciXbdjDn3K/ned40EwtgZl5K6Ue3Hddaa9/lW7IxRg8heAjBY4xPmYkFuPU6peSllG9lc879/WmanjLz7QEu/4lPpdr1Jaf3np6CdV03z3x7gGma+m+5lOJm5uM4/nhS2n3LsvST0O57dCYSoAm3Xbsleil77ynQjvdfZ6IBPh0FoAVoFIAWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoPkClAggzoBQdWcAAAAASUVORK5CYII=">
							</a>
								<div class="media-body">
									<div class="message-body right bg-skyblue fg-white">
										<div class="arrow-left">
										</div>
										<h4 class="media-heading">
											Jarge</h3>
										<p>
											Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
											commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
									</div>
									<!-- Nested media object -->
									<div class="media">
										<a href="#" class="pull-left">
											<img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px;
												height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABi0lEQVR4nO2VrZLCMBRGef9HuSImoiIC05maiogaRERMJa9wVyXD37K7FDjD7CfOTIH0zuEk0N3xePT/zI4WoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkcIOfsMUY3M48xeq31ak0Iwc0MnfmSAIfDwc3Mc85ea3Uz8/1+f7Zmnmc3s1/LvmLmywKklO5KrOvad7Kta19qGIa+bhgGNzOvtT40EwvQjmiTTimdfT6Ooy/LciXbdjDn3K/ned40EwtgZl5K6Ue3Hddaa9/lW7IxRg8heAjBY4xPmYkFuPU6peSllG9lc879/WmanjLz7QEu/4lPpdr1Jaf3np6CdV03z3x7gGma+m+5lOJm5uM4/nhS2n3LsvST0O57dCYSoAm3Xbsleil77ynQjvdfZ6IBPh0FoAVoFIAWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoPkClAggzoBQdWcAAAAASUVORK5CYII=">
										</a>
										<div class="media-body">
											<div class="message-body right bg-red fg-white">
												<div class="arrow-left">
												</div>
												<h4 class="media-heading">
													Sam</h3>
												Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
												commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
											</div>
										</div>
									</div>
									<!-- Nested media object -->
									<div class="media">
										<a href="#" class="pull-left">
											<img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px;
												height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABi0lEQVR4nO2VrZLCMBRGef9HuSImoiIC05maiogaRERMJa9wVyXD37K7FDjD7CfOTIH0zuEk0N3xePT/zI4WoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkcIOfsMUY3M48xeq31ak0Iwc0MnfmSAIfDwc3Mc85ea3Uz8/1+f7Zmnmc3s1/LvmLmywKklO5KrOvad7Kta19qGIa+bhgGNzOvtT40EwvQjmiTTimdfT6Ooy/LciXbdjDn3K/ned40EwtgZl5K6Ue3Hddaa9/lW7IxRg8heAjBY4xPmYkFuPU6peSllG9lc879/WmanjLz7QEu/4lPpdr1Jaf3np6CdV03z3x7gGma+m+5lOJm5uM4/nhS2n3LsvST0O57dCYSoAm3Xbsleil77ynQjvdfZ6IBPh0FoAVoFIAWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoPkClAggzoBQdWcAAAAASUVORK5CYII=">
										</a>
										<div class="media-body">
											<div class="message-body right bg-pink fg-white">
												<div class="arrow-left">
												</div>
												<h4 class="media-heading">
													Adam</h3>
												Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
												commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="media"><a href="#" class="pull-right">
								<img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px;
									height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABi0lEQVR4nO2VrZLCMBRGef9HuSImoiIC05maiogaRERMJa9wVyXD37K7FDjD7CfOTIH0zuEk0N3xePT/zI4WoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkcIOfsMUY3M48xeq31ak0Iwc0MnfmSAIfDwc3Mc85ea3Uz8/1+f7Zmnmc3s1/LvmLmywKklO5KrOvad7Kta19qGIa+bhgGNzOvtT40EwvQjmiTTimdfT6Ooy/LciXbdjDn3K/ned40EwtgZl5K6Ue3Hddaa9/lW7IxRg8heAjBY4xPmYkFuPU6peSllG9lc879/WmanjLz7QEu/4lPpdr1Jaf3np6CdV03z3x7gGma+m+5lOJm5uM4/nhS2n3LsvST0O57dCYSoAm3Xbsleil77ynQjvdfZ6IBPh0FoAVoFIAWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoPkClAggzoBQdWcAAAAASUVORK5CYII=">
							</a>
								<div class="media-body">
									<div class="message-body left bg-purple fg-white">
										<div class="arrow-right">
										</div>
										<h4 class="media-heading">
											Roy</h3>
										Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
										commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="chat-send">
						<div class="input-group">
							<input type="text" id="msg" name="msg" class="form-control" placeholder="Message" />
							<span class="input-group-btn"><button id="send" class="btn btn-blue">
								<i class="fa fa-check"></i>
							</button></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<i class="fa fa-bell fa-fw"></i>Notifications
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="list-group">
						<a class="list-group-item" href="#"><i class="fa fa-comment fa-fw"></i>New Comment <span class="pull-right text-muted small"><em>4 minutes ago</em> </span></a><a class="list-group-item" href="#"><i class="fa fa-twitter fa-fw"></i>3 New Followers <span class="pull-right text-muted small"><em>12 minutes ago</em> </span></a>
						<a class="list-group-item" href="#"><i class="fa fa-envelope fa-fw"></i>Message Sent <span class="pull-right text-muted small"><em>27 minutes ago</em> </span></a>
						<a class="list-group-item" href="#"><i class="fa fa-tasks fa-fw"></i>New Task <span class="pull-right text-muted small"><em>43 minutes ago</em> </span></a>
						<a class="list-group-item" href="#"><i class="fa fa-upload fa-fw"></i>Server Rebooted <span class="pull-right text-muted small"><em>11:32 AM</em> </span></a>
						<a class="list-group-item" href="#"><i class="fa fa-bolt fa-fw"></i>Server Crashed! <span class="pull-right text-muted small"><em>11:13 AM</em> </span></a>
						<a class="list-group-item" href="#"><i class="fa fa-warning fa-fw"></i>Server Not Responding <span class="pull-right text-muted small"><em>10:57 AM</em> </span></a>
						<a class="list-group-item" href="#"><i class="fa fa-shopping-cart fa-fw"></i>New Order Placed <span class="pull-right text-muted small"><em>9:49 AM</em> </span></a>
						<a class="list-group-item" href="#"><i class="fa fa-money fa-fw"></i>Payment Received<span class="pull-right text-muted small"><em>Yesterday</em> </span></a>
					</div>
					<!-- /.list-group -->
					<a class="btn btn-blue btn-block" href="#">View All Alerts</a>
				</div>
				<!-- /.panel-body -->
			</div>
		</div>
	</div>
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<!-- Page-Level Plugin Scripts - Dashboard -->
<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="js/plugins/morris/morris.js"></script>
<script src="js/pages/dashboard.js" type="text/javascript"></script>
<?php include_once 'applicationscript.php' ?>
<?php include_once 'end-page.php' ?>