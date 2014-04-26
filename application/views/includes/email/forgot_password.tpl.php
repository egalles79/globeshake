<!DOCTYPE html>

<head>
	<title>GlobeShake</title>

	
</head>
<body>
	
    
    
    
		<div class="row containgener">
			<section class="decontornno">
				<!-- Inicio columna de la izda la del logo --> <div class="grid_2 logo globes">
				<a href="index.html"><img src="<?php echo IMAGES_URL;?>logo_Globeshake.png" title="GlobeShake" alt="GlobeShake"></a>		
			</div>
		</section>


<!-- Inicio del contenido del mail -->

<div style=" font-family: Arial, Helvetica, sans-serif; background: none repeat scroll 0 0 #FFFFFF; border: 1px solid #000000; clear: both; float: left; height: 20%; margin-top: 2% !important; width: 600px;  font-size: 17px; color:#666666;">


	<div style="background: #47789F;color: #FFFFFF; margin: 0;padding: 19px;">Cambia tu contraseña</div>
    
    
    
<div><p style="margin-bottom: 16px; margin-left: 20px; margin-top: 14px;">Hola <?php echo $user_data['complet_name'];?></p>


<p style="font-size: 16px; margin-bottom: 16px; margin-left: 20px; margin-top: 14px;">Cambiar tu contraseña es fácil. Utiliza el enlace de más abajo durante las siguientes 24 horas.</p>

<?php

$link =base_url().'auth/manual_reset_forgotten_password/'.$user_id.'/'.$forgotten_password_token;

?>

<p><a style=" font-family: Arial, Helvetica, sans-serif; color: #47789F; font-size: 16px; margin-left:20px;" href="<?php echo $link;?>"><?php echo $link;?></a></p>
<p style="font-size: 16px; margin-bottom: 16px; margin-left: 20px; margin-top: 14px;">Gracias,</p>
<p style=" font-size: 16px; margin-bottom: 16px; margin-left: 20px; margin-top: 14px;">El equipo de GlobeShake</p>
<div class="recupcontres_cambicontr"></div>


</div>


</div>
<!-- Fin del contenido del mail -->

</div><!-- end layout -->

</body>
</html>