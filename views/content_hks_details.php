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
						<h2 style="color: black;margin-top: 2%;">HKS % Acceptable Quality Cleaning</h2>
				    <table class="tblqap ui-content-middle-menu-workorder2" style="width: 30%;">
						<tr align="left" class="ui-middle-color">
								<th colspan="5" style="background-color: grey;"><p style="float: left; height: 1px;margin-top: 0px; color: white;">Joint Inspection Summary</p></th>
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
							<tr align="center">
								<th>User Area</th>
								<th>User Locations</th>
								<th>Satisfactory</th>
								<th>Unsatisfactory</th>
								<th>Total</th>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/hks_details2', '<u>Accident & Emergency</u>'); ?></td>
								<td>49</td>
								<td>1233</td>
								<td>152</td>
								<td>1381</td>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/hks_details2', '<u>Administration</u>'); ?></td>
								<td>15</td>
								<td>442</td>
								<td>33</td>
								<td>47</td>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/hks_details2', '<u>Admission / Revenue</u>'); ?></td>
								<td>7</td>
								<td>203</td>
								<td>6</td>
								<td>20</td>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/hks_details2', '<u>Balai Pelawat</u>'); ?></td>
								<td>10</td>
								<td>220</td>
								<td>40</td>
								<td>26</td>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/hks_details2', '<u>Cafeteria</u>'); ?></td>
								<td>3</td>
								<td>63</td>
								<td>21</td>
								<td>8</td>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/hks_details2', '<u>Central Stenie Supply Department</u>'); ?></td>
								<td>19</td>
								<td>443</td>
								<td>66</td>
								<td>502</td>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/hks_details2', '<u>Continuing Medical Education/QA</u>'); ?></td>
								<td>11</td>
								<td>323</td>
								<td>20</td>
								<td>343</td>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/hks_details2', '<u>Haemodialysis</u>'); ?></td>
								<td>30</td>
								<td>816</td>
								<td>16</td>
								<td>835</td>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/hks_details2', '<u>Health Education</u>'); ?></td>
								<td>4</td>
								<td>101</td>
								<td>4</td>
								<td>105</td>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/hks_details2', '<u>Imaging</u>'); ?></td>
								<td>18</td>
								<td>585</td>
								<td>15</td>
								<td>600</td>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/hks_details2', '<u>Intensive Care Unit</u>'); ?></td>
								<td>18</td>
								<td>585</td>
								<td>15</td>
								<td>600</td>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/hks_details2', '<u>Kitchen</u>'); ?></td>
								<td>18</td>
								<td>585</td>
								<td>15</td>
								<td>600</td>
							</tr>
							<tr align="center">
								<td><?php echo anchor ('contentcontroller/hks_details2', '<u>Labour Delivery Suite </u>'); ?></td>
								<td>18</td>
								<td>585</td>
								<td>15</td>
								<td>600</td>
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