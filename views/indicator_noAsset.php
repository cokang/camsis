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
			<a href="./qap4_indicator"><span class="icon-triangle-left-large" valign="middle"></span> BACK   </a>
		</div>
<div class="ui-middle-screen" style="width: 100%;margin-left: 0px">
	<div class="content-workorder">
		<table class="ui-content-middle-menu-workorder" border="0" width="100%" height="80%" align="center">
			<tr class="ui-color-contents-style">
				<td colspan="2"  valign="top" align="center">
					<div class="ui-left_web">
						<h2 style="color: black;margin-top: 15px;">Calculation for each column (FES/BES)</h2>
						<table class="tblqap">
							<tr align="center">
								<td rowspan="2">Type code - Description</td>
								<td rowspan="2">Number of Assets</td>
								<td>% of Assets Meeting Uptime Target</td>
								<td colspan="4">Monthly</td>
								<td colspan="5">Cumulative</td>
							</tr>
							<tr align="center">
								<td>Cumulative</td>
								<td>Not Meeting Target</td>
								<td>SIQ No</td>
								<td>Closed CAR</td>
								<td>Total CAR</td>
								<td>Not Meeting Target</td>
								<td>SIQ</td>
								<td>Open CAR</td>
								<td>Closed CAR</td>
								<td>Total CAR</td>
							</tr>
							<tr align="center">
								<td>Logic: Type code</td>
								<td>Total asset by type code</td>
								<td>100 - % of downtime</td>
								<td> < 96% 100 - % of downtime</td>
								<td>Not Meeting Target</td>
								<td>Manual created</td>
								<td>Manual created</td>
								<td>Refer apbesys calculation</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
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