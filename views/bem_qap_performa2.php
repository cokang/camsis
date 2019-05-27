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
		<table class="ui-content-middle-menu-workorder" border="0" width="80%" height="80%" align="center">
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
								<th colspan="13" style="background-color: grey;"><p style="float: left; height: 1px;margin-top: 0px; color: white;">BEMS, % OF Assets Meeting Uptime Target >> Pantai</p></th>
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
							    <th>No of SIQs</th>
							    <th>Open CAR</th>
							    <th>Close CAR</th>
							    <th>Total CAR</th>
							    <th>Not Meeting Target</th>
							    <th>SIQ</th>
							    <th>Open CAR</th>
							    <th>Close CAR</th>
							    <th>Total CAR</th>
							</tr>

							<tr align="center">
								<td>Analgesia Units, Inhalation</td>
								<td>69</td>
								<td>97.10</td>
								<td>1</td>
								<td>1</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>2</td>
								<td>10</td>
								<td>3</td>
								<td>7</td>
								<td>1</td>
							</tr>
						
							<tr align="center" class="row-color">
								<td>Analyzers Laboratory, Blood gas/PH, electrolyte</td>
								<td>3</td>
								<td>100.00</td>
								<td>0</td>
								<td>0</td>
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
								<td>86</td>
								<td>59.30</td>
								<td>5</td>
								<td>3</td>
								<td>0</td>
								<td>2</td>
								<td>2</td>
								<td>35</td>
								<td>49</td>
								<td>9</td>
								<td>40</td>
								<td>3</td>
							</tr>
							<tr align="center" class="row-color">
								<td>Analyzers Laboratory, Blood, Urea Nitrogen</td>
								<td>1</td>
								<td>100.00</td>
								<td>0</td>
								<td>0</td>
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
								<td>Analyzers Laboratory, Body Fluids, Electrolyte,F...</td>
								<td>1</td>
								<td>100.00</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center" class="row-color">
								<td>Analyzers Laboratory, Body Fluids, Electrolyte,I...</td>
								<td>16</td>
								<td>87.50</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>2</td>
								<td>7</td>
								<td>0</td>
								<td>7</td>
								<td>0</td>
							</tr>
							<tr align="center">
								<td>Analyzers Laboratory, Body Fluids, Electrolyte, Glucose</td>
								<td>1</td>
								<td>100.00</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr align="center" class="row-color">
								<td>Analyzers Laboratory, Breath, Carbon Monoxide</td>
								<td>2</td>
								<td>100.00</td>
								<td>0</td>
								<td>0</td>
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
								<td>Analyzers Laboratory, Clinical Chemistry, Automat..</td>
								<td>35</td>
								<td>51.43</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>1</td>
								<td>1</td>
								<td>17</td>
								<td>51</td>
								<td>8</td>
								<td>43</td>
								<td>0</td>
							</tr>
							<tr align="center" class="row-color">
								<td>Analyzers Laboratory, Hematology, Blood Grouping</td>
								<td>4</td>
								<td>75.00</td>
								<td>0</td>
								<td>0</td>
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
								<td>Analyzers Laboratory, Hematology, Cell Counting...</td>
								<td>34</td>
								<td>44.12</td>
								<td>3</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>2</td>
								<td>19</td>
								<td>49</td>
								<td>25</td>
								<td>24</td>
								<td>1</td>
							</tr>
							<tr align="center" class="row-color">
								<td>Analyzers Laboratory, Hematology, Cell Counting...</td>
								<td>3</td>
								<td>100.00</td>
								<td>0</td>
								<td>0</td>
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
								<td><b>28242</b></td>
								<td><b>88.84</b></td>
								<td><b>579</b></td>
								<td><b>154</b></td>
								<td><b>35</b></td>
								<td><b>118</b></td>
								<td><b>153</b></td>
								<td><b>3153</b></td>
								<td><b>4254</b></td>
								<td><b>1111</b></td>
								<td><b>3143</b></td>
								<td><b>154</b></td>
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