$(document).on('click','[data-modal-alert=true]',function() {
	var $btn=$(this);
	var title=$btn.data("title");
	var message=$btn.data("message");
	var callback=$btn.data("callback");

	var template="<div class='modal fade' data-width='760' style='display: none;'> \
					  <div class='modal-header'> \
						<button type='button' class='close' data-dismiss='modal'>&times;</button> \
						<h4 class='modal-title'> "+title+"</h4> \
					  </div> \
					  <div class='modal-body'> \
						 <p> "+message+"</p> \
					  </div> \
					  <div class='modal-footer'> \
						<button type='button' class='btn btn-primary' data-dismiss='modal'>OK</button> \
					  </div> \
					</div>";

	$modal = $(template);
	$("body").append($modal);

	$modal
	.modal('show')
	.on('hide.bs.modal', function () {
		eval(callback);
	})
	;

});
 $(document).on('click','[data-modal-confirm=true]',function() {
	var $btn=$(this);
	var title=$btn.data("title");
	var message=$btn.data("message");
	var yesCallBack=$btn.data("yes-callback");
	var noCallBack=$btn.data("no-callback");

	var template="<div class='modal fade' data-width='760' style='display: none;'> \
					  <div class='modal-header'> \
						<button id='close' type='button' class='close'>&times;</button> \
						<h4 class='modal-title'> "+title+"</h4> \
					  </div> \
					  <div class='modal-body'> \
						 <p> "+message+"</p> \
					  </div> \
					  <div class='modal-footer'> \
						<button id='yes' type='button' class='btn btn-primary cutter-right'>Yes</button> \
						<button id='no' type='button' class='btn btn-danger cutter-left' data-dismiss='modal'>No</button> \
					  </div> \
					</div>";

	$modal = $(template);
	$("body").append($modal);

	$("#yes",$modal).click(function(){
		$modal.modal('hide');
		eval(yesCallBack);
	});

	$("#no",$modal).click(function(){
		$modal.modal('hide');
		eval(noCallBack);
	});

	$("#close",$modal).click(function(){
		$modal.modal('hide');
		eval(noCallBack);
	});

	$modal
	.modal('show')
	;


});
 