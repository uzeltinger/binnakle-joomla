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
    
    endif;
    echo '<div class="col-12 col-sm-6 col-lg-3">
    <div class="galeria">';
    echo $article->introtext;
    echo '</div>
    </div>';

endforeach;
?>
        </div>
    </div>
</section>