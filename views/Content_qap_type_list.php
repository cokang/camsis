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
    background-color: #D3D3D3;!important;
    font-size: 14px;
    padding: 8px;
    text-align: center;
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
	table.tblqap tr.row-color td{
		background-color: #f5eeee;
	}
</style>
<div class="ui-middle-sceen" style="margin-left: 20%;margin-right: 1%; padding-top: 2%;">
	<div class="content-workorder">
		<table class="ui-left_web ui-content-middle-menu-workorder" border="0" width="80%" height="80%" align="center">
			<tr class="ui-color-contents-style">
				<td colspan="2"  valign="top" align="center">
					<div class="ui-left_web">
						<h2 style="color: black;margin-top: 15px;">QAP Typecode List ( <?=$this->session->userdata('usersess');?> )</h2>
						<table class="tblqap ui-content-middle-menu-workorder2">
	                        <tr>
								<th>No</th>
								<th>Type code</th>
								<th>Description</th>
							</tr>
							<?php $no=1;?>
						    <?php foreach($result as $row) { ?>
							<tr>
								<td><?=$no++;?></td>
								<td><?php echo anchor ('contentcontroller/bem_asset', $row->v_Equip_Code); ?></td>
								<td><?=$row->v_Equip_Desc;?></td>
							</tr>
							<?php } ?>
						</table>
					
					</div>

				</td>
			</tr>
			<tr class="ui-header-new" style="height:5px;">
				<td align="center" colspan="3">
				</td>
			</tr>
		</table><table class="ui-mobile-table-desk ui-left_mobile" style="color:black;width:100%;">
		    			<tr class="ui-color-color-color" > <!-- 'class="tr_color"> -->
							<td >Asset Group/Asset Description</td>
							<td class="td-desk">: test buzz</td>
						</tr>
						<tr>
							<td>Number of Assets</td>
							<td></td>
						</tr>
						<tr>
							<td>% Of PPM Completed</td>
							<td></td>
						</tr>
						<tr>
							<td>PPM Scheduled</td>
							<td></td>
						</tr>
						<tr>
							<td>PPM Missed</td>
							<td></td>
						</tr>
						<tr>
							<td>SIQ No</td>
							<td></td>
						</tr>
						<tr>
							<td>CAR</td>
							<td></td>
						</tr>
					</table>
	</div>
</div>
	</body>
		</html>