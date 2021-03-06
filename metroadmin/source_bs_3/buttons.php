<?php include_once 'start-page.php' ?>
<title>Pepper - Buttons</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
<div class="page-header">
	<h1>Buttons & DropDowns</h1>
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
	<li class="active">
		<a href="elements.php">Buttons & DropDowns</a>
	</li>
	<li class="pull-right">
		<a href="#" data-dismiss='breadcrumb'>
			<i class="fa fa-remove"></i>
		</a>
	</li>
</ul>
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Buttons</h3>
			</div>
			<div class="panel-body">
				<h4>Bootstrap Buttons</h4>
				<button class="btn btn-default" type="button">Default</button>
				<button class="btn btn-primary" type="button">Primary</button>
				<button class="btn btn-success" type="button">Success</button>
				<button class="btn btn-info" type="button">Info</button>
				<div class="clearfix">&nbsp;</div>
				<button class="btn btn-warning" type="button">Warning</button>
				<button class="btn btn-danger" type="button">Danger</button>
				<button class="btn btn-link" type="button">Link</button>
				<h4>Color Buttons</h4>
				<button class="btn btn-default" type="button">Grey</button>
				<button class="btn btn-danger" type="button">Red</button>
				<button class="btn btn-primary" type="button">Blue</button>
				<button class="btn btn-success" type="button">Green</button>
				<div class="clearfix">&nbsp;</div>
				<button class="btn btn-info" type="button">Purple</button>
				<button class="btn btn-default" type="button">Black</button>
				<button class="btn btn-warning" type="button">Orange</button>
				<h4>Split Buttons</h4>
				<div class="btn-group">
					<button class="btn btn-default" type="button">Default</button>
					<button type="button" class="btn btn-default">
						<span class="caret"></span>
					</button>
				</div>
				<div class="btn-group">
					<button class="btn btn-primary" type="button">Primary</button>
					<button type="button" class="btn btn-primary">
						<span class="caret"></span>
					</button>
				</div>
				<div class="btn-group">
					<button class="btn btn-success" type="button">Success</button>
					<button type="button" class="btn btn-success">
						<span class="caret"></span>
					</button>
				</div>
				<div class="btn-group">
					<button class="btn btn-info" type="button">Info</button>
					<button type="button" class="btn btn-info">
						<span class="caret"></span>
					</button>
				</div>
				<div class="clearfix">&nbsp;</div>
				<div class="btn-group">
					<button class="btn btn-warning" type="button">Warning</button>
					<button type="button" class="btn btn-warning">
						<span class="caret"></span>
					</button>
				</div>
				<div class="btn-group">
					<button class="btn btn-danger" type="button">Danger</button>
					<button type="button" class="btn btn-danger">
						<span class="caret"></span>
					</button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default" type="button">Grey</button>
					<button type="button" class="btn btn-default">
						<span class="caret"></span>
					</button>
				</div>
				<div class="btn-group">
					<button class="btn btn-danger" type="button">Red</button>
					<button type="button" class="btn btn-danger">
						<span class="caret"></span>
					</button>
				</div>
				<div class="clearfix">&nbsp;</div>
				<div class="btn-group">
					<button class="btn btn-primary" type="button">Blue</button>
					<button type="button" class="btn btn-primary">
						<span class="caret"></span>
					</button>
				</div>
				<div class="btn-group">
					<button class="btn btn-success" type="button">Green</button>
					<button type="button" class="btn btn-success">
						<span class="caret"></span>
					</button>
				</div>
				<div class="btn-group">
					<button class="btn btn-info" type="button">Purple</button>
					<button type="button" class="btn btn-info">
						<span class="caret"></span>
					</button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default" type="button">Black</button>
					<button type="button" class="btn btn-default">
						<span class="caret"></span>
					</button>
				</div>
				<div class="clearfix">&nbsp;</div>
				<div class="btn-group">
					<button class="btn btn-warning" type="button">Orange</button>
					<button type="button" class="btn btn-warning">
						<span class="caret"></span>
					</button>
				</div>
				<h4>Disabled</h4>
				<button class="btn btn-default" disabled="" type="button">Default</button>
				<button class="btn btn-primary" disabled="" type="button">Primary</button>
				<button class="btn btn-success" disabled="" type="button">Success</button>
				<button class="btn btn-info" disabled="" type="button">Info</button>
				<div class="clearfix">&nbsp;</div>
				<button class="btn btn-warning" disabled="" type="button">Warning</button>
				<button class="btn btn-danger" disabled="" type="button">Danger</button>
				<h4>Large Buttons</h4>
				<button class="btn btn-default btn-lg" type="button">Default</button>
				<button class="btn btn-primary btn-lg" type="button">Primary</button>
				<button class="btn btn-success btn-lg" type="button">Success</button>
				<button class="btn btn-info btn-lg" type="button">Info</button>
				<div class="clearfix">&nbsp;</div>
				<button class="btn btn-warning btn-lg" type="button">Warning</button>
				<button class="btn btn-danger btn-lg" type="button">Danger</button>
				<h4>Small Buttons</h4>
				<button class="btn btn-default btn-sm" type="button">Default</button>
				<button class="btn btn-primary btn-sm" type="button">Primary</button>
				<button class="btn btn-success btn-sm" type="button">Success</button>
				<button class="btn btn-info btn-sm" type="button">Info</button>
				<button class="btn btn-warning btn-sm" type="button">Warning</button>
				<button class="btn btn-danger btn-sm" type="button">Danger</button>
				<h4>Extra Small Buttons</h4>
				<button class="btn btn-default btn-xs" type="button">Default</button>
				<button class="btn btn-primary btn-xs" type="button">Primary</button>
				<button class="btn btn-success btn-xs" type="button">Success</button>
				<button class="btn btn-info btn-xs" type="button">Info</button>
				<button class="btn btn-warning btn-xs" type="button">Warning</button>
				<button class="btn btn-danger btn-xs" type="button">Danger</button>
				<h4>Block Buttons</h4>
				<button class="btn btn-default btn-block" type="button">Default</button>
				<button class="btn btn-primary btn-block" type="button">Primary</button>
				<h4>Normal Circle Buttons</h4>
				<button class="btn btn-default btn-circle" type="button"><i class="fa fa-check"></i>
				</button>
				<button class="btn btn-primary btn-circle" type="button"><i class="fa fa-list"></i>
				</button>
				<button class="btn btn-success btn-circle" type="button"><i class="fa fa-link"></i>
				</button>
				<button class="btn btn-info btn-circle" type="button"><i class="fa fa-check"></i>
				</button>
				<button class="btn btn-warning btn-circle" type="button"><i class="fa fa-times"></i>
				</button>
				<button class="btn btn-danger btn-circle" type="button"><i class="fa fa-heart"></i>
				</button>
				<br>
				<br>
				<h4>Large Circle Buttons</h4>
				<button class="btn btn-default btn-circle btn-lg" type="button"><i class="fa fa-check"></i>
				</button>
				<button class="btn btn-primary btn-circle btn-lg" type="button"><i class="fa fa-list"></i>
				</button>
				<button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-link"></i>
				</button>
				<button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-check"></i>
				</button>
				<button class="btn btn-warning btn-circle btn-lg" type="button"><i class="fa fa-times"></i>
				</button>
				<button class="btn btn-danger btn-circle btn-lg" type="button"><i class="fa fa-heart"></i>
				</button>
				<br>
				<br>
				<h4>Extra Large Circle Buttons</h4>
				<button class="btn btn-default btn-circle btn-xl" type="button"><i class="fa fa-check"></i>
				</button>
				<button class="btn btn-primary btn-circle btn-xl" type="button"><i class="fa fa-list"></i>
				</button>
				<button class="btn btn-success btn-circle btn-xl" type="button"><i class="fa fa-link"></i>
				</button>
				<button class="btn btn-info btn-circle btn-xl" type="button"><i class="fa fa-check"></i>
				</button>
				<button class="btn btn-warning btn-circle btn-xl" type="button"><i class="fa fa-times"></i>
				</button>
				<button class="btn btn-danger btn-circle btn-xl" type="button"><i class="fa fa-heart"></i>
				</button>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Button Groups</h3>
			</div>
			<div class="panel-body">
				<h4>Basic</h4>
				<div class="btn-group">
					<button class="btn btn-danger" type="button">Left</button>
					<button class="btn btn-success" type="button">Center</button>
					<button class="btn btn-primary" type="button">Right</button>
				</div>
				<h4>Button Toolbar</h4>
				<div class="btn-toolbar">
					<div class="btn-group">
						<button class="btn btn-danger" type="button">1</button>
						<button class="btn btn-success" type="button">2</button>
						<button class="btn btn-primary" type="button">3</button>
						<button class="btn btn-info" type="button">4</button>
					</div>
					<div class="btn-group">
						<button class="btn btn-primary" type="button">5</button>
						<button class="btn btn-success" type="button">6</button>
						<button class="btn btn-danger" type="button">7</button>
						<button class="btn btn-info" type="button">8</button>
					</div>
				</div>
				<h4>Button Group With Sizing</h4>
				<div class="btn-toolbar margin-bottom-10">
					<div class="btn-group">
						<button class="btn btn-danger btn-lg" type="button">Left</button>
						<button class="btn btn-success btn-lg" type="button">Center</button>
						<button class="btn btn-primary btn-lg" type="button">Right</button>
					</div>
				</div>
				<div class="btn-toolbar margin-bottom-10">
					<div class="btn-group">
						<button class="btn btn-danger" type="button">Left</button>
						<button class="btn btn-success" type="button">Center</button>
						<button class="btn btn-primary" type="button">Right</button>
					</div>
				</div>
				<div class="btn-toolbar margin-bottom-10">
					<div class="btn-group">
						<button class="btn btn-danger btn-sm" type="button">Left</button>
						<button class="btn btn-success btn-sm" type="button">Center</button>
						<button class="btn btn-primary btn-sm" type="button">Right</button>
					</div>
				</div>
				<div class="btn-toolbar margin-bottom-10">
					<div class="btn-group">
						<button class="btn btn-danger btn-xs" type="button">Left</button>
						<button class="btn btn-success btn-xs" type="button">Center</button>
						<button class="btn btn-primary btn-xs" type="button">Right</button>
					</div>
				</div>
				<h4>Nesting Button Group</h4>
				<div class="btn-group">
					<button type="button" class="btn btn-default">1</button>
					<button type="button" class="btn btn-default">2</button>
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							Dropdown
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Dropdown link</a>
							</li>
							<li>
								<a href="#">Dropdown link</a>
							</li>
						</ul>
					</div>
				</div>
				<h4>Vertical variation</h4>
				<div class="btn-group-vertical">
					<button class="btn btn-default" type="button">Button</button>
					<button class="btn btn-default" type="button">Button</button>
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" id="btnGroupVerticalDrop1">
							Dropdown
							<span class="caret"></span>
						</button>
						<ul aria-labelledby="btnGroupVerticalDrop1" role="menu" class="dropdown-menu">
							<li>
								<a href="#">Dropdown link</a>
							</li>
							<li>
								<a href="#">Dropdown link</a>
							</li>
						</ul>
					</div>
					<button class="btn btn-default" type="button">Button</button>
					<button class="btn btn-default" type="button">Button</button>
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" id="btnGroupVerticalDrop2">
							Dropdown
							<span class="caret"></span>
						</button>
						<ul aria-labelledby="btnGroupVerticalDrop2" role="menu" class="dropdown-menu">
							<li>
								<a href="#">Dropdown link</a>
							</li>
							<li>
								<a href="#">Dropdown link</a>
							</li>
						</ul>
					</div>
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" id="btnGroupVerticalDrop3">
							Dropdown
							<span class="caret"></span>
						</button>
						<ul aria-labelledby="btnGroupVerticalDrop3" role="menu" class="dropdown-menu">
							<li>
								<a href="#">Dropdown link</a>
							</li>
							<li>
								<a href="#">Dropdown link</a>
							</li>
						</ul>
					</div>
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" id="btnGroupVerticalDrop4">
							Dropdown
							<span class="caret"></span>
						</button>
						<ul aria-labelledby="btnGroupVerticalDrop4" role="menu" class="dropdown-menu">
							<li>
								<a href="#">Dropdown link</a>
							</li>
							<li>
								<a href="#">Dropdown link</a>
							</li>
						</ul>
					</div>
				</div>
				<h4>Justified link variation</h4>
				<div class="btn-group btn-group-justified">
					<a role="button" class="btn btn-default">Left</a>
					<a role="button" class="btn btn-default">Middle</a>
					<a role="button" class="btn btn-default">Right</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Button dropdowns</h3>
			</div>
			<div class="panel-body">
				<h4>Single button dropdowns</h4>
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						Default <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
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
				<h4>Split button dropdowns</h4>
				<div class="btn-group">
					<button type="button" class="btn btn-default">Default</button>
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
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
			</div>
		</div>
	</div>
</div>
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
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<?php include_once 'applicationscript.php' ?>
<?php include_once 'end-page.php' ?>