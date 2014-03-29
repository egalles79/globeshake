<?php if (! empty($message)) { ?>
	<div id="message">
		<?php echo $message; ?>
	</div>
<?php } ?>
<section class="rsitya_todobloq">
	<div class="h1 rsitya_inic">Reenviar clave de activación</div>    
	<?php echo form_open(current_url());	?>  
		<div class="rsitya_inicdc recupcondo_box">
			<div class="rsitya_dircc recupcondo_entr">Pon tu email para que te enviemos la clave de reactivación.</div>					
			<input type="text" id="identity" name="activation_token_identity" value="" class="tooltip_trigger"/>
			<input type="submit" name="send_activation_token" id="submit" value="<?=lang('user.enviar');?>" class="link_button large reheol"/>
		</div>  
	<?php echo form_close();?>
</section>