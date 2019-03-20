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
<div style="left: 0px;width: 75px;margin-left: 20px;background: #EE8833">
			<a href="./qap4_table"><span class="icon-triangle-left-large" valign="middle"></span> BACK   </a>
		</div>
<div class="ui-middle-sceen" style="width: 100%; margin-left: 0px">
	<div class="content-workorder">
		<table class="ui-content-middle-menu-workorder" border="0" width="80%" height="80%" align="center">
			<tr class="ui-color-contents-style">
				<td colspan="2"  valign="top" align="center">
					<div class="ui-left_web">
						<h2 style="color: black;margin-top: 2%;">FES/BES - % of Assets Meeting/Exceeding Uptime Target</h2>
						<table class="tblqap" style="width: 50%;">
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
										<select name="Hospital">
											<option value="1">Hospital</option>
										</select>
								</td>
								<td>
										<select name="option">
											<option value="1">Alor Gajah</option>
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
								<th colspan="13" style="background-color: grey;"><p style="float: left; height: 1px;margin-top: 0px; color: white;">BEMS, % OF Assets Meeting Uptime Target >> Alor Gajah</p></th>
							</tr>
							<tr align="center">
								<th rowspan="2">Type code - Description</th>
								<th rowspan="2">Number of Assets</th>
								<th>% Of Assets Meeting Uptime Target</th>
								<th colspan="5">Monthly</th>
								<th colspan="5">Cumulative</th>
							</tr>
											   
				            <tr>
							    <th>Cumulative</th>
							    <th>Not Meeting Target</th>
							    <th>SIQ No</th>
							    <th>Open CAR</th>
							    <th>Close CAR</th>
							    <th>Total CAR</th>
							    <th>Not Meeting Target</th>
							    <th>SIQ No</th>
							    <th>Open CAR</th>
							    <th>Close CAR</th>
							    <th>Total CAR</th>
							</tr>

							<tr align="center">
								<td>Analgesia Units, Inhalation</td>
								<td><?php echo anchor ('contentcontroller/indicator_noAsset', '3'); ?></td>
								<td>100.00</td>
								<td>0</td>
								<td></td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
						
							<tr align="center">
								<td>Analyzers Laboratory, Blood gas/PH</td>
								<td><?php echo anchor ('contentcontroller/indicator_noAsset', '3'); ?></td>
								<td>100.00</td>
								<td>0</td>
								<td></td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>

							<tr align="center">
								<td>Analyzers Laboratory, Clinical Chemistry, Automat.</td>
								<td><?php echo anchor ('contentcontroller/indicator_noAsset', '1'); ?></td>
								<td>100.00</td>
								<td>0</td>
								<td></td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center">
								<td>Analyzers Laboratory, Hematology, Cell Counting, ..</td>
								<td><?php echo anchor ('contentcontroller/indicator_noAsset', '2'); ?></td>
								<td>100.00</td>
								<td>0</td>
								<td></td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center">
								<td>Analyzers Laboratory, Hematology, Coagulatin,, ..</td>
								<td><?php echo anchor ('contentcontroller/indicator_noAsset', '1'); ?></td>
								<td>100.00</td>
								<td>0</td>
								<td></td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center">
								<td>Analyzers Laboratory, Microbiology, Blood Culture</td>
								<td><?php echo anchor ('contentcontroller/indicator_noAsset', '1'); ?></td>
								<td>100.00</td>
								<td>0</td>
								<td></td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center">
								<td>Analyzers, Point-of-Care, Whole Blood, Coagulation</td>
								<td><?php echo anchor ('contentcontroller/indicator_noAsset', '1'); ?></td>
								<td>100.00</td>
								<td>0</td>
								<td></td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center">
								<td>Anesthesia Units</td>
								<td><?php echo anchor ('contentcontroller/indicator_noAsset', '1'); ?></td>
								<td>0.00</td>
								<td>0</td>
								<td></td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>1</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center">
								<td>Aspirators</td>
								<td><?php echo anchor ('contentcontroller/indicator_noAsset', '23'); ?></td>
								<td>95.65</td>
								<td>0</td>
								<td></td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>1</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center">
								<td>Audiometers</td>
								<td><?php echo anchor ('contentcontroller/indicator_noAsset', '1'); ?></td>
								<td>100.00</td>
								<td>0</td>
								<td></td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							 <tr align="center">
								<td>Balance, Electronic</td>
								<td><?php echo anchor ('contentcontroller/indicator_noAsset', '3'); ?></td>
								<td>100.00</td>
								<td>0</td>
								<td></td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center">
								<td>Balances, Electronic, Analytical</td>
								<td><?php echo anchor ('contentcontroller/indicator_noAsset', '3'); ?></td>
								<td>100.00</td>
								<td>0</td>
								<td></td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							</tr>
								<tr>
								<td align="right"><b>Grand Total<b></td>
								<td><?php echo anchor ('contentcontroller/indicator_noAsset', '<b>380</b>'); ?></td>
								<td><b>96.32</b></td>
								<td><b>14</b></td>
								<td><b>1</b></td>
								<td><b>0</b></td>
								<td><b>0</b></td>
								<td><b>0</b></td>
								<td><b>14</b></td>
								<td><b>1</b></td>
								<td><b>0</b></td>
								<td><b>0</b></td>
								<td><b>0</b></td>
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