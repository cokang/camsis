<body>
<style type="text/css">
	.pdfview{
		/*height: 92%;*/
	}
	@media print{
		.pdfview{
			height: 92%;
		}
	}
</style>
<div id="Instruction" class="pr-printer">
	<div class="header-pr">Planned Preventive Maintenance (PPM)</div>
	<button onclick="javascript:myFunctionprint();" class="btn-button btn-primary-button">PRINT</button>
	<!-- <button type="cancel" class="btn-button btn-primary-button" onclick="location.href = '<?php base_url();?>report_ppmun'";>CANCEL</button> -->
</div>
	<div class="pdfview" style="border: 1px solid black; width: 94%; text-align: center; margin: 3%; padding-top: 5%; padding-bottom: auto;">
		<table class="tbl-wo-2" style="width:90%;" border="0">
			<tr>
				<td valign="">
					<span style="font-weight:bold; font-size: 25px;"><i>SERVICE REPORT</i></span>
				</td>
				<td></td>
				<td valign="" rowspan="" style="width:5%;">
					<img src="<?php echo base_url(); ?>images/logo.png" style="width:131px; height:auto;"/>
				</td>
			</tr>
			<tr>
				<td valign="" style="height: 77px;">
					<span style="font-weight:bold; font-size: 25px; color: #6969f7"><i>AP/MMYY/XXXXX </i></span>
				</td>
				<td></td>
				<td valign="" rowspan="" style="width:5%;"></td>
			</tr>
			<tr>
				<td valign="top" colspan="3">
					<table class="tbl-wo-2" style="line-height: 33px">
						<tr>
							<td colspan="6">Nature of Visit:</td>
						</tr>
						<tr>
							<td width="15%">Breakdown</td>
							<td width="48%" colspan="2"><input type="checkbox" name="breakdown"></td>
							<td width="15%">LOC NO</td>
							<td width="1%">:</td>
							<td width="21%">
								<span style="float:left; width: 80%; border-bottom: 1px solid black; min-height: 19px;"></span>
							</td>
						</tr>
						<tr>
							<td>PPM</td>
							<td colspan="2"><input type="checkbox" name="ppm"></td>
							<td>PO NO</td>
							<td>:</td>
							<td>
								<span style="float:left; width: 80%; border-bottom: 1px solid black; min-height: 19px;"></span>
							</td>
						</tr>
						<tr>
							<td>Others</td>
							<td colspan="2"><input type="checkbox" name="others"></td>
							<td>Letter Ref</td>
							<td>:</td>
							<td>
								<span style="float:left; width: 80%; border-bottom: 1px solid black; min-height: 19px;"></span>
							</td>
						</tr>
						<tr>
							<td>Work Order No</td>
							<td colspan="5">:</td>
						</tr>
						<tr>
							<td colspan="3">Equipment:</td>
							<td colspan="3">Asset No:</td>
						</tr>
						<tr>
							<td colspan="3">Manufacturer :</td>
							<td colspan="3">Serial No :</td>
						</tr>
						<tr>
							<td colspan="6">Brand/Model:</td>
						</tr>
						<tr>
							<td colspan="6">Failure Report</td>
						</tr>
						<tr>
							<td colspan="6" style="height: 66px; padding: 0px;">
								<textarea style="width: 100%; height: 100%;"></textarea>
							</td>
						</tr>
						<tr>
							<td colspan="6">Troubleshoot/Corrective Action</td>
						</tr>
						<tr>
							<td colspan="6" style="height: 66px; padding: 0px;">
								<textarea style="width: 100%; height: 100%;"></textarea>
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<div style="display: inline-block; display: flex; align-items: center;">
									<div style="display: flex;align-items: center; width: 33px; height: 19px; border: 1px solid black; float: left; margin-right: 10px;"></div>
									<span style="float: left;">Job Completed</span>
								</div>
							</td>
							<td colspan="3">
								<div style="display: inline-block; display: flex; align-items: center;">
									<div style="display: flex;align-items: center; width: 33px; height: 19px; border: 1px solid black; float: left; margin-right: 10px;"></div>
									<span style="float: left; ">To be continued</span>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="6">
								<table class="tbl-wo-2" border="1">
									<tr>
										<td width="50%" style="padding-left: 10px;">Parts Replaced/Recommended Parts To Change</td>
										<td width="40%" style="padding-left: 10px;">Part No.</td>
										<td width="10%" style="padding-left: 10px;">Qty</td>
									</tr>
									<tr>
										<td height="23px" style="padding-left: 10px;"></td>
										<td style="padding-left: 10px;"></td>
										<td style="padding-left: 10px;"></td>
									</tr>
									<tr>
										<td height="23px" style="padding-left: 10px;"></td>
										<td style="padding-left: 10px;"></td>
										<td style="padding-left: 10px;"></td>
									</tr>
									<tr>
										<td height="23px" style="padding-left: 10px;"></td>
										<td style="padding-left: 10px;"></td>
										<td style="padding-left: 10px;"></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="6">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="6">
								<table class="tbl-wo-2" border="1">
									<tr>
										<td width="50%">
											<div style="width: 80%; margin-left: 10%; margin-right: 10%">
												<div style="width: 100%; display: inline-block;">
													<span style="min-width:18%; float: left;">
														Done by:
													</span>
													<span style="float:left; width: 70%; border-bottom: 1px solid black; min-height: 19px;"></span>
												</div>
												<br>
												<div style="width: 100%;text-align: center; margin-bottom: 20px;">( Sign &amp; Chop )</div>
											</div>
										</td>
										<td width="50%">
											<div style="width: 80%; margin-left: 10%; margin-right: 10%">
												<div style="width: 100%; display: inline-block;">
													<span style="width:20%; float: left;">
														Customer:
													</span>
													<span style="float:left; width: 60%; border-bottom: 1px solid black; min-height: 19px;"></span>
												</div>
												<br>
												<div style="width: 100%;text-align: center; margin-bottom: 20px;">( Sign &amp; Chop )</div>
											</div>
										</td>
									</tr>
									<tr>
										<td width="50%" style="border-right: 0px solid white; padding-left: 10px;">
											Date:
										</td>
										<td width="50%" style="border-left: 0px solid white; padding-left: 10px;">
											Date:
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="6">
								<table class="tbl-wo-2">
									<tr>
										<td align="center">
											<font style="margin-top: 0px; float: top;"><strong>ADVANCE PACT SDN BHD</strong>(412169-V)</font>
										</td>
									</tr>
									<tr>
										<td align="center">
											2-3A Perdana The Place, Jalan PJU 8/5G, Bandar Damansara Perdana  47820 Petaling Jaya, Selangor, Malaysia.
										</td>
									</tr>
									<tr>
										<td align="center">
											Tel : +6(03)-7726 8632/7727 9859/7728 4752 Fax:+6(03)7728 3075&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website : <span style="text-decoration: underline; color: blue;">www.advancepact.com</span>
										</td>
									</tr>
									<tr>
										<td align="center">
											<b>HOTLINE:</b>+6(017)272 7226
										</td>
									</tr>
									<tr>
										<td align="right">Customer Copy</td>
									</tr>
								</table>
								
								<font></font>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<!-- <div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div> -->
</body>