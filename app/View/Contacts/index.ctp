<!DOCTYPE html>
<html lang="en" class="no-js">

<!---------------------------------------------------------------------- HEAD ------------------------------------------------------------------------>
<?php $url ="http://pruebas.pphhsoft.com.py/frigorificoguarani/";?>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Frigorífico Guarani l Contacto</title>
<meta name="description" content="Frigorifico Guarani" />
<meta name="keywords" content="Frigorifico, Guarani, Frigorifico Guarani, Embutidos, Chorizos, Carne, Punto Carne, Aviko, Envasados, Hamburguesas, Kids, Light, Packs, Panchos, Pate, PC, Vacas" />
<link rel="shortcut icon" href="<?=$url?>images/ico/favicon.ico" type="image/x-icon"/>

<link href='http://fonts.googleapis.com/css?family=Playfair+Display:900,400|Lato:300,400,700' rel='stylesheet' type='text/css'>
        
<link href="<?=$url?>css/index.css" rel="stylesheet" type="text/css">
<link href="<?=$url?>css/slide.css" rel="stylesheet" type="text/css" />
<link href="<?=$url?>css/carrousel.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=$url?>css/menu.css">

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?=$url?>script/menu.js"></script>
<script src="<?=$url?>script/respond.min.js"></script>
<script type="text/javascript">
	function MM_swapImgRestore() { //v3.0
	  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
	}
	function MM_preloadImages() { //v3.0
	  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
		var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
		if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
	}
	
	function MM_findObj(n, d) { //v4.01
	  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
		d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
	  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
	  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
	  if(!x && d.getElementById) x=d.getElementById(n); return x;
	}
	
	function MM_swapImage() { //v3.0
	  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
	   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
	}
</script>
<script src="<?=$url?>script/jquery.min.js"></script>  
<script src="<?=$url?>script/slide/unslider.js"></script>
<script src="<?=$url?>script/slide/unslider.min.js"></script>
<script src="<?=$url?>script/modernizr.custom.js"></script>
<script src="<?=$url?>script/carrousel.js"></script>

<!--------------------------------------------------------------------- FANCY ------------------------------------------------------------------------>

	<script type="text/javascript" src="<?=$url?>script/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?=$url?>script/fancybox/jquery.fancybox.js?v=2.1.5"></script>
	
    <link rel="stylesheet" type="text/css" href="<?=$url?>script/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
			
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',
				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',
				prevEffect : 'none',
				nextEffect : 'none',
				closeBtn  : false,
				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},
				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',
				closeBtn  : false,
				arrows    : false,
				nextClick : true,
				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',
					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>

<!--------------------------------------------------------------------- FANCY ------------------------------------------------------------------------>

</head>

<!---------------------------------------------------------------------- HEAD ------------------------------------------------------------------------>

<!---------------------------------------------------------------------- BODY ------------------------------------------------------------------------>

<body>
                
<!---------------------------------------------------------------------- DRAG ------------------------------------------------------------------------>
        
    <div class="gridContainer">
      
<!---------------------------------------------------------------------- DRAG ------------------------------------------------------------------------>

<!---------------------------------------------------------------------- TOPC ------------------------------------------------------------------------>

    <div id="top_container">
    
        <div id="logo_container"> <a href="<?=$url?>index.html" target="_self"><img src="<?=$url?>images/logo/logo.png"></a> </div>
        <div id="location_container-info"> <p><strong>Dirección:</strong> </p> <p> Artigas 1921 1er piso </p> <p> Asunción, Paraguay </p> </div>
        <div id="location_container"> </div>
        <div id="phone_container-number"><p><strong>Teléfono:</strong></p><p> +59521 670 796 / +59521 670 800</p>  </div>
        <div id="phone_container"> </div>
    
    </div>
 
<!---------------------------------------------------------------------- TOPC ------------------------------------------------------------------------>

