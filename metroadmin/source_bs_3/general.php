<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
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
						<div class="alert alert-warning">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Warning!</strong> Best check yo self, you're not looking too good.
						</div>
						<h3 class="panel-title">Alert Error</h3>
						<code>alert alert-danger</code>
						<div class="alert alert-danger">
							<button data-dismiss="alert" class="close" type="button">&times;</button>
							<strong>Oh snap!</strong> Change a few things up and try submitting again.
						</div>
						<h3 class="panel-title">Alert Success</h3>
						<code>alert alert-success</code>
						<div class="alert alert-success">
							<button data-dismiss="alert" class="close" type="button">&times;</button>
							<strong>Well done!</strong> You successfully read this important alert message.
						</div>
						<h3 class="panel-title">Alert Info</h3>
						<code>alert alert-info</code>
						<div class="alert alert-info">
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
						<div class="note">
							<h4>Default</h4>
							<p>Striped tables are styled via the <code>:nth-child</code> CSS selector, which is not available in Internet Explorer 8.</p>
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
							<div class="col-md-3">
									<div class="well bg-white no-margin">
								</div>
								<code>.bg-white</code>
							</div>
							<div class="col-md-3">
									<div class="well no-border bg-pink no-margin">
								</div>
								<code>.bg-pink</code>
							</div>
							<div class="col-md-3">
									<div class="well no-border bg-red no-margin">
								</div>
								<code>.bg-red</code>
							</div>
							<div class="col-md-3 margin-bottom-10">
									<div class="well no-border bg-dark-red no-margin">
								</div>
								<code>.bg-dark-red</code>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
									<div class="well no-border bg-dark-orange no-margin">
								</div>
								<code>.bg-dark-orange</code>
							</div>
							<div class="col-md-3">
									<div class="well no-border bg-orange no-margin">
								</div>
								<code>.bg-orange</code>
							</div>
							<div class="col-md-3">
									<div class="well no-border bg-light-green no-margin">
								</div>
								<code>.bg-light-green</code>
							</div>
							<div class="col-md-3 margin-bottom-10">
									<div class="well no-border bg-green no-margin">
								</div>
								<code>.bg-green</code>
							</div>
						</div>
						<div class="row">
								
							<div class="col-md-3">
									<div class="well no-border bg-light-teal no-margin">
								</div>
								<code>.bg-light-teal</code>
							</div>
							<div class="col-md-3">
									<div class="well no-border bg-teal no-margin">
								</div>
								<code>.bg-teal</code>
							</div>
								
							<div class="col-md-3 margin-bottom-10">
									<div class="well no-border bg-dark-purple no-margin">
								</div>
								<code>.bg-dark-purple</code>
							</div>
							<div class="col-md-3 margin-bottom-10">
									<div class="well no-border bg-purple no-margin">
								</div>
								<code>.bg-purple</code>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
									<div class="well no-border bg-light-blue no-margin">
								</div>
								<code>.bg-light-blue</code>
							</div>
							<div class="col-md-3">
									<div class="well no-border bg-blue no-margin">
								</div>
								<code>.bg-blue</code>
							</div>
							<div class="col-md-3">
									<div class="well no-border bg-dark-blue no-margin">
								</div>
								<code>.bg-dark-blue</code>
							</div>
							<div class="col-md-3 margin-bottom-10">
									<div class="well no-border bg-skyblue no-margin">
								</div>
								<code>.bg-skyblue</code>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 margin-bottom-10">
								<div class="well no-border bg-black no-margin">
								</div>
								<code>.bg-black</code>
							</div>
							<div class="col-md-3">
								<div class="well no-border bg-grey no-margin">
								</div>
								<code>.bg-grey</code>
							</div> 
							<div class="col-md-3">
								<div class="well no-border bg-yellow no-margin">
								</div>
								<code>.bg-yellow</code>
							</div>
							<div class="col-md-3">
								<div class="well no-border bg-cardovan no-margin">
								</div>
								<code>.bg-cardovan</code>
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
							<div class="col-md-3">
								<div class="well bg-black no-border fg-white no-margin">
									Title
								</div>
								<code>.fg-white</code>
							</div>
							<div class="col-md-3">
								<div class="well bg-white fg-pink no-margin">
								Title
								</div>
								<code>.fg-pink</code>
							</div>
							<div class="col-md-3">
								<div class="well bg-white fg-red no-margin">
								Title
								</div>
								<code>.fg-red</code>
							</div>
							<div class="col-md-3 margin-bottom-10">
									<div class="well bg-white fg-dark-red no-margin">
									Title
								</div>
								<code>.fg-dark-red</code>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
									<div class="well bg-white fg-dark-orange no-margin">
									Title
								</div>
								<code>.fg-dark-orange</code>
							</div>
							<div class="col-md-3">
									<div class="well bg-white fg-orange no-margin">
									Title
								</div>
								<code>.fg-orange</code>
							</div>
							<div class="col-md-3">
									<div class="well bg-white fg-light-green no-margin">
									Title
								</div>
								<code>.fg-light-green</code>
							</div>
							<div class="col-md-3 margin-bottom-10">
									<div class="well bg-white fg-green no-margin">
									Title
								</div>
								<code>.fg-green</code>
							</div>
						</div>
						<div class="row">
											
							<div class="col-md-3">
									<div class="well bg-white fg-light-teal no-margin">
									Title
								</div>
								<code>.fg-light-teal</code>
							</div>
							<div class="col-md-3">
									<div class="well bg-white fg-teal no-margin">
									Title
								</div>
								<code>.fg-teal</code>
							</div>
											
							<div class="col-md-3 margin-bottom-10">
									<div class="well bg-white fg-dark-purple no-margin">
									Title
								</div>
								<code>.fg-dark-purple</code>
							</div>
							<div class="col-md-3 margin-bottom-10">
									<div class="well bg-white fg-purple no-margin">
								</div>
								<code>.fg-purple</code>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
									<div class="well bg-white fg-light-blue no-margin">
									Title
								</div>
								<code>.fg-light-blue</code>
							</div>
							<div class="col-md-3">
									<div class="well bg-white fg-blue no-margin">
									Title
								</div>
								<code>.fg-blue</code>
							</div>
							<div class="col-md-3">
									<div class="well bg-white fg-dark-blue no-margin">
									Title
								</div>
								<code>.fg-dark-blue</code>
							</div>
							<div class="col-md-3 margin-bottom-10">
									<div class="well bg-white fg-skyblue no-margin">
									Title
								</div>
								<code>.fg-skyblue</code>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 margin-bottom-10">
								<div class="well bg-white fg-black no-margin">
								Title
								</div>
								<code>.fg-black</code>
							</div>
							<div class="col-md-3">
								<div class="well bg-white fg-grey no-margin">
								Title
								</div>
								<code>.fg-grey</code>
							</div> 
							<div class="col-md-3">
								<div class="well bg-white fg-yellow no-margin">
								Title
								</div>
								<code>.fg-yellow</code>
							</div>
							<div class="col-md-3">
								<div class="well bg-white fg-cardovan no-margin">
								Title
								</div>
								<code>.fg-cardovan</code>
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
									<a id="alert2" class="btn btn-blue margin-left-10">View Demo Blue Color</a>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">
									Confirm
								</label>
								<div class="col-md-8">
									<a id="confirm" class="btn btn-blue">View Demo</a>
									<a id="confirm2" class="btn btn-blue margin-left-10">View Demo Blue Color</a>
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
	</div>
</div>
<?php include_once 'endcontainer.php' ?>
<?php include_once 'script.php' ?>
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
			}, { "okBtnClass" : "btn btn-default input-small", "modalClass": "bg-skyblue fg-white" });
		});
		$("#confirm").click(function(){
			APP.metroConfirm("Are you sure?", function(result) {
				alert("callback result=" + result);
			});
		});
		$("#confirm2").click(function(){
			APP.metroConfirm("Are you sure?", function(result) {
				alert("callback result=" + result);
			}, { "okBtnClass" : "btn btn-default input-small", "modalClass": "bg-skyblue fg-white" });
		});
		$("#popoverconfirm").click(function(){
			APP.popoverConfirm(this, "Confirm order and use selected payment method?", function(result) {
				alert("callback result=" + result);
			});
		});
 	});
</script>
<?php include_once 'footer.php' ?>
