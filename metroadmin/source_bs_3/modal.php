<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
			<div class="page-header">
				<h1>Modal</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="form_basic.php">UI Elements</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="modal.php">Modal</a></li>
				<li class="pull-right"><a href="#" class="close">&times</a></li>
			</ul>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Modal</h3>
						</div>
						<div class="panel-body no-padding">
							<form action="#" method="POST" class="form-horizontal form-bordered form-striped">
							<div class="form-group">
								<label class="col-lg-2 control-label">
									Responsive</label>
								<div class="col-lg-10">
									<button class="demo btn btn-blue" data-toggle="modal" href="#responsive">View Demo</button>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
									Stackable</label>
								<div class="col-lg-10">
									<button class="demo btn btn-blue" data-toggle="modal" href="#stack1">View Demo</button>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
									Full Width</label>
								<div class="col-lg-10">
									<button class="demo btn btn-blue" data-toggle="modal" href="#full-width">View Demo</button>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">
									Long modal</label>
								<div class="col-lg-10">
									<button class="demo btn btn-blue" data-toggle="modal" href="#long">View Demo</button>
								</div>
							</div>
							</form>
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
						<div class="panel-body no-padding">
							<form action="#" method="POST" class="form-horizontal form-bordered form-striped">
							<div class="form-group">
								<label class="col-lg-2 control-label">
									Blue</label>
								<div class="col-lg-10">
									<button class="demo btn btn-blue" data-toggle="modal" href="#bg-blue-modal">View Demo</button>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
<?php include_once 'endcontainer.php' ?>
<!-- Modal Definitions (tabbed over for <pre>) -->
<div id="responsive" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Responsive</h4>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-6">
        <h4>Some Input</h4>
        <p><input class="form-control" type="text" /></p>
        <p><input class="form-control" type="text" /></p>
        <p><input class="form-control" type="text" /></p>
        <p><input class="form-control" type="text" /></p>
        <p><input class="form-control" type="text" /></p>
        <p><input class="form-control" type="text" /></p>
        <p><input class="form-control" type="text" /></p>
      </div>
      <div class="col-md-6">
        <h4>Some More Input</h4>
        <p><input class="form-control" type="text" /></p>
        <p><input class="form-control" type="text" /></p>
        <p><input class="form-control" type="text" /></p>
        <p><input class="form-control" type="text" /></p>
        <p><input class="form-control" type="text" /></p>
        <p><input class="form-control" type="text" /></p>
        <p><input class="form-control" type="text" /></p>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-grey">Close</button>
    <button type="button" class="btn btn-blue">Save changes</button>
  </div>
</div>

<div id="full-width" class="modal container fade" tabindex="-1" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Full Width</h4>
  </div>
  <div class="modal-body">
    <p>This modal will resize itself to the same dimensions as the container class.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin ipsum ac ante fermentum suscipit. In ac augue non purus accumsan lobortis id sed nibh. Nunc egestas hendrerit ipsum, et porttitor augue volutpat non. Aliquam erat volutpat. Vestibulum scelerisque lobortis pulvinar. Aenean hendrerit risus neque, eget tincidunt leo. Vestibulum est tortor, commodo nec cursus nec, vestibulum vel nibh. Morbi elit magna, ornare placerat euismod semper, dignissim vel odio. Phasellus elementum quam eu ipsum euismod pretium.</p>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-grey">Close</button>
    <button type="button" class="btn btn-blue">Save changes</button>
  </div>
</div>

<div id="stack1" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Stack One</h4>
  </div>
  <div class="modal-body">
    <p>One fine body...</p>
    <p>One fine body...</p>
    <p>One fine body...</p>
    <input class="form-control" type="text" data-tabindex="1" />
    <input class="form-control" type="text" data-tabindex="2" />
    <button class="btn btn-grey" data-toggle="modal" href="#stack2">Launch modal</button>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-grey">Close</button>
    <button type="button" class="btn btn-blue">Ok</button>
  </div>
</div>

<div id="stack2" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Stack Two</h4>
  </div>
  <div class="modal-body">
    <p>One fine body...</p>
    <p>One fine body...</p>
    <input class="form-control" type="text" data-tabindex="1" />
    <input class="form-control" type="text" data-tabindex="2" />
    <button class="btn btn-grey" data-toggle="modal" href="#stack3">Launch modal</button>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-grey">Close</button>
    <button type="button" class="btn btn-blue">Ok</button>
  </div>
</div>

<div id="stack3" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Stack Three</h4>
  </div>
  <div class="modal-body">
    <p>One fine body...</p>
    <input class="form-control" type="text" data-tabindex="1" />
    <input class="form-control" type="text" data-tabindex="2" />
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-grey">Close</button>
    <button type="button" class="btn btn-blue">Ok</button>
  </div>
</div>

<div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" style="display: none;">
  <div class="modal-body">
    <p>Would you like to continue with some arbitrary task?</p>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-grey">Cancel</button>
    <button type="button" data-dismiss="modal" class="btn btn-blue">Continue Task</button>
  </div>
</div>

<div id="long" class="modal fade" tabindex="-1" data-replace="true" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">A Fairly Long Modal</h4>
  </div>
  <div class="modal-body">
    <button class="btn btn-grey" data-toggle="modal" href="#notlong" style="position: absolute; top: 50%; right: 12px">Not So Long Modal</button>
    <img style="height: 800px" src="http://i.imgur.com/KwPYo.jpg" />
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-grey">Close</button>
  </div>
</div>

<div id="notlong" class="modal fade" tabindex="-1" data-replace="true" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Not That Long</h4>
  </div>
  <div class="modal-body">
    <button class="btn btn-grey" data-toggle="modal" href="#verylong" style="position: absolute; top: 50%; right: 12px">Very Long Modal</button>
    <div style="height: 400px; overflow: hidden;">
      <img style="height: 800px" src="http://i.imgur.com/KwPYo.jpg" />
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-grey">Close</button>
  </div>
</div>

<div id="verylong" class="modal fade" tabindex="-1" data-replace="true" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">A Very Long</h4>
  </div>
  <div class="modal-body">
    <div style="height: 1000px; overflow: hidden;">
      <img style="height: 800px" src="http://i.imgur.com/KwPYo.jpg" />
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-grey">Close</button>
  </div>
</div>

<div id="bg-blue-modal" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header bg-blue">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Blue Header</h4>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-6">
        <h1>Modal</h1>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-grey">Close</button>
    <button type="button" class="btn btn-blue">Save</button>
  </div>
</div>

<?php include_once 'script.php' ?>
<?php include_once 'footer.php' ?>

