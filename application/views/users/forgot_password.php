
<section class="rsitya_todobloq">

	<?php if (! empty($message)) { ?>
	<div id="message">
		<?php echo $message; ?>
	</div>
	<?php } ?>
	<div class="h1 rsitya_inic"><?=lang('password_change_title');?></div>  
	<?php echo form_open(current_url());	?>  	
		<div class="rsitya_inicdc recupcondo_box">
			<div class="rsitya_dircc recupcondo_entr"><?=lang('password_change_email');?></div>
			<input id="rsitya_di" type="text" id="identity" name="forgot_password_identity" value="" class="tooltip_trigger"/>
			<input type="submit" name="send_forgotten_password" id="submit" value="<?=lang('user_send');?>" class="link_button large reheol"/>

			
		</div>	
	<?php echo form_close();?>

</section>
