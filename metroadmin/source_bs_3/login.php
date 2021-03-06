<?php include_once 'start-page.php' ?>
<?php include_once 'style.php' ?>
<link href="css/public.css" rel="stylesheet" type="text/css" />
<body class="public">
<div class="container">
	<div class="logo">
		<span class="name">Pepper</span><span class="type">Admin</span>
	</div>
	<div class="panel panel-white login-panel">
		<div class="panel-heading">
			<h3 class="panel-title">Sign In</h3>
		</div>
		<div class="panel-body">
			<form method="post" action="index.php">
			<div class="form-group">
				<div class="input-icon">
					<i class="fa fa-user"></i>
					<input type="text" class="form-control" name="username" placeholder="Username" />
				</div>
			</div>
			<div class="form-group">
				<div class="input-icon">
					<i class="fa fa-lock"></i>
					<input type="password" class="form-control" name="password" placeholder="Password" />
				</div>
			</div>
			<div class="form-group">
				<label class="checkbox metro-checkbox"><input type="checkbox">Remember me</label>
			</div>
			<div class="form-group">
				<div class="pull-left">
					<button id="submit" name="submit" class="btn btn-success">Sign In</button>
				</div>
				<div class="pull-right margin-top-10">
					<a href="#" class="link">Forgot Password</a>
				</div><div class="clearfix"></div>
			</div>
			<div class="form-group line line-dashed"></div>
			<div class="form-group text-center social">
				<a href="#"><i class="so-icon facebook"></i></a>
				<a href="#"><i class="so-icon twitter"></i></a>
				<a href="#"><i class="so-icon gplus"></i></a>
			</div>
			<div class="form-group line line-dashed"></div>
			<div class="form-group text-center">
				<a href="signup.php" class="btn btn-primary btn-block">Create New Account</a>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- jquery -->
<script src="js/jquery/jquery-1.11.0.min.js" type="text/javascript"></script>
<!-- bootstrap -->
<script src="js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
<!-- jquery validation -->
<script src="js/jquery/jquery.validate.min.js" type="text/javascript"></script>
<!-- pepper application -->
<script src="js/files/application.js" type="text/javascript"></script>
</body>
</html>

