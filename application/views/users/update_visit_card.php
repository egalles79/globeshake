
    <?php if (! empty($message)) { ?>
    <div id="message">
      <?php echo $message; ?>
    </div>
    <?php } ?>

<div class="tarjvitr_container">
  <div class="tarjvitr_containertext">Su tarjeta de Visita virtual GS</div>
  <div class="tarjvitr_con">
    <div class="tarjvitr_condos">
      <form  id="pedo" method="post" action="#">
        <div class="tarjvitr_contres">
          <div class="tarjvitr_foto"><img src="<?php echo IMAGES_URL;?>camarafot.png" alt="Fotografía" title="Fotografía"></div>
          <div class="tarjvitr_nombre"><textarea id="tarjvitr_nombreplus" name="tarjvitr_nombredospl" placeholder="NOMBRE DE LA EMPRESA"></textarea></div>
          <div class="tarjvitr_linea">
                  <?php
              echo "<select name='sectors' id='sector_bc' required>";

              foreach ($sectors as $code => $name) {
                echo "<option value='".$name['id']."'";
if($user['sector']==$name['id']) {
  echo ' selected ';
}

                
                echo ">".$name['Name'];
                echo '</option>'; 
              }
              echo '<option value="" selected>Línea de negocio</option>';
              echo '</select>';             
              ?>
            </div>

            <div class="tarjvitr_lineados"></div>
            <div class="tarjvitr_nombredosbi"><input id="tarjvitr_nombredos" type="text" name="tarjvitr_nombredos" placeholder="NOMBRE" value="<?=$user["name"];?>"></div>
            <div class="tarjvitr_nombreapellidos"><input id="tarjvitr_nombreapellidos" type="text" name="tarjvitr_nombreapellidos" placeholder="APELLIDOS" value="<?=$user['surname'];?>"></div>
            <div class="tarjvitr_lineanombre"></div>
            <div class="tarjvitr_lineanapel"></div>

            <div class="tarjvitr_empleauton">
              <p class="tarjvitr_eplautdos">Empleado</p>
              <input class="tarjvitr_eplaut" type="radio" name="tipoEmpleado" value="E" checked="checked">
            <p class="tarjvitr_eplautdos">Autónomo</p>
              <input class="tarjvitr_eplautdos" type="radio" name="tipoEmpleado" value="A">
            </div>

              

              <div><input id="tarjvitr_funciemp" type="text" name="tarjvitr_funciemp" placeholder="FUNCIÓN DENTRO DE LA EMPRESA"></div>
              <div class="tarjvitr_linefunci"></div>
              <div><input id="tarjvitr_funciempdos" type="text" name="tarjvitr_funciempe" placeholder="DPTO. DENTRO DE LA EMPRESA"></div>
              <div class="tarjvitr_linefunci"></div>
              <div class="tarjvitr_pais">
                  <?php
              echo "<select name='country' id='country_bc' required>";

              foreach ($countries as $code => $name) {
                echo "<option value='".$name['Code']."'";
if($user['country']==$name['Code']) {
  echo ' selected ';
}

                
                echo ">".lang('country.'.$name['Code']);
                echo '</option>'; 
              }
              echo '</select>';
              
              ?>

              <div class="tarjvitr_ciudad"><select>
                <option value="">Ciudad</option>
              </select> </div>

            </div>
            <div class="tarjvitr_email"><input id="tarjvitr_email" type="text" name="tarjvitr_email" placeholder="EMAIL" value="<?=$user['email'];?>"></div>
            <div class="tarjvitr_lineemail"></div>

            <div class="tarjvitr_direcem"><input id="tarjvitr_direcem" type="text" name="tarjvitr_direcem" placeholder="DIRECCIÓN EMPRESA"></div>
            <div class="tarjvitr_linedirecc"></div>

            <div class="tarjvitr_cvempres"><a href="#" class="tarjvitr_en">CV EMPRESA</a></div>

          </div>
          <div class="tarjvitr_concuatro">
            <div class="tarjvitr_mcv">MI CV</div>
            <div class="tarjvitr_concuatrocont">
              <div class="tarjvitr_concuatroactual"><img src="<?php echo IMAGES_URL;?>industri_verde.png" alt="Industria proyecto actual" title="Industria proyecto actual">PROYECTO 1:<span class="tarjvitr_concuatroactualdef"> Lorem ipsum dolor sit amet ipsum.</span></div>
              <div class="tarjvitr_concuatroactualdos"><img src="<?php echo IMAGES_URL;?>industri_gris.png" alt="Industria proyecto actual" title="Industria proyecto actual">PROYECTO 2:<span class="tarjvitr_concuatroactualdefdos"> Lorem ipsum dolor sit amet ipsum.</span></div>

              <div class="tarjvitr_concuatroactualtres"><img src="<?php echo IMAGES_URL;?>industri_gris.png" alt="Industria proyecto actual" title="Industria proyecto actual">PROYECTO 3:<span class="tarjvitr_concuatroactualdeftres"> Lorem ipsum dolor sit amet ipsum.</span></div>

              <div class="tarjvitr_concuatroactualcuatr"><img src="<?php echo IMAGES_URL;?>industri_gris.png" alt="Industria proyecto actual" title="Industria proyecto actual">PROYECTO 4:<span class="tarjvitr_concuatroactualdefcuatr"> Lorem ipsum dolor sit amet ipsum.</span></div>

            </div>
            <div class="tarjvitr_cvempresdos"><a href="#" class="tarjvitr_en">RESUMEN MI CV</a></div>

            <div class="tarjvitr_accredes"><p class="tarjvitr_ress">Acceso a mis redes sociales</p><input class="tarjvitr_eplauttres" type="radio" name="autonomosi" value="si"><span class="tarjvitr_eplauttressi">Si</span>
              <input class="tarjvitr_eplautcuatr" type="radio" name="autonomosno" value="no"><span class="tarjvitr_eplautdosspa">No</span>
            </div>

            <div class="socialb social-headb">
              <a href="#" title="Facebook"><i class="icon-facebook"></i></a>
              <a href="#" title="Twitter"><i class="icon-twitter"></i></a>
              <a href="#" title="Rss"><i class="icon-rss"></i></a>      

            </div><!-- end social -->
          </div>

          <div class="tarjvitr_containerbut">
            <button type="submit" id="tarjvitr_aceptar">
              <span>Aceptar</span>
            </button>
          </div>
        
      </form>
    </div>
  </div>
