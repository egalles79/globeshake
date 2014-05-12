<div id="frame_" class="framcont">
    <div id="layout" class="full">
		<div class="headdown">
			<div class="row clearfix">
				<nav>
					<ul class="sf-menu">
						<li class="current selectedLava"><a href="index.html">Contacto</a>
							<ul>
								<li><a href="index2-revolution.html">Submenu 01</a></li>
								<li><a href="index3-nivo.html">Submenu 02</a></li>	
							</ul>
						</li>
						<li class="current selectedLava"><a href="index.html">Blog</a>
							<ul>
								<li><a href="index2-revolution.html">Submenu 01</a></li>
								<li><a href="index3-nivo.html">Submenu 02</a></li>	
							</ul>
						</li>
						<li class="current selectedLava"><a href="index.html">Ayuda</a>
							<ul>
								<li><a href="index2-revolution.html">Submenu 01</a></li>
								<li><a href="index3-nivo.html">Submenu 02</a></li>	
							</ul>
						</li>
						<li class="current selectedLava"><a href="index.html">Links de interés</a>
							<ul>
								<li><a href="index2-revolution.html">Submenu 01</a></li>
								<li><a href="index3-nivo.html">Submenu 02</a></li>	
							</ul>
						</li>
						<li class="current selectedLava"><a href="index.html">Comunidad GS</a>
							<ul>
								<li><a href="index2-revolution.html">Submenu 01</a></li>
								<li><a href="index3-nivo.html">Submenu 02</a></li>	
							</ul>
						</li>
					</ul><!-- end menu -->
				</nav><!-- end nav -->
				
				<div id="window_area">
					<a id="show_header_window">
						<div class="login">
						<?php
						if ($logged) {
							if (strlen($user['complet_name']) > 25) {
								echo substr($user['complet_name'],0,25).'...';	
							} else {
								echo $user['complet_name'];
							}							
						} else {
							echo "Entrar";
						}
						?>
						</div>
					</a>
					<div class="header_window" align="left" style="display: none;">
						<?php
						$idioma = $this->lang->lang();	
						$urlBase = base_url().$idioma.'/'; 
						if ($logged) {?>					
							<ul>
							<li><?php echo $email?></li>
							<hr />
							<li><a href="<?php echo $urlBase?>auth_public/update_account">Ver perfil</a></li>
							<li><a href="<?php echo $urlBase?>auth/logout">Salir</a></li>
							<hr />
							</ul>
						<?php 
						} else {
							echo form_open($urlBase.'auth', 'class="parallel"');?>  
						
							<div class="rsitya_dircc"><?=lang('user_email');?></div>
							<input type="text" id="identity" name="login_identity">
							<div class="rsitya_contras"><?=lang('user_password');?></div>
							<input type="password" id="password" name="login_password" class="rsitya_con"> 
							<div class="rsitya_holv">						
								<input type="checkbox" id="remember_me" name="remember_me" value="1" <?php echo set_checkbox('remember_me', 1); ?>/>&nbsp;<?=lang('user_remember');?>
							</div>
							<div class="rsitya_holv">
								<a href="<?php echo base_url()."auth/forgotten_password";?>"><?=lang('password_forgotten');?></a>
							</div>
							<div class="rsitya_holv">
								<a href="<?php echo base_url()."auth/resend_activation_token";?>"><?=lang('activation_email_resend');?></a>
							</div>						
							<button type="submit" name="login_user" id="rsitya_botonreg" class="grid_3_modal">
								<span><?=lang('login_button');?></span>
							</button>				
							<?php echo form_close();
						}
						?>
					</div>			
				</div>
				<!-- end windows_area -->

				<div class="social social-head">
					<a href="#" title="Facebook"><i class="icon-facebook"></i></a>
					<a href="#" title="Twitter"><i class="icon-twitter"></i></a>
					<a href="#" title="Rss"><i class="icon-rss"></i></a>      
					<a href="#" title="Linkedin"><i class="icon-linkedin"></i></a>
					<a href="#" title="Google Plus"><i class="icon-google-plus"></i></a>
				</div><!-- end social -->
			</div><!-- row -->
		</div><!-- headdown -->


