<!-- header -->
<div class="header navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<!-- navbar-header -->
		<div class="navbar-header company-info">
			<button type="button" class="navbar-toggle page-sidebar-toggle">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar">
				</span>
			</button>
			<a href="index.php" class="navbar-brand">Pepper</a>
		</div>
		<!-- end navbar-header -->
		<!-- navbar-header -->
		<div class="navbar-header top-menu">
			<ul>
				<li class="dropdown settings"><a href="#" title="Settings" data-toggle="dropdown"
					rel="tooltip" data-placement="bottom"><i class="fa fa-cog fa-lg"></i></a>
					<div class="dropdown-menu dropdown-menu-right settings hold-on-click">
						<form id="frmPepperSettings" class="form-horizontal form-row-separated" onsubmit="return false"
						role="form">
						<div class="form-group">
							<label class="col-md-4 control-label">
								Layout</label>
							<div class="col-md-8">
								<select id="layout" name="layout" class="form-control input-sm">
									<option value="default">Default</option>
									<option value="fixed">Fixed</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">
								Header</label>
							<div class="col-md-8">
								<select id="header" name="header" class="form-control input-sm">
									<option value="default">Default</option>
									<option value="fixed">Fixed</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">
								Sidebar</label>
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
				<li class="dropdown"><a href="lock.php" title="Lock" data-toggle="tooltip" data-placement="bottom">
					<i class="fa fa-lock fa-lg"></i></a></li>
				<li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span>Jarge Lue</span></a>
					<ul class="dropdown-menu pull-right" role="menu">
						<li><a href="#">Edit Profile</a></li>
						<li><a href="#">Account Settings</a></li>
						<li class="divider"></li>
						<li><a href="#">Logout</a></li>
					</ul>
				</li>
			</ul>
			<button data-target=".hor-menu" data-toggle="collapse" class="navbar-toggle hor-menu-toggle" type="button">
				<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
					class="icon-bar"></span><span class="icon-bar"></span>
			</button>
		</div>
		<!-- end navbar-header -->
		<!-- navbar-collapse -->
		<div class="hor-menu navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
				<li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown
					<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li><a href="#">Separated link</a></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end navbar-collapse -->
	</div>
</div>
<!-- end header -->
