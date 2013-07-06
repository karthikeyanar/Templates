<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	<?php include_once 'sidebar.php' ?>
	<!-- mainbar -->
	<div id="mainbar">
		<div class="container-fluid">
			<div class="login-box span4">
				<div class="box box-bordered blue">
					<div class="box-title">
						<h4>
							<i class="icon-lock"></i>Sign In</h4>
					</div>
					<div class="box-content">
						<form action="index.php">
						<div class="control-group">
							<div class="controls">
								<input type="text" id="inputEmail" placeholder="Email" class="input-block-level">
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<input type="password" id="inputPassword" placeholder="Password" class="input-block-level">
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<div class="pull-left">
									<label class="checkbox">
										<input type="checkbox" data-style="icheck">
										Remember me
									</label>
								</div>
								<div class="pull-right">
									<button type="submit" class="btn btn-primary input-small">
										Sign in</button>
								</div>
								<div class="clearfix">
								</div>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<a href="#" class="link">Forgot Password</a>
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