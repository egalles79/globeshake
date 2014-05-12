<?php
	$idioma = $this->lang->lang();	
	$urlBase = base_url().$idioma.'/'; 
?>
<div class="row containgener">
	<section class="decontornno">
		<!-- Inicio columna de la izda la del logo --> 
		<div class="grid_2 logo globes">
			<a href="<?php echo $urlBase;?>"><img src="<?php echo IMAGES_URL;?>logo_Globeshake.png" title="GlobeShake" alt="GlobeShake"></a>		
		</div>
	

	
    	<div class="recuadrctv ctvist clearfix">    
    		<div class="nombre clearfix">
				<ul class="list">
					<li>
						<a class="various ctvisitent" data-fancybox-type="iframe" href="<?php echo $urlBase;?>auth_public/buy_visit_card">Comprar tarjetas visita</a>
					</li>
				</ul>
			</div>
            <!-- Inicio ficha persona-->
            <div class="nombre clearfix">            
            	<!-- Inicio recuadro blanco-->
            	<div class="grid_10 recblan">
            		<div class="fotoctvent">
            			<img src="http://www.globeshake.com/test/images/ctvprueba.jpg" alt="Usuario" title="Usuario">
            		</div>
           				<!-- Inicio datos personal-->
       				<div class="dperso">
			            <span class="deriv">Nombre</span>
			            <span class="deriv pintcon"><?php echo $user['name'];?></span>
			            <span class="deriva">Apellidos</span>
			            <span class="deriv pintconap"><?php echo $user['surname'];?></span>
			            <span class="derive">Empresa</span>
			            <span class="deriv pintconem"><-- No disponible --></span>
        			</div>
        			<!-- Fin datos personal-->
		            <div class="grid_3 grey-line suent tpccpont">
		              	<a class="tipocccontr" href="#">Tipo de cuenta <p class="cont_cont">Continental</p></a>
		            </div>
		            <div class="grid_3 grey-line suent tpccponttres mas">
		            	<a href="#">Subir de categoría</a>
		            </div>
		            <div class="grid_3 grey-line suent tpccponttres">
		            	<a href="#"><img src="http://www.globeshake.com/test/images/imag_tarjetprueb.png" alt="Tarjetas"></a>
		            </div>
		            <div class="grid_3 grey-line suent tpccpontcuat">
		            	<a href="#">Mis contactos</a>
		            </div>
		            <div class="grid_3 grey-line suent tpccpontcin">
		            	<a href="#">Acciones pendientes / Buzón</a>
		            </div>
		            <div class="grid_3 grey-line suent tpccpontseis">
		            	<a href="#">Proyectos potenciales</a>
		            </div>
            	</div>
            <!-- Fin ficha persona-->            
            </div>
            <!-- Final recuadro blanco-->
    	</div>        
    <!-- Final columna de la izdad del logo -->
	</section>
            
            
    <!-- Inicio de la navegación -->
	<nav>        
        <div class="grid_10">        
        	<!-- Inicio de frase Ponga a su empresa....-->
        	<div class="grid_10 pasempr"><?=lang('menu.textprincipal');?></div>
        	<!-- Fin de frase Ponga a su empresa....-->
	            <div class="grid_10 botopri">
					<ul class="tabs añadidcont" data-gen="flipInY">
						
						<li class="aprueba">
							<a href="<?php echo $urlBase;?>auth_public/dashboard/business" class="<?php if ($type == 'business') { echo 'active'; }?> selectedb"><?=lang('menu.tituloempresa');?></a></li>
						<li>
							<a href="<?php echo $urlBase;?>auth_public/dashboard/professional" class="selectedc <?php if ($type == 'professional') { echo 'active'; }?>"><?=lang('menu.profesional');?></a></li>
					</ul>
				</div>
            </div>           
	</nav> <!-- Final de la navegación --> 
          
    <section><!-- Principio del mapa -->
		<div class="princbotones">
			<ul class="sf-menu colorsubconttootorre">
				<?php if ($type == 'business') { ?>
				<li class="current selectedLava"><a class="colorsubconttoo" href="index.html"><?=lang('menu.daraconocer');?></a>
					<ul>
						<li><a href="index2-revolution.html"><?=lang('menu.presenta');?></a></li>
						<li><a href="index3-nivo.html"><?=lang('menu.creacv');?></a></li>
						<li><a href="index3-nivo.html"><?=lang('menu.resumencv');?></a></li>	
                        <li><a href="index3-nivo.html"><?=lang('menu.creaportal');?></a></li>	
            		</ul>
				</li>
				<li class="current selectedLava"><a class="colorsubconttoo" href="index.html"><?=lang('menu.colaboradores');?></a>
					<ul>
						<li><a href="index2-revolution.html"><?=lang('menu.listasinternas');?></a></li>
						<li><a href="index3-nivo.html"><?=lang('menu.crealista');?></a></li>	
                        <li><a href="index3-nivo.html"><?=lang('menu.mislistas');?></a></li>	
					</ul>
				</li>
				<li class="current selectedLava"><a class="colorsubconttoo" href="index.html"><?=lang('menu.licitaciones');?></a>
					<ul>
						<li><a href="index2-revolution.html"><?=lang('menu.publicarlicitacion');?></a></li>
						<li><a href="index3-nivo.html"><?=lang('menu.peticionoferta');?></a></li>
                        <li><a href="index3-nivo.html"><?=lang('menu.listasinternas');?></a></li>
                        <li><a href="index3-nivo.html"><?=lang('menu.marketsurvey');?></a></li>			
					</ul>
				</li>
				<?php } else { ?>
				<li class="current selectedLava"><a class="colorsubconttoo" href="index.html">Dar a conocer mi perfil</a>
					<ul>
						<li><a href="index2-revolution.html">Preséntate profesionalmente</a></li>
						<li><a href="index3-nivo.html"><?=lang('menu.creacv');?></a></li>
						<li><a href="index3-nivo.html"><?=lang('menu.resumencv');?></a></li>	
                        <li><a href="index3-nivo.html">Soy especialista</a></li>
						<li><a href="index3-nivo.html">Sé visible en la empresa</a></li>	
            		</ul>
				</li>
				<li class="current selectedLava"><a class="colorsubconttoo" href="index.html">Buscar (general)</a>
					<ul>
						<li><a href="index2-revolution.html">Personas</a></li>
						<li><a href="index3-nivo.html">Contactos</a></li>	
                        <li><a href="index3-nivo.html">Empresas</a></li>	
					</ul>
				</li>
				<?php }?>
			</ul><!-- end menu -->
			<div class="grid_2 search partbocont">
				<form action="search.html" id="search" method="get">
					<input id="inputhead" name="search" type="text" onfocus="if (this.value=='Start Searching...') this.value = '';" onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ..." />
					<button type="submit">
						<i class="icon-search"></i>
					</button>
				</form><!-- end form -->
			</div><!-- search -->
	<!--Fin de la botonera -->
			<div class="fullwidthbanner-container">	