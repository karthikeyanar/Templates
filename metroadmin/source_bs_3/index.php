<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
			<div class="page-header">
				<h1>
					Dashboard
				</h1>
			</div>
			<!-- tiles -->
			<div class="row">
				<div class="col-lg-12">
					<div class="tile bg-skyblue">
						<div class="tile-content icon"><i class="fa fa-shopping-cart fa-3x"></i></div>
						<div class="tile-status">
							<span class="name">Orders</span>
							<div class="badge">10</div>
						</div>
					</div>
					<div class="tile bg-orange">
						<div class="tile-content icon"><i class="fa fa-briefcase fa-3x"></i></div>
						<div class="tile-status">
							<span class="name">Documents</span>
							<div class="badge">10</div>
						</div>
					</div>
					<div class="tile bg-orange">
						<div class="tile-content icon"><i class="fa fa-plane fa-4x"></i></div>
						<div class="tile-status">
							<span class="name">Projects</span>
							<div class="badge">10</div>
						</div>
					</div>
					<div class="tile bg-pink">
						<div class="tile-content icon"><i class="fa fa-briefcase fa-3x"></i></div>
						<div class="tile-status">
							<span class="name">Events</span>
							<div class="badge">10</div>
						</div>
					</div>
					<div class="tile double bg-cardovan">
						<div class="tile-content padding5">
							<h4>Annoncements</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh ut laoreet...</p>
						</div>
						<div class="tile-status">
							<span class="name">John</span>
							<div class="badge">05/02/2013</div>
						</div>
					</div>
				</div>
			</div>
			<!-- chart -->
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Pie Chart</h3>
						</div>
						<div class="panel-body">
							<div id="pie-chart1" class="chart chart-medium">
							</div>
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
			<!--- chat --->
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-default">
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
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div id="calendar1">
					</div>
				</div>
			</div>
<?php include_once 'endcontainer.php' ?>
<?php include_once 'script.php' ?>
<script src="js/example/dashboard.js" type="text/javascript"></script>
<?php include_once 'footer.php' ?>
