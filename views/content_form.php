
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
<?php $options = array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                );
echo form_dropdown('shirts', $options, 'large');
?>

<div class="column_middle">
	<div class="column_middle_form">
	<?php echo form_open('contentcontroller/form');?>
	<form>
		<?php $RN="RQ/A4/B01714/14";
		echo form_hidden('RN');?>
		
		<p style="padding-left:5px; color:white; font-size:15px;">NEW Request</p>	
		<p style="padding-left:5px; color:white; font-size:12px;">Request number will be automatically generated by the system.</p>
		<div class="column_middle-1" style="padding-top:10px; padding-left:4px;"> <!-- column middle -->
			<div class="column_middle_grid-1">
				<div class="ui-form-title">Request Details</div>
				<table style="padding-top:3px; padding-left:10px; width:100%; font-size:12px;" border="">
					<tr>
						
					<tr>
					<td width="30%">Requested&nbsp;By&nbsp;:&nbsp;</td>
					<td><input class="InputText" name="V_requestor"></td>
					
					</tr>
					
					<tr>
						<td>Complaint&nbsp;Date&nbsp;:&nbsp;</td>
						<td>
							<input type="date"  name="D_date" <br><?php echo form_error('D_date'); ?>
						
						</td>
						
					</tr>
					
					<tr>
						<td>Start&nbsp;Time&nbsp;:&nbsp;</td>
						<td>&nbsp;&nbsp;
								<select name="fHour">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15" selected>15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
							</select>
							<select name="fMinute">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19" selected>19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
								<option value="32">32</option>
								<option value="33">33</option>
								<option value="34">34</option>
								<option value="35">35</option>
								<option value="36">36</option>
								<option value="37">37</option>
								<option value="38">38</option>
								<option value="39">39</option>
								<option value="40">40</option>
								<option value="41">41</option>
								<option value="42">42</option>
								<option value="43">43</option>
								<option value="44">44</option>
								<option value="45">45</option>
								<option value="46">46</option>
								<option value="47">47</option>
								<option value="48">48</option>
								<option value="49">49</option>
								<option value="50">50</option>
								<option value="51">51</option>
								<option value="52">52</option>
								<option value="53">53</option>
								<option value="54">54</option>
								<option value="55">55</option>
								<option value="56">56</option>
								<option value="57">57</option>
								<option value="58">58</option>
								<option value="59">59</option>
							</select>									
						</td>
					</tr>
					
					<tr>
					<td valign="top">Designation&nbsp;:&nbsp;</td>
					<td >
						<table border="0" width="220">
							<tr>
								<td style="vertical-align:middle; font-size:12px; height:20px; border:0px;">
									<input type="radio" name="V_MohDesg" value="Doctor" <?php echo set_radio('V_MohDesg', 'Doctor'); ?>>Doctor
								</td>
							</tr>
							<tr>
								<td style="vertical-align:middle; font-size:12px;height:20px; border:0px; ">
									<input type="radio" name="V_MohDesg" value="Matron" <?php echo set_radio('V_MohDesg', 'Matron'); ?>>Matron
								</td>
							</tr>
							<tr>
								<td style="vertical-align:middle; font-size:12px;height:20px; border:0px;">
									<input type="radio" name="V_MohDesg" value="Medical Assistant" <?php echo set_radio('V_MohDesg', 'Medical Assistant'); ?>>Medical Assistant
								</td>
							</tr>
							<tr>
								<td style="vertical-align:middle; font-size:12px;height:20px; border:0px;">
									<input type="radio" name="V_MohDesg" value="Officer" <?php echo set_radio('V_MohDesg', 'Officer'); ?>>Officer
								</td>
							</tr>
							<tr>
								<td style="vertical-align:middle; font-size:12px;height:20px; border:0px;">
									<input type="radio" name="V_MohDesg" value="PMSB" <?php echo set_radio('V_MohDesg', 'PMSB'); ?>>PMSB
								</td>
							</tr>
							<tr>
								<td style="vertical-align:middle; font-size:12px;height:20px; border:0px;">
									<input type="radio" name="V_MohDesg" value="Sister In-Charge" <?php echo set_radio('V_MohDesg', 'Sister In-Charge'); ?>>Sister In-Charge
								</td>
							</tr>
							<tr>
								<td style="vertical-align:middle; font-size:12px;height:20px; border:0px;">
									<input type="radio" name="V_MohDesg" value="Sister On Duty" <?php echo set_radio('V_MohDesg', 'Sister On Duty'); ?>>Sister On Duty
								</td>
							</tr>
							<tr>
								<td style="vertical-align:middle; font-size:12px;height:20px; border:0px;">
									<input type="radio" name="V_MohDesg" value="Specialist" <?php echo set_radio('V_MohDesg', 'Specialist'); ?>>Specialist
								</td>
							</tr>
							<tr>
								<td style="vertical-align:middle; font-size:12px;height:20px; border:0px;">
									<input type="radio" name="V_MohDesg" value="Staff Nurse" <?php echo set_radio('V_MohDesg', 'Staff Nurse'); ?>>Staff Nurse
								</td>
							</tr>
							<tr>
								<td style="vertical-align:middle; font-size:12px;height:20px; border:0px;">
									<input type="radio" name="V_MohDesg" value="Supervisor" <?php echo set_radio('V_MohDesg', 'Supervisor'); ?>>Supervisor
								</td>
							</tr>
						</table>
					</td>
					
					
				</tr>
						
						<!---<td width="30%">Request&nbsp;Type&nbsp;:&nbsp;</td>
						<td><input type="radio" name="V_request_type" value="A3" <?php echo set_radio('V_request_type', 'A3'); ?>>A3 - Schedule Corrective Maintenance (SCM)<br />
							<input type="radio" name="V_request_type" value="A4" <?php echo set_radio('V_request_type', 'A4'); ?>>A4 - Breakdown Maintenance (BM)<br />
							<input type="radio" name="V_request_type" value="A5" <?php echo set_radio('V_request_type', 'A5'); ?>>A5 - Corrective Maintenance (CM)<br />
							<input type="radio" name="V_request_type" value="A6" <?php echo set_radio('V_request_type', 'A6'); ?>>A6 - Perfomance Test (PT)<br />
							<input type="radio" name="V_request_type" value="A7" <?php echo set_radio('V_request_type', 'A7'); ?>>A7 - Safety Test (ST)<br />
							<input type="radio" name="V_request_type" value="A8" <?php echo set_radio('V_request_type', 'A8'); ?>>A8 - User Requests<br />
							<input type="radio" name="V_request_type" value="A9" <?php echo set_radio('V_request_type', 'A9'); ?>>A9 - Investigation of Incidences<br />
							<input type="radio" name="V_request_type" value="A10" <?php echo set_radio('V_request_type', 'A10'); ?>>A10 - Technical Advice<br />
							<input type="radio" name="V_request_type" value="A11" <?php echo set_radio('V_request_type', 'A11'); ?>>A11 - User Training<br />
							<input type="radio" name="V_request_type" value="A12" <?php echo set_radio('V_request_type', 'A12'); ?>>A12 - Testing and Commissioning (T&C)<br />
							<input type="radio" name="V_request_type" value="R1" <?php echo set_radio('V_request_type', 'R1'); ?>>R1 - Request for Yearly Planner<br />
							<input type="radio" name="V_request_type" value="R2" <?php echo set_radio('V_request_type', 'R2'); ?>>R2 - Internal Request<br /><br />
						</td>--->
			
					
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Priority&nbsp;:&nbsp;</td>
						<td>
							<input type="radio" name="V_priority_code" value="Normal" <?php echo set_radio('V_priority_code', 'Normal'); ?>>Normal<br />
							<input type="radio" name="V_priority_code" value="Emergency" <?php echo set_radio('V_priority_code', 'Emergency'); ?>><span style="color:red;">Emergency</span><br />
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
							
					<tr>
				<!--<td>Request&nbsp;Time&nbsp;:&nbsp;</td>
						<td>&nbsp;&nbsp;
						 <?php date_default_timezone_set("Asia/Kuala_Lumpur");
							$D_time=date("H:ia");
							echo $D_time;
							
						?>-->
				
									
					
					<tr>
						<td valign="top">Summary&nbsp;:&nbsp;</td>
						<td><textarea class="InputText" name="V_summary" cols=32 rows="5"></textarea></td>
					</tr>
					
					<tr>
						<td valign="top">Description&nbsp;:&nbsp;</td>
						<td><textarea class="InputText" name="Description" cols=32 rows="2"></textarea></td>
					</tr>
				</table>
			</div>
			<div style="padding-top:10px;"></div>
			<div class="column_middle_grid-2">
				<div class="ui-form-title">Related Asset (Compulsory For Request A3 - A10)</div>
				<table style="padding-top:3px; padding-left:10px; width:100%; font-size:12px;" border="1">
					<tr>
						<td width="30%">Asset Number : </td>
						<td><input class="inputtext" type="text" value="" name="V_Asset_no"></td>
					</tr>
					<tr>
						<td>Tag Number : </td>
						<td><input class="inputtext" type="text" value="" name="tag_number" ></td>
					</tr>
					<tr>
						<td>Serial Number : </td>
						<td><input class="inputtext" type="text" value=""  value="" name="serial_number"></td>
					</tr>
					<tr>
						<td>Name : </td>
						<td><input class="inputtext" type="text" value="" value="" name="name"></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="column_right" style="padding-left:440px; padding-top:10px;">
			<div class="column_middle_grid-5">
				<div class="ui-form-title">Follow Up Information</div>							
			<table style="padding-top:3px; padding-left:10px; width:100%; font-size:12px;" border="1">
				<tr>
					<td width="30%">Personal&nbsp;Code&nbsp;:&nbsp;</td>
					<td><input class="InputText" name=""></td>
				</tr>
				
				<tr>
					<td width="30%">Personal&nbsp;Name&nbsp;:&nbsp;</td>
					<td><input class="InputText" name=""></td>
				</tr>	
				
				<tr>
					<td width="30%">Designation&nbsp;:</td>
					<td><input class="InputText" name=""></td>
				</tr>
				
				<tr>
						<td>Start&nbsp;Date&nbsp;:&nbsp;</td>
						<td>
							<input type="date"  name="startdate" <br><?php echo form_error('startdate'); ?>
						</td>
						
				</tr>
				
				<tr>
						<td>Start&nbsp;Time&nbsp;:&nbsp;</td>
						<td>&nbsp;&nbsp;
								<select  name="sfHour">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15" selected>15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
							</select>
							<select name="sfMinute">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19" selected>19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
								<option value="32">32</option>
								<option value="33">33</option>
								<option value="34">34</option>
								<option value="35">35</option>
								<option value="36">36</option>
								<option value="37">37</option>
								<option value="38">38</option>
								<option value="39">39</option>
								<option value="40">40</option>
								<option value="41">41</option>
								<option value="42">42</option>
								<option value="43">43</option>
								<option value="44">44</option>
								<option value="45">45</option>
								<option value="46">46</option>
								<option value="47">47</option>
								<option value="48">48</option>
								<option value="49">49</option>
								<option value="50">50</option>
								<option value="51">51</option>
								<option value="52">52</option>
								<option value="53">53</option>
								<option value="54">54</option>
								<option value="55">55</option>
								<option value="56">56</option>
								<option value="57">57</option>
								<option value="58">58</option>
								<option value="59">59</option>
							</select>									
						</td>
					</tr>
				<tr>
						<td>End&nbsp;Date&nbsp;:&nbsp;</td>
						<td>
							<input type="date"  name="enddate" <br><?php echo form_error('enddate'); ?>
						</td>
						
				</tr>
				
				<tr>
						<td>End&nbsp;Time&nbsp;:&nbsp;</td>
						<td>&nbsp;&nbsp;
								<select class="InputText" name="efHour">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15" selected>15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
							</select>
							<select class="InputText" name="efMinute">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19" selected>19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
								<option value="32">32</option>
								<option value="33">33</option>
								<option value="34">34</option>
								<option value="35">35</option>
								<option value="36">36</option>
								<option value="37">37</option>
								<option value="38">38</option>
								<option value="39">39</option>
								<option value="40">40</option>
								<option value="41">41</option>
								<option value="42">42</option>
								<option value="43">43</option>
								<option value="44">44</option>
								<option value="45">45</option>
								<option value="46">46</option>
								<option value="47">47</option>
								<option value="48">48</option>
								<option value="49">49</option>
								<option value="50">50</option>
								<option value="51">51</option>
								<option value="52">52</option>
								<option value="53">53</option>
								<option value="54">54</option>
								<option value="55">55</option>
								<option value="56">56</option>
								<option value="57">57</option>
								<option value="58">58</option>
								<option value="59">59</option>
							</select>									
						</td>
					</tr>
					
					<tr>
						<td>&nbsp;</td>
					</tr>
					
					<tr>
						<td valign="top">Summary&nbsp;:&nbsp;</td>
						<td><textarea class="InputText" name="" cols=35 rows="2"></textarea></td>
					</tr>
			</table>
			</div>
			<div style="padding-top:310px;"></div>
			<div class="column_middle_grid-3" style="font-size: 1.2em;">
				<div class="ui-form-title">Location</div>
				<table style="padding-top:3px; padding-left:10px; width:100%; font-size:12px;" border="1">
					<tr>
						<td>Phone&nbsp;Number&nbsp;:&nbsp;</td>
						<td>
							<input class="InputText" name="V_phone_no"><?php echo form_error('V_phone_no'); ?>
						</td>
					</tr>
					<tr>
						<td valign="top">User&nbsp;Department&nbsp;:&nbsp;</td>
						<td>
							<input class="InputText" name="user_dept" ><br> <?php echo form_error('user_dept'); ?></br>
							<div style="padding-top:3px;"></div>
							 
							 
						</td>
					</tr>
					
					
					<tr>
						<td valign="top">Location&nbsp;:&nbsp;</td>
						<td>
							
							<div style="padding-top:2px;"></div>
							<input class="InputText" name="adress">
							<div style="padding-top:3px;"></div>
							<input class="InputText" name="adress2">
							<div style="padding-top:3px;"></div>
							<input class="InputText" name="adress3">
						</td>
					</tr>
				</table>
			</div>
			<div style="padding-top:180px;"></div>
			<div class="column_middle_grid-4">
			<div class="ui-form-title"">Closing</div>
				<table style="padding-top:3px; padding-left:10px; width:100%; font-size:12px;">
					<tr>
						<td width="30%">Closing Date</td>
						<td style="vertical-align:middle;height:20px;border:0px;">
						<td>
							<input type="date"  name="" <br><?php echo form_error(''); ?>
						</td>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="clear"></div>
		<div style="padding-top:10px;"></div>
			<div align="center" style="background:; 	border-bottom-right-radius: 5px; border-bottom-left-radius: 5px;">
			<table>
				<tr>
					<td>
						
					<!---<?php echo form_submit ('submit ','Submit',"class='btn-button'") ;?>--->
					
					<input type="submit" class="btn-button" name="mysubmit" value="Submit Post!" />
					<input type="button" class="btn-button" name="cancel" value="Cancel" onclick="window.location='http://localhost/tutorial/FEMSHospital2/index.php/contentcontroller/form'" />
					</td>
				</tr>
			</table>
		</div>
	</form>
	</div>
	</div>
</div>