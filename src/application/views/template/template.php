<!DOCTYPE html>
<html lang="pt-br">

	<?php $this->load->view('template/head'); ?>
	
    <body class="container-fluid">
	
 		<div class="row main-admin-row-header dont-print">
					
			<div class="row-height">
				
				<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-xs-height col-xs-middle client_name_container">					
					<h4><?=$this->System_settings->settings->system_title?></h4>
				</div>
				
				<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 col-xs-height topbar-container">
								
					<div class="dropdown pull-right">
					  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
						<i class="fa fa-cog"></i>
						<span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
					  

						
						<li>
							<div class="text-center logged-user-info">
								
								<h5><?=character_limiter(strip_tags($logged->account_title), 15)?></h5>
								
								<div class="logged-user-photo" style="background-image:url('<?=$logged->photo_path?>')"></div>
								
								
								
								<div class="small">
									<strong>									
										<?=$logged->account_role?>
									</strong>
									
								</div>
								
							</div>
						</li>
						
						<li role="separator" class="divider"></li>
						
						<li><a href="settings"><?=$this->lang->line('settings')?></a></li>
						
						<?if($logged->account_is_admin){?>
						<li><a href="settings/system"><?=$this->lang->line('system_settings')?></a></li>
						<?}?>
						
						<li><a href="logout"><?=$this->lang->line('logout')?></a></li>
						
					  </ul>
					</div>				
					
					
					<div class="sidebar-toggle visible-xs pull-right">
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#navbar" class="btn btn-smx btn btn-default">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					
				</div>			
		
			</div>
		
		</div>
		
		<div class="row">
		
			<div class="main-admin-row row-height">
				

				<div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-sm-height col-sm-top navbar-container dont-print">
				
					<? $this->load->view('template/sidebar-navbar'); ?>
					
				</div>
				
				<div class="col-xs-12 col-sm-10 col-md-11 col-lg-11 col-sm-height main-admin-content">
				
					<div class="page-content">

					<? $this->load->view('template/messages'); ?>
				
					<? $this->load->view($page); ?>
					
					</div>
					
				</div>							
				
			</div>
			
		</div>

		<div class="row footer-row dont-print">	
		
			<div class="col-xs-12 col-sm-2 col-md-1 col-lg-1">			
					
					
			</div>
		
			<div class="col-xs-12 col-sm-10 col-md-11 col-lg-11 footer center-xs right">
		
				<span class=""><?=$this->System_settings->settings->system_title;?></span>
				
			</div>
		</div>
		
	<? $this->load->view('template/modal'); ?>
	
    </body>

	<?if(isset($load_scripts) AND count($load_scripts)>0){?>
	<!-- LOADED SCRIPTS -->
	<? foreach($load_scripts as $script){?>
		<script src="<?=$script?>"></script>
	<?}}?>
	
</html>