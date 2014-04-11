<?php include_once 'start-page.php' ?>
<title>Pepper - Panels</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
<div class="page-header">
	<h1>
		Panels
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
	<li class="active">
		<a href="elements.php">Panels</a>
	</li>
	<li class="pull-right">
		<a href="#" data-dismiss='breadcrumb'>
			<i class="fa fa-remove">
			</i>
		</a>
	</li>
</ul>
<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title margin-top-5 pull-left">
					Panel title
				</h3>
				<div class="pull-right">
					<div class="btn-group margin-right-10">
						<a class="btn btn-red btn-xs" href="#" data-toggle="dropdown">
							Action <i class='fa fa-angle-down'></i>
						</a>
						<ul class="dropdown-menu pull-right" role="menu">
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
					<div class="btn-group margin-right-10">
						<a class="btn btn-xs btn-blue" href="#" data-toggle="dropdown" data-hover="dropdown"
							data-close-others="true">
							Filter By <i class="fa fa-angle-down"></i>
						</a>
						<div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
							<label class="checkbox metro-checkbox">
								<input type="checkbox" id="finance" value="option1" />Finance
							</label>
							<label class="checkbox metro-checkbox">
								<input type="checkbox" id="finance" value="option1" />Membership
							</label>
							<label class="checkbox metro-checkbox no-wrap">
								<input type="checkbox" id="finance" value="option1" />Customer Support
							</label>
						</div>
					</div>
					<div class="btn-group panel-actions">
						<a class="down" data-action='collapse'><i class="fa fa-angle-down"></i></a>
						<a class="refresh"><i class="fa fa-refresh"></i></a>
						<a class="remove" data-action='remove'><i class="fa fa-times"></i></a>
					</div>
				</div>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				Panel heading without title
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body">
				Panel content
			</div>
			<div class="panel-footer">
				Panel footer
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				Panel header
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading no-padding">
				<h3 class="panel-title pull-left padding-10">
					Panel title
				</h3>
				<div class="pull-right">
					 <!-- Nav tabs -->
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
					  <li><a href="#profile" data-toggle="tab">Profile</a></li>
					  <li><a href="#messages" data-toggle="tab">Messages</a></li>
					  <li><a href="#settings" data-toggle="tab">Settings</a></li>
					</ul>
				</div>
			</div>
			<div class="panel-body">
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home">Home</div>
					<div class="tab-pane" id="profile">Profile</div>
					<div class="tab-pane" id="messages">Messages</div>
					<div class="tab-pane" id="settings">Settings</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">
					Panel Success
				</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">
					Panel Info
				</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">
					Panel Warning
				</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">
					Panel Danger
				</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Panel Primary
				</h3>
			</div>
			<div class="panel-body">
				Panel content
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
