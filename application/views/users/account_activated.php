<section class="rsitya_todobloq">
	<?php echo form_open(current_url(), 'class="parallel"');?>  
		<div class="rsitya_inicdc">
			<div class="rsitya_dircc recupcondo_entr recupconcinc_hrco"><?=lang('activate_successful');?></div>
			<div class="rsitya_dircc recupcondo_entr recupconcinc_hrco">Ya puede acceder a GlobeShake</div>
			<div class="rsitya_dircc"><?=lang('user_email');?></div>
			<input type="text" id="identity" name="login_identity">
			<div class="rsitya_contras"><?=lang('user_password');?></div>
			<input type="password" id="password" name="login_password" class="rsitya_con"> 
			<div class="rsitya_holv">						
					<input type="checkbox" id="remember_me" name="remember_me" value="1" <?php echo set_checkbox('remember_me', 1); ?>/>&nbsp;Remember me
			</div>
			<div class="rsitya_holv">
				<a href="<?php echo base_url()."auth/forgotten_password";?>">He olvidado mi contraseña</a>
			</div>
			
			<button type="submit" name="login_user" id="rsitya_botonreg" class="grid_3">
				<span>Acceder</span>
			</button>

		</div>  
	<?php echo form_close();?>
</section>