<!---------------------------------------------------------------------- MENU ------------------------------------------------------------------------>

    <div id="menu_container">
        <div id='cssmenu'>
            <ul>
                <li><a href='index.html'><span>Inicio</span></a></li>
                <li class='has-sub'><a href='#'><span>Empresa</span></a>
                      <ul>
                         <li><a href='<?=$url?>mision.html'><span>Misión / Visión</span></a></li>
                         <li><a href='<?=$url?>valores.html'><span>Valores</span></a></li>
                         <li><a href='<?=$url?>politica.html'><span>Política de Calidad</span></a></li>
                      </ul>
                   </li>
                <li><a href='<?=$url?>productos.html'><span>Productos</span></a>
                <li><a href='<?=$url?>clientes.html'><span>Clientes</span></a></li>
                <li><a href='<?=$url?>rse.html'><span>RSE</span></a></li>
                <li class='active'><a href='contacto.html'><span>Contacto</span></a></li>
                <div id="social_container"> <a href="https://mail.google.com/mail/u/0/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','images/social/em-1.png',1)" target="_blank"><img src="<?=$url?>images/social/em.png" width="30" height="40" id="Image4"></a></div>
                <div id="social_container"> <a href="https://instagram.com/guarani_f/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','images/social/tw-1.png',1)" target="_blank"><img src="<?=$url?>images/social/tw.png" width="30" height="40" id="Image3"></a></div>
                <div id="social_container"> <a href="https://www.facebook.com/guaranihamburguesasyembutidos/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','images/social/fb-1.PNG',1)" target="_blank"><img src="<?=$url?>images/social/fb.png" width="30" height="40" id="Image2"></a></div>
          </ul>
            
      </div>
    </div>
 
<!---------------------------------------------------------------------- MENU ------------------------------------------------------------------------>


<!---------------------------------------------------------------------- DISC -------------------------------------------------------------------------->

	<div id="disclaimer_container-img" style="background-image: url(<?=$url?>images/misc/meat-ico-4.png);"> </div>
    <div id="disclaimer_container-title"> <p> Contacto</p> </div>
    <div id="disclaimer_cotainer-descr" style="border-bottom: none;">
    
    <div id="form-container">
    	<div ><?php print_r( $this->Session->flash() );?></div>

    	<?php echo $this->Form->create("Contact" ,array('url' => array( 'action' => 'send'))); ?>

			<?php $opciones = array("Sugerencia" => "Sugerencia",
		      "Pedido de Hamburguesas"=>"Pedido de Hamburguesas",
		      "Pedido de Embutidos" => "Pedido de Embutidos",
		      "Pedido de Productos Aviko" => "Pedido de Productos Aviko",
		      "Pedido de Carne" => "Pedido de Carne",
		      "Pedido de Sub-Productos"=>"Pedido de Sub-Productos",
		      "Contacto Punto Carne"=>"Contacto Punto Carne",
		      "Solicitud de Empleo"=>"Solicitud de Empleo"); ?>

    		<?php echo $this->Form->input("asunto", array("options"=>$opciones,"style"=>"width: 87%;","label" =>array("text"=>"Asunto","id"=>"form-container-text"),"id"=>"form-container-input","div"=>array("id"=>"form-container"))); ?>
		 
		    
		    <?php echo $this->Form->input("nombre",array("label" =>array("text"=>"Nombre","id"=>"form-container-text"),"id"=>"form-container-input","div"=>array("id"=>"form-container")) ); ?>
		    
		    <?php echo $this->Form->input("apellido", array("label" => array("text"=>"Apellido","id"=>"form-container-text"),"id"=>"form-container-input","div"=>array("id"=>"form-container") )); ?>  
		    
		    <?php echo $this->Form->input("pais",array("label" => array("text" =>"País","id"=>"form-container-text"),"id"=>"form-container-input","div"=>array("id"=>"form-container"))); ?>  
		   
		     <?php echo $this->Form->input("ciudad",array("label" => array("text"=>"Ciudad","id"=>"form-container-text"),"id"=>"form-container-input","div"=>array("id"=>"form-container"),)); ?> 
		   
		    <?php echo $this->Form->input("telefono", array("label"=>array("id" =>"form-container-text","text"=>"Teléfono"),"id"=>"form-container-input","div"=>array("id"=>"form-container"))); ?>
		   
		    <?php echo $this->Form->input("Email",array("label" => array("text"=>"Email","id"=>"form-container-text"),"id"=>"form-container-input","div"=>array("id"=>"form-container"))); ?>  
		    
		     <?php echo $this->Form->input("curriculum",array("type"=>"file","label" =>array("text"=>"Adjuntar CV","id"=>"form-container-text"),"id"=>"form-container-input","div"=>array("id"=>"form-container"))); ?> 
		   
		    <?php echo $this->Form->input("mensaje", array("type"=>"textarea","label" => array("text"=>"Mensaje","id"=>"form-container-text"),"id"=>"form-container-input-text","div"=>array("id"=>"form-container"))); ?>
		   </br>
		    <?php echo $this->Form->submit($url."images/misc/enviar.JPG"); ?>
			<?php echo $this->Form->end(); ?>

		  <!--  <div id="form-container">
		    	<div id="form-container-send"> Enviar </div>
		    </div>-->
    
	</div>
     
