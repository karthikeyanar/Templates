<?php include_once 'start-page.php' ?>
<title>Pepper - Blank</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<!-- bootstrap wysihtml5 -->
<link href="css/plugins/bootstrap-wysihtml5/wysiwyg-editor.css" rel="stylesheet" type="text/css" />
<!-- bootstrap modal -->
<link href="css/plugins/bootstrap-modal/bootstrap-modal.min.css" rel="stylesheet" type="text/css" />
<!-- timeline -->
<link href="css/pages/inbox.css" rel="stylesheet" type="text/css" />
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
<div class="page-header">
	<h1>
		Inbox</h1>
</div>
<ul class="breadcrumb">
	<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="blank.php">Samples</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="inbox.php">Inbox</a></li>
	<li class="pull-right"><a href="#" data-dismiss='breadcrumb' class="close">&times</a></li>
</ul>
<div class="row">
	<div class="col-md-2">
		<ul class="inbox-nav">
			<li><a id="compose" class="btn btn-success btn-block" data-toggle="modal" href="#compose-modal"><i class="fa fa-edit"></i> Compose</a></li>
			<!-- ko foreach: types -->
				<li data-bind="css: { active: is_active() == true }"><a href="#" data-bind="text:name,click:open"></a></li>
			 <!-- /ko -->
		</ul>
	</div>
	<div class="col-md-10">
		<div class="inbox-header row">
			<div class="col-sm-8">
				<h1>Inbox <small>3 Unread Message</small></h1>
			</div>
			<div class="col-sm-4">
				<form id="search" role="form" onsubmit="return false">
					<div class="form-group">
						<div class="input-icon">
							<i class="fa fa-search"></i>
							<input type="search" class="form-control" id="search" placeholder="Search..." />
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="pull-right">
				<span class="margin-right-10">1-30 of 1,421</span>
				<button class="btn btn-default btn-xs"><i class="fa fa-angle-left fa-lg"></i></button>
				<button class="btn btn-default btn-xs"><i class="fa fa-angle-right fa-lg"></i></button>
		</div><div class="clearfix"></div>
		<div class="inbox-loading">
		</div>
		<div class="inbox-content">
			<!-- ko if: open_message()==null -->
				<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th colspan="6">
								<div class="pull-left">
									<label class="checkbox metro-checkbox">
										<input type="checkbox" id="selectall" name="selectall" data-bind="click: selectAll, checked: all_selected" /><span class='check'></span>
									</label>
								</div>
								<div class="pull-left margin-left-10">
									<span class="btn-group">
										<a data-toggle="dropdown" href="#" class="btn btn-primary btn-sm">Select <i class="fa fa-angle-down "></i></a>
										<ul class="dropdown-menu">
												<li><a href="#" id="select-all">All</a></li>
												<li><a href="#" id="select-none">None</a></li>
												<li class="divider"></li>
												<li><a href="#" id="select-read">Read</a></li>
												<li><a href="#" id="select-unread">Unread</a></li>
										</ul>
									</span>
								</div>
								<div class="pull-left margin-left-10">
									<button id="refresh" name="refresh" class="btn btn-default btn-sm">Refresh</button>
								</div>
								<div class="pull-left margin-left-10" data-bind="visible:isAnyOneSelect()==true">
									<button id="delete" name="delete" class="btn btn-danger btn-sm">Delete</button>
								</div>
								<div class="pull-left margin-left-10" data-bind="visible:isAnyOneSelect()==true">
									<span class="btn-group">
										<a data-toggle="dropdown" href="#" class="btn btn-warning btn-sm">Move <i class="fa fa-angle-down "></i></a>
										<ul class="dropdown-menu">
												<li><a href="#" id="select-all">Support</a></li>
												<li><a href="#" id="select-none">Order</a></li>
												<li class="divider"></li>
												<li><a href="#" id="select-read">Create new</a></li>
												<li><a href="#" id="select-unread">Manage Labels</a></li>
										</ul>
									</span>
								</div>
							</th>
						</tr>
					</thead>
					<tbody>
						<!-- ko foreach: mails -->
							<tr data-bind="visible: is_show,css: { 'read' : is_read()==true, 'select': is_select()==true }">
								<td data-bind="click:open" class="tiny-column">
									<label class="checkbox metro-checkbox"><input type="checkbox" id="select" name="select" data-bind="checked: is_select" /><span class='check'></span></label>
								</td>
								<td class="tiny-column" data-bind="click:setStar"><span class="starred cursor-pointer"><i data-bind="css:starStatus"></i></span>
								</td>
								<td class="sender-column" data-bind="text:sender,click:open"></td>
								<td data-bind="text:subject,click:open"></td>
								<td data-bind="click:open" class="tiny-column"><!-- ko if: is_attachment()==true --><i class="fa fa-paperclip"></i><!-- /ko --></td>
								<td class="date-column text-right" data-bind="text:date_format(),click:open"></td>
							</tr>
						 <!-- /ko -->
					</tbody>
				</table>
				</div>
			 <!-- /ko -->
			 <!-- ko if: open_message()!=null -->
					<div class="mail-content">
						<div>
							<div class="margin-bottom-10">
								<button type="button" class="btn btn-default" data-bind="click:open_message().close"><i class="fa fa-arrow-left"></i></button>
								<div class="btn-group margin-left-10">
									  <button type="button" class="btn btn-default">Remove Label</button>
										<button type="button" class="btn btn-default" data-toggle="tooltip" title="Report Spam"><i class="fa fa-info-circle"></i></button>
										<button type="button" class="btn btn-default"><i class="fa fa-recycle"></i></button>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-10">
									<h3 class="no-margin" data-bind="text:open_message().subject"></h3>
								</div>
								<div class="col-xs-2 text-right"><i class="fa fa-print fa-lg"></i></div><div class="clearfix"></div>
							</div>
						</div>
						<hr/>
						<div class="to-detail">
							<div class="pull-left">
								<div class="avatar"><img class="chat-img" src="img/avatars/2.jpg"></div>
								<div class="pull-left">
									<div class="pull-left" data-bind="text:open_message().sender"></div><div class="pull-left margin-left-5" data-bind="text:'<'+open_message().sender_mail()+'>'"></div>
									<div class="me">to me</div>
								</div><div class="clearfix"></div>
							</div>
							<div class="pull-right">
								 <div class="btn-group">
										<a href="#" class="btn btn-default btn-sm"><i class="fa fa-mail-reply"></i></a>
										<a data-toggle="dropdown" href="#" class="btn btn-default btn-sm"><i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#" id="select-all">Reply</a></li>
												<li><a href="#" id="select-none">Reply to all</a></li>
												<li class="divider"></li>
												<li><a href="#" id="select-read">Forward</a></li>
												<li><a href="#" id="select-unread">Print</a></li>
												<li class="divider"></li>
												<li><a href="#" id="select-read">Delete this message</a></li>
										</ul>
									</div>
							</div>
							<div class="pull-right margin-right-10">
								<span data-bind="text:open_message().date_format()"></span><span class="margin-left-5"><i data-bind="css:open_message().starStatus"></i></span>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="message-body">
							<p data-bind="html:open_message().body"></p>
						</div>
					</div>
			  <!-- /ko -->
		</div>
	</div>
