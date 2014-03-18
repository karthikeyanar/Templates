<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'startcontainer.php' ?>
			<div class="page-header">
				<h1>
					Form Validation</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="form_layout.php">Forms</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="form_validation.php">Form Validation</a> </li>
				<li class="pull-right"><a href="#" class="close" data-dismiss="breadcrumb">&times</a></li>
			</ul>
			<div class="row">
				<div class="col-md-12">
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
									<input type="text" class="form-control" id="inputSuccess" />
								</div>
								<div class="form-group has-warning">
									<label class="control-label" for="inputWarning">
										Input with warning</label>
									<input type="text" class="form-control" id="inputWarning" />
								</div>
								<div class="form-group has-error">
									<label class="control-label" for="inputError">
										Input with error</label>
									<input type="text" class="form-control" id="inputError" />
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
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="form-group has-success">
									<label class="control-label" for="inputSuccess">
										Input with success</label>
									<div class="input-icon right">
										<i class="fa fa-check tooltips" data-original-title="You look OK!" data-container="body">
										</i>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="form-group has-warning">
									<label class="control-label" for="inputWarning">
										Input with warning</label>
									<div class="input-icon right">
										<i class="fa fa-warning tooltips" data-original-title="please provide an email" data-container="body">
										</i>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="form-group has-error">
									<label class="control-label" for="inputError">
										Input with error</label>
									<div class="input-icon right">
										<i class="fa fa-exclamation tooltips" data-original-title="please write a valid email"
											data-container="body"></i>
										<input type="text" class="form-control" />
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
								<form action="#" class="form-horizontal" method="POST">
									<div class="form-group">
										<label class="col-md-3 control-label" for="inputSuccess">
											Default input</label>
										<div class="col-md-9">
											<div class="input-icon right">
												<i class="fa fa-info-circle tooltips" data-original-title="Email address" data-container="body">
												</i>
												<input type="text" class="form-control" />
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
												<input type="text" class="form-control" />
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
												<input type="text" class="form-control" />
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
												<input type="text" class="form-control" />
											</div>
										</div>
									</div>
									</form>
							</div>
						</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Form Validation</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST" class="form-horizontal form-validate">
							<div class="form-group">
								<div class="col-md-12">
									<h3 class="panel-title">Login Information</h3>
								</div>
							</div>
							<div class="form-group">
								<label for="textfield" class="col-md-2 control-label">
									Email</label>
								<div class="col-md-4">
									<input type="text" name="email" id="email" data-rule-required="true" data-rule-email="true"
										data-msg-required="Required" data-placement="bottom" data-msg-email="Invalid Email"
										class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-md-2 control-label">
									Password</label>
								<div class="col-md-4">
									<input type="password" name="password" id="password" class="form-control" data-rule-minlength="6"
										data-msg-required="Required" data-rule-required="true" data-placement="bottom" />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-md-2 control-label">
									Cofirm Password</label>
								<div class="col-md-4">
									<input type="password" name="confirm_password" id="confirm_password" class="form-control"
										data-msg-required="Required" data-rule-required="true" data-rule-equalto="#password"
										data-msg-equalto="These passwords don't match. Try again?" data-placement="bottom" />
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<h3 class="panel-title">Personal Information</h3>
								</div>
							</div>
							<div class="form-group">
								<label for="textfield" class="col-md-2 control-label">
									First Name</label>
								<div class="col-md-4">
									<input type="text" name="first_name" id="first_name" data-rule-required="true" data-msg-required="Required"
										data-placement="bottom" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="textfield" class="col-md-2 control-label">
									Last Name</label>
								<div class="col-md-4">
									<input type="text" name="last_name" id="last_name" data-rule-required="true" data-msg-required="Required"
										data-placement="bottom" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="textfield" class="col-md-2 control-label">
									Gender</label>
								<div class="col-md-4">
									<select name="sex" id="sex" class="form-control">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="textfield" class="col-md-2 control-label">Birthday</label>
								<div class="col-md-10">
									<div class="pull-left margin-right-10">
										<select name="Month" id="Month" class="form-control" data-rule-required="true" data-msg-required="Required" data-placement="bottom">
											<option value="">Month</option>
											<option value="1">January</option>
											<option value="2">February</option>
											<option value="3">March</option>
											<option value="4">April</option>
											<option value="5">May</option>
											<option value="6">June</option>
											<option value="7">July</option>
											<option value="8">August</option>
											<option value="9">September</option>
											<option value="10">October</option>
											<option value="11">November</option>
											<option value="12">December</option>
										</select>
									</div>
									<div class="pull-left margin-right-10">
										<input type="text" name="day" id="day" class="form-control" style="width:100px" placeholder="Day" data-rule-required="true"	data-msg-required="Required" data-placement="bottom" />
									</div>
									<div class="pull-left">
										<input type="text" name="year" id="year" class="form-control" style="width:100px" placeholder="Year" data-rule-required="true"	data-msg-required="Required" data-placement="bottom" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-10 col-md-offset-2">
									<button type="submit" class="btn btn-blue margin-right-10">
										Save</button>
									<button type="button" class="btn btn-danger">
										Cancel</button>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
<?php include_once 'endcontainer.php' ?>
<?php include_once 'script.php' ?>
<?php include_once 'applicationscript.php' ?><?php include_once 'footer.php' ?>