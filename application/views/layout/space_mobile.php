<div class="catalog_layout">
<?php 
$CI =& get_instance();
$widgets_mobile = $CI->Widget_model->mobile();
    echo $widgets_mobile->value;
?>  
</div>