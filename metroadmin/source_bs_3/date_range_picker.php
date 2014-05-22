<?php include_once 'start-page.php' ?>
<title>Pepper - Date Picker</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<!-- bootstrap daterange picker -->
<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
<div class="page-header">
	<h1>Date Range Picker</h1>
</div>
<ul class="breadcrumb">
	<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="form_component.php">Plugins</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="form_component.php">Date Range Picker</a> </li>
	<li class="pull-right"><a href="#" class="close">&times</a></li>
</ul>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading panel-title">
				<h3 class="panel-title">Date Range Pickers</h3>
			</div>
			<div class="panel-body">
				<form method="post" class="form-horizontal form-striped" onsubmit="return false">
					<div class="form-group">
						<label class="col-md-3 control-label">Reservation</label>
						<div class="col-md-9">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-calendar cursor-pointer"></i></span>
								<input type="text" class="form-control" name="reservation" id="reservation" value="03/18/2013 - 03/23/2013" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Reservation With Time</label>
						<div class="col-md-9">
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-calendar cursor-pointer"></i></span>
								<input type="text" class="form-control" name="reservation" id="reservationtime" value="08/01/2013 1:00 PM - 08/01/2013 1:30 PM"	/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Advanced Date Ranges</label>
						<div class="col-md-9">
							<button id="reportrange" class="btn btn-default">
								<i class="fa fa-calendar cursor-pointer margin-right-10"></i><span class="margin-right-10"></span><b class="caret"></b>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<!-- bootstrap daterange picker -->
<script src="js/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="js/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<?php include_once 'applicationscript.php' ?>
<script>
	$(function(){
		$('#reservation').daterangepicker();
		$('#reservationtime').daterangepicker({
			timePicker: true,
			timePickerIncrement: 30,
			format: 'MM/DD/YYYY h:mm A'
		});
		$('#reportrange').daterangepicker(
		{
	        startDate: moment().subtract('days',29),
	        endDate: moment(),
	        minDate: '01/01/2012',
	        maxDate: '12/31/2014',
	        dateLimit: { days: 60 },
	        showDropdowns: true,
	        showWeekNumbers: true,
	        timePicker: false,
	        timePickerIncrement: 1,
	        timePicker12Hour: true,
	        ranges: {
	        'Today': [moment(),moment()],
	        'Yesterday': [moment().subtract('days',1),moment().subtract('days',1)],
	        'Last 7 Days': [moment().subtract('days',6),moment()],
	        'Last 30 Days': [moment().subtract('days',29),moment()],
	        'This Month': [moment().startOf('month'),moment().endOf('month')],
	        'Last Month': [moment().subtract('month',1).startOf('month'),moment().subtract('month',1).endOf('month')]
	        },
	        opens: 'right',
	        buttonClasses: ['btn btn-default'],
	        applyClass: 'btn-small btn-primary',
	        cancelClass: 'btn-small',
	        format: 'MM/DD/YYYY',
	        separator: ' to ',
	        locale: {
	        applyLabel: 'Submit',
	        fromLabel: 'From',
	        toLabel: 'To',
	        customRangeLabel: 'Custom Range',
	        daysOfWeek: ['Su','Mo','Tu','We','Th','Fr','Sa'],
	        monthNames: ['January','February','March','April','May','June','July','August','September','October','November','December'],
	        firstDay: 1
	        }
	        },
			function(start,end) {
				console.log("Callback has been called!");
				$('#reportrange span').html(start.format('MMMM D, YYYY')+' - '+end.format('MMMM D, YYYY'));
			}
	    );
		//Set the initial state of the picker label
		$('#reportrange span').html(moment().subtract('days',29).format('MMMM D, YYYY')+' - '+moment().format('MMMM D, YYYY'));
	});
</script>
<?php include_once 'end-page.php' ?>