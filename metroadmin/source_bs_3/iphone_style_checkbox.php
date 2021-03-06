<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'startcontainer.php' ?>
			<div class="row">
				<div class="col-lg-4">
					<div class="page-header">
						<h1>
							iPhone Style Checkbox</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Size</h3>
						</div>
						<div class="panel-body">
							<div class="switch switch-large">
								<input type="checkbox" checked />
							</div>
							<div class="switch">
								<input type="checkbox" checked />
							</div>
							<div class="switch switch-small">
								<input type="checkbox" checked />
							</div>
							<div class="switch switch-mini">
								<input type="checkbox" checked />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Colors</h3>
						</div>
						<div class="panel-body">
							<div class="switch" data-on="primary" data-off="info">
								<input type="checkbox" checked />
							</div>
							<div class="switch" data-on="info" data-off="success">
								<input type="checkbox" checked />
							</div>
							<div class="switch" data-on="success" data-off="warning">
								<input type="checkbox" checked />
							</div>
							<div class="switch" data-on="warning" data-off="danger">
								<input type="checkbox" checked />
							</div>
							<div class="switch" data-on="danger" data-off="primary">
								<input type="checkbox" checked />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Disable Animation</h3>
						</div>
						<div class="panel-body">
							<div class="switch" data-animated="false">
								<input type="checkbox" checked />
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Disabled</h3>
						</div>
						<div class="panel-body">
							<div class="switch" data-animated="false">
								<input type="checkbox" checked disabled />
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Text</h3>
						</div>
						<div class="panel-body">
							<div class="switch" data-on-label="Yes" data-off-label="No">
								<input type="checkbox" checked />
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								HTML text</h3>
						</div>
						<div class="panel-body">
							<div class="switch" data-on-label="<i class='icon-ok icon-white'></i>" data-off-label="<i class='icon-remove'></i>">
								<input type="checkbox" checked />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Event handler <small>javascript</small></h3>
						</div>
						<div class="panel-body">
							<div id="mySwitch" class="switch">
								<input type="checkbox" checked />
							</div>
							<pre>$('#mySwitch').on('switch-change', function (e, data) {
							var $el = $(data.el),
							value = data.value;	
							console.log(e, $el, value);
							});</pre>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Toggle State <small>javascript</small></h3>
						</div>
						<div class="panel-body">
							<div id="toggle-state-switch" class="switch">
								<input type="checkbox" checked />
							</div>
							<br>
							<br>
							<div id="toggle-state-switch-button-on" class="btn btn-primary">
								ON!</div>
							<div id="toggle-state-switch-button" class="btn btn-primary">
								Toggle me!</div>
							<div id="toggle-state-switch-button-off" class="btn btn-primary">
								OFF!</div>
							<pre class="prettyprint linenums">$('#toggle-state-switch').bootstrapSwitch('toggleState');$('#toggle-state-switch').bootstrapSwitch('setState', false); // true || false
							</pre>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Destroy <small>javascript</small></h3>
						</div>
						<div class="panel-body">
							<div id="destroy-switch" class="switch">
								<input type="checkbox" checked />
							</div>
							<br>
							<br>
							<button id="btn-destroy-switch" class="btn btn-danger">
								Destroy me!
							</button>
							<pre class="prettyprint linenums">$('#destroy-switch').bootstrapSwitch('destroy');</pre>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Create <small>javascript</small></h3>
						</div>
						<div class="panel-body">
							<input id="create-switch" type="checkbox" checked />
							<br>
							<br>
							<div id="btn-create" class="btn btn-default">
								Create</div>
							<pre class="prettyprint linenums">
$('#create-switch').wrap('&lt;div class="switch" />').parent().bootstrapSwitch();</pre>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Disabled <small>javascript</small></h3>
						</div>
						<div class="panel-body">
							<div id="disable-switch" class="switch">
								<input type="checkbox" checked />
							</div>
							<br>
							<br>
							<button id="btn-is-active-switch" class="btn btn-default">
								Is active?
							</button>
							<button id="btn-toggle-activation-switch" class="btn btn-default">
								Toggle activation!
							</button>
							<button id="btn-disable-switch" class="btn btn-default">
								Disable!
							</button>
							<button id="btn-activate-switch" class="btn btn-default">
								Activate!
							</button>
							<pre class="prettyprint linenums">
							$('#disable-switch').bootstrapSwitch('isActive');
							$('#disable-switch').bootstrapSwitch('toggleActivation');
							$('#disable-switch').bootstrapSwitch('setActive', false);  // true || false</pre>
						</div>
					</div>
				</div>
			</div>
<?php include_once 'endcontainer.php' ?>
<?php include_once 'script.php' ?>
<script type="text/javascript">
	$('#mySwitch').on('switch-change',function(e,data) {
		var $el=$(data.el)
            ,value=data.value;
		console.log(e,$el,value);
	});

	$('#toggle-state-switch-button').on('click',function() {
		$('#toggle-state-switch').bootstrapSwitch('toggleState');
	});

	$('#toggle-state-switch-button-on').on('click',function() {
		$('#toggle-state-switch').bootstrapSwitch('setState',true);
	});

	$('#toggle-state-switch-button-off').on('click',function() {
		$('#toggle-state-switch').bootstrapSwitch('setState',false);
	});

	$('#btn-destroy-switch').on('click',function() {
		$('#destroy-switch').bootstrapSwitch('destroy');
		$(this).remove();
	});

	$('#btn-create').on('click',function() {
		$('#create-switch').wrap('<div class="switch" />').parent().bootstrapSwitch();
		$(this).remove()
	});

	$('#btn-is-active-switch').on('click',function() {
		alert($('#disable-switch').bootstrapSwitch('isActive'));
	});

	$('#btn-toggle-activation-switch').on('click',function() {
		$('#disable-switch').bootstrapSwitch('toggleActivation');
	});

	$('#btn-disable-switch').on('click',function() {
		$('#disable-switch').bootstrapSwitch('setActive',false);
	});

	$('#btn-activate-switch').on('click',function() {
		$('#disable-switch').bootstrapSwitch('setActive',true);
	});
</script>
<?php include_once 'applicationscript.php' ?><?php include_once 'footer.php' ?>
 
