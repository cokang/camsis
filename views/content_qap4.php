<style type="text/css">
	.tblqap, .tblqap tr, .tblqap tr th, .tblqap tr td{
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
		background: #FFFF99;
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
	<?php echo form_open('contentcontroller/qap4_');?>
		<table class="ui-content-middle-menu-workorder" border="0" width="80%" height="80%" align="center">
			<tr class="ui-color-contents-style">
				<td colspan="2"  valign="top" align="center">
					<div class="ui-left_web">
					<h2 style="color: black;margin-top: 15px;">Overall QAP Performance Indicator</h2>
						<table class="tblqap">
							<tr align="center" class="ui-middle-color">
								<th>Hospital</th>
								<th>Month</th>
								<th>Year</th>
							</tr>
							<tr align="center" >
								<td>IIUM</td>
									<td>
										<select name="month" class="dateselector">
											<option><p style="text-decoration: underline;">Drop down<p></option>
											<option value="1">January</option>
											<option value="2">February</option>
											<option value="3">March</option>
											<option value="4">April</option>
											<option value="5">May</option>
											<option value="6">June</option>
											<option value="7">July</option>
											<option value="8">August</option>
											<option value="9">September</option>
											<option value="10">October</option>
											<option value="11">November</option>
											<option value="12">December</option>
										</select>
								</td>
								<td>								
								<?php
								$year_list[null]='<p style="text-decoration: underline;">Drop down<p>';
									for ($dyear = '2008';$dyear <= date("Y");$dyear++){
										$year_list[$dyear] = $dyear;
									}
									?>
									<?php echo form_dropdown('year', $year_list , 'class="dateselector"'); ?>
								</td>
							</tr>
							<tr>
								<td colspan="3" class="white-border-rl" style="border-left: 1px solid white; border-right: 1px solid white;">
									<p>Please click show to view changes</p>
								</td>
							</tr>
						</table>
					</div>

				</td>
				<td valign="top">
					<div class="ui-left_web" style="margin-top: 90px;">
						<button style="padding: 5px;">Show</button>

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