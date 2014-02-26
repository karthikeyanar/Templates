<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
<div class="page-header">
	<h1>
		Button Dropdowns
	</h1>
</div>
<ul class="breadcrumb">
	<li>
		<a href="index.php">Home</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<a href="form_layout.php">UI Elements</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<a href="elements.php">Button Dropdowns</a>
	</li>
	<li class="pull-right">
		<a href="#" class="close">&times</a>
	</li>
</ul>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					Sub menus on dropdowns
				</h3>
			</div>
			<div class="panel-body">
				<div class="clearfix">
					<div class="pull-left margin-right-10">
						<p class="muted">
							Default
						</p>
						<div class="dropdown clearfix">
							<ul aria-labelledby="dropdownMenu" style="display: block; position: static" role="menu"
								class="dropdown-menu">
								<li>
									<a href="#" tabindex="-1">Action</a>
								</li>
								<li>
									<a href="#" tabindex="-1">Another action</a>
								</li>
								<li>
									<a href="#" tabindex="-1">Something else here</a>
								</li>
								<li class="divider"></li>
								<li class="dropdown-submenu">
									<a href="#" tabindex="-1">More options</a>
									<ul class="dropdown-menu">
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="pull-left margin-right-10">
						<p class="muted">
							Dropup
						</p>
						<div class="dropup">
							<ul aria-labelledby="dropdownMenu" style="display: block; position: static" role="menu"
								class="dropdown-menu">
								<li>
									<a href="#" tabindex="-1">Action</a>
								</li>
								<li>
									<a href="#" tabindex="-1">Another action</a>
								</li>
								<li>
									<a href="#" tabindex="-1">Something else here</a>
								</li>
								<li class="divider"></li>
								<li class="dropdown-submenu">
									<a href="#" tabindex="-1">More options</a>
									<ul class="dropdown-menu">
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="pull-left margin-right-10">
						<p class="muted">
							Left submenu
						</p>
						<div class="dropdown">
							<ul aria-labelledby="dropdownMenu" style="display: block; position: static" role="menu"
								class="dropdown-menu">
								<li>
									<a href="#" tabindex="-1">Action</a>
								</li>
								<li>
									<a href="#" tabindex="-1">Another action</a>
								</li>
								<li>
									<a href="#" tabindex="-1">Something else here</a>
								</li>
								<li class="divider"></li>
								<li class="dropdown-submenu">
									<a href="#" tabindex="-1">More options</a>
									<ul class="dropdown-menu">
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
										<li>
											<a href="#" tabindex="-1">Second level link</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					Overview
				</h3>
			</div>
			<div class="panel-body">
				<div style="margin: 0;" class="btn-toolbar">
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
							Action <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
							Action <span class="caret"></span>
						</button>
						<ul class="dropdown-menu primary">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-danger dropdown-toggle">
							Danger <span class="caret"></span>
						</button>
						<ul class="dropdown-menu danger">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-warning dropdown-toggle">
							Warning <span class="caret"></span>
						</button>
						<ul class="dropdown-menu warning">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-success dropdown-toggle">
							Success <span class="caret"></span>
						</button>
						<ul class="dropdown-menu success">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-info dropdown-toggle">
							Info <span class="caret"></span>
						</button>
						<ul class="dropdown-menu info">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-inverse dropdown-toggle">
							Inverse <span class="caret"></span>
						</button>
						<ul class="dropdown-menu inverse">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<div class="clearfix">&nbsp;</div>
				</div>
				<div style="margin: 20px 0 0 0;" class="btn-toolbar">
					<!-- /btn-group -->
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-purple dropdown-toggle">
							Purple <span class="caret"></span>
						</button>
						<ul class="dropdown-menu purple">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-yellow dropdown-toggle">
							Pink <span class="caret"></span>
						</button>
						<ul class="dropdown-menu pink">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-teal dropdown-toggle">
							Teal <span class="caret"></span>
						</button>
						<ul class="dropdown-menu teal">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-cardovan dropdown-toggle">
							Cardovan <span class="caret"></span>
						</button>
						<ul class="dropdown-menu cardovan">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					Split button dropdowns
				</h3>
			</div>
			<div class="panel-body">
				<div style="margin: 0;" class="btn-toolbar">
					<div class="btn-group">
						<button class="btn btn-default">
							Action
						</button>
						<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button class="btn btn-primary">
							Action
						</button>
						<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu primary">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button class="btn btn-danger">
							Danger
						</button>
						<button data-toggle="dropdown" class="btn btn-danger dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu danger">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button class="btn btn-warning">
							Warning
						</button>
						<button data-toggle="dropdown" class="btn btn-warning dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu warning">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button class="btn btn-success">
							Success
						</button>
						<button data-toggle="dropdown" class="btn btn-success dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu success">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button class="btn btn-info">
							Info
						</button>
						<button data-toggle="dropdown" class="btn btn-info dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu info">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button class="btn btn-inverse">
							Inverse
						</button>
						<button data-toggle="dropdown" class="btn btn-inverse dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu inverse">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="clearfix">
						&nbsp;
					</div>
				</div>
				<div style="margin: 20px 0 0 0;" class="btn-toolbar">
					<div class="btn-group">
						<button class="btn btn-purple">
							Purple
						</button>
						<button data-toggle="dropdown" class="btn btn-purple dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu purple">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button class="btn btn-yellow">
							Pink
						</button>
						<button data-toggle="dropdown" class="btn btn-yellow dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu pink">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button class="btn btn-teal">
							Teal
						</button>
						<button data-toggle="dropdown" class="btn btn-teal dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu teal">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group">
						<button class="btn btn-cardovan">
							Cardovan
						</button>
						<button data-toggle="dropdown" class="btn btn-cardovan dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu cardovan">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					Dropup menus
				</h3>
			</div>
			<div class="panel-body">
				<div style="margin: 0;" class="btn-toolbar">
					<div class="btn-group dropup">
						<button class="btn btn-default">
							Dropup
						</button>
						<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
					<div class="btn-group dropup">
						<button class="btn btn-default">
							Right dropup
						</button>
						<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<!-- /btn-group -->
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once 'endcontainer.php' ?>
<?php include_once 'script.php' ?>
<?php include_once 'footer.php' ?>
