<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
			<!-- tiles -->
			<div class="row">
				<div class="col-md-12">
					<div class="tile-group">
						<div class="tile icon">
	                    	<div class="tile-content">
		                        <i class="icon-envelope icon-4x"></i>
		                    </div>
		                    <div class="brand">
		                        <div class="badge">10</div>
		                        <div class="name">Mail</div>
		                    </div>
			            </div>
			            <div class="tile icon bg-orange">
							<div class="tile-content">
								<i class="icon-calendar icon-4x"></i>
							</div>
							<div class="brand">
								<div class="badge">
									10</div>
								<div class="name">
									Events</div>
							</div>
						</div>
						<div class="tile icon bg-sky-blue">
							<div class="tile-content">
								<i class="icon-shopping-cart icon-4x"></i>
							</div>
							<div class="brand">
								<div class="badge">
									10</div>
								<div class="name">
									Orders</div>
							</div>
						</div>
						<div class="tile icon bg-green">
							<div class="tile-content">
								<i class="icon-briefcase icon-4x"></i>
							</div>
							<div class="brand">
								<div class="badge">
									10</div>
								<div class="name">
									Products</div>
							</div>
						</div>
						<div class="tile double bg-purple">
							<div class="tile-content list">
								<ul>
									<li><i class="icon-tags"></i><span class="title">Total Sales 100</span></li>
									<li><i class="icon-money"></i><span class="title">Total Profit $342,242</span></li>
									<li><i class="icon-group"></i><span class="title">Total Users 125</span></li>
									<li><i class="icon-envelope"></i><span class="title">Total Messages 250</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- chart -->
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>
								Pie Chart</h4>
						</div>
						<div class="panel-body">
							<div id="pie-chart1" class="chart chart-medium">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>
								Interactivity</h4>
						</div>
						<div class="panel-body">
							<div id="interactivity" class="chart chart-medium">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--- chat --->
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>
								<i class="icon-comment"></i>Chat</h4>
						</div>
						<div class="panel-body">
							<div class="chat-content">
								<ul class="media-list">
									<li class="media"><a href="#" class="pull-left">
										<img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px;
											height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABi0lEQVR4nO2VrZLCMBRGef9HuSImoiIC05maiogaRERMJa9wVyXD37K7FDjD7CfOTIH0zuEk0N3xePT/zI4WoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkcIOfsMUY3M48xeq31ak0Iwc0MnfmSAIfDwc3Mc85ea3Uz8/1+f7Zmnmc3s1/LvmLmywKklO5KrOvad7Kta19qGIa+bhgGNzOvtT40EwvQjmiTTimdfT6Ooy/LciXbdjDn3K/ned40EwtgZl5K6Ue3Hddaa9/lW7IxRg8heAjBY4xPmYkFuPU6peSllG9lc879/WmanjLz7QEu/4lPpdr1Jaf3np6CdV03z3x7gGma+m+5lOJm5uM4/nhS2n3LsvST0O57dCYSoAm3Xbsleil77ynQjvdfZ6IBPh0FoAVoFIAWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoPkClAggzoBQdWcAAAAASUVORK5CYII=">
									</a>
										<div class="media-body">
											<div class="message-body right bg-sky-blue fg-white">
												<div class="arrow-left">
												</div>
												<h4 class="media-heading">
													Jarge</h4>
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
															Sam</h4>
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
															Adam</h4>
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
													Roy</h4>
												Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
												commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="chat-send">
								<div class="input-icon-btn">
									<input type="text" id="msg" name="msg" class="form-control" placeholder="Message" />
									<button id="send" class="btn btn-primary">
										<i class="icon-share-alt"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="calendar">
					</div>
				</div>
			</div>
	</div>
	<!-- end mainbar -->
</div>
<!-- end container -->
<?php include_once 'script.php' ?>
<script src="js/example/dashboard.js" type="text/javascript"></script>
<?php include_once 'footer.php' ?>
