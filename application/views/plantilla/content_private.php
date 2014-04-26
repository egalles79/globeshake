<div class="row containgener">
	<section class="decontornno">
		<!-- Inicio columna de la izda la del logo --> 
		<div class="grid_2 logo globes">
			<a href="<?php echo base_url();?>"><img src="<?php echo IMAGES_URL;?>logo_Globeshake.png" title="GlobeShake" alt="GlobeShake"></a>		
		</div>
	

	
    	<div class="recuadrctv ctvist clearfix">    
    		<div class="nombre clearfix">
				<a class="ctvisitent" href="<?php echo base_url().'auth_public/buy_visit_card';?>">Comprar tarjetas visita</a>
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
        	<div class="grid_10 pasempr">Ponga a su empresa en el mapa / Construcción, Ingeniería, Arquitectura</div>
        	<!-- Fin de frase Ponga a su empresa....-->
	            <div class="grid_10 botopri">
					<ul class="tabs añadidcont" data-gen="flipInY">
						<li class="aprueba"><a href="#" class="active selectedb">Mi empresa</a></li>
						<li><a href="#" class="selectedc">Mi perfil profesional</a></li>
					</ul>
				</div>
            </div>           
	</nav> <!-- Final de la navegación --> 
          
    <section><!-- Principio del mapa -->
		<div class="princbotones">
			<ul class="sf-menu colorsubconttootorre">
				<li class="current selectedLava"><a class="colorsubconttoo" href="index.html">Dar a conocer mi empresa</a>
					<ul>
						<li><a href="index2-revolution.html">Crear CV</a></li>
						<li><a href="index3-nivo.html">Resumen CV Empresa</a></li>	
                        <li><a href="index3-nivo.html">Enviar Candidatura Empresa</a></li>	
            		</ul>
				</li>
				<li class="current selectedLava"><a class="colorsubconttoo" href="index.html">Control de inteligencia</a>
					<ul>
						<li><a href="index2-revolution.html">Listas Internas</a></li>
						<li><a href="index3-nivo.html">Crear Lista</a></li>	
                        <li><a href="index3-nivo.html">Mis Listas</a></li>	
					</ul>
				</li>
				<li class="current selectedLava"><a class="colorsubconttoo" href="index.html">Control licitaciones</a>
					<ul>
						<li><a href="index2-revolution.html">Publicar Licitación</a></li>
						<li><a href="index3-nivo.html">Petición oferta</a></li>
                        <li><a href="index3-nivo.html">Filtrar Licitaciones</a></li>
                        <li><a href="index3-nivo.html">Market Survey</a></li>			
					</ul>
				</li>
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