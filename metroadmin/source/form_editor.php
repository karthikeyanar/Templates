<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	<?php include_once 'sidebar.php' ?>
	<!-- mainbar -->
	<div id="mainbar">
		<div class="container-fluid">
			<div class="page-header">
				<h1>
					Editor</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
				<li><a href="form_basic.php">Forms</a> <i class="icon-angle-right"></i></li>
				<li><a href="form_basic.php">Editor</a> </li>
				<li class="pull-right"><a href="#" class="close">&times</a></li>
			</ul>
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-title">
							<h4>
								<i class="icon-edit"></i>WYSIHTML5 Editor</h4>
						</div>
						<div class="box-content">
							<form action="#" method="POST">
							<div class="control-group">
								<div class="controls">
									<textarea id="wysihtml5" name="wysihtml5" class="wysihtml5 input-block-level" rows="10"></textarea>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-title">
							<h4>
								<i class="icon-edit"></i>CK Editor</h4>
						</div>
						<div class="box-content">
							<form action="#" method="POST">
							<div class="control-group">
								<div class="controls">
									<textarea id="ckeditor" name="ckeditor" class="input-block-level" rows="10"></textarea>
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
