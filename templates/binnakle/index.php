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
$doc->addStyleSheet('templates/'.$this->template.'/css/font-awesome.min.css');
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
$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.min.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/style.css');

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
    
    <header id="header" class="header">            
        <nav class="navbar navbar-expand-md navbar-light container-menu-all">
            <a class="navbar-brand" href="./">
                <img class="logo-superior" src="/images/logo.jpg" alt="logo">
                <img class="logo-superior-min" src="/images/logo.jpg" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <jdoc:include type="modules" name="navmenu" />
            </div>
        </nav>
    </header>
    
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

<?php if (JRequest::getInt('Itemid') == 101 ) : 

endif; ?>

<jdoc:include type="message" />

<div class="container main_container main_container-itemid-<?php echo JRequest::getInt('Itemid');?>">       
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
		$contentClass = 'col-md-12';
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

<div class="row">
<div class="main_content <?php echo $contentClass;?>">
	<div class="position_component">	
			<jdoc:include type="component" />
 	</div>
</div>  
<?php endif; ?>

<?php if ($this->countModules('right')) { ?>
	<div class="sidebar sidebar-right col-xs-12 col-sm-12  col-md-4 ">
		<jdoc:include type="modules" name="right" style="xhtml" />
	</div>
<?php 	}?>

</div>    <!--	row	-->
</div>    <!--	container	-->    



<?php if ($this->countModules('bottom')) { ?>
	<div class="bottom">
		<jdoc:include type="modules" name="bottom" style="xhtml" />
	</div>
<?php 	}?>


<section class="footer">
    <div class="footer">

        <div class="container-fluid footer-content">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 ml-auto">
                    
                </div>                
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">                        
					
                </div>                               
            </div>
        </div> 
    </div>
</section>    
<jdoc:include type="modules" name="sidebar" style="xhtml" />    
<jdoc:include type="modules" name="breadcrumbs" style="xhtml" />
<jdoc:include type="modules" name="footer" style="none" />
<?php require('analyticstracking.php');?>

<?php
/*
echo '<script src="templates/'.$this->template.'/js/jquery-3.2.1.slim.min.js"></script>';
echo '<script src="templates/'.$this->template.'/js/jquery-noconflict.js"></script>';
echo '<script src="templates/'.$this->template.'/js/popper.min.js"></script>';
echo '<script src="templates/'.$this->template.'/js/bootstrap.min.js"></script>';
echo '<script src="templates/'.$this->baseurl.'/media/com_properties/prettyPhoto_compressed_316/js/jquery.prettyPhoto.js"></script>';
if(isset($doc->_scripts[$this->baseurl.'/media/com_properties/prettyPhoto_compressed_316/js/jquery.prettyPhoto.js']))
	{
	unset($doc->_scripts[$this->baseurl.'/media/com_properties/prettyPhoto_compressed_316/js/jquery.prettyPhoto.js']);
	//$doc->addScript($this->baseurl.'/media/com_properties/prettyPhoto_compressed_316/js/jquery.prettyPhoto.js');
    
    } 
    
echo '<script src="templates/'.$this->template.'/js/main.js"></script>';
*/
?>

</body>
</html>