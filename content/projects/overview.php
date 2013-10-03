<div class="row-fluid">
	<div class="span6">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-signal"></i>
                </span>
                <h5>Mission Numbers</h5>
            </div>
            <div class="widget-content">
                <div id="mission-numbers"></div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(e) {
	var chart = new Highcharts.Chart({
		chart: {
			renderTo: 'mission-numbers',
			type: 'column'
		},
		title: {
			text: null
		},
		xAxis: {
			categories: [
				'Mission 1',
				'Mission 2',
				'Mission 3',
				'Mission 4',
				'Mission 5',
				'Mission 6',
				'Mission 7'
			]
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Total'
			}
		},
		tooltip: {
			formatter: function() {
				return ''+
					this.x +' - '+ this.y;
			}
		},
		plotOptions: {
			column: {
				pointPadding: 0.2,
				borderWidth: 0
			}
		},
			series: [{
			name: 'Guests',
			data: [152,45,41,47,57,39,37],
		dataLabels: {
				enabled: true,
				rotation: 0,
				color: '#FFFFFF',
				align: 'center',
				x: 0,
				y: 20,
				style: {
					fontSize: '13px',
					fontFamily: 'Verdana, sans-serif'
				}
			}

		}]
	});
});
</script>