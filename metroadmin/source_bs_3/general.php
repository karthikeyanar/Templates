<?php include_once 'start-page.php' ?>
<title>Pepper - General</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<!-- pepper theme -->
<link href="css/plugins/bootstrap-modal/bootstrap-modal.min.css" rel="stylesheet" type="text/css" />
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
<div class="page-header">
	<h1>General</h1>
</div>
<ul class="breadcrumb">
	<li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
	<li><a href="form_layout.php">UI Elements</a><i class="fa fa-angle-right"></i></li>
	<li class="active"><a href="elements.php">Wells</a></li>
	<li class="pull-right"><a href="#" data-dismiss='breadcrumb'><i class="fa fa-remove"></i></a></li>
</ul>  
<div class="row">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Alerts
						</h3>
					</div>
					<div class="panel-body">
						<h3 class="panel-title">Alert Warning</h3>
						<code>alert alert-warning</code>
						<div class="alert alert-warning alert-dismissable">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Warning!</strong> Best check yo self, you're not looking too good.
						</div>
						<h3 class="panel-title">Alert Error</h3>
						<code>alert alert-danger</code>
						<div class="alert alert-danger alert-dismissable">
							<button data-dismiss="alert" class="close" type="button">&times;</button>
							<strong>Oh snap!</strong> Change a few things up and try submitting again.
						</div>
						<h3 class="panel-title">Alert Success</h3>
						<code>alert alert-success</code>
						<div class="alert alert-success alert-dismissable">
							<button data-dismiss="alert" class="close" type="button">&times;</button>
							<strong>Well done!</strong> You successfully read this important alert message.
						</div>
						<h3 class="panel-title">Alert Info</h3>
						<code>alert alert-info</code>
						<div class="alert alert-info alert-dismissable">
							<button data-dismiss="alert" class="close" type="button">&times;</button>
							<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
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
							Notes
						</h3>
					</div>
					<div class="panel-body">
						<div class="note note-default">
							<h4>Default</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
						</div>
						<div class="note note-success">
							<h4>Success</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
						</div>
						<div class="note note-danger">
							<h4>Danger</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
						</div>
						<div class="note note-warning">
							<h4>Warning</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
						</div>
						<div class="note note-info">
							<h4>Info</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
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
							Labels
						</h3>
					</div>
					<div class="panel-body no-padding">
						<table class="table">
							<thead>
								<tr>
									<th>Labels</th>
									<th>Batches</th>
									<th>RoundLess Batches</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<span class="label">Default</span>
									</td>
									<td>
										<span class="badge">1</span>
									</td>
									<td>
										<span class="badge badge-roundless">1</span>
									</td>
								</tr>
								<tr>
									<td>
										<span class="label label-success">Success</span>
									</td>
									<td>
										<span class="badge badge-success">1</span>
									</td>
									<td>
										<span class="badge badge-success badge-roundless">1</span>
									</td>
								</tr>
								<tr>
									<td>
										<span class="label label-warning">Warning</span>
									</td>
									<td>
										<span class="badge badge-warning">1</span>
									</td>
									<td>
										<span class="badge badge-warning badge-roundless">1</span>
									</td>
								</tr>
								<tr>
									<td>
										<span class="label label-important">Important</span>
									</td>
									<td>
										<span class="badge badge-important">1</span>
									</td>
									<td>
										<span class="badge badge-important badge-roundless">1</span>
									</td>
								</tr>
								<tr>
									<td>
										<span class="label label-info">Info</span>
									</td>
									<td>
										<span class="badge badge-info">1</span>
									</td>
									<td>
										<span class="badge badge-info badge-roundless">1</span>
									</td>
								</tr>
								<tr>
									<td>
										<span class="label label-inverse">Inverse</span>
									</td>
									<td>
										<span class="badge badge-inverse">1</span>
									</td>
									<td>
										<span class="badge badge-inverse badge-roundless">1</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Background Colors</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<ul class="list-group no-margin">
									<li class="list-group-item bg-primary no-border margin-bottom-5">.bg-primary</li>
									<li class="list-group-item bg-success no-border margin-bottom-5">.bg-success</li>
									<li class="list-group-item bg-info no-border margin-bottom-5">.bg-info</li>
									<li class="list-group-item bg-warning no-border margin-bottom-5">.bg-warning</li>
									<li class="list-group-item bg-danger no-border margin-bottom-5">.bg-danger</li>
									<li class="list-group-item bg-danger no-border margin-bottom-5">.bg-danger</li>
									<li class="list-group-item bg-warning no-border margin-bottom-5">.bg-warning</li>
									<li class="list-group-item bg-success no-border margin-bottom-5">.bg-success</li>
									<li class="list-group-item bg-teal no-border margin-bottom-5">.bg-teal</li>
									<li class="list-group-item bg-purple no-border margin-bottom-5">.bg-purple</li>
									<li class="list-group-item bg-primary no-border margin-bottom-5">.bg-primary</li>
									<li class="list-group-item bg-black no-border margin-bottom-5">.bg-black</li>
									<li class="list-group-item bg-dark-purple no-border margin-bottom-5">.bg-dark-purple</li>
									<li class="list-group-item bg-primary no-border">.bg-primary</li>
								</ul>
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
							Foreground Colors</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<ul class="list-group no-margin">
									<li class="list-group-item bg-black no-border margin-bottom-5">.fg-white</li>
									<li class="list-group-item fg-black no-border">.fg-black</li>
								</ul>
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
							Tooltips 
						</h3>
					</div>
					<div class="panel-body">
						<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button><div class="clearfix">&nbsp;</div>
						<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button><div class="clearfix">&nbsp;</div>
						<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button><div class="clearfix">&nbsp;</div>
						<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Popovers 
						</h3>
					</div>
					<div class="panel-body">
						<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
						  Popover on left
						</button><div class="clearfix">&nbsp;</div>
						<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
						  Popover on top
						</button><div class="clearfix">&nbsp;</div>
						<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus	sagittis lacus vel augue laoreet rutrum faucibus.">
						  Popover on bottom
						</button><div class="clearfix">&nbsp;</div>
						<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
						  Popover on right
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Popup Confirm
						</h3>
					</div>
					<div class="panel-body no-padding">
						<form action="#" method="POST" class="form-horizontal form-row-separated form-striped">
							<div class="form-group">
								<label class="col-md-4 control-label">
									Popup Confirm
								</label>
								<div class="col-md-8">
									<a id="popoverconfirm" class='btn btn-success'>Confirm and Purchase</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Metro Style Alert & Confirm Dialog
						</h3>
					</div>
					<div class="panel-body no-padding">
						<form action="#" method="POST" class="form-horizontal form-row-separated form-striped">
							<div class="form-group">
								<label class="col-md-4 control-label">
									Alert
								</label>
								<div class="col-md-8">
									<a id="alert" class="btn btn-default">View Demo</a>
									<a id="alert2" class="btn btn-primary margin-left-10">View Demo Blue Color</a>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">
									Confirm
								</label>
								<div class="col-md-8">
									<a id="confirm" class="btn btn-primary">View Demo</a>
									<a id="confirm2" class="btn btn-primary margin-left-10">View Demo Blue Color</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Basic Tabs
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home">Home</a>
							</li>
							<li><a data-toggle="tab" href="#profile">Profile</a>
							</li>
							<li><a data-toggle="tab" href="#messages">Messages</a>
							</li>
							<li><a data-toggle="tab" href="#settings">Settings</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">
								<h4>Home Tab</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div id="profile" class="tab-pane fade">
								<h4>Profile Tab</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div id="messages" class="tab-pane fade">
								<h4>Messages Tab</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div id="settings" class="tab-pane fade">
								<h4>Settings Tab</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-md-12 -->
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Pill Tabs
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<!-- Nav tabs -->
						<ul class="nav nav-pills">
							<li class="active"><a data-toggle="tab" href="#home-pills">Home</a>
							</li>
							<li><a data-toggle="tab" href="#profile-pills">Profile</a>
							</li>
							<li><a data-toggle="tab" href="#messages-pills">Messages</a>
							</li>
							<li><a data-toggle="tab" href="#settings-pills">Settings</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div id="home-pills" class="tab-pane fade in active">
								<h4>Home Tab</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div id="profile-pills" class="tab-pane fade">
								<h4>Profile Tab</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div id="messages-pills" class="tab-pane fade">
								<h4>Messages Tab</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div id="settings-pills" class="tab-pane fade">
								<h4>Settings Tab</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-md-12 -->
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="well">
					<h4>Normal Well</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- /.col-md-4 -->
			<div class="col-md-12">
				<div class="well well-lg">
					<h4>Large Well</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- /.col-md-4 -->
			<div class="col-md-12">
				<div class="well well-sm">
					<h4>Small Well</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
				</div>
			</div>
			<!-- /.col-md-4 -->
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron">
					<h1>Jumbotron</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing.</p>
					<p><a role="button" class="btn btn-primary btn-lg">Learn more</a>
					</p>
				</div>
			</div>
			<!-- /.col-md-12 -->
		</div>
		<div class="row">
			<div class="col-md-12">
				 <div class="panel panel-default">
					<div class="panel-heading">
						Progress bars
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<h3>Basic</h3>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
							<span class="sr-only">60% Complete</span>
							</div>
						</div>
						<h3>With Label</h3>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
							60%
							</div>
						</div>
						<h3>Contextual alternatives</h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							<span class="sr-only">40% Complete (success)</span>
						  </div>
						</div>
						<div class="progress">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
							<span class="sr-only">20% Complete</span>
						  </div>
						</div>
						<div class="progress">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
							<span class="sr-only">60% Complete (warning)</span>
						  </div>
						</div>
						<div class="progress">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="sr-only">80% Complete</span>
						  </div>
						</div>
						<h3>Striped</h3>
						<div class="progress progress-striped">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							<span class="sr-only">40% Complete (success)</span>
						  </div>
						</div>
						<div class="progress progress-striped">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
							<span class="sr-only">20% Complete</span>
						  </div>
						</div>
						<div class="progress progress-striped">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
							<span class="sr-only">60% Complete (warning)</span>
						  </div>
						</div>
						<div class="progress progress-striped">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
						<h3>Animated</h3>
						<div class="progress progress-striped active">
						  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
							<span class="sr-only">45% Complete</span>
						  </div>
						</div>
						<h3>Stacked</h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-success" style="width: 35%">
							<span class="sr-only">35% Complete (success)</span>
						  </div>
						  <div class="progress-bar progress-bar-warning" style="width: 20%">
							<span class="sr-only">20% Complete (warning)</span>
						  </div>
						  <div class="progress-bar progress-bar-danger" style="width: 10%">
							<span class="sr-only">10% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-md-12 -->
		</div>
		<div class="row">
			<div class="col-md-12">
				 <div class="panel panel-default">
					<div class="panel-heading">
						List Group
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						 <h3>Basic</h3>
						 <ul class="list-group">
						  <li class="list-group-item">Cras justo odio</li>
						  <li class="list-group-item">Dapibus ac facilisis in</li>
						  <li class="list-group-item">Morbi leo risus</li>
						  <li class="list-group-item">Porta ac consectetur ac</li>
						  <li class="list-group-item">Vestibulum at eros</li>
						</ul>
						<h3>Badges</h3>
						<ul class="list-group">
						  <li class="list-group-item">
							<span class="badge">14</span>
							Cras justo odio
						  </li>
						</ul>
						<h3>Linked items</h3>
						<div class="list-group">
						  <a href="#" class="list-group-item active">
							Cras justo odio
						  </a>
						  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
						  <a href="#" class="list-group-item">Morbi leo risus</a>
						  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
						  <a href="#" class="list-group-item">Vestibulum at eros</a>
						</div>
						<h3>Linked items</h3>
						<ul class="list-group">
						  <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
						  <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
						  <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
						  <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
						</ul>
						<div class="list-group">
						  <a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
						  <a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
						  <a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
						  <a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
						</div>
						<h3>Custom content</h3>
						<div class="list-group">
						  <a class="list-group-item active" href="#">
							<h4 class="list-group-item-heading">List group item heading</h4>
							<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
						  </a>
						  <a class="list-group-item" href="#">
							<h4 class="list-group-item-heading">List group item heading</h4>
							<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
						  </a>
						  <a class="list-group-item" href="#">
							<h4 class="list-group-item-heading">List group item heading</h4>
							<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
						  </a>
						</div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-md-12 -->
		</div>
	</div>
</div>
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<!-- bootstrap modal --> 
<script src="js/plugins/bootstrap-modal/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="js/plugins/bootstrap-modal/bootstrap-modal.js" type="text/javascript"></script>
<?php include_once 'applicationscript.php' ?>
<script>
	$(function(){
		$("#alert").click(function(){
			APP.metroAlert("Hello world!", function() {
				alert("hello callback");
			});
		});
		$("#alert2").click(function(){
			APP.metroAlert("Hello world!", function() {
				alert("hello callback");
			}, { "okBtnClass" : "btn btn-default input-small", "modalClass": "bg-primary" });
		});
		$("#confirm").click(function(){
			APP.metroConfirm("Are you sure?", function(result) {
				alert("callback result=" + result);
			});
		});
		$("#confirm2").click(function(){
			APP.metroConfirm("Are you sure?", function(result) {
				alert("callback result=" + result);
			}, { "okBtnClass" : "btn btn-default input-small", "modalClass": "bg-primary" });
		});
		$("#popoverconfirm").click(function(){
			APP.popoverConfirm(this, "Confirm order and use selected payment method?", function(result) {
				alert("callback result=" + result);
			});
		});
 	});
</script>
<?php include_once 'end-page.php' ?>


