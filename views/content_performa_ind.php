<style type="text/css">
	.tblqap, .tblqap tr, .tblqap tr th, .tblqap tr td{
		background: white;
		color: black;
		border:1px solid black;
		padding: 3px;
	}

	.white-border-rl{
		border-left: 1px solid white;
		border-right: 1px solid white;
	}
	table.tblqap th {
    background: grey;
    background-color: #D3D3D3;!important;
    font-size: 14px;
    padding: 3px;
    text-align: center;
    }

	select, td button{
		width: 100%;
		margin: 0px;
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

<div class="ui-middle-sceen" style="margin-left: 20%;margin-right: 1%; padding-top: 2%;">
	<div class="content-workorder">
		<table class="ui-content-middle-menu-workorder" border="0" width="80%" height="80%" align="center">
			<tr class="ui-color-contents-style">
				<td colspan="2"  valign="top" align="center">
					<div class="ui-left_web">
						<h2 style="color: black;margin-top: 2%;">FES/BES Performance Indicator</h2>
						<table class="tblqap ui-content-middle-menu-workorder2" style="width: 30%;">
						<tr align="left" class="ui-middle-color">
								<th colspan="5" style="background-color: grey;"><p style="float: left; height: 1px;margin-top: 0px; color: white;">BEMS QAP Performance Indicator</p></th>
							</tr>
							<tr align="center" class="ui-middle-color">
								<th>Level</th>
								<th>Option</th>
								<th>Month</th>
								<th>Year</th>
								<th><b>*******</b></th>
							</tr>
							<tr align="center">
									<td>
										<select name="level">
											<option value="1">Consortia</option>
										</select>
								</td>
								<td>
										<select name="option">
											<option value="1">Medivest</option>
										</select>
								</td>
									<td>
										<select name="month2">
											<option value="1">January</option>
											<option>February</option>
											<option>March</option>
											<option>April</option>
											<option>May</option>
											<option>June</option>
											<option>July</option>
											<option>August</option>
											<option>September</option>
											<option>October</option>
											<option>November</option>
											<option>December</option>
										</select>
								</td>
								<td>								
									<select name="year2">
										<option>2017</option>
										<option>2018</option>
										<option>2019</option>
									</select>
								</td>
									<td valign="top">	
										<?php echo anchor ('contentcontroller/qap4_','<button style="padding: 0px; background-color: black; color:white; border-radius: 20%;"><b>Show</b></button>'); ?>
									</td>
		 					</tr>
						</table>
						<table class="tblqap">
						<tr>
								<th colspan="3" style="background-color: grey;"><p style="float: left; height: 1px;margin-top: 0px; color: white;">FEMS QAP Performance Indicator</p></th>
							</tr>
							<tr align="center">
								<th>Consortia</th>
								<th>% Of PPM Completed as Scheduled</th>
								<th>% Of Assets Meeting/Exceeding Uptime Target</th>
							</tr>
							<tr align="center">
								<td><u>Medivest</u></td>
								<td><?php echo anchor ('contentcontroller/bem_qap_performa', '<u>77.16</u>'); ?></td>
								<td><?php echo anchor ('contentcontroller/bem_qap_performa2', '<u>78.14</u>'); ?></td>
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