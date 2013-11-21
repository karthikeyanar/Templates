<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	
 
			<div class="login-box col-md-4">
				<div class="panel panel-default blue">
					<div class="panel-heading">
						<h3 class="panel-title">
							<i class="fa fa-lock"></i>Sign In</h3>
					</div>
					<div class="panel-body">
						<form action="index.php">
						<div class="form-group">
							<div class="col-lg-10">
								<input type="text" id="inputEmail" placeholder="Email" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-10">
								<input type="password" id="inputPassword" placeholder="Password" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-10">
								<div class="pull-left">
									<label class="checkbox">
										<input type="checkbox" data-provide="bsfancycheck">
										Remember me
									</label>
								</div>
								<div class="pull-right">
									<button type="submit" class="btn btn-primary">
										Sign in</button>
								</div>
								<div class="clearfix">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-10">
								<a href="#" class="link">Forgot Password</a>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
	 </div>
	<!-- end mainbar -->
</div>
<!-- end container -->
<?php include_once 'script.php' ?>
<?php include_once 'footer.php' ?>