<?php  if ( ! defined('BASEPATH')) exit('Acceso directo no permitido');
/**
* Name: flexi auth lang - English
* 
* Author: 
* Rob Hussey
* flexiauth@haseydesign.com
* haseydesign.com/flexi-auth
*
* Released: 13/09/2012
*
* Description:
* English language file for flexi auth
*
* Requirements: PHP5 or above and Codeigniter 2.0+
*/
//Field names
$lang['user_name']									= 'Nombre';
$lang['user_surname']								= 'Apellidos';
$lang['user_email']									= 'Correo electrónico';
$lang['user_country']								= 'País de ubicación';
$lang['user_password']								= 'Contraseña';
$lang['user_password_confirm']						= 'Confirmar contraseña';
$lang['user_register_btn']							= 'Regístrese';
$lang['user_send'] 									= 'Enviar';
$lang['user_password_new']							= 'Nueva contraseña';
$lang['user_password_new_repeat']					= 'Repetir nueva contraseña';
$lang['user_password_change']						= 'Restablecer contraseña';
$lang['user_remember']								= 'Recordar la contraseña';
$lang['user_continuar']								= 'Continuar';

// Account Creation
$lang['account_creation_successful']				= 'Su cuenta ha sido creada.';
$lang['account_creation_unsuccessful']				= 'No hemos podido crear su cuenta.';
$lang['account_creation_duplicate_email']			= 'Ya existe una cuenta con esta dirección de correo electrónico.'; 
$lang['account_creation_duplicate_username']		= 'Ya existe una cuenta con ese nombre de usuario.'; 
$lang['account_creation_duplicate_identity'] 		= 'Ya existe una cuenta con esta identidad.';
$lang['account_creation_insufficient_data']			= 'No se ha podido crear la cuenta. Asegúrese de tener una identidad válida y de añadir una contraseña.';
$lang['account_creation_title']						= 'Regístrese ahora en GlobeShake';

// Password
$lang['password_invalid']							= "La contraseña debe tener almenos 8 caracteres.";
$lang['password_change_successful'] 	 	 		= 'Ha restablecido su contraseña con éxito.';
$lang['password_change_unsuccessful'] 	  	 		= 'Tu contraseña no coincide con nuestro registro.';
$lang['password_token_invalid']  					= 'El token de tu contraseña no es válido o ha expirado.'; 
$lang['email_new_password_successful']				= 'La hemos enviado una nueva contraseña a su correo electrónico.';
$lang['email_forgot_password_successful']	 		= 'Se ha enviado un email para restablecer su contraseña.';
$lang['email_forgot_password_unsuccessful']  		= 'No hemos podido resetear su contraseña.'; 
$lang['email_forgot_password_content']  			= 'Por favor, verifique su email para restablecer su contraseña'; 
$lang['password_forgotten']							= 'He olvidado la contraseña';
$lang['password_change_title']						= 'Restablezca su contraseña. Es fácil.';
$lang['password_change_email']						= 'Introduzca su dirección de correo electrónico para obtener instrucciones';
$lang['forgot_password_update_title']				= 'Restablezca su contraseña';

// Activation
$lang['activate_successful']						= 'Su cuenta ha sido activada.<br />Ya puede acceder a GlobeShake.';
$lang['activate_unsuccessful']						= 'No ha sido posible activar la cuenta.Por favor contacte con el administador.';
$lang['deactivate_successful']						= 'Su cuenta ha sido deshabilitada.';
$lang['deactivate_unsuccessful']					= 'No ha sido posible desactivar su cuenta. Contacte con el administrador.';
$lang['activation_email_successful'] 	 			= 'Se ha enviado un email de activación a su cuenta de correo';
$lang['activation_email_unsuccessful']  	 		= 'No ha sido posible enviar el email de activación. Contacte con el administrador.';
$lang['account_requires_activation'] 				= 'Su cuenta necesita ser activada. Por favor revise su email.';
$lang['account_already_activated'] 					= 'Su cuenta ya ha sido activada.';
$lang['email_activation_email_successful']			= 'Se ha enviado un email de activación a su cuenta de correo';
$lang['email_activation_email_unsuccessful']		= 'No ha sido posible enviar el email de activación. Contacte con el administrador.';
$lang['activation_email_content']					= 'Hemos enviado un correo electrónico a %e.<br />Haz clic en el enlace de verificación del correo electrónico para activar tu cuenta.';
$lang['activation_email_resend']					= 'Reenviar email para activar la cuenta';

// Login / Logout
$lang['login_successful']							= 'Se ha registrado correctamente';
$lang['login_unsuccessful']							= 'Los detalles de su usuario no son correctos. Por favor, verifíquelos';
$lang['logout_successful']							= 'Ha salido correctamente';
$lang['login_details_invalid'] 						= 'Sus datos de acceso no son correctos. Por favor, verifíquelos';
$lang['captcha_answer_invalid'] 					= 'CAPTCHA answer is incorrect.';
$lang['login_attempts_exceeded'] 					= 'Los intentos de inicio de sesión máximos se han superado, por favor espere unos momentos antes de volver a intentarlo.';
$lang['login_session_expired']						= 'Su sesión ha expirado';
$lang['account_suspended'] 							= 'Su cuenta ha sido suspendida. Por favor, contacte con el administrador';
$lang['login_title']								= 'Inicie sesión en GlobeShake';
$lang['login_button']								= 'Iniciar sesión';

// Account Changes
$lang['update_successful']							= 'Account information has been successfully updated.';
$lang['update_unsuccessful']						= 'Unable to update account information.';
$lang['delete_successful']							= 'Account information has been successfully deleted.';
$lang['delete_unsuccessful']						= 'Unable to delete account information.';

// Form Validation
$lang['form_validation_duplicate_identity'] 		= "Ya existe un usuario registrado con este email.";
$lang['form_validation_duplicate_email'] 			= "El campo email de %s no está disponible.";
$lang['form_validation_duplicate_username'] 		= "El nombre de usuario del campo %s no está disponible.";
$lang['form_validation_current_password'] 			= "El campo %s no es válido";