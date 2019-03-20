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
    background-color: grey !important;
    font-size: 14px;
    padding: 8px;
    text-align: center;
    }

    table.tblqap tr td {
    vertical-align: top;
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
<div style="left: 0px;width: 75px;margin-left: 20px;background: #EE8833">
			<a href="./completed_as_schedule"><span class="icon-triangle-left-large" valign="middle"></span> BACK   </a>
		</div>
<div class="ui-middle-screen" style="width: 100%;margin-left: 0px">
	<div class="content-workorder">
		<table class="ui-content-middle-menu-workorder" border="0" width="100%" height="80%" align="center">
			<tr class="ui-color-contents-style">
				<td colspan="2"  valign="top" align="center">
					<div class="ui-left_web">
						<h2 style="color: black; margin-top: 15px;">Calculation for each column (FES/BES)</h2>
						<table class="tblqap">
							<tr align="center">
								<th>Number of Asset</th>
								<th>% Of PPM Completed</th>
								<th>PPM Scheduled</th>
								<th>PPM Missed</th>
								<th>SIQ No</th>
								<th>CAR</th>
							</tr>
							<tr align="center">
								<td><i>How system calculate:</i><br><u><i>Total assets by typecode</i></u></td>
								<td><i>How system calculate:</i><br><u><i>Total PPM Scheduled - PPM Missed)/(Total PPM Scheduled)&100%</i></u></td>
								<td><i>How system calculate:</i><br><u><i>Total PPM Copleted for the month/total PPM scheduled for the month</i></u></td>
								<td><i>How system calculate:</i><br><u><i>Total PPM not cmpleted for the month</i></u></td>
								<td><i>How system calculate:</i><br><u><i>i)Total PPM Not Completed for the month <br> <br>ii)Total PPM Not Completed for the month</i></u></td>
     							<td><i>How system calculate:</i><br><u><i>i)total related CAR for each SIQ (manual created)</i></u></td>
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
	</body>
		</html>