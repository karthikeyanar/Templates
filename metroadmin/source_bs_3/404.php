<?php include_once 'start-page.php' ?>
<?php include_once 'style.php' ?>
<link href="css/public.css" rel="stylesheet" type="text/css" />
<body class="public">
<div class="container">
	<div class="logo">
			<span class="name">Pepper</span><span class="type">Admin</span>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-transparent fg-white">
				<div class="panel-body">
					<form method="post" action="search.php">
					<div class="form-group text-center">
						<h1 class="page-error">404</h1>
					</div>
					<div class="form-group text-center">
						<h3>Page not found!</h3>
					</div>
					<div class="form-group text-center">
						<h4>Search Pages</h4>
					</div>
					<div class="form-group">
						<div class="input-icon">
							<i class="fa fa-search"></i>
							<input type="search" class="form-control" name="search" placeholder="Search..." />
						</div>
					</div>
					<div class="form-group text-center">
						<button id="submit" name="submit" class="btn btn-success">Submit</button>
					</div>
					</form>
				</div>
			</div>
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

