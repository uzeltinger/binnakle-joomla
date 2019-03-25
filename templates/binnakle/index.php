<?php
// No direct access.
defined('_JEXEC') or die;
if(!defined('DS')){
   define('DS',DIRECTORY_SEPARATOR);
}
/*  
require_once(dirname(__file__) . DS . 'framework' . DS . 'helper.cache.php');
$this->cache = new GKTemplateCache($this);
$this->cache->registerCache(); 
$this->cache->registerJSCompression();	 
*/
require('libs/detectmobilebrowser.php');
$params = JFactory::getApplication()->getTemplate(true)->params; 
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;

unset($doc->_scripts[$this->baseurl.'/media/jui/js/jquery-noconflict.js']);
unset($doc->_scripts[$this->baseurl.'/media/jui/js/bootstrap.min.js']);
unset($doc->_scripts[$this->baseurl.'/media/jui/js/jquery-migrate.min.js']);
unset($doc->_scripts[$this->baseurl.'/media/system/js/caption.js']);
$this->addFavicon($this->baseurl.'/images/favicon.ico');
/*$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.css');*/
$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.min.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/style.css');

$doc->addScript($this->baseurl.'/media/jui/js/jquery.min.js');
$doc->addScript($this->baseurl.'/media/jui/js/jquery-noconflict.js');
$doc->addScript($this->baseurl.'/media/jui/js/jquery-migrate.min.js');
$doc->addScript('templates/'.$this->template.'/js/bootstrap.min.js');
$doc->addScript('templates/'.$this->template.'/js/main.js');

if(isset($doc->_scripts[$this->baseurl.'/media/com_properties/prettyPhoto_compressed_316/js/jquery.prettyPhoto.js']))
	{
	unset($doc->_scripts[$this->baseurl.'/media/com_properties/prettyPhoto_compressed_316/js/jquery.prettyPhoto.js']);
	$doc->addScript($this->baseurl.'/media/com_properties/prettyPhoto_compressed_316/js/jquery.prettyPhoto.js');
    }
$this->addFavicon($this->baseurl.'/images/favicon.ico');
?>
<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php

//print_r($doc->_scripts);
/*
$doc->addScript($this->baseurl.'/media/jui/js/jquery.min.js');
$doc->addScript($this->baseurl.'/media/jui/js/jquery-noconflict.js');
$doc->addScript($this->baseurl.'/media/jui/js/jquery-migrate.min.js');  
$doc->addScript('templates/'.$this->template.'/js/bootstrap.min.js');
$doc->addScript('templates/'.$this->template.'/js/main.min.js');
*/

$doc->setGenerator('Binnakle');
if (JRequest::getInt('Itemid') == 101 )
{
    $doc->addCustomTag('<link rel="canonical" href="https://www.binnakle.com"/> ');
}
?><!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo $this->baseurl.'/images/favicon.png'?>">
    <link rel="shortcut icon" href="<?php echo $this->baseurl.'/images/favicon.ico'?>">
    <link rel="apple-touch-icon" href="<?php echo $this->baseurl.'/images/red-sos-favicon.png'?>">
	<jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo 'templates/'.$this->template.'/css/bootstrap.min.css'; ?>">
    
    <link rel="stylesheet" href="<?php echo 'templates/'.$this->template.'/css/style.css'; ?>">
    
<?php	/*
<script type="text/javascript">
jQuery(window).on('load',  function() {
	jQuery("#dimensions").html(jQuery( window ).width());
	});			
jQuery( window ).resize(function() {
	jQuery("#dimensions").html(jQuery( window ).width());
});
//	note	360	//	fame	320	//	core	320
</script>
*/?>
<!--[if lt IE 9]>
      <script src="<?php echo 'templates/'.$this->template.'/js/html5shiv.min.js'; ?>"></script>
      <script src="<?php echo 'templates/'.$this->template.'/js/respond.min.js'; ?>"></script>