</div>
     
        <!-- mapa mundi google maps -->
<iframe width="869" height="510" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/?ie=UTF8&amp;t=m&amp;ll=41.508577,1.757813&amp;spn=119.416058,303.398438&amp;z=2&amp;output=embed"></iframe><br /><small><a href="https://maps.google.es/?ie=UTF8&amp;t=m&amp;ll=41.508577,1.757813&amp;spn=119.416058,303.398438&amp;z=2&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
<!-- fin mapa mundi google maps -->
         </div>
         
         
         <div class="row botdmapcont"> 
          <div class="grid_2 botonseccont"><a class="tbutton flr large color4 masct" href="#">Oficinas</a></div>
          <div class="grid_2 botonseccont"><a class="tbutton flr large color4 masct" href="#">Proyectos</a></div>
          <div class="grid_2 botonseccont"><a class="tbutton flr large color4 masct" href="#">CV Empresa</a></div>
         </div>
         
        <div class="row botdmapcontdos"> 
          <div class="grid_2 botonseccontdos"><p>Últimos proyectos:</p></div>
          <div class="grid_2 botonseccontdostext"><p class="tupcontbo">Lorem ipsum para este proyecto. Ubicación: <span class="colrento">El Cairo</span></div>
          
          <div class="grid_2 botonsecconttres"><p>ÚLTIMOS USUARIOS CONECTADOS:</p></div>
          <div class="grid_2 botonsecconttresult"><p><img class="fll ultcontt" alt="#" src="<?php echo IMAGES_URL;?>imag_prueba.jpg"></p><p><img class="fll ultcontt" alt="#" src="<?php echo IMAGES_URL;?>imag_prueba.jpg"></p><p><img class="fll ultcontt" alt="#" src="<?php echo IMAGES_URL;?>imag_prueba.jpg"></p><p><img class="fll ultcontt" alt="#" src="<?php echo IMAGES_URL;?>imag_prueba.jpg"></p></div>
         </div>
            </div><!-- final row-->
    
               <!-- Final del mapa -->   </section>
      


  <div class="grid_6 animated  anchcont" data-gen="fadeInLeftBig">
      
        <ul class="tabs">
          <li class="nsqptacont"><a href="#t-1" class="active">Tus proyectos en el mundo</a></li>
          <li class="nsqptacont"><a href="#t-4">Continente</a></li>
          <li class="nsqptacont"><a href="#t-3">País</a></li>
          <li class="nsqptacont"><a href="#t-2">Crear CV</a></li>
        </ul><!-- tabs -->

        <ul class="tabs-content borcontab grirectabscondos">
                
          <li id="t-1" class="active vaycontuno"><img src="<?php echo IMAGES_URL;?>imag_prueba.jpg" class="fll altcont" alt="#"><p class="colrento">"Nombre del proyecto" en EEUU</p>
                    Cargo, empresa, proyecto de unión
                    Lorem ipsum con proyectos
          </li><!-- tab content -->
                   
                    
                    <li id="t-2" class="active vaycontdos"><img src="<?php echo IMAGES_URL;?>imag_prueba.jpg" class="fll altcont" alt="#"><p class="colrento">"Nombre del proyecto" en EEUU</p>
                    Cargo, empresa, proyecto de unión
                    Lorem ipsum con proyectos
          </li><!-- tab content -->
                    
                    
                    <li id="t-3" class="active vayconttres"><img src="<?php echo IMAGES_URL;?>imag_prueba.jpg" class="fll altcont" alt="#"><p class="colrento">"Nombre del proyecto" en EEUU</p>
                    Cargo, empresa, proyecto de unión
                    Lorem ipsum con proyectos
          </li><!-- tab content -->
                    

          <li id="t-4" class="rectabscondos"><p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget...</p>
            
            <p>"Nulla sagittis porttitor varius. Vestibulum eleifend, lorem sit amet gravida accumsan, nisi est tempor risus, non suscipit lectus nunc sit amet din non non turpis. Etiam viverra, est eget vehicula mattis, metus nunc porttitor diam, in commodo enim ipsum ut mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse condimentum sem vitae magna volutpat vel euismod orci bibendum. Aenean tristique molestie mi, vel consectetur lorem fringilla vel. Nulla facilisi."</p>
          </li><!-- tab content -->
<li class="t-5 active recgriscont">
                </li>
        </ul><!-- end tabs -->
    </div><!-- grid 6 -->
    </div>