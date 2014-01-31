</head>
<body class="page-header-fixed page-boxed">
	<!-- header -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Pepper Admin</a>
				<div class="header-nav">
					<ul class="nav icon-nav">
						<li class="dropdown visible-md visible-lg">
							<a href="#" title="Settings" data-toggle="dropdown"><i class="fa fa-cog fa-lg"></i></a>
							<div class="dropdown-menu pull-right settings">
								<form class="form-horizontal" method="POST" action="#">
									<div class="form-group">
										<label class="control-label col-md-6">Layout Fixed</label>
										<div class="col-md-6">
											<input type="checkbox" id="fixedlayout" class="switch" data-on="primary" data-off="danger" data-on-label="Yes" data-off-label="No" />
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-6">Header Fixed</label>
										<div class="col-md-6">
											<input type="checkbox" id="fixedheader" class="switch" data-on="primary" data-off="danger" data-on-label="Yes" data-off-label="No" />
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-6">Footer Fixed</label>
										<div class="col-md-6">
											<input type="checkbox" id="fixedfooter" class="switch" data-on="primary" data-off="danger" data-on-label="Yes" data-off-label="No" />
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-6">Sidebar Fixed</label>
										<div class="col-md-6">
											<input type="checkbox" id="fixedsidebar" class="switch" data-on="primary" data-off="danger" data-on-label="Yes" data-off-label="No" />
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
	<!-- container -->
	<div class="page-container container">
		<!-- page sidebar -->
		<?php include_once 'sidebar.php' ?>
		<!-- end page sidebar -->
		<!-- page-content -->
		<div class="page-content">
