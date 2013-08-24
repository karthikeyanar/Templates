</head>
<body>
<div id="navbar" class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Pepper Admin</a>
		</div>
		<div class="user-nav">
			<ul class="nav navbar-icon pull-right">
				<li>
					<a href="#" class="link" title="Settings" data-toggle="tooltip" data-placement="bottom">
						<i class="icon-cog icon-large"></i>
					</a>
				</li>
				<li>
					<a href="#" class="link" title="Lock" data-toggle="tooltip" data-placement="bottom">
						<i class="icon-lock icon-large"></i>
					</a>
				</li>
				<li class="dropdown user-box pull-right">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<img src="img/nophoto.jpg" />
						<span>Joe Nilson</span>
					</a>
					<div class="dropdown-menu">
						<div class="user-photo">
							<img src="img/photo.jpg" />
						</div>
						<div class="user-info">
							<p>
								Joe Nilson<br />
								test@gmail.com
							</p>
							<ul>
								<li>
									<a href="#">Profile</a>
								</li>
								<li>
									<a href="#">Settings</a>
								</li>
							</ul>
						</div>
						<div class="clearfix">
						</div>
						<div class="pull-right">
							<button class="btn btn-danger">
								Sign out
							</button>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- container -->
<div id="container">
	<?php include_once 'menu.php' ?>
	<!-- mainbar -->
	<div id="mainbar" class="container">
