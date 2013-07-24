<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
<?php include_once 'sidebar.php' ?>
<!-- mainbar -->
<div id="mainbar">
	<div class="container-fluid">
		<div class="page-header">
			<h1>Alert & Confirm</h1>
		</div>
		<ul class="breadcrumb">
			<li>
				<a href="index.php">Home</a>
				<i class="icon-angle-right"></i>
			</li>
			<li>
				<a href="form_basic.php">UI Elements</a>
				<i class="icon-angle-right"></i>
			</li>
			<li>
				<a href="alert_confirm.php">Alert & Confirm</a>
			</li>
			<li class="pull-right">
				<a href="#" class="close">&times</a>
			</li>
		</ul>
		<div class="row-fluid">
			<div class="span12">
				<div class="box box-bordered">
					<div class="box-title">
						<h4>
							<i class="icon-edit"></i>Alert & Confirm Dialog
						</h4>
					</div>
					<div class="box-content no-padding">
						<form action="#" method="POST" class="form-horizontal form-bordered form-striped">
							<div class="control-group">
								<label class="control-label">
									Alert
								</label>
								<div class="controls">
									<a id="alert" class="demo btn btn-primary">View Demo</a>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Confirm
								</label>
								<div class="controls">
									<a id="confirm" class="demo btn btn-primary">View Demo</a>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Prompt
								</label>
								<div class="controls">
									<a id="prompt" class="demo btn btn-primary">View Demo</a>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Custom Dialog
								</label>
								<div class="controls">
									<a id="custom" class="demo btn btn-primary">View Demo</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<div class="box box-bordered">
					<div class="box-title">
						<h4>
							<i class="icon-edit"></i>Alert & Confirm 
						</h4>
					</div>
					<div class="box-content">
						<div class="alert">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Warning!</strong> Best check yo self, you're not looking too good.
						</div>
						<div class="alert alert-error">
							<button data-dismiss="alert" class="close" type="button">&times;</button>
							<strong>Oh snap!</strong> Change a few things up and try submitting again.
						</div>
						<div class="alert alert-success">
							<button data-dismiss="alert" class="close" type="button">&times;</button>
							<strong>Well done!</strong> You successfully read this important alert message.
						</div>
						<div class="alert alert-info">
							<button data-dismiss="alert" class="close" type="button">&times;</button>
							<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
						</div>
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
<script>
	$(function(){
	$("#alert").click(function(){
	bootbox.alert("Hello world!", function() {
	//callback
	});
	});
	$("#confirm").click(function(){
	bootbox.confirm("Are you sure?", function(result) {
	//callback
	});
	});
	$("#prompt").click(function(){
	bootbox.prompt("What is your name?", function(result) {
	if (result === null) {
	//Prompt dismissed
	} else {
	//result;
	}
	});
	});
	$("#custom").click(function(){
	bootbox.dialog("I am a custom dialog", [{
	"label" : "Success!",
	"class" : "btn-success",
	"callback": function() {
	//great success;
	}
	}, {
	"label" : "Danger!",
	"class" : "btn-danger",
	"callback": function() {
	//uh oh, look out!;
	}
	}, {
	"label" : "Click ME!",
	"class" : "btn-primary",
	"callback": function() {
	//Primary button;
	}
	}, {
	"label" : "Just a button..."
	}]);
	});
	});
</script>
<?php include_once 'footer.php' ?>

