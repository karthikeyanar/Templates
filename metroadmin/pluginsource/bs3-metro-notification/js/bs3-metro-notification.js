
// Shortuct functions
bsAlert=function(message,callback) {

	var template="<div class='modal fade modal-metro notification' role='dialog'> \
						<div class='modal-dialog'> \
							<div class='modal-content'> \
								<div class='modal-body'> \
									<p>"+message+"</p> \
								</div> \
								<div class='modal-footer'> \
									<button type='button' class='btn btn-primary' data-dismiss='modal' aria-hidden='true'>OK</button> \
								</div> \
							</div> \
						</div> \
					</div>";

	var alertModal=$(template);

	alertModal.appendTo(document.body);

	alertModal.modal({
		"backdrop": true,"keyboard": true,"show": false
	});

	alertModal.on('hidden.bs.modal',function(e) {
		if(callback)
			callback();
	});

	alertModal.modal('toggle');

}
