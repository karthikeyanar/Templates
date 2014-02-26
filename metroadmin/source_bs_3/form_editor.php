<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
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
<?php include_once 'endcontainer.php' ?>
<?php include_once 'script.php' ?>
<script type="text/javascript">
		/**** Specific JS for this page ****/
		$(function () {
			$('textarea.wysihtml5').wysihtml5({
				stylesheets: ["./css/wysiwyg-color.css"]
			});
		});
</script>
<script>
	// Replace the <textarea id="editor1"> with an CKEditor instance.
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
<?php include_once 'footer.php' ?>
