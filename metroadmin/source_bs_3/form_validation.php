<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	
 
			<div class="page-header">
				<h1>
					Form Validation</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
				<li><a href="form_basic.php">Forms</a> <i class="icon-angle-right"></i></li>
				<li><a href="form_validation.php">Form Validation</a> </li>
				<li class="pull-right"><a href="#" class="close" data-dismiss="breadcrumb">&times</a></li>
			</ul>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								<i class="icon-edit"></i>Form Validation</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST" class="form-horizontal form-validate">
							<div class="form-group">
								<div class="col-lg-12">
									<h3 class="panel-title">Login Information</h3>
								</div>
							</div>
							<div class="form-group">
								<label for="textfield" class="col-lg-2 control-label">
									Email</label>
								<div class="col-lg-4">
									<input type="text" name="email" id="email" data-rule-required="true" data-rule-email="true"
										data-msg-required="Required" data-placement="bottom" data-msg-email="Invalid Email"
										class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
									Password</label>
								<div class="col-lg-4">
									<input type="password" name="password" id="password" class="form-control" data-rule-minlength="6"
										data-msg-required="Required" data-rule-required="true" data-placement="bottom" />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">
									Cofirm Password</label>
								<div class="col-lg-4">
									<input type="password" name="confirm_password" id="confirm_password" class="form-control"
										data-msg-required="Required" data-rule-required="true" data-rule-equalto="#password"
										data-msg-equalto="These passwords don't match. Try again?" data-placement="bottom" />
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
									<h3 class="panel-title">Personal Information</h3>
								</div>
							</div>
							<div class="form-group">
								<label for="textfield" class="col-lg-2 control-label">
									First Name</label>
								<div class="col-lg-4">
									<input type="text" name="first_name" id="first_name" data-rule-required="true" data-msg-required="Required"
										data-placement="bottom" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="textfield" class="col-lg-2 control-label">
									Last Name</label>
								<div class="col-lg-4">
									<input type="text" name="last_name" id="last_name" data-rule-required="true" data-msg-required="Required"
										data-placement="bottom" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="textfield" class="col-lg-2 control-label">
									Sex</label>
								<div class="col-lg-4">
									<select name="sex" id="sex" class="form-control">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="textfield" class="col-lg-2 control-label">Birthday</label>
								<div class="col-lg-10">
									<div class="pull-left cutter-right">
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
									<div class="pull-left cutter-right">
										<input type="text" name="day" id="day" class="form-control" style="width:100px" placeholder="Day" data-rule-required="true"	data-msg-required="Required" data-placement="bottom" />
									</div>
									<div class="pull-left">
										<input type="text" name="year" id="year" class="form-control" style="width:100px" placeholder="Year" data-rule-required="true"	data-msg-required="Required" data-placement="bottom" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<button type="submit" class="btn btn-primary cutter-right">
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
	</div>
	<!-- end mainbar -->
</div>
<!-- end container -->
<?php include_once 'script.php' ?>
<?php include_once 'footer.php' ?>