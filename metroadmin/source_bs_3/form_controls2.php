<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
<div class="page-header">
	<h1>
		Form controls</h1>
</div>
<ul class="breadcrumb">
	<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="form_control.php">Forms</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="form_control.php">Form control</a> </li>
	<li class="pull-right"><a href="#" class="close">&times</a></li>
</ul>
<!-- Nav tabs -->
<ul class="nav nav-tabs nav-tab-custom">
	<li class="active"><a href="#form2" data-toggle="tab">Fluid Input Groups</a></li>
	<li><a href="#form3" data-toggle="tab">Validation States</a></li>
	<li><a href="#form4" data-toggle="tab">More Form Examples</a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content padding">
	<div class="tab-pane active" id="form2">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">
					Fluid Input Groups</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="#" method="POST">
				<div class="row">
					<div class="col-md-12">
						<h4>
							Checkbox Addons</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="input-group">
							<span class="input-group-addon">
								<input type="checkbox" name="chk" data-provide="fcheck" />
							</span>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group">
							<input type="text" class="form-control">
							<span class="input-group-addon">
								<input type="checkbox" name="chk" data-provide="fcheck" />
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>
							Button Addons</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									Go!</button>
							</span>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group">
							<input type="text" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									Go!</button>
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>
							Button Addons On Both Sides</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									Go!</button>
							</span>
							<input type="text" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									Go!</button>
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>
							Buttons With Dropdowns</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="input-group">
							<div class="input-group-btn">
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
									Action <i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group">
							<input type="text" class="form-control">
							<div class="input-group-btn">
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
									Action <i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu pull-right">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>
							Buttons With Dropdowns On Both Sides</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="input-group">
							<div class="input-group-btn">
								<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
									Action <i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
							<input type="text" class="form-control">
							<div class="input-group-btn">
								<button type="button" class="btn btn-pink dropdown-toggle" data-toggle="dropdown">
									Action <i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu pull-right">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>
							Segmented Buttons</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="input-group">
							<div class="input-group-btn">
								<button type="button" class="btn btn-primary" tabindex="-1">
									Action</button>
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
									tabindex="-1">
									<i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group">
							<input type="text" class="form-control">
							<div class="input-group-btn">
								<button type="button" class="btn btn-primary" tabindex="-1">
									Action</button>
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
									tabindex="-1">
									<i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="form3">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">
					Validation States</h3>
			</div>
			<div class="panel-body">
				<form action="#" method="POST">
				<div class="form-group has-success">
					<label class="control-label" for="inputSuccess">
						Input with success</label>
					<input type="text" class="form-control" id="inputSuccess">
				</div>
				<div class="form-group has-warning">
					<label class="control-label" for="inputWarning">
						Input with warning</label>
					<input type="text" class="form-control" id="inputWarning">
				</div>
				<div class="form-group has-error">
					<label class="control-label" for="inputError">
						Input with error</label>
					<input type="text" class="form-control" id="inputError">
				</div>
				</form>
			</div>
		</div>
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">
					Validation States With Icons</h3>
			</div>
			<div class="panel-body">
				<form action="#" method="POST">
				<div class="form-group">
					<label class="control-label" for="inputSuccess">
						Default input</label>
					<div class="input-icon right">
						<i class="fa fa-info-circle tooltips" data-original-title="Email address" data-container="body">
						</i>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group has-success">
					<label class="control-label" for="inputSuccess">
						Input with success</label>
					<div class="input-icon right">
						<i class="fa fa-check tooltips" data-original-title="You look OK!" data-container="body">
						</i>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group has-warning">
					<label class="control-label" for="inputWarning">
						Input with warning</label>
					<div class="input-icon right">
						<i class="fa fa-warning tooltips" data-original-title="please provide an email" data-container="body">
						</i>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group has-error">
					<label class="control-label" for="inputError">
						Input with error</label>
					<div class="input-icon right">
						<i class="fa fa-exclamation tooltips" data-original-title="please write a valid email"
							data-container="body"></i>
						<input type="text" class="form-control">
					</div>
				</div>
				</form>
			</div>
		</div>
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">
					Horizontal Form Validation States</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<form action="#" class="form-horizontal" method="POST">
					<div class="form-group">
						<label class="col-md-3 control-label" for="inputSuccess">
							Default input</label>
						<div class="col-md-9">
							<div class="input-icon right">
								<i class="fa fa-info-circle tooltips" data-original-title="Email address" data-container="body">
								</i>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group has-success">
						<label class="col-md-3 control-label" for="inputSuccess">
							Input with success</label>
						<div class="col-md-9">
							<div class="input-icon right">
								<i class="fa fa-check tooltips" data-original-title="You look OK!" data-container="body">
								</i>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group has-warning">
						<label class="col-md-3 control-label" for="inputWarning">
							Input with warning</label>
						<div class="col-md-9">
							<div class="input-icon right">
								<i class="fa fa-warning tooltips" data-original-title="please provide an email" data-container="body">
								</i>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group has-error">
						<label class="col-md-3 control-label" for="inputError">
							Input with error</label>
						<div class="col-md-9">
							<div class="input-icon right">
								<i class="fa fa-exclamation tooltips" data-original-title="please write a valid email"
									data-container="body"></i>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="form4">
		<div class="panel-body">
			<h4>
				Inline Form</h4>
			<form class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="exampleInputEmail2">
					Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label class="sr-only" for="exampleInputPassword2">
					Password</label>
				<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox">
					Remember me
				</label>
			</div>
			<button type="submit" class="btn btn-default">
				Sign in</button>
			</form>
			<hr>
			<h4>
				Inline Form With Icons</h4>
			<form class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="exampleInputEmail22">
					Email address</label>
				<div class="input-icon">
					<i class="fa fa-envelope"></i>
					<input type="email" class="form-control" id="exampleInputEmail22" placeholder="Enter email">
				</div>
			</div>
			<div class="form-group">
				<label class="sr-only" for="exampleInputPassword42">
					Password</label>
				<div class="input-icon">
					<i class="fa fa-user"></i>
					<input type="password" class="form-control" id="exampleInputPassword42" placeholder="Password">
				</div>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox">
					Remember me
				</label>
			</div>
			<button type="submit" class="btn btn-default">
				Sign in</button>
			</form>
			<hr>
			<h4>
				Horizontal Form</h4>
			<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="inputEmail1" class="col-md-2 control-label">
					Email</label>
				<div class="col-md-4">
					<input type="email" class="form-control" id="inputEmail1" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword12" class="col-md-2 control-label">
					Password</label>
				<div class="col-md-4">
					<input type="password" class="form-control" id="inputPassword12" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-4">
					<div class="checkbox">
						<label>
							<input type="checkbox">
							Remember me
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-10">
					<button type="submit" class="btn blue">
						Sign in</button>
				</div>
			</div>
			</form>
			<hr>
			<h4>
				Horizontal Form With Icons</h4>
			<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="inputEmail12" class="col-md-2 control-label">
					Email</label>
				<div class="col-md-4">
					<div class="input-icon">
						<i class="fa fa-envelope"></i>
						<input type="email" class="form-control" id="inputEmail12" placeholder="Email">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword1" class="col-md-2 control-label">
					Password</label>
				<div class="col-md-4">
					<div class="input-icon right">
						<i class="fa fa-user"></i>
						<input type="password" class="form-control" id="inputPassword1" placeholder="Password">
					</div>
					<div class="help-block">
						with right aligned icon
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-4">
					<div class="checkbox">
						<label>
							<input type="checkbox">
							Remember me
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-10">
					<button type="submit" class="btn green">
						Sign in</button>
				</div>
			</div>
			</form>
			<hr>
			<h4>
				Column Sizing</h4>
			<form role="form">
			<div class="row">
				<div class="col-md-2">
					<input type="text" class="form-control" placeholder=".col-md-2">
				</div>
				<div class="col-md-3">
					<input type="text" class="form-control" placeholder=".col-md-3">
				</div>
				<div class="col-md-4">
					<input type="text" class="form-control" placeholder=".col-md-4">
				</div>
				<div class="col-md-3">
					<input type="text" class="form-control" placeholder=".col-md-2">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<?php include_once 'endcontainer.php' ?>
<?php include_once 'script.php' ?>
<?php include_once 'footer.php' ?>