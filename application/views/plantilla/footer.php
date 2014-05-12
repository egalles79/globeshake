</div><!-- Fin del contenedor: row containgener -->

	<footer id="footer" class="dtketicont">
		<div class="footer-last row mtf clearfix">

			<div class="foot-menu">
				<ul>
					<li><a href="#">GlobeShake BETA Copyright @ 2014</a></li>
					<li><a href="#">Copyright</a></li>
					<li><a href="#">Condiciones de uso</a></li>
					<li><a href="#">Política de Privacidad</a></li>
					<li><a href="#">Directrices comunitarias</a></li>
					<li><a href="#">Política de Copyright</a></li>
					<li><a href="#">Blog</a></li>
				</ul><!-- end links -->
			</div><!-- end foot menu -->

		</div><!-- end last footer -->

	</footer><!-- end footer -->
</div><!-- end layout -->




<div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- Scripts -->
	<script type="text/javascript" src="<?php echo JS_URL;?>jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo JS_URL;?>rs-plugin/pluginsources/jquery.themepunch.plugins.min.js"></script>	
	<script type="text/javascript" src="<?php echo JS_URL;?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?php echo JS_URL;?>jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo LAYOUT_URL;?>bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo JS_URL;?>theme20.js"></script>
	<script type="text/javascript" src="<?php echo JS_URL;?>jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="<?php echo JS_URL;?>jquery.knob.js"></script>
	<script type="text/javascript" src="<?php echo JS_URL;?>jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="<?php echo JS_URL;?>gmap3.js"></script>
	<script type="text/javascript" src="<?php echo JS_URL;?>twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="<?php echo JS_URL;?>custom.js"></script>


	<script type="text/javascript">	
	/* <![CDATA[ */
		var tpj=jQuery;
		tpj.noConflict();
		tpj(document).ready(function() {
		if (tpj.fn.cssOriginal!=undefined)
			tpj.fn.css = tpj.fn.cssOriginal;
			var api= tpj('.revolution').revolution({
				delay:9000,
				startheight:380,
				startwidth:960,
				hideThumbs:200,
				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:5,
				navigationType:"bullet",
				navigationArrows:"verticalcentered",
				navigationStyle:"square",	
				touchenabled:"on", 
				onHoverStop:"on", 
				navOffsetHorizontal:0,
				navOffsetVertical:20,
				shadow:0
			});
  });	
  $(function() {	
    var availableTags = [
      { label: "Choice1", value: "value1" }
    ];
    $( "#country" ).autocomplete({
      source: availableTags
    });
    /*$( "#message" ).dialog({
      title: 'Mensaje del sistema',
      modal: true,
      buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
        }
      }
    });*/

	$( "#message" ).dialog(
		{ 
			modal: true,
			width: 540,
			buttons: 
			[ 
				{ 
					text: "Aceptar", 
					click: function() 
					{ 
						$( this ).dialog( "close" ); 
					} 
				} 
			] 
		});

  	$('#window_area .login').click(function(){
		if($(this).hasClass('active')) $('.header_window').hide();
		else $('.header_window').show(100);
		
		$(this).toggleClass('active');
	});
  });
	/* ]]> */
	</script>
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>

</body>
</html>