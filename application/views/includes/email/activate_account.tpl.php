
<?php
$link = base_url().'auth/activate_account/'. $user_id .'/'. $activation_token;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>GlobeShake</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">td img {display: block;}</style>
	
</head>
<body>

	<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="font-family:Arial, Helvetica, sans-serif">

<tr>
   <td>
   <img style="margin-bottom:12px" name="GlobeShake"  src="<?php echo IMAGES_URL;?>logo_Globeshake.png" border="0" id="GlobeShake" alt="GlobeShake"  />
   
   </td></tr>
   </table>
    
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600"style="font-family:Arial, Helvetica, sans-serif; border: #000 1px solid;">


  <tr>
   <td style="font-size: 20px; margin-bottom: 16px; margin-left: 20px; margin-top: 14px; background:#47789F; height:30px; color:#FFF; padding:12px; width:100%; ">Verifica tu dirección de correo electrónico</td></tr>
   <tr>
 <td style="font-size: 16px; margin-bottom: 16px; margin-left: 20px; margin-top: 14px; height:30px; color:#7A7A7A; padding-left:12px; padding-top:12px; padding-bottom:12px; padding-right:12px;">
  Hola <?php echo $user_data['complet_name'];?>, al verificar tu dirección de correo electrónico obtendrás acceso completo a GlobeShake.</td>
   
  </tr>
  <tr>
 <td style="font-size: 16px; margin-bottom: 16px; margin-left: 20px; margin-top: 14px; height:30px; color:#666666; padding-left:12px; ">
 	<a style="font-size: 14px; background:#6FA4CE; color:#FFF; text-decoration:none; padding:5px; " href="<?php echo $link;?>">Verifica tu dirección de correo electrónico</a>
 </td>
    </tr>
   <tr>
 <td style="font-size: 12px; margin-bottom: 16px; margin-left: 20px; margin-top: 14px; height:30px; color:#7A7A7A; padding-left:12px; padding-bottom:12px; padding-top:12px;">Si el botón no funciona, copia y pega este enlace en tu navegador <?php echo $link; ?></td>
   
  </tr>
  <tr>
   <td style=" margin-bottom: 16px; margin-left: 20px; margin-top: 14px; background:#47789F; height:15px; padding:12px; width:100%;"></td></tr>
   <tr>
</table>
    
      
    
</body>
</html>