<!---------------------------------------------------------------------- DISC ------------------------------------------------------------------------->

<!---------------------------------------------------------------------- CARR ------------------------------------------------------------------------->
	
<div id="carrousel_container-bg">
	<div id="carrousel_container">
    
    	<div id="disclaimer_container-title" style="color: #00539e;"> <p> ¿Dónde nos encontramos? </p> </div>
    	<div id="carrousel_container-item">
       	  <div id="carrousel_container-item-img"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7208.629008591005!2d-57.342142!3d-25.394281!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd93bd95a36c854e1!2sFrigorifico+Guarani!5e0!3m2!1ses!2sus!4v1446594431390" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
          <div id="carrousel_container-item-ico"> <img src="<?=$url?>images/misc/icon-meat-10.png"></div>
          <div id="carrousel_container-item-title"> SEDE ITAGUA </div>
          <div id="carrousel_container-item-title-descr"> Planta Procesadora de Alimentos (Hamburguesas y embutidos) </div>
          <div id="carrousel_container-item-descr" style="padding: 4% 0%;">
          
                <strong>Procesadora de Sub-Productos.</strong><br>
                <strong>Dirección:</strong> Ruta 2. Mcal. Estigarribia Km. 30,5. Itauguá, Paraguay.<br>
                <strong>Teléfono:</strong> (0294) 221 353<br>
                <strong style="float: left; margin-right: 2px;">Correo:</strong></br> <a href="mailto:itaugua@fguarani.com.py" style="float: left; color: #fff;">itaugua@fguarani.com.py</a></br><a href="mailto:Info@fguarani.com.py" style="float: left; color: #fff;"> Info@fguarani.com.py</a>
          
          </div>
        </div>
        
    	<div id="carrousel_container-item">
       	  <div id="carrousel_container-item-img"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14428.277752931246!2d-57.544085!3d-25.301871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a27a4be438080a1!2zRnJpZ29yw61maWNvIEd1YXJhbsOt!5e0!3m2!1ses!2sus!4v1446594483800" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            <div id="carrousel_container-item-ico"> <img src="<?=$url?>images/misc/icon-meat-10.png"></div>
          <div id="carrousel_container-item-title"> SEDE ASUNCIÓN </div>
          <div id="carrousel_container-item-title-descr"> Planta procesadora de <br> Carne Vacuna <br></div>
          <div id="carrousel_container-item-descr" style="padding: 4% 0%;"> 
          
            <strong>Dirección:</strong> Establecimiento No.17 - Santa Teresa y Chaco Boreal. Fernando de la Mora, Paraguay.<br>
            <strong>Teléfono:</strong> (021) 670 796 / (021) 670 800<br>
            <strong style="float: left; margin-right: 2px;">Correo:  </strong></br> <a href="mailto:fg@fguarani.com.py" style="float: left; color: #fff;">fg@fguarani.com.py </a></br><a href="mailto:Info@fguarani.com.py" style="float: left; color: #fff;"> Info@fguarani.com.py</a></div>
          
        </div>
        
        <div id="carrousel_container-item">
       	  <div id="carrousel_container-item-img" ><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d115255.62618392258!2d-54.627233!3d-25.480412!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3f130f8db384342!2zRnJpZ29yw61maWNvIEd1YXJhbsOt!5e0!3m2!1ses!2sus!4v1446594524909" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            <div id="carrousel_container-item-ico" > <img src="<?=$url?>images/misc/icon-meat-10.png"></div>
          <div id="carrousel_container-item-title"> Distribuidora del Este </div>
          <div id="carrousel_container-item-title-descr"> Planta de distribuición de<br>  productos <br></div>
          <div id="carrousel_container-item-descr" style="padding: 4% 0%;">
          
            <strong>Dirección:</strong> Bº Félix Azara. Súper carretera camino a Itaipú, frente al Paraná Country Club, dentro de la Cantera Acaray.<br>
            <strong>Teléfono:</strong> (061) 574 534<br>
          	<strong style="float: left; margin-right: 2px;">Correo:</strong></br> <a href="mailto:guaranicde@fguarani.com.py" style="float: left; color: #fff;">guaranicde@fguarani.com.py</a></br><a href="mailto:Info@fguarani.com.py" style="float: left; color: #fff;"> Info@fguarani.com.py</a> </div>
        </div>
        
        <div id="carrousel_container-item">
       	  <div id="carrousel_container-item-img"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3607.9131315273216!2d-57.608706103427124!3d-25.273507496358018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945da7c9ad4ae1a9%3A0xab21ca78c52c9781!2sAvenida+General+Jos%C3%A9+Gervasio+Artigas+1921%2C+Asunci%C3%B3n%2C+Paraguay!5e0!3m2!1ses-419!2ses!4v1447361909713" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            <div id="carrousel_container-item-ico" > <img src="<?=$url?>images/misc/icon-meat-10.png"></div>
          <div id="carrousel_container-item-title"> Casa Central </div>
          <div id="carrousel_container-item-title-descr"> Operaciones<br><br></div>
          <div id="carrousel_container-item-descr" style="padding: 4% 0%;">
          
            <strong>Dirección:</strong>Artigas 1921 1er piso.<br>
            <strong>Teléfono:</strong> (021) 293 448<br>
          	<strong style="float: left; margin-right: 2px;">Correo:</strong></br>  <a href="mailto:fg@fguarani.com.py" style="float: left; color: #fff;">fg@fguarani.com.py</a><br><a href="mailto:fgburguer@fguarani.com.py" style="float: left; color: #fff;">fgburguer@fguarani.com.py</a><a href="mailto:fgembutidos@fguarani.com.py" style="float: left; color: #fff;">fgembutidos@fguarani.com.py</a></br><a href="mailto:Info@fguarani.com.py" style="float: left; color: #fff;"> Info@fguarani.com.py</a> </div>
        </div>
        
  </div>
