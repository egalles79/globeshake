<?php
//Creamos una función que detecte el idioma del navegador del cliente. 
function getUserLanguage() {  
   $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
   return $idioma;  
} 
$user_language=getUserLanguage(); 

if($user_language=='es' || $user_language=='ca'){
	$description = "Plataforma internacional para la Industria donde Licitadores, Constructoras, Ingenierías, Arquitectos, Promotoras y demás empresas del sector, se dan a conocer sin fronteras.";
	$keywords = "Industria, Licitaciones Internacionales, Construccion, Contratistas, UTES, Ingenieria, Arquitectura,  Proyectos internacionales, Ofertas, Empresas.";
	$logo = "img/logo.png";
	$titleLogo = "Globeshake. En contrucción";
	$texto = "<p>Pronto estaremos con ustedes.</p><p>Disculpen las molestias.</p><p>Gracias.</p>";
	$style = "e_contr_es";
} else {
	$description = "International Industry-related Platform where Contractors, Engineering firms, Tenderers and related businesses, meet and get noticed in the pursue of international expansion.";
	$keywords = "Industry, construction, Joint Ventures, engineering, International Tenders, Architecture,International Projects, Bids, Bussinesses.";
	$logo = "img/logo_en.png";
	$titleLogo = "Globeshake. Under construction";
	$texto = "<p>Thank you for your patience.</p><p>See you soon.</p>";
	$style = "e_contr_en";
}

?>


<!doctype html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="description" content="<?php echo $description;?>" />
 <meta name="keywords" content="<?php echo $keywords;?>" />
 <meta http-equiv="Content-Language" content="<?php echo $user_language;?>"/>
  
  <title>Globeshake</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php include_once("analyticstracking.php") ?>
  <header>
   <div class="cabecera"></div>
 </header>
 
 <div class="container">
  <nav><div class="h_ok"><a href="#"><img src="<?php echo $logo;?>" alt="<?php echo $titleLogo;?>" title="<?php echo $titleLogo;?>"></a>    
  </div>
</nav>
<article>
 <div class="content">
   <div class="<?php echo $style;?>"><!-- <img title="Globeshake. En contrucción" alt="Globeshake. En contrucción" src="img/p_construccion.png">--></div>
   <?php echo $texto;?>
 </div>
</article></div>
<footer>
  <div class="fter">
  </div>
</footer>
</body>
</html>