<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	<?php include_once 'sidebar.php' ?>
	<!-- mainbar -->
	<div id="mainbar">
		<div class="container-fluid">
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
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-title">
							<h4>
								<i class="icon-edit"></i>Form Validation</h4>
						</div>
						<div class="box-content">
							<form action="#" method="POST" class="form-horizontal form-validate">
							<div class="control-group">
								<h4>
									Login Information</h4>
							</div>
							<div class="control-group">
								<label for="textfield" class="control-label">
									Email</label>
								<div class="controls">
									<input type="text" name="email" id="email" data-rule-required="true" data-rule-email="true"
										data-msg-required="Required" data-placement="bottom" data-msg-email="Invalid Email"
										class="input-xlarge" />
								</div>
							</div>
							<div class="control-group">
								<label for="password" class="control-label">
									Password</label>
								<div class="controls">
									<input type="password" name="password" id="password" class="input-xlarge" data-rule-minlength="6"
										data-msg-required="Required" data-rule-required="true" data-placement="bottom" />
								</div>
							</div>
							<div class="control-group">
								<label for="password" class="control-label">
									Cofirm Password</label>
								<div class="controls">
									<input type="password" name="confirm_password" id="confirm_password" class="input-xlarge"
										data-msg-required="Required" data-rule-required="true" data-rule-equalto="#password"
										data-msg-equalto="These passwords don't match. Try again?" data-placement="bottom" />
								</div>
							</div>
							<div class="control-group">
								<h4>
									Personal Information</h4>
							</div>
							<div class="control-group">
								<label for="textfield" class="control-label">
									First Name</label>
								<div class="controls">
									<input type="text" name="first_name" id="first_name" data-rule-required="true" data-msg-required="Required"
										data-placement="bottom" class="input-xlarge" />
								</div>
							</div>
							<div class="control-group">
								<label for="textfield" class="control-label">
									Last Name</label>
								<div class="controls">
									<input type="text" name="last_name" id="last_name" data-rule-required="true" data-msg-required="Required"
										data-placement="bottom" class="input-xlarge" />
								</div>
							</div>
							<div class="control-group">
								<label for="textfield" class="control-label">
									Sex</label>
								<div class="controls">
									<select name="sex" id="sex" class="chzn-select input-medium">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
							<div class="control-group">
								<label for="textfield" class="control-label">
									Birthday</label>
								<div class="controls">
									<div class="pull-left cutter-right">
										<select name="Month" id="Month" class="chzn-select input-medium" data-rule-required="true"
											data-msg-required="Required" data-placement="bottom">
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
										<input type="text" name="day" id="day" class="input-mini" placeholder="Day" data-rule-required="true"
											data-msg-required="Required" data-placement="bottom" /></div>
									<div class="pull-left">
										<input type="text" name="year" id="year" class="input-mini" placeholder="Year" data-rule-required="true"
											data-msg-required="Required" data-placement="bottom" />
									</div>
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary input-small">
									Save</button>
								<button type="button" class="btn btn-danger">
									Cancel</button>
							</div>
							</form>
						</div>
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