</div>  
      
<!---------------------------------------------------------------------- CARR ------------------------------------------------------------------------->

<!---------------------------------------------------------------------- FOOT ------------------------------------------------------------------------->

	<div id="footer_container" style="margin-top: 20px;">
   	  <div id="footer_container-menu"> <a href="index.html" style="color: #fff;"> INICIO </a></div>
    	<div id="footer_container-menu"><a href='mision.html' style="color: #fff;"> MISIÓN / VISIÓN </a></div>
        <div id="footer_container-menu"><a href='valores.html' style="color: #fff;"> VALORES </a></div>
        <div id="footer_container-menu"><a href='politica.html' style="color: #fff;"> POLÍTICA DE CALIDAD</a></div>
    	<div id="footer_container-menu"><a href="productos.html" style="color: #fff;"> PRODUCTOS </a></div>
    	<div id="footer_container-menu"><a href="clientes.html" style="color: #fff;"> CLIENTES </a></div>
    	<div id="footer_container-menu"><a href="rse.html" style="color: #fff;"> RSE </a></div>
    	<div id="footer_container-menu"><a href="contacto.html" style="color: #fff;"> CONTACTO </a></div>
        <a href="http://www.pphhsoft.com.py" target="_blank"> <img src="<?=$url?>images/Footer/signature.png"> </a>
    </div>

<!---------------------------------------------------------------------- FOOT ------------------------------------------------------------------------>
                  
<!---------------------------------------------------------------------- DRAG ------------------------------------------------------------------------>
                     
    </div>
                        
<!---------------------------------------------------------------------- DRAG ------------------------------------------------------------------------>
   
</body>
    
<!---------------------------------------------------------------------- BODY ------------------------------------------------------------------------>

</html>