<![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php
if(JRequest::getVar('option')!='com_properties')
{
$doc->addCustomTag('<meta property="og:type" content="website" /> ');
$doc->addCustomTag('<meta property="og:url" content="'.JURI::current().'" />');
$doc->addCustomTag('<meta property="og:title" content="Binnakle." />');
$doc->addCustomTag('<meta property="og:image" content="http://www.binnakle.com/images/logo.png" />');
$doc->addCustomTag('<meta property="og:description" content="Juego Binnakle" />');
}
?>

</head>
<?php if(!$detectmobilebrowser){$detectmobilebrowserBody='nomobilebrowserbody';}else{$detectmobilebrowserBody='mobilebrowserbody';}?>
<body class="<?php echo $detectmobilebrowserBody;?>">
 <?php if (JRequest::getInt('Itemid') == 101 ) : ?>
<?php endif; ?> 
<div id="dimensions" style="position:fixed; z-index:99999000; background-color:#fff;"></div>













<div class="top-header">
    <div class="container">
        <div class="cabecera">
            <div class="flag"><a href="#"><img src="./images/flag.png"></a></div>
            <div class="redes">
                <div class="red"><a href="#"><span class="fab fa-facebook-f"></span></a></div>
                <div class="red"><a href="#"><span class="fab fa-twitter"></span></a></div>
                <div class="red"><a href="#"><span class="fab fa-youtube"></span></a></div>
            </div>
            <div class="top-link-contacto"><a href="/contacto.html">CONTACTO</a></div>
            <div class="link-juegos link-juegos-mobile">
                <a class="link-juego <?php if(JRequest::getInt('Itemid') == 108){ echo ' active';} ?>" href="./binnakle-the-expedition.html">BINNAKLE<br>THE EXPEDITION</a>
                <a class="link-juego link-juego-last <?php if(JRequest::getInt('Itemid') == 109){ echo ' active';} ?>" href="./binnakle-mission-0.html">BINNAKLE<br>MISSION 0</a>
            </div>
            <div class="link-juegos-tablet">
                <a class="link-juego <?php if(JRequest::getInt('Itemid') == 108){ echo ' active';} ?>" href="./binnakle-the-expedition.html">BINNAKLE<br>THE EXPEDITION</a>
                <a class="link-juego link-juego-last <?php if(JRequest::getInt('Itemid') == 109){ echo ' active';} ?>" href="./binnakle-mission-0.html">BINNAKLE<br>MISSION 0</a>
            </div>
            <div class="link-juegos-descktop">
                <div class="nuestros-serius-games">NUESTROS <br>SERIOUS GAMES:</div>
                <div class="fondo-diagonal"></div>
                <div class="nuestro-serius-game">
                    <a class="link-juego <?php if(JRequest::getInt('Itemid') == 108){ echo ' active';} ?>" href="./binnakle-the-expedition.html">BINNAKLE <br>THE EXPEDITION</a>
                </div>
                <div class="nuestro-serius-game">
                    <a class="link-juego link-juego-last <?php if(JRequest::getInt('Itemid') == 109){ echo ' active';} ?>" href="/binnakle-mission-0.html">BINNAKLE <br>MISSION 0</a>
                </div>
            </div>
        </div>
    </div>
</div>

<header id="header" class="header">
    <nav class="navbar navbar-expand-md navbar-light container-menu-all">
        <div class="container">
            <a class="navbar-brand" href="./">
                <img class="navbar-logo" src="../images/navbar-logo.jpg" alt="Binnakle logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
			<jdoc:include type="modules" name="navmenu" />                
            </div>
        </div>
    </nav>
</header>

<?php if ($this->countModules('topcarousel')) : ?>
<div class="position_topcarousel">
		<jdoc:include type="modules" name="topcarousel" style="xhtml" />
</div>
<?php endif; ?>


<?php if ($this->countModules('topsearch')) : ?>
<div class="position_topsearch">
		<jdoc:include type="modules" name="topsearch" style="xhtml" />
</div>
<?php endif; ?>

<?php if ($this->countModules('topfeatured')) : ?>
<div class="position_topfeatured">
	<div class="container">
		<jdoc:include type="modules" name="topfeatured" style="xhtml" />
	</div>
</div>
<?php endif; ?>


<?php if (JRequest::getInt('Itemid') == 101 ) : ?>

<?php endif; ?>

<jdoc:include type="message" />

<div class="main_container main_container-itemid-<?php echo JRequest::getInt('Itemid');?>">       

<?php if ($this->countModules('left')) { ?>
<div class="position_left">
	<div class="container">
		<jdoc:include type="modules" name="left" style="xhtml" />
	</div>
</div>
<?php } ?>

<?php 
		if ($this->countModules('left')) {
		$showLeft = true;
		}else{
		$showLeft = false;
		}
		if ($this->countModules('right')) {
		$showRight = true;
		}else{
		$showRight = false;
		}
		$contentClass = ' ';
		if($showRight)
			{
			$contentClass = 'col-xs-12 col-sm-12  col-md-8';
			}
		if($showLeft)
			{
			$contentClass = 'col-xs-12 col-sm-12  col-md-8';
			}	
?>
<?php if (JRequest::getInt('Itemid') == 101 ) : ?>
<?php else : ?>

<div class="main_content <?php echo $contentClass;?>">
	<div class="position_component">	
			<jdoc:include type="component" />
 	</div>
 
<?php endif; ?>

<?php if ($this->countModules('right')) { ?>
	<div class="sidebar sidebar-right col-xs-12 col-sm-12  col-md-4 ">
		<jdoc:include type="modules" name="right" style="xhtml" />
	</div>
<?php 	}?>

</div>    <!--	container	-->    



<?php if ($this->countModules('bottom')) { ?>
	<div class="bottom">
		<jdoc:include type="modules" name="bottom" style="xhtml" />
	</div>
<?php 	}?>





<?php if (JRequest::getInt('Itemid') == 101 ) : ?>

  
  
  
  <section class="resultados resultados-itemid-101">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center binnakle-combina">LOS SERIOUS GAMES DE BINNAKLE AYUDAN A LAS EMPRESAS A:</h2>
        </div>
      </div>
    </div>
    <div class="resultados-list">
      <div class="container">
        <div class="row">
          <div class="resultado col-6 col-sm-3 col-lg-3">
            <div class="imagen"><img src="images/iconos/icon-sesiones-creativas.png"></div>
            <div class="bajada">
              <p>OPTIMIZAR SUS SESIONES CREATIVAS</p>
            </div>
          </div>
          <div class="resultado col-6 col-sm-3 col-lg-3">
            <div class="imagen"><img src="images/iconos/icon-co-creacion.png"></div>
            <div class="bajada">
              <p>OPTIMIZAR DINÁMICAS DE <br>CO-CREACIÓN</p>
            </div>
          </div>
          <div class="resultado col-6 col-sm-3 col-lg-3">
            <div class="imagen"><img src="images/iconos/icon-hackatones-innovacion.png"></div>
            <div class="bajada">
              <p>AÑADIR VALOR A EVENTOS CORPORATIVOS Y HACKATONES DE INNOVACIÓN</p>
            </div>
          </div>
          <div class="resultado col-6 col-sm-3 col-lg-3">
            <div class="imagen"><img src="images/iconos/icon-innovacion.png"></div>
            <div class="bajada">
              <p>FOMENTAR LA INNOVACIÓN EN LA ORGANIZACIÓN</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="resultado col-6 col-sm-3 col-lg-3">
            <div class="imagen"><img src="images/iconos/icon-cultura.png"></div>
            <div class="bajada">
              <p>FORMAR EN CULTURA Y METODOLOGÍA PARA INNOVAR</p>
            </div>
          </div>
          <div class="resultado col-6 col-sm-3 col-lg-3">
            <div class="imagen"><img src="images/iconos/icon-detectar-perfiles.png"></div>
            <div class="bajada">
              <p>DETECTAR PERFILES INNOVADORES Y ÁGILES</p>
            </div>
          </div>
          <div class="resultado col-6 col-sm-3 col-lg-3">
            <div class="imagen"><img src="images/iconos/icon-alinear.png"></div>
            <div class="bajada">
              <p>ALINEAR LA VISIÓN SOBRE UN RETO</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="combina">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center binnakle-combina">BINAKLE COMBINA</h2>
        </div>
      </div>
    </div>
    <div class="container combina-content">
      <div class="row">
        <div class="col-5 d-none d-md-block">
          <p>Metodología Contrastada</p>
        </div>
        <div class="col-2 d-none d-md-block">
          <p class="text-center">+</p>
        </div>
        <div class="col-5 d-none d-md-block">
          <p>Beneficios de la Gamificación</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <p class="text-center d-md-none">Metodología Contrastada</p>
          <img class="img-fluid" src="images/funnel-innovacion-binnakle.png">
        </div>
        <div class="col-12 col-md-6">
          <p class="text-center d-md-none">+</p>
          <p class="text-center d-md-none">Beneficios de la Gamificación</p>
          <div class="image-combina-right"><img class="img-fluid" src="images/beneficios-gamificacion.png"></div>
          <div class="image-combina-right-bottom"><img class="img-fluid" src="images/logo_ic_.png"></div>
        </div>
      </div>
    </div>
  </section>

  

  <section class="home-footer">
    <h2 class="text-center footer-title">NUESTROS SERIOUS GAMES</h2>

    <div class="footer-juegos-mobile d-lg-none">
      <div class="container-fluid container-juego-left">
        <div class="row row-juegos">
          <div class="col-4"></div>
          <div class="col-8">
            <div class="juego juego-left">
              <div class="logo-footer">
                <img class="logo" src="images/footer/logo-footer-the-expedition.png">
              </div>
              <div class="bajada-footer">
                Podrás encontrar soluciones novedosas a cualquier tipo de reto
              </div>
              <a href="#" class="footer-button orange">¡CONOCER!</a>
              <div class="botones">
                <a href="#" class="footer-button green">COMPRAR</a>
                <a href="#" class="footer-button green">JUGAR PARTIDA</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid container-juego-right">
        <div class="row row-juegos">
          <div class="col-8">
            <div class="juego juego-right">
              <div class="logo-footer">
                <img class="logo" src="images/footer/logo-footer-mission-0.png">
              </div>
              <div class="bajada-footer">
                Podrás transformar problemáticas en retos concretos que te llevarán a soluciones novedosas
              </div>
              <a href="#" class="footer-button orange">¡CONOCER!</a>
              <div class="botones">
                <a href="#" class="footer-button green">COMPRAR</a>
                <a href="#" class="footer-button green">JUGAR PARTIDA</a>
              </div>
            </div>
          </div>
          <div class="col-4"></div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="footer-info">
              <h3>¿Cómo puedo implementar Binnakle en mi empresa?</h3>
              <p>Comprando partidas on-line o vía los partners oficiales de Binnakle. En el caso
                de “Binnakle, The Expedition” podés comprar la maleta.</p>
              <p>Formando a facilitadores internos vía webinars o presencialmente vía los
                partners oficiales de Binnakle</p>
              <p>Contratando a los partners oficiales de Binnakle para que vengan a dinamizar
                sesiones o eventos</p>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-fondos d-none d-lg-block">
      <div class="container">
        <div class="row row-juegos">
          <div class="col-lg-1 d-md-none d-lg-block"></div>
          <div class="col-lg-5 col-md-12">
            <div class="juego juego-left">
              <div class="logo-footer">
                <img class="logo" src="images/footer/logo-footer-the-expedition.png">
              </div>
              <div class="bajada-footer">
                Podrás encontrar soluciones novedosas a cualquier tipo de reto
              </div>
              <div class="botones">
				<div class="boton">
					<a href="#" class="footer-button green">COMPRAR</a>			  
					<a href="#" class="footer-button green">JUGAR PARTIDA</a>
				</div>
				<div class="boton">
					<a href="#" class="footer-button orange">¡CONOCER!</a>
				</div>
              </div>
            </div>
          </div>

          <div class="col-lg-5  col-md-12">
            <div class="juego juego-right">
              <div class="logo-footer">
                <img class="logo" src="images/footer/logo-footer-mission-0.png">
              </div>
              <div class="bajada-footer">
                Podrás transformar problemáticas en retos concretos que te llevarán a soluciones novedosas
              </div>              
              <div class="botones">
				<div class="boton">
					<a href="#" class="footer-button green">COMPRAR</a>			  
					<a href="#" class="footer-button green">JUGAR PARTIDA</a>
				</div>
				<div class="boton">
					<a href="#" class="footer-button orange">¡CONOCER!</a>
				</div>
              </div>
            </div>
          </div>
          <div class="col-lg-1 d-md-none d-lg-block"></div>

        </div>
        <div class="row">
          <div class="col-12">
            <div class="footer-info">
              <h3>¿Cómo puedo implementar Binnakle en mi empresa?</h3>
              <p>Comprando partidas on-line o vía los partners oficiales de Binnakle. En el caso
                de “Binnakle, The Expedition” podés comprar la maleta.</p>
              <p>Formando a facilitadores internos vía webinars o presencialmente vía los
                partners oficiales de Binnakle</p>
              <p>Contratando a los partners oficiales de Binnakle para que vengan a dinamizar
                sesiones o eventos</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>




  
    <section class="clientes">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center">NUESTROS CLIENTES DICEN</h2>
          </div>
        </div>
        <p><br></p>
        <div class="clientes-carousel">
          <div id="carouselClientesHome" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="slide-cliente">
                  <div class="icono">
                    <img src="images/clientes/45-gas-natural-fenosa.jpg">
                  </div>
  
                  <div class="comentario-detalle">
                    "Binnakle es una herramienta dinámica que permite iniciar a un equipo en la práctica de la innovación,
                    obteniendo planes de acción tangibles y prácticos"
                  </div>
                  <div class="comentario-firma">
                    Teresa Manobens, Corporate Talent Management Director
                  </div>
                </div>
              </div>
  
              <div class="carousel-item">
                <div class="slide-cliente">
                  <div class="icono">
                    <img src="images/clientes/70-rb.jpg">
                  </div>
  
                  <div class="comentario-detalle">
                    "Utilizar Binnakle ha sido una nueva manera de enfocar las oportunidades y retos dentro de nuestra
                    organización, generando unas dinámicas en el grupo de trabajo más potentes y rompedoras, con las que
                    hemos encontrado nuevas soluciones que difícilmente habrían aflorado en una sesión tradicional; sin
                    duda lo recomendaría para cualquier organización que quiera encontrar nuevas maneras de hacer las
                    cosas"
                  </div>
                  <div class="comentario-firma">
                    Xavier Bové, HR Advisor Compensation & Benefits
                  </div>
                </div>
              </div>
  
  
  
              <div class="carousel-item">
                <div class="slide-cliente">
                  <div class="icono">
                    <img src="images/clientes/55-ipsen.jpg">
                  </div>
  
                  <div class="comentario-detalle">
                    "Si ya éramos fans del proceso de innovación creativa, Binnakle nos ha
                    seducido!!! Te permite pensar en innovación de forma estructurada. La
                    gamificación hace eficiente el tiempo dedicado a buscar soluciones
                    creativas, y el trabajo en equipo es fluido. La producción es máxima, un
                    acierto!"
                  </div>
                  <div class="comentario-firma">
                    Gloria Tapias, Directora de Relaciones Institucionales y RSC.
                  </div>
                </div>
              </div>
  
              <div class="carousel-item">
                <div class="slide-cliente">
                  <div class="icono">
                    <img src="images/clientes/41-fagor.jpg">
                  </div>
  
                  <div class="comentario-detalle">
                    "Es sorprendente lo que un juego de mesa es capaz de generar, no solo
                    ideas originales sino un aterrizaje de las mismas. Todo muy estructurado,
                    dinámico, divertido y ágil. No hay que subestimar la expresión “juego de mesa”,
                    porque es algo muy serio y con un aporte de valor visible ya desde el minuto uno. Un
                    gran acierto adquirir la maleta Binnakle, con todo el kit de gran calidad. La
                    experiencia con Binnakle es única: los participantes lo recuerdan muy positivamente y
                    quieren volver a repetir con nuevos retos"
                  </div>
                  <div class="comentario-firma">
                    Yuri Noda, Organización e Innovación en Gestión
                  </div>
                </div>
              </div>
  
              <div class="carousel-item">
                <div class="slide-cliente">
                  <div class="icono">
                    <img src="images/clientes/92-manresa.jpg">
                  </div>
  
                  <div class="comentario-detalle">
                    "Binnakle ha constituido una metodología de trabajo que nos ha
                    permitido disponer de un proceso guiado y pautado favorecedor e
                    inspirador de creatividad e innovación. Además, realizándolo de forma
                    colaborativa y contando con las ventajas de la gamificación, lo que aumenta en
                    engagement de los profesionales en el proceso y en los propios resultados, y
                    contando con la supervisión, ayuda y colaboración de formadores expertos. Gracias!"
                  </div>
                  <div class="comentario-firma">
                    Óscar Dalmau, Responsable del Centro Internacional de Formación
                  </div>
                </div>
              </div>
  
              <div class="carousel-item">
                <div class="slide-cliente">
                  <div class="icono">
                    <img src="images/clientes/26-caixabank.jpg">
                  </div>
  
                  <div class="comentario-detalle">
                    "La experiencia de trabajar con Binnakle ha resultado un cambio
                    de valor como metodología de resolución de retos. El equipo de
                    Inteligencia Creativa nos ha facilitado la formación y el entreno de nuestro
                    personal de forma que ahora estamos preparados para utilizar la herramienta
                    dentro de nuestros procesos y en nuestra dinámica habitual de trabajo. Como
                    herramienta es muy flexible, fácil y divertida de utilizar. Además el material es
                    muy adecuado para trabajar durante las sesiones y para interiorizar el método.
                    Recomiendo la herramienta con total garantía de éxito en todas aquellas
                    empresas y equipos que necesiten realizar sesiones de resolución de problemas,
                    de revisión de retos, de planes de acción, de innovación…..mucho más eficientes
                    y orientadas al resultado"
                  </div>
                  <div class="comentario-firma">
                    Laura Lluhen, Directora de Recursos Humanos
                  </div>
                </div>
              </div>
  
              <div class="carousel-item">
                <div class="slide-cliente">
                  <div class="icono">
                  </div>
  
                  <div class="comentario-detalle">
                    "Uno de mis principales retos en los últimos dos años, ha sido el relanzamiento
                    de una nueva línea de negocio, de especial importancia para el futuro de la
                    compañía y donde es esencial contar con la alineación de objetivos y compromiso
                    de todas las áreas. En este propósito, el contar con Binnakle y la colaboración de
                    Inteligencia Creativa fue un éxito en la implicación y motivación de los equipos y
                    nos ayudó a sumar fuerzas y así lograr duplicar el negocio en el primer año y
                    conseguir mantener ritmos de crecimientos similares en los siguientes años"
                  </div>
                  <div class="comentario-firma">
                    Mónica Vilalta, Directora de Desarrollo Negocio
                  </div>
                </div>
              </div>
  
              <div class="carousel-item">
                <div class="slide-cliente">
                  <div class="icono">
                    <img src="images/clientes/33-danone.jpg">
                  </div>
  
                  <div class="comentario-detalle">
                    "Desde Danone Waters buscábamos un proveedor que nos ayudara a
                    poder trasladar las grandes líneas estratégicas de la Compañía a
                    proyectos muy tangibles y al mismo tiempo breaktrough. Binnakle
                    fue el partner escogido para co-construir junto a nuestros empleados qué
                    proyectos innovadores trabajar en nuestra división a través de la gamificación.
                    Seleccionamos empleados de todos los niveles y localizaciones (plantas, red de
                    ventas y oficinas centrales) para la sesión. Gracias a la metodología tan robusta
                    de Binnakle conseguimos imaginar ideas muy innovadoras y además es una
                    herramienta buenísima para institucionalizar el pensamiento creativo dentro de
                    nuestra organización. La sesión fue muy amena y contribuyó también a mejorar
                    nuestro team building!"
                  </div>
                  <div class="comentario-firma">
                    Mercé Griell,Human Resources Top Line Business Partner & Training
                    Manager
                  </div>
                </div>
              </div>
  
              <div class="carousel-item">
                <div class="slide-cliente">
                  <div class="icono">
                    <img src="images/clientes/99-zambom.jpg">
                  </div>
  
                  <div class="comentario-detalle">
                    "Para Zambon, Binnakle fue muy útil ya que movilizamos a toda la
                    compañía “jugando”, generamos multitud de ideas entre todos y
                    algunas se llevaron a cabo. Generar ideas y competir es una buena combinación
                    porque el espíritu competitivo es un acelerador para las ideas. Y el concepto
                    cocodrilo para controlar a los “asesinos de ideas” ha calado en la organización"
                  </div>
                  <div class="comentario-firma">
                    Santos Álvarez, Human Relation Anna Fusté<br>
                    Ventas Miembros del Hub de Innovación de Zambon
                  </div>
                </div>
              </div>
  
  
  
  
  
            </div>
            <a class="carousel-control carousel-control-prev" href="#carouselClientesHome" role="button"
              data-slide="prev">
              <i class="fa fa-chevron-left"></i>
            </a>
            <a class="carousel-control carousel-control-next" href="#carouselClientesHome" role="button"
              data-slide="next">
              <i class="fa fa-chevron-right"></i>
            </a>
          </div>
        </div>
  
      </div>
    </section>





    <section class="explicanos-tus-retos">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center">EXPLÍCANOS TUS RETOS</h2>
          </div>
        </div>
        </div>
    </section>
  










    <form action="contacto.html" method="GET">
      <section class="page contacto">
       
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-12 col-md-6 fondo-azul">
                      <h1 class="page-title">CONTACTA CON NOSOTROS</h1>
                      <div class="contact-form-left">

                          <div class="form-group row">
                              <label for="nombre" class="col-sm-3 col-form-label">Nombre*</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" name="nombre" id="nombre"
                                      placeholder="Nombre" value="">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="apellido" class="col-sm-3 col-form-label">Apellido*</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" name="apellido" id="apellido"
                                      placeholder="Apellido">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="empresa" class="col-sm-3 col-form-label">Empresa*</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" name="empresa" id="empresa"
                                      placeholder="Empresa">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="pais" class="col-sm-3 col-form-label">Pais*</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" name="pais" id="pais" placeholder="Pais">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="cargo" class="col-sm-3 col-form-label">Cargo</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Cargo">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email" class="col-sm-3 col-form-label">E-mail*</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" name="email" id="email"
                                      placeholder="E-mail">
                              </div>
                          </div>

                          <div class="form-group-campos-obligatorios">
                              <p class="campos-obligatorios">* Campos obligatorios</p>
                          </div>

                      </div>
                  </div>

                  <div class="col-12 col-md-6">
                      <div class="contact-form-right align-middle">

                          <div class="form-group">
                              <label for="textareaComentario" class="textarea-comentario-label">Comentario</label>
                              <textarea class="form-control textarea-comentario" name="comentario"
                                  id="textareaComentario" rows="3"></textarea>
                          </div>

                          <div class="form-check checkbox-politica">
                              <input class="form-check-input" type="checkbox" value="" name="politica" id="politica">
                              <label class="form-check-label" for="politica">
                                  He leído y acepto la política de privacidad
                              </label>
                          </div>

                          <button type="submit" class="btn btn-primary btn-azul float-right">ENVIAR</button>

                      </div>
                  </div>
              </div>
          </div>

      </section>

  </form>

<?php endif; ?>



<section class="footer">
    <div class="footer-bottom">
      <p>@Binnakle innovation Games 2018</p>
      <ul>
        <li>
          <a href="#">Términos y condiciones</a>
        </li>
        <li class="separador">|</li>
        <li>
          <a href="#">Política de privacidad</a>
        </li>
        <li class="separador">|</li>
        <li>
          <a href="#">Política de cookies</a>
        </li>
      </ul>
    </div>
  </section>



<?php require('analyticstracking.php');?>




</body>
</html>