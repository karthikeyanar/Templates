<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	<?php include_once 'sidebar.php' ?>
	<!-- mainbar -->
	<div id="mainbar">
		<div class="container-fluid">
			<div class="page-header">
				<h1>Modal</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
				<li><a href="form_basic.php">UI Elements</a> <i class="icon-angle-right"></i></li>
				<li><a href="modal.php">Modal</a></li>
				<li class="pull-right"><a href="#" class="close">&times</a></li>
			</ul>
			<div class="row-fluid">
				<div class="span12">
					<div class="box box-bordered">
						<div class="box-title">
							<h4>
								<i class="icon-edit"></i>Modal</h4>
						</div>
						<div class="box-content no-padding">
							<form action="#" method="POST" class="form-horizontal form-bordered form-striped">
							<div class="control-group">
								<label class="control-label">
									Responsive</label>
								<div class="controls">
									<button class="demo btn btn-primary" data-toggle="modal" href="#responsive">View Demo</button>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Stackable</label>
								<div class="controls">
									<button class="demo btn btn-primary" data-toggle="modal" href="#stack1">View Demo</button>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Full Width</label>
								<div class="controls">
									<button class="demo btn btn-primary" data-toggle="modal" href="#full-width">View Demo</button>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Long modal</label>
								<div class="controls">
									<button class="demo btn btn-primary" data-toggle="modal" href="#long">View Demo</button>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Different Colors</label>
								<div class="controls">
									<button class="demo btn btn-primary" data-toggle="modal" href="#long">View Demo</button>
								</div>
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
<!-- start responsive modal -->
<div id="responsive" class="modal hide fade" tabindex="-1" data-width="760">
  <div class="modal-header">
    <button type="button" class="btn btn-icon pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
    <h3>Responsive</h3>
  </div>
  <div class="modal-body">
    <div class="row-fluid">
      <div class="span6">
        <h4>Some Input</h4>
        <p><input type="text" class="span12"></p>
        <p><input type="text" class="span12"></p>
        <p><input type="text" class="span12"></p>
        <p><input type="text" class="span12"></p>
        <p><input type="text" class="span12"></p>
        <p><input type="text" class="span12"></p>
        <p><input type="text" class="span12"></p>
      </div>
      <div class="span6">
        <h4>Some More Input</h4>
        <p><input type="text" class="span12"></p>
        <p><input type="text" class="span12"></p>
        <p><input type="text" class="span12"></p>
        <p><input type="text" class="span12"></p>
        <p><input type="text" class="span12"></p>
        <p><input type="text" class="span12"></p>
        <p><input type="text" class="span12"></p>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div>
</div>
<!-- end responsive modal -->
<!-- stackable responsive modal -->
<div id="stack1" class="modal hide fade" tabindex="-1" data-focus-on="input:first">
  <div class="modal-header">
    <button type="button" class="btn btn-icon pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
    <h3>Stack One</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
    <p>One fine body…</p>
    <p>One fine body…</p>
    <input type="text" data-tabindex="1">
    <input type="text" data-tabindex="2">
    <button class="btn" data-toggle="modal" href="#stack2">Launch modal</button>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Close</button>
    <button type="button" class="btn btn-primary">Ok</button>
  </div>
</div>
<div id="stack2" class="modal hide fade" tabindex="-1" data-focus-on="input:first">
  <div class="modal-header">
    <button type="button" class="btn btn-icon pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
    <h3>Stack Two</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
    <p>One fine body…</p>
    <input type="text" data-tabindex="1">
    <input type="text" data-tabindex="2">
    <button class="btn" data-toggle="modal" href="#stack3">Launch modal</button>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Close</button>
    <button type="button" class="btn btn-primary">Ok</button>
  </div>
</div>
 
<div id="stack3" class="modal hide fade" tabindex="-1" data-focus-on="input:first">
  <div class="modal-header">
    <button type="button" class="btn btn-icon pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
    <h3>Stack Three</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
    <input type="text" data-tabindex="1">
    <input type="text" data-tabindex="2">
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Close</button>
    <button type="button" class="btn btn-primary">Ok</button>
  </div>
</div>
<!-- end stackable responsive modal -->
<!-- start full width modal -->
<div id="full-width" class="modal container hide fade" tabindex="-1">
  <div class="modal-header">
    <button type="button" class="btn btn-icon pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
    <h3>Full Width</h3>
  </div>
  <div class="modal-body">
    <p>This modal will resize itself to the same dimensions as the container class.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin ipsum ac ante fermentum suscipit. In ac augue non purus accumsan lobortis id sed nibh. Nunc egestas hendrerit ipsum, et porttitor augue volutpat non. Aliquam erat volutpat. Vestibulum scelerisque lobortis pulvinar. Aenean hendrerit risus neque, eget tincidunt leo. Vestibulum est tortor, commodo nec cursus nec, vestibulum vel nibh. Morbi elit magna, ornare placerat euismod semper, dignissim vel odio. Phasellus elementum quam eu ipsum euismod pretium.</p>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div>
</div>
<!-- end full width modal -->
<!-- start long width modal -->
<div id="long" class="modal hide fade" tabindex="-1" data-replace="true">
  <div class="modal-header">
    <button type="button" class="btn btn-icon pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
    <h3>A Fairly Long Modal</h3>
  </div>
  <div class="modal-body">
    <button class="btn" data-toggle="modal" href="#notlong" style="position: absolute; top: 50%; right: 12px">Not So Long Modal</button>
    <img style="height: 800px" src="http://i.imgur.com/KwPYo.jpg">
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Close</button>
  </div>
</div>
<div id="notlong" class="modal hide fade" tabindex="-1" data-replace="true">
  <div class="modal-header">
    <button type="button" class="btn btn-icon pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
    <h3>Not That Long</h3>
  </div>
  <div class="modal-body">
    <button class="btn" data-toggle="modal" href="#verylong" style="position: absolute; top: 50%; right: 12px">Very Long Modal</button>
    <div style="height: 400px; overflow: hidden;">
      <img style="height: 800px" src="http://i.imgur.com/KwPYo.jpg" />
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Close</button>
  </div>
</div>
<div id="verylong" class="modal hide fade" tabindex="-1" data-replace="true">
  <div class="modal-header">
    <button type="button" class="btn btn-icon pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
    <h3>A Very Long</h3>
  </div>
  <div class="modal-body">
    <div style="height: 1000px; overflow: hidden;">
      <img style="height: 800px" src="http://i.imgur.com/KwPYo.jpg" />
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Close</button>
  </div>
</div>
<!-- end long width modal -->
<?php include_once 'script.php' ?>
<?php include_once 'footer.php' ?>

