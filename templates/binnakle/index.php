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
                <div class="nuestro-serius-game-mobile">
                    <a class="juego_theexpedition_open_submenu link-juego <?php if(JRequest::getInt('Itemid') == 108){ echo ' active';} ?>" href="./binnakle-the-expedition.html">BINNAKLE<br>THE EXPEDITION</a>
                        <ul class="serious-games-submenu dropdown-menu juego_theexpedition_submenu">
                          <li class="nav-item item-112"><a href="/binnakle-the-expedition.html">Conocer</a></li>
                          <li class="nav-item item-112"><a href="#">Comprar</a></li>
                          <li class="nav-item item-112"><a href="#">Jugar</a></li>
                        </ul>
                </div>
                <div class="nuestro-serius-game-mobile last">
                  <a class="juego_mission0_open_submenu link-juego link-juego-last <?php if(JRequest::getInt('Itemid') == 109){ echo ' active';} ?>" href="./binnakle-mission-0.html">BINNAKLE<br>MISSION 0</a>
                    <ul class="serious-games-submenu dropdown-menu juego_mission0_submenu">
                      <li class="nav-item item-112"><a href="/binnakle-mission-0.html">Conocer</a></li>
                      <li class="nav-item item-112"><a href="#">Comprar</a></li>
                      <li class="nav-item item-112"><a href="#">Jugar</a></li>
              </div>
            </div>
            <div class="link-juegos-tablet">
                <a class="juego_theexpedition_open_submenu link-juego <?php if(JRequest::getInt('Itemid') == 108){ echo ' active';} ?>" href="./binnakle-the-expedition.html">BINNAKLE<br>THE EXPEDITION</a>
                    <ul class="serious-games-submenu dropdown-menu juego_theexpedition_submenu">
                      <li class="nav-item item-112"><a href="/binnakle-the-expedition.html">Conocer</a></li>
                      <li class="nav-item item-112"><a href="#">Comprar</a></li>
                      <li class="nav-item item-112"><a href="#">Jugar</a></li>
                    </ul>
                <a class="juego_mission0_open_submenu link-juego link-juego-last <?php if(JRequest::getInt('Itemid') == 109){ echo ' active';} ?>" href="./binnakle-mission-0.html">BINNAKLE<br>MISSION 0</a>
                    <ul class="serious-games-submenu dropdown-menu juego_mission0_submenu">
                      <li class="nav-item item-112"><a href="/binnakle-mission-0.html">Conocer</a></li>
                      <li class="nav-item item-112"><a href="#">Comprar</a></li>
                      <li class="nav-item item-112"><a href="#">Jugar</a></li>
            </div>
            <div class="link-juegos-descktop">
                <div class="nuestros-serius-games">NUESTROS <br>SERIOUS GAMES:</div>
                <div class="fondo-diagonal"></div>
                <div class="nuestro-serius-game">
                    <a class="link-juego link-juego-theexpedition <?php if(JRequest::getInt('Itemid') == 108){ echo ' active';} ?>" href="./binnakle-the-expedition.html">BINNAKLE <br>THE EXPEDITION</a>
                    <ul class="serious-games-submenu dropdown-menu">
                      <li class="nav-item item-112"><a href="/binnakle-the-expedition.html">Conocer</a></li>
                      <li class="nav-item item-112"><a href="#">Comprar</a></li>
                      <li class="nav-item item-112"><a href="#">Jugar</a></li>
                    </ul>
                </div>
                <div class="nuestro-serius-game">
                    <a class="link-juego link-juego-last link-juego-theexpedition <?php if(JRequest::getInt('Itemid') == 109){ echo ' active';} ?>" href="/binnakle-mission-0.html">BINNAKLE <br>MISSION 0</a>
                    <ul class="serious-games-submenu dropdown-menu">
                      <li class="nav-item item-112"><a href="/binnakle-mission-0.html">Conocer</a></li>
                      <li class="nav-item item-112"><a href="#">Comprar</a></li>
                      <li class="nav-item item-112"><a href="#">Jugar</a></li>
                    </ul>
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

<?php if ($this->countModules('bottom-content')) : ?>
  <div class="bottom-content">
    <jdoc:include type="modules" name="bottom-content" style="raw" />
  </div>
<?php endif; ?>

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
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center binnakle-combina">BINAKLE COMBINA</h2>
        </div>
      </div>
    </div>
    <div class="container-fluid combina-content">
      <div class="row">
        <div class="col-5 d-none d-xl-block">
          <p>Metodología Contrastada</p>
        </div>
        <div class="col-2 d-none d-xl-block">
          <p class="text-center">+</p>
        </div>
        <div class="col-5 d-none d-xl-block">
          <p>Beneficios de la Gamificación</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-xl-7">
          <p class="text-center d-xl-none">Metodología Contrastada</p>
          <img class="img-fluid" src="images/funnel-innovacion-binnakle.png">
        </div>
        <div class="col-12 col-xl-5">
          <p class="text-center d-xl-none">+</p>
          <p class="text-center d-xl-none">Beneficios de la Gamificación</p>
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
        <div class="clientes-carousel">
          <div id="carouselClientesHome" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <?php if ($this->countModules('nuestros_clientes_dicen')) : ?>
              
                  <jdoc:include type="modules" name="nuestros_clientes_dicen" style="raw" />
              
            <?php endif; ?>  
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

    <form action="contacto.html" method="GET" class="form-explicanos-tus-retos">
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

  <button onclick="topFunction()" id="goTop" class="goTop" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>

<?php require('analyticstracking.php');?>
<div class="modal fade menuvideo" id="bootstrap-modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div id="demo-modal">
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/GHe3RflF9ZA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>            
        </div>
    </div>
</div>

</body>
</html>