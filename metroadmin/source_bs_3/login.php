<?php include_once 'header.php' ?>
<!-- google open sans -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<!-- font awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 
<!-- bootstrap 3.1.0 -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- pepper style -->
<link href="css/style-pepper.css" rel="stylesheet" type="text/css" />
<!-- pepper site -->
<link href="css/site.css" rel="stylesheet" type="text/css" />
<!-- login -->
<link href="css/login.css" rel="stylesheet" type="text/css" />
<div class="container">
	<div class="panel login-panel">
		<div class="panel-heading">
			<h3 class="panel-title">Sign In</h3>
		</div>
		<div class="panel-body">
			<form action="index.php">
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
					<button id="submit" name="submit" class="btn btn-green">Sign In</button>
				</div>
				<div class="pull-right margin-top-10">
					<a href="#" class="link">Forgot Password</a>
				</div><div class="clearfix"></div>
			</div>
			<div class="form-group line line-dashed"></div>
			<div class="form-group">
				<a class="btn btn-facebook btn-block"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a>
			</div>
			<div class="form-group text-center">
				<a class="btn btn-twitter btn-block"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a>
			</div>
			<div class="form-group text-center">
				<a class="btn btn-google-plus btn-block"><i class="fa fa-google-plus pull-left"></i>Sign in with Google</a>
			</div>
			<div class="form-group line line-dashed"></div>
			<div class="form-group text-center">
				<button id="submit" name="submit" class="btn btn-blue btn-block">Create New Account</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- jquery -->
<script src="js/jquery/jquery-2.1.0.min.js" type="text/javascript"></script>
<!-- bootstrap -->
<script src="js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
<?php include_once 'applicationscript.php' ?><?php include_once 'footer.php' ?>