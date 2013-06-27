$(function() {

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

				jhelper.chartToolTip(item.pageX,item.pageY,
						    item.series.label+" of "+x+" = "+y);
			}
		} else {
			$("#tooltip").remove();
			previousPoint=null;
		}

	});



});
		  