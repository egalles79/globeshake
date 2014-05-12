
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
	<script type="text/javascript" src="<?php echo JS_URL;?>fancybox/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo JS_URL;?>fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

	<script type="text/javascript">	
	/* <![CDATA[ */
		var tpj=jQuery;
		tpj.noConflict();
		tpj(document).ready(function() {
			tpj(".various").fancybox({
				fitToView	: false,
				width		: '90%',
				height		: '90%',
				autoSize	: false,
				closeClick	: true,
				openEffect	: 'none',
				closeEffect	: 'none'
			});
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