</div>
<div id="compose-modal" class="modal modal-metro fade" tabindex="-1" style="display: none;">
	<div class="container">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Compose</h4>
		</div>
		<div class="modal-body">
			<form role="form">
				<div class="form-group">
					<input type="email" class="form-control" id="to" placeholder="To">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="subject" placeholder="Subject">
				</div>
				<div class="form-group">
					<textarea id="message" name="message" class="wysihtml5 form-control" rows="10"></textarea>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary">Send</button>
			<button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
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
<!-- bootstrap modal --> 
<script src="js/plugins/bootstrap-modal/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="js/plugins/bootstrap-modal/bootstrap-modal.js" type="text/javascript"></script>
<!-- knockout js -->
<script src="//ajax.aspnetcdn.com/ajax/knockout/knockout-3.1.0.js"></script>
<script>if(typeof(ko) === 'undefined') document.write('<script src="js/knockout/knockout-3.1.0.js"><\/script>')</script>
<script type="text/javascript">
		/**** Specific JS for this page ****/
		$(function () {
			$('#compose-modal').on('shown.bs.modal', function (e) {		
				$("#to").focus();
				$('#message').wysihtml5();
			});
		});
</script>
<script src="js/pages/inbox.js"></script> 
<?php include_once 'applicationscript.php' ?>
<?php include_once 'end-page.php' ?>

