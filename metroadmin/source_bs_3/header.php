<!-- header -->
<div class="header navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target=".page-sidebar-left" type="button" class="navbar-toggle page-sidebar-toggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand">Pepper</a>
			<div class="header-nav">
				<ul class="nav icon-nav">
					<li class="dropdown settings">
						<a href="#" title="Settings" data-toggle="dropdown" rel="tooltip" data-placement="bottom"><i class="fa fa-cog fa-lg"></i></a>
						<div class="dropdown-menu dropdown-menu-right settings hold-on-click">
							<form id="frmPepperSettings" class="form-horizontal form-row-separated" onsubmit="return false" role="form">
								<div class="form-group">
									<label class="col-md-4 control-label">Layout</label>
									<div class="col-md-8">
										<select id="layout" name="layout" class="form-control input-sm">
											<option value="default">Default</option>
											<option value="fixed">Fixed</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Header</label>
									<div class="col-md-8">
										<select id="header" name="header" class="form-control input-sm">
											<option value="default">Default</option>
											<option value="fixed">Fixed</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Sidebar</label>
									<div class="col-md-8">
										<select id="sidebar" name="sidebar" class="form-control input-sm">
											<option value="default">Default</option>
											<option value="fixed">Fixed</option>
										</select>
									</div>
								</div> 
							</form>
						</div>
					</li>
					<li class="dropdown">
						<a href="#" title="Lock" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-lock fa-lg"></i></a>
					</li>
					<li>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span>Joe Nilson</span></a>
						<ul class="dropdown-menu pull-right" role="menu">
							<li><a href="#">Edit Profile</a></li>
							<li><a href="#">Account Settings</a></li>
							<li class="divider"></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!-- end header -->