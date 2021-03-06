<?php include_once 'start-page.php' ?>
<title>Pepper - Calendar</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<!-- fullcalendar -->
<link href="css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
<div class="page-header">
	<h1>
		Calendar
	</h1>
</div>
<ul class="breadcrumb">
	<li>
		<a href="index.php">Home</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<a href="form_layout.php">Forms</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<a href="calendar.php">Calendar</a>
	</li>
	<li class="pull-right">
		<a href="#" class="close">&times</a>
	</li>
</ul>
<div class="row">
	<div class="col-lg-3">
		<h3 class="panel-title">
		Draggable Events</h3>
		<div  id="external-events">
			<div class='external-event bg-primary fg-white'>
				My Event 1</div>
			<div class='external-event bg-danger fg-white'>
				My Event 2</div>
			<div class='external-event bg-success fg-white'>
				My Event 3</div>
			<div class='external-event bg-purple fg-white'>
				My Event 4</div>
			<div class='external-event bg-teal fg-white'>
				My Event 5</div>
		</div>
		<label class='checkbox'>
			<input type='checkbox' id='drop-remove' />Remove after drop
		</label>
	</div>
	<div class="col-lg-9">
		<div id='calendar'></div>
	</div>
</div>
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<!-- full calendar -->
<script src="js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<style>
	.external-event {
		margin:10px 0;
		padding:8px;
		cursor:pointer;
	}
</style>
<script>

	$(document).ready(function() {
	 
		/* initialize the external events
		-----------------------------------------------------------------*/

		$('#external-events div.external-event')
		.each(function() {

			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject={
				title: $.trim($(this).text()), // use the element's text as the event title
				className: $(this).attr("class")
			};

			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject',eventObject);

			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});

		});


		/* initialize the calendar
		-----------------------------------------------------------------*/

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: true,
			droppable: true, // this allows things to be dropped onto the calendar !!!
			drop: function(date,allDay) { // this function is called when something is dropped

				// retrieve the dropped element's stored Event Object
				var originalEventObject=$(this).data('eventObject');

				// we need to copy it, so that multiple events don't have a reference to the same object
				var copiedEventObject=$.extend({},originalEventObject);

				// assign it the date that was reported
				copiedEventObject.start=date;
				copiedEventObject.allDay=allDay;
				copiedEventObject.className=originalEventObject.className;

				// render the event on the calendar
				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
				$('#calendar').fullCalendar('renderEvent',copiedEventObject,true);

				// is the "remove after drop" checkbox checked?
				if($('#drop-remove').is(':checked')) {
					// if so, remove the element from the "Draggable Events" list
					$(this).remove();
				}

			}
		});


	});

</script>
<?php include_once 'applicationscript.php' ?>
<?php include_once 'end-page.php' ?>