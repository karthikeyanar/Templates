<?php include_once 'start-page.php' ?>
<?php include_once 'style.php' ?>
<link href="css/public.css" rel="stylesheet" type="text/css" />
<body class="public">
<div class="container">
	<div class="logo">
		<span class="name">Pepper</span><span class="type">Admin</span>
	</div>
	<div class="panel panel-transparent lockout-panel">
		<div class="panel-body">
			<form method="post" action="index.php">
			<div class="form-group">
				 <div class="login-user">
					<img src="http://placehold.it/100X100" alt="..." class='margin' />
				 </div>
			</div>
			<div class="form-group text-center">
				<h3>Jarge Lue</h3>
			</div>
			<div class="form-group text-center">
				<h4>username@domain.com</h4>
			</div>
			<div class="form-group">
				<div class="input-icon">
					<i class="fa fa-lock"></i>
					<input type="password" class="form-control" name="password" placeholder="Password" />
				</div>
			</div>
			<div class="form-group text-center">
				<button id="submit" name="submit" class="btn btn-success">Un Lock</button>
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

