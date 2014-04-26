		<?php if (!empty($message)) { ?>
			<div id="message">
				<?php echo $message; ?>
			</div>
		<?php } ?>
	<section>
		<div class="row grid_10 hregistr_com">
			<div class="h1 hregistr_tit">Una oportunidad de poner a su empresa en el Mapa</div>
			<span class="h2 hregistr_sub">Construcción, ingeniería, arquitectura e industria asociada</span>
		</div>
    </section>   <!-- Fin de la parte de la cabecera... lo de dar una oportunidad y la siguiente línea--> 
	<div class="row hregistr_subtit">
		<ul class="sf-menu colorsubconttootorre">
			<li class="current selectedLava"><a class="colorsubconttoo hregistr_enl" href="index.html">Concepto</a>
				
			</li>
			<li class="current selectedLava"><a class="colorsubconttoo hregistr_enl" href="index.html">Paso a paso</a>
				
			</li>
			<li class="current selectedLava"><a class="colorsubconttoo hregistr_enl" href="index.html">Servicios</a>
			</li>
			
		</ul><!-- end menu -->
	</div><!-- Fin de la botonera dar a conocer, control de inteligencia y control licitaciones--> 
	<section>
		<div class="grid_4 hregistr_dosgrup">
			<div class="grid_12 hregistr_subtitemp">Empiece obteniendo las primeras tarjetas de visita gratuitas ya</div>
			<div class="hregistr_flech"><img src="<?php echo IMAGES_URL;?>flecha_regist.png" alt="Flecha Registro"/></div>
		</div><!-- Fin de los div... empieze y flecha-->

		<div class="grid_5 hregistr_conttarjet"><!-- Comienzo de la tarjeta de registro-->
			<div class="grid_5 hregistr_tarjetavis"></div>
			<div class="grid_5 hregistr_tarjetavisdos"></div>
			<div class="grid_5 hregistr_tarjetavistres">
				<div class="grid_12 hregistr_lgris">
					<img src="<?php echo IMAGES_URL;?>logoglobeshake_gris.png" alt="GlobeShake logo gris"/>
				</div>


				
				
				<?php echo form_open(current_url()); ?>  	
				
					
					<input type="text" id="first_name" name="register_first_name" value="<?php echo set_value('register_first_name');?>" placeholder="<?=lang('user_name');?>" required=""/>
					<input type="text" id="last_name" name="register_last_name"  value="<?php echo set_value('register_last_name');?>" placeholder="<?=lang('user_surname');?>" required="">
					
					<input type="text" id="email_address" name="register_email_address" value="<?php echo set_value('register_email_address');?>" class="tooltip_trigger"										
								placeholder="<?=lang('user_email');?>" required="" />


<?php
echo "&nbsp;&nbsp;<select name='register_country' id='country' required>";

foreach ($countries as $code => $name) {
	echo "<option value='".$name['Code']."'";
	if (($name['Code'] == 'ESP')&&($this->lang->lang() == 'es')) {
		echo ' selected ';
	}
	if (($name['Code'] == 'GBR')&&($this->lang->lang() == 'en')) {
		echo ' selected ';
	}
	echo ">".lang('country.'.$name['Code']);
	echo '</option>';	
}
echo '</select>';
?>
					<input type="password" id="password" name="register_password" class="hregistr_contr" value="<?php echo set_value('register_password');?>" placeholder="<?=lang('user_password');?>" required=""/>

					<input type="password" id="confirm_password" name="register_confirm_password" value="<?php echo set_value('register_confirm_password');?>" placeholder="<?=lang('user_password_confirm');?>" required=""/>

					<div class="grid_12 hregistr_filgris"></div>


					<input type="submit" name="register_user" id="submit" class="link_button large" value="<?=lang('user_register_btn');?>"/>

				<?php echo form_close();?>

			</div>
		</div><!-- Fin de la tarjeta de registro-->

		<!-- Aquí se meterá en un futuro información, dejo ya el div vacio-->
		<div class="grid_5">
		</div>
		<!-- Fin de este div vacio-->

		<div class="grid_4 hregistr_mapamunduno">
			<p>Al registrarme acepto la política de privacidad y recuerdo la contraseña.</p>
		</div><!-- Fin de la línea al registrarme.....-->
</section><!-- Fin del bloque horizontal central.....-->

		<div class="grid_4 hregistr_mapamund">
			<img src="<?php echo IMAGES_URL;?>mapamundigris_globeshake.png" alt="GlobeShake mapamundi"/>
		</div><!-- Fin del mapa mundi.....-->
