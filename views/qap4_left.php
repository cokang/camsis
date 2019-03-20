<div class="ui-left_web">
	<body class="body-screen">
		<div class="ui-left-screen">
			<div class="color_style_1 menuprofile">
				<!-- <div id="loginBox">                
					<div id="loginForm">
						<div id="body-class">
							<div class="head-info-profile">
								WELCOME <br /> <span style="font-size:14px;  text-transform: uppercase;"><?php echo $this->session->userdata('fullname');?></span>
							</div>
							<div class="picture-info"><img src="<?php echo base_url().'uploadfile/'?><?php echo $this->session->userdata('p_picture');?>"/></div>
							<div class="picture-info-detail">
								<span>Location : <?php echo $this->session->userdata('hosp_code');?></span><br/>
								<span>Staff No : <?php echo $this->session->userdata('Per_Code');?></span><br/>
								<span>Designation : <?php echo $this->session->userdata('designation');?></span><br/>
								<span>Service : <?php echo $this->session->userdata('Ser_Code');?></span><br/>
							</div>
						</div>
			  		</div>
				</div> -->
			</div>
			<style>
				.menuprofile{
					font-weight:bold;
					text-align:center;
					 height:54px;
					 display:table-cell;
				}
			</style>
			<div align="center" class="ui-header-left-color" style="padding-top:5px; padding-bottom:5px; color:black; border: 1px solid black; margin: 3px; background-color: grey !important;">
				Overall QAP Performance Indicator
			</div>
			<div align="center" class="ui-header-left-color" style="padding-top:5px; padding-bottom:5px; color:black; border: 1px solid black; margin: 3px; background-color: grey !important;">
				FES Indicator Summary
			</div>
			<div align="center" class="ui-header-left-color" style="padding-top:5px; padding-bottom:5px; color:black; border: 1px solid black; margin: 3px; background-color: grey !important;">
				FES Performance Indicator Analysis
			</div>
			<div align="center" class="ui-header-left-color" style="padding-top:5px; padding-bottom:5px; color:black; border: 1px solid black; margin: 3px; background-color: grey !important;">
				BES Indicator Summary
			</div>
			<div align="center" class="ui-header-left-color" style="padding-top:5px; padding-bottom:5px; color:black; border: 1px solid black; margin: 3px; background-color: grey !important;">
				BES Performance Indicator Analysis
			</div>
			<div align="center" class="ui-header-left-color" style="padding-top:5px; padding-bottom:5px; color:black; border: 1px solid black; margin: 3px; background-color: grey !important;">
				QAP Type Code List
			</div>
			<div align="center" class="ui-header-left-color" style="padding-top:5px; padding-bottom:5px; color:black; border: 1px solid black; margin: 3px; background-color: grey !important;">
				HKS % Acceptable Quality Cleaning
			</div>
		</div>
		<div class="background3"></div>
	</body>
</div>
	<?php if ($this->uri->slash_segment(1) .$this->uri->slash_segment(2) != 'contentcontroller/assetlicenses_new/'){ ?>
	<div class="ui-left_mobile">
		<meta name="viewport" content="width=device-width, user-scalable=no" />
		<body class="body-screen">
			<div class="ui-left-screen">
				<div class="main-head bg-lime">
					<div class="main-head-m1 bg-fuchsia"><span><?php echo anchor ('contentcontroller/select?continue=',$this->session->userdata('usersess')); ?></span></div>
				<div class="main-head-m2 bg-lime">
					<span id="show"><?php echo anchor ('contentcontroller/content/'.$this->session->userdata('usersess'), 'Computerized Asset Management Service Information System'); ?> <br /> IIUM Teaching Hospital</span>
					<span id="welcomeDiv"  style="display:none; text-align:left; padding:0px 0px;">
						<?php include 'content_searchmobile.php';?><span class="icon-arrow-right2" onclick="showDiv2()"></span></span>
				</div>
				<div class="main-head-m3 bg-light-blue"><span class="icon-list" id = "buttonLogin" ></span></div>	
					<?php include 'content_searchmobileseac.php';?>
				</div>
			</div>
			<?php include 'content_menu.php';?>
			<div class="menu-right" id="login_Box_Div">
				<?php echo anchor ('logincontroller/logout','<button type="submit" class="btn btn-primary logoutmobile"><span style="color:white;">Logout</span></button>');?>
			</div>
		</body>
	</div>
	<script>
		$('#buttonLogin').click(function(){
			$('#login_Box_Div').toggle(500);
		});
	</script>
	<?php } ?>
