<!-- comienza el modal box -->
		<section class="rsitya_todobloq">

			<?php if (! empty($message)) { ?>
	<div id="message">
		<?php echo $message; ?>
	</div>
	<?php } ?>

	
			<div class="h1 rsitya_inic"><?=lang('forgot_password_update_title');?></div>    
			<?php echo form_open(current_url());	?>  
				<div class="rsitya_inicdc recupconcuatr_cont">
                <div class="rsitya_dircc recupcondo_entr">
                	</div>
					<div class="rsitya_dircc recupconcuatr_int"><?=lang('user_password_new');?></div>
					<input type="password" id="new_password" name="new_password" value=""/>
					<div class="rsitya_contras recupconcuatr_vol"><?=lang('user_password_new_repeat');?></div>
					<input type="password" id="confirm_new_password" name="confirm_new_password" value=""/>
					
					<input type="submit" name="change_forgotten_password" id="submit" value="<?=lang('user_password_change');?>" class="link_button large restacontr"/>
					
				</div>  
			<?php echo form_close();?>
		</section>
		<!-- finaliza el modal box -->
