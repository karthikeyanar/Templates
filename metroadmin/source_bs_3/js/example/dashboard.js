$(function() {

 

	var date=new Date();
	var d=date.getDate();
	var m=date.getMonth();
	var y=date.getFullYear();

	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		editable: true,
		events: [
				{
					title: 'All Day Event',
					start: new Date(y,m,1)
				},
				{
					title: 'Long Event',
					start: new Date(y,m,d-5),
					end: new Date(y,m,d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y,m,d-3,16,0),
					allDay: false
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y,m,d+4,16,0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y,m,d,10,30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y,m,d,12,0),
					end: new Date(y,m,d,14,0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y,m,d+1,19,0),
					end: new Date(y,m,d+1,22,30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y,m,28),
					end: new Date(y,m,29),
					url: 'http://google.com/'
				}
			]
	});

	$(".chat-content").slimscroll({
		height: '400px'
	});

	/* pie chart */

	var data=[],
	series=Math.floor(Math.random()*6)+3;

	for(var i=0;i<series;i++) {
		data[i]={
			label: "Series"+(i+1),
			data: Math.floor(Math.random()*100)+1
		}
	}

	var placeholder=$("#pie-chart1");

	$.plot($("#pie-chart1"),data,{
		series: {
			pie: {
				show: true
			}
		}
	});

	/* interactivity chart */

	var sin=[],
			cos=[];

	for(var i=0;i<14;i+=0.5) {
		sin.push([i,Math.sin(i)]);
		cos.push([i,Math.cos(i)]);
	}

	var plot=$.plot("#interactivity",[
			{ data: sin,label: "sin(x)" },
			{ data: cos,label: "cos(x)" }
		],{
			series: {
				lines: {
					show: true
				},
				points: {
					show: true
				}
			},
			grid: {
				hoverable: true,
				clickable: true
			},
			yaxis: {
				min: -1.2,
				max: 1.2
			}
		});

	var previousPoint=null;
	$("#interactivity").bind("plothover",function(event,pos,item) {


		if(item) {
			if(previousPoint!=item.dataIndex) {

				previousPoint=item.dataIndex;

				$("#tooltip").remove();
				var x=item.datapoint[0].toFixed(2),
						y=item.datapoint[1].toFixed(2);

				APP.chartToolTip(item.pageX,item.pageY,
						    item.series.label+" of "+x+" = "+y);
			}
		} else {
			$("#tooltip").remove();
			previousPoint=null;
		}

	});



});
		  