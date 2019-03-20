<style type="text/css">
	.tblqap, .tblqap tr, .tblqap tr th, .tblqap tr td{
		background: white;
		color: black;
		border:1px solid black;
	}

	.white-border-rl{
		border-left: 1px solid white;
		border-right: 1px solid white;
	}
	table.tblqap th {
    background: grey;
    background-color: #D3D3D3; !important;
    font-size: 14px;
    padding: 8px;
    text-align: center;
    }

	select.dateselector{
		border:0px;
	}
	.ui-color-contents-style{
		background: white;
		opacity: 0.9;
		filter: alpha(opacity=90);
		-moz-opacity: 0.9;
		-khtml-opacity: 0.9;
		position: relative;
		z-index: 1;
	}
</style>
<div class="ui-middle-screen">
	<div class="content-workorder">
		<table class="ui-content-middle-menu-workorder" border="0" width="80%" height="80%" align="center">
			<tr class="ui-color-contents-style">
				<td colspan="2"  valign="top" align="center">
					<div class="ui-left_web">
						<h2 style="color: black; margin-top: 15px;">Overall QAP Performance Indicator</h2>
						<table class="tblqap">
						<tr>
								<th colspan="5"><p style="float: left; height: 1px;">Overall QAP Performance Indicator</p></th>
							</tr>
							<tr align="center">
								<th>Hospital</th>
								<th>Service</th>
								<th>Indicator</th>
								<th>Performance</th>
								<th>Analysis</th>
							</tr>
							<tr align="center">
								<td rowspan="4">IIUM</td>
								<td rowspan="2">FES</td>
								<td><?php echo anchor ('contentcontroller/qap4_indicator', 'i)% of PPM Completed as Schedule(100%)'); ?></td>
								<td>100%</td>
								<td><?php echo anchor ('contentcontroller/completed_as_schedule', 'PPM'); ?></td>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/qap4_indicator', 'ii)% of Assets Meeting/Exceedinf Uptime Target(100%)'); ?></td>
								<td>96%</td>
								<td><?php echo anchor ('contentcontroller/completed_as_schedule', 'Uptime'); ?></td>
							</tr>
							<tr align="center">
								<td rowspan="2">BES</td>
								<td><?php echo anchor ('contentcontroller/qap4_indicator', 'i)% of PPM Completed as Schedule(100%)'); ?></td>
								<td>100%</td>
								<td><?php echo anchor ('contentcontroller/completed_as_schedule', 'PPM'); ?></td>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/qap4_indicator', 'ii)% of Assets Meeting/Exceedinf Uptime Target(100%)'); ?></td>
								<td>96%</td>
								<td><?php echo anchor ('contentcontroller/completed_as_schedule', 'Uptime'); ?></td>
							</tr>
							<tr align="center">
								<td></td>
								<td>HKS</td>
								<td><?php echo anchor ('contentcontroller/qap4_indicator', 'i)% of Acceptable Cleansing Quality(95%)'); ?></td>
								<td>95%</td>
								<td><?php echo anchor ('contentcontroller/completed_as_schedule', 'Cleanliness'); ?></td>
						    </tr>

						</table>
					
					</div>

				</td>
			</tr>
			<tr class="ui-header-new" style="height:5px;">
				<td align="center" colspan="3">
				</td>
			</tr>
		</table>
	</div>
</div>
<script src="<?php echo base_url(); ?>js/highcharts.js"></script>
<script src="<?php echo base_url(); ?>js/highcharts-3d.js"></script>
<script type="text/javascript">
		(function($){ // encapsulate jQuery
			$(function () {
    $('#container').highcharts({

        chart: {
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 1,
                viewDistance: 25,
                depth: 50
            },
            marginTop: 80,
            marginRight: 40
        },

        title: {
            text: ''
        },

        xAxis: {
            categories: ['PPM', 'Uptime', 'Total']
        },

        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: 'Occurance'
            }
        },

        plotOptions: {
            column: {
                stacking: 'normal',
                depth: 40
            }
        },

        series: [{
            name: 'SIQ',
            data: [<?=$PPMSIQ?>, <?=$UptimeSIQ?>, <?=$TotalSIQ?>],
            stack: 'SIQ'
        }, {
            name: 'CAR',
            data: [<?=$PPMCAR?>, <?=$UptimeCAR?>, <?=$TotalCAR?>],
            stack: 'CAR'
        }]
    });
});

		})(jQuery);
	</script>
	</body>
		</html>