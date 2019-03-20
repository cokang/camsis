<style type="text/css">
	.tblqap, .tblqap tr, .tblqap tr th{
		border-left: 1px solid black;
		border-right: 1px solid black;
		background: white;
		color: black;
		border-bottom:0px;
		border-top: 1px solid black;
	}

	.tblqap tr th:nth-child(1){
		background: #D3D3D3;
	}

	.white-border-rl{
		border-left: 1px solid white;
		border-right: 1px solid white;
	}

	select.dateselector{
		border:0px;
	}

	select.dateselector option:nth-child(1){
		text-decoration: underline;
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
							<tr align="center" class="ui-middle-color">
								<th>Hospital</th>
								<th>Month</th>
								<th>Year</th>
							</tr>
							<tr align="center" >
								<td><?php echo anchor ('contentcontroller/qap4_table', '<u>IIUM</u>'); ?></td>
								 <td>January</td>
								<td>2019</td>
							</tr>
							<tr>
								<td colspan="3" class="white-border-rl">
									<p>Please click show to view changes</p>
								</td>
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