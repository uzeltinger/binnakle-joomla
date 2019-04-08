<?php
JHtml::_('behavior.modal', 'a.galery-modal');
/*
echo '<pre>';
print_r($this->items);
echo '</pre>';
*/
?>
<style>
.modal-dialog-video {
    min-width: 640px;
}
.galery-modal-video {
    cursor: pointer;
}
   </style> 
<section class="page galerias">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-title">GALERÍA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p> </p>
                <p> </p>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($this->items as $i => $article) :
                if ($this->items[$i]->state == 0) :
//$articleLink = JRoute::_(ContentHelperRoute::getArticleRoute($article->slug, $article->catid, $article->language));
                endif;
                $modalLink = "";
                $modalLinkVideo = "";
                $urls = json_decode($article->urls);
                $images  = json_decode($article->images);

                if (isset($images->image_intro) && !empty($images->image_intro)) :
                    $articleImage = '<img src="'.htmlspecialchars($images->image_intro).'" />';
                    $class = "";
                endif;
                
                if ($urls && (!empty($urls->urla) || !empty($urls->urlb) || !empty($urls->urlc))) :
                    //$urls->urla, $urls->urlatext, $urls->targeta
                    $modalLinkVideo = $urls->urla;
                    $class = "galery-modal-video";
                endif;                
    
                if (isset($images->image_fulltext) && !empty($images->image_fulltext)) :
                    $modalLink = JURI::base().htmlspecialchars($images->image_fulltext);
                    $class = "galery-modal";
                endif; ?>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="galeria">

                        <?php if($modalLink!=""){?>
                        <a href="<?php echo $modalLink?>" class="<?php echo $class;?>">
                            <?php echo $articleImage;?>
                        </a>
                        <?php } ?>

                        <?php if($modalLinkVideo!=""){?>
                        <a url-video="<?php echo $modalLinkVideo?>" class="<?php echo $class;?>">
                            <?php echo $articleImage;?>
                        </a>
                        <br>
                        <p class="video-title text-center"><?php echo $article->title;?></p>
                        <?php } ?>

                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</section>

<div class="modal fade" id="modalGalery" role="dialog">
    <div class="modal-dialog modal-dialog-video">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="galeria-modal-body"> 
                <iframe id="modalIframe" width="560" height="315" src="http://binnakle.joomla/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>                

<script>

jQuery( document ).ready(function() {
  jQuery(".galery-modal-video").click(function(event ) { 
      event.preventDefault();
      var link = jQuery(event.currentTarget).attr("href");
    console.log(link);
      var urlvideo = jQuery(event.currentTarget).attr("url-video");
    console.log("urlvideo",urlvideo);

    jQuery("#modalGalery").modal();

    var modalBody = jQuery('#modalGalery').find('.galeria-modal-body');
    modalBody.find('iframe').remove();
	modalBody.prepend('<iframe src="'+urlvideo+'" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
	  
    //  jQuery("#modalIframe").attr('src', urlvideo)
    //jQuery("#ja").attr('src', link)
      
  });
});
</script>
