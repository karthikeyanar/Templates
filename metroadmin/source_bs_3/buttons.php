<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
<div class="page-header">
	<h1>Buttons</h1>
</div>
<ul class="breadcrumb">
	<li>
		<a href="index.php">Home</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<a href="form_basic.php">UI Elements</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li class="active">
		<a href="elements.php">Buttons</a>
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
				<button class="btn btn-warning" type="button">Warning</button>
				<button class="btn btn-danger" type="button">Danger</button>
				<button class="btn btn-link" type="button">Link</button>
				<h4>Color Buttons</h4>
				<button class="btn btn-grey" type="button">Grey</button>
				<button class="btn btn-red" type="button">Red</button>
				<button class="btn btn-blue" type="button">Blue</button>
				<button class="btn btn-green" type="button">Green</button>
				<button class="btn btn-purple" type="button">Purple</button>
				<button class="btn btn-yellow" type="button">Yellow</button>
				<button class="btn btn-black" type="button">Black</button>
				<button class="btn btn-orange" type="button">Orange</button>
				<h4>Disabled</h4>
				<button class="btn btn-default" disabled="" type="button">Default</button>
				<button class="btn btn-primary" disabled="" type="button">Primary</button>
				<button class="btn btn-success" disabled="" type="button">Success</button>
				<button class="btn btn-info" disabled="" type="button">Info</button>
				<button class="btn btn-warning" disabled="" type="button">Warning</button>
				<button class="btn btn-danger" disabled="" type="button">Danger</button>
				<h4>Large Buttons</h4>
				<button class="btn btn-default btn-lg" type="button">Default</button>
				<button class="btn btn-primary btn-lg" type="button">Primary</button>
				<button class="btn btn-success btn-lg" type="button">Success</button>
				<button class="btn btn-info btn-lg" type="button">Info</button>
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
					<button class="btn btn-red" type="button">Left</button>
					<button class="btn btn-green" type="button">Center</button>
					<button class="btn btn-blue" type="button">Right</button>
				</div>
				<h4>Button Toolbar</h4>
				<div class="btn-toolbar">
					<div class="btn-group">
						<button class="btn btn-red" type="button">1</button>
						<button class="btn btn-green" type="button">2</button>
						<button class="btn btn-blue" type="button">3</button>
						<button class="btn btn-yellow" type="button">4</button>
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
						<button class="btn btn-red btn-lg" type="button">Left</button>
						<button class="btn btn-green btn-lg" type="button">Center</button>
						<button class="btn btn-blue btn-lg" type="button">Right</button>
					</div>
				</div>
				<div class="btn-toolbar margin-bottom-10">
					<div class="btn-group">
						<button class="btn btn-red" type="button">Left</button>
						<button class="btn btn-green" type="button">Center</button>
						<button class="btn btn-blue" type="button">Right</button>
					</div>
				</div>
				<div class="btn-toolbar margin-bottom-10">
					<div class="btn-group">
						<button class="btn btn-red btn-sm" type="button">Left</button>
						<button class="btn btn-green btn-sm" type="button">Center</button>
						<button class="btn btn-blue btn-sm" type="button">Right</button>
					</div>
				</div>
				<div class="btn-toolbar margin-bottom-10">
					<div class="btn-group">
						<button class="btn btn-red btn-xs" type="button">Left</button>
						<button class="btn btn-green btn-xs" type="button">Center</button>
						<button class="btn btn-blue btn-xs" type="button">Right</button>
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
				<div>
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
				<div class="btn-group">
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
						Primary <span class="caret"></span>
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
				<div class="btn-group">
					<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
						Success <span class="caret"></span>
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
				<div class="btn-group">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
						Info <span class="caret"></span>
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
				<div class="btn-group">
					<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
						Warning <span class="caret"></span>
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
				<div class="btn-group">
					<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
						Danger <span class="caret"></span>
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
				</div>
				<div>
					<div class="btn-group">
						<button type="button" class="btn btn-grey dropdown-toggle" data-toggle="dropdown">Grey
							<span class="caret"></span>
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
					<div class="btn-group">
						<button type="button" class="btn btn-red dropdown-toggle" data-toggle="dropdown">
							Red
							<span class="caret"></span>
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
					<div class="btn-group">
						<button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown">
							Blue
							<span class="caret"></span>
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
					<div class="btn-group">
						<button type="button" class="btn btn-green dropdown-toggle" data-toggle="dropdown">
							Green
							<span class="caret"></span>
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
				<!-- /btn-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-primary">Primary</button>
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
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
				<!-- /btn-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-success">Success</button>
					<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
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
				<!-- /btn-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-info">Info</button>
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
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
				<!-- /btn-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-warning">Warning</button>
					<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
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
				<!-- /btn-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-danger">Danger</button>
					<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
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
				<!-- /btn-group -->
			</div>
		</div>
	</div>
</div>
<?php include_once 'endcontainer.php' ?>
<?php include_once 'script.php' ?>
<?php include_once 'footer.php' ?>
