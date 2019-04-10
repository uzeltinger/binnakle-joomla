

<?php
JHtml::_('behavior.modal', 'a.galery-modal');
/*
echo '<pre>';
print_r($this->items);
echo '</pre>';
*/

if($this->category->id == 12){
    echo $this->loadTemplate('galeria'); 
}
if($this->category->id == 10){
    echo $this->loadTemplate('medios'); 
}
/*
echo '<pre>';
print_r($this->category);
echo '</pre>';
*/
?>