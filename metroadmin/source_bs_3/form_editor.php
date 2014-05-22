<?php include_once 'start-page.php' ?>
<title>Pepper - Editor</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<!-- bootstrap wysihtml5 -->
<link href="css/plugins/bootstrap-wysihtml5/wysiwyg-editor.css" rel="stylesheet" type="text/css" />
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
	<div class="page-header">
		<h1>
			Editor</h1>
	</div>
	<ul class="breadcrumb">
		<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
		<li><a href="form_layout.php">Forms</a> <i class="fa fa-angle-right"></i></li>
		<li><a href="form_layout.php">Editor</a> </li>
		<li class="pull-right"><a href="#" class="close">&times</a></li>
	</ul>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						WYSIHTML5 Editor</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<form action="#" method="POST">
						<div class="form-group">
							<div class="col-md-12">
								<textarea id="wysihtml5" name="wysihtml5" class="wysihtml5 form-control" rows="10"></textarea>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						CK Editor</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<form action="#" method="POST">
						<div class="form-group">
							<div class="col-md-12">
								<textarea id="ckeditor" name="ckeditor" class="form-control" rows="10"></textarea>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<!-- wysihtml5 editor -->
<script src="js/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js" type="text/javascript"></script>
<script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.js" type="text/javascript"></script>
<!-- ckeditor -->
<script src="js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<?php include_once 'applicationscript.php' ?>
<script type="text/javascript">
		/**** Specific JS for this page ****/
		$(function () {
			$('textarea.wysihtml5').wysihtml5();
		});
</script>
<script>
	CKEDITOR.replace('ckeditor', {
		uiColor: '#F5F5F5',
		on: {
			//focus: onFocus,
			//blur: onBlur,
			// Check for availability of corresponding plugins.
			pluginsLoaded: function( evt ) {
				var doc = CKEDITOR.document, ed = evt.editor;
				if ( !ed.getCommand( 'bold' ) )
					doc.getById( 'exec-bold' ).hide();
				if ( !ed.getCommand( 'link' ) )
					doc.getById( 'exec-link' ).hide();
			}
		}
	});
</script> 
<?php include_once 'end-page.php' ?>