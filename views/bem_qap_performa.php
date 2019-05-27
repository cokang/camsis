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
	table.tblqap tr.row-color td{
		background-color: #f5eeee;
	}
</style>
<div style="left: 0px;width: 75px;margin-left: 20px;background: #EE8833">
			<a href="./performa_ind"><span class="icon-triangle-left-large" valign="middle"></span> BACK   </a>
		</div>
<div class="ui-middle-sceen" style="width: 100%; margin-left: 0px">
	<div class="content-workorder">
		<table class="ui-content-middle-menu-workorder" border="0" width="80%" height="90%" align="center">
			<tr class="ui-color-contents-style">
				<td colspan="2"  valign="top" align="center">
					<div class="ui-left_web">
						<table class="tblqap ui-content-middle-menu-workorder2" style="width: 50%;">
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
										<select name="Level">
											<option value="1">National</option>
										</select>
								</td>
								<td>
										<select name="option">
											<option value="1">All</option>
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
								<th colspan="9" style="background-color: grey;"><p style="float: left; height: 1px;margin-top: 0px; color: white;">BEMS, % Of PPM Cimpleted as Scheduled >> All</p></th>
							</tr>
							<tr align="center">
								<th rowspan="2">Asset Group/Asset Description</th>
								<th rowspan="2">Number of Assets</th>
								<th rowspan="2">% Of PPM Completed</th>
								<th rowspan="2">PPM Scheduled</th>
								<th rowspan="2">PPM Missed</th>
								<th rowspan="2">No. of SIQs</th>
								<th colspan="3">CAR</th>
							</tr>
											   
				            <tr>
							    <th>Open</th>
							    <th>Closed</th>
							    <th>Total</th>
							</tr>

							<tr align="center">
								<td>Analgesia Units, Inhalation</td>
								<td>263</td>
								<td>100.00</td>
								<td>16</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
						
							<tr align="center" class="row-color">
								<td>Analyzers Laboratory, Blood gas/PH/electrolyte</td>
								<td>106</td>
								<td>100.00</td>
								<td>9</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>

							<tr align="center">
								<td>Analyzers Laboratory, Blood gas/PH</td>
								<td>450</td>
								<td>88.00</td>
								<td>25</td>
								<td>3</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center" class="row-color">
								<td>Analyzers Laboratory, Blood, Urea Nitrogen</td>
								<td>33</td>
								<td>37.50</td>
								<td>8</td>
								<td>5</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center">
								<td>Analyzers Laboratory, Body Fluids, Amino Acid</td>
								<td>2</td>
								<td>NS</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center" class="row-color">
								<td>Analyzers Laboratory, Body Fluids, Chloride</td>
								<td>17</td>
								<td>NS</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center">
								<td>Analyzers Laboratory, Body Fluids, Creatinine</td>
								<td>2</td>
								<td>NS</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center" class="row-color">
								<td>Analyzers Laboratory, Body Fluids, Electrolyte, Coulometric</td>
								<td>14</td>
								<td>100.00</td>
								<td>1</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center">
								<td>Analyzers Laboratory, Body Fluids, Electrolyte, Flame Photo</td>
								<td>48</td>
								<td>NS</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center" class="row-color">
								<td>Analyzers Laboratory, Body Fluids, Electrolyte, Ion-Selecti</td>
								<td>203</td>
								<td>100.00</td>
								<td>14</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							 <tr align="center">
								<td>Analyzers Laboratory, Body Fluids, Enzyme</td>
								<td>5</td>
								<td>NS</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center" class="row-color">
								<td>Analyzers Laboratory, Body Fluids, Glucose</td>
								<td>81</td>
								<td>100.00</td>
								<td>1</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							</tr>
								<tr>
								<td align="right"><b>Grand Total<b></td>
								<td><b>187833</b></td>
								<td><b>95.33</b></td>
								<td><b>13437</b></td>
								<td><b>627</b></td>
								<td><b>0</b></td>
								<td><b>1</b></td>
								<td><b>33</b></td>
								<td><b>34</b></td>
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