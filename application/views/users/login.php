		<?php if (! empty($message)) { ?>
		<div id="message">
			<?php echo $message; ?>
		</div>
		<?php } 


		
		?>
		
		<section class="rsitya_todobloq">
			<div class="h1 rsitya_inic"><?=lang('login_title');?></div>    
			<?php
			$idioma = $this->lang->lang();	
			$urlBase = base_url().$idioma.'/'; 
			?>

			<?php echo form_open($urlBase.'auth', 'class="parallel"');?>  
				<div class="rsitya_inicdc">
					<div class="rsitya_dircc"><?=lang('user_email');?></div>
					<input type="text" id="identity" name="login_identity" value="<?php echo $email;?>">
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
					
					<button type="submit" name="login_user" id="rsitya_botonreg" class="grid_3">
						<span><?=lang('login_button');?></span>
					</button>

				</div>  
			<?php echo form_close();?>
		</section>