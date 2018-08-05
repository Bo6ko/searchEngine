
$(document).ready(function() {

	$.ajax({
		url		: "/ajax/statistic",   //ot controller papkata file ajax/method modeles
		type		: "GET",
		dataType	: "json",
		data		: {
			year	: $('#year').val(),
			preventYear:	$('#year').val()-1
		},
		success		: highcharts,
		error		: function(error) {
			console.log(error);
		}
	});
	
});

function highcharts( json ) {
			if ( json.status ) {	
				var yearStat = json.yearStat;
				var	yearStatPrevent = json.yearStatPrevetn;			
				
				Highcharts.chart('container', {
				chart: {
					type: 'areaspline',
					height: 200
				},
				title: {
					text: ''
				},
				legend: {
					layout: 'vertical',
					align: 'left',
					verticalAlign: 'top',
					x: 550,
					y: 200,
					floating: true,
					borderWidth: 1,
					backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#ffffff'
				},
				xAxis: {
					categories: [
						'Janvier',
						'Fevrier',
						'Mars',
						'Avril',
						'Maj',
						'Juin',
						'Jullet',
						'August',
						'Septembre',
						'Octobre',
						'Novembre',
						'Decembre'
					],
				},
				yAxis: {
					title: {
						text: 'Lead Bruts'
					},
					labels: {
					  formatter: function () {
						return this.value / 1000 + 'k';
					  }
					}
				},
				tooltip: {
					shared: true,
					valueSuffix: ' units'
				},
				credits: {
					enabled: false
				},
				plotOptions: {
					areaspline: {
						fillOpacity: 0.5
					}
				},
				series: [{
					name: '2018',
					data: yearStat
				}, {
					name: '2017',
					data: yearStatPrevent
				}],
			});
				
	  
		//console.log(json.html);

			}else{
				console.log(json.message)
			}
		}


